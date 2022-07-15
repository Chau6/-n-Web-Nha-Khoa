<section class="top-bar-area">
    <div class="container">
        <div class="row">       
            <div class="col-xl-5 col-lg-6">
                <div class="top-right">
                    <p><span class="icon-clock"></span>Mon - Sat: 09.00 to 18.00, Sunday: Closed.</p>
                </div>    
            </div>   
            <div class="col-xl-7 col-lg-6">
                <div class="top" style="text-align:right">
                    <ul class="sociallinks-style-one">
                        @if (Auth::check())
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a href="{{route('client.pages.information_client')}}" style="color: #AFBDBB; font-size: 15px; border: 2px #AFBDBB solid; border-radius: 0.3em; padding: 3px">{{auth()->user()->last_name}} {{auth()->user()->first_name}}</a>  ||   
                                <a href="{{route('getLogoutClient')}}" style="color: #AFBDBB; font-size: 15px; border: 2px #AFBDBB solid; border-radius: 0.3em; padding: 3px">Logout</a> 
                            </li>
                        </ul>
                        @else
                        <div class="top" style="text-align:right">
                            <ul class="navbar-nav ml-auto">
                                <li><a href="{{route('getLoginClient')}}" style="color: #AFBDBB; font-size: 15px; border: 2px #AFBDBB solid; border-radius: 0.3em; padding: 3px; text-align: right; ">Login</a></li>
                            </ul>
                        </div>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>