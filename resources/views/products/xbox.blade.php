@extends('layouts.app')

@section('title', '- Xbox Games')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">Xbox Games</h1>
    <hr style="width: 90%;" class="mt-1 mb-5">
    @if(isset($xboxGames))
        @foreach($xboxGames as $xboxGame)
            @if($xboxGame->game_id % 3 === 0)
                <div class="products-right-xbox text-right card">
                    <a href="/xbox/{{ $xboxGame->slug }}"><img src="{{ asset($xboxGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $xboxGame->name }}</h2>
                        <h4 class="price card-text">£{{ $xboxGame->price }}</h4>
                    </div>
                </div>
            @elseif($xboxGame->game_id === 14 or 
                    $xboxGame->game_id === 17 or
                    $xboxGame->game_id === 20 or
                    $xboxGame->game_id === 23)
                <div class="products-center-xbox text-right card">
                    <a href="/xbox/{{ $xboxGame->slug }}"><img src="{{ asset($xboxGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $xboxGame->name }}</h2>
                        <h4 class="price card-text">£{{ $xboxGame->price }}</h4>
                    </div>
                </div>
            @else
                <div class="products-left-xbox text-left card">
                    <a href="/xbox/{{ $xboxGame->slug }}"><img src="{{ asset($xboxGame->image) }}" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $xboxGame->name }}</h2>
                        <h4 class="price card-text">£{{ $xboxGame->price }}</h4>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection