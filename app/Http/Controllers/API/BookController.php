<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::get();
        if ($books->count() > 0)
        {
            return BookResource::collection($books);
        }
        else
        {
            return response()->json(['message' => 'No record available'], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
             'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'published' => 'required|integer',
            'status' => 'required|string|max:255'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'message'=> 'All fields are mandetory',
                'error'=> $validator->messages(),
            ],422);
        }

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'category' =>  $request->category,
            'published' =>  $request->published,
            'status' =>  $request->status,
        ]);

        return response()->json([
            'message'=> 'Book Created Successfully',
            'data'=> new BookResource($book)
        ],200);
    }
    public function show(Book $book)
    {
        return new BookResource($book);

    }
    public function update(Request $request, Book $book)
    {
         $validator = Validator::make($request->all(), [
             'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'published' => 'required|integer',
            'status' => 'required|string|max:255'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'message'=> 'All fields are mandetory',
                'error'=> $validator->messages(),
            ],422);
        }

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'category' =>  $request->category,
            'published' =>  $request->published,
            'status' =>  $request->status,
        ]);

        return response()->json([
            'message'=> 'Book Updated Successfully',
            'data'=> new BookResource($book)
        ],200);
    }
    public function destroy(Book $book)
    {
        $book->delete();
        
        return response()->json([
            'message'=> 'Book Deleted Successfully',
        ],200);
    }

}

