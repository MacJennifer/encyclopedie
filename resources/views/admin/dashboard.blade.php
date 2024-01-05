@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('home') }}">
        <img src="{{ asset('assets/images/logoHero.png')}}" alt="accueil"  style="width: 100px; height: auto;">
     </a>
    <h1 class="titleH2">Tableau de bord administrateur</h1>
    <a href="{{ route('admin.create') }}" class="btn btn-primary mt-3 mb-3 float-md-end">Créer un héros</a>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                   <h2>Utilisateurs</h2>
                </div>
                <div class="card-body">
                    @foreach($users as $user)
                    <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3>{{ $user->name }}</h3>

                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if(Auth::user()->id !== $user->id)
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>

                            @endif
                    </form>
                </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Héros</h2>
                </div>
                <div class="card-body">
                    @foreach($heroes as $hero)
                    <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3>{{ $hero->name }}</h3>

                    <div>
                        <a href="{{ route('admin.edit', $hero->id) }}" class="btn btn-primary btn-sm mb-2">Modifier</a>


                    <form action="{{ route('admin.destroyHeroes', $hero->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mb-2">Supprimer</button>
                    </form>
                </div>
                </div>
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
