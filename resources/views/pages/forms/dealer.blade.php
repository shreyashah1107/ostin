@extends('layouts.default')

@section('pageTitle', config('meta.dealer.title'))
@section('pageDescription'){!! config('meta.dealer.description') !!}@endsection
@section('pageKeywords'){!! config('meta.dealer.keywords') !!}@endsection

@section('content')
    {{-- Start: Hero --}}
        <section class="hero hero-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <h1>Dealer Form</h1>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}" title="Home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dealer Form</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
    {{-- End: Hero --}}

    {{-- Start: Contact Message Area --}}
        <section class="contact-message-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-box">
                            <form id="contact-form" method="post" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name has-icon">
                                            <input type="text" name="name" placeholder="Name*" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-company-name has-icon">
                                            <input type="text" name="company-name" placeholder="Company Name" class="form-control">
                                        </div>
                                    </div>                                    
                                    <div class="col-md-6">
                                        <div class="input-item input-item-gst has-icon">
                                            <input type="text" name="gst" placeholder="GST Number*" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-email has-icon">
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-phone has-icon">
                                            <input type="text" name="mobile" placeholder="Mobile*" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-whatsapp has-icon">
                                            <input type="text" name="whatsapp" placeholder="WhatsApp Number*" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-item input-item-address has-icon">
                                            <input type="text" name="address1" placeholder="Address 1*" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-item input-item-address has-icon">
                                            <input type="text" name="address2" placeholder="Address 2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-address has-icon">
                                            <input type="text" name="pincode" placeholder="Pincode*" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-city has-icon">
                                            <input type="text" name="city" placeholder="City*" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-state has-icon">
                                            <input type="text" name="state" placeholder="State*" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-address has-icon">
                                            <input type="text" name="country" placeholder="Country*" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="btn-wrapper">
                                    <button class="btn btn-secondary" type="submit">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- End: Contact Message Area --}}
@endsection

@section('modal')
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
@endsection
