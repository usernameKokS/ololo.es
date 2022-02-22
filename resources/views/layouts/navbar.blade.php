<section class="
@if(Request::is('login'))
disable-md-down
@endif
">
	<div class="nav">
		<div class="container">
			<div class="wrapper">
				<div class="nav-left" onclick="window.location.href = '/personal'">
					<img src="/img/logo.png" alt="Almeja Rosa" title="Almeja Rosa">
					<span class="site-name">O L O L O.es</span>
				</div>
				@if (Request::path() != 'login')
				<div class="nav-right">
					@guest
					<a href="#" class="btn btn-regular btn-pink btn-register">
						<div><span>ENTRAR</span></div>
					</a>
					<a href="/" class="btn btn-regular btn-pink btn-register">
						<div><span>REGISTRAR</span></div>
					</a>
					@else
					<a href="/personal" class="btn btn-big btn_green-hover">Panel de control</a>
					<a class="btn-outline" href="{{ route('logout') }}" onclick="event.preventDefault();
								  document.getElementById('logout-form').submit();">
						{{ __('Cerrar sesión') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
					@endguest
				</div>
				@endif
				<div class="nav-right__mobile">
					@if(Auth::check())
					<div v-click-outside="onClickOutside">
						<div class="mobile-menu" @click="openMenuName">
							<div class="mobile-menu__line"></div>
							<div class="mobile-menu__line"></div>
							<div class="mobile-menu__line"></div>
						</div>

						<div v-cloak>
							<transition  name="fade">
								<div class="main-menu" v-show='menu' class="modalMenu">
									<ul>
										<li><a href="/personal">Panel de control</a></li>
										<li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
												{{ __('Cerrar sesión') }}
											</a></li>
										<li><a href="/consumption">Consumo productos</a></li>
										<!--i><a href="/tariff">Suscripciones</a></i-->
										<li><a href="/billing">Facturación</a></li>
										<li><a href="#" @click="openForgotPass('{{ Auth::user()->email }}')">Cambiar contraseña</a></li>
										<li><a href="/page/policy">TEXTOS LEGALS</a></li>
									</ul>
								</div>
							</transition>
						</div>

					</div>

					@endif
				</div>
			</div>
		</div>
	</div>
</section>
