@extends('layouts.app')

@section('content')
    <div class="featured-section">

        <div class="container">
            <h1 class="text-center">Playstation 4 Games</h1>&nbsp;                  

        <div class="products text-center">
            <div class="product">
                @foreach($playstationGames as $playstationGame)
                    <h2>{{ $playstationGame->name }}</h2>
                    <h4>{{ $playstationGame->price }}</h4>
                    <h4>{{ $playstationGame->description}}</h4>
                    <h4>{{ $playstationGame->image }}</h4>
                @endforeach 
                
                <a href=""><img src="" alt="product"></a>
                <a href=""><div class="product-name"></div></a>
                <div class="product-price"></div>
            </div>
            <div class="product">
                <a href=""><img src="" alt="product"></a>
                <a href=""><div class="product-name"></div></a>
                <div class="product-price"></div>
            </div>
            <div class="product">
                <a href=""><img src="" alt="product"></a>
                <a href=""><div class="product-name"></div></a>
                <div class="product-price"></div>
            </div>
            <div class="product">
                <a href=""><img src="" alt="product"></a>
                <a href=""><div class="product-name"></div></a>
                <div class="product-price"></div>
            </div>
            <div class="product">
                <a href=""><img src="" alt="product"></a>
                <a href=""><div class="product-name"></div></a>
                <div class="product-price"></div>
            </div>
            <div class="product">
                <a href=""><img src="" alt="product"></a>
                <a href=""><div class="product-name"></div></a>
                <div class="product-price"></div>
            </div>
            <div class="product">
                <a href=""><img src="" alt="product"></a>
                <a href=""><div class="product-name"></div></a>
                <div class="product-price"></div>
            </div>
            <div class="product">
                <a href=""><img src="" alt="product"></a>
                <a href=""><div class="product-name"></div></a>
                <div class="product-price"></div>
            </div> 
        </div> <!-- end products -->

        </div> <!-- end container -->
    </div> <!-- end deal section -->
@endsection