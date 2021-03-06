@extends('layouts.app')

@section('title', '- Pre-order Now')

@section('content')
    <h1 class="text-center">Pre-order Now</h1>
    <hr style="width: 50%;" class="mb-4">
    @foreach($preOrderGames as $preOrderGame)
        @if(isset($preOrderGame))
            @if($preOrderGame->name === 'Pokemon Sword')
                <div id="pokemon-sword">
                    <h2 id="name-sword" class="name">{{ $preOrderGame->name }}</h2>
                    <img src="{{ asset($preOrderGame->image) }}" alt="pre-ordergame">
                    <h4 id="price-sword" class="price">£{{ $preOrderGame->price }}</h4>
                    <form action="{{ route('cart.addProduct') }}" method="POST">
                        @csrf 
                        <button id="btn-sword" class="pre-order-small btn-lg">Pre-order</button>
                        <input name="game_id" type="hidden" value="{{ $preOrderGame->game_id }}"> 
                        <input name="slug" type="hidden" value="{{ $preOrderGame->slug }}">
                        <input name="name" type="hidden" value="{{ $preOrderGame->name }}"> 
                        <input name="price" type="hidden" value="{{ $preOrderGame->price }}"> 
                        <input name="platform" type="hidden" value="{{ $preOrderGame->platform }}">
                        <input name="image" type="hidden" value="{{ $preOrderGame->image }}">
                    </form>
                </div>
            @else 
                <div id="pokemon-shield">
                    <h2 id="name-shield" class="name">{{ $preOrderGame->name }}</h2>
                    <img src="{{ asset($preOrderGame->image) }}" alt="pre-ordergame">
                    <h4 id="price-shield">£{{ $preOrderGame->price }}</h4>
                    <form action="{{ route('cart.addProduct') }}" method="POST">
                        @csrf 
                        <button id="btn-shield" class="pre-order-small btn-lg text-right">Pre-order</button>
                        <input name="game_id" type="hidden" value="{{ $preOrderGame->game_id }}"> 
                        <input name="slug" type="hidden" value="{{ $preOrderGame->slug }}">
                        <input name="name" type="hidden" value="{{ $preOrderGame->name }}"> 
                        <input name="price" type="hidden" value="{{ $preOrderGame->price }}"> 
                        <input name="platform" type="hidden" value="{{ $preOrderGame->platform }}">
                        <input name="image" type="hidden" value="{{ $preOrderGame->image }}">
                    </form>
                </div>
            @endif
        @endif
    @endforeach

    <p id="pre-order-description" class="text-center pl-5 pr-5" style="font-size: 1rem; margin-top: 5%;">
        A whole new Pokémon RPG adventure awaits in Pokémon Sword and Pokémon Shield on Nintendo Switch! Get ready to discover Galar, an expansive region with diverse environments. 
        The people and Pokémon who live here work together closely to develop the industries within it.
        Start your adventure in the new region inspired by the English countryside: Galar. With one of the 3 new starter Pokémon: Grookey the Grass type, Scorbunny the fire type, or Sobble the water type. 
        Living in this world are never-before-seen Pokémon for you to discover and catch. With enhanced graphics, this is unlike any Pokémon game you’ve seen before.
        These are the Legendary Pokémon that are featured on the packages of Pokémon Sword and Pokémon Shield: 
        Zacian attacks so gracefully that its movements can even captivate its opponents. It holds what appears to be a sword in its mouth.
        Zamazenta’s regal and majestic movements overwhelm any opponents that dare face it. Its body is covered in what seems to be a shield. 
        They are shrouded in mystery and are even unknown to those who live in the Galar region. Don’t miss out and buy Pokémon Sword today at Gamer.
    </p>
@endsection