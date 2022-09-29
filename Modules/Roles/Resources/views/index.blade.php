@extends('layouts.admin')
@section('title','ROLES')
@section('breadcrumb')
 <ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/roles">Roles</a></li>
    <li class="breadcrumb-item active">Listado general</li>
</ol>
@endsection
@section('content')
@include('sweetalert::alert')
  <div>
      <div class="row  mt-2">
          <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <span>Listado general</span> <a href="{{ route('roles.create') }}" class="btn btn-primary float-end"><i class="mdi mdi-plus fa-1x"></i> Nuevo role</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-bordered table-sm" id="tableExport">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Roles</th>
                                    <th>Permisos</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                   <td>
                                    @foreach($role->getPermissionNames()->take(5) as $permission)
                                     <span class="badge bg-primary">{{ $permission }}</span>
                                    @endforeach
                                     <a class="text-primary" href="{{ route('roles.edit', $role->id) }}">.......</a>
                                   </td>
                                   <td>
                                      <div class="btn-group">
                                       <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary ">
                                        <i class="mdi mdi-pencil"></i>
                                            Modificar
                                        </a>
                                        <button id="delete" class="btn btn-sm btn-danger " onclick="
                                            event.preventDefault();
                                            if (confirm('¿Estás seguro (a)? Se eliminará permanentemente!')) {
                                            document.getElementById('destroy{{ $role->id }}').submit();
                                            }
                                            ">
                                            <i class="mdi mdi-delete"></i>
                                            Borrar
                                            <form id="destroy{{ $role->id }}" class="d-none" action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </button>
                                       </div>

                                   </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>


@endsection 

@section('scripts')

<script src="{{ asset('assets/js/system.js') }}"></script>
@endsection
