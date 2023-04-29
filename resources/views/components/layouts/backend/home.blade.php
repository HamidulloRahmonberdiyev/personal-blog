<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $title ?? 'Admin Panel' }}</title>

    <link href="{{ asset('backend') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/js/pace.min.js"></script>
    <link href="{{ asset('frontend') }}/assets/img/checked.png" rel="icon">
    <link href="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/css/sidebar-menu.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme9">

    <div id="wrapper">

        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <x-layouts.backend.sidebar></x-layouts.backend.sidebar>
        </div>

        <header class="topbar-nav">
            <x-layouts.backend.navbar></x-layouts.backend.navbar>
        </header>

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                @if (session('success'))
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body bg-success" style="border-radius:5px">
                                <div class="ml-3" style="color:rgb(5, 66, 3)"><i class="fa fa-exclamation-circle"></i>
                                    <b>Successfull:</b> {{ session('success') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                {{ $slot }}

                <div class="overlay toggle-menu"></div>

            </div>

        </div>
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Dashtreme Admin
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div>
    
    <!--End wrapper-->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/bootstrap.min.js"></script>

    <script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.js"></script>
    <script src="{{ asset('backend') }}/assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.loading-indicator.js"></script>
    <script src="{{ asset('backend') }}/assets/js/app-script.js"></script>

    <script src="{{ asset('backend') }}/assets/ckeditor/ckeditor.js"></script>

    <script src="{{ asset('backend') }}/assets/plugins/Chart.js/Chart.min.js"></script>

    <script src="{{ asset('backend') }}/assets/js/index.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>


</body>

</html>
