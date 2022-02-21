@extends('layouts.master')

@section('style')

@endsection

@section('content')

<section class="edit-page">
    <div class="container container-two">
        <div class="wrap-title">
            <img src="{{asset('img/pengreen.jpg')}}" alt="Edit" class="title-img">
            <h1 class="page-title">PUBLICAR ANUNCIO</h1>
            <a href="{{isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/posts'}}" class="btn btn-normal disable-desk btn_green-hover non-fixed-btn1" >
                <div>
                    <img src="/img/return.svg" alt="espalda"><span>volver</span>
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
{{--                    <a href="/" class="btn btn-normal btn_green-hover non-fixed-btn1" >--}}
{{--                        <div>--}}
{{--                            <img src="/img/return.svg" alt="espalda"><span>volver</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
</section>

<postcreate :user="{{ $user }}" :cats="{{ $cats }}" :post="{{ $post }}"
:oldrates="{{ $rates }}"
:oldservices="{{ $services }}"
:oldreminds="{{ $remains }}"
:places="{{ $places }}"
:edit="false"
></postcreate>


@endsection
