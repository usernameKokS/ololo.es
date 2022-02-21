@extends('layouts.master')

@section('content')

<section>
@if($payMessage)
	@switch($payMessage['type'])
		@case('success')
			<paymodal :success="'true'"></paymodal>
			<!--div class="alert alert-success text-center">
				<img src="/img/icons/check-success.svg"> {{$payMessage['message']}}
			</div-->
			@break
		@case('error')
			<div class="alert alert-error text-center">
				<img src="/img/icons/check-fail.svg"> {{$payMessage['message']}}
			</div>
			@break
	@endswitch
@endif
<div class="container container-two">
	<div class="wrap-title">
		<a href="/posts" class="btn btn-regular btn-pink non-fixed-btn12"><div><img src="/img/menugreenwhite.svg" alt="espalda"><span>Listado anuncios</span></div></a>
	</div>
</div>
</section>
@endsection