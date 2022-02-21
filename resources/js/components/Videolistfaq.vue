<template>
    <div class="container">
       <ul class="video-list">
			<li class="item" v-for="(source, index) in sources">
				<h2>{{index + 1}}. {{source.title}}</h2>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" :src="source.link" allowfullscreen></iframe>
				</div>
				<!--video-player :options="source"></video-player-->
			</li>
		  </ul>
		 
    </div>
</template>

<script>
	require('videojs-youtube'); // add any plugin first and then
    export default {
        data() {
            return {
               sources: []
            }
        },
		created: function(){
			/*let videos = [
				{'link':'/videos/Borrar_anuncio_publicado.mp4', 'title': 'Borrar anuncio'},
				{'link':'/videos/Cambiar_contrasena.mp4', 'title': 'Cambiar contraseña'},
				{'link':'/videos/Como_publicar_mas_anuncios.mp4', 'title': 'Como publicar mas anuncios'},
				{'link':'/videos/Consumo_de_productos.mp4', 'title': 'Consumo de productos'},
				{'link':'/videos/Contactar_con_nosotros.mp4', 'title': 'Como contactar con nosotros'},
				{'link':'/videos/Eliminados.mp4', 'title': 'Eliminados'},
				{'link':'/videos/', 'title': 'Estadísticas'},
				{'link':'/videos/Facturacion.mp4', 'title': 'Facturación'},
				{'link':'/videos/Foros.mp4', 'title': 'Foros'},
				{'link':'/videos/Listado_de_Anuncios.mp4', 'title': 'Listado de Anuncios'},
				{'link':'/videos/Modificar_Anuncio.mp4', 'title': 'Modificar Anuncio'},
				{'link':'/videos/Modificar_Anuncio_publicado.mp4', 'title': 'Modificar Anuncio publicado'},
				{'link':'/videos/Pagar_anuncio_publicado.mp4', 'title': 'Pagar anuncio publicado'},
				{'link':'/videos/Panel_de_Control.mp4', 'title': 'Panel de Control'},
				{'link':'/videos/Politica_de_privacidad.mp4', 'title': 'Politica de privacidad'},
				{'link':'/videos/Portales_publicados.mp4', 'title': 'Portales publicados'},
				{'link':'/videos/Publicar_anuncio_desde_listado.mp4', 'title': 'Publicar anuncio desde listado'},
				{'link':'/videos/Registracion_desde_principio.mp4', 'title': 'Registración Almeja Rosa'},
				{'link':'/videos/Tarifas.mp4', 'title': 'Tarifas'}
			];*/

			let videos = [
				{'link':'https://drive.google.com/file/d/1eezUPnajjHCDvoUItl8xdhhh1cjbkHKl/preview', 'title': 'Borrar anuncio'},
				
				{'link':'https://drive.google.com/file/d/1Ztnb9LOLagVDOCI1tIE6eun0hKx8CAJp/preview', 'title': 'Cambiar contraseña'},
				
				{'link':'https://drive.google.com/file/d/1nYUmBSe-89r1O6TRaW-5DlJKAjZvV3Lh/preview', 'title': 'Como publicar mas anuncios'},
				
				{'link':'https://drive.google.com/file/d/1Q5UxNMXH-s2UR-1Hq268WOGk3ilyC6xO/preview', 'title': 'Consumo de productos'},
				
				{'link':'https://drive.google.com/file/d/1gDqKnijFud9WlrUlYJKNlLf5i8bD8Nbh/preview', 'title': 'Como contactar con nosotros'},
				
				{'link':'https://drive.google.com/file/d/1WX0JDCxf0Gjwm47xtGHDrdJT8AZ-EJ1A/preview', 'title': 'Eliminados'},
				
				{'link':'https://drive.google.com/file/d/1WZx7__ZTslhDkjtPSA27WOIGIdn3mzcO/preview', 'title': 'Estadísticas'},
				
				{'link':'https://drive.google.com/file/d/1lukZesaCJtPl21MQdahBJ7cOyotcE_Cj/preview', 'title': 'Facturación'},
				
				{'link':'https://drive.google.com/file/d/16KJJOkO44bHB2oGZtmKR6PXia2Vv9kVj/preview', 'title': 'Foros'},
				
				{'link':'https://drive.google.com/file/d/1fru0-RID9EzEi8VPys019e5rqr6RZeXv/preview', 'title': 'Listado de Anuncios'},
				
				{'link':'https://drive.google.com/file/d/1rn-T9xKSkfv_8ZKMpEDhdDCsekXRLM1l/preview', 'title': 'Modificar Anuncio'},
				
				{'link':'https://drive.google.com/file/d/1vBvtSh4dshca-5pct6TgE7_ROtyh5eWc/preview', 'title': 'Modificar Anuncio publicado'},
				
				{'link':'https://drive.google.com/file/d/1-HeVgir3vPGPxv1_RcdQepyDsTKB__RB/preview', 'title': 'Pagar anuncio publicado'},
				
				{'link':'https://drive.google.com/file/d/1mLmulhMwuJSBNoSrW3Z1MfpMQ5gtyJq_/preview', 'title': 'Panel de Control'},
				
				{'link':'https://drive.google.com/file/d/1qEHFRjwE67WiXNRESf1syndVE8yn_mBz/preview', 'title': 'Politica de privacidad'},
				
				{'link':'https://drive.google.com/file/d/1QJVTPkjR4gCR0mc96UUwhZ4_adcHwva1/preview', 'title': 'Portales publicados'},
				
				{'link':'https://drive.google.com/file/d/1F5mZCWBOK-NkJdFeMpVmDKVulk-c5PE5/preview', 'title': 'Publicar anuncio desde listado'},
				
				{'link':'https://drive.google.com/file/d/1jzHuQV2BTYgJgGlurVSpMULz2xIQVS0t/preview', 'title': 'Registración Almeja Rosa'},
				
				{'link':'https://drive.google.com/file/d/17xaaZlVYKIbdRqR0xaANufGjLThrhv5I/preview', 'title': 'Tarifas'}
			];
			
			for(let video of videos)
			{
				this.sources.push({
					muted: true,
					language: 'es',
					//playbackRates: [0.7, 1.0, 1.5, 2.0],
					title: video.title,
					link: video.link,
					sources: [{
						// type: "video/youtube",
						type: "video/mp4",
						src: video.link
					}],
					poster: "",
					// techOrder: ['youtube'],
					fluid: true
				});
			}
		}
    };
