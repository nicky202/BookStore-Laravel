<div class="position-relative">
    <input type="text" wire:model="search" placeholder="Recherche..." class="form-control">
    @if($search !== "")
    <ul class="card position-absolute list-unstyled w-100 top-10 my-2 searchResult" style="z-index: 1001" >
        @foreach($books as $book)
        <li>
            <a href="{{route('book.show',['id'=>$book->id])}}">
                <img src="{{asset('storage/'.$book->image)}}" alt="{{ $book->title }}" width="40px" height="40px" class="rounded">
                <p>
                    {{ $book->title }}
                    <span>{{$book->author}}</span>
                </p>
            </a>
        </li>
        @endforeach
    </ul>
    @endif
</div>