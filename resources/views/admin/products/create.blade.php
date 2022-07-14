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
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">  
        @csrf
            <input type="text"  ></input>
    </form>
    {{-- <pre>
        <?php
            print_r($datas)
        ?>
    </pre> --}}
</section>
@endsection

