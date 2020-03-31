@extends('layouts.app')

@section('title', '- Cart')

@section('content')
  <div style="margin-top: -15.625rem;" class="px-4 px-lg-0">
    <!-- BOOTSTRAP SHOPPING CART INTEGRATION -->
    <div style="margin-top: 10rem;" class="container text-white py-5 text-center">
      
    </div>
    <!-- END BOOTSTRAP SHOPPING CART INTEGRATION -->

    <div id="cart-container" class="mt-1 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

              {{-- ALERT: PRODUCT ADDED --}}
              @if(session()->has('productAddedSuccessMessage') && Cart::count() < 4)
                @foreach(Cart::content() as $product)
                  <h3 class="product-added-message alert alert-success">
                    {{ $product->name }} {{ session()->get('productAddedSuccessMessage') }}
                  </h3>
                @endforeach
              @endif
              {{-- END ALERT: PRODUCT ADDED --}}

            <h4>{{ Cart::count() }} product(s) in the cart.</h4>
            
            {{-- ALERT: EMPTY CART SUCCESS AND ERROR --}}
            @if(session()->has('emptyCartSuccessMessage'))
              <h3 class="empty-cart-messages alert alert-success w-100">
                {{ session()->get('emptyCartSuccessMessage') }}
              </h3>
            @elseif(session()->has('emptyCartErrorMessage'))
              <h3 class="empty-cart-messages alert alert-danger w-100">
                {{ session()->get('emptyCartErrorMessage') }}
              </h3>
            @endif 
            {{-- END ALERT: EMPTY CART SUCCESS AND ERROR --}}

            {{-- ALERT: QUANTITY INCREASED --}}
            @if(session()->has('quantityIncreasedMessage'))
              <h3 class="w-50 alert alert-success">
                {{ session()->get('quantityIncreasedMessage') }}
              </h3>
            @endif 
            {{-- ALERT: END QUANTITY INCREASED --}}

            {{-- ALERT: QUANTITY DECREASED --}}
            @if(session()->has('quantityDecreasedMessage'))
              <h3 class="w-50 alert alert-success">
                {{ session()->get('quantityDecreasedMessage') }}
              </h3>
            @endif 
            {{-- ALERT: END QUANTITY  --}}

            @if(session()->has('removedSingleProductSuccessMessage'))
              <h3 class="w-50 alert alert-success">
                {{ session()->get('removedSingleProductSuccessMessage') }}
              </h3>
            @endif 

            {{-- EMPTY THE ENTIRE CART --}}
            <form action="{{ route('cart.empty') }}" method="POST">
                @csrf 
                @method('DELETE')
                <a><button class="empty-cart btn-lg" type="submit"><b>Empty Cart</b></button></a>
            </form>
            {{-- END EMPTY THE ENTIRE CART --}}

            <br>

            <!-- SHOPPING CART TABLE -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Quantity</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Remove</div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach(Cart::content() as $product)
                    {{-- GET PRODUCT DETAILS BY ROW --}}
                    <tr>
                      <th scope="row" class="border-0">
                        <div class="p-2">
                          @if($product->options->platform === 'Playstation')
                            <a href="/playstation/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                            <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"> <a href="/playstation/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a></h5>
                                <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            </div>
                          @elseif($product->options->platform === 'Xbox')
                            <a href="/xbox/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                            <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"> <a href="/xbox/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a></h5>
                                <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            </div>
                          @elseif($product->options->platform === 'Nintendo')
                            <a href="/nintendo/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                            <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"> <a href="/nintendo/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a></h5>
                                <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            </div>
                          @elseif($product->options->platform === 'PC')
                            <a href="/pc/{{ $product->options->slug }}"><img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm"></a>
                            <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"> <a href="/pc/{{ $product->options->slug }}" class="text-dark d-inline-block align-middle">{{ $product->name }}</a></h5>
                                <span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                            </div>
                          @endif
                        </div>
                      </th>
                      {{-- END GET PRODUCT DETAILS BY ROW --}}
                      <td class="border-0 align-middle"><strong>£{{ $product->price }}</strong></td>

                      {{-- INCREASE PRODUCT QUANTITY --}}
                      <td class="border-0 align-middle">
                        <form action="{{ route('cart.increaseProductQuantity', $product->rowId) }}" method="POST">
                          @csrf
                          @method('PATCH')
                          <div style="margin-top: -1rem;">
                            <button class="bg-success text-white mt-1" style="margin-left: 1.35rem; width: 2rem;"><strong>+</strong></button>
                          </div>
                        </form>
                        {{-- DECREASE PRODUCT QUANTITY --}}
                        <form action="{{ route('cart.decreaseProductQuantity', $product->rowId) }}" method="POST">
                          @csrf
                          @method('PATCH')
                          <button class="bg-danger text-white" style="margin-left: 1.35rem; width: 2rem;"><strong>-</strong></button>
                        </form>
                      {{-- END DECREASE PRODUCT QUANTITY --}}
                        <div style="margin-top: -2.5rem;"><strong>{{ $product->qty }}</strong></div>
                      </td>
                      {{-- END INCREASE PRODUCT QUANTITY --}}

                      {{-- REMOVE INDIVIDUAL PRODUCT FROM CART --}}
                      <td class="border-0 align-middle">
                      <form action="{{ route('cart.removeSingleProduct', $product->rowId) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button id="bin-btn"><i class="fa fa-trash"></i></button>
                      </form>
                      </td>
                      {{-- END REMOVE INDIVIDUAL PRODUCT FROM CART --}}
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- END SHOPPING CART TABLE -->
          </div>
        </div>
        
        {{-- GET PRICING DETAILS --}}
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary</div>
          <div class="p-4">
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>£{{ Cart::subtotal() }}</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping</strong><strong id="shipping">Free</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>£{{ Cart::tax() }}</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 id="total" class="font-weight-bold">£{{ Cart::total() }}</h5>
              </li>
            </ul>

            <div id="checkout-btn"><a id="checkout" class="checkout-btn btn rounded-pill py-2 btn-block" href="{{ route('checkout') }}"><b>Proceed to checkout</b></a></div>
          </div>
        </div>
        {{-- END PRICING DETAILS --}}
        
      </div>
    </div>
  </div>
  </div>
@endsection 
