<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class BorrowedBooks extends Component
{

    public $borrowedBooks;

    public function mount(){
        $this->borrowedBooks = auth()->user()->borrowedBooks()->wherePivot('returned_at',null)->get();
    }

    //Rendre un livre en ajoutant la date actuelle
    public function returnBook($bookId){
        auth()->user()->borrowedBooks()->updateExistingPivot($bookId,['returned_at'=>now()]);

        Book::find($bookId)->update([
            'is_borrowed'=>false,
        ]);

        $this->borrowedBooks = auth()->user()->borrowedBooks()->wherePivot('returned_at',null)->get();

    }

    public function render()
    {

        return view('livewire.borrowed-books');
    }
}
