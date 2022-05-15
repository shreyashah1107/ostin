@extends('layouts.default')

@section('pageTitle', config('meta.home.title'))
@section('pageDescription'){!! config('meta.home.description') !!}@endsection
@section('pageKeywords'){!! config('meta.home.keywords') !!}@endsection

@section('plugins-style')
    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
@endsection

@section('page-style')
@endsection

@section('content')	
    {{-- Start: Hero Slider --}}
        <section class="hero-slider">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <figure>
                        <div class="image">
                            <img src="{{ asset("./img/hero/slide1.jpg") }}" alt="Slide 1"/>
                        </div>
                        
                        <figcaption>
                            <div class="container">
                               <div class="row">
                                   <div class="col-12">
                                        <!--<span class="figcapspan">it's elegant & rich of sense of times, showing the concept of original design</span>-->
                                    </div>
                               </div>                        
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="item">
                    <figure>
                        <div class="image">
                            <img src="{{ asset("./img/hero/slide2.jpg") }}" alt="Slide 2"/>
                        </div>
                        
                        <figcaption>
                            <div class="container">
                               <div class="row">
                                   <div class="col-12">
                                        <!--<span class="figcapspan">it's elegant & rich of sense of times, showing the concept of original design</span>-->
                                    </div>
                               </div>                        
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="item">
                    <figure>
                        <div class="image">
                            <img src="{{ asset("./img/hero/slide3.jpg") }}" alt="Slide 3"/>
                        </div>
                        
                        <figcaption>
                            <div class="container">
                               <div class="row">
                                   <div class="col-12">
                                        <!--<span class="figcapspan">it's elegant & rich of sense of times, showing the concept of original design</span>-->
                                    </div>
                               </div>                        
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>    
    {{-- End: Hero Slider --}}

    {{-- Start: Collection --}}
        <section class="collection section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="section-title">Choose Category You're Interested In</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="category">
                            <div class="category-img">
                                <img src="{{ asset("./img/category/img1.jpg") }}" alt="P.T.M.T. Faucets">
                            </div>

                            <div class="category-content">
                                <div class="title">P.T.M.T.<br>Faucets</div>
                                <div class="view-more-link">
                                    <a href="#" title="View More">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="category">
                            <div class="category-img">
                                <img src="{{ asset("./img/category/img2.jpg") }}" alt="Cisterns">
                            </div>

                            <div class="category-content">
                                <div class="title">Cisterns</div>
                                <div class="view-more-link">
                                    <a href="#" title="View More">View More</a>
                                </div>
                            </div>
                        </div>                    
                    </div>

                    <div class="col-lg-4">
                        <div class="category">
                            <div class="category-img">
                                <img src="{{ asset("./img/category/img3.jpg") }}" alt="Showers">
                            </div>

                            <div class="category-content">
                                <div class="title">Showers</div>
                                <div class="view-more-link">
                                    <a href="#" title="View More">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
    {{-- End: Collection --}}

    {{-- Start: Product Listing --}}
        <section class="product-listing section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="section-title">Optimum Products</h1>
                    </div>
                </div>

                <div class="product-slider">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="card-product">
                                <div class="product-img">
                                    <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="Basin Mixer">

                                    <div class="caption">
                                        <a href="#" class="quickview">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>  

                                <div class="content">
                                    <h2>
                                        <a href="#">CENTER HOLE BASIN MIXER</a>
                                    </h2>
                                    <a href="#" title="View More" class="btn btn-primary">
                                        VIEW MORE
                                    </a>
                                </div>  
                            </div>                      
                        </div>

                        <div class="item">
                            <div class="card-product">
                                <div class="product-img">
                                    <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">

                                    <div class="caption">
                                        <a href="#" class="quickview">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>  

                                <div class="content">
                                    <h2>
                                        <a href="#">EDGE PRIME BIB COCK</a>
                                    </h2>
                                    <a href="#" title="View More" class="btn btn-primary">
                                        VIEW MORE
                                    </a>
                                </div>  
                            </div>                      
                        </div>

                        <div class="item">
                            <div class="card-product">
                                <div class="product-img">
                                    <img src="{{ asset("/img/products/df2bd778bde6d2d676f916a059794d67.jpg") }}" alt="Basin Mixer">

                                    <div class="caption">
                                        <a href="#" class="quickview">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>  

                                <div class="content">
                                    <h2>
                                        <a href="#">SINGLE LEVER BASIN MIXER TALL BODY</a>
                                    </h2>
                                    <a href="#" title="View More" class="btn btn-primary">
                                        VIEW MORE
                                    </a>
                                </div>  
                            </div>  
                        </div>

                        <div class="item">
                            <div class="card-product">
                                <div class="product-img">
                                    <img src="{{ asset("/img/products/superb_bib_cock.jpg") }}" alt="Basin Mixer">

                                    <div class="caption">
                                        <a href="#" class="quickview">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>  

                                <div class="content">
                                    <h2>
                                        <a href="#">SUPERB BIB COCK</a>
                                    </h2>
                                    <a href="#" title="View More" class="btn btn-primary">
                                        VIEW MORE
                                    </a>
                                </div>  
                            </div>       
                        </div>

                        <div class="item">
                            <div class="card-product">
                                <div class="product-img">
                                    <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="Basin Mixer">

                                    <div class="caption">
                                        <a href="#" class="quickview">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>  

                                <div class="content">
                                    <h2>
                                        <a href="#">CENTER HOLE BASIN MIXER</a>
                                    </h2>
                                    <a href="#" title="View More" class="btn btn-primary">
                                        VIEW MORE
                                    </a>
                                </div>  
                            </div>                      
                        </div>

                        <div class="item">
                            <div class="card-product">
                                <div class="product-img">
                                    <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">

                                    <div class="caption">
                                        <a href="#" class="quickview">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>  

                                <div class="content">
                                    <h2>
                                        <a href="#">EDGE PRIME BIB COCK</a>
                                    </h2>
                                    <a href="#" title="View More" class="btn btn-primary">
                                        VIEW MORE
                                    </a>
                                </div>  
                            </div>                      
                        </div>

                        <div class="item">
                            <div class="card-product">
                                <div class="product-img">
                                    <img src="{{ asset("/img/products/df2bd778bde6d2d676f916a059794d67.jpg") }}" alt="Basin Mixer">

                                    <div class="caption">
                                        <a href="#" class="quickview">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>  

                                <div class="content">
                                    <h2>
                                        <a href="#">SINGLE LEVER BASIN MIXER TALL BODY</a>
                                    </h2>
                                    <a href="#" title="View More" class="btn btn-primary">
                                        VIEW MORE
                                    </a>
                                </div>  
                            </div>                      
                        </div>

                        <div class="item">
                            <div class="card-product">
                                <div class="product-img">
                                    <img src="{{ asset("/img/products/superb_bib_cock.jpg") }}" alt="Basin Mixer">

                                    <div class="caption">
                                        <a href="#" class="quickview">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </div>  

                                <div class="content">
                                    <h2>
                                        <a href="#">SUPERB BIB COCK</a>
                                    </h2>
                                    <a href="#" title="View More" class="btn btn-primary">
                                        VIEW MORE
                                    </a>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- End: Product Listing --}}

    {{-- Start: Query --}}
        <section class="query section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="query-banner-item">
                            <div class="query-banner-img">
                                <a href="tel:9999999999" title="Contact Us">
                                    <img src="{{ asset("/img/other/contact.jpg")}}" alt="customer-care">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="query-banner-item">
                            <div class="query-banner-img">
                                <a href="#" target="_blank" title="Product Catalogue">
                                    <img src="{{ asset("/img/other/catalogue.jpg")}}" alt="Product-Catalogue">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    {{-- End: Query --}}
@endsection

@section('modal')
@endsection

@section('plugins-scripts')
    {{-- Owl Carousel --}}
    <script src="{{ asset('/js/owl.carousel.js')}}"></script>
@endsection

@section('page-scripts')
    <script>
        $('.hero-slider .owl-carousel').owlCarousel({
            autoPlay: true,
            items: 1,
            singleItem: true,
            navigation: true,
            pagination: false,
        });

        $('.product-slider .owl-carousel').owlCarousel({
            autoPlay: true,
            items: 4,
            navigation: true,
            pagination: false,

            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                800: {
                    items: 2
                },
                1200:{
                    items:2
                }
            }
        });
    </script>
@endsection

