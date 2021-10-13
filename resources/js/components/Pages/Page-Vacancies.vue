<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs bread-crumbs--vacancies">
                    <a href="index">Главная</a>
                    <a href="vacancies" aria-current="location">Вакансии</a>
                </div>
                <div class="vacancies">
                    <h1>Вакансии</h1>
                    <div class="vacancies__banner">
                        <picture>
                            <!-- 1x-375px/180px 2x-750px/360px -->
                            <source type="image/webp" srcset="img/content/vacancies.webp 1x, img/content/vacancies@2x.webp 2x">
                            <img src="img/content/vacancies.jpg" srcset="img/content/vacancies@2x.jpg 2x" width="375"
                                 height="180"
                                 alt="группа людей" loading=lazy decoding=async>
                        </picture>
                    </div>
                    <div class="vacancies__accordion">
                        <div class="accordion">
                            <div class="accordion__items">
                                <div class="accordion__items-header">
                                    <h3 class="arrow arrow--down">Продавец-консультант</h3>
                                    <span class="data">Опубликовано 21 апреля 2020 г.</span>
                                </div>
                                <div class="accordion__body">
                                    <div class="accordion__body-content">
                                        <p>В связи с расширением штата нам требуются специалисты по работе с клиентами на
                                            удаленную
                                            работу,
                                            и работу в офисе.
                                        </p>
                                        <h4>Пожелания:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Обязанности:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы;
                                            </li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Условия:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <button class="vacancies__btn-submit" data-modal-open="vacancy"
                                                data-vacancy="consultant">Заполнить
                                            анкету
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <div class="accordion__items-header">
                                    <h3 class="arrow arrow--down">Курьер</h3>
                                    <span class="data">Опубликовано 21 апреля 2020 г.</span>
                                </div>
                                <div class="accordion__body">
                                    <div class="accordion__body-content">
                                        <p>В связи с расширением штата нам требуются специалисты по работе с клиентами на
                                            удаленную
                                            работу,
                                            и работу в офисе.
                                        </p>
                                        <h4>Пожелания:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Обязанности:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы;
                                            </li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Условия:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <button class="vacancies__btn-submit" data-modal-open="vacancy" data-vacancy="courier">
                                            Заполнить
                                            анкету
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <div class="accordion__items-header">
                                    <h3 class="arrow arrow--down">Сотрудник тех. поддержки</h3>
                                    <span class="data">Опубликовано 21 апреля 2020 г.</span>
                                </div>
                                <div class="accordion__body">
                                    <div class="accordion__body-content">
                                        <p>В связи с расширением штата нам требуются специалисты по работе с клиентами на
                                            удаленную
                                            работу,
                                            и работу в офисе.
                                        </p>
                                        <h4>Пожелания:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Обязанности:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы;
                                            </li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Условия:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <button class="vacancies__btn-submit" data-modal-open="vacancy" data-vacancy="support">
                                            Заполнить
                                            анкету
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion__items">
                                <div class="accordion__items-header">
                                    <h3 class="arrow arrow--down">Администратор магазина</h3>
                                    <span class="data">Опубликовано 21 апреля 2020 г.</span>
                                </div>
                                <div class="accordion__body">
                                    <div class="accordion__body-content">
                                        <p>В связи с расширением штата нам требуются специалисты по работе с клиентами на
                                            удаленную
                                            работу,
                                            и работу в офисе.
                                        </p>
                                        <h4>Пожелания:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Обязанности:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы;
                                            </li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Условия:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <button class="vacancies__btn-submit" data-modal-open="vacancy" data-vacancy="admin">
                                            Заполнить
                                            анкету
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <div class="accordion__items-header">
                                    <h3 class="arrow arrow--down">Бизнес аналитик</h3>
                                    <span class="data">Опубликовано 21 апреля 2020 г.</span>
                                </div>
                                <div class="accordion__body">
                                    <div class="accordion__body-content">
                                        <p>В связи с расширением штата нам требуются специалисты по работе с клиентами на
                                            удаленную
                                            работу,
                                            и работу в офисе.
                                        </p>
                                        <h4>Пожелания:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Обязанности:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы;
                                            </li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Условия:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <button class="vacancies__btn-submit" data-modal-open="vacancy" data-vacancy="analyst">
                                            Заполнить
                                            анкету
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__items">
                                <div class="accordion__items-header">
                                    <h3 class="arrow arrow--down">Инжинер</h3>
                                    <span class="data">Опубликовано 21 апреля 2020 г.</span>
                                </div>
                                <div class="accordion__body">
                                    <div class="accordion__body-content">
                                        <p>В связи с расширением штата нам требуются специалисты по работе с клиентами на
                                            удаленную
                                            работу,
                                            и работу в офисе.
                                        </p>
                                        <h4>Пожелания:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Обязанности:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы;
                                            </li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <h4> Условия:</h4>
                                        <ul>
                                            <li>Пунктуальность: выходить на линию во время, следовать своему графику работы</li>
                                            <li>Уверенный пользователь ПК (работа с Excel, Internet, Skype);</li>
                                            <li>Хорошая дикция, грамотная речь;</li>
                                            <li>Желание приобретать новые знания и развиваться;</li>
                                            <li>Стремление экономить время в пути на работу;</li>
                                        </ul>
                                        <button class="vacancies__btn-submit" data-modal-open="vacancy" data-vacancy="engineer">
                                            Заполнить
                                            анкету
                                        </button>
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
            <modal-vacancy></modal-vacancy>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-Vacancies",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
