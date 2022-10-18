<template>
    <div>
        <h3 class="mb-2" v-if="label">{{ label }}</h3>
        <div class="radio-wrap-area radio-wrap-area-editer" v-for="(option,key) in options" :key="key">
            <label :for="id +'-'+key" class="custom-control custom-radio">
                <input
                    type="radio"
                    v-model="radio"
                    :id="id +'-'+key"
                    :name="id"
                    class="custom-control-input"
                    :value="option"
                >
                <span class="custom-control-label" :for="id +'-'+key">{{ option }}</span>
            </label>
        </div>
    </div>
</template>

<script>
export default {
    name: "InputRadio",
    data() {
        return {
            radio: this.value,
            id: null
        };
    },
    props: {
        options: {
            type: Object | Array,
            required: true,
            default: () => ({})
        },
        value: {
            type: String,
            required: true
        },
        label: {
            type: String,
            default: ''
        }
    },
    watch: {
        radio: function (val) {
            this.$emit("input", val);
        }
    },
    mounted() {
        this.id = 'radio-' + this._uid
    }
}
</script>

<style scoped>

</style>
