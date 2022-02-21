<template>
    <div>
        <div class="wrap-icon-faq"></div>
        <div>
            <h2>preguntas y respuestas</h2>
        </div>
        <div class="swipe-wrapper">
            <swiper ref="mySwiper" :options="swiperOptions">
                <swiper-slide>
                    <div class="faq-item">
                        <div class="faq-content">
                            <h4>Que tarifa es la mejor?</h4>
                            <!-- <div class="faq-img">
                              <img src="/img/question-mark.svg" alt="faq" />
                            </div> -->
                            <p>
                                La tarifa GOLD es la que ofrece mejor calidad precio, ya que incluye los principales
                                portales (los de más tráfico real) y tus anuncios se renuevan de forma automática para
                                tener las primeras posiciones en los siguientes portales:
                                <br>
                                -Pasion.com 1 anuncios de pago durante 24 horas AUTORENOVADO
                                <br>
                                -Nuevoloquo.com – 1 anuncio de PAGO
                                <br>
                                -Slumi.com 1 anuncio de PAGO 24 horas
                                <br>
                                -2 reseñas en los foros con valoraciones muy altas escritas por usuarios
                            </p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="faq-item">
                        <div class="faq-content">
                            <h4>Tendré mas clientes?</h4>
                            <p>
                                Si, ya que tus anuncios estarán publicados en casi todos los portales que existen en el
                                sector de sexo y escort.
                                <br>
                                Al tener más anuncios que tu competencia, te verán mucho más, por lo que tendrás más
                                llamadas sin tener que hacer nada, nuestro sistema hace todo el trabajo de publicidad
                                por ti.
                                <br>
                                Y algo muy importante es que además de tener publicidad en múltiples portales de sexo,
                                nuestro equipo publicará opiniones en los foros de sexo en España, para mejorar tu
                                perfil en búsqueda.
                                <br>
                                El análisis de la publicidad nos dice que el 63% de los clientes antes de llamar
                                verifican tu telefono en google, para ver si hay algunas reseñas negativas en los foros.
                                En el momento que el cliente vé reseñas positivas tendrá mucha mas confianza para llamar
                                y solicitar cita.
                            </p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="faq-item">
                        <div class="faq-content">
                            <h4>¿Como funciona?</h4>
                            <p>
                                Al finalizar la compra, ya eres usuario, por lo que se abrirá la página “listado de
                                anuncios” y allí nuestro sistema empezará a publicar todos tus anuncios en los portales
                                de forma automática.
                                <br>
                                En 24 horas todos tus anuncios estarán publicados en todos los portales.
                                <br>
                                Podrás ver toda la estadística y los links de tus anuncios en la sección de “Portales
                                publicados y Estadísticas”.
                            </p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="faq-item">
                        <div class="faq-content">
                            <h4>¿Cuál es la duración de los anuncios?</h4>
                            <p>
                                Desde el momento que activas tus anuncios, tienes 7 días para promocionar tu anuncio en
                                los diferentes portales de sexo en España. Al finalizar el plazo de 7 días, si no
                                renuevas la tarifa, tus anuncios se eliminarán de forma automática de todos los
                                portales.
                                <br>
                                Si activas el cobro automático no tendrás que preocuparte de renovar cada semana y tus
                                anuncios se renovaran automáticamente, hasta que tu lo desactives.
                                <br>
                                Las reseñas en los foros, se quedaran activos despues de finalización de tu tarifa.
                            </p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="faq-item">
                        <div class="faq-content">
                            <h4>Que forma de pago acepta?</h4>
                            <p>
                                Puedes hacer pagos utilizando tarjeta visa o mastercard., también aceptamos tarjetas de <b>prepago de Correos</b>
                                <br>
                                La forma más segura para pagar tus compras por internet es abrir una tarjeta prepaga de Correos en cualquier oficina de Correos en España, sólo hace falta el pasaporte. Al ser de recarga te permite controlar lo que gastas en publicidad. No tiene coste de manteniemiendo y no hay que ser residente en España y sólo has de pagar 6 € cuando te la dan.
                            </p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="faq-item">
                        <div class="faq-content">
                            <h4>¿Como puedo eliminar todos mis anuncios? ¿O cambiarlos si me voy a otra ciudad?</h4>
                            <p>
                                Para eliminar tus anuncios en todos los portales, solamente tendras que eliminar tu anuncio desde nuestro portal y nuestro sistema automaticamente eliminara todos tus anuncios de las webs: pasion, slumi, mundosexanuncio etc en 24 horas.
                                <br>
                                Si vas a otra ciudad sólo tienes que modificar la ciudad en “editar anuncio”, y el sistema automáticamente la cambiará en todos los anuncios que tengas publicados en menos de 24 horas.
                            </p>
                        </div>
                    </div>
                </swiper-slide>
            </swiper>
        </div>
        <div class="control-el">
            <div class="swiper-button-prev" slot="button-prev"></div>
            <div class="swiper-button-next" slot="button-next"></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "carrousel",
        data() {
            return {
                swiperOptions: {
                    loop: true,
                    slidesPerView: 2,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev"
                    },
                    breakpoints: {
                        1024: {
                            slidesPerView: 2
                        },

                        380: {
                            slidesPerView: 1
                        },
                        0: {
                            slidesPerView: 1
                        }
                    }
                    // Some Swiper option/callback...
                }
            };
        },
        computed: {
            swiper() {
                return this.$refs.mySwiper.$swiper;
            }
        },
        mounted() {
        }
    };
</script>

<style lang="scss" scoped>
    .swiper-button-prev.swiper-button-disabled::after {
        content: "";
        background-image: url("/img/left.svg") !important;
        background-repeat: no-repeat;
        background-size: contain;
        background-size: 30px 42px;
        width: 30px;
        height: 42px;
    }

    .swiper-button-prev,
    .swiper-button-next {
        opacity: 1;
        width: 30px;
        height: 42px;
        top: 67%;
    }

    .swiper-button-prev::after {
        content: "";
        background-image: url("/img/leftpink.svg");
        background-repeat: no-repeat;
        background-size: contain;
        background-size: 30px 42px;
        width: 30px;
        height: 42px;
    }

    .swiper-button-next.swiper-button-disabled::after {
        content: "";
        background-image: url("/img/rightwhite.svg") !important;
        background-repeat: no-repeat;
        background-size: contain;
        background-size: 30px 42px;
        width: 30px;
        height: 42px;
    }

    .swiper-button-next::after {
        content: "";
        background-image: url("/img/rightrose.svg");
        background-repeat: no-repeat;
        background-size: contain;
        background-size: 30px 42px;
        width: 30px;
        height: 42px;
    }

    .control-el {
        max-width: 90%;
    }

    .swipe-wrapper {
        width: 89%;
        margin: 0 auto;
    }

    .faq-content{
        p{
            text-align: justify;
        }
    }
</style>
