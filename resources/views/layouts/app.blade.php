<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gamer @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- loads font awesome with javascript before the rest of the page has loaded to prevent slow loading times -->
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="/"><img id="navbar-logo" style="margin-bottom: 0.8rem" src="{{ asset('storage/images/gamer_logo2.png') }}" alt="Gamer logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="{{ Request::is('playstation') ? 'page-item active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('playstation') }}">{{ ('Playstation') }}</a>
                            </li>
                            <li class="{{ Request::is('xbox') ? 'page-item active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('xbox') }}">{{ ('Xbox') }}</a>
                            </li>
                            <li class="{{ Request::is('nintendo') ? 'page-item active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('nintendo') }}">{{ ('Nintendo') }}</a>
                            </li>
                            <li class="{{ Request::is('pc') ? 'page-item active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('pc') }}">{{ ('PC') }}</a>
                            </li>
                            <li class="{{ Request::is('login') ? 'page-item active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="{{ Request::is('register') ? 'page-item active' : '' }} nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            <li><a href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a></li>
                            @if(Cart::count() > 0)
                                <div class="cart-count-bg"><span class="cart-count"><b>{{ Cart::count() }}</b></span></div>
                            @endif
                        @else
                            <li class="{{ Request::is('playstation') ? 'page-item active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('playstation') }}">{{ ('Playstation') }}</a>
                            </li>
                            <li class="{{ Request::is('xbox') ? 'page-item active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('xbox') }}">{{ ('Xbox') }}</a>
                            </li>
                            <li class="{{ Request::is('nintendo') ? 'page-item active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('nintendo') }}">{{ ('Nintendo') }}</a>
                            </li>
                            <li class="{{ Request::is('pc') ? 'page-item active' : '' }} nav-item">
                                <a class="nav-link" href="{{ route('pc') }}">{{ ('PC') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    <li><a href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a></li>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="container py-5">
                <div class="row">
                  <div class="col-12 col-md">
                    <img src="{{ asset('storage/images/gamer_logo2.png') }}">
                  </div>
                  <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Cool stuff</a></li>
                      <li><a class="text-muted" href="#">Random feature</a></li>
                      <li><a class="text-muted" href="#">Team feature</a></li>
                      <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Resource</a></li>
                      <li><a class="text-muted" href="#">Resource name</a></li>
                      <li><a class="text-muted" href="#">Another resource</a></li>
                      <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md">
                    <h5>Other Stuff</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Careers at Gamer</a></li>
                      <li><a class="text-muted" href="#">Cookies</a></li>
                      <li><a class="text-muted" href="#">Government</a></li>
                      <li><a class="text-muted" href="#">Gaming</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md">
                    <h5>About Gamer</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Team</a></li>
                      <li><a class="text-muted" href="#">Locations</a></li>
                      <li><a class="text-muted" href="#">Privacy</a></li>
                      <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                  </div>
                </div>
              </footer>
            
    </div>
</body>
</html>
