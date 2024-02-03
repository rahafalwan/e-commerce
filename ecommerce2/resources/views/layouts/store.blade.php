<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
<script src="/js/script.js" ></script>

</head>

<body>
  <header>
    <div class="text-center pt-5">
        <img src="/img/logo5.png" class="rounded" alt="...">
      </div>
    
    <!-- place navbar here -->
   




    <nav class="navbar navbar-expand-lg navbar-dark base_bg">
        <div class="container x-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{Request::is('/')?'active':''}}" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::is('about')?'active':''}}" href="{{ url('about') }}">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::is('store')|| Request::is('store-page2')||Request::is('detail')?'active':''}}" href="{{ url('store') }}">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('store/earings')?'active':''}}" href="{{ url('store/earings') }}">Earings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::is('store/rings')?'active':''}}" href="{{ url('store/rings') }}">Rings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::is('store/necklace')?'active':''}}" href="{{ url('store/necklace') }}">Necklace</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 My account
                </a>
                @if (Auth::guest())
                <ul class="dropdown-menu disabled">
                    @else
                    <ul class="dropdown-menu ">
                   
                  <li><a class="dropdown-item" href="{{route('show.carts', [ Auth::user()->id] )}}">Orders</a></li>
                 
                  <li><a class="dropdown-item" href="{{ url('/login') }}">My Profile</a></li>
                  @endif
                    </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{Request::is('contact-us')?'active':''}}" href="{{ url('contact-us') }}">Contact Us</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a class="nav-link navbar-text" href="{{ url('/login') }}">Login</a></li>
                    <li><a class="nav-link navbar-text" href="{{ url('/register') }}">Register</a></li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-text dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                   
                   
                  </ul>
                </li>
                <li><a class="nav-link navbar-text" href="{{route('show.carts', [ Auth::user()->id] )}}"><i class="fa fa-shopping-cart"></i>  Carts/ {{$cart_total}}.00$</a></li>
             
                @endif
            </ul>
          </div>
        </div>
      </nav>
  </header>
  <main>
    <div class="container my-5">
    @yield('content')
    </div>

    <div class="container-fluid  mt-3 base_bg">
        <div class="row justify-content-center text-white pt-3">
            <div class="col-md-3 ">
            <p>Copyright © 2024 Jewellery</p>
            </div>
        
            <div class="col-md-3 ">
            <p>Powered by Jewellery</p>
        </div>
    </div>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>

</html>