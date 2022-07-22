@extends('admin.master')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('admin.post.update',['id'=>$post->id]) }}" method="POST">  
    @csrf
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Edit Post</h3>
        <div class="card-tools">
        </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="email">Post Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $post->name }}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="slug" name="slug" value="{{$post->slug}}">
            </div>

            <div class="form-group">
                <label>Parent_name</label>
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
                    <?php recursiveOptionPost($datas,$post->category_id);?>      
                </select>
            </div>

            <div class="form-group">
                <div class="form-group shadow-textarea">
                    <label for="intro">Intro</label>
                    <textarea class="form-control z-depth-1" name="intro" id="intro" rows="3" placeholder="Write something here...">{{$post->intro}}</textarea>
                  </div>
                  <script>
                        CKEDITOR.replace('intro');
                  </script>
            </div>

            <div class="form-group">
                <div class="form-group shadow-textarea">
                    <label for="content">Content</label>
                    <textarea class="form-control z-depth-1" name="content" id="content" rows="3" placeholder="Write something here...">{{$post->content}}</textarea>
                </div>
                <script>
                        CKEDITOR.replace('content');
                </script>
            </div>

            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" value="1" 
                    @if ($post->status == 1)
                        @checked(true)
                    @endif>
                    <label class="custom-control-label" for="customSwitch1">Status</label>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default float-right">Reset</button>
            </div>
            
        </div>
    </div>
</form>
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