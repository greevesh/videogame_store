@extends('layouts.app')

@section('content')
<div class="container">
        <div class="auth-pages">
            <div class="auth-left">
                <h2>Returning Customer</h2>
                <div class="spacer"></div>
    
                <form action="https://laravelecommerceexample.ca/login" method="POST">
                    <input type="hidden" name="_token" value="47VraBSR0uIv9xgkY4TVf3b6jwzc5Un30qFjHQ5w">
    
                    <input type="email" id="email" name="email" value="" placeholder="Email" required autofocus>
                    <input type="password" id="password" name="password" value="" placeholder="Password" required>
    
                    <div class="login-container">
                        <button type="submit" class="auth-button">Login</button>
                        <label>
                            <input type="checkbox" name="remember">Remember Me
                        </label>
                    </div>
    
                    <div class="spacer"></div>
    
                    <a href="https://laravelecommerceexample.ca/password/reset">
                        Forgot Your Password?
                    </a>
    
                </form>
            </div>
    
            <div class="auth-right">
                <h2>New Customer</h2>
                <div class="spacer"></div>
                <p><strong>Save time now.</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.</p>
                <div class="spacer"></div>
                <a href="https://laravelecommerceexample.ca/guestCheckout" class="auth-button-hollow">Continue as Guest</a>
                <div class="spacer"></div>
                &nbsp;
                <div class="spacer"></div>
                <p><strong>Save time later.</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.</p>
                <div class="spacer"></div>
                <a href="https://laravelecommerceexample.ca/register" class="auth-button-hollow">Create Account</a>
            </div>
        </div>
    </div>
@endsection   
