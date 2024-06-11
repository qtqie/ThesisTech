@extends('layouts.app')

@section('content')
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <!-- Edit Form -->
    <div class="form-container">
        <h2>Edit Expert</h2>
        <form action="{{ route('updateExpert') }}" method="post">
            @csrf
            @method('post')
            <input type="hidden" name="id" value="{{ $experts->id }}">
            <div class="form-group mb-3">
                <label for="E_Name">Name</label>
                <input type="text" class="form-control" id="E_Name" name="E_Name" value="{{ old('E_Name', $experts->E_Name) }}" required>
                @error('E_Name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_Email">Email</label>
                <input type="email" class="form-control" id="E_Email" name="E_Email" value="{{ old('E_Email', $experts->E_Email) }}" required>
                @error('E_Email')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_Gender">Gender</label>
                <input type="text" class="form-control" id="E_Gender" name="E_Gender" value="{{ old('E_Gender', $experts->E_Gender) }}" required>
                @error('E_Gender')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_Address">Address</label>
                <input type="text" class="form-control" id="E_Address" name="E_Address" value="{{ old('E_Address', $experts->E_Address) }}" required>
                @error('E_Address')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_University">Workplace</label>
                <input type="text" class="form-control" id="E_University" name="E_University" value="{{ old('E_University', $experts->E_University) }}" required>
                @error('E_University')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="E_PhoneNum">Phone Number</label>
                <input type="tel" class="form-control" id="E_PhoneNum" name="E_PhoneNum" value="{{ old('E_PhoneNum', $experts->E_PhoneNum) }}" required>
                @error('E_PhoneNum')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('listexpert') }}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
@endsection