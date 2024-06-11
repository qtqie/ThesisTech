@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="masthead">
      <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <div class="container position-relative">
          <div class="row justify-content-center">
            <div class="col-xl-6">
              <div class="text-center text-white">
                <form>
                  <div class="row">
                    <div class="col">
                      <input class="form-control form-control-lg" id="expertname" type="text" placeholder="Enter Publication Here" required />
                      <div class="invalid-feedback text-white">Expert Name is required.</div>
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Search</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container my-5">
      <h1>Generate Report</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>University</th>
            <th>Address</th>
            <th>Publication</th>
            <th>Paper</th>
            <th>Topic</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $expert)
            <tr>
              <td>{{ $expert->E_Name }}</td>
              <td>{{ $expert->E_Email }}</td>
              <td>{{ $expert->E_PhoneNum }}</td>
              <td>{{ $expert->E_Gender }}</td>
              <td>{{ $expert->E_University }}</td>
              <td>{{ $expert->E_Address }}</td>
              <td>{{ $expert->E_Publication }}</td>
              <td>{{ $expert->E_Paper }}</td>
              <td>{{ $expert->E_Topic }}</td>
              <td><a href="{{ route('listview') }}" class="btn btn-primary">Generate</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <nav aria-label="Pagination">
      <hr class="my-0" />
      <ul class="pagination justify-content-center my-4">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">15</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">Older</a>
        </li>
      </ul>
    </nav>
@endsection
