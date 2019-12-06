@extends('layouts.app')

@section('title', '- Checkout')

<!-- Stripe integration -->
<script src="https://js.stripe.com/v3/"></script>

@section('content')
    <title>Checkout</title>

    <body class="bg-light">

    <hr style="width: 90%;" class="mt-4 mb-5">

    <div class="container">

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">Your products:</h6>
                </div>
            </li>
            @foreach(Cart::content() as $product)
                @if($product->options->platform === 'Playstation')
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <a href="/playstation/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                        <div class="ml-3 d-inline-block align-middle">
                            <a href="/playstation/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a>
                            <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Price: £{{ $product->price }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Quantity: {{ $product->qty }}</span>
                        </div>
                    </li>
                @elseif($product->options->platform === 'Xbox')
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <a href="/xbox/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                        <div class="ml-3 d-inline-block align-middle">
                            <a href="/xbox/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a>
                            <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Price: £{{ $product->price }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Quantity: {{ $product->qty }}</span>
                        </div>
                    </li>
                @elseif($product->options->platform === 'Nintendo')
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <a href="/nintendo/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                        <div class="ml-3 d-inline-block align-middle">
                            <a href="/nintendo/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a>
                            <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Price: £{{ $product->price }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Quantity: {{ $product->qty }}</span>
                        </div>
                    </li>
                @elseif($product->options->platform === 'PC')
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <a href="/pc/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                        <script>
                                (function(){
                                // Create a Stripe client.
                                var stripe = Stripe('pk_test_9dn1vt3i0j0Q5GZdwAXn9iUs00iMziQDyD');
                        
                                // Create an instance of Elements.
                                var elements = stripe.elements();
                        
                                // Custom styling can be passed to options when creating an Element.
                                // (Note that this demo uses a wider set of styles than the guide below.)
                                var style = {
                                base: {
                                    color: '#32325d',
                                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                                    fontSmoothing: 'antialiased',
                                    fontSize: '16px',
                                    '::placeholder': {
                                    color: '#aab7c4'
                                    }
                                },
                                invalid: {
                                    color: 'red',
                                    iconColor: 'red'
                                }
                                };
                        
                                // Create an instance of the card Element.
                                var card = elements.create('card', { style: style, hidePostalCode: true });
                        
                                // Add an instance of the card Element into the `card-element` <div>.
                                card.mount('#card-element');
                        
                                // Handle real-time validation errors from the card Element.
                                card.addEventListener('change', function(event) {
                                var displayError = document.getElementById('card-errors');
                                if (event.error) {
                                    displayError.textContent = event.error.message;
                                } else {
                                    displayError.textContent = '';
                                }
                                });
                        
                                // Handle form submission.
                                var form = document.getElementById('payment-form');
                                form.addEventListener('submit', function(event) {
                                event.preventDefault();
                        
                                stripe.createToken(card).then(function(result) {
                                    if (result.error) {
                                    // Inform the user if there was an error.
                                    var errorElement = document.getElementById('card-errors');
                                    errorElement.textContent = result.error.message;
                                    } else {
                                    // Send the token to your server.
                                    stripeTokenHandler(result.token);
                                    }
                                });
                                });
                        
                                // Submit the form with the token ID.
                                function stripeTokenHandler(token) {
                                // Insert the token ID into the form so it gets submitted to the server
                                var form = document.getElementById('payment-form');
                                var hiddenInput = document.createElement('input');
                                hiddenInput.setAttribute('type', 'hidden');
                                hiddenInput.setAttribute('name', 'stripeToken');
                                hiddenInput.setAttribute('value', token.id);
                                form.appendChild(hiddenInput);
                        
                                // Submit the form
                                form.submit();
                                }
                                        })();
                            </script>
                        @endsection
                        
                        @section('extraJS')
                            <!-- Bootstrap core JavaScript
                            ================================================== -->
                            <!-- Placed at the end of the document so the pages load faster -->
                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
                            <script src="../../assets/js/vendor/popper.min.js"></script>
                            <script src="../../dist/js/bootstrap.min.js"></script>
                            <script src="../../assets/js/vendor/holder.min.js"></script>
                            <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                        
                                window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                        
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                    }, false);
                                });
                                }, false);
                            })();
                            </script>    <div class="ml-3 d-inline-block align-middle">
                            <a href="/pc/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a>
                            <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Price: £{{ $product->price }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Quantity: {{ $product->qty }}</span>
                        </div>
                    </li>
                @endif
            @endforeach
            <li class="list-group-item d-flex justify-content-between">
                <span>You're paying:</span>
                <strong>£{{ Cart::total() }}</strong>
            </li>
        </ul>

        </div>
        <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing Information</h4>
        <form class="needs-validation" id="payment-form" novalidate>
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">Valid first name is required.</div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">Valid last name is required.</div>
            </div>
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">Please enter your shipping address.</div>
            </div>

            <div class="mb-3">
                <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
            <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid country.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
                </select>
                <div class="invalid-feedback">
                Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="postcode">Postcode</label>
                <input type="text" class="form-control" id="postcode" placeholder="" required>
                <div class="invalid-feedback">
                    Postcode required.
                </div>
            </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">Name on card is required</div>
                </div>
            </div>

            <!-- Stripe elements -->
            <form action="/charge" method="post" id="payment-form">
                <div class="form-row">
                  <label class="ml-1" for="card-element">
                    Credit or debit card
                  </label>
                  <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                  </div>
              
                  <!-- Used to display form errors. -->
                  <div id="card-errors" role="alert"></div>
                </div>
                <br>
                <hr class="mb-4">
                <button id="submit-payment" class="btn btn-lg btn-block" type="submit"><b>Submit Payment</b></button>
            </form>
            <!-- end Stripe elements -->

        </form> 
        <!-- end entire checkout form -->
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 Gamer</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
    </div>

@section('stripe')
    <script>
        (function(){
        // Create a Stripe client.
        var stripe = Stripe('pk_test_9dn1vt3i0j0Q5GZdwAXn9iUs00iMziQDyD');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
            color: '#aab7c4'
            }
        },
        invalid: {
            color: 'red',
            iconColor: 'red'
        }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', { style: style, hidePostalCode: true });

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
            }
        });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
        }
                })();
    </script>
@endsection

@section('extraJS')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
            }, false);
        });
        }, false);
    })();
    </script>
@endsection 
    
    </body>
    </html>
@endsection
