<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="#!" aria-current="location">Trade-In не победим</a>
                </div>
                <section class="stock">
                    <div class="stock__header wrapper">
                        <div class="stock__title">
                            <h1 class="title">Trade-In не победим</h1>
                            <div class="stock__timer">
                                <span>До окончания:&nbsp;</span>
                                <span class="stock-timer-js">
                <span>11 дней</span>, <span>16</span>:<span>35</span>:<span>46</span>
              </span>
                            </div>
                        </div>
                        <p>В этом ролике мы посмотрим на небольшой "не умный" телевизор от компании Philips - Philips 32PHS4203.
                            Эта
                            модель стоит менее 15000 рублей и отлично подойдет тем, кому не нужен функционал Smart TV</p>
                    </div>
                    <div class="stock__img">
                        <picture>
                            <!-- 1x-2560px/250px 2x-5120px/500px -->
                            <source type="image/webp" srcset="img/content/stock.webp 1x, img/content/stock@2x.webp 2x">
                            <img src="img/content/stock.jpg" srcset="img/content/stock@2x.jpg 2x" width="2560" height="250"
                                 alt="картинка" loading=lazy decoding=async>
                        </picture>
                    </div>
                </section>
                <section class="catalog catalog--stock">
                    <h2 class="subtitle wrapper">Акционные товары<sup class="title-counter">27</sup></h2>
                    <div class="catalog__tags-container slider-container">
                        <form class="catalog__tags-wrapper swiper-wrapper" method="post" autocomplete="on">
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="sony" value="Sony">
                                <span>Sony</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="samsung" value="Samsung">
                                <span>Samsung</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="lg" value="LG">
                                <span>LG</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="phillips" value="Phillips">
                                <span>Phillips</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="proCaster" value="ProCaster">
                                <span>ProCaster</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="panasonic" value="Panasonic">
                                <span>Panasonic</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="business" value="Для бизнеса">
                                <span>Для бизнеса</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="living-room"
                                       value="Для гостиной">
                                <span>Для гостиной</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="cinema" value="Для киноманов">
                                <span>Для киноманов</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="kitchen" value="Для кухни">
                                <span>Для кухни</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="bedroom" value="Для спальни">
                                <span>Для спальни</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="country-house"
                                       value="Для дачи">
                                <span>Для дачи</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="lcd" value="ЖК(LCD)">
                                <span>ЖК(LCD)</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="led" value="ЖК(LED)">
                                <span>ЖК(LED)</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="nanocell" value="Nano Cell">
                                <span>Nano Cell</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="oled" value="OLED">
                                <span>OLED</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="qled" value="QLED">
                                <span>QLED</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="less20" value="до 20”">
                                <span>до 20”</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="20-30" value="20”-30”">
                                <span>20”-30”</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="30-40" value="30”-40”">
                                <span>30”-40”</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="40-50" value="40”-50”">
                                <span>40”-50”</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="50-60" value="50”-60”">
                                <span>50”-60”</span>
                            </label>
                            <label class="catalog__tag-item swiper-slide">
                                <input class="visually-hidden filter-input" type="checkbox" name="more60" value="более 60”">
                                <span>более 60”</span>
                            </label>
                        </form>
                    </div>
                    <div class="catalog__mobile-actions">
                        <button class="catalog__filter-btn-mob counter counter--purple" type="button" data-modal-open="filters">
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
                        <div id="filters" class="filters-wrap modal">
                            <form class="filters" method="post" autocomplete="on">
                                <h2 class="filters__caption">Фильтр</h2>
                                <div class="filters__fieldset">
                                    <div class="filters__title filters__title--price filters__title-active arrow arrow--down">
                                        Цена
                                    </div>
                                    <div class="filters__list double-range" data-min="1000" data-max="100000" data-step="1000"
                                         data-low="20000" data-high="50000">
                                        <fieldset class="double-range-inner">
                                            <legend class="visually-hidden">диапазон цен</legend>
                                            <output data-key="low" data-value="">От</output>
                                            <output data-key="high" data-value="">До</output>
                                            <div class="range-wrap">
                                                <div class="track"></div>
                                                <label class="thumb" data-key="low" aria-label="минимальное значение">
                                                    <input class="visually-hidden" type="range" name="value_from"
                                                           data-key="low">
                                                </label>
                                                <label class="thumb" data-key="high" aria-label="максимальное значение">
                                                    <input class="visually-hidden" type="range" name="value_to" data-key="high">
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <label class="filters__item sort-fieldset-checkbox filters__single">
                                    <input class="visually-hidden filter-input" type="checkbox" name="availability"
                                           value="Товар в наличии">
                                    <span class="custom-checkbox"></span>
                                    <span>Товар в наличии</span>
                                </label>
                                <div class="filters__fieldset">
                                    <div class="filters__title filters__title-active arrow arrow--down">Акции</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="credit"
                                                   value="Доступно в кредит">
                                            <span class="custom-checkbox"></span>
                                            <span>Доступно в кредит</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="friday"
                                                   value="Черная пятница">
                                            <span class="custom-checkbox"></span>
                                            <span>Черная пятница</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="delivery"
                                                   value="Бесплатная доставка">
                                            <span class="custom-checkbox"></span>
                                            <span>Бесплатная доставка</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="gift"
                                                   value="Подарок при покупке">
                                            <span class="custom-checkbox"></span>
                                            <span>Подарок при покупке</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="second"
                                                   value="Уценка">
                                            <span class="custom-checkbox"></span>
                                            <span>Уценка</span>
                                        </label>
                                    </div>
                                </div>
                                <label class="filters__item sort-fieldset-checkbox filters__single">
                                    <input class="visually-hidden filter-input" type="checkbox" name="discount" value="Скидка">
                                    <span class="custom-checkbox"></span>
                                    <span>Скидка</span>
                                </label>
                                <div class="filters__fieldset">
                                    <div class="filters__title filters__title--vendor arrow arrow--down">Производитель</div>
                                    <div class="filters__list filters__list--vendor" data-visible-elements="4">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="sony"
                                                   value="Sony">
                                            <span class="custom-checkbox"></span>
                                            <span>Sony</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="procaster"
                                                   value="ProCaster">
                                            <span class="custom-checkbox"></span>
                                            <span>ProCaster</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="samsung"
                                                   value="Samsung">
                                            <span class="custom-checkbox"></span>
                                            <span>Samsung</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="panasonic"
                                                   value="Panasonic">
                                            <span class="custom-checkbox"></span>
                                            <span>Panasonic</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="sharp"
                                                   value="sharp">
                                            <span class="custom-checkbox"></span>
                                            <span>sharp</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="okko"
                                                   value="okko">
                                            <span class="custom-checkbox"></span>
                                            <span>okko</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="lg" value="LG">
                                            <span class="custom-checkbox"></span>
                                            <span>LG</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="phillips"
                                                   value="Phillips">
                                            <span class="custom-checkbox"></span>
                                            <span>Phillips</span>
                                        </label>
                                        <button class="filters__item filters__load-items" type="button">Посмотреть еще 51
                                            вариант...
                                        </button>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Диагональ
                                        <div class="filters__tooltip">
                                            <svg width="24" height="24">
                                                <use href="#icon-info"></use>
                                            </svg>
                                            <div class="tooltip-bonus">
                                                <div class="tooltip-bonus__inner">
                                                    <b>Бесплатная доставка</b>
                                                    <p>Доставим ваш заказ бесплатно в любую точку России. <a
                                                        href="#">Подробнее</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="less20"
                                                   value="До 20”">
                                            <span class="custom-checkbox"></span>
                                            <span>До 20”</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="30-40"
                                                   value="От 30” до 40”">
                                            <span class="custom-checkbox"></span>
                                            <span>От 30” до 40”</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="40-50"
                                                   value="От 40” до 50”">
                                            <span class="custom-checkbox"></span>
                                            <span>От 40” до 50”</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="50-60"
                                                   value="От 50” до 60”">
                                            <span class="custom-checkbox"></span>
                                            <span>От 50” до 60”</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="more60"
                                                   value="Больше 60”">
                                            <span class="custom-checkbox"></span>
                                            <span>Больше 60”</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Тип экрана
                                        <div class="filters__tooltip">
                                            <svg width="24" height="24">
                                                <use href="#icon-info"></use>
                                            </svg>
                                            <div class="tooltip-bonus">
                                                <div class="tooltip-bonus__inner">
                                                    <b>Бесплатная доставка</b>
                                                    <p>Доставим ваш заказ бесплатно в любую точку России. <a
                                                        href="#">Подробнее</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="led"
                                                   value="ЖК (LED)">
                                            <span class="custom-checkbox"></span>
                                            <span>ЖК (LED)</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="lcd"
                                                   value="ЖК (LCD)">
                                            <span class="custom-checkbox"></span>
                                            <span>ЖК (LCD)</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="oled"
                                                   value="OLED">
                                            <span class="custom-checkbox"></span>
                                            <span>OLED</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="qled"
                                                   value="QLED">
                                            <span class="custom-checkbox"></span>
                                            <span>QLED</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="nanocell"
                                                   value="Nano Cell">
                                            <span class="custom-checkbox"></span>
                                            <span>Nano Cell</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Формат экрана
                                        <div class="filters__tooltip">
                                            <svg width="24" height="24">
                                                <use href="#icon-info"></use>
                                            </svg>
                                            <div class="tooltip-bonus">
                                                <div class="tooltip-bonus__inner">
                                                    <b>Бесплатная доставка</b>
                                                    <p>Доставим ваш заказ бесплатно в любую точку России. <a
                                                        href="#">Подробнее</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="16:9"
                                                   value="16:9">
                                            <span class="custom-checkbox"></span>
                                            <span>16:9</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Разрешение экрана
                                        <div class="filters__tooltip">
                                            <svg width="24" height="24">
                                                <use href="#icon-info"></use>
                                            </svg>
                                            <div class="tooltip-bonus">
                                                <div class="tooltip-bonus__inner">
                                                    <b>Бесплатная доставка</b>
                                                    <p>Доставим ваш заказ бесплатно в любую точку России. <a
                                                        href="#">Подробнее</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="1280х800"
                                                   value="1280х800">
                                            <span class="custom-checkbox"></span>
                                            <span>1280х800</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="1366х768"
                                                   value="1366х768">
                                            <span class="custom-checkbox"></span>
                                            <span>1366х768</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="1920х1080"
                                                   value="1920х1080">
                                            <span class="custom-checkbox"></span>
                                            <span>1920х1080</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="1920х1200"
                                                   value="1920х1200">
                                            <span class="custom-checkbox"></span>
                                            <span>1920х1200</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="3840х2160"
                                                   value="3840х2160">
                                            <span class="custom-checkbox"></span>
                                            <span>3840х2160</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="7680х4320"
                                                   value="7680х4320">
                                            <span class="custom-checkbox"></span>
                                            <span>7680х4320</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Частота обновления экрана</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="50hz"
                                                   value="50 Гц">
                                            <span class="custom-checkbox"></span>
                                            <span>50 Гц</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="60hz"
                                                   value="60 Гц">
                                            <span class="custom-checkbox"></span>
                                            <span>60 Гц</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="100hz"
                                                   value="100 Гц">
                                            <span class="custom-checkbox"></span>
                                            <span>100 Гц</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="120hz"
                                                   value="120 Гц">
                                            <span class="custom-checkbox"></span>
                                            <span>120 Гц</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="200hz"
                                                   value="200hz">
                                            <span class="custom-checkbox"></span>
                                            <span>200hz</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="240hz"
                                                   value="240hz">
                                            <span class="custom-checkbox"></span>
                                            <span>240hz</span>
                                        </label>
                                    </div>
                                </div>
                                <label class="filters__item sort-fieldset-checkbox filters__single">
                                    <input class="visually-hidden filter-input" type="checkbox" name="support-hdr"
                                           value="Поддержка HDR">
                                    <span class="custom-checkbox"></span>
                                    <span>Поддержка HDR</span>
                                </label>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Формат HDR</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="hdr10"
                                                   value="HDR10">
                                            <span class="custom-checkbox"></span>
                                            <span>HDR10</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="hdr10+"
                                                   value="HDR10+">
                                            <span class="custom-checkbox"></span>
                                            <span>HDR10+</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="dolby-vision"
                                                   value="Dolby Vision">
                                            <span class="custom-checkbox"></span>
                                            <span>Dolby Vision</span>
                                        </label>
                                    </div>
                                </div>
                                <label class="filters__item sort-fieldset-checkbox filters__single">
                                    <input class="visually-hidden filter-input" type="checkbox" name="smart-tv"
                                           value="Smart TV">
                                    <span class="custom-checkbox"></span>
                                    <span>Smart TV</span>
                                </label>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Платформа Smart TV</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="webOS"
                                                   value="webOS">
                                            <span class="custom-checkbox"></span>
                                            <span>webOS</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="android"
                                                   value="Android">
                                            <span class="custom-checkbox"></span>
                                            <span>Android</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="tizen"
                                                   value="Tizen">
                                            <span class="custom-checkbox"></span>
                                            <span>Tizen</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="androidtv"
                                                   value="AndroidTV">
                                            <span class="custom-checkbox"></span>
                                            <span>AndroidTV</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="linux"
                                                   value="Linux">
                                            <span class="custom-checkbox"></span>
                                            <span>Linux</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Стандарт цифрового телевидения</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="dvb-с"
                                                   value="DVB-С">
                                            <span class="custom-checkbox"></span>
                                            <span>DVB-С</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="dvb-с-mpeg-4"
                                                   value="DVB-С MPEG-4">
                                            <span class="custom-checkbox"></span>
                                            <span>DVB-С MPEG-4</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="dvb-s"
                                                   value="DVB-S">
                                            <span class="custom-checkbox"></span>
                                            <span>DVB-S</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="dvb-s2"
                                                   value="DVB-S2">
                                            <span class="custom-checkbox"></span>
                                            <span>DVB-S2</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="dvb-t"
                                                   value="DVB-T">
                                            <span class="custom-checkbox"></span>
                                            <span>DVB-T</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="dvb-t-mpeg4"
                                                   value="DVB-T MPEG4">
                                            <span class="custom-checkbox"></span>
                                            <span>DVB-T MPEG4</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="dvb-t2"
                                                   value="DVB-T2">
                                            <span class="custom-checkbox"></span>
                                            <span>DVB-T2</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Суммарная мощность звука</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="power"
                                                   value="10 Вт (2х5 Вт)">
                                            <span class="custom-checkbox"></span>
                                            <span>10 Вт (2х5 Вт)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Количество динамиков</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="sound-sum-1"
                                                   value="Динамиков: 1">
                                            <span class="custom-checkbox"></span>
                                            <span>1</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="sound-sum-2"
                                                   value="Динамиков: 2">
                                            <span class="custom-checkbox"></span>
                                            <span>2</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="sound-sum-3"
                                                   value="Динамиков: 3">
                                            <span class="custom-checkbox"></span>
                                            <span>3</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="sound-sum-4"
                                                   value="Динамиков: 4">
                                            <span class="custom-checkbox"></span>
                                            <span>4</span>
                                        </label>
                                    </div>
                                </div>
                                <label class="filters__item sort-fieldset-checkbox filters__single">
                                    <input class="visually-hidden filter-input" type="checkbox" name="stereo"
                                           value="Стереозвук">
                                    <span class="custom-checkbox"></span>
                                    <span>Стереозвук</span>
                                </label>
                                <label class="filters__item sort-fieldset-checkbox filters__single">
                                    <input class="visually-hidden filter-input" type="checkbox" name="wifi"
                                           value="Поддержка Wi-Fi">
                                    <span class="custom-checkbox"></span>
                                    <span>Поддержка Wi-Fi</span>
                                </label>
                                <label class="filters__item sort-fieldset-checkbox filters__single">
                                    <input class="visually-hidden filter-input" type="checkbox" name="teletext"
                                           value="Телетекст">
                                    <span class="custom-checkbox"></span>
                                    <span>Телетекст</span>
                                </label>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Количество входов HDMI</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="hdmi-total-1"
                                                   value="HDMI: 1">
                                            <span class="custom-checkbox"></span>
                                            <span>1</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="hdmi-total-2"
                                                   value="HDMI: 2">
                                            <span class="custom-checkbox"></span>
                                            <span>2</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="hdmi-total-3"
                                                   value="HDMI: 3">
                                            <span class="custom-checkbox"></span>
                                            <span>3</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="hdmi-total-4"
                                                   value="HDMI: 4">
                                            <span class="custom-checkbox"></span>
                                            <span>4</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Количество входов USB</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="usb-total-1"
                                                   value="USB: 1">
                                            <span class="custom-checkbox"></span>
                                            <span>1</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="usb-total-2"
                                                   value="USB: 2">
                                            <span class="custom-checkbox"></span>
                                            <span>2</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="usb-total-3"
                                                   value="USB: 3">
                                            <span class="custom-checkbox"></span>
                                            <span>3</span>
                                        </label>
                                    </div>
                                </div>
                                <label class="filters__item sort-fieldset-checkbox filters__single">
                                    <input class="visually-hidden filter-input" type="checkbox" name="led" value="LED">
                                    <span class="custom-checkbox"></span>
                                    <span>Светодиодная (LED) подсветка</span>
                                </label>
                                <label class="filters__item sort-fieldset-checkbox filters__single">
                                    <input class="visually-hidden filter-input" type="checkbox" name="wall"
                                           value="Возможность крепления на стену">
                                    <span class="custom-checkbox"></span>
                                    <span>Возможность крепления на стену</span>
                                </label>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Год выпуска</div>
                                    <div class="filters__list">
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="2018"
                                                   value="Год выпуска: 2018">
                                            <span class="custom-checkbox"></span>
                                            <span>2018</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="2019"
                                                   value="Год выпуска: 2019">
                                            <span class="custom-checkbox"></span>
                                            <span>2019</span>
                                        </label>
                                        <label class="filters__item sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="2020"
                                                   value="Год выпуска: 2020">
                                            <span class="custom-checkbox"></span>
                                            <span>2020</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__fieldset">
                                    <div class="filters__title arrow arrow--down">Цвет</div>
                                    <div class="filters__list">
                                        <label
                                            class="filters__item filters__item--color filters__item--red sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="red"
                                                   value="Красный">
                                            <span class="custom-checkbox"></span>
                                            <span class="color-indicator" style="--color: #D7364F">Красный</span>
                                        </label>
                                        <label
                                            class="filters__item filters__item--color filters__item--purple sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="purple"
                                                   value="Фиолетовый">
                                            <span class="custom-checkbox"></span>
                                            <span class="color-indicator" style="--color: #5F3EC0">Фиолетовый</span>
                                        </label>
                                        <label
                                            class="filters__item filters__item--color filters__item--yellow sort-fieldset-checkbox">
                                            <input class="visually-hidden filter-input" type="checkbox" name="yellow"
                                                   value="Желтый">
                                            <span class="custom-checkbox"></span>
                                            <span class="color-indicator" style="--color: #FED545">Желтый</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filters__buttons shadows-footer hidden">
                                    <button class="filters__reset btn btn-black" type="reset">Сбросить</button>
                                    <button class="filters__btn-show btn btn-purple" type="button" data-modal-close="filters"
                                            data-count="">Посмотреть
                                    </button>
                                </div>
                                <button class="filters__btn-close modal-close" type="button" aria-label="закрыть"
                                        data-modal-close="filters"></button>
                            </form>
                        </div>
                        <div class="catalog__main wrapper">
                            <form class="catalog__sort" method="post" autocomplete="on">
                                <div id="catalog-sort" class="catalog__sort-wrap modal">
                                    <div class="modal-wrap">
                                        <div class="catalog__sort-left">
                                            <span class="catalog__sort-title">Сортировать:</span>
                                            <div class="catalog__sort-item">
                                                <div class="catalog__sort-price">
                                                    <input id="price-high" class="visually-hidden" type="radio"
                                                           value="price-high" name="sort">
                                                    <input id="price-low" class="visually-hidden" type="radio" value="price-low"
                                                           name="sort">
                                                    <label class="arrow arrow--up catalog__sort-price-high" for="price-high">По
                                                        цене</label>
                                                    <label class="arrow arrow--down" for="price-low">По цене</label>
                                                </div>
                                            </div>
                                            <div class="catalog__sort-item">
                                                <input id="sort-popular" class="visually-hidden" type="radio" value="popular"
                                                       name="sort">
                                                <label for="sort-popular">По популярности</label>
                                            </div>
                                            <div class="catalog__sort-item">
                                                <input id="sort-new" class="visually-hidden" type="radio" value="new"
                                                       name="sort">
                                                <label for="sort-new">По новизне</label>
                                            </div>
                                            <div class="catalog__sort-item">
                                                <input id="sort-discount" class="visually-hidden" type="radio" value="discount"
                                                       name="sort">
                                                <label for="sort-discount">По размеру скидки</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog__sort-right">
                                    <label class="catalog__sort-video sort-fieldset-checkbox">
                                        <input class="visually-hidden filter-input" type="checkbox" name="only-video"
                                               value="Есть видеообзор">
                                        <span class="custom-checkbox"></span>
                                        <span>Есть видеообзор</span>
                                        <svg width="20" height="16">
                                            <use href="#icon-youtube"></use>
                                        </svg>
                                    </label>
                                    <div class="sort-view">
                                        <button class="btn-view" type="button" data-value="view-column">
                                            <svg width="26" height="22">
                                                <use href="#icon-view-column"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-view active" type="button" data-value="view-row">
                                            <svg width="26" height="22">
                                                <use href="#icon-view-row"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="catalog__current-filter-wrap">
                                <div class="current-filter-container">
                                    <button class="catalog__reset-all" type="button">Сбросить все</button>
                                </div>
                            </div>
                            <div class="product-card-list">
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
                                        <div class="catalog__wrap-cont">
                                            <div class="catalog__wrap-title">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <div class="catalog__product-rating">
                                                    <div class="star-rating star-rating--5"></div>
                                                    <span>243 отзыва</span>
                                                </div>
                                            </div>
                                            <dl class="catalog__product-features">
                                                <dt>Диагональ(дюйм):</dt>
                                                <dd>6,5</dd>
                                                <dt>Встроенная память(гб):</dt>
                                                <dd>512Гб</dd>
                                                <dt>Разрешение(пикс):</dt>
                                                <dd>2688х1242</dd>
                                                <dt>Фотокамера(Мп):</dt>
                                                <dd>12+12+12</dd>
                                            </dl>
                                            <div class="catalog__wrap-price">
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                            </div>
                                        </div>
                                        <div class="product-card__buy-wrap">
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
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart add-to-cart--catalog" type="button">
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
                                        <div class="catalog__wrap-cont">
                                            <div class="catalog__wrap-title">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <div class="catalog__product-rating">
                                                    <div class="star-rating star-rating--5"></div>
                                                    <span>243 отзыва</span>
                                                </div>
                                            </div>
                                            <dl class="catalog__product-features">
                                                <dt>Диагональ(дюйм):</dt>
                                                <dd>6,5</dd>
                                                <dt>Встроенная память(гб):</dt>
                                                <dd>512Гб</dd>
                                                <dt>Разрешение(пикс):</dt>
                                                <dd>2688х1242</dd>
                                                <dt>Фотокамера(Мп):</dt>
                                                <dd>12+12+12</dd>
                                            </dl>
                                            <div class="catalog__wrap-price">
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                            </div>
                                        </div>
                                        <div class="product-card__buy-wrap">
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
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart add-to-cart--catalog" type="button">
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
                                        <div class="catalog__wrap-cont">
                                            <div class="catalog__wrap-title">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <div class="catalog__product-rating">
                                                    <div class="star-rating star-rating--5"></div>
                                                    <span>243 отзыва</span>
                                                </div>
                                            </div>
                                            <dl class="catalog__product-features">
                                                <dt>Диагональ(дюйм):</dt>
                                                <dd>6,5</dd>
                                                <dt>Встроенная память(гб):</dt>
                                                <dd>512Гб</dd>
                                                <dt>Разрешение(пикс):</dt>
                                                <dd>2688х1242</dd>
                                                <dt>Фотокамера(Мп):</dt>
                                                <dd>12+12+12</dd>
                                            </dl>
                                            <div class="catalog__wrap-price">
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                            </div>
                                        </div>
                                        <div class="product-card__buy-wrap">
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
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart add-to-cart--catalog" type="button">
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
                                        <div class="catalog__wrap-cont">
                                            <div class="catalog__wrap-title">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <div class="catalog__product-rating">
                                                    <div class="star-rating star-rating--5"></div>
                                                    <span>243 отзыва</span>
                                                </div>
                                            </div>
                                            <dl class="catalog__product-features">
                                                <dt>Диагональ(дюйм):</dt>
                                                <dd>6,5</dd>
                                                <dt>Встроенная память(гб):</dt>
                                                <dd>512Гб</dd>
                                                <dt>Разрешение(пикс):</dt>
                                                <dd>2688х1242</dd>
                                                <dt>Фотокамера(Мп):</dt>
                                                <dd>12+12+12</dd>
                                            </dl>
                                            <div class="catalog__wrap-price">
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                            </div>
                                        </div>
                                        <div class="product-card__buy-wrap">
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
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart add-to-cart--catalog" type="button">
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
                                        <div class="catalog__wrap-cont">
                                            <div class="catalog__wrap-title">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <div class="catalog__product-rating">
                                                    <div class="star-rating star-rating--5"></div>
                                                    <span>243 отзыва</span>
                                                </div>
                                            </div>
                                            <dl class="catalog__product-features">
                                                <dt>Диагональ(дюйм):</dt>
                                                <dd>6,5</dd>
                                                <dt>Встроенная память(гб):</dt>
                                                <dd>512Гб</dd>
                                                <dt>Разрешение(пикс):</dt>
                                                <dd>2688х1242</dd>
                                                <dt>Фотокамера(Мп):</dt>
                                                <dd>12+12+12</dd>
                                            </dl>
                                            <div class="catalog__wrap-price">
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                            </div>
                                        </div>
                                        <div class="product-card__buy-wrap">
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
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart add-to-cart--catalog" type="button">
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
                                        <div class="catalog__wrap-cont">
                                            <div class="catalog__wrap-title">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <div class="catalog__product-rating">
                                                    <div class="star-rating star-rating--5"></div>
                                                    <span>243 отзыва</span>
                                                </div>
                                            </div>
                                            <dl class="catalog__product-features">
                                                <dt>Диагональ(дюйм):</dt>
                                                <dd>6,5</dd>
                                                <dt>Встроенная память(гб):</dt>
                                                <dd>512Гб</dd>
                                                <dt>Разрешение(пикс):</dt>
                                                <dd>2688х1242</dd>
                                                <dt>Фотокамера(Мп):</dt>
                                                <dd>12+12+12</dd>
                                            </dl>
                                            <div class="catalog__wrap-price">
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                            </div>
                                        </div>
                                        <div class="product-card__buy-wrap">
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
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart add-to-cart--catalog" type="button">
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
                                        <div class="catalog__wrap-cont">
                                            <div class="catalog__wrap-title">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <div class="catalog__product-rating">
                                                    <div class="star-rating star-rating--5"></div>
                                                    <span>243 отзыва</span>
                                                </div>
                                            </div>
                                            <dl class="catalog__product-features">
                                                <dt>Диагональ(дюйм):</dt>
                                                <dd>6,5</dd>
                                                <dt>Встроенная память(гб):</dt>
                                                <dd>512Гб</dd>
                                                <dt>Разрешение(пикс):</dt>
                                                <dd>2688х1242</dd>
                                                <dt>Фотокамера(Мп):</dt>
                                                <dd>12+12+12</dd>
                                            </dl>
                                            <div class="catalog__wrap-price">
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                            </div>
                                        </div>
                                        <div class="product-card__buy-wrap">
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
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart add-to-cart--catalog" type="button">
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
                                        <div class="catalog__wrap-cont">
                                            <div class="catalog__wrap-title">
                                                <small class="product-card__name">Смарт-часы</small>
                                                <p class="product-card-desc">Apple Watch 5 series 44mm+ремешек HERMES, макс.
                                                    может быть в 3 строки
                                                    для длинных названий</p>
                                                <div class="catalog__product-rating">
                                                    <div class="star-rating star-rating--5"></div>
                                                    <span>243 отзыва</span>
                                                </div>
                                            </div>
                                            <dl class="catalog__product-features">
                                                <dt>Диагональ(дюйм):</dt>
                                                <dd>6,5</dd>
                                                <dt>Встроенная память(гб):</dt>
                                                <dd>512Гб</dd>
                                                <dt>Разрешение(пикс):</dt>
                                                <dd>2688х1242</dd>
                                                <dt>Фотокамера(Мп):</dt>
                                                <dd>12+12+12</dd>
                                            </dl>
                                            <div class="catalog__wrap-price">
                                                <s class="product-card__old-price">53 999₽</s>
                                                <b class="product-card__price">32 230₽</b>
                                            </div>
                                        </div>
                                        <div class="product-card__buy-wrap">
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
                                            <button class="btn btn-white product-card__buy" type="button"
                                                    data-modal-open="fast-order">Купить в
                                                один клик
                                            </button>
                                            <button class="product-card__cart add-to-cart add-to-cart--catalog" type="button">
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
                            <div class="catalog__card-counter">
                                Вы посмотрели <span>36</span> из <span>123</span> товаров
                            </div>
                            <button class="catalog__more btn btn-purple" type="button">Показать еще</button>
                            <div class="pagination catalog__pagination">
                                <a href="#!" aria-current="location">1</a>
                                <a href="#!">2</a>
                                <a href="#!">3</a>
                            </div>
                        </div>
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
    name: "Page-Stock2",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
