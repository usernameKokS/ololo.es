<template>
    <div>
        <section>
            <div class="container container-two">
                <div class="wrap-title">
                    <img src="/img/reportpink.svg" alt="Edit" class="title-img"/>
                    <h1 class="page-title page-title-stats">estadísticas</h1>
                    <v-select
						:options="portals"
                        :searchable="false"
                        :clearable="false"
                        v-model="newsite"
                        class="style-chooser disable-md-down"
                        placeholder="Todos"
						label="name"
                    >
                        <span slot="no-options">No hay datos para mostrar</span>
                    </v-select>
					
                    <v-select
                        :options="posts"
                        :searchable="false"
                        :clearable="false"
                        v-model="newpost"
                        class="style-chooser disable-md-down"
                        style="margin-left: 15px"
                        placeholder="Todos"
                        label="name"
                    >
                        <span slot="no-options">No hay datos para mostrar</span>
                        <template slot="option" slot-scope="option" style="margin-bottom: 100px">
                            <div style="display: inline;" :class="{
                                'withPicture': option.avatar !== null,
                                'withoutPicture': option.avatar === null,
                            }">
                                <img :src="option.avatar" width="32px" height="32px" v-if="option.avatar !== null"/>
                            </div>
                            {{ option.name }}
                        </template>
                    </v-select>
                </div>
            </div>
        </section>

        <div class="faux-borders"></div>

        <section>
            <div class="dash">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <v-select
                                    :options="portals"
                                    :searchable="false"
                                    :clearable="false"
                                    v-model="newsite"
                                    class="style-chooser disable-md-up pader-stat-select"
                                    placeholder="Todos"
									 label="name"
                                >
                                    <span slot="no-options">No hay datos para mostrar</span>
                                </v-select>
                            </div>
                            <div class="col">
                                <v-select
                                    :options="posts"
                                    :searchable="false"
                                    :clearable="false"
                                    v-model="newpost"
                                    class="style-chooser disable-md-up pader-stat-select"
                                    placeholder="Todos"
                                    label="name"
                                >
                                    <span slot="no-options">No hay datos para mostrar</span>
                                    <template slot="option" slot-scope="option" style="margin-bottom: 100px">
                                        <div style="display: inline;" :class="{
                                'withPicture': option.avatar !== null,
                                'withoutPicture': option.avatar === null,
                            }">
                                            <img :src="option.avatar" width="32px" height="32px"
                                                 v-if="option.avatar !== null"/>
                                        </div>
                                        {{ option.name }}
                                    </template>
                                </v-select>
                            </div>
                        </div>
                        <span class="attention-message" v-show="attentionMessage.length" v-html="attentionMessage"></span>
                        <div class="name-dash-item ow padder-over-stat" v-if="message !== false">
                            <div class="dash">
                                <div class="container" style="margin-top: 10px">
                                    <div class="name-dash-item">{{message}}</div>

                                    <div class="wrap-btn-mobile-inline" style="margin-bottom: 15px; margin-top: 15px;"
                                         v-if="message === 'NO INCLUIDO EN TU TARIFA. CAMBIA TU TARIFA PARA ANUNCIARSE EN ESTE PORTAL.'">
                                        <a :href="'/tariff' + postid"
                                           class="btn btn-normal btn_green-hover non-fixed-btn16">
                                            <div style="margin-left: 34px; margin-bottom: 2px;">
                                                <span>CAMBIAR TARIFA</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-else="!loaddata && !dataempty">
                            <div class="row padder-over-stat">
                                <div class="col-md-12 col-lg-3">
                                    <div class="name-dash-item">DATOS COMPLETOS</div>
                                    <div class="dush-item">
                                        <div class="dush-item-wrap">
                                            <div class="row">
                                                <div class="col-6" v-if="sum1 > 0">
                                                    <p class="total-dush">{{ sum1 }}</p>
                                                    <p class="total-desc-dush">Veces listado</p>
                                                </div>
												<!--div class="col-6" v-if="sum4 > 0">
                                                    <p class="total-dush">{{ sum4 }}</p>
                                                    <p class="total-desc-dush">Auto-renovados</p>
                                                </div-->
                                            </div>
                                            <!--div class="row padding-item-dash">
                                                <div class="col-6" v-if="sum3 > 0">
                                                    <p class="total-dush">{{ sum3 }}</p>
                                                    <p class="total-desc-dush">Envíos de email</p>
                                                </div>
                                                <div class="col-6" v-if="sum2 > 0">
                                                    <p class="total-dush">{{ sum2 }}</p>
                                                    <p class="total-desc-dush">Vieron el teléfono</p>
                                                </div>
                                            </div-->

                                            <div class="row padding-item-dash">
                                                <div class="col-6" v-if="sum5 > 0">
                                                    <p class="total-dush">{{ sum5 }}</p>
                                                    <p class="total-desc-dush">Compartido</p>
                                                </div>
                                                <div class="col-6" v-if="ads.length > 0">
                                                    <p class="total-dush">{{ ads.filter((ad) => {return ad.status == 'active'}).length }}</p>
                                                    <p class="total-desc-dush">Anuncio/s publicados</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dush-item">
                                        <div class="dush-item-wrap">
                                            PARA TENER MAS EFECTIVIDAD TODOS TUS ANUNCIOS PUBLICAN DURANTE 24 HORAS.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-3">
                                    <div class="name-dash-item">
                                        <span>veces listados</span>
                                        <img src="/img/info.svg" alt="info" class="info-dash"/>
                                    </div>
                                    <div class="dush-item">
                                        <div class="dush-item-wrap">
                                            <div class="pack-stat1">
                                                <line-chart :chart-data="datacollection1" :options="chartOptions"/>
                                            </div>
                                            <div class="title-item-dush">Veces listado últimos 30 días</div>
                                            <p class="no-data"
                                               v-if="datacollection1.datasets != undefined && datacollection1.datasets[0].data.reduce((a, b) => a + b, 0) === 0">
                                                DATOS NO SE PROPORCIONAN POR WEB
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-3">
                                    <!--div class="name-dash-item">
                                        <span>vieron el teléfono</span>
                                        <img src="/img/info.svg" alt="info" class="info-dash"/>
                                    </div>
                                    <div class="dush-item">
                                        <div class="dush-item-wrap">
                                            <div class="pack-stat1">
                                                <line-chart :chart-data="datacollection2" :options="chartOptions"/>
                                                <p class="no-data"
                                                   v-if="datacollection2.datasets[0].data.reduce((a, b) => a + b, 0) === 0">
                                                    DATOS NO SE PROPORCIONAN POR WEB
                                                </p>
                                            </div>
                                            <div class="title-item-dush">Veces listado últimos 30 días</div>
                                        </div>
                                    </div-->
                                </div>
                                <div class="col-md-12 col-lg-3">
                                    <!--div class="name-dash-item">
                                        <span>auto-renovados</span>
                                        <img src="/img/info.svg" alt="info" class="info-dash"/>
                                    </div>
                                    <div class="dush-item">
                                        <div class="dush-item-wrap">
                                            <div class="pack-stat1">
                                                <line-chart :chart-data="datacollection3" :options="chartOptions"/>
                                                <p class="no-data"
                                                   v-if="datacollection3.datasets[0].data.reduce((a, b) => a + b, 0) === 0">
                                                    DATOS NO SE PROPORCIONAN POR WEB
                                                </p>
                                            </div>
                                            <div class="title-item-dush">Veces listado últimos 30 días</div>
                                        </div>
                                    </-->
                                </div>
                            </div>
                            <div>
                                <div class="name-dash-item">MIS ANUNCIOS</div>
                                <table class="table">
                                    <tbody>
                                    <tr v-for="(ad, index) in ads" :key="'ad' + index">
                                        <td class="tabel-link">
                                            <a :href="ad.link" target="_blank" v-if="ad.link.indexOf('http') != -1">
                                                {{ad.link.replace('https://', '').replace('http://', '').replace('www.',
                                                '').slice(0, 20).concat('...')}}
                                            </a>
                                            <a v-else href="#">{{ad.link}}</a>
                                        </td>
                                        <td>{{ad.isPaid ? "De Pago" : ""}}</td>
                                        <td class="tabel-status" :class="{'tabel-status__green': ad.status == 'active', 'tabel-status__red': ad.status != 'active'}">
                                            {{ad.status == 'active' ? "Verificado" : "Eliminado"}}
                                        </td>
                                        <td class="tabel-time">{{ ad.time }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import LineChart from "./LineChart";

    export default {
        components: {
            LineChart
        },
        props: ["site", "postid", "portals", "posts"],
        data() {
            return {
                newsite: null,
                newpost: {},
                datacollection1: null,
                datacollection2: null,
                datacollection3: null,
                dataempty: false,
                loaddata: true,
                disbtn: true,
                message: false,
                page: 1,
                ads: [],
                sum1: 0,
                sum2: 0,
                sum3: 0,
                sum4: 0,
                sum5: 0,
                attentionMessage: '',
                chartOptions: {
                    responsive: true,
                    maintainAspectRatio: true,
                    legend: false,
                    elements: {
                        point: {
                            radius: 4
                        }
                    },
                    layout: {
                        padding: {
                            left: 7,
                            right: 7,
                            top: 7,
                            bottom: 7,
                        }
                    },
                    scales: {
                        xAxes: [
                            {
                                display: false,
                                gridLines: {
                                    display: false
                                }
                            }
                        ],
                        yAxes: [
                            {
                                ticks: {
                                    beginAtZero: true,
                                    userCallback: function (label, index, labels) {
                                        // when the floored value is the same as the value we have a whole number
                                        if (Math.floor(label) === label) {
                                            return label;
                                        }

                                    },
                                }
                            }
                        ]
                    }
                }
            };
        },
        watch: {
            newsite: function () {
                this.ads = [];
                this.page = 1;
                this.getAd();
                this.updateURL();
            },

            newpost: function () {
                this.ads = [];
                this.page = 1;
                this.getAd();
                this.updateURL();
            }
        },
        methods: {
            updateURL() {
                if (history.pushState) {
                    var newurl =
                        window.location.protocol +
                        "//" +
                        window.location.host +
                        window.location.pathname +
                        "?site=" +
                        this.newsite.id +
                        "&postid=" +
                        this.newpost.id;
                    window.history.pushState({path: newurl}, "", newurl);
                }
            },
            getAd() {
                this.loaddata = true;
                axios
                    .get("/dashboard/getdatas", {
                        params: {
                            site: this.newsite.id,
                            postid: this.newpost.id,
                        }
                    })
                    .then(response => {
                        this.dataempty = response.data.ads.length === 0;
                        this.ads = [];
                        response.data.ads.map(ad => {
                            
                            if(
                                ad.link == undefined
                                || ad.link == ''
                                || ad.link == '-'
                            )
                                ad.link = 'Tu anuncio está pendiente de aprobarse por administrador de este portal.';

                            this.ads.push(ad)
                        });

                        axios.get('/getportals?postid=' + this.newpost.id)
                            .then(({data}) => this.tariffCalculate(data));

                        this.sum1 = response.data.sum1;
                        this.sum2 = response.data.sum2;
                        this.sum3 = response.data.sum3;
                        this.sum4 = response.data.sum4;
                        this.sum5 = response.data.sum5;
                        this.datacollection1 = response.data.chart1;
                        this.datacollection2 = response.data.chart2;
                        this.datacollection3 = response.data.chart3;
                    })
                    .catch(error => {
                        this.loaddata = false;
                    });
            },

            tariffCalculate(portalsList) {
                this.loaddata = false;

                const {newsite, newpost} = this;
                
                const ads = this.ads.length;

                const postTodos = (newpost.name === 'Todos' || newpost.name === null || newpost.name === 'null');
                const siteTodos = (newsite === 'Todos' || newsite === null || newsite === 'null');
                const currentPortal = portalsList.filter(p => p.site === this.newsite.id);
						
                const publicando = portalsList.filter(p => p.statustwo === 'Publicando').length;
                const publicado = portalsList.filter(p => p.statustwo === 'Publicado').length;
                const noPublicado = portalsList.filter(p => p.statustwo === 'No publicado').length;
console.log(currentPortal)
                if (postTodos) {
                    // Hammesh
                    
                    if (ads > 0) {
                        // Aqali yakta boshatam ssilka has
                        this.message = false;
                    } else if (publicando > 0) {
                        // Yagonta ssilka nes lekin publicando budago has
                        this.message = "SUS ANUNCIOS ESTÁN PUBLICANDO…   VUELVE A ENTRAR EN UN RATO";
                    } else {
                        // Yagonta ssilka ham nes, yagonta publicando ham nes, znacit tarifa xardan darkor
                        this.message = "NO INCLUIDO EN TU TARIFA. CAMBIA TU TARIFA PARA ANUNCIARSE EN ESTE PORTAL.";
                    }
                } else {
                    // Konkret yagontesh

                    if (noPublicado === portalsList.length) {
                        // Da tarif namedarot
                        this.message = "NO INCLUIDO EN TU TARIFA. CAMBIA TU TARIFA PARA ANUNCIARSE EN ESTE PORTAL.";

                    } else if (ads === 0 && publicando > 0) {
                        // Battar biyo
                        this.message = "SUS ANUNCIOS ESTÁN PUBLICANDO…   VUELVE A ENTRAR EN UN RATO";

                    // } else if (ads > 0 && publicado === 0) {
                    //     // has, lekn holi naburomadas
                    //     this.message = "SUS ANUNCIOS ESTÁN PUBLICANDO...";
                    } else if (ads === 0) {
                        // has, lekn holi naburomadas
                        this.message = "SUS ANUNCIOS ESTÁN PUBLICANDO...";
                    } else {
                        this.message = false;
                    }
                }

                if(currentPortal[0] != undefined)
                {
                    this.attentionMessage = currentPortal[0].attentionMessage;

                    if(currentPortal[0].statustwo == "Proximamente")
                        this.message = ''
                }
                    
            },
        },
        mounted() {
            const defaultAdObject = {
                "id": null,
                "name": "Todos",
                'publish': 1,
                'archive': 0,
                "avatar": null
            };

            const width = document.documentElement.clientWidth;
            this.chartOptions.elements.point.radius = width < 1200 ? 6 : 2;
			
            this.newsite = this.site === "null" ? "Todos" : JSON.parse(this.site);

            if (this.postid === "" || this.postid === null) {
                this.newpost = defaultAdObject;
            } else {
                this.newpost = this.posts.filter(p => p.id === this.postid)[0];
            }
			console.log(this.portals)
        }
    };
</script>

<style lang="scss" scoped>
    .padds-input-filter {
        padding-top: 30px;
    }
</style>

<style scoped lang="scss">
    .v-select {
        width: 100%;
    }

    .v-select {
        max-width: 300px !important;
    }

    .withPicture {
        margin-right: 10px;
    }

    .withoutPicture {
        margin-right: 42px;
    }

    .clickable {
        &:hover {
            cursor: pointer;
        }
    }

    .no-data {
        color: grey;
        top: 155px;
        left: 100px;
        width: 105px;
        position: absolute;
    }
</style>
