<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="img/paragon-corp.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>@yield('title')</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <img src="img/paragon-corp.png" alt="Gambar" style="max-width: 100%; height: auto;">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

              <!-- Heading -->
              <div class="sidebar-heading">
                Dashboard
            </div>

             <!-- Nav Item - Dashboard -->
             <li class="nav-item">
                <a class="nav-link" a href="{{ route('dashboardracing') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Racing Doors SKU</span></a>
            </li>

             <!-- Nav Item - Dashboard -->
             <li class="nav-item">
                <a class="nav-link" a href="{{ route('dashboardsales') }}">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Sales Performance</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Upload Report
            </div>

               <!-- Nav Item - Dashboard -->
               <li class="nav-item">
                <a class="nav-link" a href="{{ route('report') }}">
                <i class="fa fa-file"></i>
                    <span>Lighthouse</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" a href="{{ route('salesscore') }}">
                <i class="fa fa-file"></i>
                    <span>Sales Scoreboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" a href="{{ route('salesach') }}">
                <i class="fa fa-file"></i>
                    <span>Sales Achievement</span></a>
            </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Others
            </div>

               <!-- Nav Item - Dashboard -->
               <li class="nav-item">
                <a class="nav-link" a href="{{ route('report') }}">
                <i class="fa fa-user-circle"></i>
                    <span>Account</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->
        @yield('content')
        <script src="{{mix ('js/my-app.js')}}"></script>
    {{-- <script src="/js/jquery-3.6.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script> --}}
    <!-- plugin js -->
    <script src="assets/vendor/dropzone/min/dropzone.min.js"></script>
    <!-- init js -->
    <script src="assets/js/ui/component.fileupload.js"></script>
</body>
</html>