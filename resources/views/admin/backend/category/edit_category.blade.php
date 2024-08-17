@extends('admin.admin_dashboard')

@section('admin')

<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">Edit Category</h4>
                <form action="{{ route('update.category') }}" method="post" class="forms-sample" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{$category->id}}">
                    @csrf
                    <div class="mb-3">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control @error('category_name')is-invalid @enderror"
                            name="category_name" id="" value="{{$category->category_name}}">
                        @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>




@endsection
