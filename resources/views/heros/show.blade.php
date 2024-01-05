

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Détails du Super-héros</h2>

    <div class="card">
        <img src="{{ asset('storage/uploads/' . $hero->image) }}" class="card-img-top img-fluid" alt="{{ $hero->name }}">

        <div class="card-body">
            <h5 class="card-title">{{ $hero->name }}</h5>
            <p class="card-text">{{ $hero->description }}</p>
        </div>
    </div>
</div>
@endsection
