<template>
    <div :data-vendor-code="product.id" class="product-card" :key="trigger">
        <div class="product-card__bonuses">
            <div class="bonus-icon priority-5">
                <img src="img/content/icon/gift.svg" width="70" height="70" alt="бонус">
            </div>
            <div class="bonus-icon priority-0">
                <img src="img/content/icon/new.svg" width="70" height="70" alt="бонус">
            </div>
            <div v-if="!product.previous_price>0" class="bonus-icon priority-0">
                <img src="img/content/icon/best-seller.svg" width="70" height="70"
                     alt="бонус">
            </div>
            <div v-if="product.previous_price>0" class="bonus-icon priority-2">
                <span class="bonus-discount">-{{getDiscountProcent()}}%</span>
            </div>

        </div>
        <div class="product-card__icons">
            <button v-if="isCompared" class="product-card__icon icon-type-equal checked" type="button"
                    aria-label="добавить к сравнению" @click="addToCompare">
                <svg width="16" height="16">
                    <use href="#icon-equal"></use>
                </svg>
                <span></span>
            </button>
            <button v-if="!isCompared" class="product-card__icon icon-type-equal" type="button"
                    aria-label="добавить к сравнению" @click="addToCompare">
                <svg width="16" height="16">
                    <use href="#icon-equal"></use>
                </svg>
                <span></span>
            </button>

            <button v-if="isFavourite" class="product-card__icon icon-type-favorite checked" type="button"
                    aria-label="добавить в избранное" @click="addToFavourite">
                <svg width="16" height="16">
                    <use href="#icon-favorite"></use>
                </svg>
                <span></span>
            </button>
            <button v-if="!isFavourite" class="product-card__icon icon-type-favorite" type="button"
                    aria-label="добавить в избранное" @click="addToFavourite">
                <svg width="16" height="16">
                    <use href="#icon-favorite"></use>
                </svg>
                <span></span>
            </button>
        </div>
        <div v-if="!JSON.parse(product.images).main.length>0" class="product-card__img fast-order-img"
             data-empty="Товар на фотосессии"></div>
        <div class="product-card__img fast-order-img" v-if="JSON.parse(product.images).main.length>0">
            <picture>
                <!-- 1x-179px/108px 2x-358px/216px -->
                <source type="image/webp"
                        :srcset="JSON.parse(product.images).main+ ' 1x, ' + JSON.parse(product.images).main + ' 2x'">
                <img class=content-img :src="JSON.parse(product.images).main"
                     :srcset="JSON.parse(product.images).main + ' 2x'" width="179"
                     height="108" alt="Apple watch" loading=lazy decoding=async>
            </picture>
        </div>
        <div class="product-card__info">
            <small class="product-card__name">{{product.category}}</small>
            <p class="product-card-desc">{{product.title}}</p>
            <s v-if="product.previous_price>0 && product.status_id===1" class="product-card__old-price">{{product.previous_price}}₽</s>
            <b v-if="product.status_id===1" class="product-card__price">{{product.new_price}}₽</b>
            <div class="product-card__buy-wrap" v-if="product.status_id!==1">
                <button v-if="!isSubscription" class="btn btn-white product-card__buy" type="button"
                        data-modal-open="subscribe" @click="subscribe">Подписаться
                </button>
                <button v-if="isSubscription" class="btn btn-purple product-card__buy" disabled="disabled" type="button" >Вы подписаны
                </button>
            </div>
            <div class="product-card__buy-wrap" v-if="product.status_id===1">
                <button class="btn btn-white product-card__buy" type="button"
                        data-modal-open="fast-order">Купить в
                    один клик
                </button>
                <button class="product-card__cart add-to-cart" type="button" @click="addToCart">
                      <span class="counter counter--red" :data-count="getCount">
                        <span>В корзину</span>
                      </span>
                    <svg width="32" height="32">
                        <use href="#icon-cart"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import {eventBus} from "../../../app";

export default {
    name: "SameProductItem",
    props:{
        product:{
            required: true
        }
    },
    data() {
        return {
            trigger: 0,
        }
    },
    methods: {
        addToCart() {
            this.$store.commit('addToCart', this.product);
            axios.get('/add/cart/' + this.product.id);
            this.trigger += 1;
        },
        addToFavourite() {
            this.$store.commit('addToFavourite', this.product);
            this.trigger += 1;
        },
        addToCompare() {
            this.$store.commit('addToCompare', this.product);
            this.trigger += 1;
        },
        subscribe(){
            eventBus.$emit('subscribeProduct', this.product)
            this.trigger += 1;
        },
        getDiscountProcent(){
            return Math.round(((this.product.previous_price - this.product.new_price)/this.product.previous_price)*100)
        }
    },
    computed: {
        getCount() {
            try {
                return this.$store.getters.getQuantityById(this.product.id);
            } catch (e) {
                return 0
            }
        },
        isFavourite() {
            return this.$store.getters.getIsFavourite(this.product);
        },
        isCompared() {
            return this.$store.getters.getIsCompared(this.product);
        },
        isSubscription() {
            return this.$store.getters.getIsSubscription(this.product);
        },
    }
}
</script>

<style scoped>

</style>
