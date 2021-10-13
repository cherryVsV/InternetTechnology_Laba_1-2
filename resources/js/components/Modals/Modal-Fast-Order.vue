<template>
    <div id="fast-order" class="modal modal-from-right" aria-hidden="true">
        <div class="modal-wrap  submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Быстрый заказ</h3>
                </div>
                <div class="modal-main">
                    <div class="order-element order-element--fast"></div>
                    <form class="form form--fast-order" method="post" autocomplete="on">
                        <label class="form__field-wrap">
                            Ваше имя*
                            <input type="text" placeholder="Введите ваше имя" name="user-name" v-model="user.name" data-validate required>
                        </label>
                        <label class="form__field-wrap">
                            Номер телефона*
                            <input type="text" name="phone" placeholder="Введите номер телефона" v-model="user.phone" data-validate="phone"
                                   required>
                        </label>
                        <label class="form__checkbox-wrap">
                            <input class="visually-hidden" type="checkbox" name="agreement" data-validate required>
                            <span class="checkbox-item"></span>
                            <span>Нажимая кнопку вы даете согласие на обработку персональных данных и соглашаетесь с <a
                                class="privacy-policy-link link" href="#!" data-tab="policy" data-modal-open="help">политикой
                    конфиденциальности.</a></span>
                        </label>
                        <button class="form__submit btn btn-purple" type="submit" @click="makeOrder()">Заказать</button>
                        <a class="form__link modal-close-mobile" href="#!" data-modal-close="fast-order">Вернуться
                            назад</a>
                    </form>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть" data-modal-close="fast-order"></button>
            </div>
        </div>
    </div>

</template>

<script>
import Form from "vform";

export default {
    name: "Modal-Fast-Order",
    props:{
        product:{
            required: true
        }
    },
    data() {
        return {
            user: new Form({
                'id': 0,
                'phone': '',
                'name': '',
                'product': 0,
                'count': 1,
                'price': 0
            }),
        }
    },
    methods: {
        getUser() {
            try {
                axios.get('/auth/user').then((response) => {
                    if(response.data.user!==null) {
                        this.user.id = response.data.user.id
                        this.user.phone = response.data.user.phone
                        this.user.name = response.data.user.name
                    }
                })
            }
            catch(e){}
        },
        makeOrder(){
            this.user.product = this.product.id
            this.user.price = this.product['new_price']
            this.user.post('api/fast/order')
        },
    },
    mounted() {
        this.getUser()
    }
}
</script>

<style scoped>

</style>
