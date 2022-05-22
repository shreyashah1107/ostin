@extends('layouts.default')

@section('pageTitle', config('meta.products-subcategories.title'))
@section('pageDescription'){!! config('meta.products-subcategories.description') !!}@endsection
@section('pageKeywords'){!! config('meta.products-subcategories.keywords') !!}@endsection

@section('content')
    {{-- Start: Hero --}}
        <section class="hero hero-products" style="background-image: url('{{ asset("./img/hero/cisterns.jpg") }}')">
            <div class="container wow fadeIn" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-12">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <h1 class="wow slideInDown" data-wow-delay="0.1s">Cisterns</h1>

                            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay="0.1s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}" title="Home">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('products') }}" title="Products">Products</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('product-category') }}" title="Flushing systems">Flushing systems</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cisterns</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
    {{-- End: Hero --}}

    {{-- Start: Products --}}
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="product-category-tab">
                            <div class="title wow fadeIn" data-wow-delay="0.1s">FLUSHING SYSTEMS</div>

                            <ul class="nav nav-pills nav-stacked wow slideInUp" data-wow-delay="0.1s" id="categoryTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="cisterns-tab" data-bs-toggle="tab" data-bs-target="#cisterns" type="button" role="tab" aria-controls="cisterns" aria-selected="true"><span>cisterns</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="concealed-cisterns-tab" data-bs-toggle="tab" data-bs-target="#concealed-cisterns" type="button" role="tab" aria-controls="concealed-cisterns" aria-selected="false"><span>concealed-cisterns</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="tab-content" id="categoryTabContent">
                            <div class="tab-pane fade show active" id="cisterns" role="tabpanel" aria-labelledby="cisterns-tab">
                                <div class="product-grid">
                                    <div class="product-col">
                                        <div class="card-product wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="product-img">
                                                <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="Basin Mixer">
            
                                                <div class="caption">
                                                    <a href="{{ route('product-details') }}" class="quickview">
                                                        <i class="far fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>  
            
                                            <div class="content">
                                                <h2>
                                                    <a href="{{ route('product-details') }}">CENTER HOLE BASIN MIXER</a>
                                                </h2>
                                            </div>  
                                        </div>        
                                    </div>
                                    <div class="product-col">
                                        <div class="card-product wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="product-img">
                                                <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">
            
                                                <div class="caption">
                                                    <a href="{{ route('product-details') }}" class="quickview">
                                                        <i class="far fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>  
            
                                            <div class="content">
                                                <h2>
                                                    <a href="{{ route('product-details') }}">EDGE PRIME BIB COCK</a>
                                                </h2>
                                            </div>  
                                        </div>       
                                    </div>
                                    <div class="product-col">
                                        <div class="card-product wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="product-img">
                                                <img src="{{ asset("/img/products/df2bd778bde6d2d676f916a059794d67.jpg") }}" alt="Basin Mixer">
            
                                                <div class="caption">
                                                    <a href="{{ route('product-details') }}" class="quickview">
                                                        <i class="far fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>  
            
                                            <div class="content">
                                                <h2>
                                                    <a href="{{ route('product-details') }}">SINGLE LEVER BASIN MIXER TALL BODY</a>
                                                </h2>
                                            </div>  
                                        </div>  
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="concealed-cisterns" role="tabpanel" aria-labelledby="concealed-cisterns-tab">
                                <div class="product-grid">  
                                    <div class="product-col">
                                        <div class="card-product wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="product-img">
                                                <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">
            
                                                <div class="caption">
                                                    <a href="{{ route('product-details') }}" class="quickview">
                                                        <i class="far fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>  
            
                                            <div class="content">
                                                <h2>
                                                    <a href="{{ route('product-details') }}">EDGE PRIME BIB COCK</a>
                                                </h2>
                                            </div>  
                                        </div>       
                                    </div>
                                    <div class="product-col">
                                        <div class="card-product wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="product-img">
                                                <img src="{{ asset("/img/products/df2bd778bde6d2d676f916a059794d67.jpg") }}" alt="Basin Mixer">
            
                                                <div class="caption">
                                                    <a href="{{ route('product-details') }}" class="quickview">
                                                        <i class="far fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>  
            
                                            <div class="content">
                                                <h2>
                                                    <a href="{{ route('product-details') }}">SINGLE LEVER BASIN MIXER TALL BODY</a>
                                                </h2>
                                            </div>  
                                        </div>  
                                    </div>
                                    <div class="product-col">
                                        <div class="card-product wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="product-img">
                                                <img src="{{ asset("/img/products/superb_bib_cock.jpg") }}" alt="Basin Mixer">
            
                                                <div class="caption">
                                                    <a href="{{ route('product-details') }}" class="quickview">
                                                        <i class="far fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>  
            
                                            <div class="content">
                                                <h2>
                                                    <a href="{{ route('product-details') }}">SUPERB BIB COCK</a>
                                                </h2>
                                            </div>  
                                        </div> 
                                    </div>                                  
                                    <div class="product-col">
                                        <div class="card-product wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="product-img">
                                                <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="Basin Mixer">
            
                                                <div class="caption">
                                                    <a href="{{ route('product-details') }}" class="quickview">
                                                        <i class="far fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>  
            
                                            <div class="content">
                                                <h2>
                                                    <a href="{{ route('product-details') }}">CENTER HOLE BASIN MIXER</a>
                                                </h2>
                                            </div>  
                                        </div> 
                                    </div>
                                    <div class="product-col">
                                        <div class="card-product wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="product-img">
                                                <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">
            
                                                <div class="caption">
                                                    <a href="{{ route('product-details') }}" class="quickview">
                                                        <i class="far fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>  
            
                                            <div class="content">
                                                <h2>
                                                    <a href="{{ route('product-details') }}">EDGE PRIME BIB COCK</a>
                                                </h2>
                                            </div>  
                                        </div> 
                                    </div>
                                    <div class="product-col">
                                        <div class="card-product wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="product-img">
                                                <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="Basin Mixer">
            
                                                <div class="caption">
                                                    <a href="{{ route('product-details') }}" class="quickview">
                                                        <i class="far fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>  
            
                                            <div class="content">
                                                <h2>
                                                    <a href="{{ route('product-details') }}">CENTER HOLE BASIN MIXER</a>
                                                </h2>
                                            </div>  
                                        </div>        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- End: Products --}}
@endsection

@section('modal')
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
@endsection
