@extends('admin.admin_dashboard')

@section('admin')


@section('title')
    RealMatterInfo - All Ads
@endsection

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ads</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Ads Photo
                                    </th>
                                    <th>
                                        Ads Banner
                                    </th>
                                    <th>
                                        Ads Owner
                                    </th>
                                    <th>
                                        Ads Style
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($ads->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center text-danger">No records found</td>
                                    </tr>
                                @else
                                    @foreach ($ads as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td> <img src="{{ asset($item->photo) }}" alt=""
                                                    style="width: 70px; height:50px;"> </td>
                                            <td> <img src="{{ asset($item->banner) }}" alt=""
                                                    style="width: 70px; height:50px;"> </td>
                                            <td>{{ $item->ads_owner }}</td>
                                            <td>{{ $item->ads_style }}</td>
                                            <td>
                                                <a href="{{ route('edit.ads', $item->id) }}"
                                                    class="btn btn-info px-5">Edit
                                                </a>
                                                <a href="{{ route('delete.ads', $item->id) }}"
                                                    class="btn btn-danger px-5" id="delete">Delete </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
