@extends('layouts.app')

<script src="https://js.stripe.com/v3/"></script>

@section('content')
    <div class="container product-details">
        @if(isset($game))
            <h1>{{ $game->name }}</h1>
            <img src="{{ asset($game->image) }}" alt="game">
            <h2>£{{ $game->price }}</h2>
            <div id="description" class="d-flex justify-content-end"><p>{{ $game->description }}</p></div>
        @else 
            <h1 class="text-center">Whoops! We couldn't find any games.</h1>
        @endif
    </div>

    <hr style="border-right: 0.05rem solid; height: 30.5rem; width: 1px; margin-top: -28.5rem; margin-right: 50rem;">

    <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        <button type="submit" id="add-to-cart"><b>Add to Cart</b></button>
        @if(isset($game))
            <input name="game_id" type="hidden" value="{{ $game->game_id }}"> 
            <input name="slug" type="hidden" value="{{ $game->slug }}">
            <input name="name" type="hidden" value="{{ $game->name }}"> 
            <input name="price" type="hidden" value="{{ $game->price }}"> 
            <input name="platform" type="hidden" value="{{ $game->platform }}">
            <input name="image" type="hidden" value="{{ $game->image }}">
        @endif
    </form>
@endsection