@extends('layouts.auth')
@section('title', 'LOGIN')
@section('styles')
  <link rel="stylesheet" href="/assets/libs/animate-css/animate.css" />
  <link rel="stylesheet" href="/assets/libs/toastr/toastr.css" />
  <link rel="stylesheet" href="/assets/libs/sweetalert2/sweetalert2.css" />
@endsection
@section('content')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<div class="row">
    <div class="col-lg-12">
        <div class="card overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                        <div class="bg-overlay"></div>
                        <div class="position-relative h-100 d-flex flex-column">
                            <div class="mb-4">
                                <a href="/login" class="d-block">
                                    <img src="/assets/images/logo-light-devtech.png" alt="" height="30">
                                </a>
                            </div>
                            <div class="mt-auto">
                                <div class="mb-3">
                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                </div>

                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner text-center text-white pb-5">
                                        <div class="carousel-item active">
                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end carousel -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                    <div class="p-lg-5 p-4">
                        <div>
                            <h5 class="text-primary">¡Bienvenidos a nuestra app!</h5>
                            <p class="text-muted">Ingresa tu usuario y contraseña para continuar.</p>
                        </div>

                        <div class="mt-4">
                           <form id="main-form" class="mb-3"  autocomplete="off">
                             <input type="hidden" id="_url" value="{{ url('login') }}">
                             <input type="hidden" id="_redirect" value="{{ url('/home') }}">
                             <input type="hidden" id="_token" value="{{ csrf_token() }}">

                                <div class="mb-3">
                                    <label for="username" class="form-label">Correo o usuario</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Ingresa tu correo o usuario">
                                </div>

                                <div class="mb-3">
                                    <div class="float-end">
                                     @if (Route::has('password.request'))
                                            <a  href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <label class="form-label" for="password-input">Contraseña</label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input type="password" name="password" class="form-control pe-5" placeholder="Ingrese la contraseña" id="password-input">
                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    </div>
                                </div>

                                <div class="form-check">

                                </div>

                                <div class="mt-4">
                                     <button type="submit" class="btn btn-success w-100" id="boton">
                                        <i class="fas fa-sign-in-alt text-white" id="ajax-icon"></i> <span class="text-white ">{{ __('Iniciar Sesión') }}</span>
                                    </button>
                                </div>

                                <div class="mt-4 text-center">


                                </div>

                            </form>
                        </div>

                        <div class="mt-5 text-center">
                            <p class="mb-0">¿No tienes cuenta? <a href="/register" class="fw-semibold text-primary text-decoration-underline"> Regístrate</a> </p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    </div>
    <!-- end row -->

<!-- / Content -->
@endsection
@section('scripts')
<script src="/assets/libs/toastr/toastr.js"></script>
<script src="/assets/libs/sweetalert2/sweetalert2.js"></script>
<script src="/js/form/auth/login.js" ></script>
@endsection
