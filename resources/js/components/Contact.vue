<template>
    <div class="contacts">
        <div class="container container-two">
            <p
                class="edit-desc"
            >Déjanos tus datos de contacto y en breve nos pondremos en contacto contigo</p>
            <div class="wrap-icon-contact"></div>
            <form @submit.prevent="sendForm" class="contacts__form-wrapper">
                <div class="form-group-input" :class="{ 'input-error-fg': $v.form.name.$error }">
                    <div class="input-area">
                        <div class="label-wrap__leftp">
                            <span class="input-label">Nombre:</span>
                        </div>
                        <input type="text" v-model.trim="$v.form.name.$model" class="input input-fw"/>
                    </div>
                    <small
                        class="form-text text-muted text-right"
                        v-if="$v.form.name.$error"
                    >Este campo es obligatorio.</small>
                </div>
                <div class="form-group-input" :class="{ 'input-error-fg': $v.form.email.$error }">
                    <div class="input-area">
                        <div class="label-wrap__leftp">
                            <span class="input-label">E-mail:</span>
                        </div>
                        <input type="email" v-model.trim="$v.form.email.$model" class="input input-fw"/>
                    </div>
                    <small
                        class="form-text text-muted text-right"
                        v-if="$v.form.email.$error"
                    >Este campo es obligatorio.</small>
                </div>
                <div class="form-group-input" :class="{ 'input-error-fg': $v.form.phone.$error }">
                    <div class="input-area">
                        <div class="label-wrap__leftp">
                            <span class="input-label">Teléfono:</span>
                        </div>
                        <input
                            type="text"
                            v-mask="'+## ### ### ###'"
                            v-model.trim="$v.form.phone.$model"
                            class="input input-fw"
                        />
                    </div>
                    <small
                        class="form-text text-muted text-right"
                        v-if="$v.form.phone.$error"
                    >Este campo es obligatorio.</small>
                </div>
                <div class="form-group-input" :class="{ 'input-error-fg': $v.form.affair.$error }">
                    <div class="input-area">
                        <div class="label-wrap__leftp">
                            <span class="input-label">Asunto:</span>
                        </div>
                        <input type="text" v-model.trim="$v.form.affair.$model" class="input input-fw"/>
                    </div>
                    <small
                        class="form-text text-muted text-right"
                        v-if="$v.form.affair.$error"
                    >Este campo es obligatorio.</small>
                </div>
                <div class="form-group-input" :class="{ 'input-error-fg': $v.form.body.$error }">
                    <div class="input-area textarea-area">
                        <div class="label-wrap__leftp">
                            <span class="input-label">Texto:</span>
                        </div>
                        <textarea
                            name
                            id
                            cols="30"
                            rows="5"
                            class="textarea input-fw"
                            v-model.trim="$v.form.body.$model"
                        />
                    </div>
                    <small
                        class="form-text text-muted text-right"
                        v-if="$v.form.body.$error"
                    >Este campo es obligatorio.</small>
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
                    <button type="submit" class="btn btn-pink btn-send" :disabled="storefun">ENVIAR</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import es from "vuejs-datepicker/dist/locale/translations/es";
    import Notify from "./Notify";
    import VueRecaptcha from "vue-recaptcha";

    import {email, maxLength, minLength, required} from "vuelidate/lib/validators";

    export default {
        components: {
            VueRecaptcha
        },
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
                    name: "",
                    phone: "",
                    affair: "",
                    email: "",
                    body: ""
                }
            };
        },
        validations: {
            form: {
                name: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(24)
                },
                recaptchaToken: {
                    required,
                },
                email: {
                    required,
                    email
                },
                phone: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(24)
                },
                affair: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(24)
                },
                body: {
                    required,
                    minLength: minLength(1),
                    maxLength: maxLength(900)
                }
            }
        },
        methods: {
            onCaptchaExpired() {
                this.$refs.recaptcha.reset();
                this.form.recaptchaToken = '';
            },
            sendForm() {
                this.$v.$touch();
                if (this.$v.$invalid) {
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
            },
            register(recaptchaToken) {
                this.form.recaptchaToken = recaptchaToken
            },

            submit() {
                this.storefun = true;
                axios
                    .post("/contact/store", this.form)
                    .then(response => {
                        this.$modal.show(
                            Notify,
                            {
                                title: "ENVIADO",
                                type: "success",
                                porterrors: null,
                                message: response.data.success
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
            }
        }
    };
</script>

