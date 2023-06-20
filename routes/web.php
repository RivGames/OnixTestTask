<?php

use App\Http\Livewire\ShowBooks;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowBooks::class)->name('books.index');
