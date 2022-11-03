<template>
    <div>
        <section>
            <div class="posts">
                <div class="container container-two">
                    <div class="wrap-title">
                        <div class="name-posts-page">
                            <img src="/img/menugreen.svg" alt="Edit" class="title-img" v-show="archive == false"/>
                            <img src="/img/box.svg" alt="Edit" class="title-img" v-show="archive == true"/>
                            <h1 class="page-title" v-if="archive == false">Listado de anuncios</h1>
                            <h1 class="page-title" v-else>ELIMINADOS</h1>
                        </div>
                        <div>
                            <button
                                @click="setAcrchive(true)"
                                v-show="archive == false"
                                class="btn btn-normal disable-mobile btn_green-hover el-archivo-btn non-fixed-btn15"
                            >
                                <div style="padding-left: 20px !important;">
                                    <span>{{ archivedPostsCount }}&nbsp;</span>
                                    <span>ELIMINADOS</span>
                                </div>
                            </button>
                            <button
                                @click="setAcrchive(false)"
                                v-show="archive == true"
                                class="btn btn-normal disable-mobile btn_green-hover non-fixed-btn23"
                            >
                                <div>

                                    <span class="svg-icon svg-menugreen"></span>
                                    <span>Listado anuncios</span>
                                </div>
                            </button>

                            <div v-if="opencreate">
                                <a
                                    href="/post/create"
                                    class="btn btn-oversize disable-desk publish-main-page"
                                    v-show="archive == false"
                                >
                                    <div>
                                        <img src="/img/pluswhite.svg" alt="Publicar anuncio"/>
                                        <span>Publicar anuncio</span>
                                    </div>
                                </a>
                            </div>
                            <div v-if="!opencreate">
                                <a
                                    @click="emitModal()"
                                    href="#"
                                    class="btn btn-oversize disable-desk publish-main-page"
                                    v-show="archive == false"
                                >
                                    <div>
                                        <img src="/img/pluswhite.svg" alt="Publicar anuncio"/>
                                        <span>Publicar anuncio</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faux-borders"></div>
                <div class="container container-two">
                    <div class="disable-mobile btn-margins btn-margins-mainpage" v-show="archive == false">
                        <div v-if="opencreate">
                            <a href="/post/create" class="btn btn-oversize btn-posts-page">
                                <div>
                                    <img src="/img/pluswhite.svg" alt="Publicar anuncio"/>
                                    <span>Publicar anuncio</span>
                                </div>
                            </a>
                        </div>
                        <div v-if="!opencreate">
                            <a href="#" @click="emitModal()" class="btn btn-oversize non-fixed-btn10">
                                <div>
                                    <img src="/img/pluswhite.svg" alt="espalda"/>
                                    <span>Publicar anuncio</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div v-show="postUpload">
            <section>
                <div class="posts__board disable-desk">
                    <div class="container container-two">
                        <div class="wrap_board" style="margin-top: 20px;">
                            <div class="wrap_board-left">
                                <h3 class="h3-desc">Mostrando {{ posts.length }} anuncio/s.</h3>
                                <button
                                    @click="setAcrchive(true)"
                                    v-show="archive == false"
                                    class="btn btn-normal btn_green-hover el-archivo-btn non-fixed-btn15"
                                >
                                    <div>
                                        <span>{{ archivedPostsCount }}&nbsp;</span>
                                        <span>ELIMINADOS</span>
                                    </div>
                                </button>
                                <button
                                    @click="setAcrchive(false)"
                                    v-show="archive == true"
                                    class="btn btn-normal btn_green-hover non-fixed-btn23"
                                >
                                    <div>
                                        <span class="svg-icon svg-menugreen"></span>
                                        <span>Listado anuncios</span>
                                    </div>
                                </button>
                            </div>
                            <div class="wrap_board-right">
                                <span>Ordenar por:</span>
                                <a
                                    href="#"
                                    class="btn-simple"
                                    type="button"
                                    :class="{'btn-simple__active': sort == 'updated_at'}"
                                    @click="changeSort('updated_at')"
                                >Fecha</a>
                                <a
                                    href="#"
                                    class="btn-simple"
                                    type="button"
                                    :class="{'btn-simple__active': sort == 'name'}"
                                    @click="changeSort('name')"
                                >Nombre</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="posts-content">
                <div class="container">
                    <div class="post-main-wrap" v-for="post in posts" :key="'postof' + post.id">
                        <div class="post-item">
                            <div class="item-content__desk">
                                <div class="avatar-wrapper">
                                    <div
                                        class="main-avatar"
                                        :style="`background: url(` + post.avatar + `);
                  	background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;`"
                                    ></div>
                                </div>
                                <div class="item-content">
                                    <div class="item-content__left">
                                        <div class="item-content__top">
                                            <div class="item-content" style="justify-content: flex-start;">
                                                <div class="item-content__left">
                                                    <div class="item__name">
                                                        <h3 class="h3-desc">{{ post.name }}</h3>
                                                        <!--div
                                                            @click.prevent="openActiveModal(post.id, post.publish)"
                                                            class="custom-control custom-switch"
                                                            v-if="(archive == false) && (post.end_pay != null)"
                                                        >
                                                            <input
                                                                type="checkbox"
                                                                v-model="post.publish"
                                                                class="custom-control-input"
                                                                :id="'switch' + post.id"
                                                            />
                                                            <label class="custom-control-label" :for="'switch' + post.id">- <span v-show="!post.publish">NO</span> ACTIVO</label>
                                                        </div-->
                                                        <!--                        <div-->
                                                        <!--                          class="custom-control custom-switch custom-ar"-->
                                                        <!--                          v-show="(archive == true)"-->
                                                        <!--                        >-->
                                                        <!--                          <input-->
                                                        <!--                            type="checkbox"-->
                                                        <!--                            class="custom-control-input"-->
                                                        <!--                            :id="'switchar' + post.id"-->
                                                        <!--                            value="0"-->
                                                        <!--                          />-->
                                                        <!--                          <label-->
                                                        <!--                            class="custom-control-label"-->
                                                        <!--                            :for="'switchar' + post.id"-->
                                                        <!--                          >- NO ACTIVO</label>-->
                                                        <!--                        </div>-->
                                                        <!--div v-else-if="archive == false" style="margin-top: 5px; color: #fe6885;">
                                                            NO PAGADO
                                                        </div-->
                                                    </div>
                                                    <div class="item_desc" style="padding-bottom: 0;">
                                                        <div class="item_desc-left" style="width: 232px;">
                                                            <p>
                                                                Tu tarifa:
                                                                <span>
                              <span class="item_desc-success tarifa-name" v-if="post.tarifa != 'No'">{{
                                      post.tarifa
                                  }}</span>
                              <span class="item_desc-error tarifa-name" v-else>{{ post.tarifa }}</span>
                            </span>
                                                            </p>
                                                            <p>
                                                                Activo hasta:
                                                                <span
                                                                    class="item_desc-success 2"
                                                                    v-if="(post.end_pay != null)"
                                                                    :class="{'colorpay__green': post.colorpay == 'green',
                                      'colorpay__yellow': post.colorpay == 'yellow',
                                      'colorpay__red': post.colorpay == 'red'}"
                                                                >{{ post.end_pay }}</span>
                                                                <span
                                                                    class="item_desc-error 2"
                                                                    v-else
                                                                    :class="{'colorpay__green': post.colorpay == 'green',
                                      'colorpay__yellow': post.colorpay == 'yellow',
                                      'colorpay__red': post.colorpay == 'red'}"
                                                                >{{ post.last_end_pay }}</span>
                                                            <div class="wrap-btn-mobile-inline"
                                                                 style="margin-bottom: 15px; margin-top: 15px;"
                                                                 v-if="post.archive == false">
                                                                <a
                                                                    :href="'/tariff/'+post.id+'/silver/?action=publish'"
                                                                    class="btn btn-normal btn_green-hover non-fixed-btn15 disable-mobile"
                                                                    style="margin-left: 0; z-index: 1000; position: relative"
                                                                    v-if="post.publish === 0"
                                                                >
                                                                    <div>
                                                                        <img src="/img/icon-success.svg"
                                                                             style="width: 20px; height: 20px; margin-right: 5px;">
                                                                        <span>ACTIVAR</span>
                                                                    </div>
                                                                </a>


                                                            </div>
                                                            <!--div
                                                                @click.prevent="switchAutopay(post.id)"
                                                                class="custom-control custom-switch"
                                                                v-show="(archive == false) && (post.end_pay != null)"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    v-model="post.autopay"
                                                                    class="custom-control-input"
                                                                    :id="'switch' + post.id"
                                                                />
                                                                <label class="custom-control-label" style="font-family: 'Semibold', sans-serif;"
                                                                       :for="'switch' + post.id">- Pago automático</label>
                                                            </div-->
                                                            </p>
                                                        </div>
                                                        <div class="item_desc-right">
                                                            <div
                                                                class="item_desc-right-wrapper disable-desk"
                                                                style="margin-bottom: 25px;"
                                                                v-show="archive == true"
                                                            >
                                                                <div class="wrap-btn-mobile-inline">
                                                                    <button
                                                                        class="btn btn-normal btn_green-hover non-fixed-btn21"
                                                                        @click="restor(post.id)"
                                                                    >
                                                                        <div>
                                                                            <!-- <img src="/img/graph.svg" alt="espalda" /> -->
                                                                            <span class="svg-icon svg-upload"></span>
                                                                            <span style="margin-left: 10px">
                                    restaurar
                                  </span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <div class="wrap-btn-mobile-inline">
                                                                    <a
                                                                        :href="'/tariff/'+post.id+'/silver'"
                                                                        class="btn btn-normal btn_green-hover btn-experts non-fixed-btn22"
                                                                        v-if="post.publish===1"
                                                                    >
                                                                        <div>
                                                                            <img src="/img/quit.svg" alt="espalda"/>
                                                                            <span>BORRAR ANUNCIO</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-content__right"
                                                     style="justify-content: flex-start; z-index:400;"
                                                     v-if="post.archive == false">
                                                    <div class="wrap-btn-mobile-inline disable-desk"
                                                         style="margin-bottom: 15px; margin-top: 84px;">
                                                        <a
                                                            :href="'/tariff/'+post.id+'/silver/?action=publish'"
                                                            class="btn btn-normal btn_green-hover non-fixed-btn15"
                                                            v-if="post.publish ===0 "
                                                        >
                                                            <div>
                                                                <img src="/img/icon-success.svg"
                                                                     style="width: 20px; height: 20px; margin-right: 5px;">
                                                                <span style="margin-right: 5px;">ACTIVAR</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-content__bottom disable-md-down">
                                            <div class="wrap-btn-mobile-inline">
                                                <a
                                                    :href="'/portals?postid=' + post.id"
                                                    class="btn btn-normal btn_green-hover non-fixed-btn16"
                                                >
                                                    <div>
                                                        <span class="svg-icon svg-graph"></span>
                                                        <span>Portales publicados</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="wrap-btn-mobile-inline">
                                                <a
                                                    :href="'/statistic/forums?postid=' + post.id"
                                                    class="btn btn-normal btn_green-hover non-fixed-btn17"
                                                >
                                                    <div>
                                                        <span class="svg-icon svg-infogreen"></span>
                                                        <span>foros</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="wrap-btn-mobile-inline">
                                                <a :href="'/dashboard?site=Todos&postid=' + post.id"
                                                   class="btn btn-normal btn_green-hover non-fixed-btn18">
                                                    <div>
                                                        <span class="svg-icon svg-reportgreen"></span>
                                                        <span>ESTADÍSTICAS</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-show="archive != true" class="item-content__right disable-desk"
                                         style="z-index: 400">
                                        <div class="wrap-btn-mobile-inline padder-btns">
                                            <a
                                                class="btn btn-normal btn_green-hover non-fixed-btn19 cur-pointer"
                                                @click="openEditPage(post.id)"
                                            >
                                                <div>
                                                    <img src="/img/change1.svg" alt="espalda"/>
                                                    <span>Modificar anuncio</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="wrap-btn-mobile-inline">
                                            <a :href="'/tariff/'+post.id+'/silver/?action=delete'"
                                               v-if="post.publish===1"
                                               class="btn btn-normal btn_green-hover btn-experts non-fixed-btn20"
                                            >
                                                <div>
                                                    <img src="/img/quit.svg" alt="espalda"/>
                                                    <span>BORRAR ANUNCIO</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item-content__mobile">
                                <div class="item-content__mobile-padding">
                                    <div class="item-content__bottom">
                                        <div class="btns-flex disable-md-up">
                                            <div class="wrap-btn-mobile-inline">
                                                <a
                                                    :href="'/portals?postid=' + post.id"
                                                    class="btn btn-normal btn_green-hover item-width-mobile non-fixed-btn16"
                                                >
                                                    <div>
                                                        <span class="svg-icon svg-graph"></span>
                                                        <span>Portales publicados</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="wrap-btn-mobile-inline">
                                                <a
                                                    :href="'/statistic/forums?postid=' + post.id"
                                                    class="btn btn-normal btn_green-hover non-fixed-btn17"
                                                >
                                                    <div>
                                                        <span class="svg-icon svg-infogreen"></span>
                                                        <span>foros</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="wrap-btn-mobile-inline disable-md-up">
                                            <a
                                                href="/dashboard"
                                                class="btn btn-normal btn_green-hover item-width-mobile non-fixed-btn18"
                                            >
                                                <div>
                                                    <span class="svg-icon svg-reportgreen"></span>
                                                    <span>ESTADISTICAS</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div
                                            class="wrap-btn-mobile-inline padder-btns disable-mobile"
                                            style="padding-top: 28px; z-index: 1000; position: relative"
                                            v-show="archive != true"
                                        >
                                            <a
                                                @click="openEditPage(post.id)"
                                                class="btn btn-normal btn_green-hover item-width-mobile non-fixed-btn19 cur-pointer"
                                            >
                                                <div>
                                                    <img src="/img/change1.svg" alt="espalda"/>
                                                    <span>Modificar anuncio</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="wrap-btn-mobile-inline disable-mobile"
                                             style="z-index: 1000; position: relative"
                                             v-show="archive != true"
                                        >
                                            <a :href="'/tariff/'+post.id+'/silver/?action=delete'"
                                               class="btn btn-normal btn_green-hover btn-experts item-width-mobile non-fixed-btn20"
                                               v-if="post.publish===1"
                                            >
                                                <div>
                                                    <img src="/img/quit.svg" alt="espalda"/>
                                                    <span>BORRAR ANUNCIO</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div
                                            class="item_desc-right-wrapper disable-mobile zindex-btns"
                                            style="padding-top: 10px;"
                                            v-show="archive == true"
                                        >
                                            <div class="wrap-btn-mobile-inline">
                                                <button
                                                    @click="restor(post.id)"
                                                    type="button"
                                                    class="btn btn-normal btn_green-hover btn-experts item-width-mobile non-fixed-btn44"
                                                >
                                                    <div>
                                                        <span class="svg-icon svg-upload"></span>
                                                        <span style="margin-left:20px">
                              restaurar
                            </span>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="wrap-btn-mobile-inline">
                                                <a :href="'/tariff/'+post.id+'/silver/?action=delete'"
                                                   class="btn btn-normal btn_green-hover btn-experts item-width-mobile non-fixed-btn20"
                                                   v-if="post.publish===1"
                                                >
                                                    <div>
                                                        <img src="/img/quit.svg" alt="espalda"/>
                                                        <span>BORRAR ANUNCIO</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-item__dissable container" v-if="post.publish === 0">
                            <div class="grey-dis"></div>
                        </div>
                        <div
                            class="post-item__dissable container"
                            v-if="post.archive == true"
                        >
                            <div class="grey-dis"></div>
                        </div>
                    </div>

                    <div class="no-posts" v-if="emptyPost && archive === false">
                        <div class="container container-two">
                            <h3 class="h3-desc">No hay anuncios</h3>
                            <p style="color: #fe6885;">Todavía no has publicado anuncios. Puedes publicarlos desde el
                                menú principal.</p>
                            <div class="wrap-btn-mobile-inline">
                                <a href="/personal" class="btn btn-regular btn_green-hover">
                                    <div>
                                        <img src="/img/return.svg" alt="espalda"/>
                                        <span>volver al menú principal</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="no-posts" v-else-if="emptyPost && archive === true">
                        <div class="container container-two">
                            <h3 class="h3-desc">No hay anuncios eliminados</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <modal name="deleteModal" :adptive="true" width="380" height="auto">
            <div class="appmodal notify-modal">
                <div class="modal-container">
                    <div class="modal-header modal-header-notify">
                        <img src="/img/delete.svg" alt="icon" class="handleimg" @click="hideDeleteModal"/>
                        <h3>BORRAR ANUNCIO</h3>
                    </div>
                </div>
                <div class="faux-borders" style="width: 70%;"></div>
                <div class="modal-container">
                    <div class="modal-body">
                        <div class="notify-area">
                            <p>
                                Al eliminar el anuncio, se dejarán de mostrar todos tus anuncios en los diferentes
                                portales y el anuncio pasa a la sección de "eliminados".
                                <br>
                                ¿ Seguro que quieres eliminar el anuncio?

                            <div class="alert alert-info" v-if="!this.isCanDelete">
                                Durante la tarifa solo puedes modificar tus anuncios una vez. Te queda
                                <b>{{ getCountDelete }}</b> eliminacion/es.
                            </div>
                            </p>
                            <div class="choose-btns">
                                <button
                                    class="btn btn-normal btn_green-hover btn-width-set btn-modal-chosse"
                                    @click="hideDeleteModal"
                                >
                                    <div>
                                        <span>CANCELAR</span>
                                    </div>
                                </button>
                                <button
                                    class="btn btn-normal btn_green-hover btn-width-set btn-modal-chosse"
                                    @click="deletePost()"
                                >
                                    <div>
                                        <span>ELIMINAR</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modal>

        <modal name="editLockModal" :adptive="true" width="380" height="auto">
            <div class="appmodal notify-modal">
                <div class="modal-container">
                    <div class="modal-header modal-header-notify">
                        <img src="/img/delete.svg" alt="icon" class="handleimg" @click="hideEditLockModal"/>
                        <h3>Modificar anuncio</h3>
                    </div>
                </div>
                <div class="faux-borders" style="width: 70%;"></div>
                <div class="modal-container">
                    <div class="modal-body">
                        <div class="notify-area">
                            <p>
                                Has alcanzado el límite de modificar anuncios en tu tarifa!
                            </p>
                            <div class="choose-btns">
                                <button
                                    class="btn btn-normal btn_green-hover btn-width-set btn-modal-chosse"
                                    @click="hideEditLockModal"
                                >
                                    <div>
                                        <span>CANCELAR</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modal>

        <modal name="deleteLockModal" :adptive="true" width="380" height="auto">
            <div class="appmodal notify-modal">
                <div class="modal-container">
                    <div class="modal-header modal-header-notify">
                        <img src="/img/delete.svg" alt="icon" class="handleimg" @click="hideDeleteLockModal"/>
                        <h3>BORRAR ANUNCIO</h3>
                    </div>
                </div>
                <div class="faux-borders" style="width: 70%;"></div>
                <div class="modal-container">
                    <div class="modal-body">
                        <div class="notify-area">
                            <p>
                                Has alcanzado el límite de eliminar anuncios en tu tarifa!
                            </p>
                            <div class="choose-btns">
                                <button
                                    class="btn btn-normal btn_green-hover btn-width-set btn-modal-chosse"
                                    @click="hideDeleteLockModal"
                                >
                                    <div>
                                        <span>CANCELAR</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modal>

        <modal name="activeModal" :adptive="true" width="380" height="auto">
            <div class="appmodal notify-modal">
                <div class="modal-container">
                    <div class="modal-header modal-header-notify">
                        <img v-if="status == 1" src="/img/delete.svg" alt="icon" class="handleimg"
                             @click="hideActiveModal"/>
                        <img v-else src="/img/checked.svg" alt="icon" class="handleimg" @click="hideActiveModal"/>
                        <h3 v-if="status == 1">DESACTIVAR ANUNCIO</h3>
                        <h3 v-else>ACTIVAR ANUNCIO</h3>
                    </div>
                </div>
                <div class="faux-borders" style="width: 70%;"></div>
                <div class="modal-container">
                    <div class="modal-body">
                        <div class="notify-area">
                            <p v-if="status == 1">
                                Al desactivar el anuncio, se dejarán de mostrar todos tus anuncios en los diferentes
                                portales y el anuncio se quedará desactivado.
                                <br>
                                ¿ Seguro que quieres desactivar el anuncio?
                            </p>
                            <p></p>
                            <p
                                v-if="status == 0"
                            >¿Está seguro de que desea activar el anuncio para volver a publicarlo?</p>
                            <p></p>
                            <div class="choose-btns">
                                <button
                                    v-if="status == 0"
                                    class="btn btn-normal btn_green-hover btn-width-set btn-modal-chosse"
                                    @click="postActive()"
                                >
                                    <div>
                                        <span>Activar</span>
                                    </div>
                                </button>
                                <button
                                    v-if="status == 1"
                                    class="btn btn-normal btn_green-hover btn-width-set btn-modal-chosse"
                                    @click="postActive()"
                                >
                                    <div>
                                        <span>Desactivar</span>
                                    </div>
                                </button>
                                <button
                                    class="btn btn-normal btn_green-hover btn-width-set btn-modal-chosse"
                                    @click="hideActiveModal"
                                >
                                    <div>
                                        <span>CANCELAR</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </modal>
    </div>
</template>

<script>
import Notify from "./Notify";

export default {
    name: 'posts',
    props: ["ocreate"],
    data() {
        return {
            opencreate: this.ocreate,
            loaddata: false,
            posts: [],
            archivedPostsCount: 0,
            emptyPost: false,
            sort: "updated_at",
            currentPost: null,
            archive: false,
            postUpload: false,
            status: true,
            isCanDelete: false
        };
    },
    computed: {
        getCountModify() {
            let count = 0;
            if (
                this.currentPost == null
                || this.posts.length == 0
            )
                return count;

            for (let post of this.posts) {
                if (post.id == this.currentPost)
                    return post.countModify;
            }
        },
        getCountDelete() {
            let count = 0;
            if (
                this.currentPost == null
                || this.posts.length == 0
            )
                return count;

            for (let post of this.posts) {
                if (post.id == this.currentPost)
                    return post.countDelete;
            }
        }
    },
    methods: {
        hideActiveModal() {
            this.$modal.hide("activeModal");
        },
        hideDeleteModal() {
            this.$modal.hide("deleteModal");
        },
        hideDeleteLockModal() {
            this.$modal.hide("deleteLockModal");
        },
        hideEditLockModal() {
            this.$modal.hide("editLockModal");
        },
        openEditPage(postId) {
            this.currentPost = postId;
            let count = this.getCountModify;
            let post = this.posts.filter(post => (post.id == postId) ?? post)
            let isCanEdit = false;

            if (
                post[0] != undefined
                && (
                    post[0].end_pay == null
                    || post[0].publish == false
                    || post[0].tarifa == "No"
                )
            )
                isCanEdit = true;

            if (count <= 0 && !isCanEdit)
                this.$modal.show("editLockModal");
            else
                location.href = "/post/edit" + postId;
        },
        openActiveModal(id, status) {
            this.currentPost = id;
            this.status = status;
            this.$modal.show("activeModal");
        },
        switchAutopay(id) {
            axios.post('/post/autopay' + id)
                .then(() => {
                    this.getPosts();
                })
        },
        postActive(id) {
            this.hideActiveModal();
            axios
                .post("/post/active" + this.currentPost)
                .then(response => {
                    this.getPosts();
                })
                .catch(error => {
                });
        },
        destroyPost(id) {
            axios
                .post("/post/destroy" + id)
                .then(response => {
                    this.$modal.show(
                        Notify,
                        {
                            title: "Éxito",
                            type: "success",
                            porterrors: null,
                            message: response.data.success
                        },
                        {
                            width: 380,
                            height: "auto"
                        }
                    );
                    this.getPosts();
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
                });
        },
        restor(id) {
            axios
                .post("/post/restore" + id)
                .then(response => {
                    this.$modal.show(
                        Notify,
                        {
                            title: "ANUNCIO RESTAURADO",
                            confirm: "LISTADO DE ANUNCIOS",
                            confirmLink: "/posts",
                            exitButton: true,
                            type: "success",
                            porterrors: null,
                            message: response.data.success
                        },
                        {
                            width: 380,
                            height: "auto"
                        }
                    );
                    this.opencreate = response.data.opencreate;
                    this.getPosts();
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        this.$modal.show(
                            Notify,
                            {
                                title: "Error",
                                type: "error",
                                porterrors: error.response.data.errors
                                // message: "Try again later"
                            },
                            {
                                width: 380,
                                height: "auto"
                            }
                        );
                    }
                });
        },
        setAcrchive(param) {
            this.archive = param;
            this.posts = [];
            this.getPosts();

            function updateURL() {
                if (history.pushState) {
                    var newurl =
                        window.location.protocol +
                        "//" +
                        window.location.host +
                        window.location.pathname +
                        "?archive=" +
                        param;
                    window.history.pushState({path: newurl}, "", newurl);
                }
            }

            updateURL();
        },
        openDeleteModal(id) {
            this.currentPost = id;

            let count = this.getCountDelete;

            let post = this.posts.filter(post => (post.id == id) ?? post)

            if (
                post[0] != undefined
                && (
                    post[0].end_pay == null
                    || post[0].publish == false
                    || post[0].tarifa == "No"
                )
            )
                this.isCanDelete = true;

            if (count <= 0 && !this.isCanDelete)
                this.$modal.show("deleteLockModal");
            else
                this.$modal.show("deleteModal");
        },
        deletePost(id) {
            axios
                .post("/post/delete" + this.currentPost)
                .then(response => {
                    this.$modal.hide("deleteModal");
                    this.$modal.show(
                        Notify,
                        {
                            title: "ELIMINADO",
                            type: "success",
                            porterrors: null,
                            message: response.data.success
                        },
                        {
                            width: 380,
                            height: "auto"
                        }
                    );
                    this.opencreate = response.data.opencreate;
                    this.getPosts();
                })
                .catch(error => {
                    this.$modal.hide("deleteModal");
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
                });
        },
        changeSort(type) {
            this.sort = type;
            this.getPosts();
        },
        emitModal() {
            this.$parent.openModalCreate();
        },
        getPosts() {
            this.loaddata = true;
            axios
                .get("/getposts", {
                    params: {
                        sort: this.sort,
                        archive: this.archive
                    }
                })
                .then(response => {
                    this.loaddata = false;
                    this.posts = response.data.data;
                    this.archivedPostsCount = response.data.archive_count;
                    this.emptyPost = response.data.data.length === 0;
                    this.postUpload = true;
                })
                .catch(error => {
                    this.loaddata = false;
                });
        }
    },
    created() {
        const params = new URLSearchParams(window.location.search);
        if (params.get("archive") == "true") {
            this.setAcrchive(true);
        } else {
            this.getPosts();
        }
    }
};
</script>

<style lang="scss" scoped>
.choose-btns {
    display: flex;
    padding-top: 28px;
    justify-content: space-evenly;

    .btn {
        width: 149px;
    }
}

.btn-posts-page {
    font-size: 20px;
}

.custom-checkbox {
    padding-left: 20px;
}

.handleimg {
    margin-right: 20px;
}

.tarifa-name {
    text-transform: capitalize;
}

.modal-header-notify {
    justify-content: flex-start;
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

.non-fixed-btn15 div {
    padding-left: 20px !important;
    font-family: "Extrabold", sans-serif;
}

.custom-ar {
    z-index: 1 !important;
}

.alert.alert-info {
    margin: 15px 0;
    background-color: #FE6885;
    color: #fff;
    padding: 5px;
    border-radius: 3px;
}

.cur-pointer {
    cursor: pointer;
}
</style>
