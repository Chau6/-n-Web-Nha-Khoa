<!DOCTYPE html>
<html lang="en">
    <script>
        function deleteConfirm() {
            if(window.confirm("Do you want to delete this")==true){
                return true;
            }
            return false;
        }
    </script>
<!-- Mirrored from st.ourhtmldemo.com/new/Dento/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 02:04:57 GMT -->
    @include('client.blocks.head')
    @yield('css')

<body>
<div class="boxed_wrapper">

    <div class="preloader"></div> 

    <!-- Start Top Bar area -->  
        @include('client.blocks.top_bar_area')
    <!-- End Top Bar area -->  
    
    <!--Start header style1 area-->
        @include('client.blocks.header_style')
    <!--End header style1 area-->
        
    <!--Start mainmenu area-->
        @include('client.blocks.main_menu')               
    <!--End mainmenu area--> 
    
    <!-- Hidden Navigation Bar -->
        @include('client.blocks.hidden_navigation_bar')
    <!-- End Hidden Bar -->     

    {{-- ===================================================================== --}}
        @yield('breadcrumb')    

        @yield('content')
    {{-- ===================================================================== --}}

    <!--Start Footer Contact Info Area-->
        @include('client.blocks.footer_contact_info')
    <!--End Footer Contact Info Area--> 
    
    <!--Start footer area-->  
        @include('client.blocks.footer')
    <!--End footer area-->

    <!--Start footer bottom area-->
        @include('client.blocks.footer_bottom')
    <!--End footer bottom area-->   

</div>

<!--Scroll to top-->
    @include('client.blocks.scroll_to_top')

<!-- Color Palate / Color Switcher -->
    @include('client.blocks.choose_color')
<!-- /.End Of Color Palate -->

{{-- Javascript --}}
    @include('client.blocks.script')


</body>
    @yield('js')
<!-- Mirrored from st.ourhtmldemo.com/new/Dento/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 02:04:57 GMT -->
</html>