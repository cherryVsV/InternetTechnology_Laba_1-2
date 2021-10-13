<template>
    <div :data-vendor-code="favourite.id" class="product-card product-card--sm-icon" :key="trigger">
        <div class="product-card__bonuses">
            <div class="bonus-icon priority-4">
                <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
            </div>
            <div class="bonus-icon priority-3">
                <img src="img/content/icon/black-friday.svg" width="70" height="70" alt="бонус">
            </div>
            <div v-if="!favourite.previous_price>0" class="bonus-icon priority-0">
                <img src="img/content/icon/best-seller.svg" width="70" height="70"
                     alt="бонус">
            </div>
            <div v-if="favourite.previous_price>0" class="bonus-icon priority-2">
                <span class="bonus-discount">-{{getDiscountProcent()}}%</span>
            </div>
        </div>
        <div class="product-card__icons">
            <button v-if="isCompared" class="product-card__icon icon-type-equal checked" type="button" aria-label="добавить к сравнению"
                    @click="addToCompare()">
                <svg width="16" height="16">
                    <use href="#icon-equal"></use>
                </svg>
                <span></span>
            </button>
            <button v-if="!isCompared" class="product-card__icon icon-type-equal" type="button" aria-label="добавить к сравнению"
                    @click="addToCompare()">
                <svg width="16" height="16">
                    <use href="#icon-equal"></use>
                </svg>
                <span></span>
            </button>
            <button class="product-card__icon icon-type-delete" type="button" aria-label="удалить"
                    @click="deleteFavourite()">
                <svg width="16" height="16">
                    <use href="#icon-delete"></use>
                </svg>
                <span></span>
            </button>
        </div>
        <div class="product-card__img fast-order-img">
            <picture>
                <!-- 1x-179px/108px 2x-358px/216px -->
                <source type="image/webp"
                        :srcset="JSON.parse(favourite.images).main+ ' 1x, ' + JSON.parse(favourite.images).main + ' 2x'">
                <img class=content-img :src="JSON.parse(favourite.images).main"
                     :srcset="JSON.parse(favourite.images).main + ' 2x'" width="179"
                     height="108" alt="Apple watch" loading=lazy decoding=async>
            </picture>
        </div>
        <div class="product-card__info">
            <small class="product-card__name">{{favourite.category}}</small>
            <p class="product-card-desc">{{favourite.title}}</p>
            <s v-if="favourite.previous_price>0" class="product-card__old-price">{{favourite.previous_price}}₽</s>
            <span class="product-card__price">{{favourite.new_price}}₽</span>
            <div class="product-card__buy-wrap">
                <button class="btn btn-purple compare__buy add-to-cart" type="button"
                        @click="addToCart(favourite.id)"><span
                    class="counter counter--red" :data-count="getCount(favourite.id)">В корзину</span></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FavouriteItem",
    props:{
        favourite:{},

    },
    data(){
        return{
            trigger: 100
        }
    },
    methods:{
        deleteFavourite(){
            this.$store.commit('addToFavourite', this.favourite);
        },
        addToCompare(){
            this.$store.commit('addToCompare', this.favourite);
            this.trigger+=1;
        },
        getCount(id){
            try{
                return this.$store.getters.getQuantityById(id);
            }
            catch (e){
                return 0
            }
        },
        addToCart(id){
            this.$store.commit('addToCart', this.favourite);
            axios.get('/add/cart/'+id);
            this.trigger+=1;
        },
        getDiscountProcent(){
            return Math.round(((this.favourite.previous_price - this.favourite.new_price)/this.favourite.previous_price)*100)
        }
    },
    computed:{
        isCompared(){
            return this.$store.getters.getIsCompared(this.favourite);
        }
    }
}
</script>

<style scoped>

</style>
