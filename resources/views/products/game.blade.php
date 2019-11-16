@extends('layouts.app')

@section('content')
    <div class="container product-details">
        @if(isset($game))
            <h2>{{ $game->name }}</h2>
            <img src="{{ asset($game->image) }}" alt="game">
            <h4>{{ $game->price }}</h4>
            <p>{{ $game->description }}</p>
        @else 
            <h1>No record</h1>
        @endif
    </div>

    <form action="{{ route('add-to-cart') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-secondary btn-lg">Add to Cart</button>
        <input name="game" type="hidden" value="{{ $game->name }}"> 
    </form>
@endsection