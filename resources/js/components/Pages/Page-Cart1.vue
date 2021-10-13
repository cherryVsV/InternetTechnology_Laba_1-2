<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <section class="cart">
                    <h1 class="visually-hidden">Оформление заказа</h1>
                    <div class="cart-checkout">
                        <div class="bread-crumbs ">
                            <a href="index">Главная</a>
                            <a href="cart">Корзина</a>
                            <a href="cart1" aria-current="location">Оформление заказа</a>
                        </div>
                        <h2 class="title cart__title wrapper">Укажите покупателя</h2>
                        <form class="cart-products" method="post" autocomplete="on">
                            <div class="cart-checkout__wrap">
                                <div class="cart-checkout__user">
                                    <div>
                                        <label class="form__field-wrap">
                                            Ваше имя
                                            <input type="text" placeholder="Введите ваше имя" name="name" data-validate
                                                   required v-model="order.name">
                                        </label>
                                        <label class="form__field-wrap">
                                            Электронная почта
                                            <input type="text" placeholder="Введите вашу электронную почту" name="email"
                                                   data-validate="email"
                                                   required v-model="order.email">
                                        </label>
                                        <label class="form__field-wrap">
                                            Номер телефона
                                            <input type="text" name="phone" placeholder="Введите номер телефона"
                                                   data-validate="phone" required v-model="order.phone">
                                        </label>
                                    </div>
                                    <div>
                                        <p class="cart-checkout__cabinet">У вас уже есть личный кабинет?</p>
                                        <p class="cart-checkout__enter"><a class="link" href="#"
                                                                           data-modal-open="modal-login">Войдите</a>
                                            для
                                            отслеживания статуса заказа в личном кабинете, накопления бонусов и
                                            автоматического
                                            заполнения форм
                                        </p>
                                        <strong class="cart-checkout__social-title">Войти через социальные
                                            сети:</strong>
                                        <ul class="social-icons">
                                            <li>
                                                <a href="#!" aria-label="наша страница фейсбук">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-fb"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница в контакте">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-vk"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница твиттер">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-tw"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница одноклассники">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-ok"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница гугл плюс">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-gp"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" aria-label="наша страница майл ру">
                                                    <svg width="40" height="40">
                                                        <use href="#icon-mr"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cart-checkout__radio cart-checkout__radio-shpt">
                                    <h2 class="wrapper">Доставка в&ensp;<span
                                        data-modal-open="location">Санкт петербург</span>
                                    </h2>
                                    <div class="sort-fieldset">
                                        <h3 class="sort-title wrapper">Способ получения</h3>
                                        <div class="cart-checkout__tabs-wrap">
                                            <div class="sort-fieldset-radio">
                                                <input class="visually-hidden" id="shpt-courier" type="radio"
                                                       name="shpt"
                                                       @click="delivery(1)">
                                                <label for="shpt-courier"><span class="custom-radio"></span>Доставка
                                                    курьером</label>
                                                <span
                                                    class="shpt-description">В удобный для вас день и интервал времени</span>
                                                <div class="shpt-footer">
                                                    <span>c 24/06</span>
                                                    <span>Бесплатно</span>
                                                </div>
                                            </div>
                                            <fieldset class="checkout-form-wrap">
                                                <legend class="visually-hidden">Адрес получателя</legend>
                                                <div class="form checkout-form">
                                                    <h3 class="checkout-form__title">Адрес получателя</h3>
                                                    <div class="checkout-form__wrap-fields">
                                                        <label class="form__field-wrap">
                                                            Улица*
                                                            <input type="text" placeholder="Введите вашу улицу"
                                                                   name="street"
                                                                   data-validate required v-model="street">
                                                        </label>
                                                        <div class="form__three-blocks">
                                                            <label class="form__field-wrap">
                                                                Дом*
                                                                <input type="text" placeholder="Дом" name="house"
                                                                       data-validate
                                                                       required v-model="house">
                                                            </label>
                                                            <label class="form__field-wrap">
                                                                Подъезд
                                                                <input type="text" placeholder="Подъезд" name="house"
                                                                       v-model="entrance">
                                                            </label>
                                                            <label class="form__field-wrap">
                                                                Квартира
                                                                <input type="text" placeholder="Квартира" name="house"
                                                                       v-model="flat">
                                                            </label>
                                                        </div>
                                                        <div class="form__two-blocks">
                                                            <span>Дата доставки</span>
                                                            <VueDatePicker v-model="date"
                                                                           clearable
                                                                           :locale="locale"
                                                                           format="DD MMMM YYYY"
                                                                           name="Выберите дату доставки"
                                                                           placeholder="Выберите дату доставки"
                                                                           no-header
                                                                           button-validate="Ок"
                                                                           button-cancel="Отмена"
                                                                           validate
                                                                           no-calendar-icon
                                                                           fullscreen-mobile
                                                                           :color="color"
                                                                           :min-date="new Date().toISOString().substr(0, 10)"/>
                                                        </div>
                                                        <label class="form__field-wrap form__field-textarea">
                                                            Комментарий к доставке
                                                            <textarea name="comment"
                                                                      placeholder="Введите ваше сообщение"
                                                                      v-model="order.comment"></textarea>
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="sort-fieldset-radio">
                                                <input @click="delivery(2)" class="visually-hidden" id="shpt-self"
                                                       type="radio" name="shpt">
                                                <label for="shpt-self"><span
                                                    class="custom-radio"></span>Самовывоз</label>
                                                <span
                                                    class="shpt-description">Без лишних рук и когда удобно 1 пункт</span>
                                                <div class="shpt-footer">
                                                    <span>c 24/06</span>
                                                    <span>Бесплатно</span>
                                                </div>
                                            </div>
                                            <fieldset class="checkout-form-wrap">
                                                <legend class="visually-hidden">Пункт самовывоза</legend>
                                                <div class="form checkout-form">
                                                    <h3>Пункт самовывоза</h3>
                                                    <div id="map" class="map map--shpt"></div>
                                                    <div class="checkout-form__address">
                                                        <p>Mediashop24</p>
                                                        <p>СПб, Ждановская наб. 7</p>
                                                        <span>График : 10:00-21:00</span>
                                                    </div>
                                                    <div class="form__two-blocks form__two-blocks--map">
                                                        <span>Дата доставки</span>
                                                        <VueDatePicker v-model="date"
                                                                       clearable
                                                                       :locale="locale"
                                                                       format="DD MMMM YYYY"
                                                                       name="Выберите дату доставки"
                                                                       placeholder="Выберите дату доставки"
                                                                       no-header
                                                                       button-validate="Ок"
                                                                       button-cancel="Отмена"
                                                                       validate
                                                                       no-calendar-icon
                                                                       fullscreen-mobile
                                                                       :color="color"
                                                                       :min-date="new Date().toISOString().substr(0, 10)"/>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="sort-fieldset-radio" @click="delivery(3)">
                                                <input class="visually-hidden" id="shpt-country" type="radio"
                                                       name="shpt">
                                                <label for="shpt-country"><span class="custom-radio"></span>Доставка по
                                                    РФ</label>
                                                <span
                                                    class="shpt-description">Без лишних рук и когда удобно 1 пункт</span>
                                                <div class="shpt-footer">
                                                    <span>c 24/06</span>
                                                    <span>Бесплатно</span>
                                                </div>
                                            </div>
                                            <fieldset class="checkout-form-wrap">
                                                <legend class="visually-hidden">Адрес получателя</legend>
                                                <div class="form checkout-form">
                                                    <h3 class="checkout-form__title">Адрес получателя</h3>
                                                    <div class="checkout-form__wrap-fields">
                                                        <label class="form__field-wrap">
                                                            Индекс*
                                                            <input type="text" placeholder="Введите ваш индекс"
                                                                   name="index"
                                                                   data-validate="number"
                                                                   required v-model="order.postcode">
                                                        </label>
                                                        <label class="form__field-wrap">
                                                            Улица*
                                                            <input type="text" placeholder="Введите вашу улицу"
                                                                   name="street"
                                                                   data-validate required v-model="street">
                                                        </label>
                                                        <div class="form__three-blocks">
                                                            <label class="form__field-wrap">
                                                                Дом*
                                                                <input type="text" placeholder="Дом" name="house"
                                                                       data-validate
                                                                       required v-model="house">
                                                            </label>
                                                            <label class="form__field-wrap">
                                                                Подъезд
                                                                <input type="text" placeholder="Подъезд" name="house"
                                                                       v-model="entrance">
                                                            </label>
                                                            <label class="form__field-wrap">
                                                                Квартира
                                                                <input type="text" placeholder="Квартира" name="house"
                                                                       v-model="flat">
                                                            </label>
                                                        </div>
                                                        <label class="form__field-wrap form__field-textarea">
                                                            Комментарий к доставке
                                                            <textarea name="comment"
                                                                      placeholder="Введите ваше сообщение"
                                                                      v-model="order.comment"></textarea>
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-checkout__radio cart-checkout__payment">
                                    <h2>Способ оплаты</h2>
                                    <div class="sort-fieldset">
                                        <h3 class="sort-title">Выберите удобный способ оплаты</h3>
                                        <div class="sort-fieldset-radio" v-for="payment in payments">
                                            <input class="visually-hidden" :id="payment.id" type="radio" name="payment"
                                                   required @click="paymentMethod(payment.id)">
                                            <label :for="payment.id"><span
                                                class="custom-radio"></span>{{ payment.title }}</label>
                                            <span class="payment-description">{{ payment.description }}</span>
                                            <div class="pay-card-icon">
                                                <fragment v-for="icon in JSON.parse(payment.images)">
                                                    <span :class="icon"></span>
                                                </fragment>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-products__amount-wrap">
                                <div class="cart-checkout__list-items">
                                    <div class="cart-checkout__item" v-for="cart in $store.state.cart">
                                        <div class="cart-products__img">
                                            <img :src="JSON.parse(cart.images).main" width="55" height="65"
                                                 alt="айфон 8">
                                        </div>
                                        <div class="cart-products__name">
                                            <p>{{ cart.title }}</p>
                                            <small>Арт. {{ cart.article }}</small>
                                            <small>Количество {{ cart.quantity }}</small>
                                        </div>
                                        <div class="cart-products__price">
                                            <span class="cart-products__new-price">{{ cart.new_price }}₽</span>
                                            <s v-if="cart.previous_price>0"
                                               class="cart-products__old-price">{{ cart.previous_price }}₽</s>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-products__amount">
                                    <div class="cart-products__amount-top wrapper">
                                        <div class="cart-products__promo">
                                            <button class="cart-products__promo-btn cart-products__promo-accept"
                                                    type="button"
                                                    data-toggle-text="Удалить">Применить
                                            </button>
                                            <label class="cart-products__promo-btn cart-products__has-promo">
                                                <input class="" type="text" placeholder="Есть промокод?" name="promo">
                                            </label>
                                        </div>
                                        <div class="cart-products__initial-price">
                                            <span class="cart-products__amount-name">Товаров (<span>{{
                                                    $store.state.cartCount
                                                }}</span>) на сумму</span>
                                            <span
                                                class="cart-products__amount-price">{{ totalPrice + totalDiscount }}₽</span>
                                        </div>
                                    </div>
                                    <div class="cart-products__amount-middle cart-products__amount-middle--checkout">
                                        <div>Скидка<s>{{ totalDiscount }}₽</s></div>
                                        <div>Доставка<span>Договорная</span></div>
                                    </div>
                                    <div class="cart-products__amount-bottom wrapper">
                                        <div class="cart-products__total-wrap">Итого<span
                                            class="cart-products__total">{{ totalPrice }}₽</span></div>
                                        <button class="cart-products__btn-order btn btn-purple" type="submit"
                                                @click="makeOrder">Оформить заказ
                                        </button>
                                        <div class="cart-checkout__footer">
                                            <div>
                                                <p>После осуществления заказа мы свяжемся с вами, чтобы уточнить все
                                                    детали</p>
                                                <p>*Итоговая стоимость заказа рассчитана без учета стоимости доставки,
                                                    информацию о стоимости
                                                    доставки
                                                    предоставит менеджер при звонке</p>
                                            </div>
                                            <div class="cart-checkout__links">
                                                <a class="link" href="#" data-tab="offer" data-modal-open="help">Договор
                                                    оферты</a>
                                                <a class="link" href="#" data-tab="ship" data-modal-open="help">Доставка
                                                    и
                                                    оплата</a>
                                                <a class="link" href="#" data-tab="policy" data-modal-open="help">Политика
                                                    конфиденциальности</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </main>
        </div>
        <footer-main></footer-main>
        <template id="template">
            <!-- На всех страницах -->
            <modal-login></modal-login>
            <modal-register></modal-register>
            <modal-recover></modal-recover>
            <modal-recover-next></modal-recover-next>
            <modal-call></modal-call>
            <modal-location></modal-location>
            <modal-search-header></modal-search-header>
            <modal-success-order></modal-success-order>
            <modal-fail></modal-fail>
            <modal-error></modal-error>
            <modal-help></modal-help>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
