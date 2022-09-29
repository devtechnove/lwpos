@extends('layouts.auth')
@section('title','REGISTRO')
@section('styles')
  <link rel="stylesheet" href="/assets/libs/animate-css/animate.css" />
  <link rel="stylesheet" href="/assets/libs/toastr/toastr.css" />
@endsection
@section('content')
  <!-- Content -->

<div class="row">
    <div class="col-lg-12">
        <div class="card overflow-hidden m-0">
            <div class="row justify-content-center g-0">
                <div class="col-lg-6">
                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                        <div class="bg-overlay"></div>
                        <div class="position-relative h-100 d-flex flex-column">
                            <div class="mb-4">
                                <a href="/" class="d-block">
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

                <div class="col-lg-6">
                    <div class="p-lg-5 p-4">
                        <div>
                            <h5 class="text-primary">Registro de cuenta</h5>
                            <p class="text-muted">Obtén tu cuenta gratis por 7 días.</p>
                        </div>

                        <div class="mt-4">
                            <form id="main-form" class="mb-3"  autocomplete="off">
                                 <input type="hidden" id="_url" value="{{ url('/register') }}">
                                 <input type="hidden" id="_redirect" value="{{ url('/home') }}">
                                 <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <div class="mb-3">
                                  <label for="razon_social" class="form-label">Nombre comercial de la empresa</label>
                                  <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Ingresa tu nombre comercial"  value="{{ old('razon_social') }}" autofocus>
                                </div>
                                <label for="email" class="form-label">Documento de la empresa</label>
                                <div class="mb-3">

                                 <input type="text" class="form-control" id="documento" name="documento" placeholder="RIF / RUC de tu empresa"  value="{{ old('documento') }}">
                                </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Tu nombre completo</label>
                                   <input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo"  value="{{ old('name') }}">
                                </div>
                                 <div class="mb-3">
                                  <label for="email" class="form-label">Tu usuario</label>
                                   <input type="text" class="form-control" id="username" name="username" placeholder="Usuario de sesión"  value="{{ old('username') }}">
                                </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Tu correo electrónico</label>
                                  <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico">
                                </div>
                                <div class="mb-3 form-password-toggle">
                                  <label class="form-label" for="password">Contraseña</label>
                                  <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                  </div>
                                </div>


                                <button class="btn btn-primary d-grid w-100">
                                  Sign up
                                </button>
                              </form>
                        </div>

                        <div class="mt-5 text-center">
                            <p class="mb-0">¿Ya tienes cuenta? <a href="/login" class="fw-semibold text-primary text-decoration-underline"> Inicia sesión</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

</div>
<!-- / Content -->
@endsection
@section('scripts')
<script src="/assets/libs/toastr/toastr.js"></script>
<script src="/js/form/auth/register.js" ></script>
@endsection
