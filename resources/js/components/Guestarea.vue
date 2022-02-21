<template>
  <div class="modal-register">
    <div class="appmodal register-modal">
      <div class="modal-container">
        <div class="modal-header modal-header-repadding input-focus">
          <h3>panel de control</h3>
        </div>
      </div>
      <div class="faux-borders"></div>
      <div class="appmodal">
        <div class="modal-container">
          <div class="modal-body">
            <div class="register">
              <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="login-area" v-if="loginArea">
                    <div class="header-box">
                      <img src="/img/key.svg" alt="key" />
                      <h5>ENTRAR</h5>
                    </div>
                    <form class="register-form-area" @submit.prevent="newlogin">
                      <div class="input-wrapers">
                        <input
                          type="email"
                          class="input"
                          :class="loginerrors.email ? ' input-error' : ''"
                          placeholder="E-mail"
                          v-model="login.email"
                          @focus="focusInput"
                          autocomplete="on"
                        />
                      </div>
                      <div class="input-wrapers last-input">
                        <input
                          type="password"
                          class="input"
                          :class="loginerrors.password ? ' input-error' : ''"
                          placeholder="Contraseña"
                          v-model="login.password"
                          @focus="loginerrors.password = ''"
                        />
                      </div>
                      <div class="remeber-area remeber-areame">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            id="rememberme"
                            class="custom-control-input"
                            v-model="login.remember_me"
                          />
                          <label for="rememberme" class="custom-control-label">Recuérdame</label>
                        </div>
                        <span @click="toRestore" class="forget-password">¿Has olvidado tu contraseña?</span>
                      </div>
                      <button type="submit" class="btn btn-regular btn-green non-fixed-btn8">
                        <div>
                          <span>Entrar en mi panel</span>
                        </div>
                      </button>
                    </form>
                  </div>
                  <div class="restore-area" v-else>
                    <div class="header-box">
                      <img src="/img/key.svg" alt="key" />
                      <h5>¿Has olvidado tu contraseña?</h5>
                    </div>
                    <form class="register-form-area" @submit.prevent="forgotPass">
                      <div class="input-wrapers">
                        <input
                          type="email"
                          class="input"
                          :class="loginerrors.email ? ' input-error' : ''"
                          placeholder="E-mail"
                          v-model="login.email"
                          @focus="focusInput"
                          autocomplete="on"
                        />
                      </div>
                      <div class="remeber-area remeber-areame restore">
                        <span @click="toAuth" class="forget-password">Entrar en mi panel</span>
                      </div>
                      <button type="submit" class="btn btn-regular btn-green non-fixed-btn8 w-285">
                        <div>
                          <span>Solicitar nueva contraseña</span>
                        </div>
                      </button>
                    </form>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <form class="register-email" @submit.prevent="newregister">
                    <div class="header-box">
                      <img src="/img/add.svg" alt="add" />
                      <h5>Quiero registrarme</h5>
                    </div>
                    <p>Debes indicarnos un email y te enviaremos un enlace para validarlo. Este email no será público, sólo se usará para gestionar tus anuncios.</p>
                    <div class="input-wrapers">
                      <input
                        type="email"
                        class="input"
                        placeholder="E-mail"
                        v-model="register.email"
                        :class="emailerrors.email ? ' input-error' : ''"
                        @focus="emailerrors.email = ''"
                        autocomplete="on"
                      />
                    </div>
                    <div class="remeber-area">
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          id="policy"
                          class="custom-control-input"
                          v-model="policy"
                        />
                        <label for="policy" class="custom-control-label">
                            Acepto las
                            <a href="/page/policy" class="open-policy" target="_blank">Condiciones de Uso</a> y
                            <a href="/page/policy" class="open-policy" target="_blank">Política de Privacidad.</a>
                        </label>
                      </div>
                    </div>
                    <button
                      type="submit"
                      title="espalda"
                      class="btn btn-regular btn-pink btn-pink-width non-fixed-btn8"
                    >
                      <div>
                        <span>ENVIAR EMAIL</span>
                      </div>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Notify from "./Notify";
import Sendemail from "./Sendemail";

export default {
  props: ["remember"],
  data() {
    return {
      policy: true,
      loginArea: true,
      login: {
        name: "",
        password: "",
        remember: this.remember
      },
      register: {
        email: ""
      },
      loginerrors: {
        email: "",
        password: ""
      },
      emailerrors: {
        email: ""
      }
    };
  },
  mounted() {

  },
  methods: {
    toRestore(){
      this.loginArea = false;
    },
    toAuth(){
      this.loginArea = true;
    },
    focusInput() {
      this.loginerrors.email = "";
    },
    forgotPass() {
      axios
        .post("/email/forgot", {
          email: this.login.email
        })
        .then(response => {
          this.$modal.show(
            Sendemail,
            {},
            {
              width: "90%",
              maxWidth: 410,
              height: "auto"
            }
          );
        })
        .catch(error => {
          if (error.response.status == 422) {
            this.loginerrors = error.response.data.errors;
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
    },
    newlogin() {
      axios
        .post("/login", this.login)
        .then(response => {
          window.location.replace("/personal");
        })
        .catch(error => {
          if (error.response.status == 422) {
            this.loginerrors = error.response.data.errors;
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
    },
    newregister() {
      if (this.policy == false) {
        this.$modal.show(
          Notify,
          {
            title: "ERROR",
            type: "error",
            // porterrors: 'Подтвердите политику'
            message: "Falta confirmar la política de privacidad."
          },
          {
            width: 380,
            height: "auto"
          }
        );
        return;
      }
      axios
        .post("/email/store", this.register)
        .then(response => {
          /*this.$modal.show(
            Sendemail,
            {},
            {
              width: "90%",
              maxWidth: 410,
              height: "auto"
            }
          );*/
		  
		  location.href = response.data.token;
        })
        .catch(error => {
          if (error.response.status == 422) {
            this.emailerrors = error.response.data.errors;
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
    }
  },
};
</script>

<style scoped lang="scss">
.forget-password {
  text-decoration: underline;
  cursor: pointer;
  margin-left: 10px;
}

.register .remeber-area.restore
{
  padding: 0px 0 20px 130px;
}

.register .non-fixed-btn8.w-285
{
  width:285px;
}

</style>
