<template>
    <section>
        <div class="row">
            <div class="col-12"><hr>&nbsp;</div>
        </div>
        <checkphone :user="$parent.$parent.user" :post="$parent.$parent.post" ref="checkphone"/>
        <div class="edit-wrap-section-place">
            <div class="container">
                <!--div class="wrap-icon1"></div-->
                <div class="container-two">
                    <h2>¿Dónde quieres anunciarte?</h2>
                    <!--p class="edit-desc">Introduce tu ciudad</p>
                    <v-select
                        v-model.trim="$v.form.place.$model"
                        :class="{ 'input-error': $v.form.place.$error }"
                        :options="placesoption"
                        :searchable="true"
                        class="style-chooser chooser-full-width"
                        placeholder="Madrid, Barcelona, Barrio Salamanca, ..."
                    /-->
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Provincia:</span>
                                </div>
                                <v-select
                                    v-model.trim="$v.form.province.$model"
                                    :class="{ 'input-error': $v.form.province.$error }"
                                    :options="provinceoption"
                                    :searchable="false"
                                    class="style-chooser"
                                />
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Población:</span>
                                </div>
                               <v-select
                                    v-model.trim="$v.form.town.$model"
                                    :class="{ 'input-error': $v.form.town.$error }"
                                    :options="townoption"
                                    :searchable="false"
                                    class="style-chooser"
                                />
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="select-area option-chooser">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Zona:</span>
                                </div>
                                <input type="text" v-model="form.zona" class="input input-fullwidth"/>
                            </div>
                        </div>

                    </div>

                    <h3>Ubicacion del inmueble</h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Localidad</span>
                                </div>
                                <input type="text" v-model="form.zona" class="input input-fullwidth"/>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Nombre de la via</span>
                                </div>
                                <input type="text" v-model="form.zona" class="input input-fullwidth"/>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Numero de via</span>
                                </div>
                                <input type="text" v-model="form.zona" class="input input-fullwidth"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">&nbsp;</div>
                    </div>
                    <div class="row frow-input-padding">
                        <div class="col-sm-12">
                            <div class="input-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Nombre:</span>
                                </div>
                                <input
                                    type="text"
                                    class="input input-fw"
                                    v-model.trim="$v.form.name.$model"
                                    :class="{ 'input-error': $v.form.name.$error }"
                                />
                            </div>
                            <div class="input-area-error">
                            <span :class="{'access-error': !$v.form.name.$error}">
                                Llevas {{ form.name.length }} caracteres. El mínimo son 2, el máximo son 15.
                            </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 col-md-6 col-lg-4">
                                <div class="select-area">
                                    <span class="input-label">¿Eres profesional inmobiliario?</span>
                                </div>
                                <v-select
                                    :options="ages"
                                    :searchable="true"
                                    class="style-chooser"
                                    v-model.trim="$v.form.age.$model"
                                    :class="{ 'input-error': $v.form.age.$error }"
                                />
                        </div>

                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Elige el tipo de inmueble:</span>
                            </div>
                            <v-select
                                v-model.trim="$v.form.town.$model"
                                :class="{ 'input-error': $v.form.town.$error }"
                                :options="townoption"
                                :searchable="false"
                                class="style-chooser"
                            />
                        </div>

                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Operacion:</span>
                            </div>
                            <div class="custom-control custom-radio">
                                <input
                                    type="radio"
                                    id="customRadio1"
                                    name="customRadio"
                                    v-model="$v.form.town.$model"
                                    :value="'Venta'"
                                    class="custom-control-input"
                                    :class="{ 'input-error': $v.form.town.$error }"
                                    v-on:change="pressKey"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="customRadio1"
                                >Venta</label>
                            </div>
                            <div class="custom-control custom-radio center-radio">
                                <input
                                    type="radio"
                                    id="customRadio2"
                                    name="customRadio"
                                    v-model="$v.form.town.$model"
                                    :value="'Alquiler'"
                                    class="custom-control-input"
                                    :class="{ 'input-error': $v.form.town.$error }"
                                    v-on:change="pressKey"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="customRadio2"
                                >Alquiler</label>
                            </div>
                        </div>

                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Planta</span>
                            </div>
                            <v-select
                                v-model.trim="$v.form.town.$model"
                                :class="{ 'input-error': $v.form.town.$error }"
                                :options="townoption"
                                :searchable="false"
                                class="style-chooser"
                            />
                        </div>
                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Puerta</span>
                            </div>
                            <v-select
                                v-model.trim="$v.form.town.$model"
                                :class="{ 'input-error': $v.form.town.$error }"
                                :options="townoption"
                                :searchable="false"
                                class="style-chooser"
                            />
                        </div>

                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Numero o kilometro</span>
                            </div>
                            <div class="custom-control custom-radio">
                                <input
                                    type="radio"
                                    id="customRadio1"
                                    name="customRadio"
                                    v-model="$v.form.town.$model"
                                    :value="'Numero'"
                                    class="custom-control-input"
                                    :class="{ 'input-error': $v.form.town.$error }"
                                    v-on:change="pressKey"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="customRadio1"
                                >Numero</label>
                            </div>

                            <div class="custom-control custom-radio center-radio">
                                <input
                                    type="radio"
                                    id="customRadio2"
                                    name="customRadio"
                                    v-model="$v.form.town.$model"
                                    :value="'Kilometro'"
                                    class="custom-control-input"
                                    :class="{ 'input-error': $v.form.town.$error }"
                                    v-on:change="pressKey"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="customRadio2"
                                >Kilometro</label>
                            </div>
                            <div class="form-group form-group-input"
                            >
                                <label for="numero_de_via">Numero de via</label>
                                <input
                                    type="text"
                                    class="input input-fullwidth"
                                    id="numero_de_via"
                                    v-model="form.zona"
                                />
                            </div>
                        </div>

                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Necesita una factura?</span>
                            </div>
                            <div class="custom-control custom-radio">
                                <input
                                    type="radio"
                                    id="facturaRadio1"
                                    v-model="$v.form.town.$model"
                                    :value="'Venta'"
                                    class="custom-control-input"
                                    v-on:change="needFacturaBlockShow"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="customRadio1"
                                >Si</label>
                            </div>

                            <div class="custom-control custom-radio center-radio">
                                <input
                                    type="radio"
                                    id="facturaRadio2"
                                    v-model="$v.form.town.$model"
                                    :value="'Alquiler'"
                                    class="custom-control-input"
                                    v-on:change="needFacturaBlockShow"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="customRadio2"
                                >No</label>
                            </div>
                        </div>

                        <!--If factura radiobutton is 'Si'-->
                        <div class="col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 step1-factura">
                            <h2>Factura</h2>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group form-group-input"
                                    >
                                        <label for="social">Empresa o razón social:</label>
                                        <input
                                            type="text"
                                            class="input input-fullwidth"
                                            id="social"
                                            v-model="form.zona"
                                        />
                                        <!--                                        <small class="form-text text-muted" v-if="$v.form.social.$error">Este campo es
                                                                                    obligatorio</small>-->
                                    </div>
                                    <div class="form-group form-group-input">
                                        <label for="name">Nombre:</label>
                                        <input
                                            type="text"
                                            class="input input-fullwidth"
                                            id="name"
                                            v-model="form.zona"
                                        />
                                    </div>
                                    <div class="form-group form-group-input">
                                        <label for="postal">Dirección postal:</label>
                                        <input
                                            class="input input-fullwidth"
                                            id="postal"
                                            v-model="form.zona"
                                        />
                                    </div>

                                    <div
                                        class="form-group form-group-input"
                                    >
                                        <label for="inputEmail">Email:</label>
                                        <input
                                            type="email"
                                            class="input input-fullwidth"
                                            id="inputEmail"
                                            v-model="form.zona"
                                        />
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div
                                        class="form-group form-group-input"
                                    >
                                        <label for="cif">CIF:</label>
                                        <div class="check-cif">
                                            <input
                                                class="input input-fullwidth"
                                                id="cif"
                                                v-model="form.zona"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        class="form-group form-group-input"
                                    >
                                        <label for="surname">Apellidos:</label>
                                        <input
                                            type="text"
                                            class="input input-fullwidth"
                                            id="surname"
                                            v-model="form.zona"
                                        />
                                    </div>

                                    <div
                                        class="form-group form-group-input"
                                    >
                                        <label for="country">País:</label>
                                        <v-select
                                            :options="['España']"
                                            :searchable="false"
                                            id="country"
                                            class="style-chooser select-full-width"
                                            v-model="form.zona"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <span class="modify-text" v-if="isModify">Para guardar tus cambios tienes que llegar hasta el último paso y guardar tu anuncio.</span>
    </section>
