<template>
    <section>
        <div class="row">
            <div class="col-12">
                <hr>&nbsp;
            </div>
        </div>

        <checkphone :user="$parent.$parent.user" :post="$parent.$parent.post" ref="checkphone"/>

        <div class="container mb-4">
            <div class="container container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <div class="col-lg-auto">
                            <div class="form-group d-flex align-items-center">
                                <div>
                                    <label for="post-email" class="input-label mr-2 mb-0">Email para anuncio</label>
                                    <input type="text"
                                           v-model.trim="email"
                                           class="input"
                                           :disabled="!canChangeEmail"
                                           :class="{ 'input-error': emailErrors.length>0 }"
                                           id="post-email" placeholder="Ingresa tu e-mail">

                                </div>


                                <div class="phone-is-confirm" v-if="emailHasChanged">
                                    <img src="/img/icon-success.svg"/>
                                    Dirección de correo electrónico cambiada
                                </div>


                            </div>
                        </div>

                        <div class="col d-flex align-items-center" v-if="!emailHasChanged">
                            <button type="button"
                                    @click="changeEmail"
                                    title="Guardar Email" class="btn btn-normal btn_green-hover">
                                <div><img src="/img/checkedpink.svg" alt="svg">
                                    <span>{{ canChangeEmail ? 'Guardado' : 'Guardar Email' }}</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                    <div class="row mb-3">
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
                                <input type="text"
                                       v-model.trim="form.zona"
                                       class="input input-fullwidth"
                                />
                            </div>
                        </div>

                    </div>

                    <h3>Ubicacion del inmueble</h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Tipo de via</span>
                                </div>
                                <input type="text"
                                       v-model.trim="$v.form.street_type.$model"
                                       class="input input-fullwidth"
                                       :class="{ 'input-error': $v.form.street_type.$error }"
                                />
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Nombre de la via</span>
                                </div>
                                <input type="text" v-model.trim="$v.form.street.$model"
                                       class="input input-fullwidth"
                                       :class="{ 'input-error': $v.form.street.$error }"/>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-3">
                            <div class="select-area">
                                <div class="label-wrap__leftp">
                                    <span class="input-label">Numero de via</span>
                                </div>
                                <input type="text"
                                       v-model.trim="$v.form.house_number.$model"
                                       :class="{ 'input-error': $v.form.house_number.$error }"
                                       class="input input-fullwidth"/>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <button class="btn btn-normal btn_green-hover"
                                    @click.prevent="$modal.show('modal-confirm-address')">
                                <img src="/img/checkedpink.svg" alt="svg" v-if="form.location_lat!='' && form.location_lng!=''">
                               <span>Confirmar dirección address</span>
                            </button>
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
                                Llevas {{ form.name.length }} caracteres. El mínimo son 2, el máximo son 15. Comenzando solo con una letra mayúscula.
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
                                :options="[
                                    {label: 'SI', value: true},
                                    {label: 'NO', value: false},
                                    ]"
                                :searchable="true"
                                placeholder="Selecciona"
                                :reduce="item => item.value"
                                class="style-chooser"
                                v-model.trim="form.is_professional"
                            />
                        </div>

                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Elige el tipo de inmueble:</span>
                            </div>
                            <v-select
                                v-model.trim="$v.form.property_type.$model"
                                :class="{ 'input-error': $v.form.property_type.$error }"
                                :options="propertyTypeOptions"
                                :searchable="false"
                                class="style-chooser"
                                placeholder="Selecciona"
                            />
                        </div>

                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Operacion:</span>
                            </div>
                            <div class="custom-control custom-radio">
                                <input
                                    type="radio"
                                    id="operation-1"
                                    name="operation"
                                    v-model="$v.form.operation.$model"
                                    :value="'Venta'"
                                    class="custom-control-input"
                                    :class="{ 'input-error': $v.form.operation.$error }"
                                    v-on:change="pressKey"
                                    checked
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="operation-1"
                                >Venta</label>
                            </div>
                            <div class="custom-control custom-radio center-radio">
                                <input
                                    type="radio"
                                    id="operation-2"
                                    name="operation"
                                    v-model="$v.form.operation.$model"
                                    :value="'Alquiler'"
                                    class="custom-control-input"
                                    :class="{ 'input-error': $v.form.operation.$error }"
                                    v-on:change="pressKey"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="operation-2"
                                >Alquiler</label>
                            </div>
                        </div>

                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Planta</span>
                            </div>
                            <v-select
                                v-model.trim="form.planta"
                                :options="plantOptions"
                                placeholder="Selecciona"
                                :searchable="false"
                                class="style-chooser mb-2"
                            />
                            <div class="custom-control custom-checkbox pl-4">
                                <input type="checkbox" class="custom-control-input" id="customCheck1"
                                       v-model="form.last_floor" true-value="Es la última planta del bloque"
                                       false-value="">
                                <label class="custom-control-label" for="customCheck1">Es la última planta del
                                    bloque</label>
                            </div>
                        </div>
                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Puerta</span>
                            </div>
                            <v-select
                                v-model.trim="$v.form.gate.$model"
                                :class="{ 'input-error': $v.form.gate.$error }"
                                :options="gateoption"
                                :searchable="true"
                                placeholder="Selecciona"
                                class="style-chooser"
                            />
                            <div class="mt-2" v-if="form.gate=='Letra (A, B, C...)'">
                                <v-select
                                    v-model.trim="form.gate_value"
                                    :options="gateAbc"
                                    :searchable="false"
                                    placeholder="Selecciona"
                                    class="style-chooser"
                                />
                            </div>
                            <div class="mt-2" v-if="form.gate=='Número (1, 2, 3...)'">
                                <v-select
                                    v-model.trim="form.gate_value"
                                    :options="range(1, 100)"
                                    :searchable="false"
                                    placeholder="Selecciona"
                                    class="style-chooser"
                                />
                            </div>

                        </div>

                        <div class="col-md-12 col-md-6 col-lg-4">
                            <div class="select-area">
                                <span class="input-label">Numero o kilometro</span>
                            </div>
                            <div class="custom-control custom-radio">
                                <input
                                    type="radio"
                                    id="number-kilometer-1"
                                    name="customRadio"
                                    v-model="$v.form.number_kilometer.$model"
                                    :value="'Numero'"
                                    class="custom-control-input"
                                    :class="{ 'input-error': $v.form.number_kilometer.$error }"
                                    v-on:change="pressKey"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="number-kilometer-1"
                                >Numero</label>
                            </div>

                            <div class="custom-control custom-radio center-radio">
                                <input
                                    type="radio"
                                    id="number-kilometer-2"
                                    name="number_kilometer"
                                    v-model="$v.form.number_kilometer.$model"
                                    :value="'Kilometro'"
                                    class="custom-control-input"
                                    :class="{ 'input-error': $v.form.number_kilometer.$error }"
                                    v-on:change="pressKey"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="number-kilometer-2"
                                >Kilometro</label>
                            </div>
                            <div class="form-group form-group-input"
                                 v-if="form.number_kilometer == 'Numero'">
                                <label for="numero_de_via">Numero de via</label>
                                <input
                                    type="text"
                                    class="input input-fullwidth"
                                    id="numero_de_via"
                                    v-model="form.road_number"
                                />
                            </div>
                            <div class="form-group form-group-input" v-else>
                                <label for="kilometro_de_via">Numero de Kilòmetro</label>
                                <input
                                    type="text"
                                    class="input input-fullwidth"
                                    id="kilometro_de_via"
                                    v-model="form.kilometer_number"
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
                                    name="needFactura"
                                    v-model="needFactura"
                                    class="custom-control-input"
                                    :value="true"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="facturaRadio1"
                                >Si</label>
                            </div>

                            <div class="custom-control custom-radio center-radio">
                                <input
                                    type="radio"
                                    id="facturaRadio2"
                                    name="needFactura"
                                    v-model="needFactura"
                                    :value="false"
                                    class="custom-control-input"
                                />
                                <label
                                    class="custom-control-label semibold radio-padd"
                                    for="facturaRadio2"
                                >No</label>
                            </div>
                        </div>

                        <!--If factura radiobutton is 'Si'-->
                        <div class="col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 step1-factura">
                            <h2>Factura</h2>
                            <div class="input-area-error text-left mb-3">
                                <span class="access-error"
                                      v-html="needFactura ? 'Тodos los campos obligatorios' : 'No Obligatorio'"></span>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group form-group-input"
                                    >
                                        <label for="social">Empresa o razón social:</label>
                                        <input
                                            type="text"
                                            class="input input-fullwidth"
                                            id="social"
                                            :class="{ 'input-error': $v.form.factura.company_name.$error }"
                                            v-model.trim="$v.form.factura.company_name.$model"
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
                                            :class="{ 'input-error': $v.form.factura.first_name.$error }"
                                            v-model="$v.form.factura.first_name.$model"
                                        />
                                    </div>
                                    <div class="form-group form-group-input">
                                        <label for="postal">Dirección postal:</label>
                                        <input
                                            class="input input-fullwidth"
                                            id="postal"
                                            :class="{ 'input-error': $v.form.factura.address.$error }"
                                            v-model="$v.form.factura.address.$model"
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
                                            :class="{ 'input-error': $v.form.factura.email.$error }"
                                            v-model="$v.form.factura.email.$model"
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
                                                :class="{ 'input-error': $v.form.factura.cif.$error }"
                                                v-model="$v.form.factura.cif.$model"
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
                                            :class="{ 'input-error': $v.form.factura.last_name.$error }"
                                            v-model="$v.form.factura.last_name.$model"
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
                                            :class="{ 'input-error': $v.form.factura.country.$error }"
                                            v-model="$v.form.factura.country.$model"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-md-6 col-lg-6 mb-3">
                                    <div class="select-area">
                                        <span class="input-label">¿Hay mas de un bloque/portal?</span></div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="mas-portal-1" name="mas-portal"
                                               class="custom-control-input"
                                               value="0" checked>
                                        <label
                                            for="mas-portal-1"
                                            class="custom-control-label semibold radio-padd">No</label>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="custom-control custom-radio center-radio">
                                            <input type="radio" id="mas-portal-2" name="mas-portal"
                                                   class="custom-control-input" value="1">
                                            <label for="mas-portal-2"
                                                   class="custom-control-label semibold radio-padd">Si,bloque/portal</label>
                                        </div>
                                        <input type="text" v-model="form.blog" id="numero_de_via"
                                               class="input input-fullwidth ml-2">
                                    </div>


                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-md-6 col-lg-12">
                                    <div class="form-group form-group-input">
                                        <div class="input-label mb-2">Urbanizacion(optional):</div>
                                        <input type="text" id="inputUrbanizacion" class="input input-fullwidth"
                                               v-model="form.urbanization">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <span class="modify-text" v-if="isModify">Para guardar tus cambios tienes que llegar hasta el último paso y guardar tu anuncio.</span>
        <modal name="modal-confirm-address" height="auto" class="modal-confirm-address" @opened="modalHasOpened">
            <div class="modal-header p-3">
                <h5 class="modal-title">¿Deseas guardar los cambios?</h5>
                <gmap-autocomplete
                    id="gmapAutocomplete"
                    ref="gmapAutocomplete"
                    :value="placeText"
                                   @place_changed="placeChanged">
                </gmap-autocomplete>
            </div>
            <div class="modal-body">
                <GmapMap
                    :center="latLng"
                    :zoom="14"
                    style="width: 100%; height: 400px"
                    :zoom-control="true"
                >
                    <GmapMarker
                        :position="latLng"
                        :clickable="true"
                        :draggable="true"
                        @click="center=latLng"
                    />

                </GmapMap>
            </div>
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center align-items-center p-3">
                    <button class="btn btn-normal btn_green-hover" @click="confirmLocation">Confirmar dirección</button>
                    <a href="#" @click="$modal.hide('modal-confirm-address')" class="ml-3">Volver a escribir la
                        dirección</a>
                </div>
            </div>
        </modal>
    </section>
