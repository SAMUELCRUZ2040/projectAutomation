@extends('layouts.sections')
@section('content')
<div id="preloader" class="preloader">
  <div class="loading-inner">
  </div>
  <div class="loading-inner2">
  </div>
</div>
<div class="row mt-5 p-5">
  <div class="col-lg-12" >
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
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
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
                  <td><a class="btn btn-primary" href="{{ route('edit', $show)}}">Edit</a></td>
                  <td>
                    <form id="deleteForm" action="{{ route('destroy', $show) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary delete-btn" type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Delete</button>
                    </form>
                  </td>  
                   <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar eliminación</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Estás seguro de que deseas eliminar este usuario?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>                              
                </tr>
            </tr>
          </tbody>
        </table>

  </div>    
  </div>
</div>
<script>
  var confirmDeleteModal = document.getElementById('confirmDeleteModal');
  var confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

  confirmDeleteBtn.addEventListener('click', function() {
      var deleteForm = document.getElementById('deleteForm');
      $('#confirmDeleteModal').modal('hide');
      deleteForm.submit();
  });
</script>



@endsection