<template>
    <div>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="catalogmain">Каталог</a>
                    <a v-if="category.title" href="#!" aria-current="location">{{ category.title }}</a>
                    <a v-if="!category.title" href="#!" aria-current="location">{{ category.filter }}</a>
                </div>
                <section class="catalog">
                    <h1 v-if="category.title" class="subtitle wrapper">{{ category.title }}
                        <sup v-if="products!==null" class="title-counter">{{ products.length }}</sup>
                        <sup v-if="products===null" class="title-counter">0</sup>
                    </h1>
                    <h1 v-if="!category.title" class="subtitle wrapper">{{ category.filter }}
                        <sup v-if="products!==null" class="title-counter">{{ products.length }}</sup>
                        <sup v-if="products===null" class="title-counter">0</sup>
                    </h1>

                    <div v-if="filters!==null" class="catalog__tags-container slider-container">
                        <form class="catalog__tags-wrapper swiper-wrapper" method="post" autocomplete="on">
                            <label class="catalog__tag-item swiper-slide" v-for="filter in filters">
                                <input class="visually-hidden filter-input" type="checkbox"
                                       :name="filter.filter.toLowerCase()" :value="filter.filter"
                                       @change="getParam(filter)">
                                <span>{{ filter.filter }}</span>
                            </label>
                        </form>
                    </div>

                    <div class="catalog__mobile-actions">
                        <button class="catalog__filter-btn-mob counter counter--purple" type="button"
                                data-modal-open="filters">
                            <svg width="24" height="24">
                                <use href="#icon-filter"></use>
                            </svg>
                            Фильтры
                        </button>
                        <button class="catalog__sort-btn-mob arrow arrow--down" type="button"
                                data-modal-open="catalog-sort">Cортировка
                        </button>
                    </div>
                    <div class="catalog__body">
                        <div class="filters-wrap modal" v-if="subcategories!==null">
                            <FiltersComponent :subcategories="subcategories" :max="maxPrice"
                            :min="minPrice"></FiltersComponent>
                        </div>
                        <div class="filters-wrap modal" v-if="subcategories===null">
                            <FiltersComponent :filters="filters" :max="maxPrice"
                                              :min="minPrice"></FiltersComponent>
                        </div>
                       <ProductsListComponent :products="products"></ProductsListComponent>
                    </div>
                </section>
                <section class="product-type product-type--catalog">
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
                <section class="catalog__review product-type">
                    <div class="product-type__header">
                        <h2>Новые обзоры в категории</h2>
                    </div>
                    <div class="catalog__review-container slider-container">
                        <div class="catalog__review-wrapper swiper-wrapper">
                            <article class="article-el swiper-slide">
                                <a href="review2" class="article-el__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="img/content/review/review.webp 1x, img/content/review/review@2x.webp 2x">
                                        <img src="img/content/review/review.jpg"
                                             srcset="img/content/review/review@2x.jpg 2x"
                                             alt="обзор гаджета" decoding="async" loading="lazy">
                                    </picture>
                                </a>
                                <div class="article-el__body">
                                    <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max,
                                        может быть в 3
                                        строки и вот таким большим</a></h3>
                                    <span class="article-el__mark has-video">
                  <span class="article-el__mark-unpack">Распаковка</span>
                </span>
                                    <p class="catalog__review-text text-limiter"> Видео разбор с ответами на самые часто
                                        задаваемые вопросы
                                        может быть большим в 3 строки, видео разбор с ответами на самые часто
                                        задаваемые</p>
                                    <a href="review2" class="link">Перейти к обзору</a>
                                </div>
                            </article>
                            <article class="article-el swiper-slide">
                                <a href="review2" class="article-el__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="img/content/review/review.webp 1x, img/content/review/review@2x.webp 2x">
                                        <img src="img/content/review/review.jpg"
                                             srcset="img/content/review/review@2x.jpg 2x"
                                             alt="обзор гаджета" decoding="async" loading="lazy">
                                    </picture>
                                </a>
                                <div class="article-el__body">
                                    <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max,
                                        может быть в 3
                                        строки и вот таким большим</a></h3>
                                    <span class="article-el__mark has-video">
                  <span class="article-el__mark-unpack">Распаковка</span>
                </span>
                                    <p class="catalog__review-text text-limiter"> Видео разбор с ответами на самые часто
                                        задаваемые вопросы
                                        может быть большим в 3 строки, видео разбор с ответами на самые часто
                                        задаваемые</p>
                                    <a href="review2" class="link">Перейти к обзору</a>
                                </div>
                            </article>
                            <article class="article-el swiper-slide">
                                <a href="review2" class="article-el__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="img/content/review/review.webp 1x, img/content/review/review@2x.webp 2x">
                                        <img src="img/content/review/review.jpg"
                                             srcset="img/content/review/review@2x.jpg 2x"
                                             alt="обзор гаджета" decoding="async" loading="lazy">
                                    </picture>
                                </a>
                                <div class="article-el__body">
                                    <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max,
                                        может быть в 3
                                        строки и вот таким большим</a></h3>
                                    <span class="article-el__mark has-video">
                  <span class="article-el__mark-unpack">Распаковка</span>
                </span>
                                    <p class="catalog__review-text text-limiter"> Видео разбор с ответами на самые часто
                                        задаваемые вопросы
                                        может быть большим в 3 строки, видео разбор с ответами на самые часто
                                        задаваемые</p>
                                    <a href="review2" class="link">Перейти к обзору</a>
                                </div>
                            </article>
                            <article class="article-el swiper-slide">
                                <a href="review2" class="article-el__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="img/content/review/review.webp 1x, img/content/review/review@2x.webp 2x">
                                        <img src="img/content/review/review.jpg"
                                             srcset="img/content/review/review@2x.jpg 2x"
                                             alt="обзор гаджета" decoding="async" loading="lazy">
                                    </picture>
                                </a>
                                <div class="article-el__body">
                                    <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max,
                                        может быть в 3
                                        строки и вот таким большим</a></h3>
                                    <span class="article-el__mark has-video">
                  <span class="article-el__mark-unpack">Распаковка</span>
                </span>
                                    <p class="catalog__review-text text-limiter"> Видео разбор с ответами на самые часто
                                        задаваемые вопросы
                                        может быть большим в 3 строки, видео разбор с ответами на самые часто
                                        задаваемые</p>
                                    <a href="review2" class="link">Перейти к обзору</a>
                                </div>
                            </article>
                            <article class="article-el swiper-slide">
                                <a href="review2" class="article-el__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="img/content/review/review.webp 1x, img/content/review/review@2x.webp 2x">
                                        <img src="img/content/review/review.jpg"
                                             srcset="img/content/review/review@2x.jpg 2x"
                                             alt="обзор гаджета" decoding="async" loading="lazy">
                                    </picture>
                                </a>
                                <div class="article-el__body">
                                    <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max,
                                        может быть в 3
                                        строки и вот таким большим</a></h3>
                                    <span class="article-el__mark has-video">
                  <span class="article-el__mark-unpack">Распаковка</span>
                </span>
                                    <p class="catalog__review-text text-limiter"> Видео разбор с ответами на самые часто
                                        задаваемые вопросы
                                        может быть большим в 3 строки, видео разбор с ответами на самые часто
                                        задаваемые</p>
                                    <a href="review2" class="link">Перейти к обзору</a>
                                </div>
                            </article>
                            <article class="article-el swiper-slide">
                                <a href="review2" class="article-el__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="img/content/review/review.webp 1x, img/content/review/review@2x.webp 2x">
                                        <img src="img/content/review/review.jpg"
                                             srcset="img/content/review/review@2x.jpg 2x"
                                             alt="обзор гаджета" decoding="async" loading="lazy">
                                    </picture>
                                </a>
                                <div class="article-el__body">
                                    <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max,
                                        может быть в 3
                                        строки и вот таким большим</a></h3>
                                    <span class="article-el__mark has-video">
                  <span class="article-el__mark-unpack">Распаковка</span>
                </span>
                                    <p class="catalog__review-text text-limiter"> Видео разбор с ответами на самые часто
                                        задаваемые вопросы
                                        может быть большим в 3 строки, видео разбор с ответами на самые часто
                                        задаваемые</p>
                                    <a href="review2" class="link">Перейти к обзору</a>
                                </div>
                            </article>
                            <article class="article-el swiper-slide">
                                <a href="review2" class="article-el__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="img/content/review/review.webp 1x, img/content/review/review@2x.webp 2x">
                                        <img src="img/content/review/review.jpg"
                                             srcset="img/content/review/review@2x.jpg 2x"
                                             alt="обзор гаджета" decoding="async" loading="lazy">
                                    </picture>
                                </a>
                                <div class="article-el__body">
                                    <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max,
                                        может быть в 3
                                        строки и вот таким большим</a></h3>
                                    <span class="article-el__mark has-video">
                  <span class="article-el__mark-unpack">Распаковка</span>
                </span>
                                    <p class="catalog__review-text text-limiter"> Видео разбор с ответами на самые часто
                                        задаваемые вопросы
                                        может быть большим в 3 строки, видео разбор с ответами на самые часто
                                        задаваемые</p>
                                    <a href="review2" class="link">Перейти к обзору</a>
                                </div>
                            </article>
                            <article class="article-el swiper-slide">
                                <a href="review2" class="article-el__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="img/content/review/review.webp 1x, img/content/review/review@2x.webp 2x">
                                        <img src="img/content/review/review.jpg"
                                             srcset="img/content/review/review@2x.jpg 2x"
                                             alt="обзор гаджета" decoding="async" loading="lazy">
                                    </picture>
                                </a>
                                <div class="article-el__body">
                                    <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max,
                                        может быть в 3
                                        строки и вот таким большим</a></h3>
                                    <span class="article-el__mark has-video">
                  <span class="article-el__mark-unpack">Распаковка</span>
                </span>
                                    <p class="catalog__review-text text-limiter"> Видео разбор с ответами на самые часто
                                        задаваемые вопросы
                                        может быть большим в 3 строки, видео разбор с ответами на самые часто
                                        задаваемые</p>
                                    <a href="review2" class="link">Перейти к обзору</a>
                                </div>
                            </article>
                            <article class="article-el swiper-slide">
                                <a href="review2" class="article-el__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="img/content/review/review.webp 1x, img/content/review/review@2x.webp 2x">
                                        <img src="img/content/review/review.jpg"
                                             srcset="img/content/review/review@2x.jpg 2x"
                                             alt="обзор гаджета" decoding="async" loading="lazy">
                                    </picture>
                                </a>
                                <div class="article-el__body">
                                    <h3><a class="text-limiter" href="review2">Iphone 11, почему такой же как и Pro Max,
                                        может быть в 3
                                        строки и вот таким большим</a></h3>
                                    <span class="article-el__mark has-video">
                  <span class="article-el__mark-unpack">Распаковка</span>
                </span>
                                    <p class="catalog__review-text text-limiter"> Видео разбор с ответами на самые часто
                                        задаваемые вопросы
                                        может быть большим в 3 строки, видео разбор с ответами на самые часто
                                        задаваемые</p>
                                    <a href="review2" class="link">Перейти к обзору</a>
                                </div>
                            </article>
                        </div>
                        <button class="btn-slider btn-slider--next arrow arrow--right" type="button"
                                aria-label="следующий слайд"></button>
                        <button class="btn-slider btn-slider--prev arrow arrow--left" type="button"
                                aria-label="предыдущий слайд"></button>
                    </div>
                </section>
            </main>
        </div>
        <footer-main></footer-main>
        <template id="template">
            <!-- На всех страницах -->
            <modal-login></modal-login>
            <modal-fast-order :product ="item"></modal-fast-order>
            <modal-register></modal-register>
            <modal-recover></modal-recover>
            <modal-recover-next></modal-recover-next>
            <modal-call></modal-call>
            <modal-location></modal-location>
            <modal-search-header></modal-search-header>
            <modal-success-order></modal-success-order>
            <modal-fail></modal-fail>
            <modal-error></modal-error>
            <modal-subscribe v-if="id!==0" :product="id"></modal-subscribe>
            <modal-help></modal-help>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </div>
