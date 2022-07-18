@extends('admin.master')

@section('content')
<form action="">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Post</h3>
          <div class="card-tools">
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Status</td>
                    <td>Created At</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                </thead>
                @foreach ($post as $posts)
                <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <div class="media">
                            <a href="pull-left" href="">
                                <img class="media-object" src="#" alt="Image">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">{{$posts->name}}</h4>
                              <p>{{ date('d/m/Y | H:i:s', strtotime($posts->created_at)) }}</p>
                            </div>
                        </div>
                    </td>
                    <td>{{$posts->category_name}}</td>
                    <td>{{$posts->status}}</td>
                    <td>{{ date('d/m/Y | H:i:s', strtotime($posts->created_at)) }}</td>
                    <td><a href="{{ route('admin.post.edit', ['id'=>$posts->id]) }}">Edit</td>
                      <td><a onclick="return confirmDelete()" href="{{ route('admin.post.delete', ['id'=>$posts->id]) }}">Delete</td>
                </tr>            
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
            
        </div>
    </div>
  </form>
@endsection