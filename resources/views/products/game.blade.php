@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($game))
            <h2>{{ $game->name }}</h2>
            <img src="{{ asset($game->image) }}" alt="game">
            <h4>{{ $game->price }}</h4>
            <p>{{ $game->description }}</p>
        @else 
            <h1 class="text-center">Whoops! Couldn't find any games.</h1>
        @endif
    </div>
    <button type="button" class="btn btn-secondary btn-lg">Add to Cart</button>
@endsection