@extends('layouts.products')

@section('title', '- Playstation Games')
@section('category', 'Playstation')

@section('content')
    @if(isset($playstationGames))
        @foreach($playstationGames as $playstationGame)
            <h2>{{ $playstationGame->name }}</h2>
            <a href="{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" alt="playstationgame"></a>
            <h4>{{ $playstationGame->price }}</h4>
        @endforeach 
    @endif
@endsection