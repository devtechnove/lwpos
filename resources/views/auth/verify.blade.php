@extends('layouts.auth')
@section('title','VERIFICACION DE CORREO')
@section('content')
 <!-- Content -->
<div class="row">
    <div class="col-lg-12">
        <div class="card overflow-hidden">
            <div class="row justify-content-center g-0">
                <div class="col-lg-6">
                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                        <div class="bg-overlay"></div>
                        <div class="position-relative h-100 d-flex flex-column">
                            <div class="mb-4">
                                <a href="index.html" class="d-block">
                                    <img src="assets/images/logo-light.png" alt="" height="18">
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
                                            <p class="fs-15">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="fs-15">" The theme is really great with an amazing customer support."</p>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="fs-15">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
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
                        <div class="mb-4">
                            <div class="avatar-lg mx-auto">
                                <div class="avatar-title bg-light text-primary display-5 rounded-circle shadow">
                                    <i class="ri-mail-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-muted text-center mx-lg-3">
                            <h4 class="mb-4">Confirma tu correo</h4>
                            Enlace de activación de cuenta enviado a su dirección de correo electrónico: <b>{{ \Auth::user()->email }}</b> Siga el enlace que se encuentra dentro para continuar.
                        </div>

                        <a class="btn btn-primary w-100 my-3" href="{{ route('logout') }}"
                             onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="me-50" data-feather="log-out"></i>   {{ __('Dejarlo para otro momento') }}
                            </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        <div class="mt-5 text-center">
                            <p class="text-center">¿No has recibido el correo?
                              <a href="{{ route('verification.resend') }}"
                                 onclick="event.preventDefault();document.getElementById('resend-form').submit();">
                                Reenviar
                              </a>
                              <form  id="resend-form" class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                 @csrf
                             </form>
                            </p>
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
