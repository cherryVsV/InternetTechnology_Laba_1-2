/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
export const eventBus = new Vue()
import Fragment from 'vue-fragment'

Vue.use(Fragment.Plugin)

import Swal from 'sweetalert2'
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
window.Toast = Toast;
window.Fire = new Vue();
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//--------------------------------------------------------------------------------
// SVG Icons (для всех страниц)
Vue.component('svg-icons', require('./components/SVG-Icons/SVG-Icons').default);
// SVG Icons для Email
Vue.component('svg-icons-email', require('./components/SVG-Icons/SVG-Icons-Email').default);
//--------------------------------------------------------------------------------
// Aside (для всех страниц)
Vue.component('aside-main', require('./components/Aside/Aside').default);
//--------------------------------------------------------------------------------
// Header (для всех страниц)
Vue.component('header-main', require('./components/Header/Header').default);
// Header для Email
Vue.component('header-email', require('./components/Header/Header-Email').default);
//--------------------------------------------------------------------------------
// Footer (для всех страниц)
Vue.component('footer-main', require('./components/Footer/Footer').default);
// Footer для Email
Vue.component('footer-email', require('./components/Footer/Footer-Email').default);
//---------------------------------------------------------------------------------
// Cookies (для всех страниц)
Vue.component('cookies', require('./components/Cookies/Cookies').default);
//---------------------------------------------------------------------------------
// Modals
// Modals Layout: Login
Vue.component('modal-login', require('./components/Modals/Modal-Login').default);
// Modals Layout: Fast Order
Vue.component('modal-fast-order', require('./components/Modals/Modal-Fast-Order').default);
// Modals Layout: Register
Vue.component('modal-register', require('./components/Modals/Modal-Register').default);
// Modals Layout: Recover
Vue.component('modal-recover', require('./components/Modals/Modal-Recover').default);
// Modals Layout: Recover Next
Vue.component('modal-recover-next', require('./components/Modals/Modal-Recover-Next').default);
// Modals Layout: Call
Vue.component('modal-call', require('./components/Modals/Modal-Call').default);
// Modals Layout: Location
Vue.component('modal-location', require('./components/Modals/Modal-Location').default);
// Modals Layout: Search Header
Vue.component('modal-search-header', require('./components/Modals/Modal-Search-Header').default);
// Modals Layout: Success Order
Vue.component('modal-success-order', require('./components/Modals/Modal-Success-Order').default);
// Modals Layout: Fail
Vue.component('modal-fail', require('./components/Modals/Modal-Fail').default);
// Modals Layout: Error
Vue.component('modal-error', require('./components/Modals/Modal-Error').default);
// Modals Layout: Subscribe
Vue.component('modal-subscribe', require('./components/Modals/Modal-Subscribe').default);
// Modals Layout: Help
Vue.component('modal-help', require('./components/Modals/Modal-Help').default);

// Modal Card-Slider (для Card, Card2 страниц)
Vue.component('modal-card-slider', require('./components/Modals/Modal-Card-Slider').default);
// Modal Feedback-Slider (для Card, Card2 страниц)
Vue.component('modal-feedback-slider', require('./components/Modals/Modal-Feedback-Slider').default);
// Modal Feedback (для Card, Card2, FBList, Order Details, Order List страниц)
Vue.component('modal-feedback', require('./components/Modals/Modal-Feedback').default);
// Modal Feedback-Full (для Card, Card2, FBList, Order Details, Order List страниц)
Vue.component('modal-feedback-full', require('./components/Modals/Modal-Feedback-Full').default);
// Modal Write Us (для Contact, страниц)
Vue.component('modal-write-us', require('./components/Modals/Modal-Write-Us').default);
// Modal Cancel Order (для Order Details, Order List страниц)
Vue.component('modal-cancel-order', require('./components/Modals/Modal-Cancel-Order').default);
// Modal Add Address (для Profile страниц)
Vue.component('modal-add-address', require('./components/Modals/Modal-Add-Address').default);
// Modal Vacancy (для Vacancies страниц)
Vue.component('modal-vacancy', require('./components/Modals/Modal-Vacancy').default);

