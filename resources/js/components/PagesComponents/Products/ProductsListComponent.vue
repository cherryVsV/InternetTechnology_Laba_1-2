<template>
    <div class="catalog__main wrapper">
        <form class="catalog__sort" method="post" autocomplete="on">
            <div id="catalog-sort" class="catalog__sort-wrap modal">
                <div class="modal-wrap">
                    <div class="catalog__sort-left">
                        <span class="catalog__sort-title">Сортировать:</span>
                        <div class="catalog__sort-item">
                            <div class="catalog__sort-price">
                                <input id="price-high" class="visually-hidden" type="radio"
                                       value="price-high" name="sort">
                                <input id="price-low" class="visually-hidden" type="radio"
                                       value="price-low"
                                       name="sort">
                                <label class="arrow arrow--up catalog__sort-price-high"
                                       for="price-high">По
                                    цене</label>
                                <label class="arrow arrow--down" for="price-low" @click="sortByPrice">По цене</label>
                            </div>
                        </div>
                        <div class="catalog__sort-item">
                            <input id="sort-popular" class="visually-hidden" type="radio"
                                   value="popular"
                                   name="sort">
                            <label for="sort-popular">По популярности</label>
                        </div>
                        <div class="catalog__sort-item">
                            <input id="sort-new" class="visually-hidden" type="radio" value="new"
                                   name="sort">
                            <label for="sort-new" @click="sortByNew">По новизне</label>
                        </div>
                        <div class="catalog__sort-item">
                            <input id="sort-discount" class="visually-hidden" type="radio"
                                   value="discount"
                                   name="sort">
                            <label for="sort-discount" @click="sortByDiscount">По размеру скидки</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__sort-right">
                <label class="catalog__sort-video sort-fieldset-checkbox">
                    <input class="visually-hidden filter-input" type="checkbox" name="only-video"
                           value="Есть видеообзор">
                    <span class="custom-checkbox"></span>
                    <span>Есть видеообзор</span>
                    <svg width="20" height="16">
                        <use href="#icon-youtube"></use>
                    </svg>
                </label>
                <div class="sort-view">
                    <button class="btn-view" type="button" data-value="view-column">
                        <svg width="26" height="22">
                            <use href="#icon-view-column"></use>
                        </svg>
                    </button>
                    <button class="btn-view active" type="button" data-value="view-row">
                        <svg width="26" height="22">
                            <use href="#icon-view-row"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
        <div class="catalog__current-filter-wrap">
            <div class="current-filter-container">
                <button class="catalog__reset-all" type="button" @click="clear">Сбросить все</button>
            </div>
        </div>
        <div class="product-card-list" :key="JSON.stringify(trigger)">
            <div :data-vendor-code="product.id" class="product-card" v-for="product in paginatedData">
                <ProductItemComponent :product="product"></ProductItemComponent>
        </div>

        <div v-if="size<filteredProducts.length" class="catalog__card-counter">
            Вы посмотрели <span>{{size}}</span> из <span>{{filteredProducts.length}}</span> товаров
        </div>
        <div v-if="size>filteredProducts.length" class="catalog__card-counter">
            Вы посмотрели <span>{{filteredProducts.length}}</span> из <span>{{filteredProducts.length}}</span> товаров
        </div>
        <button class="catalog__more btn btn-purple" type="button" @click="increaseSize"
        :disabled="size>filteredProducts.length">Показать еще</button>
    </div>
    </div>
</template>

<script>

import ProductItemComponent from "./ProductItemComponent";
import {eventBus} from "../../../app";

export default {
    name: "ProductsListComponent",
    components: {ProductItemComponent},
    props: {
        products: {
            required: true
        }
    },
    data() {
        return {
            min: 0,
            max: 0,
            discount: false,
            amount: false,
            trigger: 0,
            param: 0,
            subcategory: 0,
            sort: '',
            pageNumber: 0,
            size: 12
        }
    },

    created() {
        eventBus.$on('priceFilter', this.getPriceFilter)
        eventBus.$on('discountFilter', this.getDiscountFilter)
        eventBus.$on('amountFilter', this.getAmountFilter)
        eventBus.$on('paramFilter', this.getParamFilter)
        eventBus.$on('subcategoryFilter', this.getSubcategoryFilter)
    },
    methods: {
        getPriceFilter(prices) {
            this.min = prices[0]
            this.max = prices[1]
        },
        getDiscountFilter(isDiscount) {
            this.discount = isDiscount
        },
        getAmountFilter(isAmount) {
            this.amount = isAmount
        },
        getParamFilter(param){
            this.param = param
        },
        getSubcategoryFilter( subcategory){
            this.subcategory = subcategory
        },
        clear(){
            this.subcategory = 0
            this.param = 0
            this.discount = false
            this.amount = false
            this.sort = ''
            this.min = 0
            this.max = 0
            this.trigger+=1
        },
        sortByPrice(){
            this.sort = 'price'
        },
        sortByNew(){
            this.sort = 'new'
        },
        sortByDiscount(){
            this.sort = 'discount'
        },
        increaseSize(){
            this.size+=this.size
        },


    },

    computed: {
        filteredProducts: function () {
            var vm = this;
            vm.trigger += 1;
            let filtered =  this.products
                .filter(function (product) {
                    return vm.discount === false || product.previous_price > 0;
                })
                .filter(function (product) {
                    return vm.amount === false || product.status_id === 1;
                })
                .filter(function (product) {
                    return vm.param === 0 || product.filters.filter(function(val){
                        return val.id === vm.param
                    })
                })
                .filter(function (product) {
                    return vm.subcategory === 0 || product.subcategory_id === vm.subcategory;
                });
            if(this.sort === 'price'){
                filtered.sort(function(a, b){
                    if(a.new_price< b.new_price){
                        return -1
                    }
                    if(a.new_price>b.new_price){
                        return 1
                    }
                    return 0
                })
            }
            if(this.sort === 'new'){
                filtered.sort(function(a, b){
                    if(a.created_at< b.created_at){
                        return 1
                    }
                    if(a.created_at>b.created_at){
                        return -1
                    }
                    return 0
                })
            }
            if(this.sort === 'discount'){
                filtered.sort(function(a, b){
                    if((a.previous_price - a.new_price)< (b.previous_price - b.new_price)){
                        return 1
                    }
                    if((a.previous_price - a.new_price)> (b.previous_price - b.new_price)){
                        return -1
                    }
                    return 0
                })
            }
            return filtered

        },
        paginatedData() {
            const start = this.pageNumber * this.size,
                end = start + this.size;
            if(this.filteredProducts.length>this.size) {
                return this.filteredProducts.slice(start, end);
            }
            return this.filteredProducts
        },
        pageCount(){
            let l = this.filteredProducts.length,
                s = this.size;
            return Math.ceil(l/s);
        },
    }


}
</script>

<style scoped>

</style>
