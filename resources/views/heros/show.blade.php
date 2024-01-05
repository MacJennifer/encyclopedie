

@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('home') }}">
        <img src="{{ asset('assets/images/logoHero.png')}}" alt="accueil"  style="width: 100px; height: auto;">
     </a>
    <h1 class="titleH2">Détails du Super-héros</h1>

    <div class="card">
        <img src="{{ asset('storage/uploads/' . $hero->image) }}" class="card-img-top img-fluid" alt="{{ $hero->name }}">

        <div class="card-body">
            <h5 class="card-title">{{ $hero->name }}</h5>
            <p class="card-text">{{ $hero->description }}</p>
        </div>
    </div>
</div>
@endsection
