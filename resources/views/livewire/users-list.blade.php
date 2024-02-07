<div>
    <div class="row">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nom de l'utilisateur</th>
                    <th scope='col'>Adresse Email</th>
                    <th scope='col'>Status</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                @if(!$user->is_admin)
                <tr>
                    <th scope='row'>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>
                        @if($user->is_active)
                        <span>activé</span>
                        @else
                        <span>désactivé</span>
                        @endif
                    </th>
                    <th>
                        <button class="btn btn-outline-success btn-sm" type="button"
                            wire:click.prevent="update({{$user->id}})">
                        @if(!$user->is_active)
                        <span>Activer</span>
                        @else
                        <span>Désactiver</span>
                        @endif
                        </button>
                        <button class="btn btn-danger btn-sm" type="button"
                            wire:click.prevent="deleteUser({{$user->id}})">Supprimer</button>
                    </th>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>