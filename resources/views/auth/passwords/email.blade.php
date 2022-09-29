@extends('layouts.auth')
@section('title','OLVIDO DE CONTRASEÑA')
@section('styles')
  <link rel="stylesheet" href="/assets/libs/animate-css/animate.css" />
  <link rel="stylesheet" href="/assets/libs/toastr/toastr.css" />
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card overflow-hidden">
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
                                    <i class="ri-lock-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-muted text-center mx-lg-3">
                            <h4 class="mb-4">¿Has olvidado tu contraseña?</h4>
                            Ingrese su correo electrónico y le enviaremos instrucciones para restablecer su contraseña
                        </div>
                         <form id="main-form" class="mb-3"  autocomplete="off">
                             <input type="hidden" id="_url" value="{{ url('/user/password/reset') }}">
                             <input type="hidden" id="_token" value="{{ csrf_token() }}">
                            <div class="mb-3 mt-3">
                              <label for="email" class="form-label">Correo electrónico</label>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico" autofocus>
                            </div>
                           <button type="submit" class="btn btn-primary d-grid w-100" id="boton">
                                 <span class="text-white ">   <i class="mdi mdi-check text-white" id="ajax-icon"></i> {{ __('Enviar link') }}</span>
                             </button>
                          </form>
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
<script src="/js/form/auth/reset.js" ></script>
@endsection

