<template>
    <div>
        <section>
            <div class="container container-two">
                <div class="wrap-title">
                    <img src="/img/reportpink.svg" alt="Edit" class="title-img"/>
                    <h1 class="page-title page-title-stats">estadísticas</h1>

                    <v-select
                        :options="allposts"
                        :searchable="false"
                        :clearable="false"
                        v-model="newpost"
                        class="style-chooser"
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

        <section class="estada-area">
            <div class="statistic">
                <div class="container">
                    <table class="table">
                        <thead>
                        <tr>
							<th></th>
                            <th scope="col" class="tbody-name">Portales donde estas publicado/a</th>
                            <th class="thead-wrap">
                                <img src="/img/report.svg" alt="stat" class="img-thead"/>
                            </th>
                            <th v-if="show" scope="col" class="thead-wrap">Estado</th>
                            <th v-if="show" scope="col" class="thead-wrap">tu tarifa incluye</th>
                        </tr>
                        </thead>
                        <tbody>
						<tr v-if="!ads.length">
							<td colspan="5">
								<b class="loader-title">Cargando<span v-html="loader" class="loader">.</span></b>
							</td>
						</tr>
                        <tr v-else v-for="(portal, index) in ads" :key="portal.id">
							<td>{{index + 1}}</td>
                            <td class="tbody-name">
                                <a :href="portal.url" target="_blank" class="tabel-name-link">{{ portal.site == 'Escortbook.com' ? 'Tu página WEB' : portal.site }}</a>
								<!--span class="attention-message" v-show="portal.attentionMessage.length" v-html="portal.attentionMessage"></span-->
                            </td>
                            <td>
                                <a :href="portal.url" target="_blank" class="tabel-ver">ver</a>
                            </td>
                            <td v-if="show" class="status"
                                :class="{'status-yellow': (portal.statustwo == 'Publicando' || portal.statustwo == 'Modificando'),
              'status-green': (portal.statustwo == 'Publicado' || portal.statustwo == 'Renovando'),
              'status-red': (portal.statustwo == 'No publicado' || portal.statustwo == 'Eliminando' || portal.statustwo == 'Revisar'),
			  'status-light-green': portal.statustwo == 'Proximamente'
            }"
                            >
							{{ portal.statustwo }}
                            </td>
                            <td v-if="show">
                                <img src="/img/delete.svg" alt="no" class="del-image" v-show="portal.status == false || portal.statustwo == 'Proximamente'"/>
                                <img src="/img/checked.svg" alt="Yes" class="del-image" v-show="portal.status == true && portal.statustwo != 'Proximamente'"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="tabel-succes">
                        <div class="item_desc" style="margin-right: 20px" v-if="newpost.id !== null">
                            <div class="item_desc-left">
                                <p>
                                    Tu tarifa:
                                    <span>
                              <span class="item_desc-success tarifa-name colorpay__green" v-if="tariff != 'No'">{{ tariff }}</span>
                              <span class="item_desc-error tarifa-name colorpay__red" v-else>{{ tariff }}</span>
                            </span>
                                </p>
                                <p>
                                    Activo hasta:
                                    <span
                                        class="item_desc-success 2"
                                        v-if="end_pay != null"
                                        :class="{'colorpay__green': colorpay == 'green',
                                      'colorpay__yellow': colorpay == 'yellow',
                                      'colorpay__red': colorpay == 'red'}"
                                    >{{ end_pay }}</span>

                                    <span
                                        class="item_desc-error 2"
                                        v-else
                                        :class="{'colorpay__green': colorpay == 'green',
                                      'colorpay__yellow': colorpay == 'yellow',
                                      'colorpay__red': colorpay == 'red'}"
                                    >{{ 'No' }}</span>
                                </p>
                            </div>
                        </div>

                        <a href="/tariff" class="btn btn-regular btn-green">Modificar tarifa</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        props: ['postid', 'entity', 'posts'],
        data() {
            return {
                ads: [],
                end_pay: '',
                tariff: '',
                allposts: [],
                newpost: {},
                colorpay: 'red',
				loader: '.'
            };
        },
        methods: {
            getAd() {
                const page = this.page;
                const postid = this.newpost.id;

                axios
                    .get("/getportals", {
                        params: {page, postid}
                    })
                    .then(({data}) => {
                        this.ads = data;
                    })
                    .catch(error => console.log(error));
            },
            getPost() {
                const id = this.newpost;
                axios.post('/getpost', {id})
                    .then(({data}) => {
                        this.end_pay = data.end_pay;
                        this.tariff = data.tariff;
                        this.colorpay = data.colorpay;
                    });
            },

            updateUrl() {
                if (history.pushState) {
                    const url = `${window.location.protocol}//${window.location.host}${window.location.pathname}?postid=${this.newpost.id}`;
                    window.history.pushState({path: url}, "", url);
                }
            }
        },

        watch: {
            newpost() {
                this.ads = [];
                this.getAd();
                this.getPost();
                this.updateUrl();
            }
        },

        computed: {
            show: function(){
                return !(this.entity === 1 && this.newpost.id === null);
            },
        },

        mounted() {
		
			setInterval(() => {
				if(this.loader.length < 3)
					this.loader += '.';
				else
					this.loader = '.';
			}, 500);
            const {posts} = this;

            const defaultPost = {
                id: null,
                name: 'Todos',
                avatar: null,
            };

            posts.map(p =>
                this.allposts.push({
                    id: p.id,
                    name: p.name,
                    avatar: p.avatar,
                })
            );

            this.allposts = [defaultPost, ...this.allposts];

            if (this.postid === "" || this.postid === null) {
                this.newpost = defaultPost;
            } else {
                this.newpost = this.allposts.filter(p => p.id === this.postid)[0];
            }
        }
    };
</script>

<style lang="scss">
    .tabel-name-link {
        cursor: pointer;
    }
</style>

<style scoped lang="scss">
	.loader-title
	{
		font-size: 16px;
		font-weight: bold;
	}
	
	.loader-title .loader
	{
		color: #fe6885;
	}
	
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
