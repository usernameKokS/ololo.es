<template>
    <section>
        <div class="row">
            <div class="col-12">
                <hr>&nbsp;
            </div>
        </div>
        <div class="edit-wrap-section-body">
            <div class="container">
                <!--div class="wrap-icon2"></div-->
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
                                        v-model="form.zona"
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
                                        v-model="form.zona"
                                    />
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="select-area">
                                        <span class="input-label">Numero de habitaciones en la vivienda</span>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <button class="input-group-text"><img
                                                        src="/img/icons/minus_icon.svg"
                                                        alt="minus" width="10"></button>
                                                </div>
                                                <input
                                                    type="text"
                                                    class="form-control input"
                                                    v-model="form.num_rooms"
                                                />
                                                <div class="input-group-append">
                                                    <button class="input-group-text"><img src="/img/icons/plus_icon.svg"
                                                                                          alt="plus"
                                                                                          width="10"></button>
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
                                        <div class="col-lg-6">
                                            <div class="input-group mb-1">
                                                <div class="input-group-prepend">
                                                    <button class="input-group-text"><img
                                                        src="/img/icons/minus_icon.svg"
                                                        alt="minus" width="10"></button>
                                                </div>
                                                <input
                                                    type="text"
                                                    class="form-control input"
                                                    v-model="$v.form.category.$model"
                                                />
                                                <div class="input-group-append">
                                                    <button class="input-group-text"><img src="/img/icons/plus_icon.svg"
                                                                                          alt="plus"
                                                                                          width="10"></button>
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
                                            v-model="form.title.$model"
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
                                            v-model="$v.form.title.$model"
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
                                            id="customRadio11"
                                            name="customRadio11"
                                            v-model="$v.form.title.$model"
                                            :value="'Si tiene'"
                                            class="custom-control-input"
                                        />
                                        <label
                                            class="custom-control-label semibold radio-padd"
                                            for="customRadio11"
                                        >Si tiene</label>
                                    </div>
                                    <div class="custom-control custom-radio center-radio">
                                        <input
                                            type="radio"
                                            id="customRadio22"
                                            name="customRadio11"
                                            v-model="$v.form.title.$model"
                                            :value="'No tiene'"
                                            class="custom-control-input"
                                        />
                                        <label
                                            class="custom-control-label semibold radio-padd"
                                            for="customRadio22"
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
                                        <label for="orientation-1" class="custom-control-label semibold radio-padd">Norte</label>
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
                                        <label for="orientation-4" class="custom-control-label semibold radio-padd">Oeste</label>
                                    </div>

                                </div>

                                <div class="col-12 mb-2">
                                    <div class="select-area">
                                        <h3 class="mb-2">Otras características de tu vivienda</h3>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.other_feathures" name="other_feathures[]"
                                               value="Armarios empotrados" class="custom-control-input"
                                               id="other-feathures-1">
                                        <label class="custom-control-label" for="other-feathures-1">Armarios
                                            empotrados</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.other_feathures" name="other_feathures[]"
                                               value="Aire acondicionado" class="custom-control-input"
                                               id="other-feathures-2">
                                        <label class="custom-control-label" for="other-feathures-2">Aire
                                            acondicionado</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.other_feathures" name="other_feathures[]"
                                               value="Terraza" class="custom-control-input" id="other-feathures-3">
                                        <label class="custom-control-label" for="other-feathures-3">Terraza</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.other_feathures" name="other_feathures[]"
                                               value="Balcón" class="custom-control-input" id="other-feathures-4">
                                        <label class="custom-control-label" for="other-feathures-4">Balcón</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.other_feathures" name="other_feathures[]"
                                               value="Trastero" class="custom-control-input" id="other-feathures-5">
                                        <label class="custom-control-label" for="other-feathures-5">Trastero</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.other_feathures" name="other_feathures[]"
                                               value="Plaza de garaje" class="custom-control-input"
                                               id="other-feathures-6">
                                        <label class="custom-control-label" for="other-feathures-6">Plaza de
                                            garaje</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="select-area">
                                        <h3 class="mb-2">Otras características de tu edificio</h3>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.other_feathures" name="other_feathures[]"
                                               value="Piscina" class="custom-control-input" id="other-feathures-7">
                                        <label class="custom-control-label" for="other-feathures-7">Piscina</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox" v-model="form.other_feathures" name="other_feathures[]"
                                               value="Zona verde" class="custom-control-input" id="other-feathures-8">
                                        <label class="custom-control-label" for="other-feathures-8">Zona verde</label>
                                    </div>

                                </div>

                                <div class="col-12 mb-2">
                                    <div class="select-area">
                                        <h3 class="mb-2">¿Que inquilinos buscas?</h3>
                                    </div>
                                    <p class="font-regular font-sm mb-3">Esta seccion a que te contacten los inquilinos
                                        de mas cuadran con tu
                                        vivienda.</p>

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
                                        <input type="checkbox" v-model="form.appropriate_children"
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
                                               v-model="form.attributes['allow_pets']"
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
                                               v-model="form.attributes['exterior_adapted']"
                                               name="attributes[exterior_adapted]"
                                               class="custom-control-input" id="exterior_adapted">
                                        <label class="custom-control-label" for="exterior_adapted">El acceso exterior a
                                            la viviensa esta adaptado para silla de ruedas</label>
                                    </div>

                                    <div class="custom-control custom-checkbox pl-4">
                                        <input type="checkbox"
                                               v-model="form.attributes['interior_adapted']"
                                               name="attributes[interior_adapted]"
                                               class="custom-control-input" id="interior_adapted">
                                        <label class="custom-control-label" for="interior_adapted">El interior de la
                                            vivienda esta adaptado para silla de ruedas</label>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                    <h2>Datos del anuncio</h2>

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
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_1.$error && $v.form.adds.text_1.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_1.$error && $v.form.adds.text_1.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_1.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_1.$model"
                                            placeholder="Ejemplo: Me llamo Monica soy una chica muy dulce y sensual."
                                            :class="{ 'input-error': $v.form.adds.text_1.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">2.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_2.$error && $v.form.adds.text_2.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_2.$error && $v.form.adds.text_2.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_2.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_2.$model"
                                            placeholder="Ejemplo: Soy una chica muy exuberante, de curvas marcadas y preciosas de las que no podrás apartar las manos."
                                            :class="{ 'input-error': $v.form.adds.text_2.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">3.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_3.$error && $v.form.adds.text_3.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_3.$error && $v.form.adds.text_3.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_3.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_3.$model"
                                            placeholder="Ejemplo: Mi cuerpo es un auténtico espectáculo, mis pechos grandes y naturales son pura tentación."
                                            :class="{ 'input-error': $v.form.adds.text_3.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">4.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_4.$error && $v.form.adds.text_4.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_4.$error && $v.form.adds.text_4.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_4.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_4.$model"
                                            placeholder="Ejemplo: Realizo todos los servicios me encanta sexo ven y compruebalo cariño."
                                            :class="{ 'input-error': $v.form.adds.text_4.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">5.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_5.$error && $v.form.adds.text_5.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_5.$error && $v.form.adds.text_5.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_5.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_5.$model"
                                            placeholder="Ejemplo: Mi trasero terso y respingón te regalará momentos de lujuria únicos."
                                            :class="{ 'input-error': $v.form.adds.text_5.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">6.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_6.$error && $v.form.adds.text_6.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_6.$error && $v.form.adds.text_6.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_6.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_6.$model"
                                            placeholder="Ejemplo: En la cama soy un verdadero volcán y me encargaré de hacer realidad todas tus fantasías."
                                            :class="{ 'input-error': $v.form.adds.text_6.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">7.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_7.$error && $v.form.adds.text_7.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_7.$error && $v.form.adds.text_7.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_7.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_7.$model"
                                            placeholder="Ejemplo: Estoy las 24h cerca de metro tambien hago salidas."
                                            :class="{ 'input-error': $v.form.adds.text_7.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">8.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_8.$error && $v.form.adds.text_8.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_8.$error && $v.form.adds.text_8.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_8.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_8.$model"
                                            placeholder="Ejemplo: Caballeros solventes dispuestos a darme una ayuda a cambio de pasar momentos muy apasionados."
                                            :class="{ 'input-error': $v.form.adds.text_8.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">9.&nbsp;&nbsp;</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_9.$error && $v.form.adds.text_9.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_9.$error && $v.form.adds.text_9.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_9.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_9.$model"
                                            placeholder="Ejemplo: Tengo muchas ganas de follar llámame o escríbeme al WhatsApp."
                                            :class="{ 'input-error': $v.form.adds.text_9.$error }"
                                        />
                                    </div>
                                    <div class="input-area">
                                        <div class="text-right d-flex">
                                            <span class="input-label">10.</span>
                                            <span class="input-indicator">
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_10.$error && $v.form.adds.text_10.$model.length <= 0">
                                                    <img src="/img/icons/check-empty.svg"/>
                                                </div>
                                                <div class="input-indicator-box"
                                                     v-show="!$v.form.adds.text_10.$error && $v.form.adds.text_10.$model.length > 0">
                                                    <img src="/img/icons/check-success.svg"/>
                                                </div>
                                                <div class="input-indicator-box" v-show="$v.form.adds.text_10.$error">
                                                    <img src="/img/icons/check-fail.svg"/>
                                                </div>
                                            </span>
                                        </div>
                                        <input
                                            type="text"
                                            class="input w-100 input-dashed-bottom"
                                            v-model.trim="$v.form.adds.text_10.$model"
                                            placeholder="Ejemplo: Sin mirar el reloj y sin meterte prisas para que te corras nuestra cita sera muy diferente."
                                            :class="{ 'input-error': $v.form.adds.text_10.$error }"
                                        />
                                    </div>
                                    <!--div class="input-area-error" v-show="!$v.form.adds.text.$error">
                                        <span :class="{'access-error': !$v.form.adds.text.$error}">
                                            Llevas {{ form.adds.text.length }} caracteres. El mínimo son 300, el máximo son 1000.
                                        </span>
                                    </div-->
                                    <div class="input-area-error" v-show="$v.form.adds.text_1.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_1.$error}">
                                            Línea 1: Llevas {{ form.adds.text_1.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.adds.text_2.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_2.$error}">
                                            Línea 2: Llevas {{ form.adds.text_2.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.adds.text_3.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_3.$error}">
                                            Línea 3: Llevas {{ form.adds.text_3.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.adds.text_4.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_4.$error}">
                                            Línea 4: Llevas {{ form.adds.text_4.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.adds.text_5.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_5.$error}">
                                            Línea 5: Llevas {{ form.adds.text_5.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.adds.text_6.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_6.$error}">
                                            Línea 6: Llevas {{ form.adds.text_6.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.adds.text_7.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_7.$error}">
                                            Línea 7: Llevas {{ form.adds.text_7.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.adds.text_8.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_8.$error}">
                                            Línea 8: Llevas {{ form.adds.text_8.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.adds.text_9.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_9.$error}">
                                            Línea 9: Llevas {{ form.adds.text_9.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                    <div class="input-area-error" v-show="$v.form.adds.text_10.$error">
                                        <span :class="{'access-error': !$v.form.adds.text_10.$error}">
                                            Línea 10: Llevas {{ form.adds.text_10.length }} caracteres. El mínimo son 30, el máximo son 100.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripción del anuncio</label>
                        <textarea v-model="form.description" class="form-control textarea w-100"
                                  id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
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
                bail: '',
                price: '',
                attributes: this.$parent.$parent.post.attributes_short ? this.$parent.$parent.post.attributes_short : {},
                appropriate_children: false,
                max_tenants: '',
                other_feathures: [],
                category: this.$parent.$parent.post.category,
                title: this.$parent.$parent.post.title ? this.$parent.$parent.post.title : "",
                text: this.$parent.$parent.post.text ? this.$parent.$parent.post.text : "",
                sex: this.$parent.$parent.post.sex ? this.$parent.$parent.post.sex : 'Mujer',
                num_rooms: this.$parent.$parent.post.num_rooms ? this.$parent.$parent.post.num_rooms : 1,
                description: "",
                adds: {
                    text_1: this.$parent.$parent.post.text[0] ? this.$parent.$parent.post.text[0] : "",
                    text_2: this.$parent.$parent.post.text[1] ? this.$parent.$parent.post.text[1] : "",
                    text_3: this.$parent.$parent.post.text[2] ? this.$parent.$parent.post.text[2] : "",
                    text_4: this.$parent.$parent.post.text[3] ? this.$parent.$parent.post.text[3] : "",
                    text_5: this.$parent.$parent.post.text[4] ? this.$parent.$parent.post.text[4] : "",
                    text_6: this.$parent.$parent.post.text[5] ? this.$parent.$parent.post.text[5] : "",
                    text_7: this.$parent.$parent.post.text[6] ? this.$parent.$parent.post.text[6] : "",
                    text_8: this.$parent.$parent.post.text[7] ? this.$parent.$parent.post.text[7] : "",
                    text_9: this.$parent.$parent.post.text[8] ? this.$parent.$parent.post.text[8] : "",
                    text_10: this.$parent.$parent.post.text[9] ? this.$parent.$parent.post.text[9] : "",
                }
            }
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
                        .post("/post/store-step3", form)
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
        filterLatinSymbolsAndSetText(value) {
            value = this.filterLatinSymbols(value);


            this.setText();
            return value;
        },
        filterLatinSymbols(value) {
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
        setText() {
            let fullText = []

            for (let i = 1; i < 11; i++) {
                let key = 'text_' + (i).toString()

                if (this.form[key] != undefined) {
                    let stringValue = this.filterLatinSymbols(this.form[key]);
                    // this.form[key] = stringValue.charAt(0).toUpperCase() + stringValue.slice(1);
                    fullText.push(this.form[key])
                }
            }
            this.form.adds.text = fullText.join("###")
        },
    },
    validations: {
        form: {
            category: {},
            title: {
                required,
                minLength: minLength(30),
                maxLength: maxLength(37)
            },
            adds: {
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
            },
            sex: {
                required
            }
        }
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
            if (val === true) {

            }
        },
        "form.category": function (val) {
            this.setIsModify()
        },
        "form.title": function (val) {
            this.form.title = this.filterLatinSymbols(val);

            if (this.form.title.length > 37)
                this.form.title = this.form.title.substring(0, 37)

            this.setIsModify()
        },
        "form.adds.text_1": function (val) {
            this.form.adds.text_1 = this.filterLatinSymbolsAndSetText(val);

            if (this.form.adds.text_1.length > 100)
                this.form.adds.text_1 = this.form.adds.text_1.substring(0, 100)
        },
        "form.adds.text_2": function (val) {
            this.form.adds.text_2 = this.filterLatinSymbolsAndSetText(val);

            if (this.form.adds.text_2.length > 100)
                this.form.adds.text_2 = this.form.adds.text_2.substring(0, 100)
        },
        "form.adds.text_3": function (val) {
            this.form.adds.text_3 = this.filterLatinSymbolsAndSetText(val);

            if (this.form.adds.text_3.length > 100)
                this.form.adds.text_3 = this.form.adds.text_3.substring(0, 100)
        },
        "form.adds.text_4": function (val) {
            this.form.adds.text_4 = this.filterLatinSymbolsAndSetText(val);

            if (this.form.adds.text_4.length > 100)
                this.form.adds.text_4 = this.form.adds.text_4.substring(0, 100)
        },
        "form.adds.text_5": function (val) {
            this.form.adds.text_5 = this.filterLatinSymbolsAndSetText(val);

            if (this.form.adds.text_5.length > 100)
                this.form.adds.text_5 = this.form.adds.text_5.substring(0, 100)
        },
        "form.adds.text_6": function (val) {
            this.form.adds.text_6 = this.filterLatinSymbolsAndSetText(val);

            if (this.form.adds.text_6.length > 100)
                this.form.adds.text_6 = this.form.adds.text_6.substring(0, 100)
        },
        "form.adds.text_7": function (val) {
            this.form.adds.text_7 = this.filterLatinSymbolsAndSetText(val);

            if (this.form.adds.text_7.length > 100)
                this.form.adds.text_7 = this.form.adds.text_7.substring(0, 100)
        },
        "form.adds.text_8": function (val) {
            this.form.adds.text_8 = this.filterLatinSymbolsAndSetText(val);

            if (this.form.adds.text_8.length > 100)
                this.form.adds.text_8 = this.form.adds.text_8.substring(0, 100)
        },
        "form.adds.text_9": function (val) {
            this.form.adds.text_9 = this.filterLatinSymbolsAndSetText(val);

            if (this.form.adds.text_9.length > 100)
                this.form.adds.text_9 = this.form.adds.text_9.substring(0, 100)
        },
        "form.adds.text_10": function (val) {
            this.form.adds.text_10 = this.filterLatinSymbolsAndSetText(val);
            if (this.form.adds.text_10.length > 100)
                this.form.adds.text_10 = this.form.adds.text_10.substring(0, 100)
            // this.$v.form.adds.text_10.$model = this.form.adds.text_10;
        },
        "form.adds.text": function (val) {

            this.setIsModify()
        },
        "form.sex": function (val) {
            this.$parent.$parent.post.sex = val;

            for (let item of this.$parent.$children)
                if (item.currentStep.name == 'services')
                    item.storeRemains()

            this.setIsModify()
        }
    },
    mounted() {
        if (!this.$v.$invalid) {
            this.$emit('can-continue', {value: true});
        } else {
            this.$emit('can-continue', {value: false});
        }

        // if (this.$parent.$parent.post.text.length > 0) {
        //     this.$parent.$parent.post.text.split('###').forEach((value, index) => {
        //         this.form.adds['text_' + (index + 1)] = value;
        //     });
        // }

        if (
            window.localStorage.getItem('isModify' + this.$parent.$parent.post.id) === "true"
            && this.$parent.$parent.post.status != "creating"
        )
            this.isModify = true
    }
}
</script>
