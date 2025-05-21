<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'borrowed_at',
        'due_at',
        'returned_at'
    ];

    // Each borrow belongs to a book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    // Each borrow belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}