//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
// Товары (страница Каталог общий)
// Категории
Vue.component('product-categories', require('./components/PagesComponents/Products/ProductCategories').default);
// Подкатегории
Vue.component('product-sub-categories', require('./components/PagesComponents/Products/ProductSubCategories').default);

//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
// Страницы
// 404 (Страница не найдена)
Vue.component('page-not-found', require('./components/Pages/Page-404').default);
// About (О нас)
Vue.component('page-about', require('./components/Pages/Page-About').default);
// Article (Статья)
Vue.component('page-article', require('./components/Pages/Page-Article').default);
// Card (Карточка товара)
Vue.component('page-card', require('./components/Pages/Page-Card').default);
// Card2 (Карточка товара пустая)
Vue.component('page-card2', require('./components/Pages/Page-Card2').default);
// Cart (Корзина)
Vue.component('page-cart', require('./components/Pages/Page-Cart').default);
// Cart1 (Оформление заказа)
Vue.component('page-cart1', require('./components/Pages/Page-Cart1').default);
// Cart Complete (Заказ оформлен)
Vue.component('page-cart-complete', require('./components/Pages/Page-CartComplete').default);
// Catalog (Каталог)
Vue.component('page-catalog', require('./components/Pages/Page-Catalog').default);
// Catalog Main (Каталог главная)
Vue.component('page-catalog-main', require('./components/Pages/Page-CatalogMain').default);
// Compare (Сравнение)
Vue.component('page-compare', require('./components/Pages/Page-Compare').default);
// Contact (Контакты)
Vue.component('page-contact', require('./components/Pages/Page-Contact').default);
// Delivery (Доставка и оплата)
Vue.component('page-delivery', require('./components/Pages/Page-Delivery').default);
// FAQ (Вопросы и ответы)
Vue.component('page-faq', require('./components/Pages/Page-FAQ').default);
// Favorite (Избранное)
Vue.component('page-favorite', require('./components/Pages/Page-Favorite').default);
// Help (Помощь главная)
Vue.component('page-help', require('./components/Pages/Page-Help').default);
// News (Новости)
Vue.component('page-news', require('./components/Pages/Page-News').default);
// Policy (Политика конфиденциальности)
Vue.component('page-policy', require('./components/Pages/Page-Policy').default);
// Review (Обзоры)
Vue.component('page-review', require('./components/Pages/Page-Review').default);
// Review2 (Обзоры v2)
Vue.component('page-review2', require('./components/Pages/Page-Review2').default);
// Stock (Акции)
Vue.component('page-stock', require('./components/Pages/Page-Stock').default);
// Stock2 (Акции v2)
Vue.component('page-stock2', require('./components/Pages/Page-Stock2').default);
// Vacancies (Вакансии)
Vue.component('page-vacancies', require('./components/Pages/Page-Vacancies').default);
// Warranty (Гарантия и возврат)
Vue.component('page-warranty', require('./components/Pages/Page-Warranty').default);

// LK (Личный кабинет)
Vue.component('page-lk', require('./components/Pages/Page-LK').default);
// Order Details (ЛК Заказ подробности)
Vue.component('page-order-details', require('./components/Pages/Page-OrdeDetails').default);
// Order List (ЛК Мои заказы)
Vue.component('page-order-list', require('./components/Pages/Page-OrderList').default);
// Wait List (ЛК Лист Ожидания)
Vue.component('page-wait-list', require('./components/Pages/Page-WaitList').default);
// FBList (ЛК Мои отзывы)
Vue.component('page-fblist', require('./components/Pages/Page-FBList').default);
// Profile (ЛК Личные данные)
Vue.component('page-profile', require('./components/Pages/Page-Profile').default);

// Index (Главная)
Vue.component('page-index', require('./components/Pages/Page-Index').default);
// Email (email)
Vue.component('page-email', require('./components/Pages/Page-Email').default);

// Content (Все страницы и модальные окна сайта)
Vue.component('page-content', require('./components/Pages/Page-Content').default);

import store from './store/index'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store
});
