@extends("admin.layouts.app")
@section('content')
<div class="container mt-5">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update Menu</h4>
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
              <h5 class="mb-0">Update Menu</h5>
              <a href="{{route('menu.index')}}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
              <form action="{{route('menu.update', $getMenu->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$getMenu->title}}" id="title" placeholder="Desert" name="title" />
                  </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Menu Category</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="menu_category_id" name="menu_category_id">
                            <option selected>Select Menu Category</option>
                            @foreach ($getCategories as $category)
                                <option value="{{$category->id}}" {{ $category->id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                  <div class="col-sm-10">
                    <input type="number" value="{{$getMenu->price}}" class="form-control" id="price" name="price" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Stock</label>
                  <div class="col-sm-10">
                    <input type="number" value="{{$getMenu->stock}}" class="form-control" id="stock" name="stock" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" cols="20" rows="10">{{$getMenu->description}}</textarea>
                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Upload Menu Image</label>
                    <div class="col-sm-10">
                        <div class="d-flex my-4">
                            <p>Old Image</p>
                            <img src="{{$getMenu->img}}" width="100" height="100" alt="">
                        </div>
                        <input type="file" class="form-control" id="img" name="img" />
                    </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Menu</button>
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
