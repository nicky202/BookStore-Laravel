@extends('layouts.app')

@section('content')
@include('layouts.header')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 mb-5 py-4 row">
            <div class="d-flex align-items-center justify-content-center flex-column">
                <div class="p-4">
                    <img src="{{asset('images/1274510.jpg')}}" alt="" width="100%" height="100%" class="rounded">
                </div>
                <h5 class="text-sm text-center">"Se plonger dans un livre, c'est voyager sans quitter son fauteuil."
                </h5>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-5 py-4 row">
            <div class="d-flex align-items-center justify-content-center flex-column">
                <div class="p-4">
                    <img src="{{asset('images/1274510.jpg')}}" alt="" width="100%" height="100%" class="rounded">
                </div>
                <h5 class="text-sm text-center">"Lire, c'est s'évader vers des mondes imaginaires, un voyage entre les
                    lignes."</h5>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-5 py-4 row">
            <div class="d-flex align-items-center justify-content-center flex-column">
                <div class="p-4">
                    <img src="{{asset('images/1274510.jpg')}}" alt="" width="100%" height="100%" class="rounded">
                </div>
                <h5 class="text-sm text-center">"Les livres sont des amis silencieux qui parlent lorsque les autres se
                    taisent."</h5>
            </div>
        </div>
    </div>
    <div class="row">
        <h1 class="col-12 text-center">Nouveautés</h1>
        @livewire('all-books',['limit'=>3])
    </div>

</div>
@endsection