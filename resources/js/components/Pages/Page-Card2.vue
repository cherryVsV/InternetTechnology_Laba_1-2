<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="#">Каталог товаров</a>
                    <a href="#">Apple</a>
                    <a href="#">iPhone Pro Max</a>
                    <a href="#" aria-current="location">Смартфон Apple iPhone 11 Pro Max 64GB</a>
                </div>
                <div class="card-preview">
                    <div class="product-card-wrap">
                        <div data-vendor-code="064254" class="product-card card-preview__card product-card--m-icon">
                            <div class="product-card__bonuses">
                                <div class="bonus-icon priority-2">
                                    <img src="img/content/icon/discount.svg" width="70" height="70" alt="бонус">
                                </div>
                                <div class="bonus-icon priority-5">
                                    <img src="img/content/icon/gift.svg" width="70" height="70" alt="бонус">
                                </div>
                                <div class="bonus-icon priority-0">
                                    <img src="img/content/icon/new.svg" width="70" height="70" alt="бонус">
                                    <div class="tooltip-bonus">
                                        <div class="tooltip-bonus__inner">
                                            <b>Бесплатная доставка</b>
                                            <p>Доставим ваш заказ бесплатно в любую точку России. <a href="#">Подробнее</a></p>
                                        </div>
                                    </div>
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
                                <button class="product-card__icon icon-type-share" type="button" aria-label="поделиться">
                                    <svg width="16" height="16">
                                        <use href="#icon-share"></use>
                                    </svg>
                                    <span></span>
                                </button>
                            </div>
                            <div class="card-preview__slider slider-container">
                                <div class="preview-slider-container slider-container">
                                    <div class="preview-slider swiper-wrapper">
                                        <div class="preview-slider-img swiper-slide" data-empty="Товар на фотосессии"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-preview__title">
                                <small class="product-card__name">Смарт-часы</small>
                                <small class="product-card__vendor-code">Арт. 064206</small>
                                <p class="product-card-desc">Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid
                                    2019 MVFL2
                                    (i51600/8Gb/256Gb SSD) EU (Уцененный)</p>
                                <p class="card-preview__assets">Нет в наличии</p>
                                <div class="card-preview__for-desktop">
                                    <a class="card-preview__rating-anchor anchor-link" href="#feedback-tab">
                                        <span class="star-rating star-rating--4"></span>
                                        <span class="card-preview__feedback">243 отзыва</span>
                                    </a>
                                    <div class="product-card__icons">
                                        <button class="product-card__icon icon-type-equal" type="button"
                                                aria-label="добавить к сравнению">
                                            <svg width="16" height="16">
                                                <use href="#icon-equal"></use>
                                            </svg>
                                            <span>Сравнить</span>
                                        </button>
                                        <button class="product-card__icon icon-type-favorite" type="button"
                                                aria-label="добавить в избранное">
                                            <svg width="16" height="16">
                                                <use href="#icon-favorite"></use>
                                            </svg>
                                            <span>В избранное</span>
                                        </button>
                                        <button class="product-card__icon icon-type-share" type="button"
                                                aria-label="поделиться">
                                            <svg width="16" height="16">
                                                <use href="#icon-share"></use>
                                            </svg>
                                            <span>Поделиться</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-preview__price-rating">
                                <div class="star-rating star-rating--5"></div>
                            </div>
                            <div class="card-preview__buy">
                                <div class="card-preview__buy-wrap">
                                    <button class="card-preview__subscribe btn btn-purple" type="button"
                                            data-modal-open="subscribe">Подписаться
                                    </button>
                                </div>
                            </div>
                            <div class="card-preview__footer">
                                <dl class="card-preview__options-list">
                                    <div>
                                        <dt>Диагональ:</dt>
                                        <dd>6.7</dd>
                                    </div>
                                    <div>
                                        <dt>Разрешение:</dt>
                                        <dd>2400х1080</dd>
                                    </div>
                                    <div>
                                        <dt>Встроенная память(ГБ):</dt>
                                        <dd>128</dd>
                                    </div>
                                    <div>
                                        <dt>Камера(Мп):</dt>
                                        <dd>64</dd>
                                    </div>
                                    <div>
                                        <dt>Звуковая система:</dt>
                                        <dd>SONOS</dd>
                                    </div>
                                </dl>
                                <a class="card-preview__all-features anchor-link" href="#features-tab">Посмотреть все
                                    характеристики</a>
                                <p class="card-preview__assets">Нет в наличии</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-special">
                    <div class="card-special__col">
                        <h3 class="card-special__title">Доставка в <span data-modal-open="location"> Санкт-Петербург</span>
                            <svg width="24" height="24">
                                <use href="#icon-location"></use>
                            </svg>
                        </h3>
                        <dl class="card-special__list">
                            <dt>Доставка курьером, завтра, 11 сентября</dt>
                            <dd>Бесплатно</dd>
                            <dt>Самовывоз, сегодня, 10 сентября</dt>
                            <dd>390p.</dd>
                            <dt>Доставка ТК по РФ</dt>
                            <dd>390p.</dd>
                        </dl>
                    </div>
                    <div class="card-special__col">
                        <h3 class="card-special__title">Гарантии
                            <svg width="24" height="24">
                                <use href="#icon-garanty"></use>
                            </svg>
                        </h3>
                        <dl class="card-special__list">
                            <dt>Стандартная гарантия 12 мес.</dt>
                            <dd>Гарантия от производителя</dd>
                            <dt>14 дней на возврат</dt>
                            <dd>Если вы обнаружили брак или вам не подошла вещь, вы можете вернуть её нам.</dd>
                        </dl>
                    </div>
                    <div class="card-special__col">
                        <h3 class="card-special__title">Способы оплаты
                            <svg width="24" height="24">
                                <use href="#icon-info"></use>
                            </svg>
                        </h3>
                        <dl class="card-special__list">
                            <dt>Банковская карта</dt>
                            <dd>Visa, MasterCard, Maestro, American Express</dd>
                            <dt>Наличная оплата</dt>
                            <dd>Курьеру, в пункте выдачи</dd>
                            <dt>В кредит/рассрочку</dt>
                            <dd>Без переплат</dd>
                        </dl>
                    </div>
                </div>
                <div class="card-main">
                    <div class="card-main__set-wrap">
                        <div class="set-cards slider-container">
                            <h2>Выгодно вместе</h2>
                            <div class="set-cards__container">
                                <div class="set-cards__slider">
                                    <div class="set-cards__item">
                                        <div class="set-cards__img-wrap">
                                            <picture>
                                                <!-- 1x-165px/108px 2x-330px/216px -->
                                                <source type="image/webp"
                                                        srcset="img/content/watch.webp 1x, img/content/watch@2x.webp 2x">
                                                <img class=content-img src="img/content/watch.jpg"
                                                     srcset="img/content/watch@2x.jpg 2x"
                                                     width="165" height="108" alt="apple watch" loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="set-cards__info">
                                            <small class="set-cards__name">Смарт-часы</small>
                                            <p class="set-cards__desc product-card-desc">Apple Watch 5 series 44mm+ремешек
                                                HERMES, макс. может
                                                быть в 3 строки для длинных названий</p>
                                            <s class="set-cards__old-price">53 999₽</s>
                                            <b class="set-cards__price">32 230₽</b>
                                        </div>
                                    </div>
                                    <div class="set-cards__item">
                                        <div class="set-cards__img-wrap">
                                            <picture>
                                                <!-- 1x-165px/108px 2x-330px/216px -->
                                                <source type="image/webp"
                                                        srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                                <img class=content-img src="img/content/phone-small.jpg"
                                                     srcset="img/content/phone-small@2x.jpg 2x" width="165" height="108"
                                                     alt="apple watch"
                                                     loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <div class="set-cards__info">
                                            <small class="set-cards__name">Смарт-часы</small>
                                            <p class="set-cards__desc product-card-desc">Apple Watch 5 series 44mm+ремешек
                                                HERMES, макс. может
                                                быть в 3 строки для длинных названий</p>
                                            <s class="set-cards__old-price">53 999₽</s>
                                            <b class="set-cards__price">32 230₽</b>
                                        </div>
                                    </div>
                                    <div class="set-cards__item">
                                        <div class="set-cards__price-wrp">
                                            <b class="set-cards__price">32 230₽</b>
                                            <s class="set-cards__old-price">53 999₽</s>
                                        </div>
                                        <button class="set-cards__btn set-cards__btn--complex btn btn-purple add-to-cart"
                                                type="button">
                                            <svg width="24" height="24">
                                                <use href="#icon-cart"></use>
                                            </svg>
                                            <span class="counter counter--red">Купить комплект</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-main__body">
                        <section class="product-type card-main__slider">
                            <div class="product-type__header">
                                <h2>С этим обычно покупают<sup class="title-counter">135</sup></h2>
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
                                                    может быть в 3 строки
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
                                                         srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                         alt="Sumsung phone"
                                                         loading=lazy decoding=async>
                                                </picture>
                                            </div>
                                            <div class="product-card__info">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                                <div class="product-card__buy-wrap">
                                                    <button class="btn btn-white product-card__buy" type="button"
                                                            data-modal-open="fast-order">Купить в один клик
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
                                                         srcset="img/content/watch@2x.jpg 2x"
                                                         width="179" height="108" alt="Apple watch" loading=lazy decoding=async>
                                                </picture>
                                            </div>
                                            <div class="product-card__info">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                                <div class="product-card__buy-wrap">
                                                    <button class="btn btn-white product-card__buy" type="button"
                                                            data-modal-open="fast-order">Купить в один клик
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
                                                         srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                         alt="Sumsung phone"
                                                         loading=lazy decoding=async>
                                                </picture>
                                            </div>
                                            <div class="product-card__info">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                                <div class="product-card__buy-wrap">
                                                    <button class="btn btn-white product-card__buy" type="button"
                                                            data-modal-open="fast-order">Купить в один клик
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
                                                         srcset="img/content/watch@2x.jpg 2x"
                                                         width="179" height="108" alt="Apple watch" loading=lazy decoding=async>
                                                </picture>
                                            </div>
                                            <div class="product-card__info">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                                <div class="product-card__buy-wrap">
                                                    <button class="btn btn-white product-card__buy" type="button"
                                                            data-modal-open="fast-order">Купить в один клик
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
                                                         srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                         alt="Sumsung phone"
                                                         loading=lazy decoding=async>
                                                </picture>
                                            </div>
                                            <div class="product-card__info">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                                <div class="product-card__buy-wrap">
                                                    <button class="btn btn-white product-card__buy" type="button"
                                                            data-modal-open="fast-order">Купить в один клик
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
                                                         srcset="img/content/watch@2x.jpg 2x"
                                                         width="179" height="108" alt="Apple watch" loading=lazy decoding=async>
                                                </picture>
                                            </div>
                                            <div class="product-card__info">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                                <div class="product-card__buy-wrap">
                                                    <button class="btn btn-white product-card__buy" type="button"
                                                            data-modal-open="fast-order">Купить в один клик
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
                                                         srcset="img/content/phone-small@2x.jpg 2x" width="179" height="108"
                                                         alt="Sumsung phone"
                                                         loading=lazy decoding=async>
                                                </picture>
                                            </div>
                                            <div class="product-card__info">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                                <div class="product-card__buy-wrap">
                                                    <button class="btn btn-white product-card__buy" type="button"
                                                            data-modal-open="fast-order">Купить в один клик
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
                        <div class="card-main__accordion accordion">
                            <h3 class="card-main__accordion-title accordion__title arrow arrow--down ">
                                О товаре
                            </h3>
                            <div class="accordion__content card-main__accordion-content ">
                                <strong class="card-main__product-name">Apple MacBook Air 13 дисплей Retina с технологией True
                                    Tone Mid
                                    2019 MVFL2 (i51600/8Gb/256Gb SSD) EU (Уцененный)</strong>
                                <div class="card-main__text-block">
                                    <b>НИЧЕГО ЛИШНЕГО. ТОЛЬКО САМОЕ</b>
                                    <p>Новая система двух камер не оставит никого из ваших друзей за кадром. Самый быстрый
                                        процессор iPhone
                                        и мощный аккумулятор позволят больше делать и тратить меньше времени на подзарядку. А
                                        высочайшее
                                        качество видео на iPhone означает, что ваши истории станут еще ярче и детальнее.</p>
                                </div>
                                <div class="card-main__text-block">
                                    <b>ПЛОХОЕ ФОТО? НЕ ВЫЙДЕТ</b>
                                    <p>Новая система двух камер. Можно делать фотоснимки с широким и сверхшироким углом обзора.
                                        Обновленный
                                        интерфейс и новая сверхширокоугольная камера позволят увидеть и снять то, что происходит
                                        за пределами
                                        кадра. Снимать и редактировать видеоролики теперь так же легко, как фотографии. Это
                                        по-прежнему
                                        невероятно популярная камера, но с совершенно новыми перспективами.</p>
                                </div>
                                <div class="card-main__text-block">
                                    <b>СНИМАЙТЕ ВИДЕО ВЫСОЧАЙШЕГО КАЧЕСТВА. И РЕДАКТИРУЙТЕ ЕГО</b>
                                    <p>На все камеры iPhone 11 можно снимать невероятно четкое видео 4K с частотой 60 кадров/﻿с.
                                        С
                                        объективом сверхширокоугольной камеры область изображения в четыре раза больше. Поэтому
                                        камера
                                        отлично подходит для съемки сцен с движением - например, как ваша собака гоняется за
                                        мячом. А если,
                                        скажем, вы записываете выступление ребенка на концерте и приближаете изображение, звук
                                        приближается
                                        тоже. Кроме того, редактировать видео теперь так же легко, как фото. </p>
                                </div>
                                <div class="card-main__text-block">
                                    <b>НОВАЯ СВЕРХШИРОКОУГОЛЬНАЯ КАМЕРА</b>
                                    <p>Снимайте с размахом - с новой сверхширокоугольной камерой область изображения в четыре
                                        раза больше. В
                                        кадр поместится все. Бескрайние пейзажи. Сцена вместе со зрителями на музыкальном
                                        фестивале. Вся семья
                                        на фоне умопомрачительных видов, ради которых вы пролетели тысячи километров. </p>
                                </div>
                                <div class="card-main__text-block">
                                    <b>НИЧЕГО ЛИШНЕГО. ТОЛЬКО САМОЕ</b>
                                    <p>Новая система двух камер не оставит никого из ваших друзей за кадром. Самый быстрый
                                        процессор iPhone
                                        и мощный аккумулятор позволят больше делать и тратить меньше времени на подзарядку. А
                                        высочайшее
                                        качество видео на iPhone означает, что ваши истории станут еще ярче и детальнее. </p>
                                </div>
                                <div class="card-main__text-block">
                                    <b>ПЛОХОЕ ФОТО? НЕ ВЫЙДЕТ</b>
                                    <p>Новая система двух камер. Можно делать фотоснимки с широким и сверхшироким углом обзора.
                                        Обновленный
                                        интерфейс и новая сверхширокоугольная камера позволят увидеть и снять то, что происходит
                                        за пределами
                                        кадра. Снимать и редактировать видеоролики теперь так же легко, как фотографии. Это
                                        по-прежнему
                                        невероятно популярная камера, но с совершенно новыми перспективами. </p>
                                </div>
                                <div class="card-main__text-block">
                                    <b>СНИМАЙТЕ ВИДЕО ВЫСОЧАЙШЕГО КАЧЕСТВА. И РЕДАКТИРУЙТЕ ЕГО</b>
                                    <p>На все камеры iPhone 11 можно снимать невероятно четкое видео 4K с частотой 60 кадров/﻿с.
                                        С
                                        объективом сверхширокоугольной камеры область изображения в четыре раза больше. Поэтому
                                        камера
                                        отлично подходит для съемки сцен с движением - например, как ваша собака гоняется за
                                        мячом. А если,
                                        скажем, вы записываете выступление ребенка на концерте и приближаете изображение, звук
                                        приближается
                                        тоже. Кроме того, редактировать видео теперь так же легко, как фото. На все камеры
                                        iPhone 11 можно
                                        снимать невероятно четкое видео 4K с частотой 60 кадров/﻿с. С объективом
                                        сверхширокоугольной камеры
                                        область изображения в четыре раза больше. Поэтому камера отлично подходит для съемки
                                        сцен с движением
                                        - например, как ваша собака гоняется за мячом. А если, скажем, вы записываете
                                        выступление ребенка на
                                        концерте и приближаете изображение, звук приближается тоже. Кроме того, редактировать
                                        видео теперь так
                                        же легко, как фото.</p>
                                </div>
                                <div class="card-main__text-block">
                                    <b>НОВАЯ СВЕРХШИРОКОУГОЛЬНАЯ КАМЕРА</b>
                                    <p>Снимайте с размахом - с новой сверхширокоугольной камерой область изображения в четыре
                                        раза больше. В
                                        кадр поместится все. Бескрайние пейзажи. Сцена вместе со зрителями на музыкальном
                                        фестивале. Вся семья
                                        на фоне умопомрачительных видов, ради которых вы пролетели тысячи километров. </p>
                                </div>
                            </div>
                            <h3 class="card-main__accordion-title accordion__title arrow arrow--down " id=features-tab>
                                Характеристики
                            </h3>
                            <div class="accordion__content card-main__accordion-content ">
                                <h4>Связь</h4>
                                <dl class="card-main__features">
                                    <dt>Спутниковая навигация</dt>
                                    <dd>Встроенный модуль GPS/ГЛОНАСС / Цифровой компас / Wi-Fi / Сотовая связь / Функция
                                        точного
                                        определения местоположения iBeacon
                                    </dd>
                                    <dt>Поддержка Bluetooth</dt>
                                    <dd>Bluetooth 5.0</dd>
                                    <dt>Поддержка Wi-Fi</dt>
                                    <dd>Wi-Fi 802.11ax (Wi-Fi 6) с технологией MIMO 2×2</dd>
                                    <dt>Поддержка 3G/4G/LTE</dt>
                                    <dd>Gigabit Class LTE с технологиями MIMO 4×4 и LAA</dd>
                                </dl>
                                <h4>Питание</h4>
                                <dl class="card-main__features">
                                    <dt>Время работы</dt>
                                    <dd>Работает без подзарядки до 4 часов дольше, чем iPhone XS / Воспроизведение видео по
                                        беспроводной
                                        сети: до 18 часов / Просмотр видео в режиме стриминга по беспроводной сети: до 11 часов
                                        /
                                        Воспроизведение аудио по беспроводной сети: до 65 часов
                                    </dd>
                                    <dt>Время зарядки</dt>
                                    <dd>Возможность быстрой зарядки (до 50% заряда за 30 минут при использовании адаптера
                                        мощностью 18 Вт
                                        или выше) / Беспроводная зарядка (поддерживаются зарядные устройства стандарта Qi) /
                                        Зарядка от
                                        адаптера питания или через USB-порт компьютера
                                    </dd>
                                </dl>
                                <h4>Дисплей</h4>
                                <dl class="card-main__features">
                                    <dt>Диагональ дисплея</dt>
                                    <dd>5,8 дюйма (фактическая область просмотра меньше)</dd>
                                    <dt>Разрешение дисплея</dt>
                                    <dd>2436×1125 пикселя, 458 пикселей на дюйм / Контрастность 2 000 000:1 (стандартная) /
                                        Яркость до 800
                                        кд/м² (стандартная), до 1200 кд/м² при просмотре контента в формате HDR
                                    </dd>
                                </dl>
                                <h4>Мультимедийные возможности</h4>
                                <dl class="card-main__features">
                                    <dt>Фотокамера</dt>
                                    <dd>Система трёх камер 12 Мп: сверхширокоугольная, широкоугольная и телефото /
                                        Сверхширокоугольная:
                                        диафрагма ƒ/2.4 и угол обзора 120° / Широкоугольная: диафрагма ƒ/1.8 / Телефото:
                                        диафрагма ƒ/2.0 /
                                        Двукратный оптический зум на увеличение; двукратный оптический зум на уменьшение;
                                        цифровой зум (до 10
                                        раз для фото, до 6 раз для видео) / Режим «Портрет» с улучшенным эффектом боке и
                                        функцией «Глубина» /
                                        Режим «Таймлапс» со стабилизацией изображения / Портретное освещение (шесть вариантов:
                                        Дневной свет,
                                        Студийный свет, Контурный свет, Сценический свет, Сценический свет — ч/б, Светлая
                                        тональность — ч/б) /
                                        Двойная оптическая стабилизация изображения при фото и видеосъёмке (широкоугольная
                                        камера и
                                        телефотокамера) / Автоматическая стабилизация изображения / Кинематографическая
                                        стабилизация видео
                                        (4K, 1080p и 720p) / Пятилинзовый объектив (сверхширокоугольная камера); шестилинзовый
                                        объектив
                                        (широкоугольная камера и телефото) / Более яркая вспышка True Tone с функцией Slow Sync
                                        / Панорамная
                                        съёмка (с разрешением до 63 Мп) / Поддержка Focus Pixels на всей матрице (широкоугольная
                                        камера) /
                                        Расширенный динамический диапазон при съёмке видео с частотой до 60 кадров﻿/﻿с / Ночной
                                        режим /
                                        Автокоррекция / Следящий автофокус / Функция Smart HDR нового поколения для фото /
                                        Широкий цветовой
                                        диапазон для фотографий и Live Photos / Передовая система устранения эффекта красных
                                        глаз / Привязка
                                        фотографий к месту съёмки / Серийная съёмка / Возможность съёмки фотографий 8 Мп во
                                        время записи видео
                                        4К / Функция QuickTake для быстрого переключения в режим видео с отслеживанием объекта
                                        съёмки /
                                        Форматы изображений: HEIF и JPEG / Форматы HEVC и H.264 / Стереозвук / Аудиозум /
                                        Увеличение при
                                        воспроизведении
                                    </dd>
                                </dl>
                            </div>
                            <h3 class="card-main__accordion-title accordion__title arrow arrow--down " id=feedback-tab>
                                Отзывы
                                <sup class="title-counter">7</sup>
                            </h3>
                            <div class="accordion__content card-main__accordion-content card-main__accordion-content--feedback">
                                <div class="card-main__rating">
                                    <h4>Рейтинг пользователей</h4>
                                    <div class="card-main__rating-header">
                                        <span class="card-main__rating-score">5,0</span>
                                        <div class="card-main__rating-star">
                                            <div class="star-rating star-rating--5"></div>
                                            <span class="card-main__feedback-count">243 отзыва</span>
                                        </div>
                                    </div>
                                    <div class="card-main__statistic">
                                        <div>
                                            5
                                            <meter value="0.4"></meter>
                                            <span>1234</span>
                                        </div>
                                        <div>
                                            4
                                            <meter value="0.8"></meter>
                                            <span>4567</span>
                                        </div>
                                        <div>
                                            3
                                            <meter value="0.3"></meter>
                                            <span>5692</span>
                                        </div>
                                        <div>
                                            2
                                            <meter value="0.6"></meter>
                                            <span>10997</span>
                                        </div>
                                        <div>
                                            1
                                            <meter value="0.1"></meter>
                                            <span>2222</span>
                                        </div>
                                    </div>
                                    <div class="card-main__rating-footer">
                                        <p>Для расчёта рейтинга используются общие оценки товара и оценки по характеристикам за
                                            всё время.
                                            Оставьте свой отзыв о товаре:</p>
                                        <button class="card-main__btn-feedback btn btn-purple" type="button"
                                                data-modal-open="feedback-full">Оставить отзыв
                                        </button>
                                    </div>
                                </div>
                                <div class="card-main__feedback">
                                    <div class="card-main__feedback-author">
                                        <b class="card-main__person">Медведев Анатолий
                                            <svg width="18" height="18">
                                                <use href="#icon-like"></use>
                                            </svg>
                                        </b>
                                        <time datetime="2020-09-11">11 сентября 2020</time>
                                        <div class="card-main__experience">
                                            Опыт использования:&nbsp;<span> несколько месяцев</span>
                                        </div>
                                        <dl class="card-main__feedback-list">
                                            <dt>Качество</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                            <dt>Сервис</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                            <dt>Доставка</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                        </dl>
                                    </div>
                                    <div class="card-main__feedback-content">
                                        <div class="card-main__feedback-top">
                                            <h5>Достоинства:</h5>
                                            <ul class="unmarked-list">
                                                <li>Хорошая автономная работа</li>
                                                <li>Хорошая камера</li>
                                                <li>Производительность</li>
                                                <li>Интересные цвета корпуса</li>
                                            </ul>
                                            <h5>Недостатки</h5>
                                            <ul class="unmarked-list">
                                                <li>Размер</li>
                                                <li>Крепкое заднее стекло</li>
                                            </ul>
                                            <h5>Комментарий</h5>
                                            <p>После 8ки пересел на 11, решил что 6"1 не станет проблемой - но ошибся, не смотря
                                                на мои
                                                достаточно большие
                                                руки, пользоваться одной рукой из-за некоторых нюансов интерфейса</p>
                                        </div>
                                        <div class="card-main__feedback-gallery slider-container">
                                            <div class="card-main__feedback-slider swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="img/content/fb1.jpg" alt="задняя крышка телефона" loading="lazy"
                                                         decoding="async">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="img/content/fb2.jpg" alt="боковая сторона телефона" loading="lazy"
                                                         decoding="async">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="img/content/fb3.jpg" alt="боковая сторона телефона" loading="lazy"
                                                         decoding="async">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="img/content/fb4.jpg" alt="боковая сторона телефона" loading="lazy"
                                                         decoding="async">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-main__feedback-bottom">
                                            <b class="card-main__person">Администратор MediaShop 24</b>
                                            <time datetime="2020-09-11">11 сентября 2020</time>
                                            <p>Спасибо за ваш комментарий. Вы абсолютно правы.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="card-main__show-more arrow arrow--down" type="button">Показать больше</button>
                                <button class="card-main__show-all" type="button">Посмотреть все отзывы</button>
                                <div class="pagination card-main__pagination">
                                    <a href="#!" aria-current="location">1</a>
                                    <a href="#!">2</a>
                                    <a href="#!">3</a>
                                </div>
                            </div>
                            <h3 class="card-main__accordion-title accordion__title arrow arrow--down card-main__accordion-review">
                                Обзоры
                            </h3>
                            <div class="accordion__content card-main__accordion-content ">
                                <div class="card-main__iframe"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="product-type">
                    <div class="product-type__header">
                        <h2>Похожие товары<sup class="title-counter">135</sup></h2>
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
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                        <h2>Вы уже смотрели<sup class="title-counter">135</sup></h2>
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
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 srcset="img/content/phone-small@2x.jpg 2x"
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 srcset="img/content/watch@2x.jpg 2x" width="179"
                                                 height="108" alt="Apple watch" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                                                 width="179" height="108" alt="Sumsung phone" loading=lazy decoding=async>
                                        </picture>
                                    </div>
                                    <div class="product-card__info">
                                        <small class="product-card__name">Смарт-часы</small>
                                        <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс. может быть
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
                <div class="options-slider slider-container">
                    <div class="options-slider__wrapper swiper-wrapper">
                        <div class="options-slider__slide swiper-slide">
                            <svg width="45" height="45">
                                <use href="#icon-location"></use>
                            </svg>
                            <strong>100500 пунктов выдачи</strong>
                            <p>Покупки можно забрать где угодно</p>
                        </div>
                        <div class="options-slider__slide swiper-slide">
                            <svg width="45" height="45">
                                <use href="#icon-card"></use>
                            </svg>
                            <strong>Оплата любым способом</strong>
                            <p>5 способов оплаты для вашего удобства</p>
                        </div>
                        <div class="options-slider__slide swiper-slide">
                            <svg width="45" height="45">
                                <use href="#icon-clock"></use>
                            </svg>
                            <strong>Онлайн кредит от 5 минут</strong>
                            <p>Просто и быстро: нужен только паспорт</p>
                        </div>
                        <div class="options-slider__slide swiper-slide">
                            <svg width="45" height="45">
                                <use href="#icon-guard"></use>
                            </svg>
                            <strong>Сервисное обслуживание</strong>
                            <p>Поможем с ремонтом товара и предоставим аппарат на замену.</p>
                        </div>
                        <div class="options-slider__slide swiper-slide">
                            <svg width="45" height="45">
                                <use href="#icon-airplane"></use>
                            </svg>
                            <strong>Удобная и быстрая доставка</strong>
                            <p>Мы предлагаем широкий выбор способов получения заказа</p>
                        </div>
                    </div>
                    <div class="preview-slider-navigation">
                        <div class="slider-pagination">
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
            <modal-card-slider></modal-card-slider>
            <modal-feedback-slider></modal-feedback-slider>
            <modal-feedback></modal-feedback>
            <modal-feedback-full></modal-feedback-full>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>

</template>

<script>
export default {
    name: "Page-Card2",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
