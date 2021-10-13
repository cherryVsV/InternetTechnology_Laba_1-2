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
                <div class="lk lk--order">
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
                            <h2 class="title title--order-top wrapper">Мои заказы</h2>
                            <div class="lk__tab-container">
                                <div class="lk__tablist" role="tablist" aria-label="сортировка заказов">
                                    <button id="tab-1-btn" class="lk__tab-btn" type="button" role="tab" aria-controls="tab-1"
                                            aria-selected="true">
                                        <span>Активные</span><sup class="title-counter">27</sup></button>
                                    <button id="tab-2-btn" class="lk__tab-btn" type="button" role="tab"
                                            aria-controls="tab-2"><span>Выполненные</span><sup class="title-counter">12</sup>
                                    </button>
                                    <button id="tab-3-btn" class="lk__tab-btn" type="button" role="tab"
                                            aria-controls="tab-3"><span>Отмененные</span><sup class="title-counter">43</sup>
                                    </button>
                                    <button id="tab-4-btn" class="lk__tab-btn" type="button" role="tab"
                                            aria-controls="tab-4"><span>Все</span><sup class="title-counter">82</sup></button>
                                </div>
                                <div id="tab-1" class="lk__tabpanel wrapper" role="tabpanel" aria-labelledby="tab-1-btn">
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">Принят, ожидается оплата</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
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
                                                        data-order=064206>
                                                    Отменить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">Принят, ожидается оплата</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
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
                                                        data-order=064206>
                                                    Отменить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="lk__tabpanel wrapper" role="tabpanel" aria-labelledby="tab-2-btn" hidden>
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">товар получен</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
                                        <div class="order-tab__bottom">
                                            <div class="price">Скидка: <b>5₽</b></div>
                                            <div class="price">Доставка: <b>5₽</b></div>
                                            <div class="price">Итого: <b>99 999₽</b></div>
                                            <div class="btn-wrap">
                                                <button class="btn btn-purple add-to-cart" type="button">
                                            <span class="counter counter--red"
                                                  data-count=""><span>Повторить заказ</span></span>
                                                </button>
                                                <button class="btn btn-white" type="button" data-modal-open="feedback">
                                                    Оставить отзыв
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="lk__tabpanel wrapper" role="tabpanel" aria-labelledby="tab-3-btn" hidden>
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">товар получен</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
                                        <div class="order-tab__bottom">
                                            <div class="price">Скидка: <b>5₽</b></div>
                                            <div class="price">Доставка: <b>5₽</b></div>
                                            <div class="price">Итого: <b>99 999₽</b></div>
                                            <div class="btn-wrap">
                                                <button class="btn btn-purple add-to-cart" type="button">
                                            <span class="counter counter--red"
                                                  data-count=""><span>Повторить заказ</span></span>
                                                </button>
                                                <button class="btn btn-white" type="button" data-modal-open="feedback">
                                                    Оставить отзыв
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">товар получен</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
                                        <div class="order-tab__bottom">
                                            <div class="price">Скидка: <b>5₽</b></div>
                                            <div class="price">Доставка: <b>5₽</b></div>
                                            <div class="price">Итого: <b>99 999₽</b></div>
                                            <div class="btn-wrap">
                                                <button class="btn btn-purple add-to-cart" type="button">
                                            <span class="counter counter--red"
                                                  data-count=""><span>Повторить заказ</span></span>
                                                </button>
                                                <button class="btn btn-white" type="button" data-modal-open="feedback">
                                                    Оставить отзыв
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">товар получен</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
                                        <div class="order-tab__bottom">
                                            <div class="price">Скидка: <b>5₽</b></div>
                                            <div class="price">Доставка: <b>5₽</b></div>
                                            <div class="price">Итого: <b>99 999₽</b></div>
                                            <div class="btn-wrap">
                                                <button class="btn btn-purple add-to-cart" type="button">
                                            <span class="counter counter--red"
                                                  data-count=""><span>Повторить заказ</span></span>
                                                </button>
                                                <button class="btn btn-white" type="button" data-modal-open="feedback">
                                                    Оставить отзыв
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-4" class="lk__tabpanel wrapper" role="tabpanel" aria-labelledby="tab-4-btn" hidden>
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">товар получен</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
                                        <div class="order-tab__bottom">
                                            <div class="price">Скидка: <b>5₽</b></div>
                                            <div class="price">Доставка: <b>5₽</b></div>
                                            <div class="price">Итого: <b>99 999₽</b></div>
                                            <div class="btn-wrap">
                                                <button class="btn btn-purple add-to-cart" type="button">
                                            <span class="counter counter--red"
                                                  data-count=""><span>Повторить заказ</span></span>
                                                </button>
                                                <button class="btn btn-white" type="button" data-modal-open="feedback">
                                                    Оставить отзыв
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">товар получен</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
                                        <div class="order-tab__bottom">
                                            <div class="price">Скидка: <b>5₽</b></div>
                                            <div class="price">Доставка: <b>5₽</b></div>
                                            <div class="price">Итого: <b>99 999₽</b></div>
                                            <div class="btn-wrap">
                                                <button class="btn btn-purple add-to-cart" type="button">
                                            <span class="counter counter--red"
                                                  data-count=""><span>Повторить заказ</span></span>
                                                </button>
                                                <button class="btn btn-white" type="button" data-modal-open="feedback">
                                                    Оставить отзыв
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">товар получен</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
                                        <div class="order-tab__bottom">
                                            <div class="price">Скидка: <b>5₽</b></div>
                                            <div class="price">Доставка: <b>5₽</b></div>
                                            <div class="price">Итого: <b>99 999₽</b></div>
                                            <div class="btn-wrap">
                                                <button class="btn btn-purple add-to-cart" type="button">
                                            <span class="counter counter--red"
                                                  data-count=""><span>Повторить заказ</span></span>
                                                </button>
                                                <button class="btn btn-white" type="button" data-modal-open="feedback">
                                                    Оставить отзыв
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-tab">
                                        <div class="order-tab__top">
                                            <div class="order-title">
                                                <div>Заказ #064206</div>
                                                <time datetime="2021-05-18T18:23">18.05.2020 | 18:23</time>
                                            </div>
                                            <dl>
                                                <dt>Статус заказа:</dt>
                                                <dd class="status">товар получен</dd>
                                                <dt>Способ оплаты:</dt>
                                                <dd>Банковская карта</dd>
                                                <dt>Способ Получения:</dt>
                                                <dd>Курьер Mediashop</dd>
                                            </dl>
                                            <a class="order-details-link" href="orderdetails">подробнее</a>
                                        </div>
                                        <div class="accordion order-tab__middle">
                                            <button class="accordion__title accordion-title arrow arrow--down" type="button">
                                                Товары в
                                                заказе
                                            </button>
                                            <div class="accordion__content">
                                                <div class="lk-order-list">
                                                    <div class="lk-order-list-item">
                                                        <div class="img-wrap">
                                                            <img src="img/content/phone-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                                            <img src="img/content/watch-cart.png" width="55" height="65"
                                                                 alt="айфон 8">
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
                                            </div>
                                        </div>
                                        <div class="order-tab__bottom">
                                            <div class="price">Скидка: <b>5₽</b></div>
                                            <div class="price">Доставка: <b>5₽</b></div>
                                            <div class="price">Итого: <b>99 999₽</b></div>
                                            <div class="btn-wrap">
                                                <button class="btn btn-purple add-to-cart" type="button">
                                            <span class="counter counter--red"
                                                  data-count=""><span>Повторить заказ</span></span>
                                                </button>
                                                <button class="btn btn-white" type="button" data-modal-open="feedback">
                                                    Оставить отзыв
                                                </button>
                                            </div>
                                        </div>
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
    name: "Page-OrderList",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
