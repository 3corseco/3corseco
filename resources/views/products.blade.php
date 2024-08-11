@extends('layout')

@section('title', $title)
<style>

</style>

@section('content')
<section class="row our-collection">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>Our Collection</h2>
                <p>You are unique. You have unique style and you need a unique watch for you. Choose from our collection of watches.</p>
            </div>
            <div class="row collections">
                <!--==========Collection Items==========-->
                @foreach ($product_list as $product)    
                    <div class="col-sm-6 col-md-3 item wow fadeIn">
                        <div class="row m0 featured-img">
                            <img src="images/collection-1.jpg" alt="">
                        </div>
                        <h4 class="title">{{ $product->product_title_kh }}</h4>
                        <h5 class="category"></h5>

                        <h4 class="price">{{ $product->price }}</h4>
                        <a href="#product-choose" class="btn">CHOOSE</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection