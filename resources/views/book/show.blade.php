@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{url()->previous()}}" class="my-3 btn text-decoration-underline">Revenir à la liste</a>
        <div class="row" style="margin: 4rem 0">
            <div class="col-md-5">
                <img class="imgBook rounded" src="{{ asset('storage/'.$book-> image) }}" alt="Card image cap" width="100%" height="100%">
            </div>
            <div class="col-md-5">
                <h2 class="card-title">{{$book-> title}}</h2>
                <p class="card-text">{{$book -> author}}</p>
                <span style="font-weight: 600;text-decoration: underline">Description:</span> 
                <p>
                    {{$book->description}}
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        @if(auth()->user()->is_active)
                        <button type="button" class="btn btn-sm btn-outline-success"
                            wire:click='borrowedBook({{$book->id}})'>Emprunter</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


