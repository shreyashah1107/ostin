@extends('layouts.default')

@section('pageTitle', config('meta.about.title'))
@section('pageDescription'){!! config('meta.about.description') !!}@endsection
@section('pageKeywords'){!! config('meta.about.keywords') !!}@endsection

@section('content')
    {{-- Start: Hero --}}
        <section class="hero hero-about">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <h1>About Us</h1>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}" title="Home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
    {{-- End: Hero --}}

    {{-- Start: About --}}
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="sidebar">
                            <ul class="nav nav-tabs flex-lg-column" id="aboutTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true"><span>Profile</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="certificate-tab" data-bs-toggle="tab" data-bs-target="#certificate" type="button" role="tab" aria-controls="certificate" aria-selected="false"><span>Certificate</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="false"><span>Vision</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false"><span>Gallery</span></button>
                                </li>
                            </ul>
    
                            <div class="client-feedback d-none d-lg-block">
                                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#clientFeedbackModal">Client Feedback</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-8 offset-xl-1 ps-lg-5 ps-xl-0">
                        <div class="tab-content" id="aboutTabContent">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2>PROFILE</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum provident totam veniam voluptatibus ab perferendis laboriosam, fuga et tenetur molestias, quam obcaecati temporibus beatae eaque deleniti cum, voluptate unde. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptate ad hic quidem perspiciatis voluptates? Asperiores odit velit laudantium! Temporibus alias nostrum incidunt excepturi explicabo dignissimos non dolorem aliquid asperiores.</p>
                                       
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit dolorem doloribus, voluptate deserunt iste inventore, natus ullam ab libero illum architecto labore similique facilis! Maiores enim asperiores ab exercitationem aperiam.</p>

                                <img src="{{ asset("./img/hero/about-banner.jpg") }}" class="img-fluid" alt="Banner">

                                <h3>Technical Edge</h3>

                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit dolorem doloribus, voluptate deserunt iste inventore, natus ullam ab libero illum architecto labore similique facilis! Maiores enim asperiores ab exercitationem aperiam.</p>

                                <h3>Trust, Value & Commitment</h3>

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum provident totam veniam voluptatibus ab perferendis laboriosam, fuga et tenetur molestias, quam obcaecati temporibus beatae eaque deleniti cum, voluptate unde. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptate ad hic quidem perspiciatis voluptates? Asperiores odit velit laudantium! Temporibus alias nostrum incidunt excepturi explicabo dignissimos non dolorem aliquid asperiores.</p>
                                       
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit dolorem doloribus, voluptate deserunt iste inventore, natus ullam ab libero illum architecto labore similique facilis! Maiores enim asperiores ab exercitationem aperiam.</p>
                            </div>
                            <div class="tab-pane fade" id="certificate" role="tabpanel" aria-labelledby="certificate-tab">
                                <h2>certificate</h2>
                                <p>Click here for details.</p>

                                <ul class="list-unstyled list-certificates">
                                    <li>
                                        <a href="" download="">
                                            <i class="fas fa-file-pdf"></i> 
                                            <span title="Certificate 1: IS 2548">Certificate 1: IS 2548</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" download="">
                                            <i class="fas fa-file-pdf"></i> 
                                            <span title="Certificate 2: IS 2548">Certificate 2: IS 2548</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" download="">
                                            <i class="fas fa-file-pdf"></i> 
                                            <span title="Certificate 3: IS 2548">Certificate 3: IS 2548</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                                <h2>vision</h2>

                                <div class="image">
                                    <img src="{{ asset("./img/hero/about-banner.jpg") }}" alt="Image 1">
                                </div>

                                <div class="image">
                                    <img src="{{ asset("./img/hero/slide3.jpg") }}" alt="Image 2">
                                </div>

                                <div class="image">
                                    <img src="{{ asset("./img/hero/slide1.jpg") }}" alt="Image 3">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                                <h2>gallery</h2>

                                <div class="gallery-grid">
                                    <div class="gallery-col">
                                        <img src="{{ asset("./img/hero/slide3.jpg") }}" alt="Image">
                                    </div>
                                    <div class="gallery-col">
                                        <img src="{{ asset("./img/hero/slide2.jpg") }}" alt="Image">
                                    </div>
                                    <div class="gallery-col">
                                        <img src="{{ asset("./img/hero/slide1.jpg") }}" alt="Image">
                                    </div>
                                    <div class="gallery-col">
                                        <img src="{{ asset("./img/category/img1.jpg") }}" alt="Image">
                                    </div>
                                    <div class="gallery-col">
                                        <img src="{{ asset("./img/category/img2.jpg") }}" alt="Image">
                                    </div>
                                    <div class="gallery-col">
                                        <img src="{{ asset("./img/category/img3.jpg") }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- End: About --}}
@endsection

@section('modal')
    <!-- Download Brochure Modal -->
    <div class="modal fade" id="clientFeedbackModal" tabindex="-1" aria-labelledby="clientFeedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="contact-form-box p-0 border-0">
                        <form id="contact-form" method="post" action="">
                            <div class="row gx-4">
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
                                <div class="col-12">
                                    <div class="input-item input-item-name has-icon">
                                        <input type="text" name="designation" placeholder="Designation" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-item input-item-message has-icon">
                                        <textarea name="message" class="form-control" placeholder="Message*" required="required" style="resize: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="btn-wrapper">
                                <button class="btn btn-primary-alt" type="submit">Submit Now</button>
                            </div>
                        </form>
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
