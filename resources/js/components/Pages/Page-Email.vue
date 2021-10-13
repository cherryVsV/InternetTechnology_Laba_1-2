<template>
    <fragment>
        <svg-icons-email></svg-icons-email>
        <div class="email">
            <header-email></header-email>
            <main>
                <h1>Здравствуйте, <a href="lk">{{order.name}}!</a></h1>
                <div class="text-block">
                    <p>Ваш заказ номер <a href="orderdetails">{{order.id}}</a> принят в наши надежные руки.</p>
                    <p>Мы свяжемся с Вами в ближайшее время для его подтверждения. Подробнее с условиями доставки Вы можете
                        ознакомиться на сайте в разделе <a href="delivery">Доставка и оплата.</a></p>
                    <p>Статус заказа можно отслеживать в личном кабинете в разделе <a href="orderlist">Мои заказы.</a></p>
                </div>
                <h2>Товары в заказе</h2>
                <div class="email__order">
                    <div class="email__list">
                        <div class="email__list-item" v-for="product in order.products">
                            <div class="img-wrap">
                                <img :src="JSON.parse(product.images).main" width="55" height="65" alt="айфон 8">
                            </div>
                            <div class="content-wrap">
                                <div class="name">
                                    <small>Арт. {{product.article}}</small>
                                    <p>{{product.title}}</p>
                                </div>
                                <span class="amount">{{product.quantity}}шт</span>
                                <b class="price">{{product.price}}₽</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="email__price">Скидка: <b>12₽</b></div>
                <div class="email__price email__price--total">Итого: <b>{{order.price}}₽</b></div>
                <h2 class="email__title">Данные покупателя</h2>
                <dl class="email__user-info">
                    <dt>Имя Фамилия:</dt>
                    <dd>{{order.name}}</dd>
                    <dt>Номер телефона:</dt>
                    <dd>{{order.phone}}</dd>
                    <dt>Email:</dt>
                    <dd>{{order.email}}</dd>
                </dl>
                <h2 class="email__title">Доставка и оплата</h2>
                <dl class="email__user-info">
                    <dt>Способ доставки:</dt>
                    <dd>Курьер Mediashop</dd>
                    <dt>Адрес доставки:</dt>
                    <dd>Санкт-Петербург, ул. Лиговский проспект, д. 20, стр. 42, под.1, кв. 254</dd>
                    <dt>Способ оплаты:</dt>
                    <dd>Банковская карта</dd>
                    <dt>Дата и время доставки:</dt>
                    <dd>
                        <time datetime="2021-08-27">27 августа 2021</time>
                        с 10:00 до 15:00
                    </dd>
                </dl>
            </main>
            <footer-email></footer-email>
            <p class="email__disclaimer">ИП Демидова Л.И. (ИНН 781128388406, ОГРН 304784725700099 (13.09.2004 г.)
                Представленная в настоящем письме информация носит справочный характер и не является публичной офертой,
                определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации.
                Письмо создано автоматически, пожалуйста, не отвечайте на него. Если у вас возникли дополнительные вопросы,
                пишите нам на <a href="mailto:info@mediashop24.ru">info@mediashop24.ru</a>
            </p>
        </div>
    </fragment>
</template>

<script>
export default {
    name: "Page-Email",
    props:{
        order: {
            required: true
        }
    }
}
</script>

<style scoped>

</style>
