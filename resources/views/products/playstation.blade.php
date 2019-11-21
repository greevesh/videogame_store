@extends('layouts.products')

@section('title', '- Playstation Games')
@section('category', 'Playstation')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 5rem;">Playstation Games</h1>
    @if(isset($playstationGames))
        @foreach($playstationGames as $playstationGame)
            @if($playstationGame->game_id % 2 === 0)
                <div class="text-right" style="margin-top: -26.6rem; margin-right: 10rem; padding-bottom: 2rem;">
                    <h2>{{ $playstationGame->name }}</h2>
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" alt="playstationgame"></a>
                    <h4 style="margin-right: 6.2rem;">£{{ $playstationGame->price }}</h4>
                </div>
            @else
                <div class="text-left" style="margin-left: 10rem;">
                    <h2>{{ $playstationGame->name }}</h2>
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" alt="playstationgame"></a>
                    <h4 style="margin-left: 6.2rem;">£{{ $playstationGame->price }}</h4>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection