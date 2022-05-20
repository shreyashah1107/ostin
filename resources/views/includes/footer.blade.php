<footer>
    <div class="footer-top-area">
        <div class="container-fluid">
            <div class="row">            
                <div class="col-xl-5 col-md-6">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo">
                            <div class="site-logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset("./img/logo/logo.png") }}" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex sint dolores placeat eos deleniti repellendus porro iusto. Ex fugiat, iste distinctio aut ipsa mollitia quidem. Asperiores veniam voluptatibus aspernatur quis?</p>
                        
                        <div class="social-media">
                            <ul>
                                <li><a href="#!" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#!" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 offset-xl-0 col-md-5 offset-md-1">
                    <div class="footer-widget footer-menu-widget">
                        <h4 class="footer-title">Product Category</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#" title="Category 1">Category 1</a></li>
                                <li><a href="#" title="Category 1">Category 1</a></li>
                                <li><a href="#" title="Category 1">Category 1</a></li>
                                <li><a href="#" title="Category 1">Category 1</a></li>
                                <li><a href="#" title="Category 1">Category 1</a></li>
                                <li><a href="#" title="Category 1">Category 1</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-menu-widget">
                        <h4 class="footer-title">Contact Detail</h4>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="far fa-map-marker-alt"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><strong>Register Office</strong><br>ABC Tower, Test Complex, Opp. Bank, Vadodara.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="tel:9999999999" title="tel:9999999999">+91-99999 99999</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="mailto:info@ostin.com" title="mailto:info@ostin.com">info@ostin.com</a><br><a href="mailto:ostin@gmail.com" title="mailto:ostin@gmail.com">ostin@gmail.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p>© <script>document.write(new Date().getFullYear());</script> All Rights Reserved - Ostin</p>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-end">
                        <p>Developed By - <a href="#" target="_blank"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Jquery -->
<script src="{{ asset('/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap + Popper -->
<script src="{{ asset('/js/bootstrap.bundle.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{ asset('/js/main.js')}}"></script>


@yield('plugins-scripts')
