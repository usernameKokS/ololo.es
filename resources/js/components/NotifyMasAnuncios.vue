<template>
    <div class="appmodal notify-modal">
        <div class="modal-container">
            <div class="modal-header modal-header-notify">
                <img src="/img/cellphone.svg" alt="icon" class="handleimg"/>
                <h3>Más anuncios</h3>
                <img src="/img/delete.svg" alt="icon" class="handleimg closebtn" @click="$emit('close')"/>
            </div>
        </div>
        <div class="faux-borders" style="width: 70%;"></div>
        <div class="modal-container">
            <div class="modal-body">
                <div class="notify-area">
                    <p>
                        Ya dispones de un anuncio publicado en nuestra plataforma. Si quieres publicar otro, tienes que
                        ser un club o piso de relax, para ello rellene los campos y nuestro comercial se pondrá en
                        contacto con Usted para verificar los datos.
                    </p>

                    <form @submit.prevent="sendmail">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="input input-fullwidth input_tel" placeholder="Teléfono"
                                       v-mask="'6##-###-###'" v-if="firstDigit === 6"
                                       :class="{ 'input-error':  $v.tel.$error }"
                                       v-model.trim="$v.tel.$model" v-model="tel">

                                <input type="text" class="input input-fullwidth input_tel" placeholder="Teléfono"
                                       v-mask="'7##-###-###'" v-else
                                       :class="{ 'input-error':  $v.tel.$error }"
                                       v-model.trim="$v.tel.$model" v-model="tel">

                            </div>
                            <div class="col-md-12">
                                <input type="text"
                                       class="input input-fullwidth input_num"
                                       :class="{ 'input-error':  $v.name.$error }"
                                       placeholder="Nombre"
                                       v-model.trim="$v.name.$model" v-model="name"
                                >
                            </div>

                            <div class="col-md-12">
                                <p class="input_info">Poner en contacto a las:</p>
                                <v-select
                                    :options="options"
                                    :maxHeight="200"
                                    :class="{ 'input-error':  $v.time.$error }"
                                    class="style-chooser chooser-full-width input_time"
                                    style="width: 100%; color: red;"
                                    placeholder="En horario de la oficina"
                                    append-to-body
                                    :calculate-position="withPopper"
                                    v-model="time"
                                />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-regular btn_green-hover btn-width-set">
                            <div>
                                <span>Enviar</span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import videojs from 'video.js';

    import {alpha, maxLength, minLength, required} from "vuelidate/lib/validators";
    import { createPopper } from '@popperjs/core';

    export default {
        name: 'NotifyMasAnuncios',

        data() {
            return {
                options: [
                    '10:00 - 11:00',
                    '11:00 - 12:00',
                    '12:00 - 13:00',
                    '13:00 - 14:00',
                    '14:00 - 15:00',
                    '15:00 - 16:00',
                    '16:00 - 17:00',
                    '17:00 - 18:00',
                    '18:00 - 19:00',
                    '19:00 - 20:00',
                ],
                placement: 'top',

                tel: '',
                name: '',
                time: '',
            }
        },

        validations: {
            tel: {
                required,
            },

            name: {
                required,
                minLength: minLength(2),
                maxLength: maxLength(15),
                alpha,
            },

            time: {
                required,
            }
        },

        computed: {
            firstDigit() {
                return parseInt(this.tel[0]);
            },
        },

        mounted() {
            console.log("Modal open");
        },
        created() {
            document.body.style.overflow = "hidden";
        },
        beforeDestroy() {
            document.body.style.overflow = "auto";
        },

        methods: {
            sendmail() {
                this.$v.tel.$touch();
                this.$v.name.$touch();
                this.$v.time.$touch();

                const {tel, name, time} = this;

                if (!this.$v.$invalid) {
                    axios.post('/email/masanuncios', {tel, name, time})
                        .then(() => this.$emit('close'));
                }
            },
            withPopper (dropdownList, component, {width}) {
                dropdownList.style.width = width;
                const popper = createPopper(component.$refs.toggle, dropdownList, {
                    placement: this.placement,
                    modifiers: [
                        {
                            name: 'offset', options: {
                                offset: [0, -1]
                            }
                        },
                        {
                            name: 'toggleClass',
                            enabled: true,
                            phase: 'write',
                            fn ({state}) {
                                component.$el.classList.toggle('drop-up', state.placement === 'top')
                            },
                        }]
                });

                return () => popper.destroy();
            },
        }
    };
</script>


<style>
    .visible-modal {
        background: #fff;
        overflow: visible !important;
    }
</style>

<style lang="scss" scoped>
    .modal-header-notify {
        justify-content: flex-start;
    }

    .input_tel {
        margin-top: 25px;
    }

    .input_num {
        margin-top: 25px;
    }

    .input_time {
        margin-top: 0px;
    }

    .input_info {
        margin-left: -160px;
        margin-top: 25px;
    }

    .vs__search {
        color: #898a89;
    }

    .handleimg {
        margin-right: 20px;
    }

    .notify-area {
        text-align: center;
        margin: 0 auto;

        p {
            padding-bottom: 6px;
        }

        button {
            margin: 30px auto 0px;
        }
    }

    .closebtn {
        margin-left: 74px !important;
        margin-right: 0px !important;
    }
</style>
