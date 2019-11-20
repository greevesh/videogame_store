@extends('layouts.products')

@section('title', '- PC Games')
@section('category', 'PC')

@section('content')
    <h1 class="d-flex justify-content-center">PC Games</h1>
    @if(isset($pcGames))
        @foreach($pcGames as $pcGame)
            <h2>{{ $pcGame->name }}</h2>
            <a href="/pc/{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" alt="pcgame"></a>
            <h4>£{{ $pcGame->price }}</h4>
        @endforeach 
    @endif
@endsection