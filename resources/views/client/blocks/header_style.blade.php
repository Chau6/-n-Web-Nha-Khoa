<header class="header-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="inner-content clearfix">
                       
                    <div class="header-contact-info float-left">
                        <li>
                            <div class="header-style1-logo float-left" style="max-width: 200px; padding-right: 30px; margin-top:10px;">
                                <a href="{{route('client.pages.index')}}">
                                    <img src="{{ asset('asset/client/images/resources/logo10.png') }}" alt="Awesome Logo" weight="30px" height="30px">
                                </a>
                            </div>
                            </li>
                        <ul>
                            <li>
                                <div class="single-item">
                                    <div class="icon">
                                        <span class="icon-support"></span>    
                                    </div>
                                    <div class="text">
                                        <p>1800 1779</p> 
                                        <span>support@example.com</span>   
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-item">
                                    <div class="icon">
                                        <span class="icon-gps"></span>    
                                    </div>
                                    <div class="text">
                                        <p>D5 Nguyễn Gia Trí, p.25</p> 
                                        <span>Bình Thạnh, Hồ Chí Minh</span>   
                                    </div>
                                </div>
                            </li>
                        </ul>  
                    </div>
                    <div class="header-style1-button float-right">
                        @if (Auth::check())
                        <a href="{{route('client.pages.appointment_create')}}"><span class="icon-date"></span>Make Appointment</a>
                        @else
                        <a href="" data-toggle="modal" data-target="#modelId"><span class="icon-date"></span>Make Appointment</a>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>        
</header>  
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