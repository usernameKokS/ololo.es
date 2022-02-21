@extends('layouts.master')

@section('content')
<section>
	<div class="main-page">
		<div class="container">
            <div class="plans">
				@include('pages.blocks.tariffs', ['showPrices' => false, 'coor' => isset($coor) ? $coor : false, 'postid' => isset($postid) ? $postid : false])
			</div>
		</div>
	</div>
</section>
@endsection