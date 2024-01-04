
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Admin Dashboard</h2>

        <h3>Utilisateurs</h3>
        <ul>
            @foreach($users as $user)
                <p>{{ $user->name }}</p>

            @endforeach
        </ul>

        <h3>Héros</h3>
        <ul>
            @foreach($heroes as $hero)
                <p>{{ $hero->name }}</p>

            @endforeach
        </ul>
    </div>
@endsection
