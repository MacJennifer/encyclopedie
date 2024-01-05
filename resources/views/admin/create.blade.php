@extends('layouts.app')

@section('content')



<div class="card mx-auto mt-5" style="max-width: 400px;">
    <div class="card-body">
        <h5 class="card-title text-center mb-4">Créer un héro</h5>

        <form action="{{ route('admin.storeHero') }}"  method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nom du héro:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image du hero</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Genre du héro:</label>
                <input type="text" name="gender" class="form-control">
            </div>

            <div class="mb-3">
                <label for="race" class="form-label">Race du héro:</label>
                <input type="text" name="race" class="form-control">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description du héro:</label>
                <textarea name="description" class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Créer le héro</button>
        </form>
    </div>
</div>

@endsection