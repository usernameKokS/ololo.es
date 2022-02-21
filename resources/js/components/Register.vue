<template>
  <div class="appmodal register-modal">
    <div class="modal-container">
      <div class="modal-header modal-header-repadding input-focus">
        <h3>panel de control 1</h3>
        <img src="/img/closemodal.svg" alt="modal" @click="$emit('close')" />
      </div>
    </div>
    <div class="faux-borders"></div>
    <div class="appmodal">
      <div class="modal-container">
        <div class="modal-body">
          <div class="register">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="login-area">
                  <div class="header-box">
                    <img src="/img/key.svg" alt="key" />
                    <h5>ENVIAR EMAIL</h5>
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
                      <span @click="forgotPass" class="forget-password">¿Has olvidado tu contraseña?</span>
                    </div>
                    <button type="submit" class="btn btn-regular btn-green non-fixed-btn8">
                      <div>
                        <span>Entrar en mi panel</span>
                      </div>
                    </button>
                  </form>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <form class="register-email" @submit.prevent="newregister">
                  <div class="header-box">
                    <img src="/img/add.svg" alt="add" />
                    <h5>ENVIAR EMAIL</h5>
                  </div>
                  <p>Debes indicarnos un email y te enviaremos un enlace para validarlo. Este email no será público? sólo se usará para gestionar tus anuncious.</p>
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
                        Согласен с
                        <a
                          class="open-policy"
                          href="/download/policy.pdf"
                          target="_blank"
                        >условиями и политикой</a>
                      </label>
                    </div>
                  </div>
                  <button
                    type="submit"
                    title="espalda"
                    class="btn btn-regular btn-pink btn-pink-width non-fixed-btn8"
                  >
                    <div>
                      <span>Enviar email</span>
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
</template>

<script>
import Notify from "./Notify";
import Sendemail from "./Sendemail";

export default {
  props: ["remember"],
  data() {
    return {
      policy: true,
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
            title: "Algo no exitoso",
            type: "error",
            // porterrors: 'Подтвердите политику'
            message: "Подтвердите политику"
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
  created() {
    document.body.style.overflow = "hidden";
    // document.documentElement.style.overflow = "hidden";
    document.body.style.position = "fixed";
  },
  beforeDestroy() {
    document.body.style.overflow = "auto";
    // document.documentElement.style.overflow = "auto";
    document.body.style.position = "relative";
  }
};
</script>

<style scoped lang="scss">
.forget-password {
  text-decoration: underline;
  cursor: pointer;
  margin-left: 10px;
}
</style>
