<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Borrow;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    public function borrow(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'due_at' => 'date|after:today',
        ]);

        $book = Book::findOrFail($request->book_id);

        // Optional: Check if book is available
        if ($book->available_copies <= 0) {
            return response()->json(['message' => 'Book is not available'], 400);
        }

        // Create borrow record
        $borrow = Borrow::create([
            'user_id' => Auth::id(),
            'book_id' => $book->id,
            'borrowed_at' => now(),
            'due_at' => $request->due_at,
        ]);

        // Decrease book stock
        $book->available_copies -= 1;
        $book->save();

        return response()->json(['message' => 'Book borrowed successfully', 'data' => $borrow]);
    }

    public function returnBook(Request $request)
    {
        $request->validate([
            'borrow_id' => 'required|exists:borrows,id',
        ]);

        $borrow = Borrow::where('id', $request->borrow_id)
            ->where('user_id', Auth::id())
            ->whereNull('returned_at')
            ->first();

        if (!$borrow) {
            return response()->json(['message' => 'Borrow record not found or already returned'], 404);
        }

        $borrow->returned_at = now();
        $borrow->save();

        // Increase book stock
        $borrow->book->available_copies += 1;
        $borrow->book->save();

        return response()->json(['message' => 'Book returned successfully']);
    }

    public function myBorrows()
    {
        $borrows = Borrow::with('book')->where('user_id', Auth::id())->get();
        return response()->json($borrows);
    }
}
