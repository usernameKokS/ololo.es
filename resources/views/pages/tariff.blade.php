@extends('layouts.master')

@section('content')
    <section>
        <div class="tariff">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="tarif-svg">

                        </div>
                        <div class="tariff_name-area">
							@if($postid > 0)
							<h1>Elige tu plan</h1>
							@else
                            <h1>Elije Tu Plan</h1>
							@endif
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <iframe width="100%" class="frame-video" style="z-index: 1;"
                                src="https://drive.google.com/file/d/17xaaZlVYKIbdRqR0xaANufGjLThrhv5I/preview" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
			
            <div class="plans">
                <div class="container">
                    @include('pages.blocks.tariffs', ['showPrices' => true, 'coor' => isset($coor) ? $coor : false, 'postid' => isset($postid) ? $postid : false])
                    @if(isset($_SERVER['HTTP_REFERER']) && !strstr($_SERVER['HTTP_REFERER'], '/create'))
                        @if(auth()->user()->entity && isset($isDelete))
                            <coor />
                        @endif
                    @endif
                </div>
            </div>

			<div class="container__banner">
				<div class="banner__block">
					<div class="text__top">
						COMPRA UNA TARIFA AHORA MISMO Y TE REGALAMOS UNA PÁGINA WEB GRATIS
					</div>
					<div class="block_elements">
						<div class="block_counterdown"></div>
						<div class="block_information">
							<div class="gift_icon"><span></span></div>
							<div class="gift_text">
								<span>PAGINA WEB DE</span>
								<span>REGALO</span>
							</div>
							<div class="gift_icon"><span></span></div>
						</div>
					</div>
					<div class="text__bottom">
						*El precio de la página web sin oferta es de 100 Euros
					</div>
				</div>
			</div>
			<div class="faq fix-index">
				<div class="container container-two">
					<carusel></carusel>
				</div>
			</div>
        </div>
    </section>
@endsection

