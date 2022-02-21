<template>
    <div class="billings">
        <div class="container container-two">
            <form class="bill-form-wrap" @submit.prevent="sendForm">
                <div class="wrap-icon-billings"></div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div
                            class="form-group form-group-input"
                            :class="{ 'input-error-fg': $v.form.social.$error }"
                        >
                            <label for="social">Empresa o razón social:</label>
                            <input
                                type="text"
                                class="input input-fullwidth"
                                id="social"
                                v-model.trim="$v.form.social.$model"
                            />
                            <small class="form-text text-muted" v-if="$v.form.social.$error">Este campo es
                                obligatorio</small>
                        </div>
                        <div
                            class="form-group form-group-input"
                            :class="{ 'input-error-fg': $v.form.name.$error }"
                        >
                            <label for="name">Nombre:</label>
                            <input
                                type="text"
                                class="input input-fullwidth"
                                id="name"
                                v-model.trim="$v.form.name.$model"
                            />
                            <small class="form-text text-muted" v-if="$v.form.name.$error">Este campo es
                                obligatorio</small>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div
                            class="form-group form-group-input"
                            :class="{ 'input-error-fg': $v.form.cif.$error }"
                        >
                            <label for="cif">CIF:</label>
                            <div class="check-cif">
                                <input
                                    class="input input-fullwidth"
                                    id="cif"
                                    v-model.trim="$v.form.cif.$model"
                                />
                            </div>
                            <small class="form-text text-muted" v-if="$v.form.cif.$error">Este campo es
                                obligatorio</small>
                        </div>
                        <div
                            class="form-group form-group-input"
                            :class="{ 'input-error-fg': $v.form.surname.$error }"
                        >
                            <label for="surname">Apellidos:</label>
                            <input
                                type="text"
                                class="input input-fullwidth"
                                id="surname"
                                v-model.trim="$v.form.surname.$model"
                            />
                            <small class="form-text text-muted" v-if="$v.form.surname.$error">Este campo es
                                obligatorio</small>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div
                            class="form-group form-group-input"
                            :class="{ 'input-error-fg': $v.form.postal.$error }"
                        >
                            <label for="postal">Dirección postal:</label>
                            <input
                                class="input input-fullwidth"
                                id="postal"
                                v-model.trim="$v.form.postal.$model"
                            />
                            <small class="form-text text-muted" v-if="$v.form.postal.$error">Este campo es
                                obligatorio</small>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div
                            class="form-group form-group-input"
                            :class="{ 'input-error-fg': $v.form.country.$error }"
                        >
                            <label for="country">País:</label>
                            <v-select
                                :options="['España']"
                                :searchable="false"
                                id="country"
                                class="style-chooser select-full-width"
                                v-model.trim="$v.form.country.$model"
                            />
                            <small class="form-text text-muted" v-if="$v.form.country.$error">Este campo es
                                obligatorio</small>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <div
                            class="form-group form-group-input"
                            :class="{ 'input-error-fg': $v.form.email.$error }"
                        >
                            <label for="inputEmail">Email:</label>
                            <input
                                type="email"
                                class="input input-fullwidth"
                                id="inputEmail"
                                v-model.trim="$v.form.email.$model"
                            />
                            <small class="form-text text-muted" v-if="$v.form.email.$error">Este campo es
                                obligatorio</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="form-group form-group-input">
                            <label>Seleccione las fechas:</label>
                            <div class="wrap">
                                <div class="date-picker-wrapper">
                                    <datepicker
                                        :language="es"
                                        v-model.trim="$v.form.date_start.$model"
                                        :class="{'datepicker-error': $v.form.date_start.$error}"
                                    />
                                    <div class="separator"></div>
                                    <datepicker
                                        :language="es"
                                        v-model.trim="$v.form.date_end.$model"
                                        :class="{'datepicker-error': $v.form.date_end.$error}"
                                    />
                                </div>
                                <small
                                    class="form-text text-muted"
                                    v-if="$v.form.date_start.$error || $v.form.date_end.$error"
                                >Fields is required</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapper">
                    <div class="google-capcha">
                        <vue-recaptcha
                            :sitekey="sitekey"
                            ref="recaptcha"
                            :loadRecaptchaScript="true"
                            @verify="register"
                            @expired="onCaptchaExpired"
                        />
                    </div>
                    <button type="submit" class="btn btn-send btn-pink" :disabled="storefun">ENVIAR</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import Datepicker from "vuejs-datepicker";
    import es from "vuejs-datepicker/dist/locale/translations/es";
    import Notify from "./Notify";
    import VueRecaptcha from "vue-recaptcha";

    import {email, maxLength, minLength, required} from "vuelidate/lib/validators";

    var moment = require("moment");

    export default {
        data() {
            return {
                sitekey: "6Ld7dvYUAAAAANJW5cXmsqLtZLgqMndqws_jR_UG",
                disabledDates: {
                    from: new Date()
                },
                es: es,
                storefun: false,
                form: {
                    recaptchaToken: "",
                    social: "",
                    cif: "",
                    name: "",
                    surname: "",
                    postal: "",
                    country: "",
                    email: "",
                    date_start: "",
                    date_end: ""
                }
            };
        },
        validations: {
            form: {
                social: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(24)
                },
                recaptchaToken: {required},
                cif: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(24)
                },
                name: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(24)
                },
                surname: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(24)
                },
                postal: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(24)
                },
                country: {
                    required
                },
                email: {
                    required,
                    email
                },
                date_start: {
                    required
                },
                date_end: {
                    required
                }
            }
        },
        components: {
            Datepicker,
            VueRecaptcha
        },
        methods: {
            onCaptchaExpired() {
                this.$refs.recaptcha.reset()
                this.form.recaptchaToken = '';
            },
            register(recaptchaToken) {
                this.form.recaptchaToken = recaptchaToken;
            },
            submit() {
                this.storefun = true;
                axios
                    .post("/billing/store", this.form)
                    .then(response => {
                        this.$modal.show(
                            Notify,
                            {
                                title: "ENVIADO",
                                type: "success",
                                porterrors: null,
                                message: "En breve recibirás el email con la factura solicitada. Por si acaso revisa tu carpeta de spam. Si no lo recibes pasados unos 24 horas, <a href='/contact' style='color: #fe6885'>contacta con nosotros.</a>"
                            },
                            {
                                width: 380,
                                height: "auto"
                            }
                        );
                        this.storefun = false;
                    })
                    .catch(error => {
                        if (error.response.status == 422) {
                            this.$modal.show(
                                Notify,
                                {
                                    title: "Error",
                                    type: "error",
                                    porterrors: error.response.data.errors
                                    //   message: "Try again later"
                                },
                                {
                                    width: 380,
                                    height: "auto"
                                }
                            );
                        }
                        this.storefun = false;
                    });
            },
            sendForm() {
                this.$v.$touch();
                if (this.$v.$invalid) {
                    this.$nextTick(() => {
                        const element = document.querySelector(".input-error-fg");
                        const options = {offset: -120};
                        this.$scrollTo(element, 700, options);
                    });
                    this.$modal.show(
                        Notify,
                        {
                            title: "Error",
                            type: "error",
                            //   porterrors: error.response.data.errors,
                            message: "Ingrese los datos correctamente"
                        },
                        {
                            width: 380,
                            height: "auto"
                        }
                    );
                } else {
                    // this.$refs.recaptcha.execute();
                    this.submit();
                }
            }
        }
    };
</script>

