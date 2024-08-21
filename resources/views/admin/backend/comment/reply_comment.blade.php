@extends('admin.admin_dashboard')

@section('admin')

<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center mb-5">Reply Comment </h4>
                <form action="{{ route('reply.message') }}" method="post" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $comment->id }}">
        <input type="hidden" name="name" value="{{ $comment->name }}" >
        <input type="hidden" name="email" value="{{ $comment->email }}" >
        <input type="hidden" name="post_id" value="{{ $comment->post_id }}">
                    <div class="mb-3">
                        <label for="" class="fw-bold">User Name</label>
                        {{ $comment['name'] }}
                    </div>
                    <div class="mb-3">
                        <label for="" class="fw-bold">Post Title</label>
                        {{ $comment['post']['post_title'] }}
                    </div>
                    <div class="mb-3">
                        <label for="" class="fw-bold">User's Comment</label>
                        {{ $comment['message']}}
                    </div>
                    <div class="mb-3">
                        <label for="" class="fw-bold">Message</label>
                        <textarea name="message" id="" class="form-control" cols="30" rows="10">

                        </textarea>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Add Reply</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>


@endsection
