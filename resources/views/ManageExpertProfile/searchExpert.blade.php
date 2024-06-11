@extends('layouts.app')

@section('content')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome!</h1>
            <p class="lead mb-0">All your expert informations are here</p>
        </div>
    </div>
</header>

<div class="container">
    <div class="row" style="margin:10px;">                    
        
            @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
        <div class="col-14">                    
            <div class="card">
                <div class="card-header">
                    <div style="margin-right:10px">
                <a href="{{url('addExpert')}}" style="float:right;" class="btn btn-primary">ADD EXPERT</a><br>
            </div><br>
            <div class="mb-4">
              <div class="input-group">
                  <form action="{{ route('searchExpert') }}" method="GET">
                      <input type="text" name="query" class="form-control" placeholder="Search experts by publication" value="{{ request('query') }}">
                      <button type="submit" class="btn btn-primary" style="margin-top: 3%;">Search</button>
                  </form>
              </div>
          </div>

                    <table class = "table">
                      <div class="card mb-4">
                          <div class="card-header">
                              <i class="fas fa-table me-1"></i>
                              Expert Information
                          </div>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Expert Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Num Tel</th>
                            <th>University</th>
                            <th>Publication</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $i = 1;
                        @endphp
                        @foreach ($experts as $expert)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $expert->E_Name }}</td>
                                <td>{{ $expert->E_Email }}</td>
                                <td>{{ $expert->E_Gender }}</td>
                                <td>{{ $expert->E_Address }}</td>
                                <td>{{ $expert->E_PhoneNum }}</td>
                                <td>{{ $expert->E_University }}</td>
                                <td>{{ $expert->E_Publication }}</td>
                                <td>
                                <a href="{{ route('listview') }}" class="btn btn-primary">VIEW</a>
                                <a href="{{ url('editExpert/' . $expert->id) }}" class="btn btn-primary">EDIT</a>
                                <form action="{{ route('deleteExpert', $expert->id) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">DELETE</button>
                              </form>

                                </td>

                            </tr>
                            @php 
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
