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
                    <a href="waitlist" aria-current="location">Лист ожидания</a>
                </div>
                <div class="lk lk-wl">
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
                            <div class="lk-wl__header">
                                <div class="lk-wl__title-wrap">
                                    <h2 class="title">Лист ожидания</h2>
                                    <button class="lk-wl__list-remove" type="button">Удалить весь список
                                        <svg width="18" height="18">
                                            <use href="#icon-delete"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="lk-wl__select-wrap">
                                    <div class="lk-wl__sort">
                                        <input id="old" class="visually-hidden" type="radio" value="old" name="sort">
                                        <input id="new" class="visually-hidden" type="radio" value="new" name="sort" checked>
                                        <label class="arrow arrow--down" for="old"><span
                                            class="sort-title">Сортировать:</span><span
                                            class="sort-type">По дате добавления</span></label>
                                        <label class="arrow arrow--up" for="new"><span
                                            class="sort-title">Сортировать:</span><span
                                            class="sort-type">По дате добавления</span></label>
                                    </div>
                                    <div class="lk-wl__wait-info"><span>4/8</span> товаров в ожидании</div>
                                </div>
                            </div>
                            <div class="lk-wl__list">
                                <div class="product-card-wrap">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
                                                <svg width="16" height="16">
                                                    <use href="#icon-delete"></use>
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
                                            <span class="product-card__price">32 230₽</span>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple lk-wl__buy add-to-cart" type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
                                                <svg width="16" height="16">
                                                    <use href="#icon-delete"></use>
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
                                            <span class="product-card__price">32 230₽</span>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-gray lk-wl__buy" type="button">Нет в наличии</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
                                                <svg width="16" height="16">
                                                    <use href="#icon-delete"></use>
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
                                            <span class="product-card__price">32 230₽</span>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple lk-wl__buy add-to-cart" type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
                                                <svg width="16" height="16">
                                                    <use href="#icon-delete"></use>
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
                                            <span class="product-card__price">32 230₽</span>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple lk-wl__buy add-to-cart" type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
                                                <svg width="16" height="16">
                                                    <use href="#icon-delete"></use>
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
                                            <span class="product-card__price">32 230₽</span>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple lk-wl__buy add-to-cart" type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
                                                <svg width="16" height="16">
                                                    <use href="#icon-delete"></use>
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
                                            <span class="product-card__price">32 230₽</span>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple lk-wl__buy add-to-cart" type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
                                                <svg width="16" height="16">
                                                    <use href="#icon-delete"></use>
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
                                            <span class="product-card__price">32 230₽</span>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple lk-wl__buy add-to-cart" type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-wrap">
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
                                            <button class="product-card__icon icon-type-favorite" type="button"
                                                    aria-label="добавить в избранное">
                                                <svg width="16" height="16">
                                                    <use href="#icon-favorite"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-equal" type="button"
                                                    aria-label="добавить к сравнению">
                                                <svg width="16" height="16">
                                                    <use href="#icon-equal"></use>
                                                </svg>
                                                <span></span>
                                            </button>
                                            <button class="product-card__icon icon-type-delete" type="button"
                                                    aria-label="удалить">
                                                <svg width="16" height="16">
                                                    <use href="#icon-delete"></use>
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
                                            <span class="product-card__price">32 230₽</span>
                                            <div class="product-card__buy-wrap">
                                                <button class="btn btn-purple lk-wl__buy add-to-cart" type="button"><span
                                                    class="counter counter--red">В корзину</span></button>
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
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-WaitList",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
