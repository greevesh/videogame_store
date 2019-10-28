@extends('layouts.app')

@section('content')
    <div class="featured-section">

        <div class="container">
            <h1 class="text-center">Playstation 4 Games</h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.</h4>
            &nbsp;

        <div class="text-center">
            <div>
                @foreach($playstationGames as $playstationGame)
                    <h2>{{ $playstationGame->name }}</h2>
                    <a href="{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" alt="playstationgame"></a>
                    <h4>{{ $playstationGame->price }}</h4>
                @endforeach  
            </div> 
        </div>
@endsection