<!doctype html>
<html lang="es" data-layout="horizontal" data-topbar="dark" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="/assets/images/favicon.ico">



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
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/mdb-file-upload.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/system.css" rel="stylesheet" type="text/css" />

     <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    @yield('styles')

</head>

<body>
<!-- Begin page -->
    <div id="layout-wrapper">
         <header id="page-topbar">
            @include('layouts.partials.sidebar')
         </header>
    </div>
      <!-- auth-page wrapper -->
      @include('layouts.partials.menu')
    <!-- end auth-page-wrapper -->
     <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">@yield('title')</h4>

                                <div class="page-title-right">
                                    @yield('breadcrumb')
                                </div>

                            </div>
                        </div>
                    </div>
                    @yield('content')

                </div>
            </div>
                <!-- container-fluid -->
     </div>
    <!-- JAVASCRIPT -->


    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/assets/js/plugins.js"></script>
     <script src="/assets/libs/prismjs/prism.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>
    <!-- password-addon init -->
    <script src="/assets/libs/jquery/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>


    <!-- password-addon init -->

    @yield('scripts')
</body>


<!-- Mirrored from themesbrand.com/velzon/html/material/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 13:04:43 GMT -->
</html>
