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

    <form action="{{ route('added-to-cart') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-secondary btn-lg">Add to Cart</button>
        @isset($game)
            <input name="game_id" type="hidden" value="{{ $game->game_id }}"> 
            <input name="name" type="hidden" value="{{ $game->name }}"> 
            <input name="price" type="hidden" value="{{ $game->price }}"> 
            @if(isset($cartSuccessMessage))
                <p>{{ $cartSuccessMessage }}</p>
            @endif
        @else
            @if(isset($cartErrorMessage))
                <p>{{ $cartErrorMessage }}</p>
            @endif
        @endif
    </form>
@endsection