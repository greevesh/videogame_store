@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-container container">
            <div>
                <a href="/"><i class="fas fa-home"></i></a>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </div> <!-- end breadcrumbs -->

        <div class="cart-section container">
            <div>
                <h3>You have no items in your cart!</h3>
            </div>
        </div> <!-- end cart-section -->

        <div class="might-like-section">
        <div class="container">
            <h2>You might also like...</h2>
            <div class="might-like-grid">
                <a href="" class="might-like-product">
                    <img src="" alt="product">
                    <div class="might-like-product-name"></div>
                    <div class="might-like-product-price"></div>
                </a>
                <a href="" class="might-like-product">
                    <img src="" alt="product">
                    <div class="might-like-product-name"></div>
                    <div class="might-like-product-price"></div>
                </a>
                <a href="" class="might-like-product">
                    <img src="" alt="product">
                    <div class="might-like-product-name"></div>
                    <div class="might-like-product-price"></div>
                </a>
                <a href="" class="might-like-product">
                    <img src="" alt="product">
                    <div class="might-like-product-name"></div>
                    <div class="might-like-product-price"></div>
                </a>  
            </div>
        </div>
    </div>
@endsection

</body>
</html>