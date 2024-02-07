<div class="row">
    @foreach($borrowedBooks as $book)
    @if($book->is_borrowed)
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="{{ asset('storage/'.($book->image ))  }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{$book-> title }}</h2>
                <p class="card-text">{{$book -> author }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Regarder</button>
                        <button type="button" class="btn btn-sm btn-outline-success"
                            wire:click='returnBook({{$book->id }})'>Rendre le livre</button>
                    </div>
                    {{-- <small class="text-muted">9 mins</small> --}}
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>