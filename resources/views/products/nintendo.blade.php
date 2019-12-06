@extends('layouts.products')

@section('title', '- Nintendo Games')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">Nintendo Games</h1>
    <hr style="width: 90%;" class="mt-1 mb-5">
    @if(isset($nintendoGames))
        @foreach($nintendoGames as $nintendoGame)
            @if($nintendoGame->game_id % 3 === 0)
                <div class="products-right-nintendo text-right card">
                    <a href="/nintendo/{{ $nintendoGame->slug }}"><img src="{{ asset($nintendoGame->image) }}" class="card-img-top" alt="nintendoGame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $nintendoGame->name }}</h2>
                        <h4 class="price card-text">£{{ $nintendoGame->price }}</h4>
                    </div>
                </div>
            @elseif($nintendoGame->game_id === 26 or 
                    $nintendoGame->game_id === 29 or
                    $nintendoGame->game_id === 32 or
                    $nintendoGame->game_id === 35)
                <div class="products-center-nintendo text-right card">
                    <a href="/nintendo/{{ $nintendoGame->slug }}"><img src="{{ asset($nintendoGame->image) }}" class="card-img-top" alt="nintendoGame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $nintendoGame->name }}</h2>
                        <h4 class="price card-text">£{{ $nintendoGame->price }}</h4>
                    </div>
                </div>
            @else
                <div class="products-left-nintendo text-left card">
                    <a href="/nintendo/{{ $nintendoGame->slug }}"><img src="{{ asset($nintendoGame->image) }}" alt="nintendoGame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $nintendoGame->name }}</h2>
                        <h4 class="price card-text">£{{ $nintendoGame->price }}</h4>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection