@extends('layouts.auth')
@section('title','REINICIO DE CONTRASEÑA')
@section('content')
@section('styles')
  <link rel="stylesheet" href="/assets/libs/animate-css/animate.css" />
  <link rel="stylesheet" href="/assets/libs/toastr/toastr.css" />
@endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                        <div class="bg-overlay"></div>
                        <div class="position-relative h-100 d-flex flex-column">
                            <div class="mb-4">
                                <a href="index.html" class="d-block">
                                    <img src="/assets/images/logo-light.png" alt="" height="18">
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
             <input type="hidden" id="_url" value="{{ url('/user/reset/password') }}">
             <input type="hidden" id="_redirect" value="{{ url('/login') }}">
             <input type="hidden" id="_token" value="{{ csrf_token() }}">
            <div class="mb-3 form-email-toggle">
              <label class="form-label" for="email">Correo electrónico</label>
              <div class="input-group input-group-merge">
                <input type="text" id="emain" class="form-control" name="email" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="email" value="{{ $email ?? old('email') }}" />
                <span class="input-group-text cursor-pointer float-end"><i class="mdi mdi-mail"></i></span>
              </div>
            </div>

            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Nueva contraseña</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="confirm-password">Confirmación de contraseña</label>
              <div class="input-group input-group-merge">
                <input type="password" id="confirm-password" class="form-control" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100 mb-3">
             Guardar contraseña
            </button>
            <div class="text-center">
              <a href="auth-login-basic.html">
                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                Iniciar sesión
              </a>
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
@endsection
@section('scripts')
  <script src="/assets/libs/toastr/toastr.js"></script>
  <script src="/js/form/auth/reset-password.js" ></script>
@endsection
