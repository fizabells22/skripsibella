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
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <a href="home.html" class="brand"><h2>Dashboard<i class="fas fa-seedling"></i></h2></a>

        <nav class="navbar">
            <a @yield('home') href="/home">Home</a>
            <a @yield('shop') href="/shop">Shop</a>
            <a @yield('about') href="/about">About</a>
            <a @yield('contact') href="/contact">Contact</a>
        </nav>

        <nav class="navbar navbar-light">
            <form class="form-inline" action="/search" method="GET">
              <input type="class" class="form-control mr-sm-2" placeholder="Search" aria-label="search" name="search">
            </form>
          </nav>

        <div class="icons">
            {{-- <div class="fas fa-shopping-cart"></div>
            <div class="fas fa-user"></div>
            <div class="fas fa-cog"></div> --}}
            <a @yield('shoping') href="/cart" title="Cart"><i class="fas fa-shopping-cart"></i></a>
            <a @yield('user') href="#" title="Profile"><i class="fas fa-user"></i></a>
            <a @yield('admin') href="/admin" title="Admin"><i class="fas fa-cog"></i></a>
        </div>
    </header>
    @yield('content')
    <footer class="py-4 text-white mt-4" style="background-color: #2B50A8">
        <div class="container text-center">PT Paragon Technology and Innovation | Copyright &copy {{ date("Y") }}
        </div>
    </footer>
    <script src="{{mix ('js/my-app.js')}}"></script>
    {{-- <script src="/js/jquery-3.6.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script> --}}
</body>
</html>