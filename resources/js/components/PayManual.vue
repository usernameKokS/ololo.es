<template>
    <div class="container mt-3">
        <div class="row" v-if="alert">
            <div class="col-12">
                <div class="alert alert-success">{{ alert }}</div>
            </div>
        </div>
        <button class="btn btn-primary mt-3" @click.prevent="pay">Pagar</button>
    </div>
</template>

<script>
export default {
    name: "PayManual",
    data() {
        return {
            alert: null
        }
    },
    props: {
        postId: {
            type: Number,
            required: true
        }
    },
    methods: {
        pay() {
            axios.post('/api/pay/manual', {
                postId: this.postId
            }).then(response => {
                this.alert = response.data.message;
            });
        }
    }
}
</script>

<style scoped>

</style>
