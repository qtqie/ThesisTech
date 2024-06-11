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
                    <input type="text" id="search" class="form-control" placeholder="Search users...">
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
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php 
                              $i = 1;
                          @endphp
                          @foreach ($data as $experts)
                              <tr>
                                  <td>{{$i}}</td>
                                  <td>{{$experts->E_Name}}</td>
                                  <td>{{$experts->E_Email}}</td>
                                  <td>{{$experts->E_Gender}}</td>
                                  <td>{{$experts->E_Address}}</td>
                                  <td>{{$experts->E_PhoneNum}}</td>
                                  <td>{{$experts->E_University}}</td>
                                  <td>
                                  <a href="{{ route('listview') }}" class="btn btn-primary">VIEW</a>
                                  <a href="{{url('editExpert/'.$experts->id)}}" class="btn btn-primary">EDIT</a>
                                  <form action="{{ route('deleteExpert', $experts->id) }}" method="POST" style="display:inline;">
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
          </div>
      </div>
  </div>
    <script src="js/scripts.js"></script>
@endsection
