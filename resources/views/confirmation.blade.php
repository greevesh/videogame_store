@extends('layouts.app')

@section('content')
    @if(session()->has('paymentSuccessMessage'))
        <h2 class="alert alert-success text-center">{{ session()->get('paymentSuccessMessage') }}</h2>
        <h3 class="text-center"><a href="{{ route('landingpage') }}">Return Home</a></h3>
    @endif
@endsection
