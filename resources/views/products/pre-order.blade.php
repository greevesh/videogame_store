@extends('layouts.app')

@section('title', '- Pre-order Now')

@section('content')
    <h1 class="text-center">Pre-order Now</h1>
    <hr style="width: 50%;" class="mb-4">
    @foreach($preOrderGames as $preOrderGame)
        @if(isset($preOrderGame))
            @if($preOrderGame->name === 'Pokemon Sword')
                <h2 style="margin-left: 65%;">{{ $preOrderGame->name }}</h2>
                <img style="margin-left: 65%;" src="{{ asset($preOrderGame->image) }}" alt="pre-ordergame">
                <h4 style="margin-left: 65%;">£{{ $preOrderGame->price }}</h4>
                <button style="margin-left: 65%;" type="button" class="pre-order-small btn-lg">Pre-order</button>
            @else 
                <h2 style="margin-left: 20%;">{{ $preOrderGame->name }}</h2>
                <img style="margin-left: 20%;" src="{{ asset($preOrderGame->image) }}" alt="pre-ordergame">
                <h4 style="margin-left: 20%;">£{{ $preOrderGame->price }}</h4>
                <button style="margin-left: 20%;" type="left" class="pre-order-small btn-lg text-right">Pre-order</button>
            @endif
        @endif
    @endforeach

    <p style="width: 50%;">A whole new Pokémon RPG adventure awaits in Pokémon Sword and Pokémon Shield on Nintendo Switch! Get ready to discover Galar, an expansive region with diverse environments. The people and Pokémon who live here work together closely to develop the industries within it.
            Start your adventure in the new region inspired by the English countryside: Galar. With one of the 3 new starter Pokémon: Grookey the Grass type, Scorbunny the fire type, or Sobble the water type. Living in this world are never-before-seen Pokémon for you to discover and catch. With enhanced graphics, this is unlike any Pokémon game you’ve seen before.
            These are the Legendary Pokémon that are featured on the packages of Pokémon Sword and Pokémon Shield: 
            Zacian attacks so gracefully that its movements can even captivate its opponents. It holds what appears to be a sword in its mouth.
            Zamazenta’s regal and majestic movements overwhelm any opponents that dare face it. Its body is covered in what seems to be a shield. 
            They are shrouded in mystery and are even unknown to those who live in the Galar region. Don’t miss out and buy Pokémon Sword today at GAME.</p>
@endsection