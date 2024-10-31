@extends('admin.admin_dashboard')

@section('admin')


@section('title')
    RealMatterInfo - Edit Advert
@endsection


<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Edit Advert</h4>
                    <form action="{{ route('update.ads') }}" method="post" class="forms-sample"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $ads->id }}">
                        <div class="form-group col-12">
                            <label for="input1" class="form-label">Ads Owner Name</label>
                            <input type="text" name="ads_owner" value="{{ $ads->ads_owner }}" class="form-control"
                                id="input1">
                        </div>
                        <div class="form-group col-12">
                            <label for="input1" class="form-label">Ads Style</label>
                            <input type="text" name="ads_style" value="{{ $ads->ads_style }}" class="form-control"
                                id="input1">
                        </div>
                        <div class="form-group col-8">
                            <label for="input2" class="form-label">Ads Photo <span class="text-danger">
                                    (width: 262px : height: 334px)</span></label>
                            <input class="form-control @error('photo')is-invalid @enderror" name="photo"
                                type="file" id="image">
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-4 mb-3">
                            <img id="showImage" src="{{ asset($ads->photo) }}" alt="Admin"
                                class="rounded-circle p-1 bg-primary" width="80">
                        </div>
                        <div class="form-group col-8">
                            <label for="input2" class="form-label">Ads Banner <span class="text-danger">
                                    (width: 750px : height: 92px)</span> </label>
                            <input class="form-control @error('banner')is-invalid @enderror" name="banner"
                                type="file" id="image">
                            @error('banner')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-4 mb-4">
                            <img id="showImage" src="{{ asset($ads->banner) }}" alt="Admin"
                                class="rounded-circle p-1 bg-primary" width="80" height="40">
                        </div>
                        <div class="col-md-6">
                        </div>

                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Update Ads</button>
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
