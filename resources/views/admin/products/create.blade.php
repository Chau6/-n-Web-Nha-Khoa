@extends('admin.master') 

@section('content')
<section class="services-style1-area sec-pd1">      

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">  
        @csrf
        <div class="sec-title max-width">
            <div class="card-header">
                <h3 class="card-title">Create product</h3>
            </div>
            <div class="card-body">
    
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product Name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <input type="hidden" name="slug" id="slug" class="form-control" placeholder="Enter Product Name">
                </div>

                <div class="form-group">
                    <label>Category ID</label>
                    <select class="form-control" name="category_id">
                        <option>---- ROOT ----</option>
                        <?php
                            $data=array();
                            $datas=array();
                        ?>
                        @foreach($categorys as $category)
                            @if(!empty($category))
                                <?php
                                    $data['id'] = $category->id;
                                    $data['name'] = $category->name;
                                    $data['parent_name'] = $category->parent_name;
                                    $datas[] = $data;
                                ?>
                            @endif
                        @endforeach
                        <?php recursiveOptionPro($datas,0);?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Product Intro</label>
                    <textarea name="intro" id="intro" class="form-control" placeholder="Enter Product Content">{{old('intro')}}</textarea>
                    <script>
                        CKEDITOR.replace('intro');
                  </script>
                </div>

                <div class="form-group">
                    <label>Product Content</label>
                    <textarea name="content" id="content" class="form-control" placeholder="Enter Product Content" >{{old('content')}}</textarea>
                    <script>
                        CKEDITOR.replace('content');
                  </script>
                </div>

                <div class="form-group">
                    <label>Product Price</label>
                    <input type="money" name="price" class="form-control" placeholder="Enter Price" value="{{old('price')}}">
                </div>
        
                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" name="images" class="form-control" >
                </div>

                <div class="form-group">
                    <label>Product Image</label>
					<input type="file" class="form-control" name="photos[]" multiple />
                </div>
        
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" value="1">
                        <label class="custom-control-label" for="customSwitch1">Status</label>
                    </div>
                </div>
        
            </div>
        </div>
        <div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Create</button>
    
                <button type="reset" class="btn btn-default float-right">Reset</button>
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
@section('js')
    {{-- Slug --}}
<script type="text/javascript">
    $('input#name').keyup(function(event){

    var title, slug;
    //  lấy text từ thẻ input 
    title = $(this).val();

    slug = title.toLowerCase();

    slug = slug.replace(/á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ầ|ấ|ẩ|ậ|ẫ/gi, 'a');
    slug = slug.replace(/é|è|ẹ|ẻ|ẽ|ê|ế|ề|ể|ệ|ễ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/o|ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ợ|ỡ/gi, 'o');
    slug = slug.replace(/u|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/y|ý|ỷ|ỳ|ỵ|ỹ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');

    slug = slug.replace(/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\-|\,|\.|\/|\?|\;|\:|\'|\"|_/gi, '');
    //  Thay đổi khoảng cách thành '-' 
    slug = slug.replace(/ /gi, "-");

    //  Phòng trường hợp nhiều khoảng trắng 
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');

    //  Xóa kí tự gạch ngang đầu và cuối 
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');

    // In giá trị;
    $('input#slug').val(slug);
    })
</script>
@endsection