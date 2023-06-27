@extends('layouts.sections')
@section('content')
<div id="preloader" class="preloader">
  <div class="loading-inner">
  </div>
  <div class="loading-inner2">
  </div>
</div>

<div class=" container container-text mt-5">
    <h1>registered users</h1>
</div>

<div class="container mt-5">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Pais</th>
        <th scope="col">City</th>
        <th scope="col">Indentification Number</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <tr>
            <th scope="row">{{$show -> id}}</th>
            <td>{{$show -> name}}</td>
            <td>{{$show -> username}}</td>
            <td>{{$show -> pais}}</td>
            <td>{{$show -> city}}</td>
            <td>{{$show -> numberidentification}}</td>
            <td>{{$show -> phone}}</td>
            <td>{{$show -> email}}</td>
          </tr>
      </tr>
    </tbody>
  </table>
</div>
<div class="container">
    <form action="{{route('update', $show)}}" method="POST" class="form" id="form">
        @csrf @method('PATCH')
      <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$show -> name}}">
        </div>

        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$show -> username}}">
        </div>

        <div class="mb-2 row">
          <div class="col-lg-6 d-flex flex-column">
              <label for="exampleInputEmail1" class="form-label">Country of residence</label>
              <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pais" >
                  <option value="argentina">Argentina</option>
                  <option value="bolivia">Bolivia</option>
                  <option value="brasil">Brasil</option>
                  <option value="chile">Chile</option>
                  <option value="colombia">Colombia</option>
                  <option value="costa-rica">Costa Rica</option>
                  <option value="cuba">Cuba</option>
                  <option value="ecuador">Ecuador</option>
                  <option value="el-salvador">El Salvador</option>
                  <option value="guatemala">Guatemala</option>
                  <option value="haiti">Haití</option>
                  <option value="honduras">Honduras</option>
                  <option value="mexico">México</option>
                  <option value="nicaragua">Nicaragua</option>
                  <option value="panama">Panamá</option>
                  <option value="paraguay">Paraguay</option>
                  <option value="peru">Perú</option>
                  <option value="puerto-rico">Puerto Rico</option>
                  <option value="republica-dominicana">República Dominicana</option>
                  <option value="uruguay">Uruguay</option>
                  <option value="venezuela">Venezuela</option>
                </select>                      
          </div>
          <div class="col-lg-6">
              <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">City</label>
                  <input name="city" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$show -> city}}">
              </div>
          </div>
        </div>
        <div class="mb-2 row">
          <div class="col-lg-6">
              <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Identification Number</label>
                  <input name="numberidentification" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$show -> numberidentification}}">
              </div>
          </div>
          <div class="col-lg-6">
              <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Phone</label>
                  
                  <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$show -> phone}}">
              </div>
          </div>  
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$show -> email}}">
        </div>
          <button type="submit" class="btn btn-primary mt-4">Modify</button>
    </form>
</div>
@endsection