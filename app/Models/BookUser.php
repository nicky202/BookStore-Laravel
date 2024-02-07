<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookUser extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id',
        'book_id',
        'borrowed_at',
        'returned_at',
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function book(){
        return $this->belongsTo(Book::class,'book_id');
    }



}
