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
    <title>Register Page | Dashboard Sales Performance & Racing Doors SKU</title>
</head>
<body>
<div class="register">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="img/paragon-corp.png" alt="Gambar" style="width: 400px; height: auto; margin-right: 60px;">
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <div class="card-body">
                <h2 class="card-title text-center text-primary" >Register</h2>
                <h6 class="card-title text-center">Dashboard Sales Performance & Racing Doors SKU</h6>
                <br>
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" email="email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
                        <div class="mb-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
</div>

<footer class="py-4 text-white mt-4" style="background-color: #2B50A8" margin-top="auto">
        <div class="container text-center">PT Paragon Technology and Innovation | Copyright &copy 
        </div>
    </footer>
</body>
</html>