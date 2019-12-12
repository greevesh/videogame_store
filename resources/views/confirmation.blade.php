@extends('layouts.app')

@section('content')
    @if(session()->has('successMessage'))
        <h2>{{ session()->get('successMessage') }}</h2>
    @endif
@endsection
