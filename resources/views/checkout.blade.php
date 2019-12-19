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
                        <div class="text-center">
                            <a href="/playstation/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a>
                            <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Price: £{{ $product->price }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Quantity: {{ $product->qty }}</span>
                        </div>
                    </li>
                @elseif($product->options->platform === 'Xbox')
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <a href="/xbox/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                        <div class="text-center">
                            <a href="/xbox/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a>
                            <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Price: £{{ $product->price }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Quantity: {{ $product->qty }}</span>
                        </div>
                    </li>
                @elseif($product->options->platform === 'Nintendo')
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <a href="/nintendo/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                        <div class="text-center">
                            <a href="/nintendo/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a>
                            <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Price: £{{ $product->price }}</span>
                            <span class="text-muted font-weight-normal font-italic d-block">Quantity: {{ $product->qty }}</span>
                        </div>
                    </li>
                @elseif($product->options->platform === 'PC')
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <a href="/pc/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                        <div class="text-center">
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

        {{-- BILLING INFO --}}
        <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing Information</h4>

        <form action="{{ route('checkout.store') }}" method="POST" class="needs-validation" id="payment-form" novalidate>
            @csrf 
            <div class="row">
                @if(auth()->user())
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="" value="{{ auth()->user()->name }}" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="{{ auth()->user()->email }}" readonly>
                    </div>
                @else 
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="John Appleseed" value="" required>
                        <div class="invalid-feedback">Valid name is required.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="lastName" placeholder="johnapp@example.com" value="" required>
                        <div class="invalid-feedback">Valid email is required.</div>
                    </div>
                @endif 
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
                    <option>Choose...</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AG">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AG">Antigua &amp; Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AA">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BL">Bonaire</option>
                    <option value="BA">Bosnia &amp; Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="BC">British Indian Ocean Ter</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="IC">Canary Islands</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CD">Channel Islands</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CI">Christmas Island</option>
                    <option value="CS">Cocos Island</option>
                    <option value="CO">Colombia</option>
                    <option value="CC">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CT">Cote D'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CB">Curacao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="TM">East Timor</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FA">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="FS">French Southern Ter</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GB">Great Britain</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GN">Guinea</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HW">Hawaii</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IA">Iran</option>
                    <option value="IQ">Iraq</option>
                    <option value="IR">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="NK">Korea North</option>
                    <option value="KS">Korea South</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau</option>
                    <option value="MK">Macedonia</option>
                    <option value="MG">Madagascar</option>
                    <option value="MY">Malaysia</option>
                    <option value="MW">Malawi</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="ME">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="MI">Midway Islands</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Nambia</option>
                    <option value="NU">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="AN">Netherland Antilles</option>
                    <option value="NL">Netherlands (Holland, Europe)</option>
                    <option value="NV">Nevis</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NW">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau Island</option>
                    <option value="PS">Palestine</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PO">Pitcairn Island</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="ME">Republic of Montenegro</option>
                    <option value="RS">Republic of Serbia</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="NT">St Barthelemy</option>
                    <option value="EU">St Eustatius</option>
                    <option value="HE">St Helena</option>
                    <option value="KN">St Kitts-Nevis</option>
                    <option value="LC">St Lucia</option>
                    <option value="MB">St Maarten</option>
                    <option value="PM">St Pierre &amp; Miquelon</option>
                    <option value="VC">St Vincent &amp; Grenadines</option>
                    <option value="SP">Saipan</option>
                    <option value="SO">Samoa</option>
                    <option value="AS">Samoa American</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome &amp; Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="OI">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="TA">Tahiti</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad &amp; Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TU">Turkmenistan</option>
                    <option value="TC">Turks &amp; Caicos Is</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option selected="selected" value="GB">United Kingdom</option>
                    <option value="US">United States of America</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VS">Vatican City State</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="VB">Virgin Islands (Brit)</option>
                    <option value="VA">Virgin Islands (USA)</option>
                    <option value="WK">Wake Island</option>
                    <option value="WF">Wallis &amp; Futana Is</option>
                    <option value="YE">Yemen</option>
                    <option value="ZR">Zaire</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid country.
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <label for="postcode">Postcode</label>
                <input type="text" class="form-control" id="postcode" required>
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

            <!-- STRIPE ELEMENTS -->
            <form action="/charge" method="post" id="payment-form">
                <div class="form-row">
                  <label class="ml-1" for="card-element">
                    Credit or debit card
                  </label>
                  <div id="card-element">
                    <!-- a Stripe Element will be inserted here. -->
                  </div>
              
                  <!-- Used to display form errors. -->
                  <div id="card-errors" role="alert"></div>
                </div>
                <br>
                <hr class="mb-4">
                <p id="no-products"></p>
                <button id="submit-payment" class="btn btn-lg btn-block" type="submit"><b>Submit Payment</b></button>
            </form>
            <!-- END STRIPE ELEMENTS -->
            {{-- END BILLING INFO --}}

        </form> 
        </div>
    </div>
    </div>

    {{-- ALERT: CART IS EMPTY --}}
    @if(Cart::count() == 0)
        <script>
            document.getElementById('submit-payment').disabled = true;
            document.getElementById('no-products').textContent = 'Your cart is empty!';
            document.getElementById('no-products').className = 'w-25 alert alert-danger';
        </script>
    @endif
    {{-- END ALERT: CART IS EMPTY --}}

    <script>
        (function() {
        // creates a Stripe client
        var stripe = Stripe('pk_test_9dn1vt3i0j0Q5GZdwAXn9iUs00iMziQDyD');

        // creates an instance of Elements
        var elements = stripe.elements();

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

        // creates an instance of the card Element
        var card = elements.create('card', { style: style, hidePostalCode: true });

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // handles real-time validation errors from the card Element
        card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
        });

        // handles form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
        event.preventDefault();

        // disables the submit button to prevent repeated clicks
        document.getElementById('submit-payment').disabled = true; 

        stripe.createToken(card).then(function(result) {
            if (result.error) {
            // informs the user if there was an error
            // enables the submit button if validation fails
            document.getElementById('submit-payment').disabled = false;
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            } else {
            // sends the token to the server
            stripeTokenHandler(result.token);
            }
        });
        });

        // submits the form with the token ID
        function stripeTokenHandler(token) {
        // inserts the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // submits the form
        form.submit();
        }
        })();
    </script>

    </body>
    </html>
@endsection

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');

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
