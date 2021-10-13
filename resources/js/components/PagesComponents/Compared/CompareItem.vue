<template>
    <div class="product-card-wrap" :key="trigger">
        <div :data-vendor-code="compare.id"
             class="product-card product-card--full product-card--sm-icon">
            <div class="product-card__bonuses">
                <div class="bonus-icon priority-4">
                    <img src="img/content/icon/delivery.svg" width="70" height="70"
                         alt="бонус">
                </div>
                <div class="bonus-icon priority-3">
                    <img src="img/content/icon/black-friday.svg" width="70"
                         height="70"
                         alt="бонус">
                </div>
                <div v-if="!compare.previous_price>0" class="bonus-icon priority-0">
                    <img src="img/content/icon/best-seller.svg" width="70" height="70"
                         alt="бонус">
                </div>
                <div v-if="compare.previous_price>0" class="bonus-icon priority-2">
                    <span class="bonus-discount">-{{getDiscountProcent()}}%</span>
                </div>
            </div>
            <div class="product-card__icons">
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

                <button class="product-card__icon icon-type-delete" type="button"
                        aria-label="удалить" @click="deleteItem">
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
                            :srcset="JSON.parse(compare.images).main+ ' 1x, ' + JSON.parse(compare.images).main + ' 2x'">
                    <img class=content-img :src="JSON.parse(compare.images).main"
                         :srcset="JSON.parse(compare.images).main + ' 2x'"
                         width="179"
                         height="108" alt="Apple watch" loading=lazy decoding=async>
                </picture>
            </div>
            <div class="product-card__info">
                <small class="product-card__name">{{compare.category}}</small>
                <p class="product-card-desc">{{compare.title}}</p>
                <s v-if="compare.previous_price>0" class="product-card__old-price">{{compare.previous_price}}₽</s>
                <b class="product-card__price">{{compare.new_price}}₽</b>
                <div class="product-card__buy-wrap">
                    <button class="btn btn-purple compare__buy add-to-cart"
                            type="button" @click="addToCart"><span
                        class="counter counter--red" :data-count="getCount">В корзину</span></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CompareItem",
    props:{
        compare:{
            required: true
        }
    },
    data(){
        return{
            trigger: 0
        }
    },
    methods:{
        addToFavourite() {
            this.$store.commit('addToFavourite', this.compare);
            this.trigger+=1;
        },
        deleteItem() {
            this.$store.commit('addToCompare', this.compare);
        },
        addToCart() {
            this.$store.commit('addToCart', this.compare);
            axios.get('/add/cart/'+this.compare.id);
            this.trigger+=1;
        },
        getDiscountProcent(){
            return Math.round(((this.compare.previous_price - this.compare.new_price)/this.compare.previous_price)*100)
        }
    },
    computed:{
        getCount(){
            try{
                return this.$store.getters.getQuantityById(this.compare.id);
            }
            catch (e){
                return 0
            }
        },
        isFavourite(){
            return this.$store.getters.getIsFavourite(this.compare);
        }
    }
}
</script>

<style scoped>

</style>
