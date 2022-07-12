@extends('admin.master')

@section('content')
<form action="">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">User</h3>
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
                {{-- @foreach ($users as $user) --}}
                <tbody>
                <tr>
                    <td>Id</td>
                    <td>
                        <div class="media">
                            <a href="pull-left" href="">
                                <img class="media-object" src="#" alt="Image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Tin</h4>
                                {{-- <p>{{$post->created_at->format('d-m-Y')}}</p> --}}
                            </div>
                        </div>
                    </td>
                    <td>Category</td>
                    <td>Status</td>
                    <td>Created_at</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>            
                </tbody>
                {{-- @endforeach --}}
              </table>
            </div>
          </div>
            
        </div>
    </div>
  </form>
@endsection
