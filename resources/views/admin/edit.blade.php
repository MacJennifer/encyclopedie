@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Modifier un héro</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.update', $hero->id) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nom du héro:</label>
                    <input type="text" name="name" value="{{ $hero->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image du héro:</label>
                    <input type="file" name="new_image" value="{{ $hero->image }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Genre du héro:</label>
                    <input type="text" name="gender" value="{{ $hero->gender }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="race" class="form-label">Race du héro:</label>
                    <input type="text" name="race" value="{{ $hero->race }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description du héro:</label>
                    <textarea name="description" class="form-control" rows="4">{{ $hero->description }}</textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Modifier le héro</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection



