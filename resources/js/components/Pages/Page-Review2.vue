<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="review">Обзоры</a>
                    <a href="#!" aria-current="location">Iphone 11, почему такой же как и Pro Max</a>
                </div>
                <div class="article article--review">
                    <div class="article-content wrapper">
                        <p class="article__date">Дата публикации:
                            <time datetime="2021-04-25">25 апреля 2021</time>
                        </p>
                        <h1 class="title">Обзор небольшого телевизора без SmartTV Philips 32PHS4203
                            <span class="article-el__mark has-video">
              <span class="article-el__mark-unpack">Распаковка</span>
            </span>
                        </h1>
                        <p class="article__product-info">В этом ролике мы посмотрим на небольшой "не умный" телевизор от
                            компании
                            Philips - Philips 32PHS4203. Эта
                            модель стоит менее 15000 рублей и отлично подойдет тем, кому не нужен функционал Smart TV, а также
                            тому,
                            кто планирует использовать внешнюю Android приставку или Apple TV. При этом телевизор отличается
                            неплохим качеством изображения хорошей глубиной черного цвета, благодаря.</p>
                        <div class="article__media">
                            <div class="article__iframe">
                                <iframe src="https://www.youtube.com/embed/3MAfK4vN1Hw" allowfullscreen="" width="16"
                                        height="9"></iframe>
                            </div>
                            <p>Оператор: Василий Иванов, Комментатор: Еватерина Ионова, Галина Сташевич, Монтажер: Андрей
                                Рюмкин</p>
                        </div>
                        <p>В сентябре прошлого года компания Apple в очередной раз представила нам свою обновленную серию
                            iPhone.
                            На этот раз линейка пополнилась уже 3-мя устройствами, каждое из которых найдет своего покупателяя,
                            а мы
                            рассмотрим с вами основные плюсы и минусы данной линейки в нашем небольшом видео. В сентябре
                            прошлого
                            года компания Apple в очередной раз представила нам свою обновленную серию iPhone. На этот раз
                            линейка
                            пополнилась уже 3-мя устройствами, каждое из которых найдет своего покупателяя, а мы рассмотрим с
                            вами
                            основные плюсы и минусы данной линейки в нашем небольшом видео.</p>
                        <p>В сентябре прошлого года компания Apple в очередной раз представила нам свою обновленную серию
                            iPhone.
                            На этот раз линейка пополнилась уже 3-мя устройствами, каждое из которых найдет своего покупателяя,
                            а мы
                            рассмотрим с вами основные плюсы и минусы данной линейки в нашем небольшом видео. В сентябре
                            прошлого
                            года компания Apple в очередной раз представила нам свою обновленную серию iPhone. На этот раз
                            линейка
                            пополнилась уже 3-мя устройствами, каждое из которых найдет своего покупателяя, а мы рассмотрим с
                            вами
                            основные плюсы и минусы данной линейки в нашем небольшом видео.</p>
                    </div>
                    <section class="product-review">
                        <h2 class="wrapper"><a class="link" href="#!">Товары из обзора</a></h2>
                        <div class="product-card-container slider-container">
                            <div class="product-card-list swiper-wrapper">
                                <div class="product-card-wrap swiper-slide">
                                    <div data-vendor-code="64201" class="product-card product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-4">
                                                <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/black-friday.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-0">
                                                <img src="img/content/icon/best-seller.svg" width="70" height="70" alt="бонус">
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                        </div>
                                        <div class="product-card__img fast-order-img" data-empty="Товар на фотосессии"></div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может
                                                быть в 3 строки
                                                для длинных названий</p>
                                            <p class="product-card__assets">Нет в наличии</p>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-white product-card__buy" type="button"
                                                        data-modal-open="subscribe">Подписаться
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap swiper-slide">
                                    <div data-vendor-code="64202" class="product-card product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-5">
                                                <img src="img/content/icon/gift.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-0">
                                                <img src="img/content/icon/new.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-1">
                                                <img src="img/content/icon/sale.svg" width="70" height="70" alt="бонус">
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                        </div>
                                        <div class="product-card__img fast-order-img">
                                            <picture>
                                                <!-- 1x-179px/108px 2x-358px/216px -->
                                                <source type="image/webp"
                                                        srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                                <img class=content-img src="img/content/phone-small.jpg"
                                                     srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                     alt="Sumsung phone"
                                                     loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может
                                                быть в 3 строки
                                                для длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-white product-card__buy" type="button"
                                                        data-modal-open="fast-order">Купить
                                                    в один клик
                                                </button>
                                                <button class="product-card__cart add-to-cart" type="button">
                        <span class="counter counter--red" data-count="">
                          <span>В корзину</span>
                        </span>
                                                    <svg width="32" height="32">
                                                        <use href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap swiper-slide">
                                    <div data-vendor-code="64203" class="product-card product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-1">
                                                <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/cyber-monday.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-2">
                                                <span class="bonus-discount">-80%</span>
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                        </div>
                                        <div class="product-card__img fast-order-img">
                                            <picture>
                                                <!-- 1x-179px/108px 2x-358px/216px -->
                                                <source type="image/webp"
                                                        srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                                <img class=content-img src="img/content/watch.jpg"
                                                     srcset="img/content/watch@2x.jpg 2x"
                                                     width="179" height="108" alt="Apple watch" loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может
                                                быть в 3 строки
                                                для длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-white product-card__buy" type="button"
                                                        data-modal-open="fast-order">Купить
                                                    в один клик
                                                </button>
                                                <button class="product-card__cart add-to-cart" type="button">
                        <span class="counter counter--red" data-count="">
                          <span>В корзину</span>
                        </span>
                                                    <svg width="32" height="32">
                                                        <use href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap swiper-slide">
                                    <div data-vendor-code="64204" class="product-card product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-4">
                                                <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/black-friday.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-0">
                                                <img src="img/content/icon/best-seller.svg" width="70" height="70" alt="бонус">
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                        </div>
                                        <div class="product-card__img fast-order-img">
                                            <picture>
                                                <!-- 1x-179px/108px 2x-358px/216px -->
                                                <source type="image/webp"
                                                        srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                                <img class=content-img src="img/content/phone-small.jpg"
                                                     srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                     alt="Sumsung phone"
                                                     loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может
                                                быть в 3 строки
                                                для длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-white product-card__buy" type="button"
                                                        data-modal-open="fast-order">Купить
                                                    в один клик
                                                </button>
                                                <button class="product-card__cart add-to-cart" type="button">
                        <span class="counter counter--red" data-count="">
                          <span>В корзину</span>
                        </span>
                                                    <svg width="32" height="32">
                                                        <use href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap swiper-slide">
                                    <div data-vendor-code="64205" class="product-card product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-5">
                                                <img src="img/content/icon/gift.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-0">
                                                <img src="img/content/icon/new.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-1">
                                                <img src="img/content/icon/sale.svg" width="70" height="70" alt="бонус">
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                        </div>
                                        <div class="product-card__img fast-order-img">
                                            <picture>
                                                <!-- 1x-179px/108px 2x-358px/216px -->
                                                <source type="image/webp"
                                                        srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                                <img class=content-img src="img/content/watch.jpg"
                                                     srcset="img/content/watch@2x.jpg 2x"
                                                     width="179" height="108" alt="Apple watch" loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может
                                                быть в 3 строки
                                                для длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-white product-card__buy" type="button"
                                                        data-modal-open="fast-order">Купить
                                                    в один клик
                                                </button>
                                                <button class="product-card__cart add-to-cart" type="button">
                        <span class="counter counter--red" data-count="">
                          <span>В корзину</span>
                        </span>
                                                    <svg width="32" height="32">
                                                        <use href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap swiper-slide">
                                    <div data-vendor-code="64206" class="product-card product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-1">
                                                <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/cyber-monday.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-2">
                                                <span class="bonus-discount">-80%</span>
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                        </div>
                                        <div class="product-card__img fast-order-img">
                                            <picture>
                                                <!-- 1x-179px/108px 2x-358px/216px -->
                                                <source type="image/webp"
                                                        srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                                <img class=content-img src="img/content/phone-small.jpg"
                                                     srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                     alt="Sumsung phone"
                                                     loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может
                                                быть в 3 строки
                                                для длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-white product-card__buy" type="button"
                                                        data-modal-open="fast-order">Купить
                                                    в один клик
                                                </button>
                                                <button class="product-card__cart add-to-cart" type="button">
                        <span class="counter counter--red" data-count="">
                          <span>В корзину</span>
                        </span>
                                                    <svg width="32" height="32">
                                                        <use href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap swiper-slide">
                                    <div data-vendor-code="64207" class="product-card product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-4">
                                                <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-3">
                                                <img src="img/content/icon/black-friday.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-0">
                                                <img src="img/content/icon/best-seller.svg" width="70" height="70" alt="бонус">
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                        </div>
                                        <div class="product-card__img fast-order-img">
                                            <picture>
                                                <!-- 1x-179px/108px 2x-358px/216px -->
                                                <source type="image/webp"
                                                        srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                                <img class=content-img src="img/content/watch.jpg"
                                                     srcset="img/content/watch@2x.jpg 2x"
                                                     width="179" height="108" alt="Apple watch" loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может
                                                быть в 3 строки
                                                для длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-white product-card__buy" type="button"
                                                        data-modal-open="fast-order">Купить
                                                    в один клик
                                                </button>
                                                <button class="product-card__cart add-to-cart" type="button">
                        <span class="counter counter--red" data-count="">
                          <span>В корзину</span>
                        </span>
                                                    <svg width="32" height="32">
                                                        <use href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap swiper-slide">
                                    <div data-vendor-code="64208" class="product-card product-card--sm-icon">
                                        <div class="product-card__bonuses">
                                            <div class="bonus-icon priority-5">
                                                <img src="img/content/icon/gift.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-0">
                                                <img src="img/content/icon/new.svg" width="70" height="70" alt="бонус">
                                            </div>
                                            <div class="bonus-icon priority-1">
                                                <img src="img/content/icon/sale.svg" width="70" height="70" alt="бонус">
                                            </div>
                                        </div>
                                        <div class="product-card__icons">
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                        </div>
                                        <div class="product-card__img fast-order-img">
                                            <picture>
                                                <!-- 1x-179px/108px 2x-358px/216px -->
                                                <source type="image/webp"
                                                        srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                                <img class=content-img src="img/content/phone-small.jpg"
                                                     srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                     alt="Sumsung phone"
                                                     loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="product-card__info">
                                            <small class="product-card__name">Смарт-часы</small>
                                            <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может
                                                быть в 3 строки
                                                для длинных названий</p>
                                            <s class="product-card__old-price">53 999₽</s>
                                            <b class="product-card__price">32 230₽</b>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-white product-card__buy" type="button"
                                                        data-modal-open="fast-order">Купить
                                                    в один клик
                                                </button>
                                                <button class="product-card__cart add-to-cart" type="button">
                        <span class="counter counter--red" data-count="">
                          <span>В корзину</span>
                        </span>
                                                    <svg width="32" height="32">
                                                        <use href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn-slider btn-slider--next arrow arrow--right" type="button"
                                    aria-label="следующий слайд"></button>
                            <button class="btn-slider btn-slider--prev arrow arrow--left" type="button"
                                    aria-label="предыдущий слайд"></button>
                        </div>
                    </section>
                    <div class="article-content wrapper">
                        <strong class="article__shear-title article__shear-title--review">Поделиться</strong>
                        <ul class="social-icons">
                            <li>
                                <a href="#!" aria-label="наша страница фейсбук">
                                    <svg width="40" height="40">
                                        <use href="#icon-fb"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница в контакте">
                                    <svg width="40" height="40">
                                        <use href="#icon-vk"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница твиттер">
                                    <svg width="40" height="40">
                                        <use href="#icon-tw"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница одноклассники">
                                    <svg width="40" height="40">
                                        <use href="#icon-ok"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница гугл плюс">
                                    <svg width="40" height="40">
                                        <use href="#icon-gp"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница майл ру">
                                    <svg width="40" height="40">
                                        <use href="#icon-mr"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="news news--review wrapper">
                    <div class="article__navigation">
                        <a class="article__btn-nav arrow arrow--left" href="#">Предыдущий обзор</a>
                        <a class="article__btn-nav arrow arrow--right" href="#">Следующий обзор</a>
                    </div>
                    <div class="news__articles view-column">
                        <article class="article-el">
                            <a href="review2" class="article-el__img">
                                <picture>
                                    <source type="image/webp"
                                            srcset="img/content/review/review.webp 345w, img/content/review/review@2x.webp 700w"
                                            sizes="(max-width: 768px) 100vw, 345px">
                                    <img src="img/content/review/review.jpg" srcset="img/content/review/review@2x.jpg 700w"
                                         sizes="(max-width: 769px) 100vw, 345px" alt="обзор гаджета" decoding="async"
                                         loading="lazy">
                                </picture>
                            </a>
                            <div class="article-el__body">
                                <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max, может
                                    быть в 3
                                    строки и вот таким большим</a></h3>
                                <div class="article-el__mark has-video">
                                    <span class="article-el__mark-unpack">Распаковка</span>
                                </div>
                                <p class="text-limiter"> Видео разбор с ответами на самые часто задаваемые вопросы может быть
                                    большим в 3
                                    строки, видео разбор с ответами на самые часто задаваемые</p>
                                <a href="review2" class="link">Читать далее</a>
                            </div>
                        </article>
                        <article class="article-el">
                            <a href="review2" class="article-el__img">
                                <picture>
                                    <source type="image/webp"
                                            srcset="img/content/review/review.webp 345w, img/content/review/review@2x.webp 700w"
                                            sizes="(max-width: 768px) 100vw, 345px">
                                    <img src="img/content/review/review.jpg" srcset="img/content/review/review@2x.jpg 700w"
                                         sizes="(max-width: 769px) 100vw, 345px" alt="обзор гаджета" decoding="async"
                                         loading="lazy">
                                </picture>
                            </a>
                            <div class="article-el__body">
                                <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max, может
                                    быть в 3
                                    строки и вот таким большим</a></h3>
                                <div class="article-el__mark has-video">
                                    <span class="article-el__mark-unpack">Распаковка</span>
                                </div>
                                <p class="text-limiter"> Видео разбор с ответами на самые часто задаваемые вопросы может быть
                                    большим в 3
                                    строки, видео разбор с ответами на самые часто задаваемые</p>
                                <a href="review2" class="link">Читать далее</a>
                            </div>
                        </article>
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
    name: "Page-Review2",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
