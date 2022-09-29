@extends('layouts.admin')
@section('title','ROLES')
@section('breadcrumb')
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/roles">Listado general</a></li>
    <li class="breadcrumb-item active">Nuevo registro</li>
</ol>
@endsection
@section('title', 'ROLES')
@section('content')
@include('sweetalert::alert')
<div>
 <div class="row  mt-2">
    <div class="col-sm-12">
            <form id="main-form" autocomplete="off"><br>
              <input type="hidden" id="_url" value="{{ url('/roles') }}">
              <input type="hidden" id="_token" value="{{ csrf_token() }}">

                <div class="card">
                    <div class="card-header">
                        <h3>Nuevo role</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre del nuevo Role <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" required>
                        </div>


                        <hr>

                        <div class="form-group">
                            <label for="permissions">
                                Permisos <span class="text-danger">*</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="select-all">
                                <label class="custom-control-label" for="select-all">Asignar todos los permisos</label>
                            </div>
                        </div>
                        <div class="row">
                             <!-- Usuarios Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Usuarios
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_usuarios" name="permissions[]"
                                                           value="acceso_usuarios" {{ old('acceso_usuarios') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_usuarios">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Usuario" name="permissions[]"
                                                           value="Ver Usuario" {{ old('Ver Usuario') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Usuario">Ver</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Registrar Usuario" name="permissions[]"
                                                           value="Registrar Usuario" {{ old('Registrar Usuario') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Registrar Usuario">Registrar</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Editar Usuario" name="permissions[]"
                                                           value="Editar Usuario" {{ old('Editar Usuario') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Editar Usuario">Editar</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Eliminar Usuario" name="permissions[]"
                                                           value="Eliminar Usuario" {{ old('Eliminar Usuario') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Eliminar Usuario">Eliminar</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                              <!-- Roles Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Roles
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_role" name="permissions[]"
                                                           value="acceso_role" {{ old('acceso_role') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_role">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Role" name="permissions[]"
                                                           value="Ver Role" {{ old('Ver Role') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Role">Ver </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Registrar Role" name="permissions[]"
                                                           value="Registrar Role" {{ old('Registrar Role') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Registrar Role">Registrar </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Editar Role" name="permissions[]"
                                                           value="Editar Role" {{ old('Editar Role') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Editar Role">Editar </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Eliminar Role" name="permissions[]"
                                                           value="Eliminar Role" {{ old('Eliminar Role') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Eliminar Role">Eliminar </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Permisos Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Permisos
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_permisos" name="permissions[]"
                                                           value="acceso_permisos" {{ old('acceso_permisos') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_permisos">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Permisos" name="permissions[]"
                                                           value="Ver Permisos" {{ old('Ver Permisos') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Permisos">Ver </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Registrar Permisos" name="permissions[]"
                                                           value="Registrar Permisos" {{ old('Registrar Permisos') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Registrar Permisos">Registrar </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Editar Permisos" name="permissions[]"
                                                           value="Editar Permisos" {{ old('Editar Permisos') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Editar Permisos">Editar </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Eliminar Permisos" name="permissions[]"
                                                           value="Eliminar Permisos" {{ old('Eliminar Permisos') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Eliminar Permisos">Eliminar </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!-- Permisos Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Ente
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_permisos" name="permissions[]"
                                                           value="acceso_empresa" {{ old('acceso_permisos') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_permisos">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Empresa" name="permissions[]"
                                                           value="Ver Empresa" {{ old('Ver Empresa') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Empresa">Ver </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Registrar Empresa" name="permissions[]"
                                                           value="Registrar Empresa" {{ old('Registrar Empresa') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Registrar Empresa">Registrar </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Editar Empresa" name="permissions[]"
                                                           value="Editar Empresa" {{ old('Editar Empresa') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Editar Empresa">Editar </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Eliminar Empresa" name="permissions[]"
                                                           value="Eliminar Empresa" {{ old('Eliminar Empresa') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Eliminar Empresa">Eliminar </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Permisos Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Historial de sesión
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_logins" name="permissions[]"
                                                           value="acceso_logins" {{ old('acceso_logins') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_logins">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Logins" name="permissions[]"
                                                           value="Ver Logins" {{ old('Ver Logins') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Logins">Ver</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Permisos Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Países en general
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_pais" name="permissions[]"
                                                           value="acceso_pais" {{ old('acceso_pais') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_pais">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Pais" name="permissions[]"
                                                           value="Ver Pais" {{ old('Ver Pais') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Pais">Ver</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Genero Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Género en general
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_genero" name="permissions[]"
                                                           value="acceso_genero" {{ old('acceso_genero') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_genero">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Genero" name="permissions[]"
                                                           value="Ver Genero" {{ old('Ver Genero') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Genero">Ver</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Genero Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Estado Civil en general
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_estado_civil" name="permissions[]"
                                                           value="acceso_estado_civil" {{ old('acceso_estado_civil') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_estado_civil">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Estado Civil" name="permissions[]"
                                                           value="Ver Estado Civil" {{ old('Ver Estado Civil') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Estado Civil">Ver</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Grado Ministerial Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Grado ministerial en general
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_grado_ministerial" name="permissions[]"
                                                           value="acceso_grado_ministerial" {{ old('acceso_grado_ministerial') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_grado_ministerial">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Grado Ministerial" name="permissions[]"
                                                           value="Ver Grado Ministerial" {{ old('Ver Grado Ministerial') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Grado Ministerial">Ver</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Grado Ministerial Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        Nacionalidad en general
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_nacionalidad" name="permissions[]"
                                                           value="acceso_nacionalidad" {{ old('acceso_nacionalidad') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_nacionalidad">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Nacionalidad" name="permissions[]"
                                                           value="Ver Nacionalidad" {{ old('Ver Nacionalidad') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Nacionalidad">Ver</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Grado Instruccion Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow ">
                                    <div class="card-header">
                                        Grado de Instruccion en general
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_grado_instruccion" name="permissions[]"
                                                           value="acceso_grado_instruccion" {{ old('acceso_grado_instruccion') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_grado_instruccion">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Grado Instruccion" name="permissions[]"
                                                           value="Ver Grado Instruccion" {{ old('Ver Grado Instruccion') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Grado Instruccion">Ver</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tipo Sangre Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow ">
                                    <div class="card-header">
                                        Tipo de Sangre en general
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_tipo_sangre" name="permissions[]"
                                                           value="acceso_tipo_sangre" {{ old('acceso_tipo_sangre') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_tipo_sangre">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Tipo Sangre" name="permissions[]"
                                                           value="Ver Tipo Sangre" {{ old('Ver Tipo Sangre') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Tipo Sangre">Ver</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tipo Local Permission -->
                            <div class="mt-2 col-lg-3 col-md-6">
                                <div class="card h-100 border-0 shadow ">
                                    <div class="card-header">
                                        Tipo de Local en general
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="acceso_tipo_local" name="permissions[]"
                                                           value="acceso_tipo_local" {{ old('acceso_tipo_local') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="acceso_tipo_local">Acceso</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-sm mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                           id="Ver Tipo Local" name="permissions[]"
                                                           value="Ver Tipo Local" {{ old('Ver Tipo Local') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="Ver Tipo Local">Ver</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="card-footer">
                          <button type="submit" class="btn btn-primary float-left">Guardar datos <i class="bi bi-check"></i>
                    </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#select-all').click(function() {
                var checked = this.checked;
                $('input[type="checkbox"]').each(function() {
                    this.checked = checked;
                });
            })
        });
    </script>
    <script src="{{ asset('/assets/js/admin/form/usuarios/create.js') }}"></script>
@endsection
