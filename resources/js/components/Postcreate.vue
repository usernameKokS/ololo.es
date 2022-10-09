<template>
    <div class="post-create-zone">
        <form @submit.prevent="sendform">
            <horizontal-stepper
                :steps="steps"
                @completed-step="completeStep"
                :top-buttons="true"
                @active-step="isStepActive"
                @stepper-finished="sendform"
                locale="es"
            ></horizontal-stepper>
        </form>
        <br /><br /><br /><br /><br />
    </div>
</template>

<script>

    import {maxLength, minLength, minValue, numeric, required} from "vuelidate/lib/validators";

    import HorizontalStepper from './vue-stepper-custom';
    import Notify from "./Notify";
    import step1 from "./postcreatesteps/step1";
    import step2 from "./postcreatesteps/step2";
    import step3 from "./postcreatesteps/step3";
    import step4 from "./postcreatesteps/step4";

    export default {
        props: [
            "user",
            "post",
            "places",
            "cats",
            "oldrates",
            "oldservices",
            "oldreminds",
        ],
        components: {
            HorizontalStepper
        },
        data(){
            return {
                steps: [
                    {
                        icon: 'tag_faces',
                        name: 'main_info',
                        title: 'Datos principales',
                        subtitle: '',
                        component: step1,
                        completed: false
                    },
                    {
                        icon: 'message',
                        name: 'description',
                        title: 'Caracteristicas',
                        subtitle: '',
                        component: step2,
                        completed: false
                    },
                    {
                        icon: 'tune',
                        name: 'services',
                        title: 'Descripción',
                        subtitle: '',
                        component: step3,
                        completed: false
                    },
                    {
                        icon: 'insert_photo',
                        name: 'insert_photos',
                        title: 'Fotos',
                        subtitle: '',
                        component: step4,
                        completed: false
                    }
                ],
                activeStep: 0,
                locale: 'es'
            }
        },
        computed: {},
        methods: {
            completeStep(payload) {
                this.steps.forEach((step) => {
                    if (step.name === payload.name) {
                        step.completed = true;
                    }
                })
            },
            isStepActive(payload) {
                this.steps.forEach((step) => {
                    if (step.name === payload.name) {
                        if(step.completed === true) {
                            step.completed = false;
                        }
                    }
                })
            },
            sendform(payload) {

            },
        },
        mounted() {
        },
    };
</script>

<style lang="scss">

    .note-text
    {
        display: block;
        padding: 15px;
        border: 1px solid #FE6885;
        font-size: 13px;
        margin-bottom: 20px;
    }

    hr
    {
        height: 0px;
        border:none;
        border-top: 1px solid #dddddd;
    }

    .stepper-box
    {
        max-width: 80%;
        margin: 0 auto;
        padding: 0 15px;
    }

    @media screen and (max-width: 768px) {
        .stepper-box
        {
            max-width: 100%;
            padding: 0 3px;
        }
    }

    .stepper-box .bottom .stepper-button.next
    {
        background-color: #FE6885 !important;
    }

    .stepper-box .top .steps-wrapper .step .circle i
    {
        background-color: #FE6885 !important;
    }

    .stepper-box .top .steps-wrapper .step.deactivated .circle i
    {
        background-color: #dfdfdf !important;
    }

    .stepper-box .top .stepper-button-top.next
    {
        border-color: #FE6885 !important;
        color: #FE6885 !important;
    }

	.d-flex
	{
		display: flex;
	}

	.input-indicator-box img
	{
		max-width: 25px;
	}

    .leaflet-marker-icon {
        margin-left: -13px !important;
        margin-top: -41px !important;
        width: 42px !important;
        height: 41px !important;
    }

    .input-rates:disabled {
        background-color: white;
    }

    .tarif-input-area input[type=text]:disabled
    {
        background-color: #dddddd;
    }
	.text-right
	{
		text-align: right;
		padding-right: 10px;
	}
	.input-dashed-bottom
	{
		border: none;
		border-bottom: 1px dashed #dfdfdf;
		padding-left: 0 !important;
	}

	.block-box
	{
		border: 1px solid #dfdfdf;
		width: 100%;
		padding: 15px 5px;
	}

	.block-box .w-100
	{
		width: 100%;
	}

	.block-box .input-label-title
	{
		border-bottom: 1px solid #dfdfdf;
		padding-bottom: 10px;
		width: 100%;
		display: block;
		font-size: 14px;
	}
</style>
