@extends('client.master')

@section('breadcrumb')
@if (Session::has('success') )

  <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>{{ Session::get('success') }}</strong>
  </div>

@endif
    <!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('asset/client/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h2>Make Apppointment</h2>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Make Apppointment</li>
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
    <!--Start Appointment area -->
<div class="appointment-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title max-width text-center">
                    <h1>Make an Appointment</h1>
                    <p>Here you can get doctors available time & you can get your perfect visiting time to hospital.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="appointment-form-left">
                    <form name="appointment-form" action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Patient Name</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <input type="text" name="" id="p_name" value="" placeholder="Patient Name*" required>    
                                        </div>     
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Phone Number</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <input type="text" name="phn_num" value="" placeholder="Ph Num*" required="">    
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Age</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <input type="text" name="" id="age" value="" placeholder="Age">    
                                        </div>     
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Doctor</h5>
                                    </div>
                                    {{-- --------------------------------------------------------- --}}
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <select class="form-control" name="doctor_id" id="doctor_id">
                                                <?php
                                                    $data=array();
                                                    $datas=array();
                                                ?>
                                                @foreach($doctors as $doctor)
                                                    @if(!empty($doctor))
                                                        <?php
                                                            $data['id'] = $doctor->id;
                                                            $data['fullname'] = $doctor->fullname;
                                                            $datas[] = $data;
                                                        ?>
                                                    @endif
                                                @endforeach
                                                <?php recursiveOptionDocTime($datas,0);?>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- --------------------------------------------------------- --}}
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Date</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <input type="text" class="date-input" id="date-in" placeholder="Date"> 
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Available at</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            {{-- --------------------------------------------------------- --}}
                                            <select class="selectmenu">
                                                <option>9.00am</option>
                                                <option>11.30am</option>
                                                <option>12.00pm</option>
                                                <option>3.00pm</option>
                                                <option>4.00pm</option>
                                                <option>5.00pm</option>
                                                <option>5.30pm</option>
                                                <option>6.00pm</option>
                                                <option>7.00pm</option>
                                                <option>7.30pm</option>
                                            </select>    
                                            {{-- --------------------------------------------------------- --}}    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="title">
                                        <h5>Service</h5>
                                    </div>
                                    <div class="input-box">
                                        <div class="col-xl-6">
                                            <select class="selectmenu">
                                                <option>Dental Implants</option>
                                                <option>Cosmetic Dentistry</option>
                                                <option>Laser Dentistry</option>
                                                <option>Orthodontics</option>
                                                <option>Endodontics</option>
                                                <option>Periodontics</option>
                                            </select>    
                                        </div>
                                        <div class="col-xl-12">
                                            <textarea name="form_description..." placeholder="Description..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="button-box">
                            <button class="btn-one" style="margin:0px 560px" type="submit">Confirm</button>     
                        </div>   
                    </form>   
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-9">
                <div class="appointment-right">
                    <form name="appointment-right" action="" method="POST" enctype="multipart/form-data">
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Appointment area -->

@endsection

@section('js')
    {{-- p_name --}}
    <script type="text/javascript">
        $('input#p_name').keyup(function(event){

        var title, slug;
        //  lấy text từ thẻ input 
        title = $(this).val();

        slug = title.toUpperCase();

        slug = slug.replace(/á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ầ|ấ|ẩ|ậ|ẫ/gi, 'A');
        slug = slug.replace(/é|è|ẹ|ẻ|ẽ|ê|ế|ề|ể|ệ|ễ/gi, 'E');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'I');
        slug = slug.replace(/o|ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ợ|ỡ/gi, 'O');
        slug = slug.replace(/u|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'U');
        slug = slug.replace(/y|ý|ỷ|ỳ|ỵ|ỹ/gi, 'Y');
        slug = slug.replace(/đ/gi, 'D');

        slug = slug.replace(/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\-|\,|\.|\/|\?|\;|\:|\'|\"|_/gi, '');
        //  Thay đổi khoảng cách thành '-' 
        slug = slug.replace(/ /gi, " ");

        //  Phòng trường hợp nhiều khoảng trắng 
        slug = slug.replace(/\-\-\-\-\-/gi, ' ');
        slug = slug.replace(/\-\-\-\-/gi, ' ');
        slug = slug.replace(/\-\-\-/gi, ' ');
        slug = slug.replace(/\-\-/gi, ' ');

        //  Xóa kí tự gạch ngang đầu và cuối 
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');

        // In giá trị;
        $('input#p_name_02').val(slug);
        })
    </script>

    {{-- age --}}
    <script type="text/javascript">
        $('input#age').keyup(function(event){

        var title, slug;
        //  lấy text từ thẻ input 
        title = $(this).val();

        slug = title.toUpperCase();

        slug = slug.replace(/á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ầ|ấ|ẩ|ậ|ẫ/gi, 'A');
        slug = slug.replace(/é|è|ẹ|ẻ|ẽ|ê|ế|ề|ể|ệ|ễ/gi, 'E');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'I');
        slug = slug.replace(/o|ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ợ|ỡ/gi, 'O');
        slug = slug.replace(/u|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'U');
        slug = slug.replace(/y|ý|ỷ|ỳ|ỵ|ỹ/gi, 'Y');
        slug = slug.replace(/đ/gi, 'D');

        slug = slug.replace(/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\-|\,|\.|\/|\?|\;|\:|\'|\"|_/gi, '');
        //  Thay đổi khoảng cách thành '-' 
        slug = slug.replace(/ /gi, " ");

        //  Phòng trường hợp nhiều khoảng trắng 
        slug = slug.replace(/\-\-\-\-\-/gi, ' ');
        slug = slug.replace(/\-\-\-\-/gi, ' ');
        slug = slug.replace(/\-\-\-/gi, ' ');
        slug = slug.replace(/\-\-/gi, ' ');

        //  Xóa kí tự gạch ngang đầu và cuối 
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');

        // In giá trị;
        $('input#age_02').val(slug);
        })
    </script>

    {{-- date_time --}}
    <script type="text/javascript">
        $('input#date_time').keyup(function(event){

        var title, slug;
        //  lấy text từ thẻ input 
        title = $(this).val();

        slug = title.toUpperCase();

        slug = slug.replace(/á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ầ|ấ|ẩ|ậ|ẫ/gi, 'A');
        slug = slug.replace(/é|è|ẹ|ẻ|ẽ|ê|ế|ề|ể|ệ|ễ/gi, 'E');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'I');
        slug = slug.replace(/o|ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ợ|ỡ/gi, 'O');
        slug = slug.replace(/u|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'U');
        slug = slug.replace(/y|ý|ỷ|ỳ|ỵ|ỹ/gi, 'Y');
        slug = slug.replace(/đ/gi, 'D');

        slug = slug.replace(/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\-|\,|\.|\?|\;|\:|\'|\"|_/gi, '');
        //  Thay đổi khoảng cách thành '-' 
        slug = slug.replace(/ /gi, " ");

        //  Phòng trường hợp nhiều khoảng trắng 
        slug = slug.replace(/\-\-\-\-\-/gi, ' ');
        slug = slug.replace(/\-\-\-\-/gi, ' ');
        slug = slug.replace(/\-\-\-/gi, ' ');
        slug = slug.replace(/\-\-/gi, ' ');

        //  Xóa kí tự gạch ngang đầu và cuối 
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');

        // In giá trị;
        $('input#date_time_02').val(slug);
        })
    </script>

@endsection