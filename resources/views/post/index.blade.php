@extends('layouts.master')

@section('content')

<section>
@if($payMessage)
	@switch($payMessage['type'])
		@case('success')
			<div class="alert alert-success text-center">
				<img src="/img/icons/check-success.svg"> {{$payMessage['message']}}
			</div>
			@break
		@case('error')
			<div class="alert alert-error text-center">
				<img src="/img/icons/check-fail.svg"> {{$payMessage['message']}}
			</div>
			@break
	@endswitch
@endif
<posts 
:ocreate="{{ $open_create ? 'true' : 'false' }}"
:interface="openModalCreate"
></posts>
</section>
@endsection