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
                            <a href="delivery" aria-current="location">Доставка и оплата</a>
                        </div>
                        <h1 class="title">Доставка и оплата</h1>
                        <h2 class="service__title">Собственный отдел логистики быстро и бережно доставит ваш заказ по адресу в
                            Санкт-Петербурге:</h2>
                        <div class="service__text-block service__text-block--logistic">
                            <ul class="unmarked-list">
                                <li>в день заказа, либо на следующий день в рабочие дни*</li>
                                <li>в удобное для вас время</li>
                                <li>вам позвонят за час</li>
                                <li>помогут распаковать заказ, предоставят 10 минут на проверку</li>
                            </ul>
                            <p>* при статусе "наличие"; до 2-х дней ожидания в выходные и до 3-4-х в праздники</p>
                        </div>
                        <div id="map" class="service__map"></div>
                        <h2 class="service__title">Оплата наличными:</h2>
                        <ul class="service__text-block unmarked-list">
                            <li>Оплата наличными в пункте выдачи;</li>
                            <li>Оплата наличными курьеру при получении*;</li>
                        </ul>
                        <h2 class="service__title">Оплата по счёту для юридических лиц:</h2>
                        <ul class="service__text-block unmarked-list">
                            <li>Безналичная оплата по счёту для юридических лиц**;</li>
                        </ul>
                        <h2 class="service__title">Оплата при доставке в регионы:</h2>
                        <div class="service__text-block service__text-block--region">
                            <ul class="unmarked-list">
                                <li>Предоплата 100% на карту Альфа-банк (без комиссии*);</li>
                                <li>Предоплата 100% на карту Сбербанк (без комиссии*);</li>
                                <li>Предоплата 100% на карту Тинькофф Банк (без комиссии*);</li>
                            </ul>
                            <p>* Только при доставке собственной службой логистики по СПб и ЛО;</p>
                            <p>** Счёт выставляется без НДС, +5% к стоимости товара на момент заказа, только при наличии
                                реквизитов
                                плательщика в текстовом формате. </p>
                            <p>*** Комиссия за перевод денежных средств в большинстве случаев не взимается при транзакциях между
                                дебетовыми картами одного эмитента. Подробную информацию можно получить, обратившись в банк,
                                выпустивший
                                Вашу карту;</p>
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
export default {
    name: "Page-Delivery",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
