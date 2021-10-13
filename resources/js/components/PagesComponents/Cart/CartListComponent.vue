<template>
    <section class="cart">
        <h1 class="cart__title cart__title-product title wrapper">Корзина</h1>
        <div class="cart-products" >
            <div class="cart-products__preview">
                <div class="cart-products__list">
                    <div class="cart-products__caption">
                        <div class="cart-products__caption-item">
                            <span>товары</span>
                            <span>кол-во</span>
                        </div>
                        <button type="button" class="cart-products__clear-cart" @click="clearAll">
                            Очистить список
                            <svg width="24" height="24">
                                <use href="#icon-delete"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="cart-products__item wrapper" v-for="cart in $store.state.cart">
                        <CartItemComponent :cart_data="cart"/>
                    </div>

                </div>
            </div>
            <div class="cart-products__amount-wrap">
                <div class="cart-products__amount">
                    <div class="cart-products__amount-top wrapper">
                        <div class="cart-products__promo">
                            <button class="cart-products__promo-btn cart-products__promo-accept" type="button"
                                    data-toggle-text="Удалить">Применить
                            </button>
                            <label class="cart-products__promo-btn cart-products__has-promo">
                                <input class="" type="text" placeholder="Есть промокод?" name="promo">
                            </label>
                        </div>
                        <div class="cart-products__initial-price">
                            <span class="cart-products__amount-name">Товаров (<span>{{ $store.state.cartCount }}</span>) на сумму</span>
                            <span class="cart-products__amount-price">{{totalPrice + totalDiscount}}₽</span>
                        </div>
                    </div>
                    <div class="cart-products__amount-middle">Скидка<s>{{totalDiscount}}₽</s></div>
                    <div class="cart-products__amount-bottom wrapper">
                        <div class="cart-products__total-wrap">Итого<span
                            class="cart-products__total">{{ totalPrice }}₽</span></div>
                        <button class="cart-products__btn-order btn btn-purple" type="button" @click="makeOrder()">Перейти к оформлению
                        </button>
                        <p>Оформляя заказ вы подтверждаете свое согласие с нашими <a
                            class="link cart-products__condition"
                            href="#!" data-tab="offer" data-modal-open="help">условиями покупки</a> в
                            интернет-магазине</p>
                        <p>После осуществления заказа мы свяжемся с вами, чтобы уточнить все детали</p>
                        <p>*Итоговая стоимость заказа рассчитана без учета стоимости доставки, информацию о
                            стоимости доставки
                            предоставит менеджер при звонке</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import CartItemComponent from "./CartItemComponent";
export default {
    name: "CartListComponent",
    components: { CartItemComponent},

    computed:{
        totalPrice() {
            let total = 0;
            for (let item of this.$store.state.cart) {
                total += item.totalPrice;
            }
            return total;
        },
        totalDiscount(){
            let discount = 0;

            for (let item of this.$store.state.cart) {
                if(item.previous_price>item.new_price) {
                    discount += (item.previous_price - item.new_price) * item.quantity;
                }
            }
            return discount;
        }

    },

    methods:{
        clearAll(){
            axios.post('/delete/cart', {'id':0})
            this.$store.commit('clearCart');
        },
        makeOrder(){
            window.location.href = '/cart1'
        }
    }
}
</script>

<style scoped>

</style>
