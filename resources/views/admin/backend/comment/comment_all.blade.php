@extends('admin.admin_dashboard')

@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>Post Title </th>
                                        <th>User Name </th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comment as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item['post']['post_title'] }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ substr($item['message'], 0, 100) }}...</td>
                                            <td>
                                                @if ( $item->status == 'active')
                                                            <span class="badge rounded-pill bg-success">Active</span>
                                                    @else
                                                            <span class="badge rounded-pill bg-warning">Pending</span>
                                                @endif
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{ route('change.status', $item->id) }}" class="btn btn-{{ $item->status === 'pending' ? 'success': 'warning'  }}">{{ $item->status === 'pending' ? 'Approve' : 'Pending'  }} </a> &nbsp;
                                                <a href="{{ route('admin.comment.reply', $item->id) }}"
                                                    class="btn btn-info"> Reply </a>
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
