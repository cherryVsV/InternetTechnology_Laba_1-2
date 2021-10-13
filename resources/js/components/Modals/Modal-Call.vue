<template>
    <div id="modal-call" class="modal modal--call modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Заказать звонок</h3>
                </div>
                <div class="modal-main">
                    <form class="form form--call" method="post" autocomplete="on">
                        <label class="form__field-wrap">
                            Номер телефона
                            <input type="text" name="phone" placeholder="Введите номер телефона" data-validate="phone"
                                v-model="user.phone" required>
                        </label>
                        <label class="form__field-wrap">
                            Ваше имя
                            <input type="text" placeholder="Введите ваше имя" name="user-name"  v-model="user.name" data-validate required>
                        </label>
                        <label class="form__select">
                            Укажите время
                            <span class="form__select-wrap arrow arrow--down">
                  <select name="time"  v-model="user.time">
                    <option value="08:00-10:00">08:00-10:00</option>
                    <option value="10:00-12:00">10:00-12:00</option>
                    <option value="13:00-15:00">13:00-15:00</option>
                    <option value="15:00-17:00">15:00-17:00</option>
                    <option value="17:00-19:00">17:00-19:00</option>
                  </select>
                </span>
                        </label>
                        <label class="form__checkbox-wrap">
                            <input class="visually-hidden" type="checkbox" name="agreement" data-validate required>
                            <span class="checkbox-item"></span>
                            <span>Нажимая кнопку вы даете согласие на обработку персональных данных и соглашаетесь с <a
                                class="privacy-policy-link link" href="#!" data-tab="policy" data-modal-open="help">политикой
                    конфиденциальности.</a></span>
                        </label>
                        <button class="form__submit btn btn-purple" type="submit" @click="sendRequest">Перезвонить</button>
                    </form>
                    <div class="modal-call-phones">
                        <p>Также вы можете сэкономить время, позвонив нам прямо сейчас:</p>
                        <a class="link" href="tel:+78124486811">
                            <svg width="24" height="24">
                                <use href="#icon-phone"></use>
                            </svg>
                            +7 (812) 448 68 11
                        </a>
                        <a class="link" href="tel:+78003333224">
                            <svg width="24" height="24">
                                <use href="#icon-phone"></use>
                            </svg>
                            +7 (800) 333 32 24
                        </a>
                    </div>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть" data-modal-close="modal-call"></button>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "vform";

export default {
    name: "Modal-Call",
    data(){
        return{
            user: new Form({
                name: '',
                phone: '',
                time: ''
            })
        }
    },
    methods: {
        getUser() {
            try {
                axios.get('/auth/user').then((response) => {
                    if (response.data.user !== null) {
                        this.user.phone = response.data.user.phone
                        this.user.name = response.data.user.name
                    }
                })
            } catch (e) {
            }
        },
        sendRequest(){
            console.log(this.user)
            this.user.post('api/new/phone/request')
        }
    },
    mounted() {
        this.getUser()
    }
}
</script>

<style scoped>

</style>
