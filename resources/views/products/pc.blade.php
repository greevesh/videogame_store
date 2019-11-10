@extends('layouts.products')

@section('title', '- PC Games')
@section('category', 'PC')

@section('content')
    @if(isset($pcGames))
        @foreach($pcGames as $pcGame)
            <h2>{{ $pcGame->name }}</h2>
            <a href="{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" alt="pcgame"></a>
            <h4>{{ $pcGame->price }}</h4>
        @endforeach 
    @endif
@endsection