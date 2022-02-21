@php
	$tariffs = [
        'pasion.com de pago' => ['silver' => 1, 'gold' => 3, 'diamond' => 7],
        'mileroticos.com' => ['silver' => 1, 'gold' => 1, 'diamond' => 2],
        'sustitutas.com' => ['silver' => 1, 'gold' => 1, 'diamond' => 2],
        'destacamos.com' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
        'mundosexanuncio.com' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
        'adultguia.com' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
        'hott.es' => ['silver' => 3, 'gold' => 6, 'diamond' => 9],
        'sexobarato.es' => ['silver' => 3, 'gold' => 6, 'diamond' => 9],
        'loquovip.com' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
        'locanto.es' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
        'guialumi.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'sexoyrelax.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'coneroticas.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 8],
        'eanuncios.com' => ['silver' => 3, 'gold' => 6, 'diamond' => 9],
        'ociosexual.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'milanunciosex.com' => ['silver' => 3, 'gold' => 6, 'diamond' => 9],
        'milescorts.es' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'eroticosvip.com' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
        'eroschanel.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'sexandsex.es' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'ardienteplacer.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'contactos.clasf.es' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'mundoanuncioerotico.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 8],
        'anunciotic.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'sexlist.club' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'trilly.sexy' => ['silver' => 2, 'gold' => 4, 'diamond' => 9],
        'publierotico.com' => ['silver' => 1, 'gold' => 1, 'diamond' => 1],
        'mundisexanuncia.com' => ['silver' => 1, 'gold' => 1, 'diamond' => 1],
        'sexmundoanuncio.com' => ['silver' => 1, 'gold' => 1, 'diamond' => 1],
        'tusamantes.es' => ['silver' => 1, 'gold' => 1, 'diamond' => 1],
        'viperoticos.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 8],
        'wanuncios.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 8],
        'pasionycontactos.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'gratelo.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 8],
        'elfolletin.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 8],
        'minoma.es' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'escortbook.com' => ['silver' => 1, 'gold' => 1, 'diamond' => 1],
        'escort-advisor.com' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
        'radarsex.es' => ['silver' => 2, 'gold' => 4, 'diamond' => 8],
        'skokka.com' => ['silver' => 0, 'gold' => 1, 'diamond' => 2],

        'putianuncio.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'iberotico.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'reinodelsexo.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'rollingescorts.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6],
        'discretisimas.com' => ['silver' => 2, 'gold' => 4, 'diamond' => 6]
    ];

    $favoriteTariffs = [
        'pasion.com de pago' => ['silver' => 1, 'gold' => 3, 'diamond' => 7],
        'mileroticos.com' => ['silver' => 1, 'gold' => 1, 'diamond' => 2],
        'sustitutas.com' => ['silver' => 1, 'gold' => 1, 'diamond' => 2],
        'destacamos.com' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
        'mundosexanuncio.com' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
        'adultguia.com' => ['silver' => 1, 'gold' => 2, 'diamond' => 3],
    ];

    $tariffData = [
        'silver' => [
            'text' => 'Cantidad de anuncios gratuitos auto-renovables 24 horas',
            'cost_portals' => ['Pasion.com DE PAGO' => 1, 'mundosexanuncio.com' => 1]
        ],
        'gold' => [
            'text' => 'Cantidad de anuncios gratuitos auto-renovables',
            'cost_portals' => ['Pasion.com DE PAGO' => 3, 'mundosexanuncio.com' => 2, 'Nuevoloquo.com' => 1, 'Slumi.com' => 1]
        ],
        'diamond' => [
            'text' => 'Cantidad de anuncios gratuitos auto-renovables',
            'cost_portals' => ['Pasion.com DE PAGO' => 7, 'mundosexanuncio.com' => 3, 'Nuevoloquo.com' => 3, 'Slumi.com' => 1, 'Erosguia.com' => 1]
        ]
    ];
