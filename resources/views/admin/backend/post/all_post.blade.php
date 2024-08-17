@extends('admin.admin_dashboard')

@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Post</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Post Image
                                        </th>
                                        <th>
                                            Post Title
                                        </th>
                                        <th>
                                            Post Category
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($posts as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td> <img src="{{ asset($item->post_image) }}" alt=""
                                                    style="width: 70px; height:50px;"> </td>
                                            <td>{{ $item->post_title }}</td>
                                            <td>{{ $item->category->category_name }}</td>
                                            <td>
                                                <a href="{{ route('edit.post', $item->id) }}" class="btn btn-info px-5">Edit
                                                </a>
                                                <a href="{{ route('delete.post', $item->id) }}" class="btn btn-danger px-5"
                                                    id="delete">Delete </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
