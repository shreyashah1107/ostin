<div class="footer section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-6 mb-4 mb-sm-0">
                <h5 class="font-weight-bold">UK Office</h5>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <address class="mb-0">
                            Barley Mow Centre <br>
                            10 Barley Mow Passage, Chiswick <br> 
                            London W4 4PH UK
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <p>T : <a href="tel:+44 (0)20 3475 3135">+44 (0)20 3475 3135</a></p>
                        <p>E : <a href="mailto:info@aecordigital.com" class="text-underline">info@aecordigital.com</a></p>
                        <p><a href="https://goo.gl/maps/xKBPcZJzZ342" target="_blank" class="text-underline" rel="noreferrer">View office location</a> on Google Maps</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <h5 class="font-weight-bold">Indian Office</h5>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <address class="mb-0">
                            Kasper Square, Fourth Floor <br>
                            Gotri-Laxmipura Road <br>
                            Vadodara 390021<br>
                            Gujarat, India
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <p>E : <a href="mailto:info@aecordigital.com" class="text-underline">info@aecordigital.com</a></p>
                        <p><a href="https://goo.gl/maps/SUNoGEsLjGDMFh1XA" target="_blank" class="text-underline" rel="noreferrer">View office location</a> on Google Maps</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-divider"></div>

        <div class="row justify-content-center text-center text-lg-left">
            <div class="col-lg-6 order-2 order-lg-1 mt-4 mt-lg-0">
                <p>© {{ date('Y') }} All rights reserved. Aecor Digital Limited, UK company number 10086693 </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li>Services</li>
                            <li><img src="{{ asset('img/controls/chevron-right-solid.svg') }}" alt="next"></li>
                            <li><a href="/people">People</a></li>
                            <li><img src="{{ asset('img/controls/chevron-right-solid.svg') }}" alt="next"></li>
                            <li><a href="/process">Process</a></li>
                            <li><img src="{{ asset('img/controls/chevron-right-solid.svg') }}" alt="next"></li>
                            <li><a href="/projects">Projects</a></li>
                            <li><img src="{{ asset('img/controls/chevron-right-solid.svg') }}" alt="next"></li>
                            <li><a href="/outsourcing">Outsourcing</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="/about">About us</a></li>
                            <li><img src="{{ asset('img/controls/chevron-right-solid.svg') }}" alt="next"></li>
                            <li><a href="/jobs">Jobs</a></li>
                            <li><img src="{{ asset('img/controls/chevron-right-solid.svg') }}" alt="next"></li>
                            <li><a href="/contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript" src="{{ mix('/js/main.js')}}"></script>


@yield('plugins-scripts')