@endphp
<tariffdetail plan="silver" :tariffs="{{ json_encode($tariffs) }}" :tariffdata="{{ json_encode($tariffData) }}"></tariffdetail>
<tariffdetail plan="gold" :tariffs="{{ json_encode($tariffs) }}" :tariffdata="{{ json_encode($tariffData) }}"></tariffdetail>
<tariffdetail plan="diamond" :tariffs="{{ json_encode($tariffs) }}" :tariffdata="{{ json_encode($tariffData) }}"></tariffdetail>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="plan-item plan-item__silver">
            <div class="plan-image__border plan-image__border__silver">

            </div>
            <div class="plan-image plan-image__silver">

            </div>
            <div class="plan-content plan-content-after-line">
                <div class="plan-title plan-title__silver">
                    <span class="plan-name">Silver</span><br/>
                    <span class="plan-des">Tarifa </span>
                </div>
                <div class="tariff-subtitle">
                    {{$tariffData['silver']['text']}}
                </div>
                <div class="plan-list">
                    @foreach($favoriteTariffs as $site => $tariff)
                        @if($tariff['silver'] > 0)
                        <div class="plan-list__item">
                            <span>{{$tariff['silver']}}</span> {{$site}}
                        </div>
                        @endif
                    @endforeach
                    <a href="#" id="buttonShowMoresilver" class="show-more-link">ver más portales...</a>
                </div>
                <div class="tariff-subtitle">
                    Anuncios de PAGO auto-renovables
                </div>
                @foreach($tariffData['silver']['cost_portals'] as $domain => $count)
                <div class="plan-btns first-plan-btns">
                    <div class="plan-btn__wrapper plan-btn__wrapper__silver">
                        <div class="plan-btn plan-btn__diamond btn-cross-plan">
                            <div class="cross-n">{{$count}}</div>
                            {{$domain}}
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="plan-price-area">
                <div class="plan-price">
                    29.99€ / 7 días
                </div>
                @if($showPrices)
                    @if(!$coor)
                        <div class="form-plan-submit form-plan-submit__silver">
                            <a class="button" href="/tariff/{{ $postid }}/silver">
                                comprar
                            </a>
                        </div>
                        <!--tariffpay :post_id={{ $postid }} plan="silver" :recommended=false></tariffpay-->
                    @endif
                @endif
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="plan-item plan-item__gold">
            <div class="plan-image__border plan-image__border__gold">

            </div>
            <div class="plan-image plan-image__gold">

            </div>
            <div class="plan-content">
                <div class="plan-title plan-title__gold">
                    <span class="plan-name">Gold</span><br/>
                    <span class="plan-des">Tarifa </span>
                </div>
                <div class="tariff-subtitle">
                    {{$tariffData['gold']['text']}}
                </div>
                <div class="plan-list">
                    @foreach($favoriteTariffs as $site => $tariff)
                    <div class="plan-list__item">
                        <span>{{$tariff['gold']}}</span> {{$site}}
                    </div>
                    @endforeach
                    <a href="#" id="buttonShowMoregold" class="show-more-link">ver más portales...</a>
                </div>
                <div class="tariff-subtitle">
                    Anuncios de PAGO auto-renovables
                </div>
                @foreach($tariffData['gold']['cost_portals'] as $domain => $count)
                <div class="plan-btns first-plan-btns">
                    <div class="plan-btn__wrapper plan-btn__wrapper__silver">
                        <div class="plan-btn plan-btn__gold btn-cross-plan">
                            <div class="cross-n">{{$count}}</div>
                            {{$domain}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="plan-price-area">
                <div class="plan-price">
                    99.95€ / 7 días
                </div>
                @if($showPrices)
                    @if(!$coor)
                        <div class="form-plan-submit form-plan-submit__gold">
                            <a class="button" href="/tariff/{{ $postid }}/gold">
                                comprar
                            </a>
                            <div class="recomended">
                                recomendado
                            </div>
                        </div>
                        <!--tariffpay :post_id={{ $postid }} plan="gold" :recommended=true></tariffpay-->
                    @endif
                @endif
            </div>
        </div>

    </div>
    <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="plan-item plan-item__silver">
            <div class="plan-image__border plan-image__border__diamond">

            </div>
            <div class="plan-image plan-image__diamond">

            </div>
            <div class="plan-content">
                <div class="plan-title plan-title__diamond">
                    <span class="plan-name">DIAMOND</span><br/>
                    <span class="plan-des">Tarifa </span>
                </div>
                <div class="tariff-subtitle">
                    {{$tariffData['diamond']['text']}}
                </div>
                <div class="plan-list">
                    @foreach($favoriteTariffs as $site => $tariff)
                    <div class="plan-list__item">
                        <span>{{$tariff['diamond']}}</span> {{$site}}
                    </div>
                    @endforeach
                    <a href="#" id="buttonShowMorediamond" class="show-more-link">ver más portales...</a>
                </div>
                <div class="tariff-subtitle">
                    Anuncios de PAGO auto-renovables
                </div>
                @foreach($tariffData['diamond']['cost_portals'] as $domain => $count)
                <div class="plan-btns first-plan-btns">
                    <div class="plan-btn__wrapper plan-btn__wrapper__silver">
                        <div class="plan-btn plan-btn__diamond btn-cross-plan">
                            <div class="cross-n">{{$count}}</div>
                            {{$domain}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="plan-price-area">
                <div class="plan-price">
                    299.95€ / 7 días
                </div>
                @if($showPrices)
                    @if(!$coor)
                        <div class="form-plan-submit form-plan-submit__diamond">
                            <a class="button" href="/tariff/{{ $postid }}/diamond">
                                comprar
                            </a>
                        </div>
                        <!--tariffpay :post_id={{ $postid }} plan="diamond" :recommended=false></tariffpay-->
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>