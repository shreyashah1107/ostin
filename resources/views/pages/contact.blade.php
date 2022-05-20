@extends('layouts.default')

@section('pageTitle', config('meta.contact.title'))
@section('pageDescription'){!! config('meta.contact.description') !!}@endsection
@section('pageKeywords'){!! config('meta.contact.keywords') !!}@endsection

@section('content')
    {{-- Start: Hero --}}
        <section class="hero hero-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <h1>Contact Us</h1>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}" title="Home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
    {{-- End: Hero --}}

    {{-- Start: Contact Address Area --}}
        <section class="contact-address-area">
            <div class="container">
                <div class="contact-address-grid">
                    <div class="contact-address-col">
                        <div class="card-contact">
                            <div class="icon">
                                <i class="far fa-map-marked-alt fa-3x"></i>
                            </div>
                            <div class="content">
                                <h3>Register Office</h3>
                                <p>C/4/B, (Basement) Austvinayak Complex, Opp. Kotak Mahindra Bank, Dariyapur, Ahmedabad.</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-address-col">
                        <div class="card-contact">
                            <div class="icon">
                                <i class="far fa-map-marked-alt fa-3x"></i>
                            </div>
                            <div class="content">
                                <h3>Factory Address</h3>
                                <p>Plot No. 32-72 Star Industrial Park, Opp. Gopalcharan Industrial Park, Bakrol, Ahmedabad -382 430 (Guj).</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-address-col">
                        <div class="card-contact">
                            <div class="icon">
                                <i class="far fa-phone fa-3x"></i>
                            </div>
                            <div class="content">
                                <h3>Mobile</h3>
                                <p>+91-94280 18922</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-address-col">
                        <div class="card-contact">
                            <div class="icon">
                                <i class="far fa-envelope-open-text fa-3x"></i>
                            </div>
                            <div class="content">
                                <h3>Email</h3>
                                <p>info@ostin.com<br>ostin@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- End: Contact Address Area --}}

    {{-- Start: Contact Message Area --}}
        <section class="contact-message-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-box">
                            <h4>Get A Quote</h4>
                            <form id="contact-form" method="post" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name has-icon">
                                            <input type="text" name="name" placeholder="Name*" class="form-control" required="required">
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
                                        <div class="input-item input-item-company-name has-icon">
                                            <input type="text" name="company-name" placeholder="Company Name" class="form-control">
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
