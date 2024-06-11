@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1>Expert Information</h1>
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
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endsection

