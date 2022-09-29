@extends('layouts.admin')
@section('title','LOGINS')
@section('breadcrumb')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home"><i class="mdi mdi-home"></i> Home</a></li>
        <li class="breadcrumb-item active">Listado general</li>

    </ol>
@endsection

@section('content')
<div class="row">
     <div class="col-md-12">
    <div class="card card-line-primary">
      <div class="card-header">
        <h3>Listado de inicio de sesión</h3>

      </div>
       <!-- /.card-header -->
          <div class="card-body table-responsive">

          <table id="tableExport" class="table table-hover table-bordered table-sm">
              <thead>
              <tr>
              <th>#</th>
               <th>Usuario</th>
              <th>Inicio</th>
              <th>Cierre</th>
              <th>IP</th>
              <th>Cliente</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($logins as $login)
              <tr class="row{{ $login->id }}">
              <td>{{ $login->id }}</td>
              <td>{{ $login->user->name }}</td>
              <td>{{ $login->login_at  }}</td>
              <td>{{ $login->logout_at }}</td>
              <td>{{ $login->ip_address }}</td>
              <td>  <a href="#"  data-bs-toggle="modal"
                                 data-bs-target=".bs-example-modal-center{{ $login->id }}">
                        <div class="button-items" id="tooltip-container">
                             <span data-bs-container="#tooltip-container"
                                   data-bs-toggle="tooltip"
                                   data-bs-placement="top"
                                   title="{{ $login->user_agent }}" >
                               {{ Str::limit($login->user_agent, 50) }}
                             </span>
                        </div>
                  </td>
              </tr>
              @endforeach
              </tbody>

          </table>
          </div>
          <!-- /.card-body -->
      </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('/js/system.js') }}"></script>
@endsection
