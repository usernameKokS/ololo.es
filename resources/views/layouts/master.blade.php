<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ololo.es</title>
	<link rel="stylesheet" href="/css/app.css?r={{ date("Ymd") }}">
    <link rel="icon" type="image/png" href="/img/logo.png">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=0.91, maximum-scale=0.81, user-scalable=no">

	@yield('style')
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
<body>
	<div id="app">
		@include('layouts.navbar')
		@yield('content')

        <modal name="resetPass" width="380" height="auto" v-cloak>
            <div class="appmodal">
                <div class="modal-container">
                    <div class="modal-header modal-header-notify">
                        <h3>CAMBIAR CONTRASEÑA</h3>
                        <img src="/img/delete.svg" alt="icon" class="handleimg"   @click="$modal.hide('resetPass')"/>
                    </div>
                </div>
                <div class="faux-borders" style="width: 70%;"></div>
                <div class="modal-container">
                    <div class="modal-body">
                        <div class="notify-area">
                            <p>¿ Seguro que quiere cambiar la contraseña ?</p>
                            <button class="btn btn-regular btn_green-hover btn-width-set" @click="forgotPass()" :disabled="waitSend">
                                <div>
                                    <span>CONFIRMAR</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </modal>
		<modals-container>
	</div>

	<script src="/js/app.js?r={{ date("Ymd") }}"></script>
    @section('footer_script')
    @show

	@include('pages.blocks.add_user')
</body>
</html>
