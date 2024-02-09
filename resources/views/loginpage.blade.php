<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/project-style.css">
    <link rel="icon" href="img/paragon-corp.png">
    <title>Login Page | Dashboard Sales Performance & Racing Doors SKU</title>
</head>
<body>
<div class="login">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="img/paragon-corp.png" alt="Gambar" style="width: 400px; height: auto; margin-right: 60px;">
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <div class="card-body">
                <h2 class="card-title text-center text-primary" >Login</h2>
                <h6 class="card-title text-center">Dashboard Sales Performance & Racing Doors SKU</h6>
                <br>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                        <div class="mb-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                    <!-- <h6 class="card-title text-center">Don't have an account?</h6>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}"> Don't have an account?
                                        {{ __('Register') }}
                                    </a>
                                @endif -->
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