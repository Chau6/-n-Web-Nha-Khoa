@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                ADD PHOTO GALLERY
            </header>
        <form action="{{route('admin.gallery.insert_gallery',$pro_id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3" align="right">

                </div>
                <div class="col-md-6">
                    <input type="file" class="form-control" id="file" name="file[]" accept="image/*" multiple>
                    <span id="error_gallery"></span>
                </div>
                <div class="col-md-3" >
                    <input type="submit" name="upload" name="uploadimage" value="Upload image" class="btn btn-success"> 
                </div> 
            </div>
        </form>
            <div class="panel-body">
                <input type="hidden" value="{{$pro_id}}" name="pro_id" class="pro_id">
                <form>
                    @csrf
                <div id="gallery_load">
                   
                </div>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function (){
            load_gallery();
            function load_gallery(){
                var pro_id = $('.pro_id').val();
                var _token =$('input[name="_token"]').val();
                // alert(pro_id);
                $.ajax({
                    url:"{{route('admin.gallery.select_gallery')}}",
                    method:"POST",
                    data:{pro_id:pro_id,_token:_token},
                    success:function(data){
                        $('#gallery_load').html(data);
                    }

                });
            }

            $('#file').change(function() {
                var error = '';
                var files = $('#file')[0].files;

                if(files.length > 4){
                    error+='<p>You just can choose 4 images</p>';
                }else if(files.length==''){
                    error+='<p>Please choose a image</p>';
                }else if(files.size >2000000){
                    error+='<p>Image file should not be larger than 2000000</p>';
                }

                if(error==''){

                }else{
                    $('#file').val('');
                    $('#error_gallery').html('<span class="text-danger">'+error+'</span>');
                    return false;
                }
            });
        });
    </script>
@endsection