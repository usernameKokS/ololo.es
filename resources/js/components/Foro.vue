<template>
    <div>
        <section>
            <div class="container container-two">
                <div class="wrap-title">
                    <img src="/img/post.svg" alt="icon" class="title-img"/>
                    <h1 class="page-title page-title-foro">FORO</h1>

                    <v-select :searchable="false" :clearable="false" v-model="currentSite" :options="allSites" class="style-chooser"
                              style="margin-right: 10px">
                        <span slot="no-options">No hay datos para mostrar</span>
                    </v-select>
                    <v-select
                        :options="allPosts"
                        :searchable="false"
                        :clearable="false"
                        v-model="currentPost"
                        class="style-chooser"
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

        <div v-if="message === false" class="dash foro-dash">
            <div class="container">
                <div>
                    <table class="table">
                        <tbody>
                        <tr v-for="(ad, index) in forums" :key="index">
                            <td class="tabel-link">
                                <a :href="ad.link" target="_blank">
                                    {{ad.link.replace('https://', '').replace('http://', '').replace('www.', '').slice(0, 20).concat('...')}}
                                </a>
                            </td>
                            <td class="tabel-status tabel-status__green">{{ad.name}}</td>
                            <td class="tabel-time">{{ ad.time }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div v-else class="dash">
            <div>
                <div class="container">
                    <div class="name-dash-item ow padder-over-stat">
                        <div v-if="loaddata" class="dash">
                            <div class="container" style="margin-top: 10px">
                                <div class="name-dash-item">{{message}}</div>

                                <!--div class="wrap-btn-mobile-inline" style="margin-bottom: 15px; margin-top: 15px;" v-if="(message === 'NO INCLUIDO EN TU TARIFA. CAMBIA TU TARIFA PARA TENER RESEÑAS POSITIVAS EN LOS FOROS.' || message === 'NO INCLUIDO EN TU TARIFA. CAMBIA TU TARIFA PARA TENER RESEÑAS POSITIVAS EN ESTE FORO.')">
                                    <a :href="'/tariff' + postid" class="btn btn-normal btn_green-hover non-fixed-btn16">
                                        <div style="margin-left: 34px; margin-bottom: 2px;">
                                            <span>CAMBIAR TARIFA</span>
                                        </div>
                                    </a>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['site', 'post', 'sites', 'posts'],

        data() {
            return {
                allSites: [],
                allPosts: [],
                currentSite: 'Todos',
                currentPost: 'Todos',
                forums: [],
                message: false,
                loaddata: true,
            }
        },

        watch: {
            currentSite() {
                this.load();
            },
            currentPost() {
                this.load();
            },
        },

        methods: {
            load() {
                this.loaddata = false;
                this.forums = [];
                this.getForums();
                this.updateURL();
            },

            getForums() {
                axios.get(`/statistic/forums/${this.currentSite}/${this.currentPost.id}`)
                .then(r => {
                    this.forums = r.data;
                    this.tariffCalculate(r.data.data)
                })
            },

            updateURL() {
                if (history.pushState) {
                    const url = `${window.location.protocol}//${window.location.host}${window.location.pathname}?site=${this.currentSite}&postid=${this.currentPost.id}`;
                    window.history.pushState({path: url}, "", url);
                }
            },

            tariffCalculate(){
                this.loaddata = true;

                if (this.currentPost.no_includio){

                    return this.currentSite === 'Todos'
                        ? (this.message = "NO INCLUIDO EN TU TARIFA. CAMBIA TU TARIFA PARA TENER RESEÑAS POSITIVAS EN LOS FOROS.")
                        : (this.message = "NO INCLUIDO EN TU TARIFA. CAMBIA TU TARIFA PARA TENER RESEÑAS POSITIVAS EN ESTE FORO.");
                }

                if (this.forums.length === 0)
                    return this.message = 'SUS RESEÑAS ESTÁN PUBLICANDO…   VUELVE A ENTRAR EN UN RATO'
            },
        },

        created() {
            const todosSites = 'Todos';

            const todosPosts = {
                id: null,
                name: 'Todos',
                avatar: null,
                no_includio: false,
            };

            this.allSites = [todosSites, ...JSON.parse(this.sites)];
            this.allPosts = [todosPosts, ...JSON.parse(this.posts)];

            this.currentSite = this.site;

            if (this.post === "" || this.post === null || this.post === 'null' || this.post === 'Todos') {
                this.currentPost = todosPosts;
            } else {
                this.currentPost = this.allPosts.filter(p => p.id === parseInt(JSON.parse(this.post).id))[0];
            }
        }
    };
</script>

<style lang="scss" scoped>
    .v-select {
        max-width: 300px !important;
    }

    .withPicture {
        margin-right: 10px;
    }

    .withoutPicture {
        margin-right: 42px;
    }
</style>
