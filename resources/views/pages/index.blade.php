@extends('layouts.master')

@section('content')
<section>
	<div class="posts">
		<div class="container">
			<div class="wrap-title wrap-title-mainpage">

				<div class="disable-desk page-title page-title-mainpage">
					@if($show_video != 'false')
					<span>Bienvenido, TU CORREO</span>
					@else
					<span>TU CORREO</span>
					@endif
					<span class="email-main-name">{{ $user['email'] }}</span>
				</div>

				<div class="disable-mobile page-title page-title-mainpage">
					@if($show_video != 'false')
					<span>Bienvenido, TU CORREO</span>
					@else
					<span>TU CORREO</span>
					@endif
					<span class="email-main-name">{{ $user['email'] }}</span>
				</div>

				{{-- <span class="pre-title-panel disable-desk">
					@if($show_video != 'false')
					<span>Bienvenido, </span>
					@endif
					Panel De

					<span class="email-main-name">{{ $user['email'] }}</span>
				</span>

				<h1 class="page-title disable-mobile">

					<span> Panel De </span>
					<span class="email-main-name">{{ $user['email'] }}</span>

				</h1> --}}

				@if($show_video == 'false')
					@if($open_create == true)
					<a href="/post/create" class="btn btn-oversize disable-md-down publish-main-page non-fixed-btn10">
						<div><img src="/img/pluswhite.svg" alt="espalda"><span>Publicar anuncio</span></div>
					</a>
					@else
					<a href="#" @click="openModalCreate" class="btn btn-oversize disable-md-down publish-main-page non-fixed-btn10">
						<div><img src="/img/pluswhite.svg" alt="espalda"><span>Publicar anuncio</span></div>
					</a>
					@endif
				@endif
			</div>
		</div>
	</div>
</section>

@if($show_video == 'false')
	<div class="faux-borders disable-md-up">
	</div>

	<section>
		<div class="disable-md-up">
			<div class="container">
				<div class="disable-mobile btn-margins btn-margins-mainpage">
					@if($open_create == true)
					<a href="/post/create" class="btn btn-oversize non-fixed-btn10">
						<div><img src="/img/pluswhite.svg" alt="espalda"><span>Publicar anuncio</span></div>
					</a>
					@else
					<a href="#" @click="openModalCreate" class="btn btn-oversize non-fixed-btn10">
						<div><img src="/img/pluswhite.svg" alt="espalda"><span>Publicar anuncio</span></div>
					</a>
					@endif
				</div>
			</div>
		</div>
	</section>
@endif

<div class="faux-borders">
</div>

<section>
	<div class="main-page">
		<div class="container @if($show_video == 'false') container-two @endif">

			@if($show_video == 'false')
			<div class="dash-wrapper">
				<div class="row">
					<div class="wrap-icon-mainpage"></div>
					<div class="col-md-12 col-lg-6">
						<div class="main-page__btns-wrapper">
							<div class="wrap-btn-mobile-inline">
								<a href="/posts" class="btn btn-regular btn-pink non-fixed-btn12">
									<div>
										<img src="/img/menugreenwhite.svg" alt="espalda"><span>Listado anuncios</span>
									</div>
								</a>
							</div>
							<div class="wrap-btn-mobile-inline dash-btns">
								<a href="/portals" class="btn btn-regular btn_green-hover non-fixed-btn13">
									<div>
										<span class="svg-icon svg-graph" style="margin-bottom: 2px;"></span>
										<span>Portales publicados</span>
									</div>
								</a>
								<a href="/statistic/forums" class="btn btn-regular foro-btn btn_green-hover non-fixed-btn14">
									<div>
										<span class="svg-icon svg-infogreen"></span><span>Foros</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="dash-links-wrapper">
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<a href="/consumption" class="dash-link">
										<img src="/img/calendar.svg" alt="icon">
										Consumo productos
									</a>
									<!--a href="/tariff" class="dash-link">
										<img src="/img/cartpink.svg" alt="icon">
                                        TARIFAS
									</a-->
									<a href="/billing" class="dash-link">
										<img src="/img/pay.svg" alt="icon">
										Facturación
									</a>
								</div>
								<div class="col-md-12 col-lg-6">
									<a href="#" class="dash-link" @click="openForgotPass('{{ $user['email'] }}')">
										<img src="/img/lock.svg" alt="icon">
										Cambiar contraseña
									</a>
									<a href="/contact" class="dash-link">
										<img src="/img/questionpink.svg" alt="icon">
										Contactar
									</a>
									<a href="/page/policy" class="dash-link">
										<img src="/img/accept.svg" alt="icon">
										Textos Legales
									</a>
                                    <a href="/video-faq" class="dash-link">
										<img src="/img/film.svg" alt="icon" class="fill-pink">
										Video FAQ
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@else
			<div class="plans">
				@include('pages.blocks.tariffs', ['showPrices' => false, 'coor' => isset($coor) ? $coor : false, 'postid' => isset($postid) ? $postid : false])
			</div>
			<!--div class="dash-wrapper__empty">
				<p>Para saber como funciona nuestra plataforma, mira el video.</p>

				<div class="video-wrapper">
					<div class="row">
						<div class="col-md-12 col-lg-8">
							<div class="main-page__video">
								<iframe width="100%" height="100%" src="https://drive.google.com/file/d/1jzHuQV2BTYgJgGlurVSpMULz2xIQVS0t/preview" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							@if($open_create == true)
							<div class="main-page__btn-wrap">
								<a href="/post/create" class="btn btn-oversize non-fixed-btn10">
									<div><img src="/img/pluswhite.svg" alt="espalda"><span>Publicar anuncio</span></div>
								</a>
							</div>
							@else
							<div class="main-page__btn-wrap">
								<a href="#" @click="openModalCreate" class="btn btn-oversize non-fixed-btn10">
									<div><img src="/img/pluswhite.svg" alt="espalda"><span>Publicar anuncio</span></div>
								</a>
							</div>
							@endif

						</div>
					</div>
				</div>
			</div-->
			@endif
		</div>
	</div>
</section>
@if($show_video != 'false')
	@if($open_create == true)
	<div class="main-page__btn-wrap footer-fixed-button">
		<a href="/post/create" class="btn btn-oversize non-fixed-btn10">
			<div><img src="/img/pluswhite.svg" alt="espalda"><span>Publicar anuncio</span></div>
		</a>
	</div>
	@else
	<div class="main-page__btn-wrap footer-fixed-button">
		<a href="#" @click="openModalCreate" class="btn btn-oversize non-fixed-btn10">
			<div><img src="/img/pluswhite.svg" alt="espalda"><span>Publicar anuncio</span></div>
		</a>
	</div>
	@endif
@endif
@endsection

@section('footer_script')
    @parent
<style>
	.footer-fixed-button
	{
		position: fixed;
		bottom: 0;
		left: 0;
		background: #fff;
		width: 100%;
		padding: 10px;
		text-align: center;
		border-top: 1px solid #dfdfdf;
        display: flex;
        justify-content: center;
		background-color: #d9f9e5;
	}
</style>
@endsection
