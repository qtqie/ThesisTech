@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Upload New Profile Photo</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update.image', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="photo" class="form-label">Choose Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary mt-3">Upload</button>
                        <a class="btn btn-danger mt-3" href="{{ route('profile.show', $user->id) }}">
                            {{ __('Cancel') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
