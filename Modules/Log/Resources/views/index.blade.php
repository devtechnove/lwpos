@extends('layouts.admin')
@section('title','LOGS')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home"><i class="mdi mdi-home"></i> Home</a></li>
        <li class="breadcrumb-item active">Listado general</li>

    </ol>
@endsection
@section('content')
<div class="row mt-2">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                Listado general de logs

            </div>
            @php
                $logs = \Modules\Log\Entities\Log::get();

                 $nombre_dia = date('w');
                switch($nombre_dia)
                {
                    case 1: $nombre_dia="Lunes";
                    break;
                    case 2: $nombre_dia="Martes";
                    break;
                    case 3: $nombre_dia="Miercoles";
                    break;
                    case 4: $nombre_dia="Jueves";
                    break;
                    case 5: $nombre_dia="Viernes";
                    break;
                    case 6: $nombre_dia="Sabado";
                    break;
                }

                 $nombre_mes = date('w');
                switch($nombre_mes)
                {
                    case 1: $nombre_mes="Enero";
                    break;
                    case 2: $nombre_mes="Febrero";
                    break;
                    case 3: $nombre_mes="Marzo";
                    break;
                    case 4: $nombre_mes="Abril";
                    break;
                    case 5: $nombre_mes="Mayo";
                    break;
                    case 6: $nombre_mes="Junio";
                    break;
                    case 7: $nombre_mes="Julio";
                    break;
                    case 8: $nombre_mes="Agosto";
                    break;
                    case 9: $nombre_mes="Septiembre";
                    break;
                    case 10: $nombre_mes="Octubre";
                    break;
                    case 11: $nombre_mes="Noviembre";
                    break;
                    case 12: $nombre_mes="Diembre";
                    break;
                }

            @endphp
            <div class="card-body">
                 <div class="table-responsive">
                     <table  class="table table-hover table-bordered table-sm  " id="tableExport">
                    <thead>
                      <tr class="text-center">
                      <th>#</th>
                      <th>Usuario</th>
                      <th>Descripción</th>
                      <th>Día</th>
                      <th>Mes</th>
                      <th>Año</th>
                      </tr>
                    </thead>
                        <tbody>
                            @foreach ($logs as $element)
                            @php
                                $user = \App\Models\User::find($element->user_id)
                            @endphp
                         <tr class="text-center">
                            <td>{{ $element->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                <a href="#"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $element->id }}">
                                <div class="button-items" id="tooltip-container">
                                     <span data-bs-container="#tooltip-container"
                                           data-bs-toggle="tooltip"
                                           data-bs-placement="top"
                                           title="{{ $element->descripcion }}" >
                                       {{ Str::limit($element->descripcion, 50) }}
                                     </span>
                                </div>
                              </a>
                           </td>
                            <td>{{ $nombre_dia }}</td>
                            <td>{{ $nombre_mes }}</td>
                            <td>{{ $element->ano }}</td>

                         </tr>

                          @endforeach
                        </tbody>
                    </table>
                 </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')

<script src="{{ asset('/js/system.js') }}"></script>
@endsection