import {VueDatePicker} from '@mathieustan/vue-datepicker';
import '@mathieustan/vue-datepicker/dist/vue-datepicker.min.css';
import Form from "vform";

export default {
    name: "Page-Cart1",
    components: {VueDatePicker},
    props: {
        auth_user: {
            default: null
        },
        payments: {
            required: true
        }
    },
    data() {
        return {
            order: new Form({
                'user_id': null,
                'delivery_id': 0,
                'payment_id': 0,
                'name': '',
                'phone': '',
                'price': '',
                'quantity': '',
                'address': '',
                'postcode': '',
                'comment': '',
                'delivery_datetime': '',
                'products': []
            }),
            locale: {lang: 'ru'},
            date: new Date(),
            color: '#5f3ec0',
            street: '',
            house: '',
            flat: '',
            entrance: ''
        }
    },
    computed: {
        totalPrice() {
            let total = 0;
            for (let item of this.$store.state.cart) {
                total += item.totalPrice;
            }
            return total;
        },
        totalDiscount() {
            let discount = 0;

            for (let item of this.$store.state.cart) {
                if (item.previous_price > item.new_price) {
                    discount += (item.previous_price - item.new_price) * item.quantity;
                }
            }
            return discount;
        }
    },
    methods: {
        makeOrder() {
            this.order.price = this.totalPrice
            this.order.quantity = this.$store.state.cartCount
            this.order.address = 'ул.' + this.street + ' ' + this.house + ', кв.' + this.flat + ', подъезд ' + this.entrance
            this.order.delivery_datetime = this.date
            this.order.products = this.$store.state.cart
            if (this.auth_user !== null) {
                this.order.user_id = this.auth_user.id
            }
            console.log(this.order)
            this.order.post('api/new/order').then(response => {
                if (response.data.href !== undefined) {
                    this.street = ''
                    this.house = ''
                    this.flat = ''
                    this.entrance = ''
                    date: new Date(),
                    axios.post('/delete/cart', {'id': 0})
                    this.$store.commit('clearCart');
                    location.href = response.data.href
                }
            })


        },
        delivery(type) {
            this.order.delivery_id = type
        },
        paymentMethod(type) {
            this.order.payment_id = type
        }
    }
}
</script>

<style scoped>

</style>
