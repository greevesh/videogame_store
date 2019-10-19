<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gamer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://laravelecommerceexample.ca/css/app.css">
        <link rel="stylesheet" href="https://laravelecommerceexample.ca/css/responsive.css">

        <!-- loads fa with javascript before the rest of the page has loaded to prevent slow loading times -->
        <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div style="height: 150px;" class="top-nav container">
                    <div class="top-nav-left">
                        <div style="margin-top: -42px;"><a href="/"><img src="{{ asset('images/gamer_logo2.png') }}" alt="Gamer logo"></a></div>
                    </div>
                        <div class="top-nav-right">
                            <ul>
                                <li><a href="/playstation">Playstation</a></li>
                                <li><a href="/xbox">Xbox</a></li>
                                <li><a href="/nintendo">Nintendo</a></li>
                                <li><a href="/pc">PC</a></li>
                                <li>|</li>
                                <li><a href="/register">Sign Up</a></li>
                                <li><a href="/login">Login</a></li>
                                <li><a href="/cart"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end top-nav -->
            </header>

        <div class="container">
            @yield('content')
        </div>

<footer>
    <div class="footer-content container">
        <ul style="margin-left: 420px;">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div> 
</footer> <!-- end footer-content -->