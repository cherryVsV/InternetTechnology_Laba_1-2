<template>
    <header class="header">
        <div class="header__inner">
            <button class="header__toggle" type="button" aria-label="открыть меню" aria-controls="burger-menu"
                    aria-expanded="false" data-modal-open="burger-menu">
                <span class="header__menu-icon"></span>
            </button>
            <a class="logo logo--small" href="index" aria-label="логотип">
                <svg width="60" height="24">
                    <use href="#icon-logo"></use>
                </svg>
            </a>
            <div id="burger-menu" class="header__burger-menu parent">
                <div class="menu-head">
                    <strong class="menu-title">Меню</strong>
                </div>
                <div class="aside-wrap">
                    <div class="aside">
                        <ul class="aside__list">
                            <li class="aside__item submenu-item" v-for="category in categories">
                                <a class="aside__link" :href="'/catalog-type=category-id='+category.id" :aria-label="category.title">
                                    <svg width="24" height="24">
                                        <use :href="category.icon"></use>
                                    </svg>
                                    <span>{{category.title}}</span>
                                </a>
                                <div class="submenu-block parent">
                                    <div class="menu-head">
                                        <button class="submenu-close" type="button" aria-label="закрыть"></button>
                                        <strong class="menu-title">{{category.title}}</strong>
                                    </div>
                                    <ul class="aside__list">
                                        <li class="aside__item submenu-item" v-for="subcategory in category.subcategories">
                                            <a class="aside__link no-arrow" :href="'/catalog-type=subcategory-id='+subcategory.id">
                                                {{subcategory.title}}
                                            </a>
                                            <div v-if="subcategory.filters.length>0" class="submenu-block parent">
                                                <ul class="aside__list">
                                                    <li class="aside__item submenu-item" v-for="filter in subcategory.filters">
                                                        <a class="aside__link no-arrow" :href="'/catalog-type=filter-id='+filter.id">
                                                           {{filter.filter}}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <a href="catalogmain" class="aside__more">
                            <svg width="24" height="24">
                                <use href="#icon-circles"></use>
                            </svg>
                            <span>Все категории</span>
                        </a>
                    </div>
                </div>
                <a v-if="isIndex" class="logo logo--big" href="index">
                    <svg width="290" height="50">
                        <use href="#icon-logo-big"></use>
                    </svg>
                </a>
                <nav class="header__nav">
                    <ul id="main-menu" class="header__nav-list">
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="catalogmain">Каталог</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="stock">Акции</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="delivery">Доставка и Оплата</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="about">О магазине</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#!">Кредит и Рассрочка</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="help">Поддержка</a>
                        </li>
                        <li class="header__nav-item header__nav-more">
                            <button class="header__nav-link header__more-link arrow arrow--down">Еще</button>
                            <div class="header__additional-menu">
                                <ul>
                                    <li><a class="link" href="#!">элемент меню 1</a></li>
                                    <li><a class="link" href="#!">элемент меню 2</a></li>
                                    <li><a class="link" href="#!">элемент меню 3</a></li>
                                    <li><a class="link" href="#!">элемент меню 4</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="header__interaсtive-wrap">
                    <a class="header__btn header__btn--location arrow arrow--down" data-city="Санкт-Петербург" href="#!"
                       data-modal-open="location">
                        <svg width="24" height="24">
                            <use href="#icon-location"></use>
                        </svg>
                    </a>
                    <div class="header__btn header__btn--sign">
                        <a v-if="user===null" href="#!" data-modal-open="modal-login">
                            <svg width="24" height="24">
                                <use href="#icon-sign"></use>
                            </svg>
                            <span v-if="user===null" class="touch">Вход/Регистрация</span>
                            <span v-if="user===null" class="desktop">Войти</span>
                        </a>
                        <a v-if="user!==null" href="lk">
                            <svg width="24" height="24">
                                <use href="#icon-sign"></use>
                            </svg>
                            <span v-if="user!==null" class="touch">Личный кабинет</span>
                            <span v-if="user!==null" class="desktop">Личный кабинет</span>
                        </a>
                        <div v-if="user!==null" class="header__additional-menu">
                            <div>
                                <ul>
                                    <li><a class="link" href="lk">Профиль</a></li>
                                    <li><a class="link" href="profile">Личные данные</a></li>
                                    <li><a class="link" href="orderlist">Мои заказы</a></li>
                                    <li><a class="link" href="favorite">Избранное</a></li>
                                    <li><a class="link" href="waitlist">Лист ожидания</a></li>
                                    <li><a class="link" href="fblist">Мои отзывы</a></li>
                                    <li><a class="link" href="help">Помощь</a></li>
                                </ul>
                                <button class="logout-btn" type="button"
                                        @click.prevent="logout">
                                    <svg width="24" height="24">
                                        <use href="#icon-logout"></use>
                                    </svg>
                                    Выход
                                </button>
                            </div>
                        </div>
                        <div v-if="user===null" class="header__additional-menu">
                            <div>
                                <ul>
                                    <li><a class="link" href="#!" data-modal-open="modal-login">Вход</a></li>
                                    <li><a class="link" href="#!" data-modal-open="modal-register">Регистрация</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a id="header-equal" class="header__btn link-compare-js header__btn--equal" href="compare">
                        <span class="counter counter--red" :data-count="compares">
                            <svg width="24" height="24">
                                <use href="#icon-equal"></use>
                            </svg>
                        </span>
                        Сравнить
                    </a>
                    <a id="header-favorite" class="header__btn link-compare-js header__btn--favorite" href="favorite">
                        <span class="counter counter--red" :data-count="favourites">
                            <svg width="24" height="24">
                                <use href="#icon-favorite"></use>
                            </svg>
                        </span>
                        Избранное
                    </a>
                    <a id="header-cart" class="header__btn header__btn--cart" href='/cart'
                       aria-label="открыть корзину">
                        <span class="counter counter--red" :data-count="count">
                            <svg width="24" height="24">
                                <use href="#icon-cart"></use>
                            </svg>
                        </span>
                        Корзина
                    </a>
                </div>
                <div class="header__contact">
                    <p>Контакты</p>
                    <a href="tel:+78003333224">+7 (800) 333 32 24</a>
                    <a href="tel:+78124486811">+7 (812) 448 68 11</a>
                </div>
                <button class="header__menu-close" type="button" aria-label="закрыть"
                        data-modal-close="burger-menu"></button>
            </div>
            <div class="header__right">
                <div class="header__action-btn">
                    <button class="header__btn-mob header__search-form" type="button" data-modal-open="search-header"
                            aria-label="поиск по сайту">
                        <svg width="24" height="24">
                            <use href="#icon-search"></use>
                        </svg>
                    </button>
                    <a class="header__btn-mob header__phone link" href="tel:+78124486811">
                        <span>+7 (812) 448 68 11</span>
                        <svg width="24" height="24">
                            <use href="#icon-phone"></use>
                        </svg>
                    </a>
                    <a class="header__make-call" href="#!" data-modal-open="modal-call">Заказать звонок</a>
                    <a  class="header__btn-mob header__cart-btn" href='/cart'
                       aria-label="открыть корзину">
                            <svg width="24" height="24">
                                <use href="#icon-cart"></use>
                            </svg>
                    </a>
                </div>
                <div class="header__bottom-level">
                    <a class="header__btn header__btn--location arrow arrow--down" href="#!" data-city="Санкт-Петербург"
                       data-modal-open="location">
                        <svg width="24" height="24">
                            <use href="#icon-location"></use>
                        </svg>
                    </a>
                    <a class="header__bottom-decr link" href="#!" target="_blank">Новые обзоры каждую неделю, смотри нас
                        на нашем YouTube канале</a>
                    <a class="youtube-link" href="#!" target="_blank">
                        <svg width="26" height="20">
                            <use href="#icon-youtube"></use>
                        </svg>
                        YouTube
                    </a>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header",
    props:{
        isIndex:{
            type: Boolean,
            default: true
        },
        user:{
            type:Object,
            default: null
        }
    },
    data(){
        return{
            cart: [],
            favourite: [],
            compared: [],
            subscription: [],
            categories: []
        }
    },
    mounted() {
        this.getCategories()
        this.saveCart()
    },
    methods: {
        logout: function () {
            axios.post('logout').then(response => {
                if (response.status === 302 || 401) {
                    location.reload()
                } else {
                    // throw error and go to catch block
                }
            }).catch(error => {

            });
        },
        saveCart() {
            axios.get('/add-to-cart').then(response=>{
                this.cart = response.data.products
                this.favourite = response.data.favourite
                this.compared = response.data.compared
                this.subscription = response.data.subscription
                if(this.cart.length>0){
                    for (let item of this.cart) {
                        this.$store.commit('addToCartUnique', item);
                    }
                }
                if(this.favourite.length>0){
                    for(let item of this.favourite){
                        this.$store.commit('addToFavouriteUnique', item);
                    }
                }
                if(this.compared.length>0){
                    for(let item of this.compared){
                        this.$store.commit('addToCompareUnique', item);
                    }
                }
                if(this.subscription.length>0){
                    for(let item of this.subscription){
                        this.$store.commit('addToSubscriptionUnique', item);
                    }
                }
            })
        },
        getCategories(){
            axios.get('api/categories').then(response=>{
                this.categories = response.data.categories
            })
        }

    },
    computed: {
        count() {
            return  this.$store.state.cartCount;
        },
        favourites(){
            return  this.$store.state.favouriteCount;
        },
        compares(){
            return this.$store.state.compareCount;
        }
    }
}
</script>

<style scoped>

</style>
