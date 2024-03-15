@extends('layout.master')
@section('title','Upload File | Dashboard Sales Performance & Racing Doors SKU')

@section('content')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            <div class="overflow-auto" >
                <div class="content-nav">
                <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <h1 class="h3 mb-0 text-gray-800 mt-3 ml-4">Upload Sales Scoreboard</h1>
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
    <form action="{{route ('importsales')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="fileInput">Choose File</label>
        <input type="file" class="form-control-file" name="csvfile">
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>
 @endsection