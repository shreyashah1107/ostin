<header class="header">
    <!-- Start: Top bar -->
        <div class="topbar">
            <div class="container wow fadeIn" data-wow-delay="0.1s">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <div class="topbar-menu">
                            <ul class="justify-content-center justify-content-md-start">
                                <li><i class="far fa-award"></i> AN ISO 9001 : 2015 CERTIFIED COMPANY</li>
                                <li><a href="tel:9999999999"><i class="far fa-phone"></i> +91-99999 99999</a></li>
                                <li><a href="mailto:info@ostin.com"><i class="far fa-envelope"></i> info@ostin.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="topbar-menu">
                            <ul class="social-media justify-content-center justify-content-md-end">
                                <li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End: Top bar -->

    {{-- Start: Main Menu --}}
        <div class="menu-links-wrapper">
            <div class="container-lg wow fadeIn" data-wow-delay="0.1s">
                <div class="position-relative">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="{{ route('index') }}" title="Ostin">
                                        <img src="{{ asset("./img/logo/logo.png") }}" alt="Logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav>
                                <div class="menu-container">
                                    <div class="menu-header-container">
                                        <ul id="cd-primary-nav" class="menu">
                                            <li class="menu-item"><a href="{{ route('index') }}" title="Home">Home</a></li>                                        
                                            <li class="menu-item"><a href="{{ route('about-us') }}" title="About Us">About Us</a></li>                                        
                                            <li class="menu-item menu-item-has-children">
                                                <a href="{{ route('products') }}" title="Product">Product</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="{{ route('product-category') }}" title="Category 1">Category 1</a>

                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="{{ route('product-subcategory') }}" title="Sub Category 1">Sub Category 1</a></li>
                                                            <li class="menu-item"><a href="{{ route('product-subcategory') }}" title="Sub Category 1">Sub Category 1</a></li>
                                                            <li class="menu-item"><a href="{{ route('product-subcategory') }}" title="Sub Category 1">Sub Category 1</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="{{ route('product-category') }}" title="Category 2">Category 2</a>

                                                        <ul class="sub-menu">
                                                            <li class="menu-item"><a href="{{ route('product-subcategory') }}" title="Sub Category 2">Sub Category 2</a></li>
                                                            <li class="menu-item"><a href="{{ route('product-subcategory') }}" title="Sub Category 2">Sub Category 2</a></li>
                                                            <li class="menu-item"><a href="{{ route('product-subcategory') }}" title="Sub Category 2">Sub Category 2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#" title="Forms">Forms</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="{{ route('distributor-form') }}" title="Distributor Form">Distributor Form</a></li>
                                                    <li class="menu-item"><a href="{{ route('dealer-form') }}" title="Dealer Form">Dealer Form</a></li>
                                                    <li class="menu-item"><a href="{{ route('plumber-form') }}" title="Plumber Form">Plumber Form</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="{{ route('contact-us') }}" title="Contact Us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="download-link">
                                    <a href="#" target="_blank" title="Download Brochure" data-bs-toggle="modal" data-bs-target="#downloadBrochureModal">get A BROCHURE</a>
                                </div>
                                <div class="hamburger-menu">
                                    <div class="bar"></div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- End: Main Menu --}}
</header>