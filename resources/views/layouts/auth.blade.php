<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">


<!-- Mirrored from themesbrand.com/velzon/html/material/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 13:04:42 GMT -->
<head>

    <meta charset="utf-8" />
    <title>LARACONT | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <!-- Layout config Js -->
    <script src="/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/toastr/toastr.css" rel="stylesheet" type="text/css" />

    @yield('styles')

</head>

<body>

      <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
     <!-- build:js assets/js/core.js -->
   <script src="/assets/libs/jquery/jquery.js"></script>
   <script src="/assets/libs/popper/popper.js"></script>
   <script src="/assets/js/bootstrap.js"></script>
   <script src="/assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/assets/libs/toastr/toastr.js"></script>

    <script>
         @if(Session::has('message'))
         var type = "{{ Session::get('alert-type', 'info') }}";
         switch(type){
             case 'info':
                 toastr.info("{{ Session::get('message') }}");
                 break;
             case 'warning':
                 toastr.warning("{{ Session::get('message') }}");
                 break;
             case 'success':
                 toastr.success("{{ Session::get('message') }}");
                 break;
             case 'error':
                 toastr.error("{{ Session::get('message') }}");
                 break;
         }
     @endif
     </script>

    <!-- password-addon init -->

    @yield('scripts')
</body>


<!-- Mirrored from themesbrand.com/velzon/html/material/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 13:04:43 GMT -->
</html>
