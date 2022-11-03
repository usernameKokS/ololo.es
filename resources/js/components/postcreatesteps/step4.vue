<template>
    <section>
        <div class="row">
            <div class="col-12">
                <hr>&nbsp;
            </div>
        </div>
        <videoupload :csrf="csrf" :post="$parent.$parent.post">
            <template v-slot:header>
                <h2>Anadir fotos y videos a tu anuncio</h2>
            </template>
            <template v-slot:footer>
                <p class="mt-3">40 fotos de hasta 32 megas cada una (gif, jpeg, png)</p>
                <p>6 vídeos de hasta 600 megas, formatos validos: avi, mov, wmv, mpeg, rm, mp4, flv, m2t y 3gp (videos
                    de moviles)</p>
            </template>
        </videoupload>

        <span class="note-text">
                <b>Nota:</b> Las fotos tienen que ser de buena calidad, no tener marcas de agua. Esta prohibido utilizar fotos robadas o de terceros.
            </span>

        <span class="modify-text" v-if="isModify">Tus cambios no están guardados, para guardar los tienes que llegar hasta el último paso y guardar el anuncio.</span>
    </section>
</template>

<script>

import {maxLength, minLength, minValue, numeric, required} from "vuelidate/lib/validators";
import Notify from "./../Notify";

export default {
    props: ['clickedNext', 'currentStep'],
    // mixins: [validationMixin],
    data() {
        return {
            isModify: false,
            form: {},
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content")
        }
    },
    validations: {
        form: {}
    },
    watch: {
        $v: {
            handler: function (val) {
                if (!val.$invalid) {
                    this.$emit('can-continue', {value: true});
                } else {
                    this.$emit('can-continue', {value: false});
                    setTimeout(() => {
                        this.$emit('change-next', {nextBtnValue: false});
                    }, 3000)
                }
            },
            deep: true
        },
        clickedNext(val) {
        }
    },
    methods: {
        setIsModify() {
            if (this.$parent.$parent.post.status != "creating") {
                this.isModify = true;
                window.localStorage.setItem('isModify' + this.$parent.$parent.post.id, true);
            }
        },
        saveStep() {
            return new Promise((resolve, reject) => {
                let form = {"post_id": this.$parent.$parent.post.id};
                axios
                    .post("/post/store-step4", form)
                    .then(response => {

                        if (response.data.type == 'error') {
                            this.$modal.show(
                                Notify,
                                {
                                    title: "Error",
                                    type: "error",
                                    //   porterrors: error.response.data.errors,
                                    message: response.data.message
                                },
                                {
                                    width: 380,
                                    height: "auto"
                                }
                            );

                            reject("error");
                        } else if (response.data.status) {
                            window.location.href = "/tariff/"+response.data.post_id+"/silver"+(this.$parent.$parent.post.publish === 1 ? "?action=edit" : "?action=publish");
                        }

                        resolve("success");
                    })
                    .catch(error => {
                        if (error.response.status == 422) {
                            this.$modal.show(
                                Notify,
                                {
                                    title: "Error",
                                    type: "error",
                                    //   porterrors: error.response.data.errors,
                                    message: "Try again later"
                                },
                                {
                                    width: 380,
                                    height: "auto"
                                }
                            );
                        }
                        reject("error");
                    });
            });
        }
    },
    mounted() {
        if (!this.$v.$invalid) {
            this.$emit('can-continue', {value: true});
        } else {
            this.$emit('can-continue', {value: false});
        }

        if (
            window.localStorage.getItem('isModify' + this.$parent.$parent.post.id) === "true"
            && this.$parent.$parent.post.status != "creating"
        )
            this.isModify = true
    }
}
</script>

<style lang="scss" scoped>
</style>
