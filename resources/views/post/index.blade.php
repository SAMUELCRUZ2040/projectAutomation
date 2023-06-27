@extends('layouts.sections')
@section('content')
<div id="preloader" class="preloader">
  <div class="loading-inner">
  </div>
  <div class="loading-inner2">
  </div>
</div>

<div class="container mt-5">
  <div class="container-text">
    <h2 class="fw-bold mb-4 mt-5">Registered Users</h2>
  </div>
  <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Identification</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">View</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($register as $show)
          <tr>
            <th scope="row">{{$show -> id}}</th>
            <td scope="col-sm-6">{{$show -> numberidentification}}</td>
            <td scope="col-sm-6">{{$show -> username}}</td>
            <td scope="col-sm-6">{{$show -> email}}</td>
            <td scope="col-sm-6"><a class="btn btn-primary" href="/show/{{$show -> id}}">View</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection