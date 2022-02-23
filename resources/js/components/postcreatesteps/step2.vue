<template>
    <section>
        <div class="row">
            <div class="col-12"><hr>&nbsp;</div>
        </div>
        <div class="edit-wrap-section-body">
            <div class="container">
                <!--div class="wrap-icon2"></div-->
                <div class="container-two">
                    <h2>Datos del anuncio</h2>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Categoría:</span>
                                </div>
                                <v-select
                                    :options="$parent.$parent.cats"
                                    v-model.trim="$v.form.category.$model"
                                    :class="{ 'input-error': $v.form.category.$error }"
                                    class="style-chooser"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row frow-input-padding" v-if="form.category == 'Masajes'">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Género:</span>
                                </div>
                                <v-select
                                    :options="sex"
                                    :searchable="false"
                                    class="style-chooser"
                                    v-model.trim="$v.form.sex.$model"
                                    :class="{ 'input-error': $v.form.sex.$error }"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row frow-input-padding">
                        <div class="col-sm-12">
                            <div class="input-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Título:</span>
                                </div>
                                <input
                                    type="text"
                                    class="input input-fw"
                                    v-model.trim="$v.form.title.$model"
                                    :class="{ 'input-error': $v.form.title.$error }"
                                />
                            </div>
                            <div class="input-area-error">
                            <span :class="{'access-error': !$v.form.title.$error}">
                                Llevas {{ form.title.length }} caracteres. El mínimo son 30, el máximo son 37.
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="row input-padding">
                        <span class="note-text">
                            <b>Nota:</b>  En cada línea la frase que escribes tiene que ser completa y tener un sentido.
                        </span>
                    </div>
                    <div class="row frow-input-padding">
                        <div class="col-sm-12">
                            <div class="input-area">
                                <span class="input-label">&nbsp;</span>
                                <div class="block-box">
                                    <span class="input-label-title">Tienes que introducir texto por líneas, cada frase es una nueva línea:</span>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">1.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_1.$error && $v.form.text_1.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_1.$error && $v.form.text_1.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_1.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_1.$model"
                                            placeholder="Ejemplo: Me llamo Monica soy una chica muy dulce y sensual."
                                            :class="{ 'input-error': $v.form.text_1.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">2.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_2.$error && $v.form.text_2.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_2.$error && $v.form.text_2.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_2.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_2.$model"
                                            placeholder="Ejemplo: Soy una chica muy exuberante, de curvas marcadas y preciosas de las que no podrás apartar las manos."
                                            :class="{ 'input-error': $v.form.text_2.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">3.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_3.$error && $v.form.text_3.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_3.$error && $v.form.text_3.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_3.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_3.$model"
                                            placeholder="Ejemplo: Mi cuerpo es un auténtico espectáculo, mis pechos grandes y naturales son pura tentación."
                                            :class="{ 'input-error': $v.form.text_3.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">4.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_4.$error && $v.form.text_4.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_4.$error && $v.form.text_4.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_4.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_4.$model"
                                            placeholder="Ejemplo: Realizo todos los servicios me encanta sexo ven y compruebalo cariño."
                                            :class="{ 'input-error': $v.form.text_4.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">5.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_5.$error && $v.form.text_5.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_5.$error && $v.form.text_5.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_5.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_5.$model"
                                            placeholder="Ejemplo: Mi trasero terso y respingón te regalará momentos de lujuria únicos."
                                            :class="{ 'input-error': $v.form.text_5.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">6.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_6.$error && $v.form.text_6.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_6.$error && $v.form.text_6.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_6.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_6.$model"
                                            placeholder="Ejemplo: En la cama soy un verdadero volcán y me encargaré de hacer realidad todas tus fantasías."
                                            :class="{ 'input-error': $v.form.text_6.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">7.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_7.$error && $v.form.text_7.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_7.$error && $v.form.text_7.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_7.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_7.$model"
                                            placeholder="Ejemplo: Estoy las 24h cerca de metro tambien hago salidas."
                                            :class="{ 'input-error': $v.form.text_7.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">8.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_8.$error && $v.form.text_8.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_8.$error && $v.form.text_8.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_8.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_8.$model"
                                            placeholder="Ejemplo: Caballeros solventes dispuestos a darme una ayuda a cambio de pasar momentos muy apasionados."
                                            :class="{ 'input-error': $v.form.text_8.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">9.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_9.$error && $v.form.text_9.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_9.$error && $v.form.text_9.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_9.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_9.$model"
                                            placeholder="Ejemplo: Tengo muchas ganas de follar llámame o escríbeme al WhatsApp."
                                            :class="{ 'input-error': $v.form.text_9.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">10.</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box" v-show="!$v.form.text_10.$error && $v.form.text_10.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="!$v.form.text_10.$error && $v.form.text_10.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg" />
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.text_10.$error">
                                                    <img src="/img/icons/check-fail.svg" />
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.text_10.$model"
                                            placeholder="Ejemplo: Sin mirar el reloj y sin meterte prisas para que te corras nuestra cita sera muy diferente."
                                            :class="{ 'input-error': $v.form.text_10.$error }"
                                        />
                                    </div>
                                    <!--div class="input-area-error" v-show="!$v.form.text.$error">
                                        <span :class="{'access-error': !$v.form.text.$error}">
                                            Llevas {{ form.text.length }} caracteres. El mínimo son 300, el máximo son 1000.
                                        </span>
                                    </div-->
                                    <div class="input-area-error" v-show="$v.form.text_1.$error">
                                        <span :class="{'access-error': !$v.form.text_1.$error}">
                                            Línea 1: Llevas {{ form.text_1.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.text_2.$error">
                                        <span :class="{'access-error': !$v.form.text_2.$error}">
                                            Línea 2: Llevas {{ form.text_2.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.text_3.$error">
                                        <span :class="{'access-error': !$v.form.text_3.$error}">
                                            Línea 3: Llevas {{ form.text_3.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.text_4.$error">
                                        <span :class="{'access-error': !$v.form.text_4.$error}">
                                            Línea 4: Llevas {{ form.text_4.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.text_5.$error">
                                        <span :class="{'access-error': !$v.form.text_5.$error}">
                                            Línea 5: Llevas {{ form.text_5.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.text_6.$error">
                                        <span :class="{'access-error': !$v.form.text_6.$error}">
                                            Línea 6: Llevas {{ form.text_6.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.text_7.$error">
                                        <span :class="{'access-error': !$v.form.text_7.$error}">
                                            Línea 7: Llevas {{ form.text_7.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.text_8.$error">
                                        <span :class="{'access-error': !$v.form.text_8.$error}">
                                            Línea 8: Llevas {{ form.text_8.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.text_9.$error">
                                        <span :class="{'access-error': !$v.form.text_9.$error}">
                                            Línea 9: Llevas {{ form.text_9.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.text_10.$error">
                                        <span :class="{'access-error': !$v.form.text_10.$error}">
                                            Línea 10: Llevas {{ form.text_10.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                sex: ['Mujer', 'Hombre'],
                form: {
                    category: this.$parent.$parent.post.category,
                    title: this.$parent.$parent.post.title ? this.$parent.$parent.post.title : "",
                    text: this.$parent.$parent.post.text ? this.$parent.$parent.post.text : "",
					text_1: "",
					text_2: "",
					text_3: "",
					text_4: "",
					text_5: "",
					text_6: "",
					text_7: "",
					text_8: "",
					text_9: "",
					text_10: "",
                    sex: this.$parent.$parent.post.sex ? this.$parent.$parent.post.sex : 'Mujer'
                }
            }
        },
        methods: {
            setIsModify()
            {

                if(this.$parent.$parent.post.status != "creating")
                {
                    this.isModify = true;
                    window.localStorage.setItem('isModify' + this.$parent.$parent.post.id, true);
                }
            },
            saveStep(){
                return new Promise((resolve, reject) => {

                    this.$v.form.$touch();

                    if(this.$v.form.$error)
                    {
                        this.$nextTick(() => {
                            const element = document.querySelector(".input-error");
                            const options = {offset: -120};
                            this.$scrollTo(element, 200, options);
                        });
                        reject("error");
                    }
                    else
                    {
                        let form = {"post_id": this.$parent.$parent.post.id};

                        form = Object.assign(form, this.form);

                        axios
                        .post("/post/store-step3", form)
                        .then(response => {
                            
                            if(response.data.type == 'error')
                            {
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
                    }
                });
            },
            filterLatinSymbolsAndSetText(value)
            {
                value = this.filterLatinSymbols(value);

                

                this.setText();
                return value;
            },
			filterLatinSymbols(value)
			{
				const regex = /[^a-zA-Zñáéíóúü0-9 \.\-\_\;\!\?]+/g;
                value = value.replaceAll(regex, '');

                value = value.replaceAll('....', '...');
                value = value.replaceAll('... .', '...');

                /*0const phoneRegex = /[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}/im;
                value = value.replaceAll(phoneRegex, '');*/
                value = value.trim()
                value = value.toLocaleLowerCase()
                value = value.charAt(0).toUpperCase() + value.slice(1);
				return value;
			},
            setText(){
                let fullText = []

                for(let i = 1; i < 11; i++)
                {
                    let key = 'text_' + (i).toString()

                    if(this.form[key] != undefined)
					{
						let stringValue = this.filterLatinSymbols(this.form[key]);
						// this.form[key] = stringValue.charAt(0).toUpperCase() + stringValue.slice(1);
						fullText.push(this.form[key])
					}
                }
                this.form.text = fullText.join("###")
            },
        },
        validations: {
            form: {
                category: {
                    required
                },
                title: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(37)
                },
				text_1: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
				text_2: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
				text_3: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
				text_4: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
				text_5: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
				text_6: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
				text_7: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
				text_8: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
				text_9: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
				text_10: {
                    required,
                    minLength: minLength(30),
                    maxLength: maxLength(100)
                },
                sex: {
                    required
                }
            }
        },
        watch: {
            $v: {
                handler: function (val) {
                    if(!val.$invalid) {
                        this.$emit('can-continue', {value: true});
                    } else {
                        this.$emit('can-continue', {value: false});
                        setTimeout(()=> {
                            this.$emit('change-next', {nextBtnValue: false});
                        }, 3000)
                    }
                },
                deep: true
            },
            clickedNext(val) {
                if(val === true) {
                    
                }
            },
            "form.category": function(val) {
                this.setIsModify()
			},
            "form.title": function(val) {
				this.form.title = this.filterLatinSymbols(val);

                if(this.form.title.length > 37)
                    this.form.title = this.form.title.substring(0, 37)

                this.setIsModify()
			},
            "form.text_1": function(val) {
				this.form.text_1 = this.filterLatinSymbolsAndSetText(val);

                if(this.form.text_1.length > 100)
                    this.form.text_1 = this.form.text_1.substring(0, 100)
			},
            "form.text_2": function(val) {
				this.form.text_2 = this.filterLatinSymbolsAndSetText(val);

                if(this.form.text_2.length > 100)
                    this.form.text_2 = this.form.text_2.substring(0, 100)
			},
            "form.text_3": function(val) {
				this.form.text_3 = this.filterLatinSymbolsAndSetText(val);

                if(this.form.text_3.length > 100)
                    this.form.text_3 = this.form.text_3.substring(0, 100)
			},
            "form.text_4": function(val) {
				this.form.text_4 = this.filterLatinSymbolsAndSetText(val);

                if(this.form.text_4.length > 100)
                    this.form.text_4 = this.form.text_4.substring(0, 100)
			},
            "form.text_5": function(val) {
				this.form.text_5 = this.filterLatinSymbolsAndSetText(val);

                if(this.form.text_5.length > 100)
                    this.form.text_5 = this.form.text_5.substring(0, 100)
			},
            "form.text_6": function(val) {
				this.form.text_6 = this.filterLatinSymbolsAndSetText(val);

                if(this.form.text_6.length > 100)
                    this.form.text_6 = this.form.text_6.substring(0, 100)
			},
            "form.text_7": function(val) {
				this.form.text_7 = this.filterLatinSymbolsAndSetText(val);

                if(this.form.text_7.length > 100)
                    this.form.text_7 = this.form.text_7.substring(0, 100)
			},
            "form.text_8": function(val) {
				this.form.text_8 = this.filterLatinSymbolsAndSetText(val);

                if(this.form.text_8.length > 100)
                    this.form.text_8 = this.form.text_8.substring(0, 100)
			},
            "form.text_9": function(val) {
				this.form.text_9 = this.filterLatinSymbolsAndSetText(val);

                if(this.form.text_9.length > 100)
                    this.form.text_9 = this.form.text_9.substring(0, 100)
			},
            "form.text_10": function(val) {
				this.form.text_10 = this.filterLatinSymbolsAndSetText(val);
                if(this.form.text_10.length > 100)
                    this.form.text_10 = this.form.text_10.substring(0, 100)
                // this.$v.form.text_10.$model = this.form.text_10;
			},
            "form.text": function(val){
                
                this.setIsModify()
            },
            "form.sex": function(val){
                this.$parent.$parent.post.sex = val;
                
                for(let item of this.$parent.$children)
                    if(item.currentStep.name == 'services')
                        item.storeRemains()
                
                this.setIsModify()
            }
        },
        mounted() {
            if(!this.$v.$invalid) {
                this.$emit('can-continue', {value: true});
            } else {
                this.$emit('can-continue', {value: false});
            }
            
            if(this.$parent.$parent.post.text.length > 0)
            {
                this.$parent.$parent.post.text.split('###').forEach((value, index) => {
                    this.form['text_' + (index + 1)] = value;
                });
            }

            if(
                window.localStorage.getItem('isModify' + this.$parent.$parent.post.id) === "true"
                && this.$parent.$parent.post.status != "creating"
            )
                this.isModify = true
        }
    }
</script>