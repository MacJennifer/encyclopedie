@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tableau de bord administrateur</h2>
    <a href="{{ route('admin.create') }}" class="btn btn-primary mt-3 mb-3 float-md-end">Créer un héros</a>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Utilisateurs
                </div>
                <div class="card-body">
                    @foreach($users as $user)
                    <p>{{ $user->name }}</p>

                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if(Auth::user()->id !== $user->id)
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            @endif
                    </form>
                @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Héros
                </div>
                <div class="card-body">
                    @foreach($heroes as $hero)
                    <p>{{ $hero->name }}</p>
                    <p>
                        <a href="{{ route('admin.edit', $hero->id) }}" class="btn btn-primary">Modifier</a>
                    </p>

                    <form action="{{ route('admin.destroyHeroes', $hero->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    @if(session('hero-success'))
    <div class="alert alert-success">
        {{ session('hero-success') }}
    </div>
@endif
        @if(session('user-success'))
                    <div class="alert alert-success">
                        {{ session('user-success') }}
                    </div>
 @endif
</div>
@endsection
