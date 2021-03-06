@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>

    @section('content')
        <body>
            <img id ="pre-order-image" src="../storage/images/pokemon_coming_soon.jpeg" alt="Pokemon Sword/Shield coming soon"> 
            <div id="banner" class="d-flex justify-content-center"><p>Coming Soon: Pokemon Sword and Pokemon Shield</p></div>
            <div style="display: flex; justify-content: center;">
                <a href="{{ route('pre-order') }}">
                    <button id="pre-order-button"><b>Pre-order now</b></button>
                </a>
            </div>
        </body>
    @endsection

</html>