</template>

<script>
import {maxLength, minLength, minValue, numeric, required, email} from "vuelidate/lib/validators";
import Notify from "./../Notify";
// import Mapstyles from "../mapstyle";
// import Sobre from "./Sobre.js";
// import Services from "./Services.js";


export default {
    props: ['clickedNext', 'currentStep'],
    // mixins: [validationMixin],
    data() {
        return {
            ages: _.range(18, 91, 1),
            needFactura: false,
            places: [],
            canChangeEmail: false,
            email: this.$parent.$parent.user.email,
            emailErrors: [],
            newEmailIsEmpty: false,
            emailHasChanged: false,
            form: {
                town: this.$parent.$parent.post.town ? this.$parent.$parent.post.town : "",
                province: this.$parent.$parent.post.province ? this.$parent.$parent.post.province : "",
                place: this.$parent.$parent.post.place ? this.$parent.$parent.post.place : "",
                name: this.$parent.$parent.post.name ? this.$parent.$parent.post.name : "",
                zona: this.$parent.$parent.post.zona ? this.$parent.$parent.post.zona : "",
                street: this.$parent.$parent.post.street ? this.$parent.$parent.post.street : "",
                street_type: this.$parent.$parent.post.street_type ? this.$parent.$parent.post.street_type : "",
                house_number: this.$parent.$parent.post.house_number ? this.$parent.$parent.post.house_number : "",
                operation: this.$parent.$parent.post.operation ? this.$parent.$parent.post.operation : "Venta",
                number_kilometer: this.$parent.$parent.post.number_kilometer ? this.$parent.$parent.post.number_kilometer : "Numero",
                road_number: this.$parent.$parent.post.road_number ? this.$parent.$parent.post.road_number : "",
                kilometer_number: this.$parent.$parent.post.kilometer_number ? this.$parent.$parent.post.kilometer_number : "",
                gate: this.$parent.$parent.post.gate ? this.$parent.$parent.post.gate : "",
                gate_value: this.$parent.$parent.post.gate_value ? this.$parent.$parent.post.gate_value : "",
                property_type: this.$parent.$parent.post.property_type ? this.$parent.$parent.post.property_type : "",
                urbanization: this.$parent.$parent.post.urbanization ? this.$parent.$parent.post.urbanization : "",
                blog: this.$parent.$parent.post.blog ? this.$parent.$parent.post.blog : "",
                location_lat: this.$parent.$parent.post.location_lat ? this.$parent.$parent.post.location_lat : "",
                location_lng: this.$parent.$parent.post.location_lng ? this.$parent.$parent.post.location_lng : "",
                is_professional: this.$parent.$parent.post.is_professional ? this.$parent.$parent.post.is_professional : false,
                planta: this.$parent.$parent.post.planta ? this.$parent.$parent.post.planta : "",
                last_floor: this.$parent.$parent.post.last_floor ? this.$parent.$parent.post.last_floor : "",
                need_factura: false,
                factura: {
                    company_name: "",
                    first_name: "",
                    last_name: "",
                    cif: "",
                    address: "",
                    country: "",
                    email: ""
                }
            },
            isModify: false,
            user: this.$parent.$parent.user,
            gateoption: ['Letra (A, B, C...)', 'Número (1, 2, 3...)', 'Puerta única', 'Izquierda', 'Derecha', 'Exterior', 'Exterior izquierda', 'Exterior derecha', 'Interior', 'Interior izquierda', 'Interior derecha', 'Centro', 'Centro izquierda', 'Centro derecha'],
            gateAbc: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
            propertyTypeOptions: [
                'Habitación en vivienda compartida (vivienda compartida con más gente)',
                'Alquiler vacacional (alquiler de corta estancia o de temporada, con Rentalia)',
                'Piso (vivienda en un edificio: piso, dúplex, ático, estudio/loft)',
                'Casa rústica o regional (de una casa de pueblo a un palacio, cortijo, castillo, masía, etc)',
                'Casa o chalet (vivienda unifamiliar)',
                'Oficina',
                'Local o nave',
                'Plaza de garaje',
                'Terreno',
                'Trastero',
                'Edificio'
            ],
            latLng: {
                lat: 41.38879,
                lng: 2.15899
            },

        }
    },
    validations() {
        return {
            form: {
                street_type:{

                },
                house_number: {
                    numeric
                },
                town: {
                    required
                },
                gate: {},
                property_type: {},
                number_kilometer: {
                    required
                },
                operation: {
                    required
                },
                province: {
                    required
                },
                place: {},
                street: {},
                name: {
                    required,
                    minLength: minLength(2),
                    maxLength: maxLength(15),
                    isUpperCase: this.isUpperCase
                },
                factura: {
                    company_name: {
                        ifNeedFactura: this.ifNeedFactura
                    },
                    first_name: {
                        ifNeedFactura: this.ifNeedFactura
                    },
                    last_name: {
                        ifNeedFactura: this.ifNeedFactura
                    },
                    cif: {
                        ifNeedFactura: this.ifNeedFactura
                    },
                    address: {
                        ifNeedFactura: this.ifNeedFactura
                    },
                    country: {
                        ifNeedFactura: this.ifNeedFactura
                    },
                    email: {
                        ifNeedFactura: this.ifNeedFactura,
                        email
                    }
                },

            }
        }
    },
    computed: {
        plantOptions() {
            let options = [
                'Por debajo de la planta baja (-2)',
                'Por debajo de la planta baja (-1)',
                'Sótano',
                'Semi-sótano',
                'Bajo',
                'Entreplanta',
            ];
            for (let i = 1; i <= 60; i++) {
                options.push('Planta ' + i + 'ª');
            }
            return options;
        },
        placeText() {
            let place = [];

            if (this.form.street_type) {
                place.push(this.form.street_type);
            }

            if (this.form.street) {
                place.push(this.form.street);
            }

            if (this.form.house_number) {
                place.push(this.form.house_number);
            }

            if (this.form.town) {
                place.push(this.form.town);
            }

            if (this.form.province) {
                place.push(this.form.province);
            }

            if (this.form.zona) {
                place.push(this.form.zona);
            }

            place.push('Spain');


            return place.join(', ');
        },
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
        canChangeEmail(val) {
            if (val) {
                this.$v.form.$touch();
            }
        },
        needFactura(val) {
            this.form.need_factura = val;
        },
        "form.gate": function () {
            this.form.gate_value = "";
        },
        "form.name": function (val) {
            this.setIsModify()
            this.form.name = this.filterLatinSymbols(val);

            if (this.form.name.length > 15)
                this.form.name = this.form.name.substring(0, 15)
        },
        "form.zona": function (val) {
            this.setIsModify()
            this.form.zona = this.filterLatinSymbols(val);
        },
        "form.province": function (val, oldVal) {
            this.setIsModify()
            this.form.town = ""
        },
        "form.town": function (val, oldVal) {
            this.setIsModify()
        },
        "form.age": function (val, oldVal) {
            this.setIsModify()
        },
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
        async clickedNext(val) {
        }
    },
    methods: {
        modalHasOpened() {
            setTimeout(() => {
               $('#gmapAutocomplete').focus();
            }, 1000);
        },
        ifNeedFactura(value) {
            return !this.needFactura || (this.needFactura && value.length > 0);
        },
        isUpperCase(value) {
            return value !== value.toLowerCase();
        },
        confirmLocation() {
            this.form.location_lat = this.latLng.lat;
            this.form.location_lng = this.latLng.lng;
            this.$modal.hide('modal-confirm-address');
        },
        placeChanged(place) {
            this.latLng = {
                lat: place.geometry.location.lat(),
                lng: place.geometry.location.lng(),
            };
        },
        range(start, stop, step = 1) {
            return [...Array(stop - start).keys()]
                .filter(i => !(i % Math.round(step)))
                .map(v => start + v)
        },
        validateEmail(value) {
            return !this.canChangeEmail || (this.canChangeEmail && this.user.email != '' && this.user.email !== value)
        },
        async changeEmail() {
            if (!this.canChangeEmail) {
                this.canChangeEmail = true;
                this.email = "";
            } else {
                axios
                    .post('/user/change-email', {
                        user_id: this.$parent.$parent.user.id,
                        email: this.email
                    })
                    .then(response => {
                        if (response.status == 200) {
                            this.emailHasChanged = true;
                            this.canChangeEmail = false;
                            this.emailErrors=[]
                        }
                    })
                    .catch(error => {
                        if (error && error.response && error.response.data && error.response.data.errors) {
                            console.log(error.response.data.errors);
                            this.emailErrors = error.response.data.errors.email;
                            this.$modal.show(
                                Notify,
                                {
                                    title: "Error",
                                    type: "error",
                                    //   porterrors: error.response.data.errors,
                                    message: error.response.data.errors.email[0]
                                },
                                {
                                    width: "90%",
                                    maxWidth: 400,
                                    height: "auto"
                                }
                            );
                        }
                    });
            }
        },
        pressKey() {
            this.setIsModify()
        },
        setIsModify() {
            if (this.$parent.$parent.post.status != "creating") {
                this.isModify = true;
                window.localStorage.setItem('isModify' + this.$parent.$parent.post.id, true);
            }
        },
        filterLatinSymbols(value) {
            const regex = /[^a-zA-Zñáéíóúü0-9 \.\-\_\;\!\?]+/g;
            value = value.replaceAll(regex, '');

            value = value.replaceAll('....', '...');
            value = value.replaceAll('... .', '...');
            return value.trim().replace(/\b\w/g, l => l.toUpperCase());
        },
        needFacturaBlockShow() {
            this.needFactura = !this.needFactura;
            this.pressKey();
        },
        saveStep() {
            const self = this;
            return new Promise((resolve, reject) => {

                this.$v.$reset;

                const cf = this.$refs.checkphone.phoneSuccess;


                if (cf == false) {
                    const element = document.getElementById("edit-phone");
                    const options = {offset: -120};
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

                if (this.$v.form.$error) {

                    this.$nextTick(() => {

                        const element = document.querySelector(".input-error");

                        for (const i in self.form) {

                            try {
                                console.log(i, this.$v.form[i].$error);
                            } catch (e) {
                                console.log(e);
                            }

                        }

                        const options = {offset: -120};
                        if (element)
                            this.$scrollTo(element, 200, options);
                    });

                    reject("error");
                } else {
                    let form = {"post_id": this.$parent.$parent.post.id, "edit": true};

                    form = Object.assign(form, this.form);

                    axios
                        .post("/post/store-step1", form)
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
        }
    }
    ,
    mounted() {

        this.places = this.$parent.$parent.places;

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
