<template>
    <div class="edit-section-photo">
        <div class="container">
            <div class="wrap-icon5"></div>
            <div class="container container-two">
                <h2>Anadir fotos y videos a tu anuncio</h2>
                <div class="photo-content">
                    <div class="photos-wrap">
                        <div class="item-wrapper" v-for="(attachment, index) in attachments"
                             :key="index">
                            <img
                                src="/img/quit.svg"
                                class="item-quit"
                                alt="quit"
                                @click="deleteAttachment( attachment.id)"
                            />
                            <div class="item" v-if="isPhoto(attachment)"
                                 @click.prevent="setAsCover(attachment.id)"
                                 :style="{
                                background: 'url(' +  attachment.url + ')',
                                backgroundSize: 'cover',
                            }">
                                <div class="wrapper-activ-photo" v-if="attachment.as_cover">
                                    <div class="activ-photo">Foto principal</div>
                                </div>
                            </div>
                            <video v-if="isVideo(attachment)" width="100%" height="100%" controls>
                                <source :src="attachment.url" :type="attachment.mime">
                            </video>
                        </div>


                        <div class="item-wrapper" v-for="index in 15" :key="index" v-if="!attachments.length">
                            <div class="item item--addphoto" @click.prevent="">
                                <div class="empty-item">
                                    <img src="/img/plusgrey.svg" alt="upload" class="uploadimage"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div :class="{ 'select-file-lbl':true, bottom: attachments.length>0}">
                    <label>
                        Seleccionar fotos y vídeos
                        <input type="file" id="file" multiple ref="file" v-on:change="handleFileUpload($event)"/>
                    </label>
                    <p>Puedes poner hasta 40 photos y 6 videos</p>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
import Notify from './Notify';

export default {
    props: ["csrf", "post"],
    data() {
        return {
            files: '',
            edit: false,
            post_id: this.post.id,
            attachments: []
        }
    },
    components: {},
    mounted() {
        this.getAttachments();
    },
    computed: {

    },
    methods: {
        setAsCover(id) {
            axios
                .post("/attachment/set-cover", {
                    id: id
                })
                .then(response => {
                    this.getAttachments();
                })
                .catch(error => {
                    console.log(error);
                });
        },
        deleteAttachment(id) {
            axios.delete('/attachments/' + id)
                .then(response => {
                    this.getAttachments();
                })
                .catch(error => {
                    console.log(error);
                });
        },
        isPhoto(attachment) {
            let imageMimeType = ['image/png', 'image/gif', 'image/jpeg', 'image/webp'];
            return imageMimeType.includes(attachment.mime);
        },
        isVideo(attachment) {
            let videoMimeType = ['video/mp4', 'video/quicktime', 'video/x-msvideo', 'video/x-ms-wmv'];
            return videoMimeType.includes(attachment.mime);
        },
        getAttachments() {
            axios.get('/attachments/' + this.post_id).then(response => {
                this.attachments = response.data.post_attachments;
            });
        },
        handleFileUpload(event) {
            this.files = event.target.files;
            const self = this;
            let formData = new FormData();

            for (var i = 0; i < this.files.length; i++) {
                let file = this.files[i];
                formData.append('files[' + i + ']', file);
            }
            formData.append('post_id', this.post_id);

            axios.post('/attachments/store',
                formData, {headers: {'Content-Type': 'multipart/form-data'}}
            )
                .then(function (response) {
                    if (response.data.type == 'success') {
                        self.attachments = response.data.post_attachments
                    }

                })
                .catch(function (e) {
                  if (e.response.status == 422) {
                      self.$modal.show(
                          Notify,
                          {
                              title: "Error",
                              type: "error",
                              //   porterrors: error.response.data.errors,
                              message: e.response.data.message
                          },
                          {
                              width: 380,
                              height: "auto"
                          }
                      );
                  }
                });
        },
    }
};
</script>

<style lang="scss" scoped>
.select-file-lbl {
    position: absolute;
    top: 250px;
    left: 50%;
    background: #ffffff;
    z-index: 9;
    width: 360px;
    padding: 30px;
    margin-left: -180px;
    margin-top: -50px;
    box-shadow: 0 7px 7px rgba(0, 0, 0 , 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 5px;
    &.bottom{
        position: relative;
        top: auto;
        margin-top: 30px;
        width: 100%;
        left: auto;
        margin-left: 0;
        box-shadow: 0 2px 7px rgba(0, 0, 0 , 0.2);
    }
    input[type=file] {
        display: none;
    }
    label {
        height: 36px;
        display: flex;
        color: #3c3e48;
        text-decoration: none;
        border-style: solid;
        border-width: 2px;
        border-color: #3c3e48;

        border-radius: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        &:hover {
            background: #3c3e48;
            color: #ffffff;
            cursor: pointer;
        }
    }
    p {
        font-size: 13px;
    }
}

</style>
