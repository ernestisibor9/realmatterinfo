@extends('admin.admin_dashboard')

@section('admin')

<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">Add Video</h4>
                <form  action="{{ route('store.video') }}" method="post" class="forms-sample"
                enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-6">
                        <label for="input1" class="form-label">Post Category </label>
                        <select name="blogcat_id" class="form-control mb-3" aria-label="Default select example">
                            <option selected="">Select Blog Category</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group col-6">
                        <label for="input1" class="form-label">Post Title</label>
                        <input type="text" name="post_title" class="form-control" id="input1">
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="input1" class="form-label">YouTube URL</label>
                    <input type="text" name="video_url" class="form-control" id="input1">
                </div>
                <div class="form-group col-md-12">
                    <label for="input1" class="form-label">Post Description</label>
                    <textarea name="long_descp" class="form-control" id="mytextarea"></textarea>
                </div>

                <div class="col-md-6">
                </div>

                <div class="row">
                    <div class="form-group col-8">
                        <label for="input2" class="form-label">Video Image </label>
                        <input class="form-control" name="video_image" type="file" id="image">
                    </div>

                    <div class="col-4">
                        <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin"
                            class="rounded-circle p-1 bg-primary" width="80">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Add Video</button>

                    </div>
                </div>
            </form>
              </div>
            </div>
          </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
