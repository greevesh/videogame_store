@extends('layouts.app')

<script src="https://js.stripe.com/v3/"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="dashboard-header" class="card-header"><b>Dashboard</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!&nbsp;&nbsp;<a style="color: black;" href="{{ route('landingpage') }}"><b>Return home</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
