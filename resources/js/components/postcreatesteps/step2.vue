<template>
    <section>
        <div class="row">
            <div class="col-12">
                <hr>&nbsp;
            </div>
        </div>
        <div class="edit-wrap-section-tarif">
            <div class="container">
                <!--div class="wrap-icon3"></div-->
                <div class="container-two">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h2>Tarifas</h2>
                            <div class="tarifform">
                                <div
                                    class="row tarif-input-area"
                                    v-for="(rate, index) in  $v.form.rates.$each.$iter"
                                    :key="index + 'rate'"
                                    :class="{ 'form-group-rate__error': rate.$error }"
                                >
                                    <div class="col-5">
                                        <input
                                            type="text"
                                            class="input input-rates"
                                            v-model.trim="rate.title.$model"
                                            :class="{ 'input-error': rate.title.$error }"
                                            :disabled="true"
                                        />
                                    </div>
                                    <div class="col-5 col-lg-3">
                                        <div class="quit-area">
                                            <div class="input-group mb-2">
                                                <div class="input-with-dis">
                                                    <input
                                                        type="text"
                                                        min="0"
                                                        class="input"
                                                        v-model.trim="rate.price.$model"
                                                        v-mask="'######'"
                                                        placeholder="0"
                                                        :class="{ 'input-error': rate.price.$error }"
                                                        v-on:keyup="pressKey"
                                                    />
                                                </div>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">&euro;</div>
                                                </div>
                                            </div>
                                            <!-- <img src="/img/quit.svg" alt="quit" class="quit" @click="removeRate(index)" v-if="index > 1" /> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 edit-wrap-section-horario">
                            <h2>Horario</h2>
                            <div class="horario-wrap">
                                <div class="custom-control custom-radio">
                                    <input
                                        type="radio"
                                        id="customRadio1"
                                        name="customRadio"
                                        v-model="form.worktime"
                                        :value="'Mañana (10:00 - 22:00)'"
                                        class="custom-control-input"
                                        :class="{ 'input-error': $v.form.worktime.$error }"
                                        v-on:change="pressKey"
                                    />
                                    <label
                                        class="custom-control-label semibold radio-padd"
                                        for="customRadio1"
                                    >Mañana (10:00 - 22:00)</label>
                                </div>
                                <div class="custom-control custom-radio center-radio">
                                    <input
                                        type="radio"
                                        id="customRadio2"
                                        name="customRadio"
                                        v-model="form.worktime"
                                        :value="'Tarde (22:00 - 10:00)'"
                                        class="custom-control-input"
                                        :class="{ 'input-error': $v.form.worktime.$error }"
                                        v-on:change="pressKey"
                                    />
                                    <label
                                        class="custom-control-label semibold radio-padd"
                                        for="customRadio2"
                                    >Tarde (22:00 - 10:00)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input
                                        type="radio"
                                        id="customRadio3"
                                        name="customRadio"
                                        v-model="form.worktime"
                                        class="custom-control-input"
                                        :value="'24 Horas'"
                                        :class="{ 'input-error': $v.form.worktime.$error }"
                                        v-on:change="pressKey"
                                    />
                                    <label
                                        class="custom-control-label semibold radio-padd"
                                        for="customRadio3"
                                    >24 Horas</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="edit-wrap-section-sobre">
            <div class="container">
                <!--div class="wrap-icon7"></div-->
                <div class="container-two">
                    <h2>Sobre ti</h2>
                    <div class="sobre-wrapper">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div
                                    class="radio-wrap-area radio-wrap-area-editer"
                                    v-for="(sobre, index) in form.sobres.slice(0, 6)"
                                    :key="index + '-sobre1'"
                                >
                                    <label
                                        class="custom-control custom-radio"
                                        :class="{'pink-activ': (sobre.active == true)}"
                                    >
                                        <input
                                            type="checkbox"
                                            :id="'sobre' + index"
                                            :name="sobre.group"
                                            v-model="sobre.active"
                                            class="custom-control-input"
                                            @click="uncheck(sobre.name)"
                                        />
                                        <span class="custom-control-label" :for="'sobre' + index">
                    {{ sobre.name }}
                    <img
                        class="arrow-down"
                        v-if="sobre.options.length > 0"
                        src="/img/down.svg"
                        width="20"
                        alt="down"
                    />
                </span>
                                    </label>
                                    <div
                                        class="custom-options-wrapper"
                                        v-if="(sobre.options.length > 0) && (sobre.active)"
                                    >
                                        <div class="option-border-left">
                                            <div
                                                class="radio-wrap-area"
                                                v-for="(option, index1) in sobre.options"
                                                :key="index1 + '-option1'"
                                            >
                                                <label
                                                    class="custom-control custom-radio"
                                                    :class="{'pink-activ': (option.active == true)}"
                                                >
                                                    <input
                                                        :name="sobre.group"
                                                        type="checkbox"
                                                        :id="'option1' + index1"
                                                        v-model="option.active"
                                                        class="custom-control-input"
                                                        @click="uncheckOp(option.name, sobre.name)"
                                                    />
                                                    <span
                                                        class="custom-control-label"
                                                        :for="'option1' + index1"
                                                    >{{ option.name }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div
                                    class="radio-wrap-area radio-wrap-area-editer"
                                    v-for="(sobre, index) in form.sobres.slice(6, 12)"
                                    :key="index + '-sobre2'"
                                >
                                    <label
                                        class="custom-control custom-radio"
                                        :class="{'pink-activ': (sobre.active == true)}"
                                    >
                                        <input
                                            type="checkbox"
                                            :id="'sobre' + index"
                                            :name="sobre.group"
                                            v-model="sobre.active"
                                            class="custom-control-input"
                                            @click="uncheck(sobre.name)"
                                        />
                                        <span class="custom-control-label" :for="'sobre' + index">
                    {{ sobre.name }}
                    <img
                        class="arrow-down"
                        v-if="sobre.options.length > 0"
                        src="/img/down.svg"
                        width="20"
                        alt="down"
                    />
                </span>
                                    </label>
                                    <div
                                        class="custom-options-wrapper"
                                        v-if="(sobre.options.length > 0) && (sobre.active)"
                                    >
                                        <div class="option-border-left">
                                            <div
                                                class="radio-wrap-area"
                                                v-for="(option, index2) in sobre.options"
                                                :key="index2 + '-option2'"
                                            >
                                                <label
                                                    class="custom-control custom-radio"
                                                    :class="{'pink-activ': (option.active == true)}"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        :id="'option2' + index2"
                                                        v-model="option.active"
                                                        :name="sobre.group"
                                                        class="custom-control-input"
                                                        @click="uncheckOp(option.name, sobre.name)"
                                                    />
                                                    <span
                                                        class="custom-control-label"
                                                        :for="'option2' + index2"
                                                    >{{ option.name }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div
                                    class="radio-wrap-area radio-wrap-area-editer"
                                    v-for="(sobre, index) in form.sobres.slice(12, 19)"
                                    :key="index + '-sobre3'"
                                >
                                    <label
                                        class="custom-control custom-radio"
                                        :class="{'pink-activ': (sobre.active == true) || sobre.options.find(elem => {return elem.active == true})}"
                                    >
                                        <input
                                            type="checkbox"
                                            :id="'sobre' + index"
                                            :name="sobre.group"
                                            v-model="sobre.active"
                                            class="custom-control-input"
                                            @click="uncheck(sobre.name)"
                                        />
                                        <span class="custom-control-label" :for="'sobre' + index">
                    {{ sobre.name }}
                    <img
                        class="arrow-down"
                        v-if="sobre.options.length > 0"
                        src="/img/down.svg"
                        width="20"
                        alt="down"
                    />
                </span>
                                    </label>
                                    <div
                                        class="custom-options-wrapper"
                                        v-show="(sobre.options.length > 0) && (sobre.active)"
                                    >
                                        <div class="option-border-left">
                                            <div
                                                class="radio-wrap-area"
                                                v-for="(option, index3) in sobre.options"
                                                :key="index3 + '-option3'"
                                            >
                                                <label
                                                    class="custom-control custom-radio"
                                                    :class="{'pink-activ': (option.active == true)}"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        :id="'option3' + index3"
                                                        :name="sobre.group"
                                                        v-model="option.active"
                                                        class="custom-control-input"
                                                        @click="uncheckOp(option.name, sobre.name)"
                                                    />
                                                    <span
                                                        class="custom-control-label"
                                                        :for="'option3' + index3"
                                                    >{{ option.name }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-area-error">
                        <span :class="{'access-error': isSobres}">
                            Ha seleccionado {{ sobresCount }}, mínimo 4
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="edit-wrap-section-sobre edit-wrap-section-serv">
            <div class="container">
                <!--div class="wrap-icon7"></div-->
                <div class="container-two">
                    <h2>Servicios</h2>
                    <div class="sobre-wrapper">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div
                                    class="radio-wrap-area radio-wrap-area-editer"
                                    v-for="(service, index) in form.services.slice(0, 4)"
                                    :key="index + '-service1'"
                                >
                                    <label
                                        class="custom-control custom-radio"
                                        :class="{'pink-activ': (service.active == true)}"
                                    >
                                        <input
                                            type="checkbox"
                                            :id="'service' + index"
                                            v-model="service.active"
                                            @click="uncheck2(service.name)"
                                            :name="service.group"
                                            class="custom-control-input"
                                        />
                                        <span class="custom-control-label" :for="'service' + index">
                    {{ service.name }}
                    <img
                        class="arrow-down"
                        v-if="service.options.length > 0"
                        src="/img/down.svg"
                        width="20"
                        alt="down"
                    />
                </span>
                                    </label>
                                    <div
                                        class="custom-options-wrapper"
                                        v-if="(service.options.length > 0) && (service.active)"
                                    >
                                        <div class="option-border-left">
                                            <div
                                                class="radio-wrap-area"
                                                v-for="(option, index1) in service.options"
                                                :key="index1 + '-option1'"
                                            >
                                                <label
                                                    class="custom-control custom-radio"
                                                    :class="{'pink-activ': (option.active == true)}"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        :id="'option1' + index1"
                                                        v-model="option.active"
                                                        :name="option.group"
                                                        @click="uncheckOp2(option.name, service.name)"
                                                        class="custom-control-input"
                                                    />
                                                    <span
                                                        class="custom-control-label"
                                                        :for="'option1' + index1"
                                                    >{{ option.name }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div
                                    class="radio-wrap-area radio-wrap-area-editer"
                                    v-for="(service, index) in form.services.slice(4, 8)"
                                    :key="index + '-service2'"
                                >
                                    <label
                                        class="custom-control custom-radio"
                                        :class="{'pink-activ': (service.active == true)}"
                                    >
                                        <input
                                            type="checkbox"
                                            :id="'service' + index"
                                            v-model="service.active"
                                            class="custom-control-input"
                                            :name="service.group"
                                            @click="uncheck2(service.name)"
                                        />
                                        <span class="custom-control-label" :for="'service' + index">
                    {{ service.name }}
                    <img
                        class="arrow-down"
                        v-if="service.options.length > 0"
                        src="/img/down.svg"
                        width="20"
                        alt="down"
                    />
                </span>
                                    </label>
                                    <div
                                        class="custom-options-wrapper"
                                        v-if="(service.options.length > 0) && (service.active)"
                                    >
                                        <div class="option-border-left">
                                            <div
                                                class="radio-wrap-area"
                                                v-for="(option, index2) in service.options"
                                                :key="index2 + '-option2'"
                                            >
                                                <label
                                                    class="custom-control custom-radio"
                                                    :class="{'pink-activ': (option.active == true)}"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        :id="'option2' + index2"
                                                        :name="option.group"
                                                        v-model="option.active"
                                                        class="custom-control-input"
                                                        @click="uncheckOp2(option.name, service.name)"
                                                    />
                                                    <span
                                                        class="custom-control-label"
                                                        :for="'option2' + index2"
                                                    >{{ option.name }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div
                                    class="radio-wrap-area radio-wrap-area-editer"
                                    v-for="(service, index) in form.services.slice(8, 11)"
                                    :key="index + '-service3'"
                                    v-if="(service.group != 'groupz10') || (form.category == 'Travesti')"
                                >
                                    <label
                                        class="custom-control custom-radio"
                                        :class="{'pink-activ': (service.active == true) || service.options.find(elem => {return elem.active == true})}"
                                    >
                                        <input
                                            type="checkbox"
                                            :id="'service' + index"
                                            v-model="service.active"
                                            class="custom-control-input"
                                            :name="service.group"
                                            @click="uncheck2(service.name)"
                                        />
                                        <span class="custom-control-label" :for="'service' + index">
                    {{ service.name }}
                    <img
                        class="arrow-down"
                        v-if="service.options.length > 0"
                        src="/img/down.svg"
                        width="20"
                        alt="down"
                    />
                </span>
                                    </label>
                                    <div
                                        class="custom-options-wrapper sdf4"
                                        v-show="(service.options.length > 0) && (service.active)"
                                    >
                                        <div class="option-border-left">
                                            <div
                                                class="radio-wrap-area"
                                                v-for="(option, index3) in service.options"
                                                :key="index3 + '-option3'"
                                            >
                                                <label
                                                    class="custom-control custom-radio"
                                                    :class="{'pink-activ': (option.active == true)}"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        :id="'option3' + index3"
                                                        v-model="option.active"
                                                        class="custom-control-input"
                                                        :name="option.group"
                                                        @click="uncheckOp2(option.name, service.name)"
                                                    />
                                                    <span
                                                        class="custom-control-label"
                                                        :for="'option3' + index3"
                                                    >{{ option.name }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-area-error">
                        <span :class="{'access-error': isServices}">
                            Ha seleccionado {{ servicesCount }}, mínimo 2
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!--Equipamento-->
        <div class="edit-wrap-section-sobre edit-wrap-section-serv">
            <div class="container">
                <!--div class="wrap-icon7"></div-->
                <div class="container-two">
                    <h4 class="mb-3">Equipamento</h4>
                    <div class="custom-control custom-radio">
                        <input type="radio" v-model="form.equipment"
                               value="Cocina no equipada y casa sin muebles"
                               id="equipamentoRadio1" name="equipamento" class="custom-control-input">
                        <label class="custom-control-label" for="equipamentoRadio1">Cocina no equipada y casa sin
                            muebles</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" v-model="form.equipment"
                               value="Cocina equipada y casa sin muebles"
                               id="equipamentoRadio2" name="equipamento" class="custom-control-input">
                        <label class="custom-control-label" for="equipamentoRadio2">Cocina equipada y casa sin
                            muebles</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" v-model="form.equipment"
                               id="equipamentoRadio3"
                               name="equipamento"
                               value="Cocina equipada y casa sin amueblada"
                               class="custom-control-input">
                        <label class="custom-control-label" for="equipamentoRadio3">Cocina equipada y casa sin
                            amueblada</label>
                    </div>
                </div>
            </div>
        </div>

        <!--Certificado energético-->
        <div class="edit-wrap-section-sobre edit-wrap-section-serv">
            <div class="container">
                <!--div class="wrap-icon7"></div-->
                <div class="container-two">
                    <div class="row">
                        <div class="col-lg-4">
                            <h4 class="mb-3">Certificado energético</h4>
                            <p class="mb-2 text-primary font-regular">¿Que información debes rellenar?</p>

                            <div class="form-group mb-3">
                                <label for="power_rating">Calificación de consumo de energía</label>
                                <v-select
                                    :options="['Aún no dispone','A', 'B', 'C', 'D', 'E', 'F', 'G','En trámite','Inmueble exento']"
                                    :searchable="false"
                                    placeholder="Selecciona"
                                    id="power_rating"
                                    class="style-chooser select-full-width"
                                    v-model="form.power_rating"
                                />
                            </div>

                            <div class="form-group form-group-input mb-3">
                                <label for="power_consumption">Consumo de energia (opcional)</label>
                                <input type="text" v-model="form.power_consumption" id="power_consumption"
                                       class="input input-fullwidth">
                            </div>

                            <div class="form-group mb-3">
                                <label for="emissions_rating">Calificación de emisiónes</label>
                                <v-select
                                    :options="['A', 'B', 'C', 'D', 'E', 'F', 'G']"
                                    :searchable="false"
                                    placeholder="Selecciona"
                                    id="emissions_rating"
                                    class="style-chooser select-full-width"
                                    v-model="form.emissions_rating"
                                />
                            </div>

                            <div class="form-group form-group-input mb-3">
                                <label for="emissions_consumption">Consumo de emisiónes (opcional)</label>
                                <input type="text" v-model="form.emissions_consumption" id="emissions_consumption"
                                       class="input input-fullwidth">
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
import SobreWomen from "./../SobreWomen.js";
import ServicesWomen from "./../ServicesWomen.js";
import SobreMen from "./../SobreMen.js";
import ServicesMen from "./../ServicesMen.js";

export default {
    props: ['clickedNext', 'currentStep'],
    // mixins: [validationMixin],
    data() {
        return {
            isModify: false,
            form: {
                equipment: this.$parent.$parent.post.equipment ? this.$parent.$parent.post.equipment : '',
                power_rating: this.$parent.$parent.post.power_rating ? this.$parent.$parent.post.power_rating : '',
                power_consumption: this.$parent.$parent.post.power_consumption ? this.$parent.$parent.post.power_consumption : '',
                emissions_rating: this.$parent.$parent.post.emissions_rating ? this.$parent.$parent.post.emissions_rating : '',
                emissions_consumption: this.$parent.$parent.post.emissions_consumption ? this.$parent.$parent.post.emissions_consumption : '',
                rates: [
                    {
                        title: "30 Minutos",
                        price: ''
                    },
                    {
                        title: "1 Hora",
                        price: ''
                    },
                    {
                        title: "2 Horas",
                        price: ''
                    },
                    {
                        title: "Noche",
                        price: ''
                    }
                ],
                worktime: 'Mañana (10:00 - 22:00)',
                sobres: SobreWomen.sobr,
                services: ServicesWomen.serv,
            },
            oldservices: [],
            oldremains: []
        }
    },
    validations: {
        form: {
            rates: {
                required,
                // minLength: minLength(1),
                $each: {
                    title: {
                        required,
                        minLength: minLength(2),
                        maxLength: maxLength(50)
                    },
                    price: {
                        required,
                        minValue: minValue(1), // TODO > 20
                        numeric
                    }
                }
            },
            worktime: {
                required,
            }
        }
    },
    methods: {
        pressKey() {
            this.setIsModify()
        },
        setIsModify() {
            if (this.$parent.$parent.post.status != "creating") {
                this.isModify = true;
                window.localStorage.setItem('isModify' + this.$parent.$parent.post.id, true);
            }
        },
        saveStep() {
            return new Promise((resolve, reject) => {

                this.$v.form.$touch();

                if (this.$v.form.$error) {
                    this.$nextTick(() => {
                        const element = document.querySelector(".input-error");
                        const options = {offset: -120};
                        this.$scrollTo(element, 200, options);
                    });

                    reject("error");
                } else if (this.sobresCount < 4 || this.servicesCount < 2) {

                    this.$nextTick(() => {
                        const element = document.querySelector(".sobre-wrapper");
                        const options = {offset: -120};
                        this.$scrollTo(element, 200, options);
                    });

                    this.$modal.show(
                        Notify,
                        {
                            title: "Error",
                            type: "error",
                            //   porterrors: error.response.data.errors,
                            message: "Tienes algunos campos mal redactados, corrígelos antes de guardar."
                        },
                        {
                            width: "90%",
                            maxWidth: 400,
                            height: "auto"
                        }
                    );

                    reject("error");
                } else {
                    let form = {"post_id": this.$parent.$parent.post.id};

                    form = Object.assign(form, this.form);

                    axios
                        .post("/post/store-step2", form)
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
        uncheck(name) {
            this.form.sobres.filter(elem => {
                if (elem.options.length > 0 && elem.name != name) {
                    elem.active = false;
                }
            });

            const sob = this.form.sobres.find(elem => {
                return elem.name == name;
            });
            this.form.sobres.filter(elem => {
                if (elem.group == sob.group) {
                    elem.active = false;
                }
                if (elem.name == sob.name) {
                    if (sob.active == true) {
                        elem.active = false;
                    } else {
                        elem.active = true;
                    }
                }
            });
        },
        uncheckOp(name, sobname) {
            const sob1 = this.form.sobres.find(elem => {
                return elem.name == sobname;
            });
            const sob = sob1.options.find(elem => {
                return elem.name == name;
            });
            sob1.options.filter(elem => {
                if (elem.group == sob.group) {
                    elem.active = false;
                }
                if (elem.name == sob.name) {
                    if (sob.active == true) {
                        elem.active = false;
                    } else {
                        elem.active = true;
                    }
                }
            });
        },
        uncheck2(name) {
            this.form.services.filter(elem => {
                if (elem.options.length > 0 && elem.name != name) {
                    elem.active = false;
                }
            });

            const sob = this.form.services.find(elem => {
                return elem.name == name;
            });
            this.form.services.filter(elem => {
                if (elem.group == sob.group) {
                    elem.active = false;
                }
                if (elem.name == sob.name) {
                    if (sob.active == true) {
                        elem.active = false;
                    } else {
                        elem.active = true;
                    }
                }
            });
        },
        uncheckOp2(name, sobname) {
            const sob1 = this.form.services.find(elem => {
                return elem.name == sobname;
            });
            const sob = sob1.options.find(elem => {
                return elem.name == name;
            });
            sob1.options.filter(elem => {
                if (elem.group == sob.group) {
                    elem.active = false;
                }
                if (elem.name == sob.name) {
                    if (sob.active == true) {
                        elem.active = false;
                    } else {
                        elem.active = true;
                    }
                }
            });
        },
        addrate() {
            if (this.form.rates.length < 6) {
                this.form.rates.push({title: "", price: ""});
            }
        },
        removeRate(id) {
            this.form.rates.splice(id, 1);
        },
        storeServices() {
            if (this.oldservices.length > 0) {

                if (this.$parent.$parent.post.sex == 'Hombre')
                    this.form.services = ServicesMen.serv;
                else if (
                    this.$parent.$parent.post.sex == 'Mujer'
                )
                    this.form.services = ServicesWomen.serv;

                this.form.services.forEach((item, index) => {
                    this.oldservices.forEach(service => {
                        if (item.name == service.name) {
                            this.form.services[index].active = true;

                            if (service.childs.length > 0) {
                                this.form.services[index].active = false;
                            }
                        }
                        if (this.form.services[index].options.length > 0) {
                            this.form.services[index].options.forEach((option, indexer) => {
                                // service.forEach(child => {
                                if (service.name == option.name) {
                                    this.form.services[index].options[indexer].active = true;
                                }
                                // });
                            });
                        }
                    });
                });
            }
        },
        storeRemains() {
            if (this.oldremains.length > 0) {

                if (this.$parent.$parent.post.sex == 'Hombre')
                    this.form.sobres = SobreMen.sobr;
                else if (
                    this.$parent.$parent.post.sex == 'Mujer'
                )
                    this.form.sobres = SobreWomen.sobr;

                this.form.sobres.forEach((item, index) => {
                    this.oldremains.forEach(service => {
                        if (item.name == service.name) {
                            this.form.sobres[index].active = true;
                            if (service.childs.length > 0) {
                                this.form.sobres[index].active = false;
                            }
                        }

                        if (this.form.sobres[index].options.length > 0) {
                            this.form.sobres[index].options.forEach((option, indexer) => {
                                // service.childs.forEach(child => {
                                if (service.name == option.name) {
                                    this.form.sobres[index].options[indexer].active = true;
                                }
                                // });
                            });
                        }
                    });
                });
            }
        }
    },
    computed: {
        sobresCount() {
            const {sobres} = this.form;
            let sobresCounter = 0;
            sobres.map(s => {
                if (s.options.length === 0 && s.active === true)
                    sobresCounter++;

                if (s.options.length !== 0)
                    s.options.map(o => {
                        if (o.active === true) sobresCounter++;
                    })
            });

            return sobresCounter;
        },
        isSobres() {
            return this.sobresCount >= 4;
        },
        servicesCount() {
            const {services} = this.form;
            let servicesCounter = 0;
            services.map(s => {
                if (s.options.length === 0 && s.active === true)
                    servicesCounter++;

                if (s.options.length !== 0)
                    s.options.map(o => {
                        if (o.active === true) servicesCounter++;
                    })
            });

            return servicesCounter;
        },
        isServices() {
            return this.servicesCount >= 2;
        },
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
        "form.sobres": function () {
            this.setIsModify()
        },
        "form.services": function () {
            this.setIsModify()
        },
        clickedNext(val) {
        }
    },
    created: function () {

        let isModify = this.isModify;

        if (
            this.$parent.$parent.post.worktime != undefined
            && this.$parent.$parent.post.worktime.length > 0
        ) {
            this.form.worktime = this.$parent.$parent.post.worktime;
        }

        if (
            this.$parent.$parent.oldrates != undefined
            && this.$parent.$parent.oldrates.length > 0
        ) {
            this.form.rates = this.$parent.$parent.oldrates;
        }

        if (
            this.$parent.$parent.oldservices != undefined
            && this.$parent.$parent.oldservices.length > 0
        ) {
            this.oldservices = this.$parent.$parent.oldservices;
        }

        if (
            this.$parent.$parent.oldreminds != undefined
            && this.$parent.$parent.oldreminds.length > 0
        ) {
            this.oldremains = this.$parent.$parent.oldreminds;
        }

        this.storeServices();
        this.storeRemains();

        this.isModify = isModify;
    },
    mounted() {

        if (!this.$v.$invalid)
            this.$emit('can-continue', {value: true});
        else
            this.$emit('can-continue', {value: false});

        if (
            window.localStorage.getItem('isModify' + this.$parent.$parent.post.id) === "true"
            && this.$parent.$parent.post.status != "creating"
        )
            this.isModify = true
    }
}
</script>

<style lang="scss" scoped>
.input-group-prepend .input-group-text {
    background-color: #FE6885 !important;
    color: #fff !important;
}
</style>
