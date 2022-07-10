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
                                <li class="dropdown"><a href="{{route('client.pages.index')}}">Home</a>
                                </li>
                                <li><a href="{{route('client.pages.about')}}">About Us</a></li>



                                <li class="dropdown current"><a href="{{route('client.pages.specialities')}}">Specialities</a>
                                    <ul>
                                        <li><a href="{{ route('client.pages.advice') }}">Advice</a></li>
                                        <li><a href="{{ route('client.pages.danh_rang') }}">Đánh Răng</a></li>
                                        <li><a href="">Laser Dentistry</a></li>
                                        <li><a href="">Orthodontics</a></li>
                                        <li><a href="">Endodontics</a></li>
                                        <li><a href="{{route('client.pages.category.index')}}">Category</a></li>
                                        <li><a href="{{route('client.pages.product')}}">Products</a></li>
                                    </ul>
                                </li>



                                <li><a href="{{route('client.pages.doctors')}}">Doctors</a></li>
                                <li class="dropdown"><a href="{{route('client.pages.blog')}}">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-large.html">Blog Large Image</a></li>
                                        <li><a href="blog-single.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">More</a>
                                    <ul>
                                        <li><a href="{{route('client.pages.faqs')}}">FAQ’s</a></li>
                                        <li><a href="timetable.html">Timetable</a></li>
                                        <li><a href="{{route('client.pages.appointment')}}">Apppointment</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('client.pages.contact')}}">Contact</a></li>
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
    <div class="container">
        <div class="detail-body clearfix">
            <div class="streamfield">
                <div class="block-content cms pageview-highest">
                    <div class="rich-text">
                        <p>
                            <b>Bài viết được tư vấn chuyên môn bởi Bác sĩ chuyên khoa I Nguyễn Trung Hậu - Bác sĩ Răng Hàm Mặt -</b>
                            <a href="https://www.vinmec.com/khoa-kham-benh--noi-khoa-benh-vien-da-khoa-quoc-te-vinmec-da-nang-98617/kham-suc-khoe-tong-quat"><b>Khoa Khám bệnh &amp; Nội khoa - Bệnh viện Đa khoa Quốc tế Vinmec Đà Nẵng</b></a><b>.</b>
                        </p>
                    </div>

                    <span></span>
                    <!-- <component-profile-widget object-type="professional" object-id="51069" page-id=34109></component-profile-widget> -->

                    <div class="rich-text">
                        <p><b>Hướng dẫn bé đánh răng đúng cách là một trong những phương thức bảo vệ và chăm sóc răng miệng cho trẻ mà cha mẹ nên làm ngay khi trẻ bắt đầu mọc răng và khi bé được hơn 1 tuổi.</b></p>
                    </div>

                    <h2>1. Bé đánh răng hằng ngày mang lại lợi ích gì?</h2>

                    <div class="rich-text">
                        <ul>
                            <li>Giúp loại bỏ những mảng bám trên bề mặt răng, giữ răng miệng luôn được sạch sẽ.</li>
                            <li>Giúp hạn chế tối đa các bệnh răng miệng do vi khuẩn gây ra như sâu răng, viêm lợi.</li>
                            <li>Đánh răng không đúng cách tạo điều kiện để vi khuẩn phát triển và tấn công vào răng, nướu, làm mòn lớp men răng và gây ra hiện tượng nhạy cảm, ê buốt răng.</li>
                            <li>
                                Chải răng quá mạnh còn có thể làm ảnh hưởng và tổn thương nướu, gây <a href="https://www.vinmec.com/vi/benh/viem-nuou-3278/"><b>viêm nướu</b></a> và<b> tụt nướu</b>.
                            </li>
                        </ul>
                    </div>

                    <h2>2. Khi nào nên tập cho bé đánh răng?</h2>

                    <div class="rich-text">
                        <p>Khi các bé còn chưa mọc răng, cha mẹ đã vệ sinh răng nướu cho trẻ bằng gạc mềm thấm nước ấm sạch hoặc nước muối pha loãng.</p>
                        <p>
                            Với bé từ 6 - 12 tháng tuổi, ở giai đoạn này, đa phần các bé đã mọc được khoảng 8 cái răng và răng hàm đang trong giai đoạn nhú lên. Lúc này, việc chăm sóc răng miệng và cho <b>bé đánh răng</b> là rất cần thiết. Do có
                            không ít trường hợp trẻ bị sâu răng ở giai đoạn này có thể ảnh hưởng nghiêm trọng tới răng, khi trẻ mọc răng vĩnh viễn.
                        </p>
                        <p>
                            Từ 1.5 tuổi, bé rất thích bắt chước những hành động của cha mẹ và mọi người xung quanh, do đó, tập cho <b>bé đánh răng</b> giai đoạn này sẽ giúp bé dần dần xây dựng thói quen đánh răng, tiếp nhận việc đánh răng và làm
                            tốt việc này.
                        </p>
                        <p>
                            Khi trẻ trong giai đoạn từ 4 - 6 tuổi, ngoài thói quen đánh răng hằng ngày, cha mẹ cần hướng dẫn
                            <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/huong-dan-me-cham-soc-rang-mieng-cho-tre-theo-tung-do-tuoi/"><b>bé đánh răng đúng cách</b></a> để bảo vệ sức khỏe răng miệng cho bé được tốt nhất.
                        </p>
                    </div>

                    <h2>3. Bé đánh răng vào lúc nào trong ngày?</h2>

                    <div class="rich-text">
                        <p>Cha mẹ nên xây dựng thói quen tập cho bé <b>đánh răng ít nhất 2 lần/ngày</b>, sau khi ăn sáng và trước khi đi ngủ.</p>
                        <p>Ngoài ra, sau bữa ăn trưa hoặc các bữa ăn khác cũng cần đánh răng để đảm bảo thức ăn không bám trên bề mặt răng.</p>
                        <p>
                            Lưu ý, cần phải chờ ít nhất 30 phút sau khi ăn hoặc uống các loại thực phẩm và đồ uống có nhiều acid, ví dụ như cam, quýt, hay nước ép trái cây. Việc đánh răng quá sớm khi acid vẫn còn khả năng tác động đến lớp men răng
                            sẽ làm men răng dễ bị tổn thương, dẫn đến nguy cơ men răng bị phá hủy. Nếu không thể chờ 30 phút để đánh răng, nên súc miệng trước bằng nước 2 lần để giảm bớt tác động của acid.
                        </p>
                    </div>

                    <figure class="post-image full">
                        <img class="full uploaded" src="{{ asset('images/20190711_074425_757066_photo-3-15302442961.max-1800x1800.jpg') }}" alt="Đánh răng thế nào là đúng cách?" v-zoomable="34109" />

                        <figcaption class="caption">
                            <div class="rich-text">Mẹ đã hướng dẫn bé đánh răng đúng cách chưa?</div>
                        </figcaption>
                    </figure>

                    <h2>4. Hướng dẫn bé đánh răng đúng cách</h2>

                    <div class="rich-text">
                        <ul>
                            <li>Bước 1: Súc miệng với nước để làm sạch khoang miệng.</li>
                            <li>Bước 2: Rửa sạch bàn chải trước khi đánh, sau đó, lấy một lượng kem đánh răng vừa đủ. Đối với trẻ nhỏ, lượng kem đánh răng vừa đủ chỉ khoảng bằng hạt đậu.</li>
                            <li>
                                Bước 3: Đặt bàn chải nằm ngang và nghiêng khoảng 45 độ so với viền nướu, đầu lông bàn chải phải tiếp xúc với cả răng và nướu. Hướng dẫn <b>bé đánh răng</b> mặt ngoài trước, gồm tất cả răng ở hàm trên và hàm dưới bằng
                                cách chải từ hàm trên xuống và từ hàm dưới lên, hoặc xoay tròn bàn chải đánh răng.
                            </li>
                            <li>Bước 4: Đánh mặt trong của răng tương tự như mặt ngoài. Đánh tất cả các răng ở hàm trên và hàm dưới bằng động tác chải lên, xuống hoặc xoay tròn.</li>
                            <li>Bước 5: Tiếp theo, hướng dẫn <b>bé đánh răng</b> nhai bằng cách đặt lông bàn chải song song với mặt nhai của răng, sau đó nhẹ nhàng đưa bàn chải từ trong ra ngoài khoảng 10 lần.</li>
                            <li>Bước 6: Chải mặt trên của lưỡi từ trong ra ngoài bằng bàn chải răng thông thường hoặc có thể bằng dụng cụ chải lưỡi chuyên dụng để loại bỏ những vi khuẩn gây mùi hôi.</li>
                            <li>
                                Bước 7: Làm sạch lại khoang miệng bằng cách súc miệng với nước để không còn kem đánh răng trong miệng. Ở bước này, cha mẹ nên lưu ý nhắc các bé nhổ bọt kem ra ngoài, vì thời gian đầu hầu hết các bé thường hay nuốt
                                kem đánh răng. Rửa sạch bàn chải, để khô bằng cách cắm phần lông bàn chải hướng lên phía trên, phần tay cầm ở dưới.
                            </li>
                        </ul>
                    </div>

                    <figure class="post-image full">
                        <img class="full uploaded" src="{{ asset('images/20190711_074350_788854_81.max-1800x1800.jpg') }}" alt="Đánh răng thế nào là đúng cách?" v-zoomable="34109" />

                        <figcaption class="caption">
                            <div class="rich-text">Bé đánh răng hằng ngày để bảo vệ sức khỏe răng miệng</div>
                        </figcaption>
                    </figure>

                    <h2>5. Những lưu ý về việc giúp bé đánh răng</h2>

                    <div class="rich-text">
                        <ul>
                            <li>Sau khi đánh răng, cha mẹ nên giúp bé sử dụng chỉ nha khoa để làm sạch kẽ răng, tránh để những mảng bám hay thức ăn còn sót lại ở kẽ răng, do đây là nguyên nhân chính gây sâu răng ở trẻ nhỏ.</li>
                            <li>Tuyệt đối không được để <b>bé đánh răng</b> theo chiều ngang, vì đây là một trong những nguyên nhân dẫn đến các bệnh lý về răng miệng như viêm nướu, mòn chân răng.</li>
                            <li>Thời gian đánh răng nên từ 2 – 3 phút.</li>
                            <li>Nên chọn bàn chải cho <b>bé đánh răng</b> loại có lông tròn, mềm, nhỏ phù hợp với kích thước của răng để tránh làm tổn thương nướu và để đạt được hiệu quả chải răng tốt nhất.</li>
                            <li>Nên thay bàn chải ít nhất 3 tháng/lần để đảm bảo sức khỏe răng miệng. Nếu bàn chải để lâu hoặc lông bàn chải đã bị xơ cứng sẽ gây ra nhiều tác hại cho răng.</li>
                            <li>
                                Chỉ nên sử dụng kem đánh răng với hàm lượng flour phù hợp, ngoài ra, trong kem còn phải chứa các chất diệt khuẩn, gây tê, chống đóng cao răng, sodium bicarbonate, một số enzym có tác dụng tăng tính sát khuẩn của nước
                                bọt.
                            </li>
                        </ul>
                        <p><b>Bé đánh răng đúng cách</b> giúp bảo vệ sức khỏe răng miệng, tránh những nguy cơ dẫn đến các bệnh như sâu răng, viêm lợi, viêm nha chu, hoặc hôi miệng có thể khiến trẻ bị mất răng.</p>
                        <p>Bên cạnh đó cha mẹ cũng nên cho bé đi khám răng định kỳ ít nhất 3-6 tháng/lần để được bác sĩ đánh giá tình trạng răng miệng, giúp bé có 1 hàm răng chắc khỏe.</p>
                    </div>
                </div>

                <div class="geo_divisions">
                    <i>Bài viết này được viết cho người đọc tại Hà Nội.</i>
                </div>

                <div id="hit_id" style="display: none;">
                    <img src="/api/v1/hit_count/?hit_count_id=990939" alt="" />
                </div>
                <div class="vote-and-social clearfix">
                    <p class="views"><i class="fa fa-eye" aria-hidden="true"></i> 47.6K</p>

                    <cms-vote :cms-id="34109" lang="vi"></cms-vote>
                </div>
            </div>

           
        </div>
    </div>
</section>
@endsection