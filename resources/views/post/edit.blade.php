@extends('layouts.master')

@section('content')

<section class="edit-page">
    <div class="container container-two">
        <div class="wrap-title">
            <img src="{{asset('img/penpink.jpg')}}" alt="Edit" class="title-img">
            <h1 class="page-title">Modificar anuncio</h1>
            <a href="{{isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/posts'}}" class="btn btn-normal disable-desk btn_green-hover" >
                <div>
                    <img src="/img/return.svg" alt="espalda"><span>VOLVER</span>
                </div>
            </a>
        </div>
    </div>
    <div class="faux-borders-2">
    </div>
    <br>
{{--    <div class="container container-two">--}}
{{--        <div class="wrap-desc">--}}
{{--            <div class="disable-mobile wrap-btn-mobile">--}}
{{--                <div class="wrap-btn-mobile-inline">--}}
{{--                    <a href="/" class="btn btn-normal btn_green-hover" >--}}
{{--                        <div>--}}
{{--                            <img src="/img/return.svg" alt="espalda"><span>espalda</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
</section>
@if(!$isCanEdit)
<div class="container">
    <div class="alert alert-info text-center">
        Durante la tarifa  solo puedes modificar tus anncios una vez. Te queda <b>{{$countModify}}</b> modificacion/es.
    </div>
</div>
@endif
<postcreate :user="{{ $user }}" :cats="{{ $cats }}" :post="{{ $post }}"
:oldrates="{{ $rates }}"
:oldservices="{{ $services }}"
:oldreminds="{{ $remains }}"
:places="{{ $places }}"
:edit="true"
></postcreate>


@endsection
