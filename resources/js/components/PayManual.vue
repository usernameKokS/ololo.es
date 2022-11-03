<template>
    <div class="container mt-3">
        <div class="row" v-if="alert">
            <div class="col-12">
                <div class="alert alert-success">{{ alert }}</div>
            </div>
        </div>
        <div class="d-flex mt-3 items-center">
            <button class="btn btn-danger mr-2" @click.prevent="pay('canceled')">Cancelar</button>
            <button class="btn btn-primary " @click.prevent="pay('success')">Pagar</button>
        </div>
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
        pay(status) {
            axios.post('/api/pay/manual', {
                postId: this.postId,
                status: status
            }).then(response => {
                this.alert = response.data.message;
            }).finally(() => {
                setTimeout(() => {
                    this.alert = null;
                    window.location.href='/posts';
                }, 3000);
            });
        }
    }
}
</script>

<style scoped>

</style>
