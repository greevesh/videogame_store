@extends('layouts.app')

@section('content')
    @if(isset($game))
        <h1>{{ $game->name }}</h1>
    @endif
@endsection