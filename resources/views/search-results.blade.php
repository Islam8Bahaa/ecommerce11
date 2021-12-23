@extends('layouts.user')
@section('title') Home @endsection
@section ('content')
<!-- <section>
    <div class="feature">
        <div class="container">
            <div class="item">
                <div class="line"></div>
                <h2> Featuerd Items </h2>
                <div class="line"></div>
            </div>
            <div class="All">
                <ul>
                    <li><a href="">All</a></li>
                    <li><a href="">Men</a></li>
                    <li><a href="">Women</a></li>
                    <li><a href="">Kids</a></li>
                </ul>
            </div>
           
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row flex-row flex-wrap align-items-stretch">
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i
                                                        class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> --> 
<section id="Products">
        <div class="order">
            <div class="container">
                <div class="order-text">
                    <h2>
                        Our Products
                    </h2>
                </div>
                <div class="order-box">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <div class="img-box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <a href="{{route('cart.add' , $product->id)}}" class="add-cart">
                                        <span>
                                            Add To Cart
                                        </span>
                                    </a>
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        {{$product->pname}}
                                    </h5>
                                    <div class="price">
                                        <h5>
                                            <span>{{$product->pprice}}$</span>
                                        </h5>
                                        <div class="star-container">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="btn-box">
                    <a href="" class="view-more">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection