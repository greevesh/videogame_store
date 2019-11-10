@extends('layouts.products')

@section('title', '- Nintendo Games')
@section('category', 'Nintendo')

@section('content')
    @if(isset($nintendoGames))
        @foreach($nintendoGames as $nintendoGame)
            <h2>{{ $nintendoGame->name }}</h2>
            <a href="{{ $nintendoGame->slug }}"><img src="{{ asset($nintendoGame->image) }}" alt="nintendogame"></a>
            <h4>{{ $nintendoGame->price }}</h4>
        @endforeach 
    @endif
@endsection