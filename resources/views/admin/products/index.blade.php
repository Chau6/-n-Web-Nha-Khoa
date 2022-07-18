@extends('admin.master') 

@section('content')
<form action="">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product</h3>
          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                            $data=array();
                            $datas=array();
                        ?>
                        @foreach($products as $product)
                            @if(!empty($product))
                                <?php
                                    $data['id'] = $product->id;
                                    $data['name'] = $product->name;
                                    $data['price'] = $product->price;
                                    $data['category_id'] = $product->category_id;
                                    $datas[] = $data;
                                ?>
                            @endif
                        @endforeach
                        <?php recursiveTablePostb($datas,0);?>
                    </tr>
                    {{-- </td> --}}
                    {{-- <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{ date('d/m/Y | H:i:s', strtotime($user->created_at)) }}</td>
                    <td><a href="{{ route('admin.user.edit', ['id'=>$user->id]) }}">Edit</td>
                    <td><a onclick="return confirmDelete()" href="{{ route('admin.user.delete', ['id'=>$user->id]) }}">Delete</td> --}}
                </tr>            
                </tbody>

              </table>
            </div>
          </div>
            
        </div>
    </div>
  </form>
@endsection