<template>
    <section>
        <div class="row">
            <div class="col-12">
                <hr>&nbsp;
            </div>
        </div>

        <div class="container">
            <div class="container-two">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-5 offset-lg-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Características del piso</h2>
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <h3 class="mb-2">Tipo de piso</h3>

                                        <div class="form-group custom-control custom-radio">
                                            <input
                                                name="floor_type"
                                                type="radio"
                                                id="floor-type-1"
                                                v-model="form.attributes.floor_type"
                                                class="custom-control-input"
                                                value="Piso"
                                            />
                                            <label for="floor-type-1"
                                                   class="custom-control-label semibold radio-padd">Piso</label>
                                        </div>

                                        <div class="form-group custom-control custom-radio">
                                            <input
                                                name="floor_type"
                                                type="radio"
                                                id="floor-type-2"
                                                v-model="form.attributes.floor_type"
                                                class="custom-control-input"
                                                value="Atico"
                                            />
                                            <label for="floor-type-2"
                                                   class="custom-control-label semibold radio-padd">Atico</label>
                                        </div>

                                        <div class="form-group custom-control custom-radio">
                                            <input
                                                name="floor_type"
                                                type="radio"
                                                id="floor-type-3"
                                                v-model="form.attributes.floor_type"
                                                class="custom-control-input"
                                                value="Duplex"
                                            />
                                            <label for="floor-type-3"
                                                   class="custom-control-label semibold radio-padd">Duplex</label>
                                        </div>

                                        <div class="form-group custom-control custom-radio">
                                            <input
                                                name="floor_type"
                                                type="radio"
                                                id="floor-type-4"
                                                v-model="form.attributes.floor_type"
                                                class="custom-control-input"
                                                value="Estudio/Loft"
                                            />
                                            <label for="floor-type-4"
                                                   class="custom-control-label semibold radio-padd">Estudio/Loft</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-2">
                                        <div class="select-area">
                                            <h3>Estado</h3>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input
                                                type="radio"
                                                id="condition1"
                                                name="condition"
                                                v-model="form.attributes.condition"
                                                :value="'A reformar'"
                                                class="custom-control-input"
                                            />
                                            <label
                                                class="custom-control-label semibold radio-padd"
                                                for="condition1"
                                            >A reformar</label>
                                        </div>
                                        <div class="custom-control custom-radio center-radio">
                                            <input
                                                type="radio"
                                                id="condition2"
                                                name="condition"
                                                v-model="form.attributes.condition"
                                                :value="'Buen estado'"
                                                class="custom-control-input"
                                            />
                                            <label
                                                class="custom-control-label semibold radio-padd"
                                                for="condition2"
                                            >Buen estado</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="select-area">
                                    <span class="input-label">m<sup><small>2</small></sup> construidos</span>
                                </div>
                                <input
                                    class="input input-fullwidth"
                                    id="consti"
                                    v-model="form.attributes.m2_built"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="select-area">
                                    <span class="input-label">m<sup><small>2</small></sup> utiles (opcional)</span>
                                </div>
                                <input
                                    class="input input-fullwidth"
                                    id="consti"
                                    v-model="form.attributes.m2_useful"
                                />
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="select-area">
                                    <span class="input-label">Numero de habitaciones en la vivienda</span>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <button class="input-group-text"
                                                        @click.prevent="form.attributes.number_rooms>1 ? form.attributes.number_rooms--: ''">
                                                    <img
                                                        src="/img/icons/minus_icon.svg"
                                                        alt="minus" width="10">
                                                </button>
                                            </div>
                                            <input
                                                type="text"
                                                class="form-control input"
                                                v-model="form.attributes.number_rooms"
                                            />
                                            <div class="input-group-append">
                                                <button class="input-group-text" min="1"
                                                        @click.prevent="form.attributes.number_rooms++">
                                                    <img src="/img/icons/plus_icon.svg"
                                                         alt="plus"
                                                         width="10">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="select-area">
                                    <span class="input-label">Numero de banos y aseos</span>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <button class="input-group-text"
                                                        @click.prevent="form.attributes.num_bathrooms >1 ? form.attributes.num_bathrooms-- : ''">
                                                    <img
                                                        src="/img/icons/minus_icon.svg"
                                                        alt="minus" width="10">
                                                </button>
                                            </div>
                                            <input
                                                type="text"
                                                class="form-control input"
                                                v-model="form.attributes.num_bathrooms"
                                            />
                                            <div class="input-group-append">
                                                <button class="input-group-text"
                                                        @click.prevent="form.attributes.num_bathrooms++">
                                                    <img src="/img/icons/plus_icon.svg"
                                                         alt="plus"
                                                         width="10">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="select-area">
                                    <h3 class="mb-2">Precio del inmueble</h3>
                                </div>


                                <div class="form-group mb-3">
                                    <label for="price">Precio</label>
                                    <input type="text" v-model="form.price"
                                           name="price"
                                           class="input input-fullwidth"
                                           id="price">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="bail">Fianza (optional)</label>
                                    <v-select
                                        :options="['1 mes', '2 meses', '3 meses']"
                                        :searchable="false"
                                        placeholder="Selecciona"
                                        id="bail"
                                        class="style-chooser select-full-width"
                                        v-model="form.bail"
                                    />
                                </div>

                                <div class="form-group mb-3">
                                    <h4 class="mb-3">Equipamento</h4>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" v-model="form.attributes.equipment"
                                               value="Cocina no equipada y casa sin muebles"
                                               id="equipamentoRadio1" name="equipamento" class="custom-control-input">
                                        <label class="custom-control-label" for="equipamentoRadio1">Cocina no equipada y
                                            casa sin
                                            muebles</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" v-model="form.attributes.equipment"
                                               value="Cocina equipada y casa sin muebles"
                                               id="equipamentoRadio2" name="equipamento" class="custom-control-input">
                                        <label class="custom-control-label" for="equipamentoRadio2">Cocina equipada y
                                            casa sin
                                            muebles</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" v-model="form.attributes.equipment"
                                               id="equipamentoRadio3"
                                               name="equipamento"
                                               value="Cocina equipada y casa amueblada"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="equipamentoRadio3">Cocina equipada y
                                            casa amueblada</label>
                                    </div>
                                </div>

                                <div class="form-group">
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
                                        <div class="input-group group-a">
                                            <input type="text" v-model="form.power_consumption" id="power_consumption"
                                                   class="input form-control">
                                            <div class="input-group-append">
                                                kWh/m<sup>2</sup> año
                                            </div>
                                        </div>
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
                                        <div class="input-group group-a">
                                            <input type="text" v-model="form.emissions_consumption"
                                                   id="emissions_consumption"
                                                   class="input form-control">
                                            <div class="input-group-append">
                                                kg CO2/m<sup>2</sup> año
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-5">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="select-area">
                                    <h3 class="mb-2">Fachada del inmueble</h3>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input
                                        type="radio"
                                        id="customRadio11"
                                        name="customRadio11"
                                        v-model="form.attributes.building_facade"
                                        :value="'Exterior'"
                                        class="custom-control-input"
                                    />
                                    <label
                                        class="custom-control-label semibold radio-padd"
                                        for="customRadio11"
                                    >Exterior</label>
                                </div>
                                <div class="custom-control custom-radio center-radio">
                                    <input
                                        type="radio"
                                        id="customRadio22"
                                        name="customRadio11"
                                        v-model="form.attributes.building_facade"
                                        :value="'Interior'"
                                        class="custom-control-input"
                                    />
                                    <label
                                        class="custom-control-label semibold radio-padd"
                                        for="customRadio22"
                                    >Interior</label>
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="select-area">
                                    <h3 class="mb-2">Tiene ascensor</h3>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input
                                        type="radio"
                                        id="has_elevator_1"
                                        name="has_elevator"
                                        v-model="form.attributes.has_elevator"
                                        :value="'Si tiene'"
                                        class="custom-control-input"
                                    />
                                    <label
                                        class="custom-control-label semibold radio-padd"
                                        for="has_elevator_1"
                                    >Si tiene</label>
                                </div>
                                <div class="custom-control custom-radio center-radio">
                                    <input
                                        type="radio"
                                        id="has_elevator_2"
                                        name="customRadio11"
                                        v-model="form.attributes.has_elevator"
                                        :value="'No tiene'"
                                        class="custom-control-input"
                                    />
                                    <label
                                        class="custom-control-label semibold radio-padd"
                                        for="has_elevator_2"
                                    >No tiene</label>
                                </div>
                            </div>


                            <div class="col-12 mb-2">
                                <div class="select-area">
                                    <h3 class="mb-2">Orientación</h3>
                                </div>
                                <div class="custom-control custom-radio center-radio">
                                    <input
                                        type="radio"
                                        id="orientation-1"
                                        value="Norte"
                                        v-model="form.attributes.orientation"
                                        name="orientation"
                                        class="custom-control-input"
                                    />
                                    <label for="orientation-1"
                                           class="custom-control-label semibold radio-padd">Norte</label>
                                </div>
                                <div class="custom-control custom-radio center-radio">
                                    <input
                                        type="radio"
                                        id="orientation-2"
                                        value="Sur"
                                        v-model="form.attributes.orientation"
                                        name="orientation"
                                        class="custom-control-input"
                                    />
                                    <label for="orientation-2"
                                           class="custom-control-label semibold radio-padd">Sur</label>
                                </div>
                                <div class="custom-control custom-radio center-radio">
                                    <input
                                        type="radio"
                                        id="orientation-3"
                                        value="Este"
                                        v-model="form.attributes.orientation"
                                        name="orientation"
                                        class="custom-control-input"
                                    />
                                    <label for="orientation-3"
                                           class="custom-control-label semibold radio-padd">Este</label>
                                </div>
                                <div class="custom-control custom-radio center-radio">
                                    <input
                                        type="radio"
                                        id="orientation-4"
                                        value="Oeste"
                                        v-model="form.attributes.orientation"
                                        name="orientation"
                                        class="custom-control-input"
                                    />
                                    <label for="orientation-4"
                                           class="custom-control-label semibold radio-padd">Oeste</label>
                                </div>

                            </div>

                            <div class="col-12 mb-2">
                                <div class="select-area">
                                    <h3 class="mb-2">Otras características de tu vivienda</h3>
                                </div>

                                <div>
                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox"
                                               v-model="form.attributes.other_features"
                                               name="other_feathures[]"
                                               value="Armarios empotrados" class="custom-control-input"
                                               id="other-feathures-1">
                                        <label class="custom-control-label" for="other-feathures-1">Armarios
                                            empotrados</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.attributes.other_features"
                                               name="other_feathures[]"
                                               value="Aire acondicionado" class="custom-control-input"
                                               id="other-feathures-2">
                                        <label class="custom-control-label" for="other-feathures-2">Aire
                                            acondicionado</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.attributes.other_features"
                                               name="other_feathures[]"
                                               value="Terraza" class="custom-control-input" id="other-feathures-3">
                                        <label class="custom-control-label" for="other-feathures-3">Terraza</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.attributes.other_features"
                                               name="other_feathures[]"
                                               value="Balcón" class="custom-control-input" id="other-feathures-4">
                                        <label class="custom-control-label" for="other-feathures-4">Balcón</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.attributes.other_features"
                                               name="other_feathures[]"
                                               value="Trastero" class="custom-control-input" id="other-feathures-5">
                                        <label class="custom-control-label" for="other-feathures-5">Trastero</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.attributes.other_features"
                                               name="other_feathures[]"
                                               value="Plaza de garaje" class="custom-control-input"
                                               id="other-feathures-6">
                                        <label class="custom-control-label" for="other-feathures-6">Plaza de
                                            garaje</label>
                                    </div>
                                </div>


                            </div>

                            <div class="col-12">
                                <div class="select-area">
                                    <h3 class="mb-2">Otras características de tu edificio</h3>
                                </div>

                                <div class="custom-control custom-checkbox pl-4">
                                    <input type="checkbox" v-model="form.attributes.other_features"
                                           name="other_features[]"
                                           value="Piscina" class="custom-control-input" id="other-feathures-7">
                                    <label class="custom-control-label" for="other-feathures-7">Piscina</label>
                                </div>

                                <div class="custom-control custom-checkbox pl-4">
                                    <input type="checkbox" v-model="form.attributes.other_features"
                                           name="other_features[]"
                                           value="Zona verde" class="custom-control-input" id="other-feathures-8">
                                    <label class="custom-control-label" for="other-feathures-8">Zona verde</label>
                                </div>

                            </div>

                            <div class="col-12 mb-2">
                                <div class="select-area">
                                    <h3 class="mb-2">¿Que inquilinos buscas?</h3>
                                </div>
                                <p class="font-regular font-sm mb-3">Esta sección ayuda a que te contacten los inquilinos que mas cuadran con tu vivienda.</p>

                                <div class="form-group">
                                    <label for="">Número máximo de inquilinos</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <button class="input-group-text"
                                                            @click.prevent="(form.max_tenants!='' && form.max_tenants>1) ? --form.max_tenants : ''; ">
                                                        <img src="/img/icons/minus_icon.svg" alt="minus"
                                                             width="10">
                                                    </button>
                                                </div>
                                                <input type="number" min="1" v-model="form.max_tenants"
                                                       size="4"
                                                       class="form-control input" step="1">
                                                <div class="input-group-append">
                                                    <button class="input-group-text"
                                                            @click.prevent="++form.max_tenants">
                                                        <img src="/img/icons/plus_icon.svg" alt="plus"
                                                             width="10">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="font-regular font-sm">Si no quieres poner maximo, dejalo
                                        vacio</p>
                                </div>


                            </div>

                            <div class="col-12 mb-2">
                                <div class="select-area">
                                    <h4 class="mb-2">¿Apropiado para niños (0-12 años)?</h4>
                                </div>

                                <div class="custom-control custom-checkbox pl-4">
                                    <input type="checkbox" v-model="form.attributes.appropriate_children"
                                           name="appropriate_children"
                                           value="Piscina" class="custom-control-input" id="appropriate_children">
                                    <label class="custom-control-label" for="appropriate_children">La vivienda es
                                        apropiada para niños</label>
                                </div>
                            </div>


                            <div class="col-12 mb-2">
                                <div class="select-area">
                                    <h4 class="mb-2">¿Admiten mascotas?</h4>
                                </div>

                                <div class="custom-control custom-checkbox pl-4">
                                    <input type="checkbox"
                                           v-model="form.attributes.allow_pets"
                                           name="attributes[allow_pets]"
                                           class="custom-control-input" id="allow_pets">
                                    <label class="custom-control-label" for="allow_pets">Si, admito mascotas</label>
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="select-area">
                                    <h4 class="mb-2">¿La vivienda está adaptada para personas con movilidad
                                        reducida?</h4>
                                </div>

                                <div class="custom-control custom-checkbox pl-4">
                                    <input type="checkbox"
                                           v-model="form.attributes.adapted_reduced"
                                           value="El acceso exterior a la viviensa esta adaptado para silla de ruedas"
                                           name="attributes[exterior_adapted]"
                                           class="custom-control-input" id="exterior_adapted">
                                    <label class="custom-control-label" for="exterior_adapted">El acceso exterior a
                                        la viviensa esta adaptado para silla de ruedas</label>
                                </div>

                                <div class="custom-control custom-checkbox pl-4">
                                    <input type="checkbox"
                                           v-model="form.attributes.adapted_reduced"
                                           value="El interior de la vivienda esta adaptado para silla de ruedas"
                                           name="attributes[interior_adapted]"
                                           class="custom-control-input" id="interior_adapted">
                                    <label class="custom-control-label" for="interior_adapted">El interior de la
                                        vivienda esta adaptado para silla de ruedas</label>
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
                price: '',
                bail: '',
                max_tenants: 1,
                attributes: this.$parent.$parent.post.attributes_short ? {
                    floor_type: "Piso",
                    has_elevator: "Si tiene",
                    building_facade: "Exterior",
                    orientation: "Norte",
                    condition: 'A reformar',
                    other_features: [],
                    m2_built: '',
                    m2_useful: '',
                    number_rooms: 1,
                    num_bathrooms: 1,
                    appropriate_children: false,
                    allow_pets: false,
                    adapted_reduced: [],
                    equipment: '',
                    ...this.$parent.$parent.post.attributes_short
                } : {},
                equipment: this.$parent.$parent.post.equipment ? this.$parent.$parent.post.equipment : '',
                power_rating: this.$parent.$parent.post.power_rating ? this.$parent.$parent.post.power_rating : '',
                power_consumption: this.$parent.$parent.post.power_consumption ? this.$parent.$parent.post.power_consumption : '',
                emissions_rating: this.$parent.$parent.post.emissions_rating ? this.$parent.$parent.post.emissions_rating : '',
                emissions_consumption: this.$parent.$parent.post.emissions_consumption ? this.$parent.$parent.post.emissions_consumption : '',
                worktime: 'Mañana (10:00 - 22:00)',
                sobres: SobreWomen.sobr,
                services: ServicesWomen.serv,
            },
            oldservices: [],
            oldremains: []
        }
    },
    validations: {
        form: {}
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

.input-group.group-a {
    align-items: center;

    .input {
        padding-right: 121px;
    }

    sup {
        top: 7px;
        margin-right: 6px;
    }

    .input-group-append {
        margin-left: -1px;
        position: absolute;
        right: 10px;
        z-index: 99999;
    }
}
</style>
