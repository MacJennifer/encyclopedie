@extends('layouts.app')

@section('content')
<div class="container">


    <h2>Les Heroes</h2>
    <div class="row">
        @foreach($heroes as $hero)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="{{ route('heroes.show', $hero->id) }}">
                        <img src="{{ asset('storage/uploads/' . $hero->image) }}" class="card-img-top img-fluid" alt="{{ $hero->name }}">

                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $hero->name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    </div>
</div>
@endsection
