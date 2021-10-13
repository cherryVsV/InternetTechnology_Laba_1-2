<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main :is-index='true'></aside-main>
            <header-main :is-index='false' :user="auth_user"></header-main>
            <main>
                <h1 class="visually-hidden">Главная медиашоп</h1>
                <div class="banner slider-container">
                    <div class="banner__list swiper-wrapper">
                        <div class="banner__item swiper-slide">
                            <picture>
                                <!-- 1x-767px 2x-1534px -->
                                <source media="(min-width: 768px)" type="image/webp"
                                        srcset="img/content/banner/1.webp 1x, img/content/banner/1@2x.webp 2x">
                                <source type="image/webp"
                                        srcset="img/content/banner/1-mob.webp 1x, img/content/banner/1-mob@2x.webp 2x">
                                <img src="img/content/banner/1.jpg" srcset="img/content/banner/1@2x.jpg 2x" width="767"
                                     height="350"
                                     alt="картинка">
                            </picture>
                        </div>
                        <div class="banner__item swiper-slide">
                            <picture>
                                <!-- 1x-767px 2x-1534px -->
                                <source media="(min-width: 768px)" type="image/webp"
                                        srcset="img/content/banner/2.webp 1x, img/content/banner/2@2x.webp 2x">
                                <source type="image/webp"
                                        srcset="img/content/banner/2-mob.webp 1x, img/content/banner/2-mob@2x.webp 2x">
                                <img src="img/content/banner/2.jpg" srcset="img/content/banner/2@2x.jpg 2x" width="767"
                                     height="350"
                                     alt="картинка" loading=lazy decoding=async>
                            </picture>
                        </div>
                        <div class="banner__item swiper-slide">
                            <picture>
                                <!-- 1x-767px 2x-1534px -->
                                <source media="(min-width: 768px)" type="image/webp"
                                        srcset="img/content/banner/3.webp 1x, img/content/banner/3@2x.webp 2x">
                                <source type="image/webp"
                                        srcset="img/content/banner/3-mob.webp 1x, img/content/banner/3-mob@2x.webp 2x">
                                <img src="img/content/banner/3.jpg" srcset="img/content/banner/3@2x.jpg 2x" width="767"
                                     height="350"
                                     alt="картинка" loading=lazy decoding=async>
                            </picture>
                        </div>
                    </div>
                    <div class="banner__navigation">
                        <button class="banner__btn btn-slider btn-slider--prev arrow arrow--left" type="button"
                                aria-label="предыдущий слайд"></button>
                        <div class="slider-pagination">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <button class="banner__btn btn-slider btn-slider--next arrow arrow--right" type="button"
                                aria-label="следующий слайд"></button>
                    </div>
                </div>
                <div class="main-catalog-links slider-container">
                    <ul class="aside__list swiper-wrapper">
                        <li class="aside__item swiper-slide">
                            <a href="catalogmain" class="aside__link">
                                <svg width="24" height="24">
                                    <use href="#icon-circles"></use>
                                </svg>
                                Весь каталог
                            </a>
                        </li>
                        <li class="aside__item swiper-slide">
                            <a class="aside__link" href="#!">
                                <svg width="24" height="24">
                                    <use href="#icon-tv"></use>
                                </svg>
                                Телевизоры
                            </a>
                        </li>
                        <li class="aside__item swiper-slide">
                            <a class="aside__link" href="#!">
                                <svg width="24" height="24">
                                    <use href="#icon-projector"></use>
                                </svg>
                                Проекторы
                            </a>
                        </li>
                        <li class="aside__item swiper-slide">
                            <a class="aside__link" href="#!">
                                <svg width="24" height="24">
                                    <use href="#icon-watch"></use>
                                </svg>
                                Умные часы и Браслеты
                            </a>
                        </li>
                        <li class="aside__item swiper-slide">
                            <a class="aside__link" href="#!">
                                <svg width="24" height="24">
                                    <use href="#icon-sound"></use>
                                </svg>
                                Акустические системы
                            </a>
                        </li>
                        <li class="aside__item swiper-slide">
                            <a class="aside__link" href="#!">
                                <svg width="24" height="24">
                                    <use href="#icon-headphones"></use>
                                </svg>
                                Наушники и Гарнитура
                            </a>
                        </li>
                        <li class="aside__item swiper-slide">
                            <a class="aside__link" href="#!">
                                <svg width="24" height="24">
                                    <use href="#icon-pc"></use>
                                </svg>
                                Комплектующие и ПК
                            </a>
                        </li>
                        <li class="aside__item swiper-slide">
                            <a class="aside__link" href="#!">
                                <svg width="24" height="24">
                                    <use href="#icon-x-box"></use>
                                </svg>
                                Игровые приставки и аксессуары
                            </a>
                        </li>
                        <li class="aside__item swiper-slide">
                            <a class="aside__link" href="#!">
                                <svg width="24" height="24">
                                    <use href="#icon-apple"></use>
                                </svg>
                                Apple
                            </a>
                        </li>
                    </ul>
                </div>
                <section class="product-type product-type--leader">
                    <div class="product-type__header">
                        <h2>Лидеры продаж <sup class="title-counter">27</sup></h2>
                    </div>
                    <div class="product-card-container slider-container">
                        <div class="product-card-list swiper-wrapper">
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64201" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                    <div class="product-card__img fast-order-img"
                                         data-empty="Товар на фотосессии"></div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
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
                                <div data-vendor-code="64202" class="product-card">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64203" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64204" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64205" class="product-card">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64206" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64207" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64208" class="product-card">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                <section class="product-type">
                    <div class="product-type__header">
                        <h2>Новинки<sup class="title-counter">27</sup></h2>
                    </div>
                    <div class="product-card-container slider-container">
                        <div class="product-card-list swiper-wrapper">
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64201" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                    <div class="product-card__img fast-order-img"
                                         data-empty="Товар на фотосессии"></div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
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
                                <div data-vendor-code="64202" class="product-card">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64203" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64204" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64205" class="product-card">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64206" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64207" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64208" class="product-card">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                <div class="main-banner-sale">
                    <picture>
                        <!-- 1x-768px 2x-1536px -->
                        <source media="(min-width: 768px)" type="image/webp"
                                srcset="img/content/banner-sale.webp 1x, img/content/banner-sale@2x.webp 2x">
                        <source type="image/webp"
                                srcset="img/content/banner-sale-mob.webp 1x, img/content/banner-sale-mob@2x.webp 2x">
                        <img class=content-img src="img/content/banner-sale.jpg"
                             srcset="img/content/banner-sale@2x.jpg 2x"
                             width="768" height="180" alt="баннер распродажа" loading=lazy decoding=async>
                    </picture>
                </div>
                <section class="product-type">
                    <div class="product-type__header">
                        <h2>Акции<sup class="title-counter">27</sup></h2>
                    </div>
                    <div class="product-card-container slider-container">
                        <div class="product-card-list swiper-wrapper">
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64201" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                    <div class="product-card__img fast-order-img"
                                         data-empty="Товар на фотосессии"></div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
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
                                <div data-vendor-code="64202" class="product-card">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64203" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64204" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64205" class="product-card">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64206" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64207" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64208" class="product-card">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                <div class="main-banner-sale">
                    <picture>
                        <!-- 1x-768px 2x-1536px -->
                        <source media="(min-width: 768px)" type="image/webp"
                                srcset="img/content/banner-sale.webp 1x, img/content/banner-sale@2x.webp 2x">
                        <source type="image/webp"
                                srcset="img/content/banner-sale-mob.webp 1x, img/content/banner-sale-mob@2x.webp 2x">
                        <img class=content-img src="img/content/banner-sale.jpg"
                             srcset="img/content/banner-sale@2x.jpg 2x"
                             width="768" height="180" alt="баннер распродажа" loading=lazy decoding=async>
                    </picture>
                </div>
                <section class="product-type">
                    <div class="product-type__header">
                        <h2>Вы уже смотрели<sup class="title-counter">27</sup></h2>
                    </div>
                    <div class="product-card-container slider-container">
                        <div class="product-card-list swiper-wrapper">
                            <div class="product-card-wrap swiper-slide">
                                <div data-vendor-code="64201" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                    <div class="product-card__img fast-order-img"
                                         data-empty="Товар на фотосессии"></div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
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
                                <div data-vendor-code="64202" class="product-card">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64203" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64204" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64205" class="product-card">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64206" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-1">
                                            <img src="img/content/icon/stock.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/cyber-monday.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64207" class="product-card">
                                    <div class="product-card__bonuses">
                                        <div class="bonus-icon priority-4">
                                            <img src="img/content/icon/delivery.svg" width="70" height="70" alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-3">
                                            <img src="img/content/icon/black-friday.svg" width="70" height="70"
                                                 alt="бонус">
                                        </div>
                                        <div class="bonus-icon priority-0">
                                            <img src="img/content/icon/best-seller.svg" width="70" height="70"
                                                 alt="бонус">
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                                <div data-vendor-code="64208" class="product-card">
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy
                                                 decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                            может быть
                                            в 3 строки для
                                            длинных названий</p>
                                        <s class="product-card__old-price">53 999₽</s>
                                        <b class="product-card__price">32 230₽</b>
                                        <div class="product-card__buy-wrap">
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
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
                <div class="main-form-wrap">
                    <section class="main-form">
                        <div class="main-form__title">
                            <h2>Будь в курсе новостей</h2>
                            <p>Подпишитесь на последние обновления и узнавайте о новинках и специальных предложениях
                                первыми</p>
                        </div>
                        <form class="form form--main" method="post" autocomplete="on">
                            <label class="form__field-wrap form__field-wrap--main">
                                <input type="text" name="email" placeholder="Введите email" data-validate="email"
                                       required>
                            </label>
                            <button class="form__submit btn main-form__btn" type="submit">Подписаться</button>
                            <label class="form__checkbox-wrap">
                                <input class="visually-hidden" type="checkbox" name="agreement" data-validate required>
                                <span class="checkbox-item"></span>
                                <span>Нажимая кнопку вы даете согласие на обработку персональных данных и соглашаетесь с <a
                                    class="privacy-policy-link" href="#!" data-tab="policy" data-modal-open="help">политикой
                  конфиденциальности.</a></span>
                            </label>
                        </form>
                    </section>
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
    name: "Page-Index",
    props:{
        auth_user:{
            default: null
        },
    }
}
</script>

<style scoped>

</style>
