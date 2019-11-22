@extends('layouts.products')

@section('title', '- Playstation Games')
@section('category', 'Playstation')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">Playstation Games</h1>
    @if(isset($playstationGames))
        @foreach($playstationGames as $playstationGame)
            @if($playstationGame->game_id % 3 === 0)
                <div class="card bg-light products-right-playstation">
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $playstationGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $playstationGame->price }}</b></h3>
                    </div>
                </div>
            @elseif($playstationGame->game_id === 2 || 
                    $playstationGame->game_id === 5 ||
                    $playstationGame->game_id === 8 ||
                    $playstationGame->game_id === 11)
                <div class="card bg-light products-center-playstation">
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $playstationGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $playstationGame->price }}</b></h3>
                    </div>
                </div>
            @else
                <div class="card bg-light products-left-playstation">
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" alt="playstationgame"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $playstationGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $playstationGame->price }}</b></h3>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection