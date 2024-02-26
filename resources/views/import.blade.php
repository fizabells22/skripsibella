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
    <title>Import File</title>
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
                <a class="nav-link" a href="{{ route('dashboardsales') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Racing Doors SKU</span></a>
            </li>

             <!-- Nav Item - Dashboard -->
             <li class="nav-item">
                <a class="nav-link" a href="{{ route('dashboardracing') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Sales Performance</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" a href="{{ route('report') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                    <span>Report</span></a>
            </li>
             <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Others
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Accounts</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            <div class="overflow-auto" >
                <div class="content-nav">
                <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <h1 class="h3 mb-0 text-gray-800 mt-3 ml-4">Report</h1>
                </div>
                </div>

                    </ul>

                </nav>
                <!-- End of Topbar -->

  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>File Upload Form</h1>
    <form action="{{route ('import')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="fileInput">Choose File</label>
        <input type="file" class="form-control-file" name="csvfile">
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>


    <script src="{{mix ('js/my-app.js')}}"></script>
    {{-- <script src="/js/jquery-3.6.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script> --}}

</body>
</html>