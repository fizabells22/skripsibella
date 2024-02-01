<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/project-style.css">
    <link rel="icon" href="img/paragon-corp.png">
    <title>Login Page | Dashboard Sales Performance & Racing Doors SKU</title>
</head>
<body>
<!-- <div class="login">
    <br><br><br>
    <div class="image">
        <img src="img/paragon-corp.png" alt="">
    </div>
    <div class="card-login">
   
        <div class="card">
            <div class="card-body">
            <h2 class="card-title text-center">Login</h2>
            <hr>
            <br>
            <form action="{{url('/login-data')}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="idadmin">Username</label>
                <input type="text" class="form-control @error('idadmin') is-invalid @enderror" id="idadmin" name="idadmin" value="{{old('iadadmin')}}">
                @error('idadmin')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword2">
                </div>
                 <button type="submit" class="btn btn-primary btn-block btn-user" style="background-color: #2B50A8">Login</button>
            </form>
            </div>
        
    </div>
    </div>
    <br><br><br>
</div> -->
<div class="login">
<!-- <div class="container"> -->
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="img/paragon-corp.png" alt="Gambar" style="max-width: 100%; height: auto;">
            </div>
        </div>

        <div class="col-md-6">
            <h2>Login</h2>
            <form action="{{url('/login-data')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    <!-- </div> -->
</div>
</div>

<footer class="py-4 text-white mt-4" style="background-color: #2B50A8" margin-top="auto">
        <div class="container text-center">PT Paragon Technology and Innovation | Copyright &copy {{ date("Y") }}
        </div>
    </footer>
    <script src="{{mix ('js/my-app.js')}}"></script>
    {{-- <script src="/js/jquery-3.6.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script> --}}
</body>
</html>