<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs bread-crumbs--lk">
                    <a href="index">Главная</a>
                    <a href="lk">Личный кабинет</a>
                    <a href="orderlist" aria-current="location">Мои заказы</a>
                </div>
                <div class="lk lk--order-details">
                    <h1 class="title title-lk wrapper">Личный кабинет</h1>
                    <div class="lk__container">
                        <div class="lk__left">
                            <div class="lk__left-inner">
                                <div class="lk__name">
                                    <p>Александр Меладзе</p>
                                    <div>Бонусный счет: <span>12.256</span></div>
                                </div>
                                <div class="lk__nav">
                                    <a class="lk__nav-link link arrow arrow--right" href="lk">Профиль</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="profile">Личные данные</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="orderlist">Мои заказы</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="favorite">Избранное</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="waitlist">Лист ожидания</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="fblist">Мои отзывы</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="help">Помощь</a>
                                    <a class="lk__logout" href="index">Выход</a>
                                </div>
                            </div>
                        </div>
                        <div class="lk__main">
                            <h2 class="title title--order-details">Мои заказы</h2>
                            <div class="lk__order-details-wrap wrapper">
                                <div class="order-tab lk__order-details">
                                    <div class="title-wrap">
                                        <h3 class="title">Заказ <span class="order-number">#064206</span></h3>
                                        <div class="btn-wrap">
                                            <button class="btn btn-purple add-to-cart" type="button">
                                        <span class="counter counter--red"
                                              data-count=""><span>Повторить заказ</span></span>
                                            </button>
                                            <button class="btn btn-white" type="button" data-modal-open="cancel-order"
                                                    data-order="064206">Отменить
                                            </button>
                                        </div>
                                    </div>
                                    <dl class="lk__user-info lk__user-info--top">
                                        <dt>Дата заказа:</dt>
                                        <dd>
                                            <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                        </dd>
                                        <dt>Статус заказа:</dt>
                                        <dd class="status">Принят, ожидается оплата</dd>
                                    </dl>
                                    <h4 class="lk__subtitle lk__subtitle--mb-15">Товары в заказе</h4>
                                    <div class="lk-order-list">
                                        <div class="lk-order-list-item">
                                            <div class="img-wrap">
                                                <img src="img/content/phone-cart.png" width="55" height="65" alt="айфон 8">
                                            </div>
                                            <div class="content-wrap">
                                                <div class="name">
                                                    <small>Арт. 064206</small>
                                                    <p>Смартфон Apple iPhone 11 Pro Max 64GB Retina display </p>
                                                </div>
                                                <span class="amount">1шт</span>
                                                <b class="price">99 999₽</b>
                                            </div>
                                        </div>
                                        <div class="lk-order-list-item">
                                            <div class="img-wrap">
                                                <img src="img/content/watch-cart.png" width="55" height="65" alt="айфон 8">
                                            </div>
                                            <div class="content-wrap">
                                                <div class="name">
                                                    <small>Арт. 064206</small>
                                                    <p>Apple Watch 5 series 44mm +ремешек HERMES</p>
                                                </div>
                                                <span class="amount">1шт</span>
                                                <b class="price">99 999₽</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lk__total-products">2 товара на сумму <span>199 998₽</span></div>
                                    <div class="order-tab__bottom">
                                        <div class="price">Скидка: <b>5₽</b></div>
                                        <div class="price">Доставка: <b>5₽</b></div>
                                        <div class="price">Итого: <b>99 999₽</b></div>
                                        <div class="btn-wrap">
                                            <button class="btn btn-purple add-to-cart" type="button">
                                        <span class="counter counter--red"
                                              data-count=""><span>Повторить заказ</span></span>
                                            </button>
                                            <button class="btn btn-white" type="button" data-modal-open="cancel-order"
                                                    data-order="064206">Отменить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="lk__subtitle">Данные покупателя</h4>
                                <dl class="lk__user-info">
                                    <dt>Имя Фамилия:</dt>
                                    <dd>Александр Меладзе</dd>
                                    <dt>Номер телефона:</dt>
                                    <dd>+7 (812) 812 12 12</dd>
                                    <dt>Email:</dt>
                                    <dd>ameladze@gmail.com</dd>
                                </dl>
                                <h4 class="lk__subtitle">Доставка и оплата</h4>
                                <dl class="lk__user-info">
                                    <dt>Способ доставки:</dt>
                                    <dd>Курьер Mediashop</dd>
                                    <dt>Адрес доставки:</dt>
                                    <dd>Санкт-Петербург, ул. Лиговский проспект, д. 20, стр. 42, под.1, кв. 254</dd>
                                    <dt>Способ оплаты:</dt>
                                    <dd>Банковская карта</dd>
                                    <dt>Дата и время доставки:</dt>
                                    <dd>
                                        <time datetime="2021-08-27">27 августа 2021</time>
                                        с 10:00 до 15:00
                                    </dd>
                                </dl>
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
            <!-- Только на этой странице -->
            <modal-cancel-order></modal-cancel-order>
            <modal-feedback></modal-feedback>
            <modal-feedback-full></modal-feedback-full>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-OrdeDetails",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
