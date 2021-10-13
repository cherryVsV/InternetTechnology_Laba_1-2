<template>
    <fragment>
        <div class="cart-products__img">
            <img :src="JSON.parse(cart_data.images).main" width="55" height="65" alt="айфон 8">
        </div>
        <div class="cart-products__name">
            <p>{{ cart_data.title }}</p>
            <small>Арт. {{ cart_data.article }}</small>
        </div>
        <div class="cart-products__count">
            <div class="order-element-count" :key="cart_data.quantity">
                <button class="order-element__btn" @click="totalDecrease" type="button">-
                </button>
                <span class="order-element__total" >{{cart_data.quantity }}</span>
                <button class="order-element__btn" @click="totalIncrease" type="button">+
                </button>
            </div>
        </div>
        <div class="cart-products__action">
            <label class="cart-products__favorite-btn">
                <input class="visually-hidden" type="checkbox" name="favorite"
                @change="addToFavourite" v-model="isFavourite">
                <svg width="24" height="24">
                    <use href="#icon-favorite"></use>
                </svg>
            </label>
            <button class="cart-products__remove-btn" type="button" @click.prevent="removeItem">
                <svg width="24" height="24">
                    <use href="#icon-delete"></use>
                </svg>
            </button>
        </div>
        <div class="cart-products__price">
            <span class="cart-products__new-price">{{ cart_data.totalPrice }} ₽</span>
            <s v-if="cart_data.previous_price>0" class="cart-products__old-price">{{ cart_data.totalOldPrice }} ₽</s>
        </div>
    </fragment>
</template>

<script>
export default {
    name: "CartItemComponent",
    props: {
        cart_data: {}
    },

    methods: {
        totalDecrease() {
            this.$store.commit('removeItemFromCart', this.cart_data);
            axios.get('/update/cart/'+this.cart_data.id);
        },
        totalIncrease() {
            this.$store.commit('addToCart', this.cart_data);
            axios.get('/add/cart/'+this.cart_data.id);
        },
        addToFavourite(){
            this.$store.commit('addToFavourite', this.cart_data);
        },
        removeItem(){
            this.$store.commit('removeFromCart', this.cart_data);
            axios.post('/delete/cart/', {'id':this.cart_data.id});
        }
    },
    computed:{
        isFavourite(){
            return this.$store.getters.getIsFavourite(this.cart_data);
        }
    }

}
</script>

<style scoped>

</style>
