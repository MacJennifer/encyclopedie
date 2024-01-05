@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="titleH2">Les Heros </h1>
    <div class="row">
        @foreach($heroes as $hero)
            <div class="col-md-4 mb-4">
                <div class="card h-80"> <!-- Ajout de la classe h-100 pour définir une hauteur fixe -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $hero->name }}</h5>
                    </div>
                    <a href="{{ route('heroes.show', $hero->id) }}">
                        <img src="{{ asset('storage/uploads/' . $hero->image) }}" class="card-img-top img-fluid object-fit-cover img-hero" alt="{{ $hero->name }}">
                    </a>

                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

