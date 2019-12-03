@extends('layouts.app')

@section('title', '- Cart')

@section('content')
<div style="margin-top: -250px;" class="px-4 px-lg-0">
        <!-- For demo purpose -->
        <div class="container text-white py-5 text-center">
          <h1 class="display-4">Bootstrap 4 shopping cart</h1>
          <p class="lead mb-0">Build a fully structred shopping cart page using Bootstrap 4. </p>
          <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white font-italic">
                  <u>Bootstrapious</u></a>
          </p>
        </div>
        <!-- End -->
      
        <div class="pb-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                  @if(session()->has('productAddedSuccessMessage') && Cart::count() < 4)
                    @foreach(Cart::content() as $product)
                      <h3 class="product-added-message alert alert-success">
                        {{ $product->name }} {{ session()->get('productAddedSuccessMessage') }}
                      </h3>
                    @endforeach
                  @endif

                <h4>{{ Cart::count() }} product(s) in the cart.</h4>
                
                <br>
                
                @if(session()->has('emptyCartSuccessMessage'))
                  <h3 class="empty-cart-messages alert alert-success">
                    {{ session()->get('emptyCartSuccessMessage') }}
                  </h3>
                @elseif(session()->has('emptyCartErrorMessage'))
                  <h3 class="empty-cart-messages alert alert-danger">
                    {{ session()->get('emptyCartErrorMessage') }}
                  </h3>
                @endif 

                @if(session()->has('quantityIncreasedMessage'))
                  <h3 class="alert alert-success">
                    {{ session()->get('quantityIncreasedMessage') }}
                  </h3>
                @endif 

                <form action="{{ route('cart.destroy') }}" method="POST">
                    @csrf 
                    {{ method_field('DELETE') }}
                    <a><button class="empty-cart btn-lg" type="submit"><b>Empty Cart</b></button></a>
                </form>

                <br>
      
                <!-- shopping cart table -->
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
                          <td class="border-0 align-middle"><strong>£{{ $product->price }}</strong></td>
                          <td class="border-0 align-middle">
                            <form action="{{ route('cart.update', $product->rowId) }}" method="POST">
                              @csrf
                              {{ method_field('PATCH') }}
                              <button>+</button>
                            </form>
                            </div>
                          </td>
                          <td class="border-0 align-middle">
                          <form action="{{ route('cart.removeSingleProduct', $product->rowId) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button id="bin-btn"><i class="fa fa-trash"></i></button>
                          </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- end shopping cart table -->
              </div>
            </div>
      
            <div class="col-lg-6">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
              <div class="p-4">
                <ul class="list-unstyled mb-4">
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>£{{ Cart::subtotal() }}</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>Free!</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>£{{ Cart::tax() }}</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                    <h5 class="font-weight-bold">£{{ Cart::total() }}</h5>
                  </li>
                </ul><a id="checkout-btn" href="{{ route('checkout') }}" class="checkout-btn btn rounded-pill py-2 btn-block"><b>Proceed to checkout</b></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection 
