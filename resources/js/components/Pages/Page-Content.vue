<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="cont">
                    <div>
                        <h2>Страницы</h2>
                        <ul>
                            <li>
                                <a href="index">Главная</a>
                            </li>
                            <li>
                                <a href="catalogmain">Каталог-главная</a>
                            </li>
                            <li>
                                <a href="catalog">Каталог</a>
                            </li>
                            <li>
                                <a href="card">Карточка товара</a>
                            </li>
                            <li>
                                <a href="card2">Карточка товара пустая</a>
                            </li>
                            <li>
                                <a href="compare">Сравнение</a>
                            </li>
                            <li>
                                <a href="favorite">Избранное</a>
                            </li>
                            <li>
                                <a href="news">Новости</a>
                            </li>
                            <li>
                                <a href="review">Обзоры</a>
                            </li>
                            <li>
                                <a href="review2">Обзор2</a>
                            </li>
                            <li>
                                <a href="article">Статья</a>
                            </li>
                            <li>
                                <a href="stock">Акции</a>
                            </li>
                            <li>
                                <a href="stock2">Акции2</a>
                            </li>
                            <li>
                                <a href="vacancies">Вакансии</a>
                            </li>
                            <li>
                                <a href="about">О нас</a>
                            </li>
                            <li>
                                <a href="cart">Корзина</a>
                            </li>
                            <li>
                                <a href="cart1">Оформление заказа</a>
                            </li>
                            <li>
                                <a href="cartcomplete">Заказ Оформлен</a>
                            </li>
                            <li>
                                <a href="contact">Контакты</a>
                            </li>
                            <li>
                                <a href="policy">Политика конфиденциальности</a>
                            </li>
                            <li>
                                <a href="warranty">Гарантия и возврат</a>
                            </li>
                            <li>
                                <a href="delivery">Доставка и оплата</a>
                            </li>
                            <li>
                                <a href="faq">Вопросы и ответы</a>
                            </li>
                            <li>
                                <a href="help">Помощь главная</a>
                            </li>
                            <li>
                                <a href="lk">Личный кабинет</a>
                            </li>
                            <li>
                                <a href="profile">ЛК Личные данные</a>
                            </li>
                            <li>
                                <a href="orderlist">ЛК Мои заказы</a>
                            </li>
                            <li>
                                <a href="orderdetails">ЛК Заказ подробности</a>
                            </li>
                            <li>
                                <a href="waitlist">ЛК Лист Ожидания</a>
                            </li>
                            <li>
                                <a href="fblist">ЛК Мои отзывы</a>
                            </li>
                            <li>
                                <a href="404">404</a>
                            </li>
                            <li>
                                <a href="email">email</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2>Модалки</h2>
                        <ul>
                            <li>
                                <a href="#!" data-modal-open="subscribe">подписка</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="modal-recover">восстановление пароля</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="modal-login">вход</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="modal-register">регистрация</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="modal-call">заказать звонок</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="location">Выбор города</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="help">Охват политики конфиденциальности</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="feedback">Оставить отзыв</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="feedback-full">Оставить отзыв подробный</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="write-us">Напишите нам</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="vacancy">Анкета соискателя</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="success-order">Спасибо</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="add-address">Добавить адрес</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="cancel-order">Отменить заказ</a>
                            </li>
                            <li>
                                <a href="#!" data-modal-open="modal-test">Поведение полей ввода Safari Mobile</a>
                            </li>
                        </ul>
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
            <modal-write-us></modal-write-us>
            <modal-vacancy></modal-vacancy>
            <modal-feedback></modal-feedback>
            <modal-feedback-full></modal-feedback-full>
            <modal-add-address></modal-add-address>
            <modal-cancel-order></modal-cancel-order>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-Content",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>
header,
footer,
.aside-container {
    display: none !important;
    visibility: hidden !important;
    position: absolute !important;
    opacity: 0;
    top: 0;
    left: 0;
}

body {
    background-color: moccasin;
}

.cont {
    display: grid;
    gap: 50px;
    background-color: moccasin;
}

@media (min-width: 769px) {
    .cont {
        grid-template-columns: max-content max-content;
        gap: 30px;
    }
}

.cont > div {
    padding: 20px;
}

.cont h2 {
    margin-bottom: 30px;
}

.cont > div a {
    font-weight: 400;
    font-size: 20px;
    color: initial;
    text-decoration: underline;
}

li {
    margin-bottom: 20px;
}
</style>
