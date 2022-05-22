@extends('layouts.default')

@section('pageTitle', config('meta.products-categories.title'))
@section('pageDescription'){!! config('meta.products-categories.description') !!}@endsection
@section('pageKeywords'){!! config('meta.products-categories.keywords') !!}@endsection

@section('content')
    {{-- Start: Hero --}}
        <section class="hero hero-products" style="background-image: url('{{ asset("./img/hero/flushing_systems.jpg") }}')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <h1>Flushing systems</h1>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}" title="Home">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('products') }}" title="Products">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Flushing systems</li>
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
                                            <a href="{{ route('product-subcategory') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-subcategory') }}">CENTER HOLE BASIN MIXER</a>
                                        </h2>
                                    </div>  
                                </div>        
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/edge_prime_bib_cock.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-subcategory') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-subcategory') }}">EDGE PRIME BIB COCK</a>
                                        </h2>
                                    </div>  
                                </div>       
                            </div>
                            <div class="product-col">
                                <div class="card-product">
                                    <div class="product-img">
                                        <img src="{{ asset("/img/products/df2bd778bde6d2d676f916a059794d67.jpg") }}" alt="Basin Mixer">
    
                                        <div class="caption">
                                            <a href="{{ route('product-subcategory') }}" class="quickview">
                                                <i class="far fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>  
    
                                    <div class="content">
                                        <h2>
                                            <a href="{{ route('product-subcategory') }}">SINGLE LEVER BASIN MIXER TALL BODY</a>
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
