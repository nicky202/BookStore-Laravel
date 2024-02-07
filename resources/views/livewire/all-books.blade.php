<div class="row">
    @foreach($books as $book)
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="{{ asset('storage/'.$book-> image) }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{$book-> title}}</h2>
                <p class="card-text">{{$book -> author}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"><a href="{{route('book.show',['id'=>$book->id])}}" class="btn btn-sm btn-outline-secondary">Regarder</a>
                        
                        @if(auth()->user()->is_active)
                            @if($book-> is_borrowed)
                            <button type="button" class="btn btn-sm btn-outline-success" disabled>Non disponible</button>
                            @else
                            <button type="button" class="btn btn-sm btn-outline-success"
                            wire:click='borrowedBook({{$book->id}})'>Emprunter</button>
                            @endif
                        @endif
                    </div>
                    {{-- <small class="text-muted">9 mins</small> --}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>