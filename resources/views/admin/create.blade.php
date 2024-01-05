@extends('layouts.app')

@section('content')



<div class="card mx-auto mt-5" style="max-width: 400px;">
    <div class="card-body">
        <h5 class="card-title text-center mb-4">Créer un héros</h5>

        <form action="{{ route('admin.storeHero') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nom du héros:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image du héros:</label>
                <input type="text" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Genre du héros:</label>
                <input type="text" name="gender" class="form-control">
            </div>

            <div class="mb-3">
                <label for="race" class="form-label">Race du héros:</label>
                <input type="text" name="race" class="form-control">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description du héros:</label>
                <textarea name="description" class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Créer le héros</button>
        </form>
    </div>
</div>

@endsection