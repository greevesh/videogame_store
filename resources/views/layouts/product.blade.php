@extends('layouts.app')

@section('content')
    <div class="container product-details">
        @if(isset($game))
            <h1 style="{{ strlen($game->name) > 20 ? 'font-size: 1.8rem;' : 'font-size: 2.5rem' }}">
                {{ $game->name }}
            </h1>
            <img src="{{ asset($game->image) }}" alt="game">
            <h2>£{{ $game->price }}</h2>
            <div style="{{ $game->platform === 'Nintendo' ? 'margin-top: -3rem;' : '' }}" id="description" class="d-flex justify-content-end">
                <p>{{ $game->description }}</p>
            </div>
        @else 
            <h1 class="text-center">Whoops! We couldn't find any games.</h1>
        @endif
    </div>

    {{-- the sizes of each of the game platform images are different so the styling of the separators 
    and 'add to cart' buttons have been adjusted accordingly. The descriptions for nintendo games also
    needed to be altered --}}

    @if(isset($game))
        @if($game->platform === 'Playstation')
            <hr id="separator-ps">
        @elseif($game->platform === 'Xbox')
            <hr id="separator-xbox">
        @elseif($game->platform === 'Nintendo')
            <hr id="separator-nin">
        @elseif($game->platform === 'PC')
            <hr id="separator-pc">
        @endif
    @endif

    <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        @if(isset($game))
            @if($game->platform === 'Nintendo')
                <button style="margin-top: -4.7rem;" type="submit" id="add-to-cart"><b>Add to Cart</b></button>
            @elseif($game->platform === 'PC')
                <button style="margin-top: -4.5rem;" type="submit" id="add-to-cart"><b>Add to Cart</b></button>
            @else 
                <button type="submit" id="add-to-cart"><b>Add to Cart</b></button>
            @endif
            <input name="game_id" type="hidden" value="{{ $game->game_id }}"> 
            <input name="slug" type="hidden" value="{{ $game->slug }}">
            <input name="name" type="hidden" value="{{ $game->name }}"> 
            <input name="price" type="hidden" value="{{ $game->price }}"> 
            <input name="platform" type="hidden" value="{{ $game->platform }}">
            <input name="image" type="hidden" value="{{ $game->image }}">
        @endif
    </form>
@endsection