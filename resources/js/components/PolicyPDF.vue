<template>
    <div v-html="policy">
        <!--pdf
            v-for="i in numPages"
            :key="i"
            :src="src"
            :page="i"
            style="margin-bottom: 20px;"
        /-->
    </div>
</template>

<script>

    // import pdf from 'vue-pdf'

    // var loadingTask = pdf.createLoadingTask('/download/policy.pdf');

    export default {
        /*components: {
            pdf
        },*/
        name: 'policy-pdf',

        data() {
            return {
                /*src: loadingTask,
                numPages: undefined,
				loadedRatio: 0,
				rotate: 0,*/
				policy: ''
            }
        },
        mounted() {
			let src = 'https://docs.google.com/gview?url=https://almejarosa.es/download/policy.pdf&embedded=true';
			let height = (window.screen.height - 200) + 'px';
			let style = 'overflow:hidden;height:' + height + ';width:100%';
			this.policy = '<iframe src="' + src + '" frameborder="0" style="' + style + '" height="' + height + '" width="100%"></iframe>';
            /*this.src.promise.then(pdf => {

                this.numPages = pdf.numPages;
            });*/
        }
    }

</script>
