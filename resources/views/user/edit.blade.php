@extends('layouts.app')

@section('title')
    Mon compte
@endsection

@section('content')
    <main class="containerProfil">
        <h1>Mon compte</h1>

        <h3 class="pb-3"></h3>
        <div class="row">

            <form action="{{ route('users.update', $user)}}" class="col-4 mx-auto" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="pseudo">Nouveau pseudo</label>
                    <input required type="text" class="form-control" placeholder="modifier" name="pseudo" value="{{ $user->pseudo }}" id="pseudo">
                </div>

                <div class="form-group">
                    <label for="image">Nouvelle image</label>
                    <input required type="text" class="form-control" placeholder="modifier" name="image" value="{{ $user->image }}" id="image">
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
        <div class="container-fluid text-center">
            @if(session()->has('message'))
            <p class="alert alert-success">
                {{ session()->get('message') }}
            </p>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($error->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ route('users.destroy', $user)}}" method="POST">
            @csrf
            @method("delete")
                <button type="submit" class="btn btn-danger">Supprimer le compte</button>
        </form>
    </main>
@endsection