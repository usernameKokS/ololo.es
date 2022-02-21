<template>
    <section>
        <div class="posts-content">
            <div class="container">
                <div class="post-main-wrap">
                    <div class="row">
                        <div class="col-md-6" v-for="(post, index) of posts" :key="post.id">
                            <div class="post-item" style="padding-bottom: 0;">
                                <div class="item-content__desk">
                                    <div class="custom-control custom-checkbox item-check">
                                        <input type="checkbox" class="custom-control-input" :id="'checkbox' + post.id"
                                               v-model="post.form.isChecked" @click="selectPost(index)"/>
                                        <label class="custom-control-label" :for="'checkbox' + post.id"/>
                                    </div>
                                    <div class="avatar-wrapper">
                                        <div
                                            class="main-avatar"
                                            :style="`background: url(/storage/` + post.avatar + `);
                                                    background-position: center center;
                                                    background-size: cover;
                                                    background-repeat: no-repeat;`"
                                        />
                                    </div>
                                    <div class="item-content">
                                        <div class="item-content__left">
                                            <div class="item-content__top">
                                                <div class="item__name">
                                                    <h3 class="h3-desc">{{post.name}}</h3>
                                                </div>
                                                <div class="item_desc" style="padding-bottom: 19px;">
                                                    <div class="item_desc-left">
                                                        <p>
                                                            Tu tarifa:
                                                            <span>
                              <span class="item_desc-success tarifa-name"
                                    v-if="post.tarifa != 'No'">{{ post.tarifa }}</span>
                              <span class="item_desc-error tarifa-name" v-else>{{ post.tarifa }}</span>
                            </span>
                                                        </p>
                                                        <p>
                                                            Activo hasta: <br>
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
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-content__right">
                                            <div class="tariffes">
                                                <div style="margin-top: 18px;" class="custom-control custom-checkbox item-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                           :id="`tariff${post.id}silver`" v-model="post.form.isSilver"
                                                           @click="changeTariff(index, 'Silver')"/>
                                                    <label class="custom-control-label" :for="`tariff${post.id}silver`">
                                                        <span class="cost">SILVER 29.99 €</span> <br v-if="isMobile">
                                                        / 7 días
                                                    </label>
                                                </div>
                                                <div style="margin-top: 23px;" class="custom-control custom-checkbox item-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                           :id="`tariff${post.id}gold`" v-model="post.form.isGold"
                                                           @click="changeTariff(index, 'Gold')"/>
                                                    <label class="custom-control-label" :for="`tariff${post.id}gold`">
                                                        <span class="cost">GOLD 99.95 €</span> <br v-if="isMobile">
                                                        / 7 días
                                                    </label>
                                                </div>
                                                <div style="margin-top: 29px;" class="custom-control custom-checkbox item-check">
                                                    <input type="checkbox" class="custom-control-input"
                                                           :id="`tariff${post.id}diamond`"
                                                           v-model="post.form.isDiamond"
                                                           @click="changeTariff(index, 'Diamond')"/>
                                                    <label class="custom-control-label"
                                                           :for="`tariff${post.id}diamond`">
                                                        <span class="cost">DIAMOND 299.95 €</span> <br v-if="isMobile">
                                                        / 7 días
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="total disable-desk">
            <div class="sum d-flex" style="justify-content: center;">
                <div class="text">
                    Total a pagar: <span class="cost">{{total}} €</span>
                </div>
                <div class="button">
					<tariffpaycoor :postsForForm="postsForForm" :csrf="csrf" :showPagar=booleanTotal></tariffpaycoor>
                </div>
            </div>
        </div>

        <div class="total disable-mobile" style="width: 100%">
            <div class="sum d-flex" style="justify-content: center;">
                <div class="text">
                    Total a pagar: <span class="cost">{{total}} €</span>
                </div>
                <div class="button">
					<tariffpaycoor :postsForForm="postsForForm" :csrf="csrf" :showPagar=booleanTotal></tariffpaycoor>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    Array.prototype.remove = function () {
        var what, a = arguments, L = a.length, ax;
        while (L && this.length) {
            what = a[--L];
            while ((ax = this.indexOf(what)) !== -1) {
                this.splice(ax, 1);
            }
        }
        return this;
    };

    window.addEventListener( "pageshow", function ( event ) {
        var historyTraversal = event.persisted ||
            ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );
        if ( historyTraversal ) window.location.reload();
    });

    export default {
        data() {
            return {
                posts: [],
            }
        },

        created() {
            axios.get('/getposts')
                .then(r => {
                    r.data.data.map(p => {
                        p.form = {
                            'isChecked': false,
                            'isSilver': false,
                            'isGold': false,
                            'isDiamond': false,
                            'tariff': '',
                        }
                    });

                    this.posts = r.data.data;
                })
        },

        methods: {
            changeTariff: function (index, tariff) {
                const {form} = this.posts[index];
                const tariffName = `is${tariff}`;
                const tariffes = ['isSilver', 'isGold', 'isDiamond'];

                if (tariff === form.tariff) {
                    form.isChecked = false;
                    form.tariff = "";
                } else {
                    form.isChecked = true;
                    tariffes.remove(tariffName);
                    this.posts[index].form.tariff = tariff;

                    tariffes.map(t => this.posts[index].form[t] = false);
                }

            },

            selectPost: function (index) {
                const {form} = this.posts[index];

                if (form.isChecked) {
                    form.isSilver = false;
                    form.isGold = false;
                    form.isDiamond = false;
                    form.tariff = '';
                } else {
                    form.isSilver = true;
                    form.tariff = 'Silver';
                }
            },
        },

        computed: {
			booleanTotal: function(){
				return this.total > 0;
			},
            total: function () {
                let total = 0;

                this.posts.map(p => {
                    let tarif = p.form.tariff;
                    switch (tarif) {
                        case 'Silver':
                            total += 24.95;
                            break;
                        case 'Gold':
                            total += 99.95;
                            break;
                        case 'Diamond':
                            total += 299.95;
                            break;
                    }
                });

                return (Math.round(total * 100) / 100).toFixed(2);
            },

            isMobile: function(){
                return window.width < 600;
            },

            csrf: function(){
                return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            },

            postsForForm: function(){
                const response = [];

                this.posts.map(p => {
                    if(p.form.tariff !== ''){
                        response.push({
                            id: p.id,
                            tariff: p.form.tariff,
                        });
                    }
                });

                return JSON.stringify(response);
            }
        }
    }
</script>

<style lang="scss" scoped>
    .custom-checkbox {
        padding-left: 11px;
    }

    .main-avatar {
        width: 92px;
        height: 138px;
    }

    .avatar-wrapper {
        padding-right: 23px;
    }

    .item-content__right {
        justify-content: flex-start;
    }

    .tariffes {
        height: 100%;
        margin-bottom: auto;
        margin-top: auto;
    }

    .item-content__right {
        display: block;
    }

    .cost {
        font-family: "Bold", sans-serif;
    }

    .total {
        width: 100%;
        height: 123px;
        background-color: #f8f8f8;
        margin-bottom: 100px;
        padding-top: 53px;
    }

    .total .sum {
        text-align: center;
    }

    .total .sum .text {
        font-size: 18px;
        font-weight: 700;
    }

    .total .sum .text .cost {
        font-size: 25px;
        font-weight: 700;
    }

    .pagar {
        border: 0;
        background-color: #fe6885;
        border-radius: 25px;
        color: white;
        width: 160px;
        font-size: 18px;
        font-family: "Bold", sans-serif;
        text-transform: uppercase;
        height: 48px;
        margin-left: 36px;
    }

    form {
        display: inherit;
        margin-top: inherit;
    }
</style>
