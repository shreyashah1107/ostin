@extends('layouts.default')

@section('pageTitle', config('meta.products.title'))
@section('pageDescription'){!! config('meta.products.description') !!}@endsection
@section('pageKeywords'){!! config('meta.products.keywords') !!}@endsection

@section('content')
    {{-- Start: Hero --}}
        <section class="hero hero-products">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <h1>Products</h1>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}" title="Home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
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
                    <div class="col-12">
                        <div class="product-grid">
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">CENTER HOLE BASIN MIXER</a>
                                        </h2>
                                    </div>  
                                </div>        
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">EDGE PRIME BIB COCK</a>
                                        </h2>
                                    </div>  
                                </div>       
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/df2bd778bde6d2d676f916a059794d67.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">SINGLE LEVER BASIN MIXER TALL BODY</a>
                                        </h2>
                                    </div>  
                                </div>  
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/superb_bib_cock.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">SUPERB BIB COCK</a>
                                        </h2>
                                    </div>  
                                </div> 
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">CENTER HOLE BASIN MIXER</a>
                                        </h2>
                                    </div>  
                                </div> 
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">EDGE PRIME BIB COCK</a>
                                        </h2>
                                    </div>  
                                </div> 
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">CENTER HOLE BASIN MIXER</a>
                                        </h2>
                                    </div>  
                                </div>        
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">EDGE PRIME BIB COCK</a>
                                        </h2>
                                    </div>  
                                </div>       
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/df2bd778bde6d2d676f916a059794d67.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">SINGLE LEVER BASIN MIXER TALL BODY</a>
                                        </h2>
                                    </div>  
                                </div>  
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/superb_bib_cock.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">SUPERB BIB COCK</a>
                                        </h2>
                                    </div>  
                                </div> 
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">CENTER HOLE BASIN MIXER</a>
                                        </h2>
                                    </div>  
                                </div> 
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-category') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-category') }}">EDGE PRIME BIB COCK</a>
                                        </h2>
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
