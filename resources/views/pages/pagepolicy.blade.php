@extends('layouts.master')

@section('content')

<section>
	<div class="container container-two">
		<div class="wrap-title">
			<img src="/img/accept.svg" alt="Edit" class="title-img">
			<h1 class="page-title page-title-policy">Textos Legals</h1>
		</div>
	</div>
</section>

<div class="faux-borders"></div>
<section>
	<policy-pdf></policy-pdf>
</section>
@endsection
