<!-- <!DOCTYPE html>
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
                
    <!-- Session Status -->
    <!-- <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf -->

        <!-- Email Address -->
        <!-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> -->

        <!-- <div class="mb-3">
        <label for="email" :value="__('Email')" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" :value="old('email')" required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div> -->

        <!-- Password -->
        <!-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> -->
<!-- 
        <div class="mb-3">
                            <label for="password" :value="__('Password')" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  type="password" name="password" required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div> -->
        <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> -->

        <!-- <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember_me" for="remember">
                                        {{ __('Remember Me') }} -->
                                    <!-- </label>
                                </div>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <div class="mb-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
        </div>
    </form> -->

    <!-- </div>
    </div>
    </div>
</div>
</div>

<footer class="py-4 text-white mt-4" style="background-color: #2B50A8" margin-top="auto">
        <div class="container text-center">PT Paragon Technology and Innovation | Copyright &copy 
        </div>
    </footer>
</body>
</html> -->

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