</template>

<script>
import FiltersComponent from "../PagesComponents/Catalog/FiltersComponent";
import ProductsListComponent from "../PagesComponents/Products/ProductsListComponent";
import {eventBus} from "../../app";

export default {
    name: "Page-Catalog",
    components: {ProductsListComponent, FiltersComponent},
    props: {
        auth_user: {
            default: null
        },
        category: {
            default: null
        },
        subcategories: {
            default: null
        },
        filters: {
            default: null
        },
        products:{}
    },
    data(){
        return {
            isFilter: false,
            id: 0,
            item: []
        }
    },

    computed:{
        minPrice(){
            return Math.min.apply(null, this.products.map(item=>item.new_price))
        },
        maxPrice(){
            return Math.max.apply(null, this.products.map(item=>item.new_price))
        }
    },
    methods:{
        getParam(filter){
            this.isFilter = !this.isFilter
            if(this.isFilter===false) {
                filter.id = 0
            }
            eventBus.$emit('paramFilter', filter.id)
        },
        getProductSubscribe(id){
            this.id = id
        },
        makeFastBuy(product){
            this.item = product
        }
    },
    created() {
        eventBus.$on('subscribeProduct', this.getProductSubscribe)
        eventBus.$on('fastBuy', this.makeFastBuy)
    }
}
</script>

<style scoped>

</style>
