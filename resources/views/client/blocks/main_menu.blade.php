<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <nav class="main-menu style1 clearfix">
                        <div class="navbar-header clearfix">   	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li id="about_us"><a href="{{route('client.pages.about')}}">About Us</a></li>
                                <li class="dropdown" id="health_screening"><a href="{{route('client.pages.health_screening')}}">Health Screening</a>
                                    <ul>
                                        <li><a href="{{url('http://127.0.0.1:8000/health_screening/toothache')}}">Toothache</a></li>
                                        <li><a href="{{url('http://127.0.0.1:8000/health_screening/stained-teeth')}}">Stained Teeth</a></li>
                                        <li><a href="{{url('http://127.0.0.1:8000/health_screening/cavities')}}">Cavities</a></li>
                                        <li><a href="{{url('http://127.0.0.1:8000/health_screening/cracked-tooth')}}">Cracked Tooth</a></li>
                                        <li><a href="{{url('http://127.0.0.1:8000/health_screening/sensitive-to-cold')}}">Sensitive to Cold</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('client.pages.product')}}">Products</a>
                                    <ul>
                                        <li><a href="{{url('http://127.0.0.1:8000/product/toothbrushes')}}">Toothbrushes</a></li>
                                        <li><a href="{{url('http://127.0.0.1:8000/product/toothpaste')}}">Toothpaste</a></li>
                                        <li><a href="{{url('http://127.0.0.1:8000/product/dental-floss')}}">Dental Floss</a></li>
                                        <li><a href="{{url('http://127.0.0.1:8000/product/face-mask')}}">Face Mask</a></li>
                                        {{-- <li><a href="{{url('http://127.0.0.1:8000/product/dental-picks-and-sticks')}}">Dental Picks And Sticks</a></li>
                                        <li><a href="{{url('http://127.0.0.1:8000/product/tongue-scrapers')}}">Tongue Scrapers</a></li>
                                        <li><a href="{{url('http://127.0.0.1:8000/product/oral-medicine')}}">Oral Medicine</a></li> --}}
                                    </ul>
                                </li>
                                @if (Auth::check())
                                <li><a href="{{route('client.pages.doctors')}}">Doctors</a></li>
                                @else
                                <li><a href="{{route('client.pages.doctors')}}"cclass="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId" style="background: #dddd">Doctors</a></li>
                                
                                @endif
                                
                                <li><a href="{{route('client.pages.contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                        <div class="mainmenu-right">
                            {{-- <div class="search-box-style1">
                                <form class="search-form" method="post" action="http://st.ourhtmldemo.com/new/Dento/index.html">
                                    <input type="search" name="search" placeholder="Search..." required>
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>        
                            </div> --}}
                            
                            
                            <div class="toggler-button">
                                <div class="nav-toggler hidden-bar-opener">
                                    <div class="inner">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>    
                            </div>
                        </div> 
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">
                            Notification</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    You need to login first
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
</script>