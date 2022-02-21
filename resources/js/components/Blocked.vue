<template>
    <div>
        <modal name="blocked" width="90%" :max-width="810" :adaptive="true" height="auto">
            <div class="appmodal modal-pol">
                <div class="modal-container">
                    <div class="modal-header modal-header-notify">
                        <h3>
                            Tu cuenta esta bloqueada, <br> escribenos a <a href="mailto:info@almejarosa.es">info@almejarosa.es</a>
                        </h3>
                    </div>
                </div>
            </div>
        </modal>
    </div>
</template>

<script>
    export default {
        props: ["user"],

        mounted() {
            this.$modal.show("blocked");
        },
    };
</script>

<style lang="scss" scoped>
    .input-wrapers {
        padding-bottom: 15px;
    }

    .registermodal {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        p {
            padding-bottom: 30px;
        }

        .btn-regular {
            margin-top: 30px;
            width: 165px;
        }

        .input {
            width: 260px;
        }
    }

    .policy-area {
        padding-top: 15px;
        padding-bottom: 30px;

        .reset-checker {
            padding-top: 15px;
        }
    }

    .btn-green {
        width: 180px;
    }
</style>
