@extends('layouts.master')

@section('content')

<section>
	<div class="posts">
		<div class="container container-two">
			<div class="wrap-title"><img src="/img/box.svg" alt="Edit" class="title-img">
				<h1 class="page-title">El archivo</h1>


			</div>
			<div class="wrap-desc disable-desk">
				<p>Puede eliminar o restaurar completamente el anuncio.</p>
			</div>
			<div class="disable-mobile btn-margins">
				<a href="/"  class="btn btn-oversize">
					<div><img src="/img/plus.svg" alt="espalda"><span>Publicar anuncio</span></div>
				</a>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="posts__board disable-desk">
		<div class="container container-two">
			<div class="wrap_board">
				<div class="wrap_board-left">
					<h3 class="h3-desc">Mostrando 2 anuncio.</h3>
					<a href="/"  class="btn btn-normal  btn_green-hover">
						<div><img src="/img/box.svg" alt="espalda"><span>el archivo</span></div>
					</a>
				</div>
				<div class="wrap_board-right">
					<span>Ordenar por:</span>
					<a href="" class="btn-simple btn-simple__active">fecha</a>
					<a href="" class="btn-simple">Nombre</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="posts-content">
		<div class="container">
			<div class="post-main-wrap">
			<div class="post-item">
				<div class="item-content__desk">
					<div class="custom-control custom-checkbox item-check">
						<input type="checkbox" id="customCheck1" class="custom-control-input">
						<label for="customCheck1" class="custom-control-label">
						</label>
					</div>
					<div class="avatar-wrapper">
						<div class="main-avatar">
							<img src="/img/girl.png" alt="avatar">
						</div>
					</div>
					<div class="item-content">
						<div class="item-content__left">
							<div class="item-content__top">
								<div class="item__name">
									<h3 class="h3-desc">Monica</h3>
									<div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="switch1">
										<label class="custom-control-label" for="switch1">- ACTIVO</label>
									</div>
								</div>
								<div class="item_desc">
									<div class="item_desc-left">
										<p>Top anuncio: <span class="item_desc-error">No</span></p>
										<p>Subir automático: <span class="item_desc-success">Yes</span></p>
									</div>
									<div class="item_desc-right">
										<div class="item_desc-right-wrapper disable-desk">
											<div class="wrap-btn-mobile-inline"><a href="/" 
													class="btn btn-normal btn_green-hover">
													<div><img src="/img/graph.svg" alt="espalda"><span>Portales
															publicados</span></div>
												</a></div>
											<div class="wrap-btn-mobile-inline">
												<a href="/" class="btn btn-normal btn_green-hover btn-experts "
													>
													<div>
														<img src="/img/quit.svg" alt="espalda"><span>Rorrar
															anuncio</span>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item-content__bottom disable-md-down">
								<div class="wrap-btn-mobile-inline">
									<a href="/" class="btn btn-normal btn_green-hover" >
										<div>
											<img src="/img/graph.svg" alt="espalda"><span>Portales publicados</span>
										</div>
									</a>
								</div>
								<div class="wrap-btn-mobile-inline">
									<a href="/" class="btn btn-normal btn_green-hover" >
										<div>
											<img src="/img/infogreen.svg" alt="espalda"><span>foro</span>
										</div>
									</a>
								</div>
								<div class="wrap-btn-mobile-inline">
									<a href="/" class="btn btn-normal btn_green-hover" >
										<div>
											<img src="/img/cart.svg" alt="espalda"><span>Suscripcciones</span>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="item-content__right disable-desk">
							<div class="wrap-btn-mobile-inline padder-btns">
								<a href="/" class="btn btn-normal btn_green-hover" >
									<div>
										<img src="/img/change1.svg" alt="espalda"><span>Modificar anuncio</span>
									</div>
								</a>
							</div>
							<div class="wrap-btn-mobile-inline">
								<a href="/" class="btn btn-normal btn_green-hover btn-experts " >
									<div>
										<img src="/img/quit.svg" alt="espalda"><span>Rorrar anuncio</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item-content__mobile">
					<div class="item-content__mobile-padding">
						<div class="item-content__bottom">
							<div class="btns-flex disable-md-up">
								<div class="wrap-btn-mobile-inline">
									<a href="/" class="btn btn-normal btn_green-hover item-width-mobile"
										>
										<div>
											<img src="/img/graph.svg" alt="espalda"><span>Portales publicados</span>
										</div>
									</a>
								</div>
								<div class="wrap-btn-mobile-inline">
									<a href="/" class="btn btn-normal btn_green-hover" >
										<div>
											<img src="/img/infogreen.svg" alt="espalda"><span>foro</span>
										</div>
									</a>
								</div>
							</div>
							<div class="wrap-btn-mobile-inline disable-md-up">
								<a href="/" class="btn btn-normal btn_green-hover item-width-mobile" >
									<div>
										<img src="/img/cart.svg" alt="espalda"><span>Suscripcciones</span>
									</div>
								</a>
							</div>
							<div class="wrap-btn-mobile-inline padder-btns disable-mobile" style="padding-top: 28px;">
								<a href="/" class="btn btn-normal btn_green-hover item-width-mobile" >
									<div>
										<img src="/img/change1.svg" alt="espalda"><span>Modificar anuncio</span>
									</div>
								</a>
							</div>
							<div class="wrap-btn-mobile-inline disable-mobile">
								<a href="/" class="btn btn-normal btn_green-hover btn-experts item-width-mobile"
									>
									<div>
										<img src="/img/quit.svg" alt="espalda"><span>Rorrar anuncio</span>
									</div>
								</a>
							</div>
							<div class="item_desc-right-wrapper disable-mobile" style="padding-top: 10px;">
								<div class="wrap-btn-mobile-inline"><a href="/" 
										class="btn btn-normal btn_green-hover  btn-experts item-width-mobile">
										<div><img src="/img/graph.svg" alt="espalda"><span>Portales
												publicados</span></div>
									</a></div>
								<div class="wrap-btn-mobile-inline">
									<a href="/" class="btn btn-normal btn_green-hover btn-experts item-width-mobile"
										>
										<div>
											<img src="/img/quit.svg" alt="espalda"><span>Rorrar
												anuncio</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="post-main-wrap">
				<div class="post-item">
					<div class="item-content__desk">
						<div class="custom-control custom-checkbox item-check">
							<input type="checkbox" id="customCheck1" class="custom-control-input">
							<label for="customCheck1" class="custom-control-label">
							</label>
						</div>
						<div class="avatar-wrapper">
							<div class="main-avatar">
								<img src="/img/girl.png" alt="avatar">
							</div>
						</div>
						<div class="item-content">
							<div class="item-content__left">
								<div class="item-content__top">
									<div class="item__name">
										<h3 class="h3-desc">Monica</h3>
										<div class="custom-control custom-switch">
											<input type="checkbox" class="custom-control-input" id="switch2">
											<label class="custom-control-label" for="switch2">- ACTIVO</label>
										</div>
									</div>
									<div class="item_desc">
										<div class="item_desc-left">
											<p>Top anuncio: <span class="item_desc-error">No</span></p>
											<p>Subir automático: <span class="item_desc-success">Yes</span></p>
										</div>
										<div class="item_desc-right">
											<div class="item_desc-right-wrapper disable-desk">
												<div class="wrap-btn-mobile-inline"><a href="/" 
														class="btn btn-normal btn_green-hover">
														<div><img src="/img/graph.svg" alt="espalda"><span>Portales
																publicados</span></div>
													</a></div>
												<div class="wrap-btn-mobile-inline">
													<a href="/" class="btn btn-normal btn_green-hover btn-experts "
														>
														<div>
															<img src="/img/quit.svg" alt="espalda"><span>Rorrar
																anuncio</span>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item-content__bottom disable-md-down">
									<div class="wrap-btn-mobile-inline">
										<a href="/" class="btn btn-normal btn_green-hover" >
											<div>
												<img src="/img/graph.svg" alt="espalda"><span>Portales publicados</span>
											</div>
										</a>
									</div>
									<div class="wrap-btn-mobile-inline">
										<a href="/" class="btn btn-normal btn_green-hover" >
											<div>
												<img src="/img/infogreen.svg" alt="espalda"><span>foro</span>
											</div>
										</a>
									</div>
									<div class="wrap-btn-mobile-inline">
										<a href="/" class="btn btn-normal btn_green-hover" >
											<div>
												<img src="/img/cart.svg" alt="espalda"><span>Suscripcciones</span>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="item-content__right disable-desk">
								<div class="wrap-btn-mobile-inline padder-btns">
									<a href="/" class="btn btn-normal btn_green-hover" >
										<div>
											<img src="/img/change1.svg" alt="espalda"><span>Modificar anuncio</span>
										</div>
									</a>
								</div>
								<div class="wrap-btn-mobile-inline">
									<a href="/" class="btn btn-normal btn_green-hover btn-experts " >
										<div>
											<img src="/img/quit.svg" alt="espalda"><span>Rorrar anuncio</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item-content__mobile">
						<div class="item-content__mobile-padding">
							<div class="item-content__bottom">
								<div class="btns-flex disable-md-up">
									<div class="wrap-btn-mobile-inline">
										<a href="/" class="btn btn-normal btn_green-hover item-width-mobile"
											>
											<div>
												<img src="/img/graph.svg" alt="espalda"><span>Portales publicados</span>
											</div>
										</a>
									</div>
									<div class="wrap-btn-mobile-inline">
										<a href="/" class="btn btn-normal btn_green-hover" >
											<div>
												<img src="/img/infogreen.svg" alt="espalda"><span>foro</span>
											</div>
										</a>
									</div>
								</div>
								<div class="wrap-btn-mobile-inline disable-md-up">
									<a href="/" class="btn btn-normal btn_green-hover item-width-mobile" >
										<div>
											<img src="/img/cart.svg" alt="espalda"><span>Suscripcciones</span>
										</div>
									</a>
								</div>
								<div class="wrap-btn-mobile-inline padder-btns disable-mobile" style="padding-top: 28px;">
									<a href="/" class="btn btn-normal btn_green-hover item-width-mobile" >
										<div>
											<img src="/img/change1.svg" alt="espalda"><span>Modificar anuncio</span>
										</div>
									</a>
								</div>
								<div class="wrap-btn-mobile-inline disable-mobile">
									<a href="/" class="btn btn-normal btn_green-hover btn-experts item-width-mobile"
										>
										<div>
											<img src="/img/quit.svg" alt="espalda"><span>Rorrar anuncio</span>
										</div>
									</a>
								</div>
								<div class="item_desc-right-wrapper disable-mobile" style="padding-top: 10px;">
									<div class="wrap-btn-mobile-inline"><a href="/" 
											class="btn btn-normal btn_green-hover  btn-experts item-width-mobile">
											<div><img src="/img/graph.svg" alt="espalda"><span>Portales
													publicados</span></div>
										</a></div>
									<div class="wrap-btn-mobile-inline">
										<a href="/" class="btn btn-normal btn_green-hover btn-experts item-width-mobile"
											>
											<div>
												<img src="/img/quit.svg" alt="espalda"><span>Rorrar
													anuncio</span>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				<div class="post-item__dissable container">
					<div class="grey-dis">
	
					</div>
				</div>
			</div>

			<div class="no-posts">
				<div class="container container-two">


					<h3 class="h3-desc">No hay anuncios</h3>
					<p>
						Todavía no has publicado anuncios. Puedes publicarlos desde el menú principal.
					</p>
					<div class="wrap-btn-mobile-inline">
						<a href="/personal" class="btn btn-regular btn_green-hover" >
							<div>
								<img src="/img/return.svg" alt="espalda"><span>volver al menú principal</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection