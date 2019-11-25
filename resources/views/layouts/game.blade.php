@extends('layouts.app')

@section('content')
    <div class="container product-details">
        @if(isset($game))
            <h2>{{ $game->name }}</h2>
            <img src="{{ asset($game->image) }}" alt="game">
            <h4>£{{ $game->price }}</h4>
            <p>{{ $game->description }}</p>
        @else 
            <h1 class="text-center">Whoops! We couldn't find any games.</h1>
        @endif
    </div>

    <form action="{{ route('cart-store') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-secondary btn-lg">Add to Cart</button>
        @if(isset($game))
            <input name="game_id" type="hidden" value="{{ $game->game_id }}"> 
            <input name="name" type="hidden" value="{{ $game->name }}"> 
            <input name="price" type="hidden" value="{{ $game->price }}"> 
            <input name="platform" type="hidden" value="{{ $game->platform }}">
        @endif
    </form>
@endsection