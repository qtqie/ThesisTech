@extends('layouts.app')

@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome!</h1>
                <p class="lead mb-0">All your expert informations are here</p>
            </div>
        </div>
    </header>

    <!-- Filter and Search -->
    <div class="filter-container">
        <div class="text-center my-5">
            <label for="filter">Filter</label>
            <select id="filter" wire:model="nyFilter" class="filter-select">
                <option value="">No Selected</option>
                @foreach ($data as $expert)
                    <option value="{{ $expert->id }}">{{ $expert->E_Paper}}</option>
                @endforeach
            </select>
        </div>

        <form action="{{ url('searchExpert') }}" method="GET">
            <div class="text-center my-5">
                <input type="text" name="query" class="search-input" placeholder="Enter Paper" value="{{ request('query') }}">
                <button type="submit" class="search-button">Search</button>
            </div>
        </form>
    </div>

    <!-- Search Results -->
    @if(isset($experts))
        <div class="container mt-5">
            <h4>Search Results for "{{ $query }}"</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Workspace</th>
                        <th>Email</th>
                        <th>Paper</th>
                        <th>Publication</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($experts as $expert)
                        <tr>
                            <td>{{ $expert->E_Name }}</td>
                            <td>{{ $expert->E_University }}</td>
                            <td>{{ $expert->E_Email }}</td>
                            <td>{{ $expert->E_Paper }}</td>
                            <td>{{ $expert->E_Publication }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No experts found matching your search criteria.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endif
@endsection