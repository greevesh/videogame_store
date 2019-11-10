@extends('layouts.products')

@section('title', '- Xbox Games')
@section('category', 'Xbox')

@section('content')
    @if(isset($xboxGames))
        @foreach($xboxGames as $xboxGame)
            <h2>{{ $xboxGame->name }}</h2>
            <a href="{{ $xboxGame->slug }}"><img src="{{ asset($xboxGame->image) }}" alt="xboxgame"></a>
            <h4>{{ $xboxGame->price }}</h4>
        @endforeach 
    @endif
@endsection