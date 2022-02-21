<template>
  <div>
    <modal @before-close="redirectToPostsPage" width="380" height="auto" name="payerror">
      <div class="appmodal">
        <div class="modal-container">
          <div class="modal-header modal-header-notify">
            <img src="/img/delete.svg" alt="icon" class="handleimg" />
            <h3>Pago cancelado</h3>
          </div>
        </div>
        <div class="faux-borders" style="width: 70%;"></div>
        <div class="modal-container">
          <div class="modal-body">
            <div class="notify-area">
              <p>Pago cancelado, vuelve a intentar otra vez.</p>
              <button
                class="btn btn-regular btn_green-hover btn-width-set"
                @click="redirectToPostsPage"
              >
                <div>
                  <span>Confirmar</span>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </modal>
    <modal @before-close="redirectToPostsPage" width="380" height="auto" name="paysuccess">
      <div class="appmodal">
        <div class="modal-container">
          <div class="modal-header modal-header-notify">
            <img src="/img/checked.svg" alt="icon" class="handleimg" />
            <h3>¡PAGO REALIZADO CON ÉXITO!</h3>
          </div>
        </div>
        <div class="faux-borders" style="width: 70%;"></div>
        <div class="modal-container">
          <div class="modal-body">
            <div class="notify-area">
              <!--p>Su operación de pago ha sido completada.</p-->
              <p>Gracias por comprar una tarifa. Estamos verificando tu anuncio, una vez aprobado se empezará a publicarse en todos los portales.</p>
              <button class="btn btn-regular btn-green btn-width-set" @click="redirectToPostsPage">
                <div>
                  <span>Confirmar</span>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </modal>
  </div>
</template>

<script>
import Notify from "./Notify";
export default {
  props: ["success"],
  mounted() {
    if (this.success == "true") {
      this.$modal.show("paysuccess");
      console.log(123);
    } else {
      this.$modal.show("payerror");
    }
  },
  methods: {
    redirectToTariffPage() {
      window.location.href = "/tariff";
    },
    redirectToPostsPage() {
      window.location.href = "/posts";
    }
  },
  created() {}
};
</script>

<style lang="scss" scoped>
.modal-header-notify {
  justify-content: flex-start;
}
.handleimg {
  margin-right: 20px;
}
.notify-area {
  text-align: center;
  margin: 0 auto;
  p {
    padding-bottom: 6px;
  }
  button {
    margin: 30px auto 0px;
  }
}


</style>
