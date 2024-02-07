<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{

    //Récuperer un seul livre
    public function show($id){
        $book = Book::find($id);
        return view('book.show',['book'=>$book]);
    }

    public function index(){
        return view('book.books');
    }
}