@section('footer_script')
    @parent

    <style>
        .container__banner
        {
            max-width: 1170px;
            margin: 15px auto;
        }
        .banner__block .text__top,
        .banner__block .text__bottom
        {
            background-color: #fe6885;
            text-align: center;
            color: #ffffff;
        }

        .banner__block .text__top
        {
            padding: 15px;
            font-size: 1.5rem;
        }

        .banner__block .text__bottom
        {
            padding: 5px;
        }

        .banner__block .block_elements .block_information
        {
            background-color: #fcff00;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .banner__block .block_elements .block_information .gift_icon
        {
            
            width: 15%;
            height: 100%;
            margin: 0 5%;
            transform: skew(-15deg); 
            -ms-transform: skew(-15deg); /* IE 9 */
            -webkit-transform: skew(-15deg); /* Safari and Chrome */
            background: #ffffff;
        }

        .banner__block .block_elements .block_information .gift_icon span
        {
            display: block;
            width: 100%;
            height: 100%;
            background: url('/img/gift_icon.png') center center no-repeat;
            transform: skew(15deg); 
            -ms-transform: skew(15deg); /* IE 9 */
            -webkit-transform: skew(15deg); /* Safari and Chrome */
        }

        .banner__block .block_elements .block_information .gift_text
        {
            width: 65%;
        }

        .banner__block .block_elements .block_information .gift_text span
        {
            display: block;
            font-size: 2rem;
            line-height: 2rem;
            color: #fe6885;
        }

        .banner__block .block_elements
        {
            display: flex;
            justify-content: center;
        }

        .banner__block .block_elements .block_counterdown,
        .banner__block .block_elements .block_information
        {
            width: 50%;
            display: flex;
            justify-content: center;
            padding: 10px 0 5px 0;
        }
        
        .banner__block .block_elements .block_information
        {
            padding: 0;
            height: 121px;
        }

        @media (max-width: 991.98px)
        {
            .container__banner
            {
                max-width: 991px;
                margin: 0 auto 100px auto;
            }

            .banner__block .block_elements {
                flex-direction: column;
            }

            .banner__block .block_elements .block_counterdown,
            .banner__block .block_elements .block_information
            {
                width: 100%;
            }
        }

        .countDown__cont {
            font-family: Lato, Arial, Gadget, sans-serif;
            font-size: 13px;
            display: flex;
            color: #333
        }

        .countDown__interval_cont {
            display: flex;
            justify-content: space-around;
            width: auto
        }

        .countDown__interval_cont:nth-child(n+1):not(:last-child) {
            margin-right: 1em
        }

        .countDown__interval_basic_cont {
            display: flex;
            flex-direction: column
        }

        .countDown__interval_basic_cont_description {
            margin-left: .3em;
            margin-top: .3em;
            font-size: 1.2em;
            font-weight: 700;
            color: #2e2e2e;
            text-align: center;
        }

        .countDown__digit_cont {
            perspective: 1.6em * 2;
            box-shadow: .1em .1em .1em rgba(0, 0, 0, .2);
            width: 1em;
            height: 1.2em;
            position: relative;
            line-height: 1.2em;
            font-size: 5em;
            font-weight: 700;
            border-radius: .08em
        }
		
		@media (min-width: 991.98px)
		{
			.countDown__digit_cont
			{
				width: 0.85em;
			}
		}
		
		@media (min-width: 1185px)
		{
			.countDown__digit_cont
			{
				width: 1em;
			}
		}
		
		@media (max-width: 595px)
		{
			.countDown__digit_cont
			{
				width: 0.80em;
			}
		}
		
		@media (max-width: 480px)
		{
			.countDown__digit_cont
			{
				width: 0.60em;
				height: 1em;
				line-height: 1em;
			}
			
			.banner__block .text__top
			{
				padding: 10px;
				font-size: 1.2rem;
			}
			
			.banner__block .block_elements .block_information .gift_text span
			{
				font-size: 1.5rem;
				line-height: 1.5rem;
			}
		}
		
		@media (max-width: 390px)
		{
			.countDown__interval_basic_cont
			{
				-ms-flex: 0 0 30%;
				flex: 0 0 30%;
				max-width: 50%;
			}
			
			.countDown__cont
			{
				flex-wrap: wrap;
				justify-content: center;
			}
			
			.countDown__digit_cont {
					width: 1em;
					height: 1.2em;
					line-height: 1.2em;
			}
		}
		
        .countDown__digit_cont:nth-child(n+1):not(:last-child) {
            margin-right: .05em
        }

        .countDown__digit_last_placeholder,
        .countDown__digit_new_placeholder {
            position: absolute;
            left: 0;
            width: 100%;
            height: 50%;
            text-align: center;
            overflow: hidden
        }

        .countDown__digit_last_placeholder {
            bottom: 0;
            background: #fff;
            border-radius: 0 0 .08em .08em
        }

        .countDown__digit_last_placeholder_inner {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: 50%;
            position: absolute
        }

        .countDown__digit_new_placeholder {
            top: 0;
            background: #f7f7f7;
            border-radius: .08em .08em 0 0
        }

        .countDown__digit_last_rotate,
        .countDown__digit_new_rotate {
            display: flex;
            justify-content: center;
            width: 100%;
            height: 50%;
            font-weight: 700;
            position: absolute;
            top: 0;
            overflow: hidden;
            animation-duration: .4s;
            animation-timing-function: linear;
            border-radius: .08em .08em 0 0;
            animation-fill-mode: forwards;
            transform-origin: 100% 100%
        }

        .countDown__digit_last_rotate:after,
        .countDown__digit_new_rotate:after {
            content: "";
            position: absolute;
            z-index: -1;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            border-bottom: .01em solid rgba(0, 0, 0, .1)
        }

        .countDown__digit_last_rotate {
            animation-name: countDown_flip_1;
            background: #f7f7f7
        }

        .countDown__digit_new_rotate {
            animation-name: countDown_flip_2;
            background: #fff
        }

        .countDown__digit_new_rotated {
            transform: rotateX(180deg);
            width: 100%;
            height: 100%
        }

        .countDown__digit_new_rotated_inner {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: 50%;
            position: absolute
        }

        @keyframes countDown_flip_1 {
            0% {
                transform: rotateX(0);
                z-index: 1
            }
            100% {
                transform: rotateX(-180deg);
                z-index: 0
            }
        }

        @keyframes countDown_flip_2 {
            0% {
                transform: rotateX(0);
                z-index: 0
            }
            100% {
                transform: rotateX(-180deg);
                z-index: 1
            }
        }
    </style>
    <script src="/js/countDown.min.js"></script>
    @php
        $sessionCountdownTime = session('sessionCountdownTime');
        
        if(!$sessionCountdownTime)
        {
            $sessionCountdownTime = mktime(0, 0, 0, date('n'), date('j') + 3) * 1000;
            session('sessionCountdownTime', $sessionCountdownTime);
        }

        if($sessionCountdownTime <= (mktime(0, 0, 0, date('n'), date('j')) * 1000))
            $sessionCountdownTime = mktime(0, 0, 0, date('n'), date('j') + 3) * 1000;
    @endphp
    <script>
        var cd = new Countdown({
            cont: document.querySelector('.block_counterdown'),
            date: <?=$sessionCountdownTime?>,
            outputTranslation: {
                day: 'Días',
                hour: 'Horas',
                minute: 'Minutos',
                second: 'Segundos',
            },
            endCallback: null,
            outputFormat: 'day|hour|minute|second',
        });
        cd.start();
    </script>
@endsection