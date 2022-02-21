@extends('layouts.master')

@section('content')

<section>
	<div class="posts">
		<div class="container container-two">
			<div class="wrap-title"><img src="/img/menugreen.svg" alt="Edit" class="title-img">
				<h1 class="page-title">Consumo productos</h1>
			</div>
		</div>
	</div>
</section>

<div class="faux-borders"></div>

<section>
	<div class="contacts">
		<div class="container container-two">
			<div class="wrapper-pages">
				<p class="edit-desc">
                    Histórico de los productos que has contratado.
                </p>
			</div>
		</div>
	</div>
</section>

@if(count($tarifs) == 0)
<section>
	<div class="no-posts no-posts__cp">
		<div class="container container-two">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<h3 class="h3-desc">No hay consumo</h3>
					<p>
						Todavía no has pcontratado ningún producto.
					</p>
					<div class="wrap-btn-mobile-inline"><a href="/personal" class="btn btn-regular btn_green-hover">
							<div><img src="/img/return.svg" alt="espalda"><span>volver al menú principal</span></div>
						</a></div>
				</div>
				<!--div class="col-md-12 col-lg-6">
					<div class="set-tariff">
						<a href="/tariff" class="btn btn-regular btn-green">Выбор тарифа</a>
					</div>
				</div-->
			</div>
		</div>
	</div>
</section>
@endif

@if(count($tarifs) > 0)
<section class="estada-area">
	<div class="statistic statistic-cons">
		<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th scope="col" class="tbody-name">Nombre</th>
						<th scope="col" class="th-pol">ID</th>
						<th scope="col" class="th-pol">Post ID</th>
						<th scope="col" class="th-pol">Tarifa</th>
						<th scope="col" class="th-pol">Precio</th>
						<th scope="col" class="th-pol">FECHA INICIO - FECHA FINAL</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tarifs as $tr)
					<tr>
					<td class="tbody-name">{{ $tr->post->name }}</td>
					<td>{{ $tr['post_id'] }}</td>
					<td>{{ $tr['id'] }}</td>
					<td class="status status-green th-pol">{{ $tr['name']}}</td>
					<td class="th-pol" style="padding: 10px;">{{ $tr['price'] }} €</td>
					<td class="th-pol">
						{{ \Carbon\Carbon::parse($tr['created_at'])->format('d.m.Y') }} -
						{{ \Carbon\Carbon::parse($tr['end'])->format('d.m.Y') }}
					</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endif


@endsection
