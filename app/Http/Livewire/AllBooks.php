<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\BookUser;
use Illuminate\Support\Facades\Validator;


class AllBooks extends Component
{

    public $books;
    public $limit = null;

    public function mount(){
        //Limiter les livres à afficher
        $booksquery = Book::orderBy('id','desc'); 
        if($this->limit !== null){
            $booksquery->take($this->limit);
        }
        $this->books = $booksquery->get();
    }

    //fonction pour l'ajout de nouvelle emprunt
    public function borrowedBook($idBook){

        //créer un bookUser 
        BookUser::create([
            'user_id'=>auth()->user()->id,
            'book_id'=>$idBook,
            'borrowed_at'=>now(),
        ]);

        //Modifier is_borrowed par true
        Book::find($idBook)->update([
            'is_borrowed'=> true,
    ]);

        $this->render();
        return redirect()->to('/mybook');
    }


    public function render()
    {
        //Limiter les livres à afficher
        $booksquery = Book::orderBy('id','desc'); 
        if($this->limit !== null){
            $booksquery->take($this->limit);
        }
        $books = $booksquery->get();

        return view('livewire.all-books',['books'=>$books]);
    }
}
