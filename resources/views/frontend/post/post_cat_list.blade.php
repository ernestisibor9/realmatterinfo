@extends('frontend.master')

@section('home')

<h1>HELLO WORLD</h1>

@foreach ($postCat as $item)
<img src="{{asset($item->post_image)}}" alt="" width="300px" height="250px">
@endforeach

@endsection
