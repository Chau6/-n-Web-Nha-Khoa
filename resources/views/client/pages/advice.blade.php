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
                                        <li><a href="">Cosmetic Dentistry</a></li>
                                        <li><a href="">Laser Dentistry</a></li>
                                        <li><a href="">Orthodontics</a></li>
                                        <li><a href="">Endodontics</a></li>
                                        <li><a href="">Periodontics</a></li>
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
        {{--  --}}
        <div class="sec-title max-width text-center">
            <h3>Specialities</h3>
            <h1>Take care of your oral health</h1>
            <p>Your teeth play an important part in your daily life. It not only helps you to chew and eat your food, but frames your face. Any missing tooth can have a major impact on your quality of life. </p>
        </div>
        {{--  --}}
        <div class="detail-body clearfix">
            <div class="streamfield">
                <div class="block-content cms pageview-highest">
                    <div class="rich-text">
                        <p>
                            <b>Bài viết được tham vấn chuyên môn cùng Thạc sĩ, Bác sĩ Đặng Tiến Đạt - Bác sĩ Răng - Hàm - Mặt -</b>
                            <a href="https://vinmec.com/khoa-kham-benh--noi-khoa-benh-vien-da-khoa-quoc-te-vinmec-ha-long-98623/kham-suc-khoe-tong-quat"><b>Khoa khám bệnh &amp; Nội khoa - Bệnh viện Đa khoa Quốc tế Vinmec Hạ Long</b></a><b>.</b>
                        </p>
                    </div>
        
                    <span></span>
                    <!-- <component-profile-widget object-type="professional" object-id="51383" page-id=94793></component-profile-widget> -->
        
                    <div>
                        <div class="rich-text">
                            <p></p>
                            <p><b>Sức khỏe răng miệng phản ánh các tình trạng của răng, nướu và khoang miệng. Chăm sóc sức khỏe răng miệng đúng cách sẽ ngăn ngừa các bệnh về nướu, giúp bảo vệ sức khoẻ và mang lại sự tự tin.</b></p>
                        </div>
                    </div>
        
                    <h2>1. Các biện pháp chăm sóc sức khỏe răng miệng đúng cách</h2>
        
                    <h3>1.1. Đánh răng 2 lần mỗi ngày</h3>
        
                    <div class="rich-text">
                        <p></p>
                        <p>
                            Bệnh về răng và nướu là hai vấn đề <b>sức khỏe răng miệng</b> lớn và thường gặp nhất. Đánh răng 2 lần mỗi ngày vào buổi sáng sau khi thức dậy và buổi tối trước khi đi ngủ là biện pháp chăm sóc sức khỏe răng miệng cơ bản
                            và quan trọng nhất.
                        </p>
                        <p>
                            Nên đổi bàn chải đánh răng mỗi 3 – 4 tháng một lần. Đối với người <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/suc-khoe-tong-quat/huong-dan-cham-soc-sau-nieng-rang/"><b>niềng răng</b></a> cần sử dụng
                            loại bàn chải đặc biệt cũng như các dụng cụ vệ sinh răng miệng khác theo sự hướng dẫn của nha sĩ. Nếu có các vấn đề sức khỏe gây khó khăn trong cầm bàn chải thì có thể dùng bàn chải điện.
                        </p>
                    </div>
        
                    <h3>1.2. Đánh răng đúng cách</h3>
        
                    <div class="rich-text">
                        <p></p>
                        <p>
                            Để <b>chăm sóc sức khỏe răng</b> <b>miệng</b>, đánh răng thường xuyên thôi là chưa đủ mà thao tác
                            <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/danh-rang-nao-la-dung-cach/"><b>đánh răng phải đúng cách</b></a> để loại bỏ những mảng bám tích tụ trên bề mặt răng, hạn chế các vi khuẩn gây
                            <a href="https://www.vinmec.com/vi/benh/sau-rang-4504/"><b>sâu răng</b></a>, viêm lợi. Nếu đánh răng không đúng sẽ làm mòn lớp men răng gây hiện tượng
                            <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/cac-bien-phap-giup-giam-e-buot-cho-rang-nhay-cam/"><b>răng nhạy cảm ê buốt</b></a>, các mảng bám sẽ cứng lại và tích tụ dần, tạo điều kiện thuận lợi cho vi
                            khuẩn phát triển và tấn công vào răng, nướu dẫn đến <a href="https://www.vinmec.com/vi/benh/nha-chu-3161/"><b>nha chu</b></a>. Ngoài ra, đánh răng quá mạnh còn làm tổn thương nướu răng, gây ra viêm nướu và tụt nướu.
                        </p>
                        <p>Thao tác đánh răng đúng như sau:</p>
                        <ul>
                            <li>
                                Để bàn chải răng nằm ngang và nằm nghiêng một góc khoảng 450 so với viền nướu sao cho đầu lông bàn chải tiếp xúc với cả răng và nướu. Chải nhẹ nhàng mặt ngoài của tất cả răng ở hàm trên và hàm dưới với khoảng cách 2
                                – 3 răng (hàm trên xuống và hàm dưới lên), hoặc xoay tròn bàn chải răng cho lông bàn chải có thể chui được vào từng kẽ răng, từ 5 – 10 lần, để lấy hết thức ăn bị bám vào răng.
                            </li>
                            <li>Chải mặt trong của răng ở hàm trên và hàm dưới tương tự như mặt ngoài bằng cách chải lên, chải xuống hoặc xoay tròn.</li>
                            <li>Đặt lông bàn chải răng song song với các mặt nhai của răng rồi nhẹ nhàng di chuyển bàn chải khoảng 10 lần từ trong ra ngoài.</li>
                        </ul>
                    </div>
        
                    <figure class="post-image full">
                        <img src="{{ asset('images/20210911_043927_858388_cham-soc-suc-khoe-r.max-1800x1800.jpg') }}" alt="chăm sóc sức khỏe răng miệng" v-zoomable="94793" />
        
                        <figcaption class="caption">
                            <div class="rich-text">Đánh răng đúng cách để chăm sóc sức khỏe răng miệng hiệu quả</div>
                        </figcaption>
                    </figure>
        
                    <h3>1.3. Vệ sinh lưỡi</h3>
        
                    <div class="rich-text">
                        <p></p>
                        <p>
                            Không chỉ tích tụ trên răng gây tình trạng cao răng mà các mảng bám còn có thể tích tụ trên lưỡi, gây ra các vấn đề <b>sức khỏe răng miệng</b> và
                            <a
                                href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/ve-sinh-sach-se-nhung-hoi-tho-van-co-mui-vi-sao/#:~:text=V%E1%BB%87%20sinh%20mi%E1%BB%87ng%20kh%C3%B4ng%20t%E1%BB%91t,l%C3%A0%20gi%E1%BA%A3i%20ph%C3%A1p%20t%E1%BA%A1m%20th%E1%BB%9Di."
                            >
                                <b>hơi thở có mùi hôi</b>
                            </a>
                            . Do đó, mỗi khi chăm sóc răng miệng hãy kết hợp chải răng với chải mặt trên lưỡi từ trong ra ngoài bằng bàn chải răng hoặc dụng cụ chải lưỡi chuyên dụng.
                        </p>
                    </div>
        
                    <h3>1.4. Sử dụng kem đánh răng chứa fluoride</h3>
        
                    <div class="rich-text">
                        <p></p>
                        <p>
                            Việc lựa chọn kem đánh răng phù hợp là rất quan trọng đối với sức khỏe răng miệng. Có rất nhiều loại kem đánh răng. Tùy theo sở thích về mùi và thương hiệu nhưng chọn kem đánh răng có chứa fluoride là yếu tố ưu tiên hàng
                            đầu. Fluoride là chất chống lại vi trùng gây sâu răng, đồng thời cung cấp một hàng rào bảo vệ răng, giúp cho men răng bền vững và giảm sâu răng.
                        </p>
                    </div>
        
                    <h3>1.5. Dùng chỉ nha khoa</h3>
        
                    <div class="rich-text">
                        <p></p>
                        <p>
                            Tăm xỉa răng thường không tiếp cận đến được những kẽ nhỏ của răng. Trong khi đó
                            <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/suc-khoe-tong-quat/nhung-sai-lam-khi-ve-sinh-rang-mieng-bang-chi-nha-khoa/"><b>chỉ nha khoa</b></a> hoặc tăm nước sẽ nhẹ nhàng lấy đi những mẩu thức ăn nhỏ bị
                            nhét vào trong kẽ răng mà không làm tổn thương nướu răng. Khi kẽ răng được làm sạch hoàn toàn thì mảng bám, tình trạng kích thích nướu và viêm nhiễm sẽ giảm đáng kể.
                        </p>
                    </div>
        
                    <h3>1.6. Súc miệng ngay sau khi ăn</h3>
        
                    <div class="rich-text">
                        <p></p>
                        <p>
                            Bên cạnh việc đánh răng đúng cách và dùng chỉ nha khoa, việc súc miệng với nước kháng khuẩn có thể ngăn ngừa sâu răng và các bệnh về nướu.
                            <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/suc-khoe-tong-quat/luu-y-khi-su-dung-nuoc-suc-mieng-diet-khuan/"><b>Nước súc miệng</b></a> giúp bảo vệ <b>sức khỏe răng miệng</b> theo 3 cách:
                        </p>
                        <ul>
                            <li>Tái khoáng hóa cho răng</li>
                            <li>Giảm lượng axit trong miệng</li>
                            <li>Làm sạch những khu vực khó chải ở trong nướu và xung quanh nướu.</li>
                        </ul>
                        <p>Súc miệng với nước kháng khuẩn sau khi ăn như là một biện pháp làm sạch khá toàn diện, nhất là đối với các bé trên 12 tuổi hoặc những người không quen dùng tăm nước hay chỉ nha khoa để làm sạch răng miệng.</p>
                        <p>Ngoài ra, nhai kẹo cao su không đường sau mỗi bữa ăn có thể làm tăng tiết nước bọt, giúp trung hòa axit và làm sạch vi khuẩn bám trên bề mặt răng.</p>
                    </div>
        
                    <h3>1.7. Mang dụng cụ bảo vệ hàm răng và không hút thuốc lá</h3>
        
                    <div class="rich-text">
                        <p></p>
                        <p>Nếu tham gia vào các môn thể thao hay các hoạt động giải trí có nguy cơ gây tổn thương răng thì phải mang dụng cụ bảo vệ hàm răng.</p>
                        <p>Thuốc lá làm màu răng ngả vàng, gây ra các bệnh về nướu và tăng nguy cơ ung thư vòm miệng. Do đó, không hút thuốc lá là một cách để bảo vệ sức khỏe răng miệng.</p>
                    </div>
        
                    <figure class="post-image full">
                        <img src="{{ asset('images/20210911_044046_204581_cham-soc-suc-khoe-r.max-1800x1800.jpg') }}" alt="Chế độ ăn uống lành mạnh luôn mang lại lợi ích cho sức khỏe răng miệng và nướu" v-zoomable="94793" />
        
                        <figcaption class="caption">
                            <div class="rich-text">Chế độ ăn uống lành mạnh luôn mang lại lợi ích cho sức khỏe răng miệng và nướu</div>
                        </figcaption>
                    </figure>
        
                    <h3>1.8. Chế độ ăn uống lành mạnh</h3>
        
                    <div class="rich-text">
                        <p></p>
                        <p>Dù ở tuổi nào, chế độ ăn uống lành mạnh luôn mang lại lợi ích cho <b>sức khỏe răng miệng</b> và nướu.</p>
                        <p>Uống nhiều nước lọc tốt cho sức khỏe răng miệng cũng như sức khỏe tổng thể. Nên uống nước lọc sau mỗi bữa ăn có thể giúp đẩy lùi tác động tiêu cực axit có trong thực phẩm và đồ uống.</p>
                        <p>Chế độ ăn cân bằng các dinh dưỡng bao gồm thực phẩm tươi như các loại hạt, ngũ cốc nguyên cám, trái cây, rau củ và các sản phẩm từ sữa sẽ cung cấp đủ dưỡng chất cần thiết cho cơ thể.</p>
                        <p>
                            Hạn chế ăn đồ ngọt cũng như thức ăn chứa nhiều axit. Đường trong các món ngọt bị vi khuẩn trong miệng tiêu hoá, sẽ chuyển hóa thành axit có thể làm
                            <a href="https://www.vinmec.com/vi/benh/mon-rang-3179/"><b>mòn men răng</b></a> và dẫn đến sâu răng. Ngoài ra, các món ăn ngọt nhất là bánh, kẹo thường bám dính trên bề mặt răng lâu, làm tăng lượng axit trong thời gian
                            dài. Trái cây có chứa nhiều axit như cam, chanh, dứa, dâu tây, cùng các thức uống như trà, cà phê gây ảnh hưởng đến men răng. Nước uống có gas cũng là một nguy cơ gây ra các vấn đề về răng miệng vì cacbon trong nước có
                            gas làm tăng axit trong miệng. Hãy súc miệng bằng nước lọc sau khi thưởng thức.
                        </p>
                    </div>
        
                    <h3>1.9. Khám nha khoa ít nhất 2 lần mỗi năm</h3>
        
                    <div class="rich-text">
                        <p></p>
                        <p>
                            Khám nha khoa định kỳ ít nhất 2 lần trong năm hoặc thường xuyên hơn nếu có vấn đề về răng nướu để được chăm sóc và <b>tư vấn sức khỏe răng miệng</b>. Nha sĩ sẽ cạo vôi răng, thăm khám phát hiện sâu răng và điều trị phù
                            hợp. Ngoài ra, <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/vi-sao-phai-den-nha-si-de-kiem-tra-rang-mieng-dinh-ky/"><b>khám nha khoa định kỳ</b></a> còn giúp phát hiện ra những vấn đề nguy cơ và đưa ra
                            giải pháp ngăn chặn kịp thời như:
                        </p>
                        <ul>
                            <li>
                                Phát hiện sớm các dấu hiệu của
                                <a href="https://www.vinmec.com/vi/ung-buou-xa-tri/cac-loai-ung-thu-pho-bien/ung-thu-dau-mat-co/ung-thu-khoang-mieng-nguyen-nhan-trieu-chung-chan-doan-va-dieu-tri/"><b>ung thư khoang miệng</b></a>: 90% trường hợp ung
                                thư khoang miệng có thể điều trị được khi phát hiện sớm. Nếu không được chẩn đoán sớm, ung thư sẽ di căn và do đó khó điều trị hơn.
                            </li>
                            <li>
                                Mòn răng bề mặt nhai do <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/tat-nghien-rang-khi-ngu-o-nguoi-lon-co-khien-ban-gia-truoc-tuoi/"><b>nghiến răng trong khi ngủ</b></a> là một
                                <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/cac-loai-roi-loan-lo-au-thuong-gap/"><b>rối loạn do lo âu</b></a> hay căng thẳng. Nếu không phát hiện và điều trị sẽ có nguy cơ gây sâu răng.
                            </li>
                            <li>
                                Bệnh về nướu gồm <a href="https://www.vinmec.com/vi/benh/viem-nuou-3278/"><b>viêm nướu</b></a> hay nha chu là nguyên nhân hàng đầu gây ra mất răng ở người lớn tuổi.
                            </li>
                            <li>
                                Tương tác với thuốc: Người lớn tuổi, đặc biệt là người có nhiều bệnh lý, dễ bị khô miệng do giảm tiết nước bọt, là nguy cơ của sâu răng và bệnh về nướu. Có khoảng 800 loại thuốc gây ra tình trạng trên, vì thế cần báo
                                cho nha sĩ biết loại thuốc đang dùng để thay đổi sang loại thuốc khác hoặc sử dụng nước súc miệng phù hợp.
                            </li>
                        </ul>
                    </div>
        
                    <h2>2. Cách chăm sóc sức khỏe răng miệng đối với trẻ sơ sinh và trẻ nhỏ</h2>
        
                    <div class="rich-text">
                        <p></p>
                        <p>Bố mẹ có thể chăm sóc sức khỏe răng miệng của bé theo những gợi ý sau:</p>
                        <ul>
                            <li>Chăm sóc răng miệng sớm ngay từ khi mọc chiếc răng sữa đầu tiên, thường là vào 6 tháng tuổi.</li>
                            <li>Làm sạch răng mới mọc hằng ngày bằng cách cọ xát nhẹ nhàng với khăn ướt sạch. Khi răng lớn hơn thì dùng bàn chải dành cho trẻ em.</li>
                            <li>Trẻ nhỏ dưới 2 tuổi không nên dùng kem đánh răng. Thay vào đó, bố mẹ hãy cho bé đánh răng với nước.</li>
                            <li>Chỉ nên cho một lượng vừa phải kem đánh răng chứa fluoride với kích thước khoảng hạt đậu Hà Lan trên bàn chải, vì quá nhiều sẽ khiến cho răng của trẻ có đốm trắng.</li>
                            <li>Không cho bé ngậm bình sữa hay uống nước trái cây trước khi ngủ vì có thể khiến cho sữa hoặc nước trái cây đọng lại trong miệng và là nguyên nhân gây ra chứng sâu răng do bú bình.</li>
                            <li><b>Giáo dục sức khỏe răng miệng</b> cho trẻ. Dạy trẻ tầm quan trọng của việc giữ gìn vệ sinh răng miệng và cách đánh răng đúng.</li>
                            <li>
                                Khi trẻ được 2 tuổi, bố mẹ có thể để <a href="https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/nhi/khi-nao-co-cho-be-bat-dau-tu-danh-rang/?link_type=related_posts"><b>trẻ tự đánh răng</b></a> dưới sự hướng dẫn và
                                quan sát của người lớn.
                            </li>
                            <li>Hạn chế cho trẻ ăn thức ăn nhanh, kẹo dẻo, bánh kẹo ngọt, thức uống có gas. Khuyến khích trẻ ăn nhiều trái cây tươi và rau xanh.</li>
                            <li>Đưa trẻ đến khám nha khoa thường xuyên. Theo khuyến cáo của Hiệp hội Nha Khoa Hoa Kỳ, nên bắt đầu cho trẻ em đến nha khoa từ lúc 1 tuổi.</li>
                        </ul>
                        <p>
                            Tóm lại, chải răng đúng cách, dùng chỉ nha khoa mỗi ngày và khám răng định kỳ... là một trong những việc quan trọng cần thực hiện để giữ gìn sức khỏe răng miệng tốt, từ đó giúp ngăn ngừa các bệnh về nướu, bảo vệ sức khoẻ
                            và mang lại sự tự tin cho con người.
                        </p>
                        <p><b>=&gt;&gt; Lời khuyên từ Thạc sĩ, Bác sĩ Đặng Tiến Đạt - Bác sĩ Răng - Hàm - Mặt - Khoa khám bệnh &amp; Nội khoa - Bệnh viện Đa khoa Quốc tế Vinmec Hạ Long:</b></p>
                        <p>
                            Chăm sóc răng miệng đúng cách sẽ phòng ngừa và hạn chế được các bệnh về Răng Hàm Mặt. Khách hàng nên đến gặp bác sĩ sớm để được hướng dẫn chăm sóc răng miệng đúng cách, phòng ngừa được các bệnh về răng miệng. Hiện nay,
                            Vinmec là một trong những bệnh viện uy tín hàng đầu cả nước, được đông đảo người bệnh tin tưởng thăm khám và điều trị bệnh. Đội ngũ bác sĩ chuyên khoa Răng Hàm Mặt và các chuyên gia tại Vinmec sẽ hướng dẫn khách hàng
                            chăm sóc răng miệng đúng cách miễn phí.
                        </p>
                    </div>
        
                    <p>
                        Để được tư vấn trực tiếp, Quý Khách vui lòng bấm số <a href="#" class="contact-button"><b>HOTLINE</b></a> hoặc đăng ký lịch trực tuyến <a href="#" class="appointment-button"><b>TẠI ĐÂY</b></a>. Tải
                        <a href="/myvinmec/" style="font-weight: 700;" target="_blank">ứng dụng độc quyền MyVinmec</a> để đặt lịch nhanh hơn, theo dõi lịch tiện lợi hơn!
                        <!-- Để được tư vấn trực tiếp, Quý Khách vui lòng bấm số <a href='tel:1900232389' class="contact-button"><b>1900 232 389</b></a> (phím 0 để gọi Vinmec) hoặc đăng ký lịch trực tuyến <a href="#" class="appointment-button"><b>TẠI ĐÂY</b></a>. Tải <a href="/myvinmec/" style="font-weight: 700;" target="_blank">ứng dụng độc quyền MyVinmec</a> để đặt lịch nhanh hơn, theo dõi lịch tiện lợi hơn! -->
                        <!-- Để được tư vấn trực tiếp, Quý Khách vui lòng bấm số <a href='tel:1900232389' class="contact-button"><b>1900 232 389</b></a> (phím 0 để gọi Vinmec) hoặc đăng ký lịch khám tại viện <a href="#" class="appointment-button"><b>TẠI ĐÂY</b></a>. Nếu có nhu cầu tư vấn sức khỏe từ xa cùng bác sĩ Vinmec, quý khách đặt lịch tư vấn <a href="/telehealth/" style="font-weight: 700;" target="_blank">TẠI ĐÂY</a>. Tải <a href="/myvinmec/" style="font-weight: 700;" target="_blank">ứng dụng độc quyền MyVinmec</a> để đặt lịch nhanh hơn, theo dõi lịch tiện lợi hơn -->
                    </p>
        
                    <component-laminkid-widget object-id="29"></component-laminkid-widget>
                    {{-- See more --}}
                    <div class="three-recent-list mobile">
                        <b>XEM THÊM:</b>
                        <ul>
                            <li>
                                <a
                                    href="/tin-tuc/thong-tin-suc-khoe/bi-loet-o-luoi-khong-thay-dau-co-phai-la-bieu-hien-cua-benh-ung-thu-hay-khong/?link_type=related_posts"
                                    title="Bị loét ở lưỡi không thấy đau có phải là biểu hiện của bệnh ung thư hay không?"
                                    class="post-title"
                                >
                                    Bị loét ở lưỡi không thấy đau có phải là biểu hiện của bệnh ung thư hay không?
                                </a>
                            </li>
        
                            <li>
                                <a href="/suc-khoe-tong-quat/tu-van-bac-si/moc-mun-mu-trong-mieng-la-dau-hieu-cua-benh-gi/?link_type=related_posts" title="Mọc mụn mủ trong miệng là dấu hiệu của bệnh gì?" class="post-title">
                                    Mọc mụn mủ trong miệng là dấu hiệu của bệnh gì?
                                </a>
                            </li>
        
                            <li>
                                <a href="/tin-tuc/thong-tin-suc-khoe/virus-hpv-trong-mot-so-benh-o-mieng/?link_type=related_posts" title="Virus HPV trong một số bệnh ở miệng" class="post-title">Virus HPV trong một số bệnh ở miệng</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="vote-and-social clearfix">
                    <p class="views"><i class="fa fa-eye" aria-hidden="true"></i> 18.9K</p>
        
                    <cms-vote :cms-id="94793" lang="vi"></cms-vote>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection

