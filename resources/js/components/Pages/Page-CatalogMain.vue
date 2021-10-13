<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="#" aria-current="location">Каталог</a>
                </div>
                <section class="aside catalog-main">
                    <h1 class="wrapper">Каталог товаров</h1>
                    <ul class="aside__list catalog-main__category-list">
                        <li class=" submenu-item" v-for="category in categories">
                        <product-categories :category="category"></product-categories>
                        </li>

                    </ul>
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
            <modal-subscribe></modal-subscribe>
            <modal-help></modal-help>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-CatalogMain",
    props:{
        auth_user:{
            default: null
        },
        categories:{
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
