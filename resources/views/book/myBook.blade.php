@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>Mes livres</h1>
        <div class="row my-5">
            <div class="col-md-6 col-12">
                <h4>Recherche</h4>
                @livewire('search-box')
            </div>
        </div>
        @livewire('borrowed-books')
        
    </div>
    @livewireScripts
@endsection