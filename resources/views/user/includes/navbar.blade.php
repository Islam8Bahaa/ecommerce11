<!-- Navbar -->
<section id="Home">
    <div class="intro">
        <div class="container">
            <div class="top-nav">
                <div class="contact-nav">
                    <a href="#">
                        <i class="fas fa-phone-alt"></i>
                        <span> Call : +01 123455678990</span>
                    </a>
                    <a href="#">
                        <i class="fas fa-envelope"></i>
                        <span>
                            Email : Islam@info.com
                        </span>
                    </a>
                </div>
                <form action="{{route('search')}}" method="GET" class="search-bar">
                    <input type="text" class="form-control" placeholder="Search here...">
                    <button class="" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
                <div class="option-box">
                    <a href="{{route('profile.show' , Auth::user()->id)}}" class="active">
                        <img src="{{asset('uploads/users/' . Auth::user()->uimg)}}" alt="" style="max-width: 10%">

                        <span>
                            My Account
                        </span>
                    </a>
                    <a href="{{route('cart.show')}}" class="active">
                        <i class="fa fa-shopping-cart"></i>
                        <span>
                            Cart
                        </span>
                        ({{session()->has('cart') ? session()->get('cart')->totalQty : '0'}})
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="overlay"></div>
            <nav>
                <div class="logo">
                    <a href="index.html">
                        <span>
                            Minics
                        </span>
                </div>
                <ul>
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#Products">Products</a></li>
                    <li><a href="#Why">Why Us</a></li>
                    <li><a href="#Testimonial">Testimonial</a></li>
                </ul>
                <div class="mobile-btn">
                    <div class="icon menu-icon">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="icon close-icon">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
<!-- End Navbar -->