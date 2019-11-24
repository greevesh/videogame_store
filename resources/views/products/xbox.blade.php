@extends('layouts.products')

@section('title', '- Xbox Games')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">Xbox Games</h1>
    @if(isset($xboxGames))
        @foreach($xboxGames as $xboxGame)
            @if($xboxGame->game_id % 3 === 0) 
                <div class="card bg-light products-right-xbox">
                    <a href="/xbox/{{ $xboxGame->slug }}"><img src="{{ asset($xboxGame->image) }}" class="card-img-top" alt="xbox game"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $xboxGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $xboxGame->price }}</b></h3>
                    </div>
                </div>
            @elseif($xboxGame->game_id === 14 || 
                    $xboxGame->game_id === 17 || 
                    $xboxGame->game_id === 20 ||
                    $xboxGame->game_id === 23)  
                <div class="card bg-light products-center-xbox">
                    <a href="/xbox/{{ $xboxGame->slug }}"><img src="{{ asset($xboxGame->image) }}" class="card-img-top" alt="xbox game"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $xboxGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $xboxGame->price }}</b></h3>
                    </div>
                </div>
            @else
                <div class="card bg-light products-left-xbox">
                    <a href="/xbox/{{ $xboxGame->slug }}"><img style="width: 17.5rem;" src="{{ asset($xboxGame->image) }}" alt="xbox game"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $xboxGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $xboxGame->price }}</b></h3>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection