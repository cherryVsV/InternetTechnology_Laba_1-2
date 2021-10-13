<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="service">
                    <div class="service-aside">
                        <div class="service-aside__inner">
                            <a class="logo logo--big" href="index">
                                <svg width="240" height="43">
                                    <use href="#icon-logo-big"></use>
                                </svg>
                            </a>
                            <div class="service-aside__links">
                                <a href="delivery">Доставка и оплата</a>
                                <a href="warranty">Гарантия и возврат</a>
                                <a href="faq">Покупки в кредит</a>
                                <a href="faq">Сервисные услуги</a>
                                <a href="faq">Частые вопросы</a>
                                <a href="faq">Условия продажи товаров</a>
                                <a href="policy">Политика конфиденциальности</a>
                                <a href="contact">Контакты</a>
                                <a href="index">Вернуться на главную</a>
                            </div>
                        </div>
                    </div>
                    <div class="service__container">
                        <div class="bread-crumbs ">
                            <a href="index">Главная</a>
                            <a href="help" aria-current="location">Помощь</a>
                        </div>
                        <h1 class="title">Помощь</h1>
                        <div class="service__help-accordion accordion">
                            <div class="service__accordion-item">
                                <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                        type="button">Доставка и оплата
                                </button>
                                <div class="accordion__content service__help-links">
                                    <a class="link" href="#">Самовывоз</a>
                                    <a class="link" href="#">Доставка по РФ</a>
                                    <a class="link" href="#">Оплата товара</a>
                                </div>
                            </div>
                            <div class="service__accordion-item">
                                <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                        type="button">Гарантия и возврат
                                </button>
                                <div class="accordion__content service__help-links">
                                    <a class="link" href="#">Гарантия</a>
                                    <a class="link" href="#">Возврат товара</a>
                                </div>
                            </div>
                            <div class="service__accordion-item">
                                <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                        type="button">Покупки в кредит
                                </button>
                                <div class="accordion__content service__help-links">
                                    <a class="link" href="#">Самовывоз</a>
                                </div>
                            </div>
                            <div class="service__accordion-item">
                                <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                        type="button">Сервисные услуги
                                </button>
                                <div class="accordion__content service__help-links">
                                    <a class="link" href="#">Сервис центр</a>
                                    <a class="link" href="#">Ремонт</a>
                                </div>
                            </div>
                            <div class="service__accordion-item">
                                <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                        type="button">Частые вопросы
                                </button>
                                <div class="accordion__content service__help-links">
                                    <a class="link" href="#">Сервис центр</a>
                                    <a class="link" href="#">Ремонт</a>
                                </div>
                            </div>
                            <div class="service__accordion-item">
                                <button class="accordion__title service__help-title accordion-title arrow arrow--down"
                                        type="button">Условия продажи товаров
                                </button>
                                <div class="accordion__content service__help-links">
                                    <a class="link" href="#">Политика </a>
                                </div>
                            </div>
                            <a class="service__accordion-item link" href="#">Политика конфиденциальности</a>
                            <a class="service__accordion-item link" href="#">Контакты</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer-main :is-info='true'></footer-main>
        <template id="template">
            <!-- На всех страницах -->
            <modal-login></modal-login>
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
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-Help",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
