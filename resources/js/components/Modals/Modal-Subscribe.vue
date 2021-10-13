<template>
    <div id="subscribe" class="modal subscribe modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Узнать о поступлении</h3>
                </div>
                <div class="modal-main">
                    <form class="form form--subscribe" method="post" autocomplete="on">
                        <p>Оставьте почту и мы сообщим, когда товар появится в наличии</p>
                        <label class="form__field-wrap">
                            Электронная почта
                            <input v-model="user.email" type="text" name="email" placeholder="Введите адрес электронной почты"
                                   data-validate="email"
                                   required>
                        </label>
                        <label class="form__checkbox-wrap">
                            <input class="visually-hidden" type="checkbox" name="agreement" data-validate required>
                            <span class="checkbox-item"></span>
                            <span>Мы не передаем ваши данные 3-им лицам. Нажимая кнопку вы даете согласие на обработку персональных
                  данных и соглашаетесь с <a class="privacy-policy-link link" href="#!" data-tab="policy"
                                             data-modal-open="help">политикой конфиденциальности.</a></span>
                        </label>
                        <button class="form__submit btn btn-purple form__btn-register" type="submit" @click="addSubscription()">Подписаться
                        </button>
                    </form>
                    <button class="modal-close-mobile" type="button" data-modal-close="subscribe">Вернуться назад
                    </button>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть" data-modal-close="subscribe"></button>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "vform";

export default {
    name: "Modal-Subscribe",
    props:{
      product:{
          required: true
      }
    },
    data() {
        return {
            user: new Form({
                'id': 0,
                'email': '',
                'product': 0
            })
        }
    },
    methods: {
        getUser() {
            try {
                axios.get('/auth/user').then((response) => {
                    if(response.data.user!==null) {
                        this.user.id = response.data.user.id
                        this.user.email = response.data.user.email
                    }
                    this.user.product = this.product.id
                })
            }
            catch(e){}
        },
        addSubscription(){
             this.user.post('api/add/subscription')
             this.$store.commit('addToSubscriptionUnique', this.product);
        }
    },
    mounted() {
        this.getUser()
    }
}
</script>

<style scoped>

</style>