</template>

<script>
    import {maxLength, minLength, minValue, numeric, required} from "vuelidate/lib/validators";
    import Notify from "./../Notify";
    // import Mapstyles from "../mapstyle";
    // import Sobre from "./Sobre.js";
    // import Services from "./Services.js";

    export default
    {
        props: ['clickedNext', 'currentStep'],
        // mixins: [validationMixin],
        data() {
            return {
                ages: _.range(18, 91, 1),
                needFactura: false,
                places: [],
                form: {
                    town: this.$parent.$parent.post.town ? this.$parent.$parent.post.town : "",
                    province: this.$parent.$parent.post.province ? this.$parent.$parent.post.province : "",
                    // place: this.$parent.$parent.post.place ? this.$parent.$parent.post.place : "",
                    name: this.$parent.$parent.post.name ? this.$parent.$parent.post.name : "",
                    age: this.$parent.$parent.post.age,
                    zona: this.$parent.$parent.post.zona
                },
                isModify: false
            }
        },
        validations: {
            form: {
                town: {
                    required
                },
                province: {
                    required
                },
                /*place: {
                    required
                },*/
                name: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(15)
                },
                age: {
                    required
                }
            }
        },
        computed: {
            placesoption() {
                return [...new Set(this.places.map(item => item.string))];
            },
            provinceoption() {
                let array = this.places;

                // array = array.filter(data => data.province != null);

                if (this.form.town != "") {
                    //array = array.filter(data => data.town == this.form.town);
                }
                const result = [...new Set(array.map(item => item.province))].sort()
                return result
            },
            townoption() {
                let array = this.places;
                array = array.filter(data => data.town != null);

                if (this.form.province != "") {
                    array = array.filter(data => data.province == this.form.province);
                }
                const result = [...new Set(array.map(item => item.town))]
                return result;
            }
        },
        watch: {
            "form.name": function(val) {
                this.setIsModify()
				this.form.name = this.filterLatinSymbols(val);

                if(this.form.name.length > 15)
                    this.form.name = this.form.name.substring(0, 15)
			},
            "form.zona": function(val) {
                this.setIsModify()
				this.form.zona = this.filterLatinSymbols(val);
			},
            "form.province": function(val, oldVal) {
                this.setIsModify()
                this.form.town = ""
            },
            "form.town": function(val, oldVal) {
                this.setIsModify()
            },
            "form.age": function(val, oldVal) {
                this.setIsModify()
            },
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
            async clickedNext(val) {}
        },
        methods: {
            pressKey(){
                this.setIsModify()
            },
            setIsModify()
            {
                if(this.$parent.$parent.post.status != "creating")
                {
                    this.isModify = true;
                    window.localStorage.setItem('isModify' + this.$parent.$parent.post.id, true);
                }
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
            needFacturaBlockShow() {
                this.needFactura = !this.needFactura;
                this.pressKey();
            },
            saveStep(){
                return new Promise((resolve, reject) => {

                    this.$v.$reset;

                    const cf = this.$refs.checkphone.phoneSuccess;

                    if (cf == false)
                    {
                        const element = document.getElementById("edit-phone");
                        const options = { offset: -120 };
                        this.$scrollTo(element, 700, options);

                        this.$modal.show(
                            Notify,
                            {
                                title: "Error",
                                type: "error",
                                //   porterrors: error.response.data.errors,
                                message: "Confirmar número de teléfono"
                            },
                            {
                                width: "90%",
                                maxWidth: 400,
                                height: "auto"
                            }
                        );

                        reject("error");
                    }

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
                        let form = {"post_id": this.$parent.$parent.post.id, "edit": true};

                        form = Object.assign(form, this.form);

                        axios
                        .post("/post/store-step1", form)
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
            }
        },
        mounted() {

            this.places = this.$parent.$parent.places;

            if(!this.$v.$invalid) {
                this.$emit('can-continue', {value: true});
            } else {
                this.$emit('can-continue', {value: false});
            }

            if(
                window.localStorage.getItem('isModify' + this.$parent.$parent.post.id) === "true"
                && this.$parent.$parent.post.status != "creating"
            )
                this.isModify = true
        }
    }
</script>
