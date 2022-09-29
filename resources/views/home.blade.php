@extends('layouts.admin')
@section('title','INICIO')
@section('breadcrumb')
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="/home"><i class="mdi mdi-home"></i> Inicio</a></li>
</ol>
@endsection
@section('content')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


@endsection
