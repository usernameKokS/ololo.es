<template>
    <div class="appmodal appmodal-sendemail">
        <div class="modal-container">
            <div class="modal-header modal-header-notify">
                <h3>
                    <img src="/img/email.svg" class="emailimg" alt="email"/>
                    E-mail enviado
                </h3>
                <img src="/img/closemodal.svg" alt="modal" @click="$emit('close')"/>
            </div>
        </div>
        <div class="faux-borders" style="width: 70%;"></div>
        <div class="modal-container">
            <div class="modal-body">
                <div class="sendemail">
                    <p>
                        En breve recibirás el email con el link para cambiar la contraseña. 
                        Por si acaso revisa tu carpeta de Spam. 
                        Si no lo recibes pasados unos minutos <a href="/contact">contacta con nosotros.</a>
                    </p>
                    <button @click="$emit('close')" class="btn btn-regular btn-green non-fixed-btn9">
                        <div>
                            <span>CONFIRMAR</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import videojs from 'video.js';

    export default {
        data() {
            return {
                isLogin: false,
            };
        },
        mounted() {
            this.isLogin = location.pathname === '/login';
            console.log("Modal open");
        },
        created() {
            document.body.style.overflow = "hidden";
        },
        beforeDestroy() {
            document.body.style.overflow = "auto";
        }
    };
</script>

<style lang="scss" scss>
    .emailimg {
        width: 26px;
        height: 26px;
        margin-right: 15px;
    }
</style>
