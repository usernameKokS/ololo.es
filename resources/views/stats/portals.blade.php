@extends('layouts.master')

@section('content')

<section>
	<div class="container">
		<div class="wrap-title">
			<h1 class="page-title">estadísticas</h1>
		</div>
	</div>
</section>

<div class="faux-borders"></div>



<section class="estada-area">
	<estad :postid="{{ $post->id }}"
		
		></estad>
</section>


@endsection