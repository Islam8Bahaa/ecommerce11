@extends('layouts.user')
@section('title')
Welcome
@endsection
@section('content')

<main>
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
                                        <span>View</span>
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
    <section id="About">
        <div class="provide">
            <div class="container">
                <div class="provide-box">
                    <div class="provide-text">
                        <h2>
                            We Provide Best For You
                        </h2>
                        <p>
                            Totam architecto rem beatae veniam, cum officiis adipisci soluta perspiciatis ipsa,
                            expedita
                            maiores quae accusantium. Animi veniam aperiam, necessitatibus mollitia ipsum id optio
                            ipsa
                            odio ab facilis sit labore officia!
                            Repellat expedita, deserunt eum soluta rem culpa. Aut, necessitatibus cumque. Voluptas
                            consequuntur vitae aperiam animi sint earum, ex unde cupiditate, molestias dolore quos
                            quas
                            possimus eveniet facilis magnam? Vero, dicta.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                    <div class="provide-img">
                        <img src="{{ URL::asset('userpanel/img/about-img.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Why">
        <div class="why">
            <div class="container">
                <div class="why-text">
                    <h2>
                        Why Choose Us
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ URL::asset('userpanel/img/w1.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Fast Delivery
                                </h5>
                                <p>
                                    variations of passages of Lorem Ipsum available
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ URL::asset('userpanel/img/w2.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Free Shiping
                                </h5>
                                <p>
                                    variations of passages of Lorem Ipsum available
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ URL::asset('userpanel/img/w3.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Best Quality
                                </h5>
                                <p>
                                    variations of passages of Lorem Ipsum available
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Testimonial">
        <div class="about">
            <div class="container">
                <div class="about-text">
                    <h2>
                        What Says Our Customers
                    </h2>
                </div>
                <div class="about-box">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="box">
                                    <div class="detail-box">
                                        <p>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </p>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            readable
                                            content of a page
                                            when looking at its layout. The point of using Lorem Ipsum is that it
                                            has a
                                            more-or-less normal
                                            distribution of letters, as opposed to using 'Content here, content
                                            here', making it
                                            lookIt is a
                                            long established fact that a reader will be distracted by the readable
                                            content of a
                                            page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal
                                            distribution of letters, as opposed to using 'Content here, content
                                            here', making it
                                            look
                                        </p>
                                    </div>
                                    <div class="client-id">
                                        <div class="img-box">
                                            <img src="{{ URL::asset('userpanel/img/client.jpg') }}" alt="">
                                        </div>
                                        <div class="name">
                                            <h5>
                                                James Dew
                                            </h5>
                                            <h6>
                                                Photographer
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="box">
                                    <div class="detail-box">
                                        <p>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </p>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            readable
                                            content of a page
                                            when looking at its layout. The point of using Lorem Ipsum is that it
                                            has a
                                            more-or-less normal
                                            distribution of letters, as opposed to using 'Content here, content
                                            here', making it
                                            lookIt is a
                                            long established fact that a reader will be distracted by the readable
                                            content of a
                                            page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal
                                            distribution of letters, as opposed to using 'Content here, content
                                            here', making it
                                            look
                                        </p>
                                    </div>
                                    <div class="client-id">
                                        <div class="img-box">
                                            <img src="{{ URL::asset('userpanel/img/client.jpg') }}" alt="">
                                        </div>
                                        <div class="name">
                                            <h5>
                                                James Dew
                                            </h5>
                                            <h6>
                                                Photographer
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="box">
                                    <div class="detail-box">
                                        <p>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </p>
                                        <p>
                                            It is a long established fact that a reader will be distracted by the
                                            readable
                                            content of a page
                                            when looking at its layout. The point of using Lorem Ipsum is that it
                                            has a
                                            more-or-less normal
                                            distribution of letters, as opposed to using 'Content here, content
                                            here', making it
                                            lookIt is a
                                            long established fact that a reader will be distracted by the readable
                                            content of a
                                            page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal
                                            distribution of letters, as opposed to using 'Content here, content
                                            here', making it
                                            look
                                        </p>
                                    </div>
                                    <div class="client-id">
                                        <div class="img-box">
                                            <img src="{{ URL::asset('userpanel/img/client.jpg') }}" alt="">
                                        </div>
                                        <div class="name">
                                            <h5>
                                                James Dew
                                            </h5>
                                            <h6>
                                                Photographer
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="info_contact">
                            <h5>
                                <a href="" class="navbar-brand">
                                    <span>
                                        Minics
                                    </span>
                                </a>
                            </h5>
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Address
                            </p>
                            <p>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                +01 1234567890
                            </p>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                Islam@info.com
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_info">
                            <h5>
                                Information
                            </h5>
                            <p>
                                Eligendi sunt, provident, debitis nemo, facilis cupiditate velit libero dolorum
                                aperiam
                                enim nulla iste maxime corrupti ad illo libero minus.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_links">
                            <h5>
                                Useful Link
                            </h5>
                            <ul>
                                <li>
                                    <a href="index.html">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="product.html">
                                        Products
                                    </a>
                                </li>
                                <li>
                                    <a href="why.html">
                                        Why Us
                                    </a>
                                </li>
                                <li>
                                    <a href="testimonial.html">
                                        Testimonial
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_form ">
                            <h5>
                                Newsletter
                            </h5>
                            <form action="">
                                <input type="email" placeholder="Enter your email">
                                <button>
                                    Subscribe
                                </button>
                            </form>
                            <div class="social_box">
                                <a href="">
                                    <i class="fab fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Main-->
@endsection