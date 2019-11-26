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
                      <h3 class="alert alert-success">
                        {{ $product->name }} {{ session()->get('productAddedSuccessMessage') }}
                      </h3>
                    @endforeach
                  @endif

                <h4>{{ Cart::count() }} products(s) in the cart.</h4>
                
                <br>

                @if(session()->has('emptyCartSuccessMessage'))
                  <h3 class="alert alert-success">
                    {{ session()->get('emptyCartSuccessMessage') }}
                  </h3>
                @endif 

                <form action="{{ route('cart.destroy') }}" method="POST">
                    @csrf 
                    {{ method_field('DELETE') }}
                    <a><button type="submit">Empty Cart</button></a>
                </form>

                <br>
      
                <!-- Shopping cart table -->
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
                              <img src="{{ asset($product->options->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                              <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{ $product->name }}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Platform: {{ $product->options->platform }}</span>
                              </div>
                            </div>
                          </th>
                          <td class="border-0 align-middle"><strong>£{{ $product->price }}</strong></td>
                          <td class="border-0 align-middle"><strong>{{ $product->qty }}</strong></td>
                          <td class="border-0 align-middle">
                          <form action="{{ route('cart.removeSingleProduct', $product->rowId) }}" method="POST" class="text-dark">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button><i class="fa fa-trash"></i></button>
                          </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- End -->
              </div>
            </div>
      
            <div class="col-lg-6">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
              <div class="p-4">
                <ul class="list-unstyled mb-4">
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                    <h5 class="font-weight-bold">$400.00</h5>
                  </li>
                </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection 
