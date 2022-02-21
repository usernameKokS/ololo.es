<template>
  <div>
    <modal name="policy" width="90%" :max-width="810" :adaptive="true" height="auto" :clickToClose="false">
      <div class="appmodal modal-pol">
        <div class="modal-container">
          <div class="modal-header modal-header-notify">
            <h3>CONDICIONES DE USO Y POLITICA DE PRIVACIDAD</h3>
            <img src="/img/closemodal.svg" alt="modal" />
          </div>
        </div>
        <div class="faux-borders" style="width: 90%; max-width: 333px;"></div>
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
                  >Acepto recibir comunicados comerciales y boletines de Almejarosa.es</label>
                </div>
              </div>
			  <div v-if="policyError" class="policyError">Para continuar hay que aceptar las condiciones de uso y política de privacidad.</div>
              <button
                type="submit"
                class="btn btn-regular btn-green btn-oversize non-fixed-btn11"
                style="border: 0;"
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

import {
  required,
  sameAs,
  minLength,
  maxLength
} from "vuelidate/lib/validators";

export default {
  props: ["user"],
  data() {
    return {
      policy: false,
      com: false,
      submitStatus: null,
	  policyError: false
    };
  },
  mounted() {
    this.$modal.show("policy");
  },
  created() {},
  methods: {
    redirectToMainPage() {
      window.location.href = "/";
    },
    checkpolicy() {
		this.policyError = false;
		if(
			!this.policy
		)
		{
			this.policyError=true;
			return false;
		}
      axios
        .post("/email/sendpolicy", {
          policy: this.policy
        })
        .then(response => {
          window.location.href = "/personal";
        })
        .catch(error => {
          if (error.response.status == 422) {
            this.$modal.show(
              Notify,
              {
                title: "Algo no exitoso",
                type: "error",
                // porterrors: error.response.data.errors,
                message: "Confirmar política"
              },
              {
                width: 380,
                height: "auto"
              }
            );
          }
        });
    }
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
.policyError
{
	color: red;
    margin-bottom: 25px;
    text-align: center;
}
.btn-green {
  width: 180px;
}
</style>
