@extends('layouts.master')

@section('content')

<section>
	<div class="posts">
		<div class="container container-two">
			<div class="wrap-title"><img src="/img/invoice.svg" alt="Edit" class="title-img">
				<h1 class="page-title">Datos de facturación</h1>
			</div>
		</div>
	</div>
</section>

<div class="faux-borders">
</div>

<section>
	<billing></billing>
</section>
@endsection