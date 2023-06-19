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
        return view('books',['books' => Book::all()]);
    }
}
