@extends('layouts.app')

@section('content')
<div class="container rounded bg-white mt-5 mb-5 shadow-sm">
    <div class="p-3 py-4">
        @if(auth()->user()->hasRole('platinum'))
        <h4>Search Platinum</h4>
        @else
        <h4>Search User</h4>
        @endif

        <!-- Search Input -->
        <div class="mb-4">
            <div class="input-group">
                <input type="text" id="search" class="form-control" placeholder="Search users...">
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="user-table-body">
                @php $counter = 1 @endphp
                @foreach($users as $user)
                    @if($user->id !== auth()->id())
                        @if(auth()->user()->hasRole('platinum'))
                            @if($user->hasRole('platinum'))
                                <tr>
                                    <th scope="row">{{ $counter }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('profile.search', $user->id) }}">
                                            {{ __('View Profile') }}
                                        </a>
                                    </td>
                                </tr>
                                @php $counter++ @endphp
                            @endif
                        @else
                            <tr>
                                <th scope="row">{{ $counter }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('profile.search', $user->id) }}">
                                        {{ __('View Profile') }}
                                    </a>
                                    @if(auth()->user()->hasRole('staff'))
                                    <form action="{{ route('user.delete', $user->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @php $counter++ @endphp
                        @endif
                    @endif
                @endforeach
            </tbody>            
        </table>
        <script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('search');
        const userTableBody = document.getElementById('user-table-body');

        searchInput.addEventListener('input', function () {
            const query = searchInput.value.toLowerCase();
            const rows = userTableBody.getElementsByTagName('tr');

            Array.from(rows).forEach(function (row) {
                const cells = row.getElementsByTagName('td');
                let match = false;

                Array.from(cells).forEach(function (cell) {
                    if (cell.textContent.toLowerCase().indexOf(query) > -1) {
                        match = true;
                    }
                });

                if (match) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>
    </div>
</div>
@endsection
