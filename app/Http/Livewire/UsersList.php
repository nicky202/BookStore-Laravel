<?php

namespace App\Http\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class UsersList extends Component
{

    public $users;
    public $state = [];

    public function mount(){
        $this->users = User::all();
    }

    //Activer l'utilisateur
    public function update($id){
        $this->updateMode = true;

        $user = User::find($id);

        $user->update([
            'is_active'=>!$user->is_active,
        ]);

        $this->updateMode = false;
        $this->reset('state');
        $this->users = User::all();
    }

    //Supprimer l'user
    public function deleteUser($id){
        $user = User::find($id);

        $user->borrowedBooks()->detach();
        $user->delete();

        $this->users = User::all();

        // if($id){
        //     User::find($id)->borrowedBooks()->detach()->delete();
        //     $this->books = User::all();
        // }
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.users-list',['users'=>$users]);
    }
}