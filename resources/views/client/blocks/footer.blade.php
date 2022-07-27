<footer class="footer-area">
    <div class="container">
        <div class="row">
        
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50">
                    <div class="about-us">
                        <div class="footer-logo fix">
                            <a href="index-2.html">
                                <img src="{{ asset('asset/client/images/resources/logo-2.png') }}" alt="Awesome Logo">
                            </a>
                        </div>  
                        <div class="text-box fix">
                            <p>Dento was started in the year 1995 as a small private dental clinic in Binghamton, NY, USA. Looking for affordable dental care?</p>
                            <p class="bottom-text">To take a trivial example, which of us ever undertakes laborious physical 
                            exercise, except to obtain.</p>
                        </div>
                        <div class="button fix">
                            <a class="btn-one" href="{{route('client.pages.about')}}">Read More</a>
                        </div>   
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget martop6 marbtm50">
                    <div class="title">
                        <h3>Health Screening</h3>
                    </div>
                    <ul class="specialities">
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/health_screening/toothache')}}">Toothache</a></li>
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/health_screening/stained-teeth')}}">Stained Teeth</a></li>
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/health_screening/cavities')}}">Cavities</a></li>
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/health_screening/cracked-tooth')}}">Cracked Tooth</a></li>
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/health_screening/sensitive-to-cold')}}">Sensitive to Cold</a></li>
                        
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget martop6 pdbtm50">
                    <div class="title">
                        <h3>Product</h3>
                    </div>
                    <ul class="facilities">
                        <li><li><a href="{{url('http://127.0.0.1:8000/client/pages/product/toothbrushes')}}">Toothbrushes</a></li>
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/product/toothpaste')}}">Toothpaste</a></li>
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/product/dental-floss')}}">Dental Floss</a></li>
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/product/face-mask')}}">Face Mask</a></li>
                        {{-- <li><a href="{{url('http://127.0.0.1:8000/client/pages/product/dental-picks-and-sticks')}}">Dental Picks And Sticks</a></li>
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/product/tongue-scrapers')}}">Tongue Scrapers</a></li>
                        <li><a href="{{url('http://127.0.0.1:8000/client/pages/product/oral-medicine')}}">Oral Medicine</a></li></li> --}}
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            
            <!--Start single footer widget-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-footer-widget martop6 pdtop-50">
                    <div class="title">
                        <h3>Opening Hours</h3>
                    </div>
                    <ul class="opening-hours">
                        <li>Monday <span class="float-right">8.30am–6.30pm</span></li>
                        <li>Tuesday <span class="float-right">8.30am–6.30pm</span></li>
                        <li>Wednesday <span class="float-right">8.30am–6.30pm</span></li>
                        <li>Thursday <span class="float-right">8.30am–6.30pm</span></li>
                        <li>Friday <span class="float-right">8.30am–6.30pm</span></li>
                        <li>Saturday <span class="float-right">8.30am–6.30pm</span></li>
                        <li>Sunday <span class="float-right clr-green">Closed</span></li>
                    </ul>   
                </div>
            </div>
            <!--End single footer widget-->
            
        </div>
    </div>
    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</footer>  