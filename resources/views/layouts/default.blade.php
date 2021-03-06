<!DOCTYPE html>
<html class="html" lang="{{ app()->getLocale() }}">
    @include('includes.head')
    <body>
        <div class="wrapper">
            <div id="content">
                {{-- Navigation --}}
                    @include('includes.navigation')
                {{-- End of navigation --}}

                <!-- body start -->
                <main>
                    @yield('content')
                </main>
                <!-- body end -->

                @include('includes.footer')
            </div>
        </div>

        <script type="text/javascript">
            $(window).on('load', function() {
                $('#welcomeModal').modal('show');
            });
        </script>

        {{-- Welcome Modal --}}
        <div id="welcomeModal" class="modal fade welcome-modal" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset("./img/logo/logo.png") }}" class="img-fluid" alt="Logo">

                        <h1>Welcome to Ostin</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, eos omnis repudiandae ex dolorum laborum quae accusamus pariatur quo ad ut, ipsam corrupti, ab asperiores. Quam dolor nulla cumque non!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Download Brochure Modal -->
            <div class="modal fade" id="downloadBrochureModal" tabindex="-1" aria-labelledby="downloadBrochureModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="contact-form-box p-0 border-0 wow fadeIn" data-wow-delay="0.1s">
                                <form id="contact-form" method="post" action="">
                                    <div class="row gx-4">
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
                                        <button class="btn btn-primary-alt" type="submit">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @yield('modal')
        @yield('page-scripts')
    </body>
</html>
