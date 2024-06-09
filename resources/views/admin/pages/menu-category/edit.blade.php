@extends("admin.layouts.app")

@section('content')
<div class="container mt-5">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Category</h4>
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
    <div class="row">
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Category</h5>
                <a href="{{route('allcategory')}}" class="btn btn-primary">Back</a>
              </div>
            <div class="card-body">
              <form action="{{route('updatecategory')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$category_info->id}}" name="category_id">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Electronics" name="name" value="{{$category_info->name}}"/>
                  </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Category</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Basic with Icons -->

      </div>
</div>
@endsection
