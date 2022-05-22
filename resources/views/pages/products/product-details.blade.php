@extends('layouts.default')

@section('pageTitle', config('meta.products-details.title'))
@section('pageDescription'){!! config('meta.products-details.description') !!}@endsection
@section('pageKeywords'){!! config('meta.products-details.keywords') !!}@endsection

@section('content')
    {{-- Start: Product Details --}}
        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mb-5 mb-xl-0">
                        <div class="thumbnail-img wow fadeInUp" data-wow-delay="0.1s">
                            <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}">
                        </div>

                        <a href="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" class="wow fadeInUp" data-wow-delay="0.3s">
                            <img src="{{ asset("/img/products/center_hole_basin_mixer_gemini.jpg") }}" alt="" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <h1 class="product-title wow slideInUp" data-wow-delay="0.1s">CONCEALED FLUSHING CISTERN</h1>
                        <div class="details">
                            <label class="wow fadeInUp" data-wow-delay="0.1s">Cat No.:</label>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">C-027</p>
                        </div>
                        <div class="details">
                            <label class="wow fadeInUp" data-wow-delay="0.1s">Tank Material:</label>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">HDPE (High-Density Polyethylene)</p>
                        </div>
                        <div class="details">
                            <label class="wow fadeInUp" data-wow-delay="0.1s">Warranty:</label>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">7 Years*</p>
                        </div>
                        <div class="details">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay="0.1s">Concealed Cistern (Plastic Tank)​​​​ - 7 Years</li>
                                <li class="wow fadeInUp" data-wow-delay="0.1s">Internal Fittings​​​​ - 2 Years</li>
                            </ul>
                        </div>
                        <div class="details">
                            <label class="wow fadeInUp" data-wow-delay="0.1s">Capacity:</label>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">6 Litres</p>
                        </div>
                        <div class="details">
                            <label class="wow fadeInUp" data-wow-delay="0.1s">Features:</label>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Concealed Flushing Cistern (Half/Full)</p>
                        </div>
                        <div class="details">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay="0.1s">Aesthetically Designed</li>
                                <li class="wow fadeInUp" data-wow-delay="0.1s">High Strength Body</li>
                            </ul>
                        </div>
                        <div class="details">
                            <label class="wow fadeInUp" data-wow-delay="0.1s">Note:</label>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">*Actuator Plate, Frame & Extra Fittings not included.</p>
                        </div>

                        <div class="mt-4 wow fadeInUp" data-wow-delay="0.2s">
                            <a href="#" title="View More" class="btn btn-primary-alt" data-bs-toggle="modal" data-bs-target="#productDetailModal">
                                VIEW MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- End: Product Details --}}

    {{-- Start: Products --}}
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center mb-5 pb-lg-5 wow fadeInUp" data-wow-delay="0.1s">Related Products</h3>

                        <div class="product-grid">
                            <div class="product-col">
                                <div class="card-product wow fadeInUp" data-wow-delay="0.1s">
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
                                <div class="card-product wow fadeInUp" data-wow-delay="0.3s">
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
                                <div class="card-product wow fadeInUp" data-wow-delay="0.5s">
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
    <!-- Product Detail Modal -->
    <div class="modal fade product-detail-modal" id="productDetailModal" tabindex="-1" aria-labelledby="productDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-md-5 pb-5">
                    <div class="image wow fadeIn" data-wow-delay="0.1s">
                        <img src="{{ asset("/img/other/product-detail.png") }}" alt="Product Detail">
                    </div>

                    <h6 class="title-small wow fadeIn" data-wow-delay="0.1s">Moulded FITTINGS</h6>
                    <h2 class="title wow fadeIn" data-wow-delay="0.1s">Elbow</h2>

                    <div class="table-responsive wow fadeIn" data-wow-delay="0.1s">
                        <table class="table table-bordered" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <th align="center">Size (mm)</th>
                                    <th align="center">Size (inch)</th>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>1/2</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>3/4</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>1 1/4</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>1 1/2</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>65</td>
                                    <td>2 1/2</td>
                                </tr>
                                <tr>
                                    <td>80</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td>4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
@endsection
