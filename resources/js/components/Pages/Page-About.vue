<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs bread-crumbs--about">
                    <a href="index">Главная</a>
                    <a href="#!" aria-current="location">Новости</a>
                </div>
                <div class="about">
                    <section class="about__company">
                        <div class="about__company-cont">
                            <h1 class="title">Интернет-магазин цифровой техники</h1>
                            <p>Mediashop24 — эксперт по продажам цифровой техники с 10-ти летним опытом. Наше главное
                                преимущестов
                                — прямые закупки товаров, что позволяет избежать длинной цепочки посредников и держать доступные
                                цены.</p>
                            <h2 class="about__subtitle decor-up">Наша философия</h2>
                            <p class="about__slogan">Филисофия нашего бизнеса складываетсяя из одного главного,
                                но при этом очень простого правила.
                                Чтобы покупатель от сотрудничества с нами получали только плюсы.
                                И вновь возвращались к нам.
                                24 часа в сутки.</p>
                        </div>
                        <div class="about__company-img">
                            <picture>
                                <!-- 1x-685px/591px 2x-1370px/1182px -->
                                <source type="image/webp"
                                        srcset="img/content/director.webp 1x, img/content/director@2x.webp 2x">
                                <img class=content-img src="img/content/director.jpg" srcset="img/content/director@2x.jpg 2x"
                                     width="685"
                                     height="591" alt="наш управляющий" loading=lazy decoding=async>
                            </picture>
                            <div class="about__boss grid">
                                <p class="about__boss-name">Фёдор Каневский</p>
                                <p class="about__boss-status">Управляющий</p>
                            </div>
                        </div>
                    </section>
                    <div class="about__slider-container slider-container">
                        <div class="about__slider-wrapper swiper-wrapper">
                            <div class="about__slider-slide swiper-slide">
                                <span class="about__slider-title">1280</span>
                                <span class="about__slider-subtitle decor-up">Положительных отзывов</span>
                                <span class="about__slider-text">На Яндекс.Маркет</span>
                            </div>
                            <div class="about__slider-slide swiper-slide">
                                <span class="about__slider-title">5000</span>
                                <span class="about__slider-subtitle decor-up">Продаж и довольных покупателей</span>
                                <span class="about__slider-text">Ежегодно</span>
                            </div>
                            <div class="about__slider-slide swiper-slide">
                                <span class="about__slider-title">1000</span>
                                <span class="about__slider-subtitle decor-up">Посетителей ежедневно просматривают магазин</span>
                                <span class="about__slider-text">На Авито</span>
                            </div>
                        </div>
                        <div class="about__slider-cont">
                            <div>
                                <span class="about__slider-cont-title">90%</span>
                                <span class="about__slider-cont-subtitle">Товарных предложений в лидирующей тройке на
                Яндекс.Маркете</span>
                                <span
                                    class="about__slider-cont-text">И аналогичных торговых площадках при сортировке по цене</span>
                            </div>
                            <div>
                                <span class="about__slider-cont-title">x3</span>
                                <span class="about__slider-cont-subtitle">За последние полгода ассортимент магазина увеличился
                втрое</span>
                                <span class="about__slider-cont-text">С 500 до 1500 товарных наименований</span>
                            </div>
                            <div>
                                <span class="about__slider-cont-title">30%</span>
                                <span class="about__slider-cont-subtitle">Покупателей возвращаются к нам снова</span>
                                <span class="about__slider-cont-text">За следующей покупкой</span>
                            </div>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                    <section class="about__start about__wrapper">
                        <div class="about__start-cont about__text-block">
                            <h2 class="title">Как все начиналось</h2>
                            <p class="">Наша история началась 10 лет назад, когда небольшая команда единомышленников старалась
                                держать
                                руки
                                на пульсе жизни. Тогда, в какой-то момент, стало очевидно: компания Apple вот-вот выпустит
                                планшетный
                                компьютер, и это будет бомба.</p>
                            <p>Мы не смогли просто сидеть и ждать.</p>
                            <p>Это была наша первая поставка из Америки. А 12 мая 2010 года мы зарегистрировали первый магазин
                                на Яндекс
                                Маркете. Здесь был представлен полный ассортимент техники Apple, включая навороченные кастомные
                                модели,
                                привезенные для нас из США по отдельному заказу. На модели планшетных компьютеров с модулем LTE
                                с
                                сим-картой
                                был особый спрос, и слово «ажиотаж» под эту ситуацию подойдет идеально.</p>
                        </div>
                        <div class="about__bg-apple"></div>
                    </section>
                    <section class="about__tv">
                        <div class="about__tv-wrap about__wrapper">
                            <div class="about__text-block">
                                <h2 class="title">Телевизоры - наше все</h2>
                                <p class="">После ажиотажа с Apple в разное время у нас лидировали различные группы товаров:
                                    пылесосы
                                    Dyson, миксеры KitchenAid, проекторы Epson, музыкальное оборудование. Но с 2016 года в
                                    авангарде продаж
                                    всегда были телевизоры.</p>
                                <p>Это – наше всё.</p>
                                <p>К 2020 году компанией Мediashop24 накоплена огромная база знаний, и в этом направлении мы –
                                    одни из
                                    лидеров Санкт-Петербурга.</p>
                            </div>
                            <div class="about__diagram">
                                <div class="about__diagram-graph" data-year="2020"
                                     style="--purple: .5; --green: .3; --black: .07;"></div>
                                <ul class="about__diagram-product">
                                    <li>Телевизоры</li>
                                    <li>Проекторы</li>
                                    <li>Apple</li>
                                    <li>Прочее</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="about__team about__wrapper">
                        <div class="about__team-cont">
                            <div class="about__team-base about__text-block">
                                <h2 class="title">Команда экспертов</h2>
                                <div class="about__team-text">
                                    <p>В названии магазина цифра 24 неспроста. Говорит сама за себя. Круглые сутки мы открыты
                                        для общения.
                                        Опыт
                                        наших экспертов, без ложной скромности, уникален. Мы с удовольствием ответим на все
                                        интересующие вас
                                        вопросы
                                        на сайте, в социальных сетях и по телефону.</p>
                                </div>
                            </div>
                            <div class="about__team-user about__text-block hidden">
                                <h2 class="title">Федор, управляющий</h2>
                                <blockquote class="about__team-text">
                                    <p>Мы всегда старались обеспечить такое обслуживание, чтобы каждый, кто совершал у нас
                                        покупки или
                                        просто консультировался, запомнил нас и со временем обратился снова.</p>
                                    <p>Как показало время: результат такой работы гораздо эффективнее, чем самая дорогая
                                        реклама.</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="about__avatars">
                            <img data-content="team1" src="img/content/team1.jpg" width="100" height="100" alt="аватар">
                            <img data-content="team2" src="img/content/team2.jpg" width="100" height="100" alt="аватар">
                            <img data-content="team3" src="img/content/team3.jpg" width="100" height="100" alt="аватар">
                            <img data-content="team4" src="img/content/team4.jpg" width="100" height="100" alt="аватар">
                            <img data-content="team1" src="img/content/team1.jpg" width="100" height="100" alt="аватар">
                            <img data-content="team2" src="img/content/team2.jpg" width="100" height="100" alt="аватар">
                            <img data-content="team3" src="img/content/team3.jpg" width="100" height="100" alt="аватар">
                            <img data-content="team4" src="img/content/team4.jpg" width="100" height="100" alt="аватар">
                            <img data-content="team1" src="img/content/team1.jpg" width="100" height="100" alt="аватар">
                        </div>
                    </section>
                    <div class="about__review-wrap wrapper">
                        <div class="about__review">
                            <div>
                                <span class="about__review-title">94</span>
                                <b class="decor-up">Профессиональных обзоров техники на YouTube</b>
                            </div>
                            <div>
                                <p>Mediashop24 – эксперт в той технике, которую представляет. Убедиться в этом просто –
                                    загляните на наш
                                    YouTube-канал. Вас ждут профессиональные видеообзоры, посмотрев которые, вы и сами станете
                                    экспертом!
                                </p>
                                <a href="#">Перейти на канал</a>
                            </div>
                        </div>
                    </div>
                    <section class="about__delivery">
                        <div class="about__delivery-address about__text-block wrapper">
                            <h2 class="title">Доставка по всей России</h2>
                            <p>
                                <svg width="24" height="24">
                                    <use href="#icon-location"></use>
                                </svg>
                                Пункт самовывоза в г. Сантк-Петербург Ждановская набережная, д.7 (ст. м. Спортивная)
                            </p>
                            <p>
                                <svg width="24" height="24">
                                    <use href="#icon-airplane"></use>
                                </svg>
                                Доставка по всей России транспортными компаниями «ТК СДЭК» и «ТК Деловые линии»
                            </p>
                        </div>
                        <div class="about__map"></div>
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
    name: "Page-About",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
