<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;


class SearchBox extends Component
{

    public $search ="";


    public function render()
    {
        //Récuperer les livres, ayant le titre ou auteur saisi dans la variable $search
        $books = Book::where('title','like','%' .$this->search .'%' )->orWhere('author','like','%' .$this->search .'%' )->get();

        return view('livewire.search-box',[
            'books'=> $books,
        ]);
    }
}