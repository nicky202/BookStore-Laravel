<?php

namespace App\Http\Livewire;


use App\Models\Book;
use App\Models\BookUser;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class BooksList extends Component
{


    use WithFileUploads;

    public $books;
    public $state = [];

    public $updateMode = false;

    public function mount(){
        $this->books = Book::orderBy('id','desc')->get();
    }

    private function resetInputFields(){
        $this->reset('state');
    }

    //Création d'un livre
    public function store(){

        $validator = Validator::make($this->state,[
            'title'=> 'required',
            'author'=> 'required',
            'description'=> 'required',
            'image'=>'required|image',
        ])->validate();


        $this->state = [
            'title'=> $this->state['title'],
            'author'=> $this->state['author'],
            'description'=> $this->state['description'],
            'image'=> $this->state['image']->store('images','public')
        ];

        
        Book::create($this->state);
        $this-> reset('state');
        $this->books = Book::orderBy('id','desc')->get();
    }

    //Récupere les valeurs d'un livre
    public function edit($id){
        $this->updateMode = true;

        $book = Book::find($id);


        $this->state = [
            'id'=> $book->id,
            'title'=> $book->title,
            'author'=> $book->author,
            'description'=> $book->description,
        ];
    }

    //Annuler la modification
    public function cancel(){
        $this->updateMode = false;
        $this->reset('state');
    }
    
    //Modifier un livre
    public function update(){
        $validator = Validator::make($this->state,[
            'title'=>'required',
            'author'=>'required',
        ])->validate();

        if($this-> state['id']){
            $book = Book::find($this->state['id']);
            $book->update([
                'title'=>$this->state['title'],
                'author'=>$this->state['author'],
                'description'=>$this->state['description'],
            ]);

            $this->updateMode = false;
            $this->reset('state');
            $this->books = Book::orderBy('id','desc')->get();
        }
    }

    //Effacer un livre
    public function delete($id){
        if($id){
            Book::where('id',$id)->delete();
            $this->books = Book::orderBy('id','desc')->get();
        }
    }

    public function render()
    {
        
        $borrowedBooks = BookUser::orderBy('id','desc')->with(['user','book'])->whereNotNull('borrowed_at')->orWhereNull('returned_at')->get();

        $returnBooks = BookUser::orderBy('id','desc')->with(['user','book'])->whereNotNull('returned_at')->get();

        return view('livewire.books-list',['borrowedBooks'=>$borrowedBooks,'returnBooks'=>$returnBooks  ]);
    }
}