<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/modal-video.min.css"/>
    <link rel="stylesheet" href="assets/css/slick.css"/>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" class="next-head"/>
    <meta charSet="utf-8" class="next-head"/>
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery-modal-video.min.js" type="text/javascript"></script>
    <script src="assets/js/slick.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/css/chunk.css"/>
    <link rel="stylesheet" href="assets/css/page1.css"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="/favicon-16x16.png">
	<title>ololo.es - Publicar anuncios inmobiliarios. Anúnciate en más de 19 portales inmobiliarios en España por solo 1 euro y solo en 3 minutos</title>
	<script type="text/javascript">
		function backToTop() 
		{
			if (window.pageYOffset > 0) {
			  window.scrollBy(0, -80);
			  setTimeout(backToTop, 0);
			}
			return false;
		}
	</script>
	

</head>

<body class="custom_class">

<div id="__next">
    <div class="appContainer___33v1G1">
        <header class="header___3_UI2">
            <div class="appHeader___2GdyR">
                <div class="appHeaderInner___3lkmP">
                    <div class="appHeaderSections___1AuJk">
                        <div class="mainRow___l31cR">
                            <div class="logo___1BqBo">
								<a href="#" onclick="javascript:backToTop();">
								<img 
								src="assets/img/logo.png" width="50" height="50"/>
								</a>
								<span
                                    class="headerCaption___1mcEE">O L O L O.es</span></div>
                            @guest
                            <div class="appsLinks___367vX control-mobile">
                                <a class="app___1zJo4 app___4YV-O w-120 color-green animated infinite bounce"
                                   href="/personal" target="_blank">Registrate</a>
                            </div>
                            @endguest
                            <div class="navigation___RqU5O">
                                <nav class="externalNavigation___3Qyjf">
                                    <div class="navigation___29KkF navigationInner___3gerk">
                                        <ul class="navigationItems___3kw85">
                                            <li class="navigationItem___2fRbs">
                                                
                                            </li>
                                        </ul>
                                    </div>

                                </nav>
                                <div class="apps___1HuOq">
                                    <div class="appsLinks___367vX hed">
                                        @auth
                                            <a class="app___1zJo4 app___4YV-O w-150" href="/personal" style="width: 150px;">Panel de Control</a>
                                            <a class="app___1zJo4 app___4YV-O w-150" href="/logout" style="width: 150px;">Cerrar Sessión</a>
                                        @else
                                            <a class="app___1zJo4 app___4YV-O w-150" href="/personal">Entrar</a>
                                            <a class="app___1zJo4 app___4YV-O w-150" href="/personal">Registrar</a>
                                        @endauth
                                    </div>
                                </div>
                            </div>

                            <span class="sandwichMenu___WDedW navigationControl___BAeDT spec-landing-navigation-control">

                            </span>
                        </div>
                        <nav class="links" style="width: 100%;">
                            <div class="hide-on-device-size-Notxsmall">
                                @auth
                                    <ul class="navigationItems___3kw85">
                                        <li class="navigationItem___2fRbs">
                                            <span class="control___26dei link___24nhA">
                                                Tu correo:&nbsp;<a href="/personal" class="nav-link">{{auth()->user()->email}}</a>
                                            </span>
                                        </li>
                                    </ul>
                                @endauth
                            </div>
                            <div class="">
                                <ul class="navigationItems___3kw85" style="width: 100%;">
                                    <li class="navigationItem___2fRbs">
                                        <span class="control___26dei link___24nhA">
                                            <a href="#how" class="nav-link">Como funciona?</a>
                                        </span>
                                    </li>
                                    <li class="navigationItem___2fRbs">
                                        <span class="control___26dei link___24nhA">
                                            <a href="#question" class="nav-link">F.A.Q.</a>
                                        </span>
                                    </li>
                                    @auth
                                    <li class="navigationItem___2fRbs hide-on-device-size-small" style="position: absolute; top: 80px; right: 50px;">
                                        <span class="control___26dei link___24nhA">
                                            Tu correo:&nbsp;<a href="#question" class="nav-link">{{auth()->user()->email}}</a>
                                        </span>
                                    </li>
                                    @endauth
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="languageSwitcher___1pOWc">
                        <div class="languageSwitcher___1Aelp">
                            <div></div>
                            <div class="caption___jGR_0">
                                <div class="label___1_j7S">ES</div>
                                <svg viewBox="0 0 48 48" width="48" height="48" xmlns="http://www.w3.org/2000/svg"
                                     class="icon___m3FUT">
                                    <path
                                        d="M 24 44 C 12.954 44 4 35.046 4 24 C 4 12.954 12.954 4 24 4 C 35.046 4 44 12.954 44 24 C 44 35.046 35.046 44 24 44 Z M 8.124 26 C 8.832 31.608 12.444 36.426 17.628 38.68 C 15.742 35.316 14.374 30.724 14.066 26 L 8.124 26 Z M 8.124 22 L 14.064 22 C 14.366 17.272 15.708 12.696 17.576 9.342 C 12.418 11.606 8.83 16.412 8.124 22 Z M 39.876 22 C 39.17 16.412 35.582 11.606 30.424 9.342 C 32.292 12.696 33.634 17.272 33.936 22 L 39.876 22 Z M 30.372 38.68 C 35.556 36.426 39.168 31.608 39.876 26 L 33.934 26 C 33.626 30.724 32.258 35.316 30.372 38.68 Z M 20.652 35.838 C 21.95 38.446 23.472 40 24 40 C 24.528 40 26.05 38.446 27.348 35.838 C 28.738 33.044 29.672 29.598 29.928 26 L 18.072 26 C 18.328 29.596 19.262 33.044 20.652 35.838 Z M 20.616 12.158 C 19.244 14.938 18.322 18.39 18.07 22 L 29.93 22 C 29.678 18.39 28.756 14.94 27.384 12.158 C 26.09 9.538 24.576 8 24 8 C 23.424 8 21.91 9.536 20.616 12.158 Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="dropdownListItems___fYtqM">
                                <div class="items___3CjD4">
                                    <div class="item___z5aZx"><a href="/">Castellano</a></div>
                                    <div class="item___z5aZx"><a href="{{route('landing-en')}}">English</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="backdrop___1d0al"></div>
            </div>
        </header>
        <div class="appContent___XwD6L spec-app-content">
            <!-- <div class="teaser___2YASU">

                <div class="title___3ftGr title-f">Anúnciate en más de 19 portales inmobiliarios en España por solo 1 euro y solo en 3 minutos
                </div>
                <div class="backgroundLayer___2EgEs">
                    <div class="waveContainer___2BCfM">
                        <div class="wave___366NL"></div>
                        <div class="wave___366NL"></div>
                    </div>
                </div>
                <div class="middleLayer___2NaFV">
                    <div style="width:0" class="marks___2zLDi">
                        <div
                            style="top:8rem;-webkit-animation-delay:0s;-moz-animation-delay:0s;-o-animation-delay:0s;animation-delay:0s"
                            class="step___GGcmi heart___2sAQN"></div>
                        <div
                            style="top:30rem;-webkit-animation-delay:3s;-moz-animation-delay:3s;-o-animation-delay:3s;animation-delay:3s"
                            class="step___GGcmi heart___2sAQN"></div>
                        <--  <div style="top:2rem;-webkit-animation-delay:5s;-moz-animation-delay:5s;-o-animation-delay:5s;animation-delay:5s" class="step___GGcmi heart___2sAQN"></div>--
                        <div
                            style="top:24rem;-webkit-animation-delay:7s;-moz-animation-delay:7s;-o-animation-delay:7s;animation-delay:7s"
                            class="step___GGcmi heart___2sAQN"></div>
                        <div
                            style="top:30rem;-webkit-animation-delay:8.5s;-moz-animation-delay:8.5s;-o-animation-delay:8.5s;animation-delay:8.5s"
                            class="step___GGcmi heart___2sAQN"></div>
                        <div
                            style="top:2rem;-webkit-animation-delay:2.5s;-moz-animation-delay:2.5s;-o-animation-delay:2.5s;animation-delay:2.5s"
                            class="step___GGcmi like___3En7h"></div>
                        <-- <div style="top:25rem;-webkit-animation-delay:13.5s;-moz-animation-delay:13.5s;-o-animation-delay:13.5s;animation-delay:13.5s" class="step___GGcmi like___3En7h"></div>--
                        <div
                            style="top:13rem;-webkit-animation-delay:5.5s;-moz-animation-delay:5.5s;-o-animation-delay:5.5s;animation-delay:5.5s"
                            class="step___GGcmi like___3En7h"></div>
                        <div
                            style="top:18rem;-webkit-animation-delay:9.5s;-moz-animation-delay:9.5s;-o-animation-delay:9.5s;animation-delay:9.5s"
                            class="step___GGcmi like___3En7h"></div>
                    </div>
                    <div style="left: 1362.17px;" class="earned___E_Cbn">

                        <div class="step2___2V2VW money___2T20c bigNumber___3UI_A"
                             style="top: 20rem; animation-delay: 7s;color:#2cbd65">€
                        </div>
                        <div class="step2___2V2VW money___2T20c bigNumber___3UI_A"
                             style="top: 30rem; animation-delay: 10s;color:#2cbd65">€
                        </div>
                        <div class="step2___2V2VW money___2T20c bigNumber___3UI_A"
                             style="top: 8rem; animation-delay: 12s;color:#2cbd65">€
                        </div>
                        <div class="step2___2V2VW money___2T20c bigNumber___3UI_A"
                             style="top: 24rem; animation-delay: 8s;color:#2cbd65">€
                        </div>
                        <div class="step2___2V2VW money___2T20c bigNumber___3UI_A"
                             style="top: 30rem; animation-delay: 14s;color:#2cbd65">€
                        </div>
                    </div>
                </div>
                <div class="teaserInner___2AyZ3">


                    <div class="mob_buttone">
                        <div class="description___X_eXQ">Empieza ya a recibir llamadas y ganar dinero</div>
                        <div class="appsLinks___367vX apps___3B0LY">
                            <a class="app___1zJo4 withCaption___3ckVx largeSize___hGQVD app___QTifv color-green"
                               href="/login" target="_blank" style="margin-top: -5%">
                                <span class="caption___2ePII appCaption___1DnrE">Empezar</span>
                            </a>
                        </div>
                    </div>
                    <div class="sample___32zIb" id="teaser-video">
                        <a 
                            data-fancybox 
                            data-type="iframe" data-src="https://embedr.flickr.com/photos/191307898@N07/50694469291/in/dateposted-public" href="javascript:;">
                        <div class="sampleCanvas___1rXmc transform-90">
                            <div class="textContainer___2nel8 lastStep___Q5QMX krb" class="">
                                <div class="stepCardTitle___34mGW"><--Как это работает?--</div>
                                <div class="stepCardDescription___2noBr"><span
                                                                               data-video-id="5NNHMisMLeg"><--<i class="far fa-play-circle" style="color:#eab4c4"></i>--</span>
                                </div>
                            </div>

                            <span data-video-id="5NNHMisMLeg">  <img class="sampleContent___2HB7D"
                                                                                          loop="" muted=""
                                                                                          playsinline="" preload="auto"
                                                                                          width="288" height="624"
                                                                                          style="  -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%); /*ios 7 border-radius-bug */
  -webkit-transform: rotate(0.000001deg); /*mac os 10.6 safari 5 border-radius-bug */
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
  overflow: hidden; transform: rotate(180deg)" src="assets/img/slide/vid.jpg"/></span>

                        </div>
                        </a>
                    </div> -->


                    <div class="content___3vwxh">
                        <div class="title___3ftGr title-f-pc">Anúnciate en más de 19 portales inmobiliarios en España por solo
                            1 euro y solo en 3 minutos&nbsp;
                        </div>
                        <div class="description___X_eXQ comp_butone">Empieza ya a recibir llamadas y ganar dinero</div>
                        <div class="appsLinks___367vX apps___3B0LY comp_butone"></div>
                        <div class="appsLinks___367vX apps___3B0LY comp_butone">
                            <a class="app___1zJo4 withCaption___3ckVx largeSize___hGQVD app___QTifv color-green"
                               href="/login" target="_blank" style="margin-top: -5%"><span
                                    class="caption___2ePII appCaption___1DnrE">Empezar</span></a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="pageSection___DO-C- homepageSection___KmXBl isRevealed___39VSj"
                 style="padding-top: 0rem; padding-bottom: 0rem;">
                <a href="index.html#how"><span class="down topv"><i class="fas fa-chevron-down"></i></span></a>
            </div>

            <div class="pageSection___DO-C- homepageSection___KmXBl isRevealed___39VSj" id="how">
                <div class="pageSectionTitle___1zjWB homepageSectionTitle___33DaP">Como funciona</div>
                <div class="pageSectionDescription___3DKfK homepageSectionDescription___2na7Y"><span></span></div>
                <div class="pageSectionContent___1gILz homepageSectionContent___1TrY8">
                    <div class="stepCards___2wKyV">
                        <div class="stepCard___1Ammb isRevealed___2W0tm blueTheme___2iVhb">
                            <div class="stepCardPicture___3-yRp"><img alt="Create" class="stepCardImage___2OycP"
                                                                      src="assets/img/static/1registrate.jpg"
                                                                      width="256" height="192"/></div>
                            <div class="textContainer___2nel8">
                                <div class="stepCardTitle___34mGW">Registrate</div>
                                <div class="stepCardDescription___2noBr">Solo en dos clicks ya puedes empezar a publicar
                                    anuncios
                                </div>
                            </div>
                        </div>
                        <div class="stepCard___1Ammb isRevealed___2W0tm pinkTheme___3FXUc">
                            <div class="stepCardPicture___3-yRp"><img alt="Post" class="stepCardImage___2OycP"
                                                                      src="assets/img/static/2anunciate.jpg" width="256"
                                                                      height="192"/></div>
                            <div class="textContainer___2nel8">
                                <div class="stepCardTitle___34mGW">Publica tu anuncio</div>
                                <div class="stepCardDescription___2noBr">Introduce texto y fotos de anuncio para
                                    empezar
                                </div>
                            </div>
                        </div>
                        <div class="stepCard___1Ammb isRevealed___2W0tm greenTheme___20awG">
                            <div class="stepCardPicture___3-yRp"><img alt="Get paid" class="stepCardImage___2OycP"
                                                                      src="assets/img/static/3recibedinero.jpg"
                                                                      width="256" height="192"/></div>
                            <div class="textContainer___2nel8">
                                <div class="stepCardTitle___34mGW">Empieza a recibir llamadas</div>
                                <div class="stepCardDescription___2noBr">Ahora es el tiempo de empezar a recibir
                                    llamadas y ganar dinero
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="pageSection___DO-C- homepageSection___KmXBl isRevealed___39VSj" style="margin-top: -80px">
                <div class="pageSectionTitle___1zjWB homepageSectionTitle___33DaP"><span>Anunciate en más de 19 portales Inmobiliarios<nobr></nobr></span>
                </div>

                <div class="creatives___2ilWT">


                    <link rel="stylesheet" href="style.css">
                    <!-- modernizr js -->


                    <!-- Interface Section Start -->
                    <div class="interface-area section-padding fix" id="screenshots">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 text-center wow fadeInUpSmall" data-wow-delay=".6s"
                                     data-wow-duration="1s">
                                    <div id="interface-slider" class="interface-slider mlr-minus-120 fix">
                                        <div class="slide-item">
                                            <div class="overlay light-1">
                                                <a class="venobox" data-gall="myGallery"
                                                   href="assets/img/interface/1.jpg"><img
                                                        src="assets/img/interface/1.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1">
                                                <a class="venobox" data-gall="myGallery"
                                                   href="assets/img/interface/2.jpg"><img
                                                        src="assets/img/interface/2.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1">
                                                <a class="venobox" data-gall="myGallery"
                                                   href="assets/img/interface/3.jpg"><img
                                                        src="assets/img/interface/3.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1">
                                                <a class="venobox" data-gall="myGallery"
                                                   href="assets/img/interface/4.jpg"><img
                                                        src="assets/img/interface/4.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/5.jpg"><img
                                                        src="assets/img/interface/5.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/6.jpg"><img
                                                        src="assets/img/interface/6.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/7.jpg"><img
                                                        src="assets/img/interface/7.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/8.jpg"><img
                                                        src="assets/img/interface/8.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/9.jpg"><img
                                                        src="assets/img/interface/9.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/10.jpg"><img
                                                        src="assets/img/interface/10.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/11.jpg"><img
                                                        src="assets/img/interface/11.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/12.jpg"><img
                                                        src="assets/img/interface/12.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/13.jpg"><img
                                                        src="assets/img/interface/13.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/14.jpg"><img
                                                        src="assets/img/interface/14.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/15.jpg"><img
                                                        src="assets/img/interface/15.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/16.jpg"><img
                                                        src="assets/img/interface/16.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/17.jpg"><img
                                                        src="assets/img/interface/17.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="overlay light-1"><a class="venobox" data-gall="myGallery"
                                                                            href="assets/img/interface/18.jpg"><img
                                                        src="assets/img/interface/18.jpg" alt="Interface Image"/></a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="pageSection___DO-C- homepageSection___KmXBl profileValue___1G5kZ isRevealed___39VSj">
                    <div class="profileValueOuter___Ras8r">
                        <div class="morphBlur2___uGsu8">
                            <svg version="1.1" width="0" height="500" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.1" fill="#000000">
                                    <path id="morph-blur-2-2-start" fill="#AAAAAA"
                                          d="M550,384.470692 C611.332031,306.470692 659.801466,256.17263 581.332031,181.470692 C502.862597,106.768755 527.921875,-43.5293076 414,12.0729025 C300.078125,67.6751126 197.392199,67.461391 168.352104,66.2054993 C136.237115,64.8166281 99.9900268,67.0659732 69.5757715,85.3183487 C-19.1419196,138.560113 -10.5873713,202.034271 26.7719046,247.918389 C51.6459088,278.468279 52.4384383,288.663869 96.1601563,302.470692 C135.5,314.893769 136.950486,346.979871 157.518576,371.642015 C210.113281,434.705633 202.900971,451.306064 268.179687,443.005849 C333.458404,434.705633 273.909293,428.396474 385,428.396474 C496.090707,428.396474 488.667969,462.470692 550,384.470692 Z">
                                    </path>
                                    <path id="morph-blur-2-1-start" fill="#444444"
                                          d="M550,384.470692 C611.332031,306.470692 659.801466,256.17263 581.332031,181.470692 C502.862597,106.768755 527.921875,-43.5293076 414,12.0729025 C300.078125,67.6751126 197.392199,67.461391 168.352104,66.2054993 C136.237115,64.8166281 99.9900268,67.0659732 69.5757715,85.3183487 C-19.1419196,138.560113 -10.5873713,202.034271 26.7719046,247.918389 C51.6459088,278.468279 52.4384383,288.663869 96.1601563,302.470692 C135.5,314.893769 136.950486,346.979871 157.518576,371.642015 C210.113281,434.705633 202.900971,451.306064 268.179687,443.005849 C333.458404,434.705633 273.909293,428.396474 385,428.396474 C496.090707,428.396474 488.667969,462.470692 550,384.470692 Z">
                                    </path>
                                    <path id="morph-blur-2-2-end" style="visibility:hidden"
                                          d="M610.162797,333.840821 C611.268483,332.441758 663.891492,233.117733 664.991849,231.682235 C729.23744,147.869083 692.757976,132.914174 610.162797,54.6822355 C554.156253,1.63433888 470.163816,-12.8167542 358.185485,11.3289563 C260.281291,42.137328 200.965698,57.0955922 180.238707,56.203749 C145.856219,54.7243357 107.049883,57.1203182 74.488211,76.5625875 C-20.4934464,133.275245 -11.334899,200.887358 28.6621511,249.762716 C55.2923994,282.304189 56.140886,293.164441 102.949602,307.871348 C145.067059,321.104299 146.619958,355.282132 168.640271,381.55203 C224.948457,448.72684 217.226917,466.409472 287.114677,457.568156 C357.002436,448.72684 324.296386,440.682235 443.23072,440.682235 C562.165055,440.682235 544.500381,416.925733 610.162797,333.840821 Z">
                                    </path>
                                    <path id="morph-blur-2-1-end" style="visibility:hidden"
                                          d="M610.162797,333.840821 C611.268483,332.441758 663.891492,233.117733 664.991849,231.682235 C729.23744,147.869083 692.757976,132.914174 610.162797,54.6822355 C554.156253,1.63433888 470.163816,-12.8167542 358.185485,11.3289563 C260.281291,42.137328 200.965698,57.0955922 180.238707,56.203749 C145.856219,54.7243357 107.049883,57.1203182 74.488211,76.5625875 C-20.4934464,133.275245 -11.334899,200.887358 28.6621511,249.762716 C55.2923994,282.304189 56.140886,293.164441 102.949602,307.871348 C145.067059,321.104299 146.619958,355.282132 168.640271,381.55203 C224.948457,448.72684 217.226917,466.409472 287.114677,457.568156 C357.002436,448.72684 324.296386,440.682235 443.23072,440.682235 C562.165055,440.682235 544.500381,416.925733 610.162797,333.840821 Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="profileValueInner___10F0U">
                            <div class="morphBlur1___z2VF-">
                                <svg version="1.1" width="0" height="350" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.1" transform="translate(20, 20)">
                                        <path id="morph-blur-1-start" fill="#AAAAAA"
                                              d="M275.120 0.973 C 242.264 6.142,228.718 12.054,221.530 24.362 C 213.544 38.036,202.885 42.965,168.584 48.845 C 152.926 51.529,145.782 51.794,128.679 50.326 C 73.320 45.572,45.410 53.451,18.459 81.440 C -7.799 108.710,-6.839 135.844,21.674 172.374 C 36.332 191.152,39.983 193.893,59.069 200.448 C 76.112 206.301,82.103 211.928,93.105 232.424 C 97.193 240.039,107.178 255.221,121.523 275.633 C 138.102 299.223,138.402 299.242,238.844 283.107 L 267.416 278.517 273.943 282.401 C 317.674 308.416,341.829 300.638,356.705 255.750 C 363.029 236.669,369.561 223.095,380.907 205.457 C 407.077 164.773,406.955 156.122,379.806 127.827 C 362.761 110.061,357.507 99.326,347.098 60.995 C 335.656 18.861,327.830 7.186,307.223 1.510 C 301.915 0.047,283.014 -0.268,275.120 0.973 "
                                              stroke="none" fill-rule="evenodd"></path>
                                        <path id="morph-blur-1-end" style="visibility:hidden"
                                              d="M242.313682,25.3558588 C233.937729,39.7070009 222.758254,50.1276891 186.782351,56.2988692 C170.359777,59.115782 162.866939,47.8491803 144.928806,46.3084843 C86.8666492,41.3190643 48.1543493,50.6377561 19.8873432,80.0127829 C-7.65282404,108.633205 -6.64594764,160.200341 23.2593303,198.539321 C38.6330743,218.247216 42.4623511,221.123951 62.4803126,228.003557 C80.3555152,234.1464 90.8343716,240.052052 102.373595,261.563022 C106.66121,269.55512 117.133773,285.488939 132.179234,306.91175 C149.567779,331.669936 215.427595,348.693179 240.578362,339.447711 C265.729128,330.202244 268.468996,329.748976 276.54648,324.315465 C284.623964,318.881954 286.276947,313.29612 297.285987,311.915863 C308.295026,310.535607 368.486832,343.650212 384.089221,296.53934 C390.722019,276.51344 411.207759,246.524444 423.107779,228.013003 C450.555649,185.314315 436.792907,160.492107 408.318233,130.795927 C390.440933,112.150148 404.858144,116.626352 393.940877,76.3971851 C381.940169,32.176692 353.804267,7.32929618 332.191035,1.37221831 C326.623848,-0.16323006 306.79992,-0.49382899 298.520459,0.808625844 C264.060114,6.23359686 249.852669,12.4383616 242.313682,25.3558588 Z"
                                              fill="#000000"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="profileValueInnerBackground___39eHd">
                                <div class="money0___31z5W noAnimation___PNHoD" id="profile-value-0">€</div>
                                <div class="money1___3OjK- noAnimation___PNHoD" id="profile-value-1">€</div>
                                <div class="money2___25XQN noAnimation___PNHoD" id="profile-value-2">€</div>
                            </div>
                            <div class="content___12Wiz">
                                <div class="title___1ixq6">Recibe llamadas desde más de 19 portales Inmobiliaros&nbsp;</div>
                                <div class="descritpion___2VWX8">Consigue llamadas desde fuera de España
                                </div>
                                <div class="appsLinks___367vX apps___2KJCL"></div>
                                <div class="userJoinForm___3m_NW">
                                    <form>
                                        <div class="userJoinForm___t74M3">
                                            <!-- <div class="userJoinFormRow___3wVju">
                                              <div class="flexLayout___3VX-b textField___2dLOc columnDirection___1xaxo">
                                                <div class="react-tel-input"><input type="tel" class=" form-control" style="height:60px;padding-left:70px;border:none;border-radius:9999px;box-shadow:0 40px 50px 0 rgba(0,0,0,.1)" value="" placeholder="Phone number" />
                                                  <div class=" flag-dropdown" style="display:flex;justify-content:center;width:60px;border:none;border-top-left-radius:9999px;border-bottom-left-radius:9999px;background-color:transparent">
                                                    <div class="selected-flag" title="">
                                                      <div class="flag undefined">
                                                        <div class="arrow"></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div> 
                                            </div> -->
                                            <div class="userJoinFormControls___Ogr_w">
                                                <a href="/login"
                                                    class="button___EtYyg button___EtYyg_green button___317aI userJoinFormButton___2jE01 isDisabled___HshDT disabledButton___2y2Ve w-150">
                                                    <span
                                                        class="label___3lOm1 disabledButtonLabel___1eh6s">Empezar</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="userJoinFormStatus___1oj78"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pageSection___DO-C- homepageSection___KmXBl pageSectionContent___3aO8w isRevealed___39VSj">
                    <div class="pageSectionTitle___1zjWB homepageSectionTitle___33DaP mtop">Opiñiones&nbsp;</div>
                    <div>
                        <div class="feedbacks___1kXm0">
                            <div class="scrollControl___2Hzf2 scrollControl___35u47 isHidden___1Aoi_">
                                <div class="control___1t8vi">
                                    <svg viewBox="0 0 48 48" width="48" height="48" xmlns="http://www.w3.org/2000/svg"
                                         class="leftDirection___3vgAI icon___3A-Vw">
                                        <path
                                            d="M 21.504 36.011 L 4.046 17.936 C 2.698 16.587 2.698 14.397 4.046 13.046 C 5.394 11.699 7.586 11.699 8.931 13.046 L 23.943 28.728 L 39.13 13.295 C 40.484 11.944 42.671 11.944 44.026 13.295 C 45.371 14.643 45.371 16.832 44.026 18.181 L 26.393 36.011 C 25.037 37.362 22.852 37.362 21.504 36.011 Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="items___2pjmF multiple-items">
                                <div class="feedbackItem___16Brt">
                                    <div class="content___xYxk_">
                                        <div class="testimonyTitle___1wov7">Maria</div>
										<div class="rating">
											<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</div>
                                        <div class="testimony___3334K">Me liaba con lo de poner la publicidad en las
                                            webs que uso, perd&#237;a mucho tiempo y a veces se me olvida renovar o
                                            renovaba sin querer. Desde que me registre lo tengo todo controlado con solo
                                            mirarlo dos minutos por la ma&#241;ana.
                                        </div>

                                    </div>
                                </div>
                                <div class="feedbackItem___16Brt">
                                    <div class="content___xYxk_">
                                        <div class="testimonyTitle___1wov7">Alberto</div>
										<div class="rating">
											<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</div>
                                        <div class="testimony___3334K">Me gusta. En muy poco rato puedo poner mis
                                            anuncios en las webs que me interesan. Aparte publican anuncios en los
                                            portales que están fuera de España, y de verdad empezarón a llamar mucha mas gente.
                                        </div>

                                    </div>
                                </div>
                                <div class="feedbackItem___16Brt">
                                    <div class="content___xYxk_">
                                        <div class="testimonyTitle___1wov7">Ivan</div>
										<div class="rating">
											<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</div>
                                        <div class="testimony___3334K">Es un servicio r&#225;pido y seguro. Puedes pagar
                                            con tarjeta sin problemas y con seguridad, pero llevo 2 meses renovando cada
                                            semana con diferentes tarifas y siempre han aparecido los anuncios en las
                                            webs que me interesan sin preocuparme de renovar.
                                        </div>

                                    </div>
                                </div>
                                <div class="feedbackItem___16Brt">
                                    <div class="content___xYxk_">
                                        <div class="testimonyTitle___1wov7">Clara</div>
										<div class="rating">
											<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</div>
                                        <div class="testimony___3334K">Es genial, me ponen la publicidad en las webs de
                                            siempre y otras que no conoc&#237;a. En resultado se me aumentaron las
                                            llamadas en doble, gastando menos dinero y tiempo que gastaba antes.
                                        </div>

                                    </div>
                                </div>
                                <div class="feedbackItem___16Brt">
                                    <div class="content___xYxk_">
                                        <div class="testimonyTitle___1wov7">David</div>
										<div class="rating">
											<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
										</div>
                                        <div class="testimony___3334K">De verdad me ahorra mucho tiempo, antes era un
                                            infierno con estos anuncios. Entre que los publiques hastas verficicacion
                                            por email etc... Ahora pongo texto y titulo una vez y lo hace todo solo!
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div
                                class="scrollControl___2Hzf2 scrollControl___35u47 rightDirection___3pI4P isHidden___1Aoi_">
                                <div class="control___1t8vi rightDirection___3pI4P">
                                    <svg viewBox="0 0 48 48" width="48" height="48" xmlns="http://www.w3.org/2000/svg"
                                         class="rightDirection___1EXoT icon___3A-Vw">
                                        <path
                                            d="M 21.504 36.011 L 4.046 17.936 C 2.698 16.587 2.698 14.397 4.046 13.046 C 5.394 11.699 7.586 11.699 8.931 13.046 L 23.943 28.728 L 39.13 13.295 C 40.484 11.944 42.671 11.944 44.026 13.295 C 45.371 14.643 45.371 16.832 44.026 18.181 L 26.393 36.011 C 25.037 37.362 22.852 37.362 21.504 36.011 Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pageSection___DO-C- homepageSection___KmXBl isRevealed___39VSj" style="margin-top: -130px">
                    <div class="pageSectionTitle___1zjWB homepageSectionTitle___33DaP padd">Trabajamos con los
                        siguientes portales:
                    </div>
                    <div class="pageSectionDescription___3DKfK homepageSectionDescription___2na7Y"><span></span></div>
                    <div>
                        <!-- <div class="toggleSwitch___3FVof w-25"><input type="radio" id="toggle-on" class="toggle___3LhGr toggleLeft___1uB5-" name="toggle" value="Brands" checked="" /><label for="toggle-on" class="btn___1P2Fv"><span
                               class="labelText___3b4d2">Бренды</span></label>

                             </div>-->
                    </div>
                    <div class="pageSection___DO-C- homepageSection___KmXBl isRevealed___39VSj">
                        <div class="partnerBrandsAnimatedLogosWrapper___Q4BEA">
                            <div style="margin-right:-0px;width:calc(100% + 0px)"
                                 class="partnerBrandsAnimatedLogos___2xt9o hasLeftShadow___Xjt5W hasRightShadow___9TpNe partnerBrandsAnimatedLogosInversed___2i-is brands">
                                <!-- <div class="partnerFirstElement___1MbBl">
                                  <div class="partnerBrandLogo___2uzue"><img alt="Ideal Flatmate" class="partnerBrandLogoImage___1wVyD" src="assets/img/static/IdealFlatmate.png" /></div>
                                </div> -->
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/1.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/2.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/3.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/4.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/5.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/6.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/7.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/8.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/9.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/10.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/11.png"/></div>

                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/1.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/2.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/3.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/4.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/5.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/6.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/7.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/8.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/9.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/10.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/11.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/12.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/13.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/14.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/15.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/16.png"/></div>

                            </div>
                        </div>
                        <div class="partnerBrandsAnimatedLogosWrapper___Q4BEA">
                            <div style="margin-right:-0px;width:calc(100% + 0px)"
                                 class="partnerBrandsAnimatedLogos___2xt9o hasLeftShadow___Xjt5W hasRightShadow___9TpNe partnerBrandsAnimatedLogosInversed___2i-is brands">
                                <!-- <div class="partnerFirstElement___1MbBl">
                                  <div class="partnerBrandLogo___2uzue"><img alt="Bolt" class="partnerBrandLogoImage___1wVyD" src="assets/img/static/Bolt.png" /></div>
                                </div> -->
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/17.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/18.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/19.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/20.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/1.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/2.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/3.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/4.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/5.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                           src="assets/img/partners/6.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="assets/img/partners/7.png"/></div>

                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/8.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/9.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/10.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/11.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/12.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/13.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/14.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/15.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/16.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/17.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/18.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/19.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/20.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/1.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/2.png"/></div>
                                <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD" src="/assets/img/partners/3.png"/></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pageSection___DO-C- homepageSection___KmXBl isRevealed___39VSj foottop" id="question"
                     style="margin-top: -130px">
                    <div class="pageSectionTitle___1zjWB homepageSectionTitle___33DaP padd">Preguntas frecuentes:</div>
                    <div class="pageSectionContent___1gILz homepageSectionContent___1TrY8">
                        <div class="qnaList___3TFak accordion">
                            <div class="accordionItem___AaUC1 qnaItem___2DxVX qnaItem___2DxVX accordion-item">
                                <div class="accordionItemTitle___1RtuH heading">
                                    <div class="qnaItemTitle___jULUy sExpanded___1ljpC">
                                        <svg viewBox="0 0 48 48" width="48" height="48" fill="#1da1f2"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleIcon___1ZY6a">
                                            <path
                                                d="M 24 44 C 12.954 44 4 35.046 4 24 C 4 12.954 12.954 4 24 4 C 35.046 4 44 12.954 44 24 C 44 35.046 35.046 44 24 44 Z M 24 40 C 32.836 40 40 32.836 40 24 C 40 15.164 32.836 8 24 8 C 15.164 8 8 15.164 8 24 C 8 32.836 15.164 40 24 40 Z M 24 16 C 21.79 16 20 17.79 20 20 C 20 21.104 19.104 22 18 22 C 16.896 22 16 21.104 16 20 C 16 15.582 19.582 12 24 12 C 28.464 12 32.012 15.21 32.012 19.596 C 32.012 21.992 31.17 23.46 29.374 25.006 C 29.19 25.166 27.112 26.854 27.034 26.916 C 26.2 27.582 26.026 27.882 26.026 28.878 C 26.026 29.982 25.13 30.878 24.026 30.878 C 22.922 30.878 22.026 29.982 22.026 28.878 C 22.026 26.538 22.824 25.16 24.536 23.792 C 24.468 23.844 26.616 22.104 26.766 21.974 C 27.754 21.124 28.012 20.674 28.012 19.596 C 28.012 17.514 26.338 16 24 16 Z M 24 36 C 22.896 36 22 35.104 22 34 C 22 32.896 22.896 32 24 32 C 25.104 32 26 32.896 26 34 C 26 35.104 25.104 36 24 36 Z">
                                            </path>
                                        </svg>
                                        <div class="qnaItemTitleText___34HLI">¿De verdad es tan facil?</div>
                                        <svg viewBox="0 0 48 48" width="48" height="48"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleChevron___334MI">
                                            <path
                                                d="M 21.504 36.011 L 4.046 17.936 C 2.698 16.587 2.698 14.397 4.046 13.046 C 5.394 11.699 7.586 11.699 8.931 13.046 L 23.943 28.728 L 39.13 13.295 C 40.484 11.944 42.671 11.944 44.026 13.295 C 45.371 14.643 45.371 16.832 44.026 18.181 L 26.393 36.011 C 25.037 37.362 22.852 37.362 21.504 36.011 Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="accordionItemContent___3HfAh qnaItemContent___3CXuh content">
                                    <div>
                                        <div class="qnaItemContentInner___zPQ_D">
                                            <p class="p___3d3SC">Si, solamente debe registrarse y introducir los datos
                                                que son necesarios para crear el anuncio. Tambien añadir los fotos, y
                                                nosotros lo haremos todo por tí.&nbsp;&nbsp;Aceptamos visa, mastercard,
                                                tarjetas de prepago.</p>
                                            <p class="p___3d3SC"></p>
                                            <p class="p___3d3SC"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordionItem___AaUC1 qnaItem___2DxVX qnaItem___2DxVX accordion-item">
                                <div class="accordionItemTitle___1RtuH heading">
                                    <div class="qnaItemTitle___jULUy sExpanded___1ljpC">
                                        <svg viewBox="0 0 48 48" width="48" height="48" fill="#1da1f2"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleIcon___1ZY6a">
                                            <path
                                                d="M 24 44 C 12.954 44 4 35.046 4 24 C 4 12.954 12.954 4 24 4 C 35.046 4 44 12.954 44 24 C 44 35.046 35.046 44 24 44 Z M 24 40 C 32.836 40 40 32.836 40 24 C 40 15.164 32.836 8 24 8 C 15.164 8 8 15.164 8 24 C 8 32.836 15.164 40 24 40 Z M 24 16 C 21.79 16 20 17.79 20 20 C 20 21.104 19.104 22 18 22 C 16.896 22 16 21.104 16 20 C 16 15.582 19.582 12 24 12 C 28.464 12 32.012 15.21 32.012 19.596 C 32.012 21.992 31.17 23.46 29.374 25.006 C 29.19 25.166 27.112 26.854 27.034 26.916 C 26.2 27.582 26.026 27.882 26.026 28.878 C 26.026 29.982 25.13 30.878 24.026 30.878 C 22.922 30.878 22.026 29.982 22.026 28.878 C 22.026 26.538 22.824 25.16 24.536 23.792 C 24.468 23.844 26.616 22.104 26.766 21.974 C 27.754 21.124 28.012 20.674 28.012 19.596 C 28.012 17.514 26.338 16 24 16 Z M 24 36 C 22.896 36 22 35.104 22 34 C 22 32.896 22.896 32 24 32 C 25.104 32 26 32.896 26 34 C 26 35.104 25.104 36 24 36 Z">
                                            </path>
                                        </svg>
                                        <div class="qnaItemTitleText___34HLI">¿Cuantas llamadas voy a tener?</div>
                                        <svg viewBox="0 0 48 48" width="48" height="48"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleChevron___334MI">
                                            <path
                                                d="M 21.504 36.011 L 4.046 17.936 C 2.698 16.587 2.698 14.397 4.046 13.046 C 5.394 11.699 7.586 11.699 8.931 13.046 L 23.943 28.728 L 39.13 13.295 C 40.484 11.944 42.671 11.944 44.026 13.295 C 45.371 14.643 45.371 16.832 44.026 18.181 L 26.393 36.011 C 25.037 37.362 22.852 37.362 21.504 36.011 Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="accordionItemContent___3HfAh qnaItemContent___3CXuh content">
                                    <div>
                                        <div class="qnaItemContentInner___zPQ_D">
                                            <p class="p___3d3SC">Dependiendo del plan que elige y en cuantos portales va
                                                a querer anunciarse.</p>
                                            <p class="p___3d3SC"></p>
                                            <p class="p___3d3SC"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordionItem___AaUC1 qnaItem___2DxVX qnaItem___2DxVX accordion-item">
                                <div class="accordionItemTitle___1RtuH heading">
                                    <div class="qnaItemTitle___jULUy sExpanded___1ljpC">
                                        <svg viewBox="0 0 48 48" width="48" height="48" fill="#1da1f2"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleIcon___1ZY6a">
                                            <path
                                                d="M 24 44 C 12.954 44 4 35.046 4 24 C 4 12.954 12.954 4 24 4 C 35.046 4 44 12.954 44 24 C 44 35.046 35.046 44 24 44 Z M 24 40 C 32.836 40 40 32.836 40 24 C 40 15.164 32.836 8 24 8 C 15.164 8 8 15.164 8 24 C 8 32.836 15.164 40 24 40 Z M 24 16 C 21.79 16 20 17.79 20 20 C 20 21.104 19.104 22 18 22 C 16.896 22 16 21.104 16 20 C 16 15.582 19.582 12 24 12 C 28.464 12 32.012 15.21 32.012 19.596 C 32.012 21.992 31.17 23.46 29.374 25.006 C 29.19 25.166 27.112 26.854 27.034 26.916 C 26.2 27.582 26.026 27.882 26.026 28.878 C 26.026 29.982 25.13 30.878 24.026 30.878 C 22.922 30.878 22.026 29.982 22.026 28.878 C 22.026 26.538 22.824 25.16 24.536 23.792 C 24.468 23.844 26.616 22.104 26.766 21.974 C 27.754 21.124 28.012 20.674 28.012 19.596 C 28.012 17.514 26.338 16 24 16 Z M 24 36 C 22.896 36 22 35.104 22 34 C 22 32.896 22.896 32 24 32 C 25.104 32 26 32.896 26 34 C 26 35.104 25.104 36 24 36 Z">
                                            </path>
                                        </svg>
                                        <div class="qnaItemTitleText___34HLI">¿Como eliminar anuncio?</div>
                                        <svg viewBox="0 0 48 48" width="48" height="48"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleChevron___334MI">
                                            <path
                                                d="M 21.504 36.011 L 4.046 17.936 C 2.698 16.587 2.698 14.397 4.046 13.046 C 5.394 11.699 7.586 11.699 8.931 13.046 L 23.943 28.728 L 39.13 13.295 C 40.484 11.944 42.671 11.944 44.026 13.295 C 45.371 14.643 45.371 16.832 44.026 18.181 L 26.393 36.011 C 25.037 37.362 22.852 37.362 21.504 36.011 Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="accordionItemContent___3HfAh qnaItemContent___3CXuh content">
                                    <div>
                                        <div class="qnaItemContentInner___zPQ_D">
                                            <p class="p___3d3SC">Puedes elegir anuncio que quieres eliminar y nosotros lo haremos todo por tí.</p>
                                            <p class="p___3d3SC"></p>
                                            <p class="p___3d3SC"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordionItem___AaUC1 qnaItem___2DxVX qnaItem___2DxVX accordion-item">
                                <div class="accordionItemTitle___1RtuH heading">
                                    <div class="qnaItemTitle___jULUy sExpanded___1ljpC">
                                        <svg viewBox="0 0 48 48" width="48" height="48" fill="#1da1f2"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleIcon___1ZY6a">
                                            <path
                                                d="M 24 44 C 12.954 44 4 35.046 4 24 C 4 12.954 12.954 4 24 4 C 35.046 4 44 12.954 44 24 C 44 35.046 35.046 44 24 44 Z M 24 40 C 32.836 40 40 32.836 40 24 C 40 15.164 32.836 8 24 8 C 15.164 8 8 15.164 8 24 C 8 32.836 15.164 40 24 40 Z M 24 16 C 21.79 16 20 17.79 20 20 C 20 21.104 19.104 22 18 22 C 16.896 22 16 21.104 16 20 C 16 15.582 19.582 12 24 12 C 28.464 12 32.012 15.21 32.012 19.596 C 32.012 21.992 31.17 23.46 29.374 25.006 C 29.19 25.166 27.112 26.854 27.034 26.916 C 26.2 27.582 26.026 27.882 26.026 28.878 C 26.026 29.982 25.13 30.878 24.026 30.878 C 22.922 30.878 22.026 29.982 22.026 28.878 C 22.026 26.538 22.824 25.16 24.536 23.792 C 24.468 23.844 26.616 22.104 26.766 21.974 C 27.754 21.124 28.012 20.674 28.012 19.596 C 28.012 17.514 26.338 16 24 16 Z M 24 36 C 22.896 36 22 35.104 22 34 C 22 32.896 22.896 32 24 32 C 25.104 32 26 32.896 26 34 C 26 35.104 25.104 36 24 36 Z">
                                            </path>
                                        </svg>
                                        <div class="qnaItemTitleText___34HLI">¿En que portales estarán mis anuncios?
                                        </div>
                                        <svg viewBox="0 0 48 48" width="48" height="48"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleChevron___334MI">
                                            <path
                                                d="M 21.504 36.011 L 4.046 17.936 C 2.698 16.587 2.698 14.397 4.046 13.046 C 5.394 11.699 7.586 11.699 8.931 13.046 L 23.943 28.728 L 39.13 13.295 C 40.484 11.944 42.671 11.944 44.026 13.295 C 45.371 14.643 45.371 16.832 44.026 18.181 L 26.393 36.011 C 25.037 37.362 22.852 37.362 21.504 36.011 Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="accordionItemContent___3HfAh qnaItemContent___3CXuh content">
                                    <div>
                                        <div class="qnaItemContentInner___zPQ_D">
                                            <p class="p___3d3SC">idealista.com, fotocasa.es, habitaclia.com, pisos.com, yaencontre.com, pisos.mitula.com, tucasa.com, nestoria.es, casas.trovit.es, globaliza.com, nuroa.es, indomio.es, departiculares.com, milanuncios.com, es.wallapop.com, enalquiler.com, thinkspain.com, kasaz.com, inmobiliaria.com</p>
                                            <p class="p___3d3SC"></p>
                                            <p class="p___3d3SC"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordionItem___AaUC1 qnaItem___2DxVX qnaItem___2DxVX accordion-item">
                                <div class="accordionItemTitle___1RtuH heading">
                                    <div class="qnaItemTitle___jULUy sExpanded___1ljpC">
                                        <svg viewBox="0 0 48 48" width="48" height="48" fill="#1da1f2"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleIcon___1ZY6a">
                                            <path
                                                d="M 24 44 C 12.954 44 4 35.046 4 24 C 4 12.954 12.954 4 24 4 C 35.046 4 44 12.954 44 24 C 44 35.046 35.046 44 24 44 Z M 24 40 C 32.836 40 40 32.836 40 24 C 40 15.164 32.836 8 24 8 C 15.164 8 8 15.164 8 24 C 8 32.836 15.164 40 24 40 Z M 24 16 C 21.79 16 20 17.79 20 20 C 20 21.104 19.104 22 18 22 C 16.896 22 16 21.104 16 20 C 16 15.582 19.582 12 24 12 C 28.464 12 32.012 15.21 32.012 19.596 C 32.012 21.992 31.17 23.46 29.374 25.006 C 29.19 25.166 27.112 26.854 27.034 26.916 C 26.2 27.582 26.026 27.882 26.026 28.878 C 26.026 29.982 25.13 30.878 24.026 30.878 C 22.922 30.878 22.026 29.982 22.026 28.878 C 22.026 26.538 22.824 25.16 24.536 23.792 C 24.468 23.844 26.616 22.104 26.766 21.974 C 27.754 21.124 28.012 20.674 28.012 19.596 C 28.012 17.514 26.338 16 24 16 Z M 24 36 C 22.896 36 22 35.104 22 34 C 22 32.896 22.896 32 24 32 C 25.104 32 26 32.896 26 34 C 26 35.104 25.104 36 24 36 Z">
                                            </path>
                                        </svg>
                                        <div class="qnaItemTitleText___34HLI">¿Como funciona lo de la fuera de España?
                                        </div>
                                        <svg viewBox="0 0 48 48" width="48" height="48"
                                             xmlns="http://www.w3.org/2000/svg" class="qnaItemTitleChevron___334MI">
                                            <path
                                                d="M 21.504 36.011 L 4.046 17.936 C 2.698 16.587 2.698 14.397 4.046 13.046 C 5.394 11.699 7.586 11.699 8.931 13.046 L 23.943 28.728 L 39.13 13.295 C 40.484 11.944 42.671 11.944 44.026 13.295 C 45.371 14.643 45.371 16.832 44.026 18.181 L 26.393 36.011 C 25.037 37.362 22.852 37.362 21.504 36.011 Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="accordionItemContent___3HfAh qnaItemContent___3CXuh content">
                                    <div>
                                        <div class="qnaItemContentInner___zPQ_D">
                                            <p class="p___3d3SC">Se publicarán los anuncios en los portales más visitados de
                                                cada pais que elijes. De esta forma aumentando llamadas de los clientes.</p>
                                            <p class="p___3d3SC"></p>
                                            <p class="p___3d3SC"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="almejaApp___1AHCL">
                    <div class="almejaAppInner___4jZ9Q">
                        <div class="appSection___1RTly footact">
                            <div class="title___1wps5">Empieza a recibir<br> llamadas de tus clientes</div>
                            <div class="content___3rcfj">
                                <div class="userJoinForm___2TGE2">
                                    <form>
                                        <div class="userJoinForm___t74M3">

                                            <div class="userJoinFormControls___Ogr_w"><a
                                                    class="app___1zJo4 withCaption___3ckVx largeSize___hGQVD app___QTifv color-green"
                                                    href="/login" target="_blank"><span
                                                        class="caption___2ePII appCaption___1DnrE">Empezar</span></a>
                                            </div>
                                        </div>
                                        <div class="userJoinFormStatus___1oj78"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer___1bjyg" style="margin-top:-7%">
                <div class="appFooter___vM7M-">
                    <div class="copyright___2sXcA">© 2020</div>
                    <div class="links___3wGRm">
                        <nav class="secondaryNavigation___3wOPq">
                            <div class="secondaryNavigationItem___2_l3t">
                                <a class="textLink___2xdIB control___3PH6t link___3RtNH hasUnderline___2g4G2"
                                   href="/download/policy.pdf" target="_blank">Términos de uso</a></div>
                            <div class="secondaryNavigationItem___2_l3t"><a
                                    class="textLink___2xdIB control___3PH6t link___3RtNH hasUnderline___2g4G2"
                                    href="/download/policy.pdf" target="_blank">Politica de privacidad</a></div>
                            <div class="secondaryNavigationItem___2_l3t"><a
                                    class="textLink___2xdIB control___3PH6t link___3RtNH hasUnderline___2g4G2"
                                    href="/download/policy.pdf" target="_blank">Política de Cookies</a></div>
                        </nav>
                        <div class="support___2wwhs">Tienes preguntas? Escribenos al info@ololo.es</div>
                    </div>
					<div class="paysystem-footer">
						<img src="/pay/gpay.svg" />
						<img src="/pay/apay.svg" />
						<img src="/pay/maestrocard.svg" />
						<img src="/pay/mastercard.svg" />
						<img src="/pay/paypal.svg" />
						<img src="/pay/visa.svg" />
						<img src="/pay/vpay.svg" />
						<img src="/pay/ipay.svg" />
					</div> 
                </div>
            </footer>
        </div>
    </div>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 5,
            spaceBetween: 60,
            centeredSlides: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 150,
                    centeredSlides: true,
                },
            }
        });
        $(".js-modal-btn").modalVideo();

        $('.multiple-items').slick({
            arrows: true,
            infinite: true,
            // speed: 15500,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            autoplay: false,
            // cssEase: 'linear',
            autoplaySpeed: 0,
            prevArrow: '<div class="scrollControl___2Hzf2 scrollControl___35u47 arrow-opacity-left"><div class="control___1t8vi"><svg viewBox="0 0 48 48" width="48" height="48" xmlns="http://www.w3.org/2000/svg" class="leftDirection___3vgAI icon___3A-Vw"><path d="M 21.504 36.011 L 4.046 17.936 C 2.698 16.587 2.698 14.397 4.046 13.046 C 5.394 11.699 7.586 11.699 8.931 13.046 L 23.943 28.728 L 39.13 13.295 C 40.484 11.944 42.671 11.944 44.026 13.295 C 45.371 14.643 45.371 16.832 44.026 18.181 L 26.393 36.011 C 25.037 37.362 22.852 37.362 21.504 36.011 Z"></path></svg></div></div>',
            nextArrow: '<div class="scrollControl___2Hzf2 scrollControl___35u47 rightDirection___3pI4P arrow-opacity-right"><div class="control___1t8vi rightDirection___3pI4P"><svg viewBox="0 0 48 48" width="48" height="48" xmlns="http://www.w3.org/2000/svg" class="rightDirection___1EXoT icon___3A-Vw"><path d="M 21.504 36.011 L 4.046 17.936 C 2.698 16.587 2.698 14.397 4.046 13.046 C 5.394 11.699 7.586 11.699 8.931 13.046 L 23.943 28.728 L 39.13 13.295 C 40.484 11.944 42.671 11.944 44.026 13.295 C 45.371 14.643 45.371 16.832 44.026 18.181 L 26.393 36.011 C 25.037 37.362 22.852 37.362 21.504 36.011 Z"></path></svg></div></div>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: "unslick"
                }

                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.brands').slick({
            arrows: false,
            infinite: true,
            speed: 15500,
            slidesToShow: 5,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            autoplay: true,
            cssEase: 'linear',
            autoplaySpeed: 0,

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        centerMode: true,
                    }
                }

// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
            ]
        });
    </script>


    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>


    <script src="assets/js/page1.js"></script>

	<script>
		$('.sampleContent___2HB7D').hover((el) => {
			el.target.src = '/assets/img/slide/vid_hover.jpg';
		}, (el) => {
			el.target.src = '/assets/img/slide/vid.jpg';
		});
	</script>
	<style>
		.sampleContent___2HB7D
		{
			cursor: pointer;
		}
	</style>
    @include('pages.blocks.add_user')
</body>

</html>
