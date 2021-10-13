<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main></header-main>
            <main>
                <div class="bread-crumbs bread-crumbs--error">
                    <a href="index">Главная</a>
                    <a href="404" aria-current="location">Страница не найдена</a>
                </div>
                <div class="error">
                    <div class="error__inner">
                        <img src="img/404.svg" width="685" height="285" alt="Страница не найдена">
                        <h1>Страница не найдена</h1>
                        <p>Наверное, вы ошиблись при наборе адреса или перешли по неверной ссылке. Используйте промокод выше, чтобы
                            получить скидку на вашу покупку</p>
                        <a class="btn btn-purple" href="index">Перейти на главную</a>
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
export default {
    name: "NotFoundPage"
}
</script>

<style scoped>

</style>
