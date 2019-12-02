@extends('layouts.app')

@section('title', '- Pre-order Now')

@section('content')
    <h1 class="text-center">Pre-order Now</h1>
    @foreach($preOrderGames as $preOrderGame)
        @if(isset($preOrderGame))
            <h2>{{ $preOrderGame->name }}</h2>
            <img src="{{ asset($preOrderGame->image) }}" alt="pre-ordergame">
            <h4>{{ $preOrderGame->price }}</h4>
        @endif
    @endforeach
    <button type="button" class="pre-order-small btn-lg">Pre-order</button>
    <button type="button" class="pre-order-small btn-lg">Pre-order</button>
@endsection