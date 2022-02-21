<!DOCTYPE html>
<html>

<head>
    <meta name="theme-color" content="#000000"/>
    <link rel="stylesheet" href="{{asset('_clubs/assets/css/slick.css')}}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"
            integrity="sha256-4sETKhh3aSyi6NRiA+qunPaTawqSMDQca/xLWu27Hg4=" crossorigin="anonymous"></script>
    <script src="{{asset('_clubs/assets/js/slick.min.js')}}" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" class="next-head"/>
    <meta charSet="utf-8" class="next-head"/>

    <link rel="stylesheet" href="{{asset('_clubs/assets/css/commons.5406250a.chunk.css')}}"/>
    <link rel="stylesheet" href="{{asset('_clubs/assets/css/styles.d93d4a17.chunk.css')}}"/>
    <link rel="stylesheet" href="{{asset('_clubs/assets/css/page2.css')}}"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="/favicon-16x16.png"> 
	<title>Almejarosa.es - publicidad de escorts en diferentes portales de sexo en España</title>
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179635663-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-179635663-1');
	</script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(67951603, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true,
			ecommerce:"dataLayer"
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/67951603" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter 
	<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b16684324/crm/site_button/loader_1_tnupw5.js');
</script> -->
</head>

<body class="custom_class">
<div id="__next">
    <div class="app___3edIA">
        <div class="content___2zjKW spec-app-content">
            <div class="page___1HU2-">
                <header class="header___3sNLG spec-app-landing-header">
                    <div class="appHeader___2GdyR appHeader___1wATU">
                        <div class="appHeaderInner___3lkmP appHeaderInner___2JATn">
                            <div class="appHeaderSections___1AuJk">
                                <div class="mainRow___l31cR">
                                    <div class="logo___1BqBo">
									<a href="#" onclick="javascript:backToTop();">
                                        <img src="{{asset('_clubs/assets/img/logo.png')}}" width="50" height="50"/>
									</a>
                                        <span class="headerCaption___1mcEE">Almeja Rosa</span>
                                    </div>
									@guest
                                    <div class="appsLinks___367vX control-mobile">
                                        <a class="app___1zJo4 app___4YV-O w-120 color-green animated infinite bounce"
                                           href="/personal" target="_blank">Registrate</a>
                                    </div>
									@endguest
                                    <div class="navigation___RqU5O">
										@auth
										<div class="control___26dei link___24nhA custom">
											<div>Tu correo:</div><a href="/personal" class="nav-link">{{auth()->user()->email}}</a>
										</div>
										@endauth
                                        <nav class="externalNavigation___3Qyjf">
                                            <div class="navigation___29KkF isExternal___279Bc navigationInner___3gerk">
                                                <ul class="navigationItems___3kw85">
                                                    <li class="navigationItem___2fRbs">
                                                        <a href="{{route('landing')}}" class="control___26dei link___24nhA isHighlighted___2n3nd isExternal___279Bc isLanding___JPwTH">Independientes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
										@auth
										<li class="navigationItem___2fRbs spec-landing-navigation-sign-in">
                                            <a
												href="/personal" target="_blank"
                                                class="control___26dei link___24nhA navigationItemLink___2pqLx isLanding___JPwTH">
                                                Panel de Control
                                                <svg viewBox="0 0 48 48" fill="#000000" width="48" height="48"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     class="navigationItemIcon___1CPuc">
                                                    <path
                                                        d="M 7.655 34.54 L 7.655 37.298 C 8.366 37.733 14.053 40.655 23.924 40.655 C 33.796 40.655 39.482 37.736 40.193 37.301 L 40.193 34.539 C 40.193 31.05 32.451 28.335 31.899 28.126 C 30.167 31.236 27.608 33.542 23.924 33.542 C 20.243 33.542 17.684 31.238 15.953 28.132 C 15.405 28.338 7.655 31.043 7.655 34.54 Z M 12.74 14.585 C 12.74 8.769 17.747 4.054 23.924 4.054 C 30.101 4.054 35.109 8.769 35.109 14.585 C 35.109 17.054 34.678 20.84 33.51 24.382 C 37.584 25.938 44.261 28.459 44.261 34.54 L 44.261 38.621 C 44.261 40.867 35.485 44.727 23.924 44.727 C 12.363 44.727 3.588 40.863 3.588 38.621 L 3.588 34.54 C 3.588 28.439 10.269 25.94 14.339 24.389 C 13.17 20.845 12.74 17.055 12.74 14.586 Z M 23.924 29.475 C 27.93 29.475 31.042 22.118 31.042 14.585 C 31.042 11.073 27.908 8.122 23.924 8.122 C 19.941 8.122 16.806 11.073 16.806 14.585 C 16.806 22.118 19.917 29.475 23.924 29.475 Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
										<div class="apps___1HuOq ml-3">
                                            <div class="appsLinks___367vX mar">
                                                <a class="app___1zJo4 app___d1yks w-150" href="/logout" target="_blank">
                                                    Cerrar Sessión
                                                </a>
                                            </div>
                                        </div>
										@else
                                        <li class="navigationItem___2fRbs spec-landing-navigation-sign-in">
                                            <a
												href="/login"
                                                class="control___26dei link___24nhA navigationItemLink___2pqLx isLanding___JPwTH">
                                                Entrar
                                                <svg viewBox="0 0 48 48" fill="#000000" width="48" height="48"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     class="navigationItemIcon___1CPuc">
                                                    <path
                                                        d="M 7.655 34.54 L 7.655 37.298 C 8.366 37.733 14.053 40.655 23.924 40.655 C 33.796 40.655 39.482 37.736 40.193 37.301 L 40.193 34.539 C 40.193 31.05 32.451 28.335 31.899 28.126 C 30.167 31.236 27.608 33.542 23.924 33.542 C 20.243 33.542 17.684 31.238 15.953 28.132 C 15.405 28.338 7.655 31.043 7.655 34.54 Z M 12.74 14.585 C 12.74 8.769 17.747 4.054 23.924 4.054 C 30.101 4.054 35.109 8.769 35.109 14.585 C 35.109 17.054 34.678 20.84 33.51 24.382 C 37.584 25.938 44.261 28.459 44.261 34.54 L 44.261 38.621 C 44.261 40.867 35.485 44.727 23.924 44.727 C 12.363 44.727 3.588 40.863 3.588 38.621 L 3.588 34.54 C 3.588 28.439 10.269 25.94 14.339 24.389 C 13.17 20.845 12.74 17.055 12.74 14.586 Z M 23.924 29.475 C 27.93 29.475 31.042 22.118 31.042 14.585 C 31.042 11.073 27.908 8.122 23.924 8.122 C 19.941 8.122 16.806 11.073 16.806 14.585 C 16.806 22.118 19.917 29.475 23.924 29.475 Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <div class="apps___1HuOq">
                                            <div class="appsLinks___367vX mar">
                                                <a class="app___1zJo4 app___d1yks w-150" href="/login" target="_blank">
                                                    Registrarse
                                                </a>
                                            </div>
                                        </div>
										@endauth
                                    </div>
									<span class="sandwichMenu___WDedW navigationControl___BAeDT spec-landing-navigation-control"></span>
                                </div>
                            </div>
                            <div class="languageSwitcher___1pOWc">
                                <div class="languageSwitcher___1Aelp">
                                    <div></div>
                                    <div class="caption___jGR_0 languageSwitcherCaption___vHVRg">
                                        <div class="label___1_j7S">ES</div>
                                        <svg viewBox="0 0 48 48" width="48" height="48"
                                             xmlns="http://www.w3.org/2000/svg" class="icon___m3FUT">
                                            <path
                                                d="M 24 44 C 12.954 44 4 35.046 4 24 C 4 12.954 12.954 4 24 4 C 35.046 4 44 12.954 44 24 C 44 35.046 35.046 44 24 44 Z M 8.124 26 C 8.832 31.608 12.444 36.426 17.628 38.68 C 15.742 35.316 14.374 30.724 14.066 26 L 8.124 26 Z M 8.124 22 L 14.064 22 C 14.366 17.272 15.708 12.696 17.576 9.342 C 12.418 11.606 8.83 16.412 8.124 22 Z M 39.876 22 C 39.17 16.412 35.582 11.606 30.424 9.342 C 32.292 12.696 33.634 17.272 33.936 22 L 39.876 22 Z M 30.372 38.68 C 35.556 36.426 39.168 31.608 39.876 26 L 33.934 26 C 33.626 30.724 32.258 35.316 30.372 38.68 Z M 20.652 35.838 C 21.95 38.446 23.472 40 24 40 C 24.528 40 26.05 38.446 27.348 35.838 C 28.738 33.044 29.672 29.598 29.928 26 L 18.072 26 C 18.328 29.596 19.262 33.044 20.652 35.838 Z M 20.616 12.158 C 19.244 14.938 18.322 18.39 18.07 22 L 29.93 22 C 29.678 18.39 28.756 14.94 27.384 12.158 C 26.09 9.538 24.576 8 24 8 C 23.424 8 21.91 9.536 20.616 12.158 Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="dropdownListItems___fYtqM">
                                        <div class="items___3CjD4">
                                            <div class="item___z5aZx">
                                                <a href="{{route('clubs')}}">
                                                   Castellano
                                                </a>
                                            </div>
                                            <div class="item___z5aZx">
                                                <a href="{{route('clubs-en')}}">
                                                    English
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="backdrop___1d0al"></div>
                    </div>
                </header>

                <style>


                    @media (max-width: 766px) {
                        .step___GGcmi {
                            animation: moveSmall___2OU6j 10s linear infinite, upDown___3DJ2m 3s linear infinite
                        }
                    }

                    .step___GGcmi.heart___2sAQN {
                        background-image: url(../heart.svg)
                    }

                    .step___GGcmi.like___3En7h {
                        background-image: url(../like.svg)
                    }

                    .step2___2V2VW {
                        animation: move___35CvH 6s linear infinite, upDown___3DJ2m 3s ease-in-out infinite;
                        width: auto;
                        height: auto
                    }

                    .step2___2V2VW.money___2T20c {
                        color: var(--color-almeja-main-black);
                        opacity: .5;
                        font-size: 2rem
                    }

                    .money___2T20c.bigNumber___3UI_A {
                        z-index: 1;
                        opacity: 1;
                        font-size: 4rem
                    }

                    @media (min-width: 768px) {
                        .step2___2V2VW.money___2T20c {
                            font-size: 4rem
                        }

                        .money___2T20c.bigNumber___3UI_A {
                            font-size: 8rem
                        }
                    }

                    .step2___2V2VW.noAnimation___2joWZ, .step___GGcmi.noAnimation___2joWZ {
                        animation: none
                    }

                    .marks___2zLDi {
                        left: 0
                    }

                    .earned___E_Cbn, .marks___2zLDi {
                        position: absolute;
                        top: 0;
                        bottom: 0
                    }

                    .earned___E_Cbn {
                        right: 0;
                        overflow: hidden
                    }

                    @keyframes upDown___3DJ2m {
                        0% {
                            margin-top: 0
                        }

                        50% {
                            margin-top: 60px
                        }

                        to {
                            margin-top: 0
                        }
                    }

                    @media (min-width: 768px) {
                        @keyframes upDown___3DJ2m {
                            0% {
                                margin-top: 0
                            }

                            50% {
                                margin-top: 120px
                            }

                            to {
                                margin-top: 0
                            }
                        }
                    }

                    @keyframes move___35CvH {
                        0% {
                            transform: translateX(var(--icon-start))
                        }

                        to {
                            transform: translateX(70vw)
                        }
                    }

                    @keyframes moveSmall___2OU6j {
                        0% {
                            transform: translateX(var(--icon-start))
                        }

                        to {
                            transform: translateX(70vw)
                        }
                    }

                    .teaser___2YASU {
                        position: relative;
                        margin-bottom: 3rem;
                    }

                    /*@media (min-width: 768px) {
                        .teaser___2YASU {
                            margin-bottom: 7rem
                        }
                    }*/

                    .teaserInner___2AyZ3 {
                        position: relative;
                        z-index: 2;
                        display: flex;
                        flex-direction: column;
                        max-width: var(--size-max-page-width);
                        margin: 0 auto;
                        /*padding: 0 0 4rem*/
                    }

                    @media (min-width: 768px) {
                        .teaserInner___2AyZ3 {
                            flex-direction: row-reverse;
                            align-items: center
                        }
                    }

                    .content___3vwxh {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        padding: 2rem
                    }

                    @media (min-width: 768px) {
                        .content___3vwxh {
                            align-items: flex-start;
                            width: 50%;
                            height: 88rem;
                            margin-right: 20rem
                        }

                        .contentRU___2sw4e {
                            width: 65%;
                            margin: 0
                        }
                    }

                    .title___3ftGr {
                        margin: 2rem 0;
                        font-size: 3.5rem;
                        font-weight: 900;
                        text-align: center
                    }

                    @media (min-width: 768px) {
                        .title___3ftGr {
                            font-size: 6rem;
                            text-align: left
                        }
                    }

                    @media (min-width: 860px) {
                        .title___3ftGr {
                            font-size: 5rem
                        }
                    }

                    .description___X_eXQ {
                        max-width: 62rem;
                        margin: 1rem 0;
                        font-size: 2rem;
                        line-height: 3rem;
                        text-align: center
                    }

                    @media (min-width: 768px) {
                        .description___X_eXQ {
                            margin-top: 2rem;
                            margin-bottom: 2rem;
                            font-size: 2.25rem;
                            text-align: left
                        }
                    }

                    .apps___3B0LY {
                        display: flex;
                        flex-direction: column;
                        width: 30rem;
                        margin: 2rem auto
                    }

                    @media (min-width: 768px) {
                        .apps___3B0LY {
                            flex-direction: row;
                            width: 100%
                        }
                    }

                    .app___QTifv {
                        min-width: 24rem;
                        margin-top: 1rem;
                        margin-bottom: 1rem;
                        background-color: var(--color-almeja-main-black);
                        box-shadow: 0 40px 50px 0 rgba(255, 211, 178, .3);
                        color: var(--color-users-peach-orange)
                    }

                    @media (max-width: 767px) {
                        .app___QTifv {
                            margin-left: 2rem;
                            margin-right: 2rem
                        }
                    }

                    @media (min-width: 768px) {
                        .app___QTifv {
                            min-width: 25rem
                        }
                    }

                    .appCaption___1DnrE {
                        flex-grow: 1;
                        padding: 0 1rem 0 0;
                        text-align: center
                    }

                    .sample___32zIb {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        height: 56rem
                    }

                    @media (min-width: 768px) {
                        .sample___32zIb {
                            flex-grow: 1
                        }
                    }

                    .sampleCanvas___1rXmc {
                        position: relative;
                        width: 23rem;
                        height: 47.5rem;
                        padding: 1rem;
                        background: var(--color-users-peach-orange);
                        border-radius: 3rem;
                        box-shadow: 0 12px 48px -8px var(--color-users-peach-orange)
                    }

                    @media (min-width: 768px) {
                        .sampleCanvas___1rXmc {
                            top: 14rem;
                            width: 38rem;
                            height: 69rem;
                            margin-top: -24%;
                        }
                    }

                    .sampleContent___2HB7D {
                        width: 100%;
                        height: 100%;
                        border-radius: 2.5rem
                    }

                    :root {
                        --color-users-grass-green: #c1f5a9;
                        --color-users-peach-orange: #ffd3b2;
                        --color-users-sky-blue: #b5dcff
                    }

                    .links___3KfVN {
                        margin: 4rem;
                        padding: 1rem;
                        font-size: 2rem;
                        line-height: 3rem;
                        text-align: center
                    }

                    @media (min-width: 768px) {
                        .links___3KfVN {
                            margin-top: 6rem;
                            margin-bottom: 6rem;
                            font-size: 2.25rem
                        }
                    }

                    .links___3KfVN a {
                        color: var(--color-almeja-violet);
                        text-decoration: underline;
                        transition: var(--color-almeja-main-black)
                    }

                    .links___3KfVN a:hover {
                        color: var(--color-almeja-main-black)
                    }

                    .icon___1yu7l {
                        fill: var(--color-almeja-dark-blue)
                    }


                    .w-150 {
                        width: 150px;
                    }

                    @media only screen and (min-width: 1200px) {
                        .transform-90 {
                            transform: rotate(90deg);
                            top: 0;
                        }
                    }

                    .w-25 {
                        width: 25.5rem;
                    }

                    .display-block {
                        display: block;
                    }

                    .nav-link {
                        color: #808080;
                    }

                    .stepCardDescription___2noBr span i {
                        font-size: 75px;
                        padding: 25px;
                        /* background: #2ebd59; */
                        border-radius: 100px;
                        color: #737373;
                        cursor: pointer;
                    }

                    .stepCardDescription___2noBr span i:hover {
                        /* background: #28a24d; */
                        color: #4c4a4a;
                    }

                    .feedbackItem___16Brt:first-child {
                        margin-left: auto;
                    }


                    .header {
                        text-align: center;
                    }

                    .header a {
                        text-decoration: none;
                        color: #66b9b8;
                    }


                    .accordion-item {
                        position: relative;
                    }

                    .accordion-item.active .heading {

                    }

                    .accordion-item.active .icon {
                        background: #fefefe;
                    }

                    .accordion-item.active .icon:before {
                        background: #8ccbca;
                    }

                    .accordion-item.active .icon:after {
                        width: 0;
                    }

                    .accordion-item .heading {
                        display: block;
                        /* text-transform: uppercase; */
                        /* text-decoration: none; */
                        /* color: #4d8b8a; */
                        /* font-weight: 700; */
                        font-size: 1rem;
                        position: relative;
                        /* padding: 1.5rem 1.5rem 1.5rem 4rem; */
                        transition: 0.3s ease-in-out;
                    }

                    @media (min-width: 40rem) {
                        .accordion-item .heading {
                            /* font-size: 1.2rem; */
                        }
                    }

                    .accordion-item .heading:hover {
                        cursor: pointer;
                    }

                    .accordion-item .heading:hover .icon:before, .accordion-item .heading:hover .icon:after {
                        background: #8ccbca;
                    }

                    .accordion-item .icon {
                        display: block;
                        position: absolute;
                        top: 50%;
                        left: 0;
                        width: 3rem;
                        height: 3rem;
                        border: 2px solid #fefefe;
                        border-radius: 3px;
                        -webkit-transform: translateY(-50%);
                        transform: translateY(-50%);
                    }

                    .accordion-item .icon:before, .accordion-item .icon:after {
                        content: '';
                        width: 1.25rem;
                        height: 0.25rem;
                        background: #4d8b8a;
                        position: absolute;
                        border-radius: 3px;
                        left: 50%;
                        top: 50%;
                        transition: 0.3s ease-in-out;
                        -webkit-transform: translate(-50%, -50%);
                        transform: translate(-50%, -50%);
                    }

                    .accordion-item .icon:after {
                        -webkit-transform: translate(-50%, -50%) rotate(90deg);
                        transform: translate(-50%, -50%) rotate(90deg);
                        z-index: -1;
                    }

                    .accordion-item .content {
                        display: none;
                        transition: 1s ease-in-out;
                    }

                    .accordion-item .content p {
                        margin-top: 0;
                    }

                    @media (min-width: 40rem) {
                        .accordion-item .content {
                            line-height: 1.75;
                        }
                    }

                    .accordionItem___AaUC1:not(.isExpanded___366mC) .accordionItemContent___3HfAh {
                        height: auto !important;
                    }

                    .arrow-opacity-left {
                        background: linear-gradient(90deg, var(--color-almeja-white), hsla(0, 0%, 100%, 0.18));
                    }

                    .arrow-opacity-right {
                        background: linear-gradient(180deg, hsla(0, 0%, 100%, 0.18), var(--color-almeja-white));
                    }

                    @media (min-width: 768px) and (max-width: 1200px) {
                        .navigation___RqU5O {
                            margin-left: 45px;
                        }
                    }

                    @media only screen and (max-width: 1200px) {

                    }

                    @media only screen and (max-width: 480px) {
                        .items___2pjmF {
                            justify-content: left;
                            align-items: unset;
                        }

                        .qnaItemTitleText___34HLI {
                            font-size: 12px;
                        }

                        .partnerBrandLogo___2uzue {
                            width: unset;
                        }

                        .w-25 {
                            width: 19.5rem;
                        }

                        .down {
                            left: 45% !important;
                        }
                    }

                    .down {
                        position: absolute;
                        bottom: 0;
                        left: 50%;
                        font-size: 50px;
                    }

                    .down i {
                        color: #000;
                        cursor: pointer;
                    }

                    .down i:hover {
                        color: #504c4c;
                    }

                    .control-mobile {
                        display: none;
                    }

                    .title-f {
                        display: none;
                    }

                    .title-f-pc {
                        display: block;
                    }

                    @media only screen and (max-width: 480px) {
                        .control-mobile {
                            display: flex;
                            position: absolute;
                            top: 16px;
                            right: 40px;
                        }

                        .control-mobile a {
                            height: 35px;
                        }

                        .w-120 {
                            width: 120px;
                        }

                        .title-f {
                            display: block;
                        }

                        .title-f-pc {
                            display: none;
                        }

                        .apps___1HuOq {
                            display: block;
                            margin-bottom: 15px;
                        }

                        .middleLayer___2NaFV .earned___E_Cbn {
                            left: 175px !important;
                        }

                        .appHeader___2GdyR.isExpanded___qu6SJ .languageSwitcher___1pOWc {
                            bottom: -105px;
                            right: 15px;
                            z-index: 99;
                        }
                    }

                    .color-green {
                        background-color: #2cbd65;
                        color: #fff;
                    }

                    .color-green:hover {
                        background-color: #218a4a;
                    }

                    .animated {
                        animation-duration: 7s;
                        animation-fill-mode: both;
                    }

                    .animated.infinite {
                        animation-iteration-count: infinite;
                        -webkit-animation-iteration-count: infinite;
                    }

                    @keyframes bounce {
                        from,
                        6%,
                        17%,
                        26%,
                        33% {
                            animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
                            transform: translate3d(0, 0, 0);
                        }
                        13%,
                        14% {
                            animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                            transform: translate3d(0, -8px, 0);
                        }
                        23% {
                            animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
                            transform: translate3d(0, -4px, 0);
                        }
                        30% {
                            transform: translate3d(0, -2px, 0);
                        }
                        33%, 100% {
                            transform: translate3d(0, 0, 0);
                        }
                    }

                    .bounce {
                        animation-name: bounce;
                        transform-origin: center bottom;
                    }

                    .sampleCanvas___1rXmc {
                        background: #fff;
                        box-shadow: 0 12px 48px -8px #fff;
                    }

                    .almejaApp___1AHCL {
                        background: #fff;
                    }

                    .footer___1bjyg {
                        background: #fff;
                    }

                    @media only screen and (min-width: 1024px) {
                        .activeCreativeDetails___1viY0 {
                            font-size: 1.85rem;
                            line-height: 2rem;
                        }

                        .swiper-slide-active .activeCreativeDetails___1viY0 {
                            display: block !important;
                            top: 0;
                        }

                        .swiper-slide .activeCreativeDetails___1viY0 {
                            display: none;
                        }
                    }

                    .krb {
                        max-width: 31rem;
                        margin-left: 8rem;
                        position: absolute;
                        margin-top: 31rem;
                        z-index: 999;
                        transform: rotate(-90deg);
                    }


                    @media screen and (max-width: 480px) and (max-width: 800px) {
                        .krb {
                            max-width: 31rem;
                            margin-left: 3rem;
                            position: absolute;
                            margin-top: 15rem;
                            z-index: 999;
                            transform: rotate(0deg);
                        }


                        .tooltip___3BZib {
                            top: 11.6%;
                            left: 68.8% !important
                        }


                        .creativesCarouselSlideImage___1CtsY {
                            height: 22.5rem;
                            width: 15.5rem;
                            border-radius: 0px
                        }

                        .creativesCarousel___3xgR1 {
                            top: 4.4rem
                        }


                        .link___3B3Hd {
                            margin-left: -23%;
                            width: 100%
                        }

                        .sampleCanvas___1rXmc {
                            transform: rotate(90deg);
                            width: 23rem;
                            height: 38.5rem;
                        }


                        .sample___32zIb {
                            height: 26rem;
                        }


                    }
                </style>

                <link rel="stylesheet" href="{{asset('_clubs/assets/css/modal-video.min.css')}}"/>


                <script src="{{asset('_clubs/assets/js/jquery-modal-video.min.js')}}" type="text/javascript"></script>

                <div class="content___3aeYe">
                    <div class="pageSection___yvJAt dockBottom___2db2H spec-landing-teaser-section">
                        <div class="content___s6hxn dockBottom___2db2H">
                            <div class="landingTeaser___jNluX">

                                <div class="teaser___2YASU headtop">

                                    <div class="title___3ftGr title-f">Продвигайте любимые бренды и получайте
                                        справедливое вознаграждение
                                    </div>
                                    <div class="backgroundLayer___2EgEs">
                                        <div class="waveContainer___2BCfM">
                                            <div class="wave___366NL"></div>
                                            <div class="wave___366NL"></div>
                                        </div>
                                    </div>

                                    <div class="teaserInner___2AyZ3">

                                        <div class="sample___32zIb" id="teaser-video">

                                            <div class="sampleCanvas___1rXmc transform-90">
                                                <div class="textContainer___2nel8 lastStep___Q5QMX krb" class="">
                                                    <div class="stepCardTitle___34mGW"><!--Как это работает?--></div>
                                                    <div class="stepCardDescription___2noBr"><span class="js-modal-btn"
                                                                                                   data-video-id="5NNHMisMLeg"><!--<i class="far fa-play-circle" style="color:#fff"></i>--></span>
                                                    </div>
                                                </div>

                                                <span class="js-modal-btn" data-video-id="5NNHMisMLeg">  <img
                                                        class="sampleContent___2HB7D" loop="" muted="" playsinline=""
                                                        preload="auto" width="288" height="624" style="  -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%); /*ios 7 border-radius-bug */
  -webkit-transform: rotate(0.000001deg); /*mac os 10.6 safari 5 border-radius-bug */
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
  overflow: hidden; transform: rotate(180deg)" src="{{asset('/assets/img/slide/vid.jpg')}}"/></span>
                                            </div>
                                        </div>
                                        <div class="content___3vwxh">
                                            <div class="title___3ftGr title-f-pc">Aumenta trafico en tu Club o piso de
                                                relax
                                            </div>
                                            <div class="description___X_eXQ comp_butone">Promociona a las
                                                chicas/tavestis de forma automatica en mas de 40 portales de sexo en
                                                España.Tambien consigue reseñas en los mejores foros de sexo
                                            </div>
                                            <div class="appsLinks___367vX apps___3B0LY comp_butone"></div>
                                            <div class="appsLinks___367vX apps___3B0LY comp_butone">
                                                <div class="buttonsSet___3JySY"
                                                     style="margin-top: -7%;margin-left: 20%">
                                                    <div class="actionContainer___12YyA">
                                                        <a
															href="/login"
                                                            class="button___EtYyg button___1TlK9 spec-landing-teaser-signup-button signUpButton___3RUyy">
                                                            <span class="label___3lOm1">Empezar</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mob_buttone">
                                        <div class="description___X_eXQ">Promociona a las chicas/tavestis de forma
                                            automatica en mas de 40 portales de sexo en España.Tambien consigue reseñas
                                            en los mejores foros de sexo
                                        </div>
                                        <div class="appsLinks___367vX apps___3B0LY"></div>
                                        <div class="appsLinks___367vX apps___3B0LY">
                                            <div class="buttonsSet___3JySY" style="margin-top: -7%;margin-left: 20%">
                                                <div class="actionContainer___12YyA">
                                                        <a
															href="/login"
                                                            class="button___EtYyg button___1TlK9 spec-landing-teaser-signup-button signUpButton___3RUyy">
                                                            <span class="label___3lOm1">Empezar</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div
                            class="pageSection___yvJAt dockTop___3eb_c selfieCampaigns___1puM2 spec-landing-selfie-campaigns-section mxx">
                            <div class="pageSectionTitle___3BR-9 title___3hHPI"><span>Gestiona todos los perfiles de tus chicas/trans con solo 1 cuenta! </span>
                            </div>
                            <div class="content___s6hxn dockTop___3eb_c content___iH5i0">
                                <div class="gallery___2qnqO">


                                    <link rel="stylesheet" href="{{asset('_clubs/style.css')}}">
                                    <!-- Interface Section Start -->
                                    <div class="interface-area section-padding fix" id="screenshots"
                                         style="background-color:#111111">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12 text-center wow fadeInUpSmall"
                                                     data-wow-delay=".6s" data-wow-duration="1s">
                                                    <div id="interface-slider"
                                                         class="interface-slider mlr-minus-120 fix">
                                                        <div class="slide-item">
                                                            <div class="overlay light-1">
                                                                <a class="venobox" data-gall="myGallery"
                                                                   href="/_clubs/assets/img/interface/1.jpg"><img
                                                                        src="/_clubs/assets/img/interface/1.jpg"
                                                                        alt="Interface Image"/></a>
                                                            </div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1">
                                                                <a class="venobox" data-gall="myGallery"
                                                                   href="/_clubs/assets/img/interface/2.jpg"><img
                                                                        src="/_clubs/assets/img/interface/2.jpg"
                                                                        alt="Interface Image"/></a>
                                                            </div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1">
                                                                <a class="venobox" data-gall="myGallery"
                                                                   href="/_clubs/assets/img/interface/3.jpg"><img
                                                                        src="/_clubs/assets/img/interface/3.jpg"
                                                                        alt="Interface Image"/></a>
                                                            </div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1">
                                                                <a class="venobox" data-gall="myGallery"
                                                                   href="/_clubs/assets/img/interface/4.jpg"><img
                                                                        src="/_clubs/assets/img/interface/4.jpg"
                                                                        alt="Interface Image"/></a>
                                                            </div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/5.jpg"><img
                                                                        src="/_clubs/assets/img/interface/5.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="_clubs/assets/img/interface/6.jpg"><img
                                                                        src="_clubs/assets/img/interface/6.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/7.jpg"><img
                                                                        src="/_clubs/assets/img/interface/7.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/8.jpg"><img
                                                                        src="/_clubs/assets/img/interface/8.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/9.jpg"><img
                                                                        src="/_clubs/assets/img/interface/9.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/10.jpg"><img
                                                                        src="/_clubs/assets/img/interface/10.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/11.jpg"><img
                                                                        src="/_clubs/assets/img/interface/11.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/12.jpg"><img
                                                                        src="/_clubs/assets/img/interface/12.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/13.jpg"><img
                                                                        src="/_clubs/assets/img/interface/13.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/14.jpg"><img
                                                                        src="/_clubs/assets/img/interface/14.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/15.jpg"><img
                                                                        src="/_clubs/assets/img/interface/15.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/16.jpg"><img
                                                                        src="/_clubs/assets/img/interface/16.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/17.jpg"><img
                                                                        src="/_clubs/assets/img/interface/17.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>
                                                        <div class="slide-item">
                                                            <div class="overlay light-1"><a class="venobox"
                                                                                            data-gall="myGallery"
                                                                                            href="/_clubs/assets/img/interface/18.jpg"><img
                                                                        src="/_clubs/assets/img/interface/18.jpg"
                                                                        alt="Interface Image"/></a></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="creativeTypes____rjw4 creativesTypes___1p10Z spec-landing-selfie-campaigns-creatives-types visibility-h">
                                        <div class="creativeType___pg38s">
                                            <div class="creativeTypeIcon___20Y76">
                                                <svg viewBox="0 0 48 48" width="48" height="48"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M 24 6.857 C 33.453 6.857 41.143 14.547 41.143 24 C 41.143 33.453 33.453 41.143 24 41.143 C 14.547 41.143 6.857 33.453 6.857 24 C 6.857 14.547 14.547 6.857 24 6.857 M 24 4 C 12.954 4 4 12.954 4 24 C 4 35.046 12.954 44 24 44 C 35.046 44 44 35.046 44 24 C 44 12.954 35.046 4 24 4 Z M 18.286 14.96 C 16.706 14.96 15.429 15.92 15.429 18.286 C 15.429 20.655 16.707 21.611 18.286 21.611 C 19.865 21.611 21.143 20.655 21.143 18.286 C 21.143 15.92 19.865 14.96 18.286 14.96 Z M 29.714 14.96 C 28.135 14.96 26.857 15.92 26.857 18.286 C 26.857 20.655 28.135 21.611 29.714 21.611 C 31.293 21.611 32.571 20.655 32.571 18.286 C 32.571 15.92 31.294 14.96 29.714 14.96 Z M 36.801 27.256 C 37.022 26.5 36.587 25.708 35.828 25.484 C 35.071 25.258 34.279 25.702 34.056 26.455 C 32.761 30.897 28.626 34 24 34 C 19.374 34 15.239 30.897 13.943 26.455 C 13.722 25.702 12.938 25.258 12.171 25.484 C 11.413 25.708 10.98 26.5 11.2 27.256 C 12.849 32.909 18.113 36.857 24 36.857 C 29.887 36.857 35.15 32.909 36.801 27.256 Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="creativeTypeTitle___C9UC6">AR &amp; Camera FX</div>
                                        </div>
                                        <div class="creativeType___pg38s">
                                            <div class="creativeTypeIcon___20Y76">
                                                <svg viewBox="0 0 48 48" width="48" height="48"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M 42 8 L 42 14 C 42 15.105 41.112 16 40 16 C 38.895 16 38 15.113 38 14 L 38 10 L 34 10 C 32.895 10 32 9.112 32 8 C 32 6.895 32.887 6 34 6 L 40 6 C 40.552 6 41.052 6.222 41.414 6.583 C 41.776 6.944 42 7.444 42 8 Z M 42 28 L 42 22 C 42 20.887 41.105 20 40 20 C 38.888 20 38 20.895 38 22 L 38 26 L 34 26 C 32.887 26 32 26.895 32 28 C 32 29.112 32.895 30 34 30 L 40 30 C 40.556 30 41.056 29.776 41.417 29.414 C 41.778 29.052 42 28.552 42 28 Z M 18 8 L 18 14 C 18 15.113 18.895 16 20 16 C 21.112 16 22 15.105 22 14 L 22 10 L 26 10 C 27.113 10 28 9.105 28 8 C 28 6.888 27.105 6 26 6 L 20 6 C 19.444 6 18.944 6.224 18.583 6.586 C 18.222 6.948 18 7.448 18 8 Z M 6 20.005 C 6 18.898 6.897 18 8.005 18 L 27.995 18 C 29.102 18 30 18.897 30 20.005 L 30 39.995 C 30 41.102 29.103 42 27.995 42 L 8.005 42 C 6.898 42 6 41.103 6 39.995 L 6 20.005 Z M 9.987 38.002 L 26.001 38.017 L 26.011 22 L 10.025 22 L 9.987 38.002 Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="creativeTypeTitle___C9UC6">Segmentation</div>
                                        </div>
                                        <div class="creativeType___pg38s isActive___2HECM">
                                            <div class="creativeTypeIcon___20Y76">
                                                <svg viewBox="0 0 48 48" width="48" height="48"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M 16 18 C 16 10.268 22.268 4 30 4 C 37.732 4 44 10.268 44 18 C 44 25.732 37.732 32 30 32 L 30 40.003 C 30 42.211 28.206 44 26.003 44 L 7.997 44 C 5.789 44 4 42.206 4 40.003 L 4 21.997 C 4 19.789 5.794 18 7.997 18 L 16 18 Z M 20 18 L 26.003 18 C 28.211 18 30 19.794 30 21.997 L 30 28 C 35.523 28 40 23.523 40 18 C 40 12.477 35.523 8 30 8 C 24.477 8 20 12.477 20 18 Z M 8 40 C 8 40 26 40 26 40 C 26 40 26 22 26 22 C 26 22 8 22 8 22 C 8 22 8 40 8 40 Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="creativeTypeTitle___C9UC6">Overlay</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="pageSection___yvJAt spec-landing-how-it-works-section isRevealable___3BHkV isRevealed___22RRK screentop ujjj">
                            <div class="pageSectionTitle___3BR-9 magn">Como funciona</div>
                            <div class="content___s6hxn">
                                <div class="promoSteps___13aql">
                                    <div class="promoStepsItems___2SPQN">
                                        <div class="promoStepItem____eHAl cols3___146pT spec-landing-promo-step-item">
                                            <div class="header___3p1Hx">
                                                <div>
                                                    <h3 class="title___vae0_ spec-landing-promo-step-item-title">1</h3>
                                                    <h4 class="subtitle___WRXmU spec-landing-promo-step-item-subtitle">
                                                        Registrarse como Club o piso de relax</h4>
                                                    <p class="caption___2Ofm- spec-landing-promo-step-item-caption">Para
                                                        tener tarifa especial y tener la estadistica completa</p>
                                                </div>
                                                <div class="iconsSet___3BDGz spec-landing-promo-step-item-icon">
                                                    <svg viewBox="0 0 40 40" fill="#000000" width="40" height="40"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M 35.599 32.137 L 23.013 19.551 L 35.599 6.965 C 36.38 6.184 36.38 4.918 35.599 4.137 C 34.818 3.356 33.552 3.356 32.771 4.137 L 18.771 18.137 C 17.99 18.918 17.99 20.184 18.771 20.965 L 32.771 34.965 C 33.552 35.746 34.818 35.746 35.599 34.965 C 36.38 34.184 36.38 32.918 35.599 32.137 Z M 18.599 29.137 L 9.013 19.551 L 18.599 9.965 C 19.38 9.184 19.38 7.918 18.599 7.137 C 17.818 6.356 16.552 6.356 15.771 7.137 L 4.771 18.137 C 3.99 18.918 3.99 20.184 4.771 20.965 L 15.771 31.965 C 16.552 32.746 17.818 32.746 18.599 31.965 C 19.38 31.184 19.38 29.918 18.599 29.137 Z"
                                                            transform="matrix(-1, 0, 0, -1, 40.369999, 39.102001)"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="content___3xvNM spec-landing-promo-step-item-content"><span
                                                    class="sample___20Nhy"
                                                    style="background-image:url(/_clubs/assets/img/static/point1.png)"></span>
                                            </div>
                                        </div>
                                        <div class="promoStepItem____eHAl spec-landing-promo-step-item">
                                            <div class="header___3p1Hx">
                                                <div>
                                                    <h3 class="title___vae0_ spec-landing-promo-step-item-title">2</h3>
                                                    <h4 class="subtitle___WRXmU spec-landing-promo-step-item-subtitle">
                                                        Subir los perfiles en el sistema solo 1 vez</h4>
                                                    <p class="caption___2Ofm- spec-landing-promo-step-item-caption">
                                                        Rellenar la información y fotos</p>
                                                </div>
                                                <div class="iconsSet___3BDGz spec-landing-promo-step-item-icon">
                                                    <svg viewBox="0 0 48 48" fill="#000000" width="48" height="48"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M 41.176 34.179 C 41.176 38.465 37.701 41.94 33.415 41.94 C 29.129 41.94 25.654 38.465 25.654 34.179 C 25.654 29.893 29.129 26.418 33.415 26.418 C 37.701 26.418 41.176 29.893 41.176 34.179 Z M 41.176 14.636 C 41.176 18.922 37.701 22.397 33.415 22.397 C 29.129 22.397 25.654 18.922 25.654 14.636 C 25.654 10.35 29.129 6.875 33.415 6.875 C 37.701 6.875 41.176 10.35 41.176 14.636 Z M 33.436 9.617 C 30.59 9.617 28.282 11.925 28.282 14.771 C 28.282 17.617 30.59 19.925 33.436 19.925 C 36.282 19.925 38.59 17.617 38.59 14.771 C 38.59 11.925 36.282 9.617 33.436 9.617 Z M 21.675 34.179 C 21.675 38.465 18.2 41.94 13.914 41.94 C 9.628 41.94 6.1530000000000005 38.465 6.1530000000000005 34.179 C 6.1530000000000005 29.893 9.628 26.418 13.914 26.418 C 18.2 26.418 21.675 29.893 21.675 34.179 Z M 21.675 14.636 C 21.675 18.922 18.2 22.397 13.914 22.397 C 9.628 22.397 6.1530000000000005 18.922 6.1530000000000005 14.636 C 6.1530000000000005 10.35 9.628 6.875 13.914 6.875 C 18.2 6.875 21.675 10.35 21.675 14.636 Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="content___3xvNM spec-landing-promo-step-item-content"><span
                                                    class="sample___20Nhy"
                                                    style="background-image:url(/_clubs/assets/img/static/point2.jpg)"></span>
                                            </div>
                                        </div>
                                        <div class="promoStepItem____eHAl spec-landing-promo-step-item">
                                            <div class="header___3p1Hx">
                                                <div>
                                                    <h3 class="title___vae0_ spec-landing-promo-step-item-title">3</h3>
                                                    <h4 class="subtitle___WRXmU spec-landing-promo-step-item-subtitle">
                                                        Seleccionar las plataformas publicitarias donde quiere
                                                        anunciarse</h4>
                                                    <p class="caption___2Ofm- spec-landing-promo-step-item-caption">
                                                        Ejemplo: pasion.com, mileroticos, slumi, hott.es, adultguia.com,
                                                        skokka.com etc</p>
                                                </div>
                                                <div class="iconsSet___3BDGz spec-landing-promo-step-item-icon">
                                                    <svg viewBox="0 0 48 48" fill="#000000" width="48" height="48"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <!--<path
                                                          d="M4.89442719,6.21372604 L8.89442719,8.21372604 C9.88238419,8.70770454 10.2828329,9.90905062 9.78885438,10.8970076 C9.29487588,11.8849646 8.0935298,12.2854133 7.10557281,11.7914348 L6,11.2479778 L6,36.7402513 L7.10557281,36.213726 C8.0935298,35.7197475 9.29487588,36.1201962 9.78885438,37.1081532 C10.2828329,38.0961102 9.88238419,39.2974563 8.89442719,39.7914348 L4.89442719,41.7914348 C3.56462501,42.4563359 2,41.4893445 2,40.0025804 L2,8.00258042 C2,6.51581638 3.56462501,5.54882495 4.89442719,6.21372604 Z M14.8944272,6.21372604 L18.8944272,8.21372604 C19.8823842,8.70770454 20.2828329,9.90905062 19.7888544,10.8970076 C19.2948759,11.8849646 18.0935298,12.2854133 17.1055728,11.7914348 L16,11.2479778 L16,36.7402513 L17.1055728,36.213726 C18.0935298,35.7197475 19.2948759,36.1201962 19.7888544,37.1081532 C20.2828329,38.0961102 19.8823842,39.2974563 18.8944272,39.7914348 L14.8944272,41.7914348 C13.564625,42.4563359 12,41.4893445 12,40.0025804 L12,8.00258042 C12,6.51581638 13.564625,5.54882495 14.8944272,6.21372604 Z M22,40.0025804 L22,8.00258042 C22,6.74048758 23.1546484,5.7939023 24.3922323,6.04141907 L44.3922323,10.0414191 C45.3270807,10.2283887 46,11.0492184 46,12.0025804 L46,36.0025804 C46,36.9559425 45.3270807,37.7767721 44.3922323,37.9637418 L24.3922323,41.9637418 C23.1546484,42.2112585 22,41.2646733 22,40.0025804 Z M42,13.6427171 L26,10.4607103 L26,37.5943773 L42,34.3595813 L42,13.6427171 Z">
                                                        </path>-->
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="content___3xvNM spec-landing-promo-step-item-content"><span
                                                    class="sample___20Nhy"
                                                    style="background-image:url(/_clubs/assets/img/static/point3.jpg)"></span>
                                            </div>
                                        </div>
                                        <div class="promoStepItem____eHAl spec-landing-promo-step-item">
                                            <div class="header___3p1Hx">
                                                <div>
                                                    <h3 class="title___vae0_ spec-landing-promo-step-item-title">4</h3>
                                                    <h4 class="subtitle___WRXmU spec-landing-promo-step-item-subtitle">
                                                        Elegir foros para tener reseñas sobre las chicas/tavestis</h4>
                                                    <p class="caption___2Ofm- spec-landing-promo-step-item-caption">
                                                        Ejemplo: sexomercadobcn.com, spalumi.com, rincontranny.com
                                                        etc</p>
                                                </div>
                                                <div class="iconsSet___3BDGz spec-landing-promo-step-item-icon">
                                                    <svg viewBox="0 0 48 48" fill="#000000" width="48" height="48"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M26,7.99970728 C26,6.88989258 25.1045695,6 24,6 C22.8877296,6 22,6.89529944 22,7.99970728 L22,22 L7.99970728,22 C6.88989258,22 6,22.8954305 6,24 C6,25.1122704 6.89529944,26 7.99970728,26 L22,26 L22,40.0002927 C22,41.1101074 22.8954305,42 24,42 C25.1122704,42 26,41.1047006 26,40.0002927 L26,26 L40.0002927,26 C41.1101074,26 42,25.1045695 42,24 C42,22.8877296 41.1047006,22 40.0002927,22 L26,22 L26,7.99970728 Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="content___3xvNM spec-landing-promo-step-item-content"><span
                                                    class="sample___20Nhy"
                                                    style="background-image:url(/_clubs/assets/img/static/point4.jpg)"></span>
                                            </div>
                                        </div>
                                        <div class="promoStepItem____eHAl spec-landing-promo-step-item">
                                            <div class="header___3p1Hx">
                                                <div>
                                                    <h3 class="title___vae0_ spec-landing-promo-step-item-title">5</h3>
                                                    <h4 class="subtitle___WRXmU spec-landing-promo-step-item-subtitle">
                                                        Escoge una tarifa óptima</h4>
                                                    <p class="caption___2Ofm- spec-landing-promo-step-item-caption">
                                                        Selecciona la tarifa y empieza a publicarse</p>
                                                </div>
                                                <div class="iconsSet___3BDGz spec-landing-promo-step-item-icon">
                                                    <svg viewBox="0 0 48 48" fill="#000000" width="48" height="48"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8,9.9996152 C8,7.79068872 9.79642476,6 12.0000255,6 L43.9999745,6 C46.2091276,6 48,7.79412025 48,9.99683887 L48,30.0031611 C48,32.2105543 46.2037293,34 43.9947939,34 L40,34 L40,38.0031611 C40,40.2105543 38.2035752,42 35.9999745,42 L4.00002553,42 C1.79087243,42 0,40.2058797 0,38.0031611 L0,17.9968389 C0,15.7894457 1.79642476,14 4.00002553,14 L8,14 L8,9.9996152 Z M35.9999745,14 C38.2091276,14 40,15.7941203 40,17.9968389 L40,30 L43.9947939,30 C43.9979982,30 44,9.99683887 44,9.99683887 C44,10.0016353 12.0000255,10 12.0000255,10 C12.0016616,10 12.0012839,12.2535312 12.0007455,14 L35.9999745,14 Z M4,18 L4,38 L36,38 L36,18 L4,18 Z M6,33.0093689 C6,32.4519098 6.45097518,32 6.99077797,32 L11.009222,32 C11.5564136,32 12,32.4433532 12,33.0093689 L12,34.9906311 C12,35.5480902 11.5490248,36 11.009222,36 L6.99077797,36 C6.44358641,36 6,35.5566468 6,34.9906311 L6,33.0093689 Z M28,21.0093689 C28,20.4519098 28.4509752,20 28.990778,20 L33.009222,20 C33.5564136,20 34,20.4433532 34,21.0093689 L34,22.9906311 C34,23.5480902 33.5490248,24 33.009222,24 L28.990778,24 C28.4435864,24 28,23.5566468 28,22.9906311 L28,21.0093689 Z M20,34 C16.6862915,34 14,31.3137085 14,28 C14,24.6862915 16.6862915,22 20,22 C23.3137085,22 26,24.6862915 26,28 C26,31.3137085 23.3137085,34 20,34 Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="content___3xvNM spec-landing-promo-step-item-content"><span
                                                    class="sample___20Nhy"
                                                    style="background-image:url(/_clubs/assets/img/static/point5.jpg)"></span>
                                            </div>
                                        </div>
                                        <div class="promoStepItem____eHAl cols2___2nfE3 spec-landing-promo-step-item">
                                            <div class="header___3p1Hx header___3CYyd">
                                                <div>
                                                    <h3 class="title___vae0_ spec-landing-promo-step-item-title">6</h3>
                                                    <h4 class="subtitle___WRXmU spec-landing-promo-step-item-subtitle">
                                                        Empezar a recibir llamadas</h4>
                                                    <h4 class="subtitle___WRXmU subtitle___1akVl spec-landing-promo-step-item-subtitle">
                                                        <span>Olvida <b>de perder mucho tiempo en cada portal,</b> ahora lo puedes hacer desde solo un sitio</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div
                                                class="content___3xvNM content___Nodj1 spec-landing-promo-step-item-content">
                                                <div class="title___1phnF">Olvida de&nbsp;<b>perder mucho
                                                        tiempo&nbsp;</b> en cada portal, ahora lo puedes hacer desde
                                                    solo 1 sitio
                                                </div>
                                                <div class="samples___B6i2A">
                                                    <div class="sampleView___2XsKp"><img alt="Sample 12"
                                                                                         class="sampleViewImage___13mfX"
                                                                                         src="/_clubs/assets/img/static/sample12.jpg"
                                                                                         height="280"/></div>
                                                    <div class="sampleItems___3YT8P">
                                                        <div class="sampleItem___21-hw one"><img alt="Sample 1"
                                                                                                 class="sampleImage___2fo_o"
                                                                                                 src="/_clubs/assets/img/static/sample01.jpg"
                                                                                                 height="140"/></div>
                                                        <div class="sampleItem___21-hw tow"><img alt="Sample 2"
                                                                                                 class="sampleImage___2fo_o"
                                                                                                 src="/_clubs/assets/img/static/sample02.jpg"
                                                                                                 height="140"/></div>
                                                        <div class="sampleItem___21-hw three"><img alt="Sample 3"
                                                                                                   class="sampleImage___2fo_o"
                                                                                                   src="/_clubs/assets/img/static/sample03.jpg"
                                                                                                   height="140"/></div>
                                                        <div class="sampleItem___21-hw four"><img alt="Sample 4"
                                                                                                  class="sampleImage___2fo_o"
                                                                                                  src="/_clubs/assets/img/static/sample04.jpg"
                                                                                                  height="140"/></div>
                                                        <div class="sampleItem___21-hw five"><img alt="Sample 5"
                                                                                                  class="sampleImage___2fo_o"
                                                                                                  src="/_clubs/assets/img/static/sample05.jpg"
                                                                                                  height="140"/></div>
                                                        <div class="sampleItem___21-hw six"><img alt="Sample 6"
                                                                                                 class="sampleImage___2fo_o"
                                                                                                 src="/_clubs/assets/img/static/sample06.jpg"
                                                                                                 height="140"/></div>
                                                        <div class="sampleItem___21-hw seven"><img alt="Sample 7"
                                                                                                   class="sampleImage___2fo_o"
                                                                                                   src="/_clubs/assets/img/static/sample07.jpg"
                                                                                                   height="140"/></div>
                                                        <div class="sampleItem___21-hw eight"><img alt="Sample 8"
                                                                                                   class="sampleImage___2fo_o"
                                                                                                   src="/_clubs/assets/img/static/sample08.jpg"
                                                                                                   height="140"/></div>
                                                        <div class="sampleItem___21-hw nine"><img alt="Sample 9"
                                                                                                  class="sampleImage___2fo_o"
                                                                                                  src="/_clubs/assets/img/static/sample09.jpg"
                                                                                                  height="140"/></div>
                                                        <div class="sampleItem___21-hw ten"><img alt="Sample 10"
                                                                                                 class="sampleImage___2fo_o"
                                                                                                 src="/_clubs/assets/img/static/sample10.jpg"
                                                                                                 height="140"/></div>
                                                        <div class="sampleItem___21-hw eleven"><img alt="Sample 11"
                                                                                                    class="sampleImage___2fo_o"
                                                                                                    src="/_clubs/assets/img/static/sample11.jpg"
                                                                                                    height="140"/></div>
                                                        <div class="sampleItem___21-hw towelv">
                                                            <img alt="Sample 12" class="sampleImage___2fo_o" src="/_clubs/assets/img/static/sample12.jpg" height="140"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>

                                    $(".sampleItem___21-hw.one").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample01.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.tow").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample02.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.three").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample03.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.four").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample04.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.five").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample05.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.six").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample06.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.seven").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample07.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.eight").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample08.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.nine").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample09.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.ten").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample10.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.eleven").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample11.jpg" height="280" />');
                                    });
                                    $(".sampleItem___21-hw.towelv").hover(function () {
                                        $(".sampleView___2XsKp").html('<img alt="Sample 12" class="sampleViewImage___13mfX" src="/_clubs/assets/img/static/sample12.jpg" height="280" />');
                                    });
                                </script>


                                <div class="advantages___34T17">
                                    <div class="advantageItem___bi5Gk">
                                        <div class="advantageItemIconsSet___F3vkR">
                                            <svg viewBox="0 0 48 48" width="48" height="48"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path id="a"
                                                      d="M27 25.385a4 4 0 1 1-2.962-3.864l3.034-3.035-1.204-6.021a2 2 0 0 1 .547-1.806l7.07-7.072c1.13-1.129 3.063-.544 3.376 1.022l1.153 5.764 5.764 1.153c1.566.313 2.151 2.246 1.021 3.375l-7.07 7.071a2 2 0 0 1-1.807.547L29.9 21.315l-3.035 3.035c.088.33.135.677.135 1.035zm7.135-13.961l-.49-2.34-3.636 3.637.468 2.36 3.658-3.657zm-.826 6.483l2.362.466 3.672-3.672-2.367-.462-3.667 3.668zm-12.66-4.291a2 2 0 0 1 .78 3.923A8.003 8.003 0 0 0 15 25.385a8 8 0 0 0 8 8c3.81 0 7.07-2.684 7.833-6.364a2 2 0 0 1 3.917.812A12.003 12.003 0 0 1 23 37.385c-6.627 0-12-5.373-12-12 0-5.75 4.075-10.661 9.65-11.77zM23 5.386a2 2 0 1 1 0 4c-8.837 0-16 7.163-16 16 0 8.836 7.163 16 16 16s16-7.164 16-16a2 2 0 1 1 4 0c0 11.045-8.954 20-20 20s-20-8.955-20-20c0-11.047 8.954-20 20-20z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="advantageItemContent___17QNX">Los anuncios se publican donde esta su
                                            publico principal
                                        </div>
                                    </div>
                                    <div class="advantageItem___bi5Gk">
                                        <div class="advantageItemIconsSet___F3vkR">
                                            <svg viewBox="0 0 48 48" width="48" height="48"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path id="a"
                                                      d="M13.735 39.047C8.965 35.117 6.036 30.01 6 23.994c.022-6.624 0-17.897 0-17.98a2 2 0 0 1 2.512-1.946c.047.012 2.712.67 4.656.961 3.58.537 7.26.972 10.832.972 3.597 0 7.278-.435 10.858-.972 1.944-.291 4.609-.949 4.656-.961a2 2 0 0 1 2.512 1.946c0 .083-.022 11.356 0 17.98-.036 6.015-2.965 11.123-7.735 15.053-3.518 2.898-8.023 4.983-10.291 4.954-2.242.03-6.747-2.056-10.265-4.954zM12.458 9.018c-.872-.124-1.656-.348-2.458-.506 0 .763.022 8.862 0 15.477.028 4.68 2.354 8.738 6.279 11.971a23.275 23.275 0 0 0 4.923 3.112c1.292.598 2.417.934 2.798.93.407.004 1.532-.332 2.824-.93a23.275 23.275 0 0 0 4.923-3.112c3.925-3.233 6.25-7.29 6.28-11.971-.023-6.615-.001-14.714-.001-15.477-.802.158-1.586.382-2.458.506-3.82.544-7.724.983-11.568.983-3.818 0-7.721-.44-11.542-.983zm8.128 21.397l-6-6a2 2 0 0 1 2.828-2.828L22 26.2l9.586-9.614a2 2 0 0 1 2.828 2.828l-11 11a2 2 0 0 1-2.828 0z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="advantageItemContent___17QNX">Utilizamos la ultimas tecnologías para
                                            facilitar el trabajo rutinario
                                        </div>
                                    </div>
                                    <div class="advantageItem___bi5Gk">
                                        <div class="advantageItemIconsSet___F3vkR">
                                            <svg viewBox="0 0 48 48" width="48" height="48"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path id="a"
                                                      d="M16.506 8.414a2 2 0 0 1 2.828-2.828l6 6a2 2 0 0 1 0 2.828l-6 6a2 2 0 0 1-2.828-2.828L19.079 15h-2.082C12.032 15 8 19.032 8 24c0 4.664 4.186 9 7.995 9a2 2 0 1 1 0 4C9.945 37 4 30.842 4 24c0-7.177 5.823-13 12.997-13h2.082l-2.573-2.586zm14.828 31.172a2 2 0 1 1-2.828 2.828l-6-6a2 2 0 0 1 0-2.828l6-6a2 2 0 1 1 2.828 2.828L28.761 33h2.162c4.964 0 8.997-4.032 8.997-9 0-4.664-4.187-9-7.995-9a2 2 0 1 1 0-4c6.05 0 11.995 6.158 11.995 13 0 7.177-5.824 13-12.997 13h-2.162l2.573 2.586z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="advantageItemContent___17QNX">No tiene que preocuparse en nada,
                                            todos los procesos son automaticos y se verifican por personal cualificado
                                        </div>
                                    </div>
                                </div>
                                <div class="chartSample___2NCHl">
                                    <h3 class="title___1_82t displayOnSmallMediaFormat___3OwBw">And most importantly,
                                        the results are measurable and success quantifiable.</h3>
                                    <div class="chart___11D43"><span class="point___ogQKd"
                                                                     style="left:82.8%;top:11.6%"></span><span
                                            class="point___ogQKd" style="left:48.4%;top:59.2%"></span><span
                                            class="point___ogQKd" style="left:14.4%;top:32.2%"></span><img
                                            class="image___286Se" src="/_clubs/assets/img/static/chartSample.png" width="678"
                                            height="418" alt="Chart sample"/>
                                        <div class="tooltip___3BZib" style="top:11.6%;left:82.8%">
                                            <div class="tooltipItem___2iRMo">
                                                <div class="tooltipItemName___C_RsC">Pasion.com</div>
                                                <div class="tooltipItemValue___L8CCr">15,007</div>
                                            </div>
                                            <div class="tooltipItem___2iRMo">
                                                <div class="tooltipItemName___C_RsC">Slumi.com</div>
                                                <div class="tooltipItemValue___L8CCr">11,576</div>
                                            </div>
                                            <div class="tooltipItem___2iRMo">
                                                <div class="tooltipItemName___C_RsC">Mileroticos</div>
                                                <div class="tooltipItemValue___L8CCr">1,987</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info___1zHQz">
                                        <h3 class="title___1_82t hideOnSmallMediaFormat___2CvCI">La importancia de las
                                            visualizaciones:<br></h3>
                                        <p class="caption___Ok8W0">Siempre tiene disponible la estadistica de sus
                                            anuncios publicados</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="pageSection___yvJAt spec-landing-case-studies-section isRevealable___3BHkV isRevealed___22RRK">
                            <div class="pageSectionTitle___3BR-9 mobbb">Ejemplos</div>
                            <div class="content___s6hxn pageSectionContent___1zGPR">
                                <div>
                                    <div class="cases___2gwdt hasRightShadow___3fc-i hasLeftShadow___2SL_S">

                                        <div class="items___cYLlZ primers">
                                            <div class="caseItem___2IlAV ">
                                                <div class="content___Rhi-W ">
                                                    <div class="creative___3Q-7n">
                                                        <div class="preview___1RBcc">
                                                            <div class="creativePreview___1UO0u creativeImage___ORT0a">
                                                                <img alt="Preview" class="image___8gO7p"
                                                                     src="/_clubs/assets/img/all/gettSample.jpg" height="280"/>
                                                            </div>
                                                        </div>
                                                        <div class="info___39yI7">
                                                            <div class="brand___1X5nb">
                                                                <div class="brandLogo___1Okej"><img
                                                                        class="brandLogoImage___1thcG"
                                                                        src="/_clubs/assets/img/all/1Logo.jpg" height="32"/>
                                                                </div>
                                                                <div class="brandName___AoKVv" style="color:#B37BAC">
                                                                    Pasion.com
                                                                </div>
                                                            </div>
                                                            <div class="caption___8YcAa">Pasion es la web de anuncios de
                                                                contactos m&#225;s popular de Espa&#241;a. En pasion.com
                                                                se publican al d&#237;a m&#225;s de dieciseis mil
                                                                anuncios
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="statistic___ROn2a">
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#25d366">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M39.83549,34.0044589 C35.4943607,37.7410675 29.9925391,40 24,40 C18.0082591,40 12.5069355,37.7375757 8.16385557,33.9960218 C4.48803142,30.8293072 2,26.8274787 2,24 C2,21.1720273 4.48411314,17.1700245 8.15610513,14.0044245 C12.4969785,10.2621861 17.99976,8 24,8 C30.0010391,8 35.5043145,10.2586929 39.8432405,13.9959871 C43.5175192,17.1607933 46,21.1627946 46,24 C46,26.8367098 43.5136018,30.8385397 39.83549,34.0044589 Z M10.774621,30.9655261 C14.425061,34.1103722 19.0198904,36 24,36 C28.9820968,36 33.5776597,34.1131583 37.2260335,30.9728361 C40.1080046,28.4921916 42,25.4470464 42,24 C42,22.5508402 40.1113808,19.5062017 37.2327482,17.026718 C33.5869811,13.8864699 28.9906222,12 24,12 C19.0113652,12 14.4157372,13.8892565 10.7679061,17.0340277 C7.89079843,19.5143632 6,22.560513 6,24 C6,25.4373739 7.89417932,28.4840318 10.774621,30.9655261 Z M32,24 C32,28.418278 28.418278,32 24,32 C19.581722,32 16,28.418278 16,24 C16,19.581722 19.581722,16 24,16 C28.418278,16 32,19.581722 32,24 Z M24,20 C21.790861,20 20,21.790861 20,24 C20,26.209139 21.790861,28 24,28 C26.209139,28 28,26.209139 28,24 L27,24 C25.3431458,24 24,22.6568542 24,21 L24,20 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">4,159,759</div>
                                                            <div class="label___2cvVl">Veces listado</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#25d366">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.89442719,6.21372604 L8.89442719,8.21372604 C9.88238419,8.70770454 10.2828329,9.90905062 9.78885438,10.8970076 C9.29487588,11.8849646 8.0935298,12.2854133 7.10557281,11.7914348 L6,11.2479778 L6,36.7402513 L7.10557281,36.213726 C8.0935298,35.7197475 9.29487588,36.1201962 9.78885438,37.1081532 C10.2828329,38.0961102 9.88238419,39.2974563 8.89442719,39.7914348 L4.89442719,41.7914348 C3.56462501,42.4563359 2,41.4893445 2,40.0025804 L2,8.00258042 C2,6.51581638 3.56462501,5.54882495 4.89442719,6.21372604 Z M14.8944272,6.21372604 L18.8944272,8.21372604 C19.8823842,8.70770454 20.2828329,9.90905062 19.7888544,10.8970076 C19.2948759,11.8849646 18.0935298,12.2854133 17.1055728,11.7914348 L16,11.2479778 L16,36.7402513 L17.1055728,36.213726 C18.0935298,35.7197475 19.2948759,36.1201962 19.7888544,37.1081532 C20.2828329,38.0961102 19.8823842,39.2974563 18.8944272,39.7914348 L14.8944272,41.7914348 C13.564625,42.4563359 12,41.4893445 12,40.0025804 L12,8.00258042 C12,6.51581638 13.564625,5.54882495 14.8944272,6.21372604 Z M22,40.0025804 L22,8.00258042 C22,6.74048758 23.1546484,5.7939023 24.3922323,6.04141907 L44.3922323,10.0414191 C45.3270807,10.2283887 46,11.0492184 46,12.0025804 L46,36.0025804 C46,36.9559425 45.3270807,37.7767721 44.3922323,37.9637418 L24.3922323,41.9637418 C23.1546484,42.2112585 22,41.2646733 22,40.0025804 Z M42,13.6427171 L26,10.4607103 L26,37.5943773 L42,34.3595813 L42,13.6427171 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">3,365</div>
                                                            <div class="label___2cvVl">Vieron el teléfono</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#25d366">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M27.0862654,2 C37.5320326,2 46,10.5065898 46,21 C46,23.9222925 45.3432603,26.6904957 44.1699581,29.1637931 L45.9009525,36.8938023 C46.3824839,39.0441513 45.0328893,40.3927584 42.8889894,39.9065541 L35.2071194,38.1644216 C33.3124168,39.0706564 31.2439903,39.6696282 29.0656888,39.8971968 C26.333325,43.5872736 21.9462443,45.9797184 17,45.9797184 C14.4648682,45.9797184 12.0766253,45.3512378 9.98277675,44.2416824 L4.88264057,45.8197559 C2.76681652,46.4744298 1.57364935,45.2899751 2.21892761,43.1699296 L3.77269255,38.0650739 C2.64155714,35.9576622 2,33.5486319 2,30.9898592 C2,25.952119 4.48681499,21.4948128 8.30061218,18.7769895 C9.39639753,9.33103332 17.3890912,2 27.0862654,2 Z M34.7396704,33.957747 L41.5119092,35.519725 L39.9829455,28.6919138 L40.5754169,27.442996 C41.5210434,25.4496345 42.0181611,23.2642843 42.0181611,21 C42.0181611,12.7157288 35.3329237,6 27.0862654,6 C20.366343,6 14.6832147,10.4592894 12.8092577,16.592846 C14.1392418,16.2068961 15.545443,16 17,16 C25.2842712,16 32,22.7111886 32,30.9898592 C32,32.5181111 31.7711443,33.992947 31.3458125,35.3820091 C32.0825217,35.1622484 34.7396704,33.957747 34.7396704,33.957747 Z M8.08540636,37.6555532 L7.0596541,40.9717371 L10.3802954,39.9452814 L11.8634166,40.7304324 C13.4315039,41.5605636 15.1797153,42 17,42 C23.0710218,42 28,37.0791967 28,31 C28,24.9208033 23.0710218,20 17,20 C10.9289782,20 6,24.9208033 6,31 C6,32.8437292 6.45089263,34.6132942 7.30121785,36.1959726 L8.08540636,37.6555532 Z M17,33 C15.8954305,33 15,32.1045695 15,31 C15,29.8954305 15.8954305,29 17,29 C18.1045695,29 19,29.8954305 19,31 C19,32.1045695 18.1045695,33 17,33 Z M23,33 C21.8954305,33 21,32.1045695 21,31 C21,29.8954305 21.8954305,29 23,29 C24.1045695,29 25,29.8954305 25,31 C25,32.1045695 24.1045695,33 23,33 Z M11,33 C9.8954305,33 9,32.1045695 9,31 C9,29.8954305 9.8954305,29 11,29 C12.1045695,29 13,29.8954305 13,31 C13,32.1045695 12.1045695,33 11,33 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">7%</div>
                                                            <div class="label___2cvVl">Envíos de email</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#25d366">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8,9.9996152 C8,7.79068872 9.79642476,6 12.0000255,6 L43.9999745,6 C46.2091276,6 48,7.79412025 48,9.99683887 L48,30.0031611 C48,32.2105543 46.2037293,34 43.9947939,34 L40,34 L40,38.0031611 C40,40.2105543 38.2035752,42 35.9999745,42 L4.00002553,42 C1.79087243,42 0,40.2058797 0,38.0031611 L0,17.9968389 C0,15.7894457 1.79642476,14 4.00002553,14 L8,14 L8,9.9996152 Z M35.9999745,14 C38.2091276,14 40,15.7941203 40,17.9968389 L40,30 L43.9947939,30 C43.9979982,30 44,9.99683887 44,9.99683887 C44,10.0016353 12.0000255,10 12.0000255,10 C12.0016616,10 12.0012839,12.2535312 12.0007455,14 L35.9999745,14 Z M4,18 L4,38 L36,38 L36,18 L4,18 Z M6,33.0093689 C6,32.4519098 6.45097518,32 6.99077797,32 L11.009222,32 C11.5564136,32 12,32.4433532 12,33.0093689 L12,34.9906311 C12,35.5480902 11.5490248,36 11.009222,36 L6.99077797,36 C6.44358641,36 6,35.5566468 6,34.9906311 L6,33.0093689 Z M28,21.0093689 C28,20.4519098 28.4509752,20 28.990778,20 L33.009222,20 C33.5564136,20 34,20.4433532 34,21.0093689 L34,22.9906311 C34,23.5480902 33.5490248,24 33.009222,24 L28.990778,24 C28.4435864,24 28,23.5566468 28,22.9906311 L28,21.0093689 Z M20,34 C16.6862915,34 14,31.3137085 14,28 C14,24.6862915 16.6862915,22 20,22 C23.3137085,22 26,24.6862915 26,28 C26,31.3137085 23.3137085,34 20,34 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">+53%</div>
                                                            <div class="label___2cvVl">Aumenta tus ventas</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caseItem___2IlAV">
                                                <div class="content___Rhi-W">
                                                    <div class="creative___3Q-7n">
                                                        <div class="preview___1RBcc">
                                                            <div class="creativePreview___1UO0u creativeImage___ORT0a">
                                                                <img alt="Preview" class="image___8gO7p"
                                                                     src="/_clubs/assets/img/all/russianFilmWeekSample.jpg"
                                                                     height="280"/></div>
                                                        </div>
                                                        <div class="info___39yI7">
                                                            <div class="brand___1X5nb">
                                                                <div class="brandLogo___1Okej"><img
                                                                        class="brandLogoImage___1thcG"
                                                                        src="/_clubs/assets/img/all/1Logo.jpg" height="32"/>
                                                                </div>
                                                                <div class="brandName___AoKVv" style="color:#CA1C2E">
                                                                    Slumi.com
                                                                </div>
                                                            </div>
                                                            <div class="caption___8YcAa">Slumi.com Un portal bastante
                                                                potente en el mundo de escorts y putas en Espa&#241;a.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="statistic___ROn2a">
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#000000">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M39.83549,34.0044589 C35.4943607,37.7410675 29.9925391,40 24,40 C18.0082591,40 12.5069355,37.7375757 8.16385557,33.9960218 C4.48803142,30.8293072 2,26.8274787 2,24 C2,21.1720273 4.48411314,17.1700245 8.15610513,14.0044245 C12.4969785,10.2621861 17.99976,8 24,8 C30.0010391,8 35.5043145,10.2586929 39.8432405,13.9959871 C43.5175192,17.1607933 46,21.1627946 46,24 C46,26.8367098 43.5136018,30.8385397 39.83549,34.0044589 Z M10.774621,30.9655261 C14.425061,34.1103722 19.0198904,36 24,36 C28.9820968,36 33.5776597,34.1131583 37.2260335,30.9728361 C40.1080046,28.4921916 42,25.4470464 42,24 C42,22.5508402 40.1113808,19.5062017 37.2327482,17.026718 C33.5869811,13.8864699 28.9906222,12 24,12 C19.0113652,12 14.4157372,13.8892565 10.7679061,17.0340277 C7.89079843,19.5143632 6,22.560513 6,24 C6,25.4373739 7.89417932,28.4840318 10.774621,30.9655261 Z M32,24 C32,28.418278 28.418278,32 24,32 C19.581722,32 16,28.418278 16,24 C16,19.581722 19.581722,16 24,16 C28.418278,16 32,19.581722 32,24 Z M24,20 C21.790861,20 20,21.790861 20,24 C20,26.209139 21.790861,28 24,28 C26.209139,28 28,26.209139 28,24 L27,24 C25.3431458,24 24,22.6568542 24,21 L24,20 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">112,641</div>
                                                            <div class="label___2cvVl">Veces listado</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#000000">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.89442719,6.21372604 L8.89442719,8.21372604 C9.88238419,8.70770454 10.2828329,9.90905062 9.78885438,10.8970076 C9.29487588,11.8849646 8.0935298,12.2854133 7.10557281,11.7914348 L6,11.2479778 L6,36.7402513 L7.10557281,36.213726 C8.0935298,35.7197475 9.29487588,36.1201962 9.78885438,37.1081532 C10.2828329,38.0961102 9.88238419,39.2974563 8.89442719,39.7914348 L4.89442719,41.7914348 C3.56462501,42.4563359 2,41.4893445 2,40.0025804 L2,8.00258042 C2,6.51581638 3.56462501,5.54882495 4.89442719,6.21372604 Z M14.8944272,6.21372604 L18.8944272,8.21372604 C19.8823842,8.70770454 20.2828329,9.90905062 19.7888544,10.8970076 C19.2948759,11.8849646 18.0935298,12.2854133 17.1055728,11.7914348 L16,11.2479778 L16,36.7402513 L17.1055728,36.213726 C18.0935298,35.7197475 19.2948759,36.1201962 19.7888544,37.1081532 C20.2828329,38.0961102 19.8823842,39.2974563 18.8944272,39.7914348 L14.8944272,41.7914348 C13.564625,42.4563359 12,41.4893445 12,40.0025804 L12,8.00258042 C12,6.51581638 13.564625,5.54882495 14.8944272,6.21372604 Z M22,40.0025804 L22,8.00258042 C22,6.74048758 23.1546484,5.7939023 24.3922323,6.04141907 L44.3922323,10.0414191 C45.3270807,10.2283887 46,11.0492184 46,12.0025804 L46,36.0025804 C46,36.9559425 45.3270807,37.7767721 44.3922323,37.9637418 L24.3922323,41.9637418 C23.1546484,42.2112585 22,41.2646733 22,40.0025804 Z M42,13.6427171 L26,10.4607103 L26,37.5943773 L42,34.3595813 L42,13.6427171 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">1307</div>
                                                            <div class="label___2cvVl">Vieron el teléfono</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#000000">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M27.0862654,2 C37.5320326,2 46,10.5065898 46,21 C46,23.9222925 45.3432603,26.6904957 44.1699581,29.1637931 L45.9009525,36.8938023 C46.3824839,39.0441513 45.0328893,40.3927584 42.8889894,39.9065541 L35.2071194,38.1644216 C33.3124168,39.0706564 31.2439903,39.6696282 29.0656888,39.8971968 C26.333325,43.5872736 21.9462443,45.9797184 17,45.9797184 C14.4648682,45.9797184 12.0766253,45.3512378 9.98277675,44.2416824 L4.88264057,45.8197559 C2.76681652,46.4744298 1.57364935,45.2899751 2.21892761,43.1699296 L3.77269255,38.0650739 C2.64155714,35.9576622 2,33.5486319 2,30.9898592 C2,25.952119 4.48681499,21.4948128 8.30061218,18.7769895 C9.39639753,9.33103332 17.3890912,2 27.0862654,2 Z M34.7396704,33.957747 L41.5119092,35.519725 L39.9829455,28.6919138 L40.5754169,27.442996 C41.5210434,25.4496345 42.0181611,23.2642843 42.0181611,21 C42.0181611,12.7157288 35.3329237,6 27.0862654,6 C20.366343,6 14.6832147,10.4592894 12.8092577,16.592846 C14.1392418,16.2068961 15.545443,16 17,16 C25.2842712,16 32,22.7111886 32,30.9898592 C32,32.5181111 31.7711443,33.992947 31.3458125,35.3820091 C32.0825217,35.1622484 34.7396704,33.957747 34.7396704,33.957747 Z M8.08540636,37.6555532 L7.0596541,40.9717371 L10.3802954,39.9452814 L11.8634166,40.7304324 C13.4315039,41.5605636 15.1797153,42 17,42 C23.0710218,42 28,37.0791967 28,31 C28,24.9208033 23.0710218,20 17,20 C10.9289782,20 6,24.9208033 6,31 C6,32.8437292 6.45089263,34.6132942 7.30121785,36.1959726 L8.08540636,37.6555532 Z M17,33 C15.8954305,33 15,32.1045695 15,31 C15,29.8954305 15.8954305,29 17,29 C18.1045695,29 19,29.8954305 19,31 C19,32.1045695 18.1045695,33 17,33 Z M23,33 C21.8954305,33 21,32.1045695 21,31 C21,29.8954305 21.8954305,29 23,29 C24.1045695,29 25,29.8954305 25,31 C25,32.1045695 24.1045695,33 23,33 Z M11,33 C9.8954305,33 9,32.1045695 9,31 C9,29.8954305 9.8954305,29 11,29 C12.1045695,29 13,29.8954305 13,31 C13,32.1045695 12.1045695,33 11,33 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">7%</div>
                                                            <div class="label___2cvVl">Envíos de email</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#000000">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8,9.9996152 C8,7.79068872 9.79642476,6 12.0000255,6 L43.9999745,6 C46.2091276,6 48,7.79412025 48,9.99683887 L48,30.0031611 C48,32.2105543 46.2037293,34 43.9947939,34 L40,34 L40,38.0031611 C40,40.2105543 38.2035752,42 35.9999745,42 L4.00002553,42 C1.79087243,42 0,40.2058797 0,38.0031611 L0,17.9968389 C0,15.7894457 1.79642476,14 4.00002553,14 L8,14 L8,9.9996152 Z M35.9999745,14 C38.2091276,14 40,15.7941203 40,17.9968389 L40,30 L43.9947939,30 C43.9979982,30 44,9.99683887 44,9.99683887 C44,10.0016353 12.0000255,10 12.0000255,10 C12.0016616,10 12.0012839,12.2535312 12.0007455,14 L35.9999745,14 Z M4,18 L4,38 L36,38 L36,18 L4,18 Z M6,33.0093689 C6,32.4519098 6.45097518,32 6.99077797,32 L11.009222,32 C11.5564136,32 12,32.4433532 12,33.0093689 L12,34.9906311 C12,35.5480902 11.5490248,36 11.009222,36 L6.99077797,36 C6.44358641,36 6,35.5566468 6,34.9906311 L6,33.0093689 Z M28,21.0093689 C28,20.4519098 28.4509752,20 28.990778,20 L33.009222,20 C33.5564136,20 34,20.4433532 34,21.0093689 L34,22.9906311 C34,23.5480902 33.5490248,24 33.009222,24 L28.990778,24 C28.4435864,24 28,23.5566468 28,22.9906311 L28,21.0093689 Z M20,34 C16.6862915,34 14,31.3137085 14,28 C14,24.6862915 16.6862915,22 20,22 C23.3137085,22 26,24.6862915 26,28 C26,31.3137085 23.3137085,34 20,34 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">+57%</div>
                                                            <div class="label___2cvVl">Aumenta tus ventas</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caseItem___2IlAV">
                                                <div class="content___Rhi-W">
                                                    <div class="creative___3Q-7n">
                                                        <div class="preview___1RBcc">
                                                            <div class="creativePreview___1UO0u creativeImage___ORT0a">
                                                                <img alt="Preview" class="image___8gO7p"
                                                                     src="/_clubs/assets/img/all/idealFlatmateSample.jpg"
                                                                     height="280"/></div>
                                                        </div>
                                                        <div class="info___39yI7">
                                                            <div class="brand___1X5nb">
                                                                <div class="brandLogo___1Okej"><img
                                                                        class="brandLogoImage___1thcG"
                                                                        src="/_clubs/assets/img/all/1Logo.jpg" height="32"/>
                                                                </div>
                                                                <div class="brandName___AoKVv" style="color:#3C61F6">
                                                                    Nuevoloquo.com
                                                                </div>
                                                            </div>
                                                            <div class="caption___8YcAa">Nuevoloquo.com Web pionera en
                                                                Escorts, putas y travestis que ofrecen sexo y masajes er&#243;ticos.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="statistic___ROn2a">
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#fd523a">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M39.83549,34.0044589 C35.4943607,37.7410675 29.9925391,40 24,40 C18.0082591,40 12.5069355,37.7375757 8.16385557,33.9960218 C4.48803142,30.8293072 2,26.8274787 2,24 C2,21.1720273 4.48411314,17.1700245 8.15610513,14.0044245 C12.4969785,10.2621861 17.99976,8 24,8 C30.0010391,8 35.5043145,10.2586929 39.8432405,13.9959871 C43.5175192,17.1607933 46,21.1627946 46,24 C46,26.8367098 43.5136018,30.8385397 39.83549,34.0044589 Z M10.774621,30.9655261 C14.425061,34.1103722 19.0198904,36 24,36 C28.9820968,36 33.5776597,34.1131583 37.2260335,30.9728361 C40.1080046,28.4921916 42,25.4470464 42,24 C42,22.5508402 40.1113808,19.5062017 37.2327482,17.026718 C33.5869811,13.8864699 28.9906222,12 24,12 C19.0113652,12 14.4157372,13.8892565 10.7679061,17.0340277 C7.89079843,19.5143632 6,22.560513 6,24 C6,25.4373739 7.89417932,28.4840318 10.774621,30.9655261 Z M32,24 C32,28.418278 28.418278,32 24,32 C19.581722,32 16,28.418278 16,24 C16,19.581722 19.581722,16 24,16 C28.418278,16 32,19.581722 32,24 Z M24,20 C21.790861,20 20,21.790861 20,24 C20,26.209139 21.790861,28 24,28 C26.209139,28 28,26.209139 28,24 L27,24 C25.3431458,24 24,22.6568542 24,21 L24,20 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">951,212</div>
                                                            <div class="label___2cvVl">Veces listado</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#fd523a">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.89442719,6.21372604 L8.89442719,8.21372604 C9.88238419,8.70770454 10.2828329,9.90905062 9.78885438,10.8970076 C9.29487588,11.8849646 8.0935298,12.2854133 7.10557281,11.7914348 L6,11.2479778 L6,36.7402513 L7.10557281,36.213726 C8.0935298,35.7197475 9.29487588,36.1201962 9.78885438,37.1081532 C10.2828329,38.0961102 9.88238419,39.2974563 8.89442719,39.7914348 L4.89442719,41.7914348 C3.56462501,42.4563359 2,41.4893445 2,40.0025804 L2,8.00258042 C2,6.51581638 3.56462501,5.54882495 4.89442719,6.21372604 Z M14.8944272,6.21372604 L18.8944272,8.21372604 C19.8823842,8.70770454 20.2828329,9.90905062 19.7888544,10.8970076 C19.2948759,11.8849646 18.0935298,12.2854133 17.1055728,11.7914348 L16,11.2479778 L16,36.7402513 L17.1055728,36.213726 C18.0935298,35.7197475 19.2948759,36.1201962 19.7888544,37.1081532 C20.2828329,38.0961102 19.8823842,39.2974563 18.8944272,39.7914348 L14.8944272,41.7914348 C13.564625,42.4563359 12,41.4893445 12,40.0025804 L12,8.00258042 C12,6.51581638 13.564625,5.54882495 14.8944272,6.21372604 Z M22,40.0025804 L22,8.00258042 C22,6.74048758 23.1546484,5.7939023 24.3922323,6.04141907 L44.3922323,10.0414191 C45.3270807,10.2283887 46,11.0492184 46,12.0025804 L46,36.0025804 C46,36.9559425 45.3270807,37.7767721 44.3922323,37.9637418 L24.3922323,41.9637418 C23.1546484,42.2112585 22,41.2646733 22,40.0025804 Z M42,13.6427171 L26,10.4607103 L26,37.5943773 L42,34.3595813 L42,13.6427171 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">915</div>
                                                            <div class="label___2cvVl">Vieron el teléfono</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#fd523a">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M27.0862654,2 C37.5320326,2 46,10.5065898 46,21 C46,23.9222925 45.3432603,26.6904957 44.1699581,29.1637931 L45.9009525,36.8938023 C46.3824839,39.0441513 45.0328893,40.3927584 42.8889894,39.9065541 L35.2071194,38.1644216 C33.3124168,39.0706564 31.2439903,39.6696282 29.0656888,39.8971968 C26.333325,43.5872736 21.9462443,45.9797184 17,45.9797184 C14.4648682,45.9797184 12.0766253,45.3512378 9.98277675,44.2416824 L4.88264057,45.8197559 C2.76681652,46.4744298 1.57364935,45.2899751 2.21892761,43.1699296 L3.77269255,38.0650739 C2.64155714,35.9576622 2,33.5486319 2,30.9898592 C2,25.952119 4.48681499,21.4948128 8.30061218,18.7769895 C9.39639753,9.33103332 17.3890912,2 27.0862654,2 Z M34.7396704,33.957747 L41.5119092,35.519725 L39.9829455,28.6919138 L40.5754169,27.442996 C41.5210434,25.4496345 42.0181611,23.2642843 42.0181611,21 C42.0181611,12.7157288 35.3329237,6 27.0862654,6 C20.366343,6 14.6832147,10.4592894 12.8092577,16.592846 C14.1392418,16.2068961 15.545443,16 17,16 C25.2842712,16 32,22.7111886 32,30.9898592 C32,32.5181111 31.7711443,33.992947 31.3458125,35.3820091 C32.0825217,35.1622484 34.7396704,33.957747 34.7396704,33.957747 Z M8.08540636,37.6555532 L7.0596541,40.9717371 L10.3802954,39.9452814 L11.8634166,40.7304324 C13.4315039,41.5605636 15.1797153,42 17,42 C23.0710218,42 28,37.0791967 28,31 C28,24.9208033 23.0710218,20 17,20 C10.9289782,20 6,24.9208033 6,31 C6,32.8437292 6.45089263,34.6132942 7.30121785,36.1959726 L8.08540636,37.6555532 Z M17,33 C15.8954305,33 15,32.1045695 15,31 C15,29.8954305 15.8954305,29 17,29 C18.1045695,29 19,29.8954305 19,31 C19,32.1045695 18.1045695,33 17,33 Z M23,33 C21.8954305,33 21,32.1045695 21,31 C21,29.8954305 21.8954305,29 23,29 C24.1045695,29 25,29.8954305 25,31 C25,32.1045695 24.1045695,33 23,33 Z M11,33 C9.8954305,33 9,32.1045695 9,31 C9,29.8954305 9.8954305,29 11,29 C12.1045695,29 13,29.8954305 13,31 C13,32.1045695 12.1045695,33 11,33 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">9%</div>
                                                            <div class="label___2cvVl">Envíos de email</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#fd523a">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8,9.9996152 C8,7.79068872 9.79642476,6 12.0000255,6 L43.9999745,6 C46.2091276,6 48,7.79412025 48,9.99683887 L48,30.0031611 C48,32.2105543 46.2037293,34 43.9947939,34 L40,34 L40,38.0031611 C40,40.2105543 38.2035752,42 35.9999745,42 L4.00002553,42 C1.79087243,42 0,40.2058797 0,38.0031611 L0,17.9968389 C0,15.7894457 1.79642476,14 4.00002553,14 L8,14 L8,9.9996152 Z M35.9999745,14 C38.2091276,14 40,15.7941203 40,17.9968389 L40,30 L43.9947939,30 C43.9979982,30 44,9.99683887 44,9.99683887 C44,10.0016353 12.0000255,10 12.0000255,10 C12.0016616,10 12.0012839,12.2535312 12.0007455,14 L35.9999745,14 Z M4,18 L4,38 L36,38 L36,18 L4,18 Z M6,33.0093689 C6,32.4519098 6.45097518,32 6.99077797,32 L11.009222,32 C11.5564136,32 12,32.4433532 12,33.0093689 L12,34.9906311 C12,35.5480902 11.5490248,36 11.009222,36 L6.99077797,36 C6.44358641,36 6,35.5566468 6,34.9906311 L6,33.0093689 Z M28,21.0093689 C28,20.4519098 28.4509752,20 28.990778,20 L33.009222,20 C33.5564136,20 34,20.4433532 34,21.0093689 L34,22.9906311 C34,23.5480902 33.5490248,24 33.009222,24 L28.990778,24 C28.4435864,24 28,23.5566468 28,22.9906311 L28,21.0093689 Z M20,34 C16.6862915,34 14,31.3137085 14,28 C14,24.6862915 16.6862915,22 20,22 C23.3137085,22 26,24.6862915 26,28 C26,31.3137085 23.3137085,34 20,34 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">+59%</div>
                                                            <div class="label___2cvVl">Aumenta tus ventas</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caseItem___2IlAV">
                                                <div class="content___Rhi-W">
                                                    <div class="creative___3Q-7n">
                                                        <div class="preview___1RBcc">
                                                            <div class="creativePreview___1UO0u creativeImage___ORT0a">
                                                                <img alt="Preview" class="image___8gO7p"
                                                                     src="/_clubs/assets/img/all/aspireSample.jpg"
                                                                     height="280"/></div>
                                                        </div>
                                                        <div class="info___39yI7">
                                                            <div class="brand___1X5nb">
                                                                <div class="brandLogo___1Okej"><img
                                                                        class="brandLogoImage___1thcG"
                                                                        src="/_clubs/assets/img/all/1Logo.jpg" height="32"/>
                                                                </div>
                                                                <div class="brandName___AoKVv" style="color:#931043">
                                                                    Mileroticos.com
                                                                </div>
                                                            </div>
                                                            <div class="caption___8YcAa">Mileroticos.com se especializa
                                                                en p&#225;ginas web de anuncios er&#243;ticos para
                                                                escorts o putas, travestis, masajes er&#243;ticos.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="statistic___ROn2a">
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#003b6b">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M39.83549,34.0044589 C35.4943607,37.7410675 29.9925391,40 24,40 C18.0082591,40 12.5069355,37.7375757 8.16385557,33.9960218 C4.48803142,30.8293072 2,26.8274787 2,24 C2,21.1720273 4.48411314,17.1700245 8.15610513,14.0044245 C12.4969785,10.2621861 17.99976,8 24,8 C30.0010391,8 35.5043145,10.2586929 39.8432405,13.9959871 C43.5175192,17.1607933 46,21.1627946 46,24 C46,26.8367098 43.5136018,30.8385397 39.83549,34.0044589 Z M10.774621,30.9655261 C14.425061,34.1103722 19.0198904,36 24,36 C28.9820968,36 33.5776597,34.1131583 37.2260335,30.9728361 C40.1080046,28.4921916 42,25.4470464 42,24 C42,22.5508402 40.1113808,19.5062017 37.2327482,17.026718 C33.5869811,13.8864699 28.9906222,12 24,12 C19.0113652,12 14.4157372,13.8892565 10.7679061,17.0340277 C7.89079843,19.5143632 6,22.560513 6,24 C6,25.4373739 7.89417932,28.4840318 10.774621,30.9655261 Z M32,24 C32,28.418278 28.418278,32 24,32 C19.581722,32 16,28.418278 16,24 C16,19.581722 19.581722,16 24,16 C28.418278,16 32,19.581722 32,24 Z M24,20 C21.790861,20 20,21.790861 20,24 C20,26.209139 21.790861,28 24,28 C26.209139,28 28,26.209139 28,24 L27,24 C25.3431458,24 24,22.6568542 24,21 L24,20 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">286,813</div>
                                                            <div class="label___2cvVl">Veces listado</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#003b6b">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.89442719,6.21372604 L8.89442719,8.21372604 C9.88238419,8.70770454 10.2828329,9.90905062 9.78885438,10.8970076 C9.29487588,11.8849646 8.0935298,12.2854133 7.10557281,11.7914348 L6,11.2479778 L6,36.7402513 L7.10557281,36.213726 C8.0935298,35.7197475 9.29487588,36.1201962 9.78885438,37.1081532 C10.2828329,38.0961102 9.88238419,39.2974563 8.89442719,39.7914348 L4.89442719,41.7914348 C3.56462501,42.4563359 2,41.4893445 2,40.0025804 L2,8.00258042 C2,6.51581638 3.56462501,5.54882495 4.89442719,6.21372604 Z M14.8944272,6.21372604 L18.8944272,8.21372604 C19.8823842,8.70770454 20.2828329,9.90905062 19.7888544,10.8970076 C19.2948759,11.8849646 18.0935298,12.2854133 17.1055728,11.7914348 L16,11.2479778 L16,36.7402513 L17.1055728,36.213726 C18.0935298,35.7197475 19.2948759,36.1201962 19.7888544,37.1081532 C20.2828329,38.0961102 19.8823842,39.2974563 18.8944272,39.7914348 L14.8944272,41.7914348 C13.564625,42.4563359 12,41.4893445 12,40.0025804 L12,8.00258042 C12,6.51581638 13.564625,5.54882495 14.8944272,6.21372604 Z M22,40.0025804 L22,8.00258042 C22,6.74048758 23.1546484,5.7939023 24.3922323,6.04141907 L44.3922323,10.0414191 C45.3270807,10.2283887 46,11.0492184 46,12.0025804 L46,36.0025804 C46,36.9559425 45.3270807,37.7767721 44.3922323,37.9637418 L24.3922323,41.9637418 C23.1546484,42.2112585 22,41.2646733 22,40.0025804 Z M42,13.6427171 L26,10.4607103 L26,37.5943773 L42,34.3595813 L42,13.6427171 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">773</div>
                                                            <div class="label___2cvVl">Vieron el teléfono</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#003b6b">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M27.0862654,2 C37.5320326,2 46,10.5065898 46,21 C46,23.9222925 45.3432603,26.6904957 44.1699581,29.1637931 L45.9009525,36.8938023 C46.3824839,39.0441513 45.0328893,40.3927584 42.8889894,39.9065541 L35.2071194,38.1644216 C33.3124168,39.0706564 31.2439903,39.6696282 29.0656888,39.8971968 C26.333325,43.5872736 21.9462443,45.9797184 17,45.9797184 C14.4648682,45.9797184 12.0766253,45.3512378 9.98277675,44.2416824 L4.88264057,45.8197559 C2.76681652,46.4744298 1.57364935,45.2899751 2.21892761,43.1699296 L3.77269255,38.0650739 C2.64155714,35.9576622 2,33.5486319 2,30.9898592 C2,25.952119 4.48681499,21.4948128 8.30061218,18.7769895 C9.39639753,9.33103332 17.3890912,2 27.0862654,2 Z M34.7396704,33.957747 L41.5119092,35.519725 L39.9829455,28.6919138 L40.5754169,27.442996 C41.5210434,25.4496345 42.0181611,23.2642843 42.0181611,21 C42.0181611,12.7157288 35.3329237,6 27.0862654,6 C20.366343,6 14.6832147,10.4592894 12.8092577,16.592846 C14.1392418,16.2068961 15.545443,16 17,16 C25.2842712,16 32,22.7111886 32,30.9898592 C32,32.5181111 31.7711443,33.992947 31.3458125,35.3820091 C32.0825217,35.1622484 34.7396704,33.957747 34.7396704,33.957747 Z M8.08540636,37.6555532 L7.0596541,40.9717371 L10.3802954,39.9452814 L11.8634166,40.7304324 C13.4315039,41.5605636 15.1797153,42 17,42 C23.0710218,42 28,37.0791967 28,31 C28,24.9208033 23.0710218,20 17,20 C10.9289782,20 6,24.9208033 6,31 C6,32.8437292 6.45089263,34.6132942 7.30121785,36.1959726 L8.08540636,37.6555532 Z M17,33 C15.8954305,33 15,32.1045695 15,31 C15,29.8954305 15.8954305,29 17,29 C18.1045695,29 19,29.8954305 19,31 C19,32.1045695 18.1045695,33 17,33 Z M23,33 C21.8954305,33 21,32.1045695 21,31 C21,29.8954305 21.8954305,29 23,29 C24.1045695,29 25,29.8954305 25,31 C25,32.1045695 24.1045695,33 23,33 Z M11,33 C9.8954305,33 9,32.1045695 9,31 C9,29.8954305 9.8954305,29 11,29 C12.1045695,29 13,29.8954305 13,31 C13,32.1045695 12.1045695,33 11,33 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">18%</div>
                                                            <div class="label___2cvVl">Envíos de email</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#003b6b">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8,9.9996152 C8,7.79068872 9.79642476,6 12.0000255,6 L43.9999745,6 C46.2091276,6 48,7.79412025 48,9.99683887 L48,30.0031611 C48,32.2105543 46.2037293,34 43.9947939,34 L40,34 L40,38.0031611 C40,40.2105543 38.2035752,42 35.9999745,42 L4.00002553,42 C1.79087243,42 0,40.2058797 0,38.0031611 L0,17.9968389 C0,15.7894457 1.79642476,14 4.00002553,14 L8,14 L8,9.9996152 Z M35.9999745,14 C38.2091276,14 40,15.7941203 40,17.9968389 L40,30 L43.9947939,30 C43.9979982,30 44,9.99683887 44,9.99683887 C44,10.0016353 12.0000255,10 12.0000255,10 C12.0016616,10 12.0012839,12.2535312 12.0007455,14 L35.9999745,14 Z M4,18 L4,38 L36,38 L36,18 L4,18 Z M6,33.0093689 C6,32.4519098 6.45097518,32 6.99077797,32 L11.009222,32 C11.5564136,32 12,32.4433532 12,33.0093689 L12,34.9906311 C12,35.5480902 11.5490248,36 11.009222,36 L6.99077797,36 C6.44358641,36 6,35.5566468 6,34.9906311 L6,33.0093689 Z M28,21.0093689 C28,20.4519098 28.4509752,20 28.990778,20 L33.009222,20 C33.5564136,20 34,20.4433532 34,21.0093689 L34,22.9906311 C34,23.5480902 33.5490248,24 33.009222,24 L28.990778,24 C28.4435864,24 28,23.5566468 28,22.9906311 L28,21.0093689 Z M20,34 C16.6862915,34 14,31.3137085 14,28 C14,24.6862915 16.6862915,22 20,22 C23.3137085,22 26,24.6862915 26,28 C26,31.3137085 23.3137085,34 20,34 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">+57%</div>
                                                            <div class="label___2cvVl">Aumenta tus ventas</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caseItem___2IlAV">
                                                <div class="content___Rhi-W">
                                                    <div class="creative___3Q-7n">
                                                        <div class="preview___1RBcc">
                                                            <div class="creativePreview___1UO0u creativeImage___ORT0a">
                                                                <img alt="Preview" class="image___8gO7p"
                                                                     src="/_clubs/assets/img/all/boxBoutiqueSample.jpg"
                                                                     height="280"/></div>
                                                        </div>
                                                        <div class="info___39yI7">
                                                            <div class="brand___1X5nb">
                                                                <div class="brandLogo___1Okej"><img
                                                                        class="brandLogoImage___1thcG"
                                                                        src="/_clubs/assets/img/all/1Logo.jpg" height="32"/>
                                                                </div>
                                                                <div class="brandName___AoKVv" style="color:#EC4018">
                                                                    Erosguia.com
                                                                </div>
                                                            </div>
                                                            <div class="caption___8YcAa">Erosguia lleva desde 2004
                                                                trabajando para ofrecer el portal de anuncios
                                                                clasificados con las mejores escorts y travestis. Siendo
                                                                una gran potencia en Barcelona y Madrid y con notable
                                                                presencia en el resto de Espa&#241;a.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="statistic___ROn2a">
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#000000">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M39.83549,34.0044589 C35.4943607,37.7410675 29.9925391,40 24,40 C18.0082591,40 12.5069355,37.7375757 8.16385557,33.9960218 C4.48803142,30.8293072 2,26.8274787 2,24 C2,21.1720273 4.48411314,17.1700245 8.15610513,14.0044245 C12.4969785,10.2621861 17.99976,8 24,8 C30.0010391,8 35.5043145,10.2586929 39.8432405,13.9959871 C43.5175192,17.1607933 46,21.1627946 46,24 C46,26.8367098 43.5136018,30.8385397 39.83549,34.0044589 Z M10.774621,30.9655261 C14.425061,34.1103722 19.0198904,36 24,36 C28.9820968,36 33.5776597,34.1131583 37.2260335,30.9728361 C40.1080046,28.4921916 42,25.4470464 42,24 C42,22.5508402 40.1113808,19.5062017 37.2327482,17.026718 C33.5869811,13.8864699 28.9906222,12 24,12 C19.0113652,12 14.4157372,13.8892565 10.7679061,17.0340277 C7.89079843,19.5143632 6,22.560513 6,24 C6,25.4373739 7.89417932,28.4840318 10.774621,30.9655261 Z M32,24 C32,28.418278 28.418278,32 24,32 C19.581722,32 16,28.418278 16,24 C16,19.581722 19.581722,16 24,16 C28.418278,16 32,19.581722 32,24 Z M24,20 C21.790861,20 20,21.790861 20,24 C20,26.209139 21.790861,28 24,28 C26.209139,28 28,26.209139 28,24 L27,24 C25.3431458,24 24,22.6568542 24,21 L24,20 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">110,973</div>
                                                            <div class="label___2cvVl">Veces listado</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#000000">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M4.89442719,6.21372604 L8.89442719,8.21372604 C9.88238419,8.70770454 10.2828329,9.90905062 9.78885438,10.8970076 C9.29487588,11.8849646 8.0935298,12.2854133 7.10557281,11.7914348 L6,11.2479778 L6,36.7402513 L7.10557281,36.213726 C8.0935298,35.7197475 9.29487588,36.1201962 9.78885438,37.1081532 C10.2828329,38.0961102 9.88238419,39.2974563 8.89442719,39.7914348 L4.89442719,41.7914348 C3.56462501,42.4563359 2,41.4893445 2,40.0025804 L2,8.00258042 C2,6.51581638 3.56462501,5.54882495 4.89442719,6.21372604 Z M14.8944272,6.21372604 L18.8944272,8.21372604 C19.8823842,8.70770454 20.2828329,9.90905062 19.7888544,10.8970076 C19.2948759,11.8849646 18.0935298,12.2854133 17.1055728,11.7914348 L16,11.2479778 L16,36.7402513 L17.1055728,36.213726 C18.0935298,35.7197475 19.2948759,36.1201962 19.7888544,37.1081532 C20.2828329,38.0961102 19.8823842,39.2974563 18.8944272,39.7914348 L14.8944272,41.7914348 C13.564625,42.4563359 12,41.4893445 12,40.0025804 L12,8.00258042 C12,6.51581638 13.564625,5.54882495 14.8944272,6.21372604 Z M22,40.0025804 L22,8.00258042 C22,6.74048758 23.1546484,5.7939023 24.3922323,6.04141907 L44.3922323,10.0414191 C45.3270807,10.2283887 46,11.0492184 46,12.0025804 L46,36.0025804 C46,36.9559425 45.3270807,37.7767721 44.3922323,37.9637418 L24.3922323,41.9637418 C23.1546484,42.2112585 22,41.2646733 22,40.0025804 Z M42,13.6427171 L26,10.4607103 L26,37.5943773 L42,34.3595813 L42,13.6427171 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">871</div>
                                                            <div class="label___2cvVl">Vieron el teléfono</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#000000">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M27.0862654,2 C37.5320326,2 46,10.5065898 46,21 C46,23.9222925 45.3432603,26.6904957 44.1699581,29.1637931 L45.9009525,36.8938023 C46.3824839,39.0441513 45.0328893,40.3927584 42.8889894,39.9065541 L35.2071194,38.1644216 C33.3124168,39.0706564 31.2439903,39.6696282 29.0656888,39.8971968 C26.333325,43.5872736 21.9462443,45.9797184 17,45.9797184 C14.4648682,45.9797184 12.0766253,45.3512378 9.98277675,44.2416824 L4.88264057,45.8197559 C2.76681652,46.4744298 1.57364935,45.2899751 2.21892761,43.1699296 L3.77269255,38.0650739 C2.64155714,35.9576622 2,33.5486319 2,30.9898592 C2,25.952119 4.48681499,21.4948128 8.30061218,18.7769895 C9.39639753,9.33103332 17.3890912,2 27.0862654,2 Z M34.7396704,33.957747 L41.5119092,35.519725 L39.9829455,28.6919138 L40.5754169,27.442996 C41.5210434,25.4496345 42.0181611,23.2642843 42.0181611,21 C42.0181611,12.7157288 35.3329237,6 27.0862654,6 C20.366343,6 14.6832147,10.4592894 12.8092577,16.592846 C14.1392418,16.2068961 15.545443,16 17,16 C25.2842712,16 32,22.7111886 32,30.9898592 C32,32.5181111 31.7711443,33.992947 31.3458125,35.3820091 C32.0825217,35.1622484 34.7396704,33.957747 34.7396704,33.957747 Z M8.08540636,37.6555532 L7.0596541,40.9717371 L10.3802954,39.9452814 L11.8634166,40.7304324 C13.4315039,41.5605636 15.1797153,42 17,42 C23.0710218,42 28,37.0791967 28,31 C28,24.9208033 23.0710218,20 17,20 C10.9289782,20 6,24.9208033 6,31 C6,32.8437292 6.45089263,34.6132942 7.30121785,36.1959726 L8.08540636,37.6555532 Z M17,33 C15.8954305,33 15,32.1045695 15,31 C15,29.8954305 15.8954305,29 17,29 C18.1045695,29 19,29.8954305 19,31 C19,32.1045695 18.1045695,33 17,33 Z M23,33 C21.8954305,33 21,32.1045695 21,31 C21,29.8954305 21.8954305,29 23,29 C24.1045695,29 25,29.8954305 25,31 C25,32.1045695 24.1045695,33 23,33 Z M11,33 C9.8954305,33 9,32.1045695 9,31 C9,29.8954305 9.8954305,29 11,29 C12.1045695,29 13,29.8954305 13,31 C13,32.1045695 12.1045695,33 11,33 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">12%</div>
                                                            <div class="label___2cvVl">Envíos de email</div>
                                                        </div>
                                                        <div class="caseStatisticItem___WL4Tk">
                                                            <div class="icon___3qNne" style="color:#000000">
                                                                <svg viewBox="0 0 48 48" fill="#000000" width="48"
                                                                     height="48" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8,9.9996152 C8,7.79068872 9.79642476,6 12.0000255,6 L43.9999745,6 C46.2091276,6 48,7.79412025 48,9.99683887 L48,30.0031611 C48,32.2105543 46.2037293,34 43.9947939,34 L40,34 L40,38.0031611 C40,40.2105543 38.2035752,42 35.9999745,42 L4.00002553,42 C1.79087243,42 0,40.2058797 0,38.0031611 L0,17.9968389 C0,15.7894457 1.79642476,14 4.00002553,14 L8,14 L8,9.9996152 Z M35.9999745,14 C38.2091276,14 40,15.7941203 40,17.9968389 L40,30 L43.9947939,30 C43.9979982,30 44,9.99683887 44,9.99683887 C44,10.0016353 12.0000255,10 12.0000255,10 C12.0016616,10 12.0012839,12.2535312 12.0007455,14 L35.9999745,14 Z M4,18 L4,38 L36,38 L36,18 L4,18 Z M6,33.0093689 C6,32.4519098 6.45097518,32 6.99077797,32 L11.009222,32 C11.5564136,32 12,32.4433532 12,33.0093689 L12,34.9906311 C12,35.5480902 11.5490248,36 11.009222,36 L6.99077797,36 C6.44358641,36 6,35.5566468 6,34.9906311 L6,33.0093689 Z M28,21.0093689 C28,20.4519098 28.4509752,20 28.990778,20 L33.009222,20 C33.5564136,20 34,20.4433532 34,21.0093689 L34,22.9906311 C34,23.5480902 33.5490248,24 33.009222,24 L28.990778,24 C28.4435864,24 28,23.5566468 28,22.9906311 L28,21.0093689 Z M20,34 C16.6862915,34 14,31.3137085 14,28 C14,24.6862915 16.6862915,22 20,22 C23.3137085,22 26,24.6862915 26,28 C26,31.3137085 23.3137085,34 20,34 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <div class="value___1nKhW">+60%</div>
                                                            <div class="label___2cvVl">Aumenta tus ventas</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="pageSection___DO-C- homepageSection___KmXBl isRevealed___39VSj"
                             style="max-height: 400px">
                            <div class="pageSectionTitle___3BR-9 slid">Trabajamos con siguientes portales</div>
                            <div class="pageSectionDescription___3DKfK homepageSectionDescription___2na7Y"><span></span>
                            </div>
                            <div>
                                <!-- <div class="toggleSwitch___3FVof w-25"><input type="radio" id="toggle-on" class="toggle___3LhGr toggleLeft___1uB5-" name="toggle" value="Brands" checked="" /><label for="toggle-on" class="btn___1P2Fv"><span
                                       class="labelText___3b4d2">Бренды</span></label>

                                     </div>-->
                            </div>
                            <div class="pageSection___DO-C- homepageSection___KmXBl isRevealed___39VSj">
                                <div class="partnerBrandsAnimatedLogosWrapper___Q4BEA"
                                     style="height: 130px;background-color:#fff">
                                    <div style="margin-right:-0px;width:calc(100% + 0px)"
                                         class="partnerBrandsAnimatedLogos___2xt9o hasLeftShadow___Xjt5W hasRightShadow___9TpNe partnerBrandsAnimatedLogosInversed___2i-is brands">
                                        <!-- <div class="partnerFirstElement___1MbBl">
                                          <div class="partnerBrandLogo___2uzue"><img alt="Ideal Flatmate" class="partnerBrandLogoImage___1wVyD" src="_next/static/IdealFlatmate.png" /></div>
                                        </div> -->
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/1.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/2.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/3.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/4.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/5.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/6.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/7.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/8.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/9.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/10.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/11.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="partnerBrandsAnimatedLogosWrapper___Q4BEA"
                                     style="height: 130px;background-color:#fff">
                                    <div style="margin-right:-0px;width:calc(100% + 0px)"
                                         class="partnerBrandsAnimatedLogos___2xt9o hasLeftShadow___Xjt5W hasRightShadow___9TpNe partnerBrandsAnimatedLogosInversed___2i-is brands">
                                        <!-- <div class="partnerFirstElement___1MbBl">
                                          <div class="partnerBrandLogo___2uzue"><img alt="Bolt" class="partnerBrandLogoImage___1wVyD" src="_next/static/Bolt.png" /></div>
                                        </div> -->
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/12.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/13.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/14.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/15.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/16.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/17.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/18.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/19.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/20.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/21.png"/>
                                        </div>
                                        <div class="partnerBrandLogo___2uzue"><img class="partnerBrandLogoImage___1wVyD"
                                                                                   src="/_clubs/assets/img/partners/22.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <style>


                            .partnerBrandLogo___2uzue {
                                display: flex;
                                flex-shrink: 0;
                                align-items: center;
                                justify-content: center;
                                width: 15rem;
                                height: 6rem;
                                margin: 2rem 1rem
                            }

                            @media (min-width: 768px) {
                                .partnerBrandLogo___2uzue {
                                    width: 25rem;
                                    height: 7rem;
                                    margin: 6rem
                                }
                            }

                            .isServerRender___3ZViJ {
                                height: 50%
                            }

                            @media (min-width: 768px) {
                                .isServerRender___3ZViJ {
                                    height: 75%
                                }
                            }

                            .partnerBrandLogoImage___1wVyD {
                                max-height: 100%;
                                width: auto
                            }

                            .partnerBrandLogoImage___1wVyD.shouldFade___25qoF {
                                opacity: 0
                            }

                            .partnerBrandLogoImage___1wVyD.fadeIn___2pnvu {
                                animation: fadein___2xSUl 1s ease forwards
                            }

                            @keyframes fadein___2xSUl {
                                0% {
                                    opacity: 0
                                }

                                to {
                                    opacity: 1
                                }
                            }

                            .partnerBrandsLogos___18LXb {
                                display: flex;
                                flex-wrap: wrap;
                                justify-content: center
                            }

                            .horizontalRelation___120MV {
                                max-width: 100%;
                                width: auto
                            }

                            .verticalRelation___1mwXJ {
                                max-height: 100%;
                                width: auto
                            }

                            .partnerBrandsAnimatedLogos___2xt9o {
                                display: flex
                            }

                            .partnerBrandsAnimatedLogos___2xt9o.hasLeftShadow___Xjt5W:before {
                                content: "";
                                position: absolute;
                                z-index: 1;
                                top: 0;
                                left: 0;
                                width: 15%;
                                height: 100%;
                                pointer-events: none
                            }

                            .partnerBrandsAnimatedLogos___2xt9o.hasRightShadow___9TpNe:after {
                                content: "";
                                position: absolute;
                                z-index: 1;
                                top: 0;
                                right: 0;
                                width: 15%;
                                height: 100%;
                                pointer-events: none
                            }

                            .partnerBrandsAnimatedLogosInversed___2i-is {
                                flex-direction: row-reverse
                            }

                            .partnerBrandsAnimatedLogosWrapper___Q4BEA {
                                width: 100%;
                                overflow: hidden
                            }

                            .partnerFirstElement___1MbBl {
                                margin: 0
                            }

                            .toggleSwitch___3FVof {
                                display: flex;
                                width: 49rem;
                                margin: 4rem auto;
                                border-radius: 5rem;
                                box-shadow: 0 40px 50px 0 rgba(0, 0, 0, .1);
                                background-color: var(--color-almeja-white)
                            }


                        </style>


                        <!--div
                            class="pageSection___yvJAt getOnBoard___15W_V spec-landing-get-on-board-section isRevealable___3BHkV isRevealed___22RRK">
                            <div class="pageSectionTitle___3BR-9"></div>
                            <div class="content___s6hxn">
                                <div class="samplesGrid___2pT4o">
                                    <div class="samplesGridTitle___k5uBo"><span>Aún tienes dudas??</span></div>
                                    <div class="samplesGridItems___1J8Gd">
                                        <div
                                            class="samplesGridItem___23DZ6 spec-landing-get-on-board-sample-get-presentation">
                                            <a class="link___3B3Hd" href="#" target="_blank"
                                               style="text-decoration: none">
                                                <div class="iconsSet___16dlv">
                                                    <svg viewBox="0 0 48 48" width="48" height="48"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M 19.771 26.915 L 22.008 29.153 L 22.008 6.001 C 22.008 4.896 22.895 4 24.008 4 C 25.112 4 26.008 4.896 26.008 6.001 L 26.008 29.153 L 28.244 26.915 C 29.029 26.131 30.292 26.122 31.079 26.909 C 31.86 27.691 31.855 28.962 31.073 29.745 L 25.428 35.392 C 25.032 35.787 24.521 35.982 24.009 35.981 C 23.497 35.985 22.986 35.79 22.593 35.398 C 22.589 35.394 16.943 29.745 16.943 29.745 C 16.158 28.96 16.15 27.696 16.937 26.909 C 17.718 26.128 18.989 26.133 19.771 26.915 Z M 36 39.999 L 36 33.996 C 36 32.891 36.895 31.995 38 31.995 C 39.105 31.995 40 32.891 40 33.996 L 40 39.999 C 40 42.205 38.208 44 36.009 44 L 11.991 44 C 9.784 44 8 42.213 8 39.999 L 8 33.996 C 8 32.891 8.895 31.995 10 31.995 C 11.105 31.995 12 32.891 12 33.996 L 11.991 39.998 L 36 39.999 Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="title___TGhfe">Descarga nuestra presentación</div>
                                                <div class="content___1MiK_">Consigue un pdf con la información sobre
                                                    funcionamiento de la web.
                                                </div>
                                            </a></div>


                                    </div>
                                </div>
                            </div>
                        </div-->
                    </div>
                    <footer class="footer___-vJaV spec-app-landing-footer">
                        <div class="company___28we6">


                        </div>
                        <div class="links___3p36H">
                            <nav class="secondaryNavigation___3e7GY">
                                <div class="secondaryNavigationItem___KRXjT"><a
                                        class="textLink___2xdIB control___1PefA spec-app-landing-footer-item-terms-link sandTheme___rY_mN hasUnderline___2g4G2"
                                        href="/download/policy.pdf" target="_blank">Términos de uso</a></div>
                                <div class="secondaryNavigationItem___KRXjT"><a
                                        class="textLink___2xdIB control___1PefA spec-app-landing-footer-item-privacy-link sandTheme___rY_mN hasUnderline___2g4G2"
                                        href="/download/policy.pdf" target="_blank">Politica de privacidad</a></div>
                                <div class="secondaryNavigationItem___KRXjT"><a
                                        class="textLink___2xdIB control___1PefA spec-app-landing-footer-item-cookie-link sandTheme___rY_mN hasUnderline___2g4G2"
                                        href="/download/policy.pdf" target="_blank">Politica de Cookie</a>
                                </div>
                            </nav>
                            <div class="support___2KWZQ">Tienes preguntas? Escribenos al: clubs@almejarosa.com</div>
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
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <script src="/_clubs/assets/js/page2.js" async=""></script>
    <script>
        $('.primers').slick({
            arrows: true,
            infinite: true,
// speed: 15500,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            autoplay: true,
            // cssEase: 'linear',
            autoplaySpeed: 3000,
            prevArrow: '<div class="scrollControl___1zcNs scrollControl___1w80s leftDirection___3IEaY"><div class="control___3GFPs"><svg viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="icon___16PWK"><path d="M 11.188 15.671 L 6.356 10.668 C 5.983 10.295 5.983 9.689 6.356 9.315 C 6.729 8.942 7.336 8.942 7.708 9.315 L 11.863 13.655 L 16.066 9.384 C 16.441 9.01 17.046 9.01 17.421 9.384 C 17.794 9.757 17.794 10.363 17.421 10.736 L 12.541 15.671 C 12.166 16.045 11.561 16.045 11.188 15.671 Z" transform="matrix(0, 1, -1, 0, 24.381874, 0.604875)"></path></svg></div></div>',
            nextArrow: '<div class="scrollControl___1zcNs scrollControl___1w80s rightDirection___3IEaY"><div class="control___3GFPs rightDirection___3IEaY"><svg viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="icon___16PWK"><path d="M 11.188 15.671 L 6.356 10.668 C 5.983 10.295 5.983 9.689 6.356 9.315 C 6.729 8.942 7.336 8.942 7.708 9.315 L 11.863 13.655 L 16.066 9.384 C 16.441 9.01 17.046 9.01 17.421 9.384 C 17.794 9.757 17.794 10.363 17.421 10.736 L 12.541 15.671 C 12.166 16.045 11.561 16.045 11.188 15.671 Z" transform="matrix(0, -1, 1, 0, -0.604875, 24.381874)"></path></svg></div></div>',
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
                    // settings: "unslick"
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                }

                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.otzv').slick({
            arrows: true,
            infinite: true,
// speed: 15500,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
// autoplay: true,
// cssEase: 'linear',
            autoplaySpeed: 0,
            prevArrow: '<div class="scrollControl___1zcNs scrollControl___3zvWZ leftDirection___3IEaY"><div class="control___3GFPs"><svg viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="icon___16PWK"><path d="M 11.188 15.671 L 6.356 10.668 C 5.983 10.295 5.983 9.689 6.356 9.315 C 6.729 8.942 7.336 8.942 7.708 9.315 L 11.863 13.655 L 16.066 9.384 C 16.441 9.01 17.046 9.01 17.421 9.384 C 17.794 9.757 17.794 10.363 17.421 10.736 L 12.541 15.671 C 12.166 16.045 11.561 16.045 11.188 15.671 Z" transform="matrix(0, 1, -1, 0, 24.381874, 0.604875)"></path></svg></div></div>',
            nextArrow: '<div class="scrollControl___1zcNs scrollControl___3zvWZ rightDirection___3IEaY"><div class="control___3GFPs rightDirection___3IEaY"><svg viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="icon___16PWK"><path d="M 11.188 15.671 L 6.356 10.668 C 5.983 10.295 5.983 9.689 6.356 9.315 C 6.729 8.942 7.336 8.942 7.708 9.315 L 11.863 13.655 L 16.066 9.384 C 16.441 9.01 17.046 9.01 17.421 9.384 C 17.794 9.757 17.794 10.363 17.421 10.736 L 12.541 15.671 C 12.166 16.045 11.561 16.045 11.188 15.671 Z" transform="matrix(0, -1, 1, 0, -0.604875, 24.381874)"></path></svg></div></div>',
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
        $('.main').slick({
            arrows: false,
            infinite: true,
            speed: 3500,
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
            // autoplay: true,
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

    <script src="{{asset('_clubs/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!-- Slick Slider JS -->
    <script src="{{asset('_clubs/assets/js/slick.min.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{asset('_clubs/assets/js/plugins.js')}}"></script>
    <!-- main JS -->
    <script src="{{asset('_clubs/assets/js/main.js')}}"></script>

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
