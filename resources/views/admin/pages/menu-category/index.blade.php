@extends("admin.layouts.app")
@section('content')
<div class="container mt-5">
    <div class="title d-flex justify-centent-between mb-3">
        <div class="col">
            <h4 class="fw-bold"><span class="text-muted fw-light">Page/</span> All Category</h4>
        </div>
        <div class="col">
          <a href="{{route('addcategory')}}" type="submit" class="btn btn-primary float-end">Add Category<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg></a></a>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif
    <div class="card clearfix">
        <h5 class="card-header">Available Category Information</h5>
        @if (count($categories) == 0)
            <div class="text-center mx-5 alert alert-success">
                <p>Category belum ditambahkan</p>
            </div>
        @else
            <div class="table-responsive text-nowrap">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td class="d-flex">
                                    <a href="{{route('editcategory', $category->id)}}" class="btn btn-warning me-2">Edit</a>
                                    <a href="{{route('deletecategory', $category->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
      </div>
</div>
@endsection
