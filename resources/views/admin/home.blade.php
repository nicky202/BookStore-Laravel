@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3>Liste des utilisateurs</h3>
                    <div class="my-2">
                        @livewire('users-list')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Livres</h2>
                </div>
                <div class="card-body">
                    @livewire('books-list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@livewireScripts