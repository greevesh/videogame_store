@extends('layouts.products')

@section('title', '- Xbox Games')

@section('content')
    <h1 class="d-flex justify-content-center">Xbox Games</h1>
    @if(isset($xboxGames))
        @foreach($xboxGames as $xboxGame)
            <h2>{{ $xboxGame->name }}</h2>
            <a href="/xbox/{{ $xboxGame->slug }}"><img src="{{ asset($xboxGame->image) }}" alt="xboxgame"></a>
            <h4>£{{ $xboxGame->price }}</h4>
        @endforeach 
    @endif
@endsection