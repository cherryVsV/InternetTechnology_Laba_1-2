<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="#" aria-current="location">Избранное</a>
                </div>
                <div class="compare favorite">
                    <div class="compare__head">
                        <h1 class="subtitle">Избранное<sup class="title-counter">{{ $store.state.favouriteCount }}</sup></h1>
                        <button class="compare__clear-list" type="button" @click="clearFavourite">Очистить список
                            <svg width="32" height="32">
                                <use href="#icon-delete"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="compare__category-slider slider-container">
                        <div class="compare__category swiper-wrapper">
                            <label class="compare__category-item swiper-slide" v-for="category in categories">
                                <input class="visually-hidden" type="radio" name="category" @click="sortByCategory(category)">
                                <span class="compare__category-type btn">
                {{category}}
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">{{countFavouriteByCategory(category)}}</sup>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="favorite__main">
                        <div class="favorite__options">
                            <fieldset class="sort-fieldset">
                                <legend>Наличие товаров</legend>
                                <label class="sort-fieldset-radio" @click="sortByAmount(0)">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Неважно</span>
                                </label>
                                <label class="sort-fieldset-radio" @click="sortByAmount(1)">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>В наличии</span>
                                </label>
                                <label class="sort-fieldset-radio" @click="sortByAmount(2)">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Нет в наличии</span>
                                </label>
                            </fieldset>
                            <fieldset class="sort-fieldset">
                                <legend>Сортировка</legend>
                                <label class="sort-fieldset-radio" @click="sortParam('new')">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Сначала новые</span>
                                </label>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>С высоким рейтингом</span>
                                </label>
                                <label class="sort-fieldset-radio" @click="sortParam('price')">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>По цене</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="favorite__cards" :key="trigger">
                            <div class="product-card-wrap" v-for="favourite in sortFavourites">
                                <FavouriteItem :favourite="favourite"></FavouriteItem>
                            </div>

                        </div>
                    </div>
                </div>
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
            <modal-subscribe></modal-subscribe>
            <modal-help></modal-help>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
import FavouriteItem from "../PagesComponents/Favourite/FavouriteItem";
export default {
    name: "Page-Favorite",
    components: {FavouriteItem},
    props:{
        auth_user:{
            default: null
        }
    },
    data(){
        return{
            trigger:0,
            cat: '',
            amount: 0,
            sort: '',
        }
    },
    methods:{

        clearFavourite(){
            this.$store.commit('clearFavourite');
        },
        countFavouriteByCategory(category){
            return this.$store.state.favourite.filter(f=>f.category===category).length
        },

        sortByCategory(category){
            this.cat = category
        },
        sortByAmount(number){
            this.amount = number
        },
        sortParam(param){
            this.sort = param
        }
    },
    computed:{
        categories(){
            return [...new Set(this.$store.state.favourite.map(f=>f.category))]
        },
        sortFavourites(){
            var vm = this;
            vm.trigger += 1;
            let filtered =  this.$store.state.favourite
                .filter(function (product) {
                    return vm.cat === '' || product.category === vm.cat;
                })
                .filter(function (product) {
                    return vm.amount !== 1 || product.status_id === vm.amount;
                })
                .filter(function (product) {
                    return vm.amount !== 2 || product.status_id === vm.amount;
                })
                .filter(function (product) {
                    return vm.amount !== 0 || product;
                })
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
            return filtered;
        },

    }
}
</script>

<style scoped>

</style>
