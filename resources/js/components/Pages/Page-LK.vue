<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs bread-crumbs--lk">
                    <a href="index">Главная</a>
                    <a href="lk" aria-current="location">Личный кабинет</a>
                </div>
                <div class="lk lk--main">
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
                            <div class="lk-form lk-form-adjacent">
                                <h2 class="title">Профиль</h2>
                                <div class="lk__wrap-content lk__wrap-content--profile">
                                    <dl class="content-item">
                                        <dt>Телефон:</dt>
                                        <dd>+7(812)812-12-12</dd>
                                        <dt>Пол:</dt>
                                        <dd>Мужской</dd>
                                    </dl>
                                    <dl class="content-item">
                                        <dt>Дата рождения:</dt>
                                        <dd>23.05.1987</dd>
                                        <dt>Email:</dt>
                                        <dd>ameladze@gmail.com</dd>
                                    </dl>
                                    <dl class="content-item">
                                        <dt>Город:</dt>
                                        <dd>Санкт-Петербург</dd>
                                    </dl>
                                </div>
                                <div class="lk__right-icons">
                                    <a class="link-compare-js" href="favorite">
                  <span class="counter counter--red" data-count="2">
                    <svg width="32" height="32">
                      <use href="#icon-favorite"></use>
                    </svg>
                  </span>
                                        Избранное
                                    </a>
                                    <a class="link-compare-js" href="compare">
                  <span class="counter counter--red" data-count="3">
                    <svg width="32" height="32">
                      <use href="#icon-equal"></use>
                    </svg>
                  </span>
                                        Сравнение
                                    </a>
                                    <a class="link-compare-js" href="waitlist">
                  <span class="counter counter--red" data-count="4">
                    <svg width="32" height="32">
                      <use href="#icon-clock"></use>
                    </svg>
                  </span>
                                        Лист ожидания
                                    </a>
                                    <a class="link-compare-js" href="fblist">
                  <span class="counter counter--red" data-count="5">
                    <svg width="32" height="32">
                      <use href="#icon-comment"></use>
                    </svg>
                  </span>
                                        Мои отзывы
                                    </a>
                                </div>
                            </div>
                            <div class="lk-form lk-form-adjacent">
                                <h2 class="title">Мои адреса</h2>
                                <div>
                                    <p class="lk__wrap-content"><span>Санкт-Петербург,</span>
                                        ул. Лиговский проспект, д. 20, стр. 42, под.1, кв. 254</p>
                                    <div class="lk-form">
                                        <h2 class="title title-promo">Ваши промокоды</h2>
                                        <div class="lk__wrap-content lk__wrap-content--promo">
                                            <div class="content-item">
                                                <span class="promo-code">B12a45vasyzgon1t</span>
                                                <small>Скидка 10% на телефон</small>
                                            </div>
                                            <button class="lk__copy-btn" type="button" title="Скопировать в буфер обмена">
                                                Скопировать
                                            </button>
                                            <time class="time" datetime="2021-09-11">до 11.09.2021</time>
                                        </div>
                                    </div>
                                </div>
                                <div class="lk__right-img">
                                    <picture>
                                        <!-- 1x-270px/345px 2x-540px/690px -->
                                        <source type="image/webp"
                                                srcset="img/content/img-lk-main.webp 1x, img/content/img-lk-main@2x.webp 2x">
                                        <img class=content-img src="img/content/img-lk-main.jpg"
                                             srcset="img/content/img-lk-main@2x.jpg 2x"
                                             width="270" height="345" alt="картинка" loading=lazy decoding=async>
                                    </picture>
                                </div>
                            </div>
                            <div class="lk-form">
                                <h2 class="title">Ваш последний заказ</h2>
                                <div class="lk__wrap-content lk__wrap-content--order">
                                    <div class="header-block">
                                        <span class="order-number">#064206</span>
                                        <span>Ожидает доставки</span>
                                        <button type="button">Подробнее</button>
                                    </div>
                                    <div class="lk-order-list">
                                        <div class="lk-order-list-item">
                                            <div class="img-wrap">
                                                <img src="img/content/phone-cart.png" width="55" height="65" alt="айфон 8">
                                            </div>
                                            <div class="content-wrap">
                                                <div class="name">
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
                                                    <p>Apple Watch 5 series 44mm +ремешек HERMES</p>
                                                </div>
                                                <span class="amount">1шт</span>
                                                <b class="price">99 999₽</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
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
export default {
    name: "Page-LK",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
