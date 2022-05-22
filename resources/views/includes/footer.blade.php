<footer>
    <div class="footer-top-area">
        <div class="container-fluid">
            <div class="row">            
                <div class="col-xl-5 col-md-6">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo wow fadeInUp" data-wow-delay="0.1s">
                            <div class="site-logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset("./img/logo/logo.png") }}" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay="0.1s">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex sint dolores placeat eos deleniti repellendus porro iusto. Ex fugiat, iste distinctio aut ipsa mollitia quidem. Asperiores veniam voluptatibus aspernatur quis?</p>
                        
                        <div class="social-media wow fadeInUp" data-wow-delay="0.1s">
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
                        <h4 class="footer-title wow fadeInUp" data-wow-delay="0.1s">Product Category</h4>
                        <div class="footer-menu wow fadeInUp" data-wow-delay="0.1s">
                            <ul>
                                <li><a href="#" title="Category 1" class="wow fadeInUp" data-wow-delay="0.1s">Category 1</a></li>
                                <li><a href="#" title="Category 1" class="wow fadeInUp" data-wow-delay="0.2s">Category 1</a></li>
                                <li><a href="#" title="Category 1" class="wow fadeInUp" data-wow-delay="0.3s">Category 1</a></li>
                                <li><a href="#" title="Category 1" class="wow fadeInUp" data-wow-delay="0.4s">Category 1</a></li>
                                <li><a href="#" title="Category 1" class="wow fadeInUp" data-wow-delay="0.5s">Category 1</a></li>
                                <li><a href="#" title="Category 1" class="wow fadeInUp" data-wow-delay="0.6s">Category 1</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-menu-widget">
                        <h4 class="footer-title wow fadeInUp" data-wow-delay="0.1s">Contact Detail</h4>
                        <div class="footer-address">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="footer-address-icon">
                                        <i class="far fa-map-marker-alt"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><strong>Register Office</strong><br>ABC Tower, Test Complex, Opp. Bank, Vadodara.</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="footer-address-icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="tel:9999999999" title="tel:9999999999">+91-99999 99999</a></p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.1s">
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
        <div class="container-fluid wow fadeIn" data-wow-delay="0.1s">
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

<!-- Wow JS -->
<script src="{{ asset('/js/wow.min.js')}}"></script>

{{-- Initialize wow animation --}}
<script>
    $(window).width(function(){
        if ($(window).width() > 767){
            wow = new WOW({
                boxClass:     'wow',      
                animateClass: 'animated', 
                offset:       0,          
                live:         true        
            });
            wow.init();
        }
    });
</script>

@yield('plugins-scripts')
