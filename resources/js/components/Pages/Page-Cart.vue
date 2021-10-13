<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="cart" aria-current="location">Корзина</a>
                </div>
                <CartListComponent></CartListComponent>
                <section class="cart-products-slider product-type card-main__slider">
                    <div class="product-type__header">
                        <h2>С этим обычно покупают</h2>
                    </div>
                    <div class="product-card-container slider-container">
                        <div class="product-card-list swiper-wrapper">
                            <div class="product-card-wrap swiper-slide" v-for="product in products">
                                <SameProductItem :product="product"></SameProductItem>
                            </div>
                        </div>
                        <button class="btn-slider btn-slider--next arrow arrow--right" type="button"
                                aria-label="следующий слайд"></button>
                        <button class="btn-slider btn-slider--prev arrow arrow--left" type="button"
                                aria-label="предыдущий слайд"></button>
                    </div>
                </section>
            </main>
        </div>
        <footer-main></footer-main>
        <template id="template">
            <!-- На всех страницах -->
            <modal-login></modal-login>
            <modal-fast-order></modal-fast-order>
            <modal-register></modal-register>
            <modal-recover></modal-recover>
            <modal-recover-next></modal-recover-next>
            <modal-call></modal-call>
            <modal-location></modal-location>
            <modal-search-header></modal-search-header>
            <modal-success-order></modal-success-order>
            <modal-fail></modal-fail>
            <modal-error></modal-error>
            <modal-help></modal-help>
            <modal-subscribe v-if="id!==null" :product="id"></modal-subscribe>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>

import CartListComponent from "../PagesComponents/Cart/CartListComponent";
import ProductItemComponent from "../PagesComponents/Products/ProductItemComponent";
import SameProductItem from "../PagesComponents/Cart/SameProductItem";
import {eventBus} from "../../app";

export default {
    name: "Page-Cart",
    components: {SameProductItem, ProductItemComponent, CartListComponent},
    props: {
        auth_user: {
            default: null
        },
    },
    data(){
        return{
            products:[],
            id: null
        }
    },
    methods:{
        getProductsSimiliar(){
            let categories = [...new Set(this.$store.state.cart.map(item=>item.category))]
            axios.post('api/products/categories',{categories: categories}).then((response)=>{
                this.products = response.data.products
            })
        },
        getProductSubscribe(id){
            this.id = id
        }
    },
    created(){
        this.getProductsSimiliar()
        eventBus.$on('subscribeProduct', this.getProductSubscribe)
    }


}
</script>

<style scoped>

</style>
