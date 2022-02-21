@extends('layouts.master')

@section('content')
	<tariffpay :post_id={{ $postId }} plan="{{$plan}}"></tariffpay>
@endsection