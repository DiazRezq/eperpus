<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookAdminController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('pages.admin.books', compact('books'));
    }

    public function edit()
    {
        return view('pages.admin.edit-books');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
