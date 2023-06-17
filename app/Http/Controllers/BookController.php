<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\View\View;

class BookController extends Controller
{
    /**
     * Display all books 10 per page
     * @return View
     */
    public function index(): View
    {
        $books = Book::query()->select(['title','author','publication_year','publisher','isbn'])->paginate(10);

        return view('books',compact('books'));
    }
}
