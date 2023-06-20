<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class ShowBooks extends Component
{
    use WithPagination;

    public function render()
    {
        $books = Book::paginate(10);

        return view('livewire.show-books', compact('books'));
    }
}
