@extends('layouts.products')

@section('title', '- Nintendo Games')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">Nintendo Games</h1>
    @if(isset($nintendoGames))
        @foreach($nintendoGames as $nintendoGame)
            @if($nintendoGame->game_id % 3 === 0)
                <div class="card bg-light products-right-nintendo">
                    <a href="/nintendo/{{ $nintendoGame->slug }}"><img src="{{ asset($nintendoGame->image) }}" class="card-img-top" alt="nintendogame"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $nintendoGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $nintendoGame->price }}</b></h3>
                    </div>
                </div>
            @elseif($nintendoGame->game_id === 26 || 
                    $nintendoGame->game_id === 29 ||
                    $nintendoGame->game_id === 32 ||
                    $nintendoGame->game_id === 35)
                <div class="card bg-light products-center-nintendo">
                    <a href="/nintendo/{{ $nintendoGame->slug }}"><img src="{{ asset($nintendoGame->image) }}" class="card-img-top" alt="nintendogame"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $nintendoGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $nintendoGame->price }}</b></h3>
                    </div>
                </div>
            @else
                <div class="card bg-light products-left-nintendo">
                    <a href="/nintendo/{{ $nintendoGame->slug }}"><img src="{{ asset($nintendoGame->image) }}" alt="nintendogame"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $nintendoGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $nintendoGame->price }}</b></h3>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection