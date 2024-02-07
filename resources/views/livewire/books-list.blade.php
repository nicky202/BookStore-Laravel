
    <div class="row row-gap-5">
        <div class="form col-12 col-sm-5">
            <form action="">
                <div class="mb-3">
                    <label for="title" class="form-label">
                        Titre
                    </label>
                    <input type="text" class="form-control" wire:model="state.title" id="title" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">
                        Auteur
                    </label>
                    <input type="text" class="form-control" wire:model="state.author" id="author" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">
                        Déscription
                    </label>
                    <textarea type="text" class="form-control" wire:model="state.description" id="description" placeholder="" cols="30" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">
                        Image
                    </label>
                    <input type="file" class="form-control" wire:model="state.image" id="image" placeholder="">
                </div>
                <div class="mb-3">
                    <button class="btn btn-secondary" type='reset' wire:click.prevent="cancel">Annuler</button>
                    @if ($updateMode)
                    <button type="submit" wire:click.prevent="update" class="btn btn-primary">Mettre à jour</button>
                    @else
                    <button type="submit" wire:click.prevent="store" class="btn btn-primary">Enregistrer</button>
                    @endif
                </div>
            </form>
        </div>
        <div class="col-12 col-sm-7">
            <h3>Liste des livres</h3>
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Titre</th>
                        <th scope='col'>Auteur</th>
                        <th scope='col'>Etat</th>
                        <th scope='col'>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <th scope='row'>{{$book->id}}</th>
                        <th>{{$book->title}}</th>
                        <th>{{$book->author}}</th>
                        <th>
                            @if(!$book->is_borrowed)
                            <span>Disponible</span>
                            @else
                            <span>Non disponible</span>
                            @endif
                        </th>
                        <th class="d-flex gap-2 flex-wrap">
                            <button class="btn btn-warning btn-sm" type="button"
                                wire:click.prevent="edit({{$book->id}})">Modifier</button>
                            <button class="btn btn-danger btn-sm" type="button"
                                wire:click.prevent="delete({{$book->id}})">Supprimer</button>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class=" col-12">
            <h3>Suivi des livres empruntés</h3>
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Titre(Auteur)</th>
                        <th scope='col'>Date d'emprunt</th>
                        <th scope='col'>Emprunté par</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($borrowedBooks as $borrowedBook)
                    <tr>
                        <th scope='row'>{{$borrowedBook->id}}</th>
                        <th>{{$borrowedBook->book->title}} ({{$borrowedBook->book->author}})</th>
                        <th>{{$borrowedBook->borrowed_at}} </th>
                        <th>{{$borrowedBook->user->name}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class=" col-12">
            <h3>Suivi des livres rendus</h3>
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Titre(Auteur)</th>
                        <th scope='col'>Date du rendu</th>
                        <th scope='col'>Rendu par</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($returnBooks as $returnBook)
                    <tr>
                        <th scope='row'>{{$returnBook->id}}</th>
                        <th>{{$returnBook->book->title}} ({{$returnBook->book->author}})</th>
                        <th>{{$returnBook->returned_at}} </th>
                        <th>{{$returnBook->user->name}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