</script>

<style lang="scss">
	.embed-responsive{position:relative;display:block;width:100%;padding:0;overflow:hidden}.embed-responsive::before{display:block;content:""}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-21by9::before{padding-top:42.857143%}.embed-responsive-16by9::before{padding-top:56.25%}.embed-responsive-4by3::before{padding-top:75%}.embed-responsive-1by1::before{padding-top:100%}
    .video-list
	{
		list-style: none;
		margin: 25px 0 0 0;
		padding: 0;
		display: flex;
		flex-wrap: wrap;
		
		.item
		{
			list-style: none;
			margin: 0;
			padding: 0;
			-ms-flex: 0 0 100%;
			flex: 0 0 100%;
			max-width: 100%;
			position: relative;
			padding: 0 15px;
			margin-bottom: 20px;
			
			h2{
				margin-bottom:15px
			}
			
			.video-js
			{
				border: 1px solid #fe6885;
				
				.vjs-big-play-button
				{
					top: 50%;
					left: 50%;
					margin: -0.75em 0 0 -1.5em;
				}
			}
			
			.video-js .vjs-big-play-button
			{
				background-color: #fe6885;
			}
			
			.video-js:hover .vjs-big-play-button, 
			.video-js .vjs-big-play-button:focus
			{
				background-color: rgba(255, 99, 138, 0.4);
			}
		}
		
		@media (min-width: 991px) {
			.item
			{
				-ms-flex: 0 0 50%;
				flex: 0 0 50%;
				max-width: 50%;
			}
		}
	}
</style>
