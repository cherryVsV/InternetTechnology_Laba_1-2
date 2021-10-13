<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="service service--faq">
                    <div class="service-aside">
                        <div class="service-aside__inner">
                            <a class="logo logo--big" href="index">
                                <svg width="240" height="43">
                                    <use href="#icon-logo-big"></use>
                                </svg>
                            </a>
                            <div class="service-aside__links">
                                <a href="delivery">Доставка и оплата</a>
                                <a href="warranty">Гарантия и возврат</a>
                                <a href="faq">Покупки в кредит</a>
                                <a href="faq">Сервисные услуги</a>
                                <a href="faq">Частые вопросы</a>
                                <a href="faq">Условия продажи товаров</a>
                                <a href="policy">Политика конфиденциальности</a>
                                <a href="contact">Контакты</a>
                                <a href="index">Вернуться на главную</a>
                            </div>
                        </div>
                    </div>
                    <div class="service__container">
                        <div class="bread-crumbs ">
                            <a href="index">Главная</a>
                            <a href="faq" aria-current="location">Вопросы и ответы</a>
                        </div>
                        <h1 class="title">Вопросы и ответы</h1>
                        <div class="accordion">
                            <div class="service__accordion-item">
                                <div class="service__accordion-title accordion__title accordion-title"><span
                                    class="arrow arrow--down"></span>Как узнать о технических характеристиках?</div>
                                <div class="service__accordion-content accordion__content">Ознакомиться с комплектацией, техническими
                                    характеристиками и отзывами покупателей о товаре можно на сайте интернет-магазина «Mediashop24»
                                    Информацию можно найти в карточке товара.</div>
                            </div>
                            <div class="service__accordion-item">
                                <div class="service__accordion-title accordion__title accordion-title"><span
                                    class="arrow arrow--down"></span>Как узнать о технических характеристиках?</div>
                                <div class="service__accordion-content accordion__content">Ознакомиться с комплектацией, техническими
                                    характеристиками и отзывами покупателей о товаре можно на сайте интернет-магазина «Mediashop24»
                                    Информацию можно найти в карточке товара.</div>
                            </div>
                            <div class="service__accordion-item">
                                <div class="service__accordion-title accordion__title accordion-title"><span
                                    class="arrow arrow--down"></span>Как узнать о технических характеристиках?</div>
                                <div class="service__accordion-content accordion__content">Ознакомиться с комплектацией, техническими
                                    характеристиками и отзывами покупателей о товаре можно на сайте интернет-магазина «Mediashop24»
                                    Информацию можно найти в карточке товара.</div>
                            </div>
                            <div class="service__accordion-item">
                                <div class="service__accordion-title accordion__title accordion-title"><span
                                    class="arrow arrow--down"></span>Как узнать о технических характеристиках?</div>
                                <div class="service__accordion-content accordion__content">Ознакомиться с комплектацией, техническими
                                    характеристиками и отзывами покупателей о товаре можно на сайте интернет-магазина «Mediashop24»
                                    Информацию можно найти в карточке товара.</div>
                            </div>
                            <div class="service__accordion-item">
                                <div class="service__accordion-title accordion__title accordion-title"><span
                                    class="arrow arrow--down"></span>Как узнать о технических характеристиках?</div>
                                <div class="service__accordion-content accordion__content">Ознакомиться с комплектацией, техническими
                                    характеристиками и отзывами покупателей о товаре можно на сайте интернет-магазина «Mediashop24»
                                    Информацию можно найти в карточке товара.</div>
                            </div>
                        </div>
                        <div class="service__part">
                            <h1 class="title">Условия продажи товаров</h1>
                            <h2 class="service__title">Внимательно ознакомьтесь со следующей информацией:</h2>
                            <div class="service__text-block">
                                <ol>
                                    <li>Если купленный у нас товар оказался товаром ненадлежащего качества, Магазин МедиаШоп24 несет
                                        ответственность перед покупателем согласно закону «О защите прав потребителей»
                                    </li>
                                    <li>Если купленный вами товар является товаром надлежащего качества и не относится к технически сложным
                                        товарам, но не подошел вам по каким-либо параметрам, вы можете вернуть или обменять его в течение 14
                                        (четырнадцати) дней, не считая дня его покупки!
                                    </li>
                                </ol>
                            </div>
                            <h2 class="service__title">Как узнать о технических характеристиках?</h2>
                            <div class="service__tab-container service__text-block accordion" style="--tab-size: 2;">
                                <div class="service__tab-list" role="tablist">
                                    <button id="tab-1-btn" class="service__tab-title" type="button" role="tab" aria-controls="tab-1"
                                            aria-selected="true">На сайте
                                    </button>
                                    <button id="tab-2-btn" class="service__tab-title" type="button" role="tab" aria-controls="tab-2">В
                                        мобильном приложении
                                    </button>
                                </div>
                                <div id="tab-1" class="service__tab-content" role="tabpanel" aria-labelledby="tab-1-btn">
                                    <ol>
                                        <li>Таб 1 Если купленный у нас товар оказался товаром ненадлежащего качества, Магазин МедиаШоп24 несет
                                            ответственность перед покупателем согласно закону «О защите прав потребителей»
                                        </li>
                                        <li>Таб 1 Если купленный вами товар является товаром надлежащего качества и не относится к технически
                                            сложным товарам, но не подошел вам по каким-либо параметрам, вы можете вернуть или обменять его в
                                            течение 14 (четырнадцати) дней, не считая дня его покупки!
                                        </li>
                                    </ol>
                                </div>
                                <div id="tab-2" class="service__tab-content" role="tabpanel" aria-labelledby="tab-2-btn" hidden>
                                    <ol>
                                        <li>Таб 2 Если купленный у нас товар оказался товаром ненадлежащего качества, Магазин МедиаШоп24 несет
                                            ответственность перед покупателем согласно закону «О защите прав потребителей»
                                        </li>
                                        <li>Таб 2 Если купленный вами товар является товаром надлежащего качества и не относится к технически
                                            сложным товарам, но не подошел вам по каким-либо параметрам, вы можете вернуть или обменять его в
                                            течение 14 (четырнадцати) дней, не считая дня его покупки!
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="service__part">
                            <h2 class="service__title">Как узнать о технических характеристиках?</h2>
                            <div class="service__text-block service__block-column" style="--column:2;">
                                <ol>
                                    <li>Если купленный у нас товар оказался товаром ненадлежащего качества, Магазин МедиаШоп24 несет
                                        ответственность перед покупателем согласно закону «О защите прав потребителей».</li>
                                    <li>Если купленный вами товар является товаром надлежащего качества и не относится к технически сложным
                                        товарам, но не подошел вам по каким-либо параметрам, вы можете вернуть или обменять его в течение 14
                                        (четырнадцати) дней, не считая дня его покупки!</li>
                                </ol>
                                <ol>
                                    <li>Если купленный у нас товар оказался товаром ненадлежащего качества, Магазин МедиаШоп24 несет
                                        ответственность перед покупателем согласно закону «О защите прав потребителей».</li>
                                    <li>Если купленный вами товар является товаром надлежащего качества и не относится к технически сложным
                                        товарам, но не подошел вам по каким-либо параметрам, вы можете вернуть или обменять его в течение 14
                                        (четырнадцати) дней, не считая дня его покупки!</li>
                                </ol>
                            </div>
                        </div>
                        <div class="service__part">
                            <h2 class="service__title">Как узнать о технических характеристиках?</h2>
                            <div class="service__text-block service__block-column" style="--column:3;">
                                <ol>
                                    <li>Если купленный у нас товар оказался товаром ненадлежащего качества, Магазин МедиаШоп24 несет
                                        ответственность перед покупателем согласно закону «О защите прав потребителей».</li>
                                    <li>Если купленный вами товар является товаром надлежащего качества и не относится к технически сложным
                                        товарам, но не подошел вам по каким-либо параметрам, вы можете вернуть или обменять его в течение 14
                                        (четырнадцати) дней, не считая дня его покупки!</li>
                                </ol>
                                <ol>
                                    <li>Если купленный у нас товар оказался товаром ненадлежащего качества, Магазин МедиаШоп24 несет
                                        ответственность перед покупателем согласно закону «О защите прав потребителей».</li>
                                    <li>Если купленный вами товар является товаром надлежащего качества и не относится к технически сложным
                                        товарам, но не подошел вам по каким-либо параметрам, вы можете вернуть или обменять его в течение 14
                                        (четырнадцати) дней, не считая дня его покупки!</li>
                                </ol>
                                <ol>
                                    <li>Если купленный у нас товар оказался товаром ненадлежащего качества, Магазин МедиаШоп24 несет
                                        ответственность перед покупателем согласно закону «О защите прав потребителей».</li>
                                    <li>Если купленный вами товар является товаром надлежащего качества и не относится к технически сложным
                                        товарам, но не подошел вам по каким-либо параметрам, вы можете вернуть или обменять его в течение 14
                                        (четырнадцати) дней, не считая дня его покупки!</li>
                                </ol>
                            </div>
                        </div>
                        <div class="service__part">
                            <h2 class="service__title">Прайс</h2>
                            <div class="service__text-block service__price">
                                <ul class="service__price-list">
                                    <li>
                                        <p>Apple Watch Spot Series 1 38mm</p><span>2000₽</span>
                                    </li>
                                    <li>
                                        <p>Apple Watch Spot Series 1 38mm</p><span>2000₽</span>
                                    </li>
                                    <li>
                                        <p>Apple Watch Spot Series 1 38mm</p><span>2000₽</span>
                                    </li>
                                    <li>
                                        <p>Apple Watch Spot Series 1 38mm</p><span>2000₽</span>
                                    </li>
                                    <li>
                                        <p>Apple Watch Spot Series 1 38mm</p><span>2000₽</span>
                                    </li>
                                </ul>
                                <ul class="service__price-list">
                                    <li>
                                        <p>Apple Watch Spot Series 1 38mm</p><span>2000₽</span>
                                    </li>
                                    <li>
                                        <p>Apple Watch Spot Series 1 38mm</p><span>2000₽</span>
                                    </li>
                                    <li>
                                        <p>Apple Watch Spot Series 1 38mm</p><span>2000₽</span>
                                    </li>
                                    <li>
                                        <p>Apple Watch Spot Series 1 38mm</p><span>2000₽</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer-main :is-info='true'></footer-main>
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
    name: "Page-FAQ",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
