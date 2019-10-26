@extends('layouts.app')

@section('content')
    <div class="featured-section">

        <div class="container">
            <h1 class="text-center">Playstation 4 Games</h1>&nbsp;                  

        <div class="products text-center">
            <div class="product">
                @foreach($playstationGames as $playstationGame)
                    <h2>{{ $playstationGame->name }}</h2>
                    <a href=""><img src="{{ asset($playstationGame->image) }}" alt="product"></a>
                    <h4>{{ $playstationGame->price }}</h4>
                    <h4>{{ $playstationGame->description}}</h4>
                @endforeach  
        </div> 
@endsection