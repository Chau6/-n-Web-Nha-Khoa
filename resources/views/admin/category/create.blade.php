@extends('client.master') 

@section('main_menu')
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
                                <li class="dropdown"><a href="">Home</a>
                                </li>
                                <li><a href="">About Us</a></li>
                                <li class="dropdown current"><a href="">Specialities</a>
                                    <ul>
                                        <li><a href="">Advice</a></li>
                                        <li><a href="">Đánh Răng</a></li>
                                        <li><a href="">Laser Dentistry</a></li>
                                        <li><a href="">Orthodontics</a></li>
                                        <li><a href="">Endodontics</a></li>
                                        <li><a href="{{ route('admin.category.index')}}">Category</a></li>
                                        <li><a href="">Products</a></li>
                                    </ul>
                                </li>
                                <li><a href="('admin.doctors')}}">Doctors</a></li>
                                <li class="dropdown"><a href="">Blog</a>
                                    <ul>
                                        <li><a href="">Blog Default</a></li>
                                        <li><a href="">Blog Large Image</a></li>
                                        <li><a href="">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="">More</a>
                                    <ul>
                                        <li><a href="">FAQ’s</a></li>
                                        <li><a href="">Timetable</a></li>
                                        <li><a href="">Apppointment</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="mainmenu-right">
                        <div class="search-box-style1">
                            <form class="search-form" method="post" action="http://st.ourhtmldemo.com/new/Dento/index.html">
                                <input type="search" name="search" placeholder="Search..." required>
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>        
                        </div>
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
@endsection

@section('breadcrumb')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>A guide to taking care of your oral health properly</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Specialities</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 
@endsection

@section('content')
<section class="services-style1-area sec-pd1">
    
    <div class="sec-title max-width text-center">
        <h3>Category-Create</h3>
        <h1>Dental Category</h1>
        <ul class="navigation clearfix">
            <li><a href="{{route('admin.category.index')}}">Index</a></li>
        </ul>
    </div>      

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="sec-title max-width">
            <div class="card-header">
                <h3 class="card-title">Thêm thể loại</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Thể loại cha</label>
                    <select class="form-control" name="parent">
                        <option value="0">---- ROOT ----</option>
                        <?php
                            $data=array();
                            $datas=array();
                        ?>
                        @foreach($categorys as $category)
                            @if(!empty($category))
                                <?php
                                    $data['id'] = $category->id;
                                    $data['name'] = $category->name;
                                    $data['parent'] = $category->parent;
                                    $datas[] = $data;
                                ?>
                            @endif
                        @endforeach
                        <?php recursiveOption($datas,0);?>
                    </select>
                </div>
    
                <div class="form-group">
                    <label>Tên thể loại</label>
                    <input type="text" name="name" class="form-control" placeholder="Vui lòng nhập tên thể loại">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Thêm</button>
    
                <button type="reset" class="btn btn-default float-right">Xóa</button>
            </div>
        </div>
    </form>
    {{-- <pre>
        <?php
            print_r($datas)
        ?>
    </pre> --}}
</section>
@endsection

