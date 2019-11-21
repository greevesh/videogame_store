@extends('layouts.products')

@section('title', '- Playstation Games')
@section('category', 'Playstation')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">Playstation Games</h1>
    @if(isset($playstationGames))
        @foreach($playstationGames as $playstationGame)
            @if($playstationGame->game_id % 3 === 0)
                <div class="text-right card" style="margin-top: -35rem; margin-left: 60rem; margin-bottom: 5rem; padding-bottom: 2rem; width: 18rem; height: 30rem;">
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $playstationGame->name }}</h2>
                        <h4 class="card-text" style="margin-right: 6.2rem; ">£{{ $playstationGame->price }}</h4>
                    </div>
                </div>
            @elseif($playstationGame->game_id === 2 || 
                    $playstationGame->game_id === 5 ||
                    $playstationGame->game_id === 8 ||
                    $playstationGame->game_id === 11)
                <div class="text-right card" style="margin-top: -30.2rem; margin-left: 35rem; margin-bottom: 5rem; padding-bottom: 2rem; width: 18rem; height: 30rem;">
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $playstationGame->name }}</h2>
                        <h4 class="card-text" style="margin-right: 6.2rem; ">£{{ $playstationGame->price }}</h4>
                    </div>
                </div>
            @else
                <div class="text-left card" style="margin-left: 10rem; width: 17.6rem; height: 30rem;">
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $playstationGame->name }}</h2>
                        <h4 class="card-text" style="margin-left: 6.2rem; margin-bottom: -2.5rem;">£{{ $playstationGame->price }}</h4>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection