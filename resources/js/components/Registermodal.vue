<template>
  <div>
    <modal
      name="registermodal"
      @before-close="redirectToMainPage"
      :max-width="400"
      width="90%"
      height="auto"
      :adaptive="true"
	  :clickToClose="false"
    >
      <div class="appmodal app-modal-registermodal">
        <div class="modal-container">
          <div class="modal-header modal-header-register">
            <h3>Nueva Contraseña</h3>
            <img src="/img/closemodal.svg" alt="modal" @click="redirectToMainPage" />
          </div>
        </div>
        <div class="faux-borders" style="width: 70%;"></div>
        <div class="modal-container">
          <div class="modal-body">
            <form class="registermodal" @submit.prevent="sendUser">
              <p>Escoge una contraseña de 6 a 15 caracteres.</p>
              <div class="input-wrapers">
                <input
                  class="input"
                  type="password"
                  name="password"
                  placeholder="Contraseña"
                  v-model.trim="$v.password.$model"
                  :class="{ 'input-error':  $v.password.$error }"

                />
              </div>
              <div class="input-wrapper">
                <input
                  class="input"
                  type="password"
                  v-model.trim="$v.password_confirmation.$model"
                  name="password_confirmation"
                  placeholder="Repetir contraseña"
                  :class="{ 'input-error': $v.password_confirmation.$error }"
                />
              </div>

              <button type="submit" title="espalda" class="btn btn-regular btn-green non-fixed-btn10">
                <div>
                  <span>Aceptar</span>
                </div>
              </button>
            </form>
          </div>
        </div>
      </div>
    </modal>
    <modal
      name="policy"
      @before-close="redirectToMainPage"
      width="90%"
      :max-width="810"
      :adaptive="true"
      height="400"
    >
      <div class="appmodal">
        <div class="modal-container">
          <div class="modal-header modal-header-notify">
            <h3>CONDICIONES DE USO Y POLITICA DE PRIVACIDAD</h3>
            <img src="/img/closemodal.svg" alt="modal" @click="redirectToMainPage" />
          </div>
        </div>
        <div class="faux-borders" style="width: 70%;"></div>
        <div class="modal-container">
          <div class="modal-body">
            <form class="policymodal" @submit.prevent="checkpolicy">
                <p>Desde el 25 de mayo de 2018, aplica en toda Europa el nuevo Reglamento General de Protección de Datos de la UE, la GDPR (General Data Protection Regulation, EU 679/2016).</p>
                <p>Debido a este cambio, y para que puedas disfrutar de las ventajas de Almejarosa.es con las mayores garantías de protección, debes aceptar nuestras Condiciones de uso y Política de privacidad.</p>
                <div class="policy-area">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" id="policy" class="custom-control-input" v-model="policy" />
                  <label class="custom-control-label" for="policy">
                    Acepto las
                    <a href="/page/policy" target="_blank">Condiciones de Uso</a> y
                    <a href="/page/policy" target="_blank">Política de Privacidad.</a>
                  </label>
                </div>
                <div class="custom-control custom-checkbox reset-checker">
                  <input type="checkbox" id="com" class="custom-control-input" v-model="com" />
                  <label
                    class="custom-control-label"
                    for="com"
                  >Acepto recibir comunicados comerciales y boletines de Almejarosa.es.</label>
                </div>
              </div>

              <button
                type="submit"
                class="btn btn-regular btn-green"
                :disabled="!policy"
              >
                <div>
                  <span>Aceptar</span>
                </div>
              </button>
            </form>
          </div>
        </div>
      </div>
    </modal>
  </div>
</template>

<script>

import Notify from "./Notify";
import FingerprintJS from '@fingerprintjs/fingerprintjs';

import {
  required,
  sameAs,
  minLength,
  maxLength
} from "vuelidate/lib/validators";

export default {
  props: ['email'],
  data() {
    return {
      password: "",
      password_confirmation: "",
      policy: false,
      com: false,
      submitStatus: null
    };
  },
  validations: {
    password: {
      required,
      minLength: minLength(6),
      maxLength: maxLength(15)
    },
    password_confirmation: {
      sameAsPassword: sameAs("password")
    }
  },
  mounted() {
    this.$modal.show("registermodal");
    // this.$modal.show("policy");
  },
  created() {},
  methods: {
    redirectToMainPage() {
      // window.location.href = "/";
	  // location.reload();
	  // this.$modal.show("registermodal");
	  // console.log('registermodal');
	  // console.log(this.$modal);
	  return false;
    },
    sendUser() {
      this.$v.$touch();
      if (this.$v.$invalid) {

          this.$modal.show(
              Notify,
              {
                title: "SIN ÉXITO",
                type: "error",
                // porterrors: error.response.data.errors,
                message: 'Las contraseñas no coinciden, por favor introduzca la misma contraseña en las dos casillas.'
              },
              {
                width: 380,
                height: "auto"
              }
            );

      } else {

        (async () => {
          // We recommend to call `load` at application startup.
          const fp = await FingerprintJS.load();

          // The FingerprintJS agent is ready.
          // Get a visitor identifier when you'd like to.
          const result = await fp.get();

          // This is the visitor identifier:
          const visitorId = result.visitorId;
          axios
          .post("/email/register", {
            password: this.password,
            email: this.email,
            visitorId: result.visitorId,
            screenResolution: result.components.availableScreenResolution.value,
            fonts: result.components.fonts.value,
            languages: result.components.languages.value,
            platform: result.components.platform.value,
            timezone: result.components.timezone.value
          })
          .then(response => {
            window.location.href = "/policy";
          })
          .catch(error => {
            if (error.response.status == 422) {
              this.$modal.show(
                Notify,
                {
                  title: "Algo no exitoso",
                  type: "error",
                  porterrors: error.response.data.errors
                },
                {
                  width: 380,
                  height: "auto"
                }
              );
            }
          });
          console.log(result);
        })();
      }
    },
    // checkpolicy() {
    //   axios
    //     .post("/email/register", {
    //       password: this.password,
    //       userid: this.user.id
    //     })
    //     .then(response => {
    //       window.location.href = "/";
    //     })
    //     .catch(error => {
    //       if (error.response.status == 422) {
    //         this.$modal.show(
    //           Notify,
    //           {
    //             title: "Что-то не успешное",
    //             type: "error",
    //             porterrors: error.response.data.errors
    //           },
    //           {
    //             width: 380,
    //             height: "auto"
    //           }
    //         );
    //       }
    //     });
    // }
  }
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
