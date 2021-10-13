<template>
    <div id="modal-login" class="modal modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Войти</h3>
                </div>
                <div class="modal-main">
                    <form class="form form--login" method="post" autocomplete="on"
                          @submit.prevent="loginUser"
                          @keydown="form.onKeydown($event)">
                        <label class="form__field-wrap">
                            Электронная почта
                            <input type="email" name="email" placeholder="Введите адрес электронной почты"
                                   data-validate="email" required
                                   id="email" v-model="form.email">
                        </label>
                        <span class="form__field-wrap">
                            Пароль
                            <label class="form__field-password">
                                <input type="password" placeholder="Введите пароль" name="password"
                                       data-validate="password" autocomplete="off" required
                                       id="password" v-model="form.password">
                                <span class="show-password">
                                    <svg width="20" height="20">
                                        <use href="#icon-password-eye"></use>
                                </svg>
                                </span>
                            </label>
                        </span>
                        <a class="form__forgot-pass form__link" href="#!" data-modal-open="modal-recover">Не помню
                            пароль</a>
                        <button class="form__submit btn btn-purple" type="submit"
                                :disabled='form.errors.any() || !isComplete'>Вход</button>
                    </form>
                    <div class="modal-login-footer">
                        <p>Нет аккаунта? <a class="form__link" href="#!" data-modal-open="modal-register">Зарегистрироваться</a>
                        </p>
                        <strong>Войти через социальные сети:</strong>
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
                <button class="submenu-close" type="button" aria-label="закрыть"
                        data-modal-close="modal-login"></button>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "vform"
import {HasError} from "vform/src/components/bootstrap5"

export default {
    components: {HasError},
    name: "Modal-Login",
    data: function () {
        return {
            form: new Form({
                email: '',
                password: ''
            }),

        }
    },
    methods: {
        async loginUser() {
            await this.form.post('login')
            location.reload()
        },
    },
    computed: {
        isComplete () {
            return this.form.email && this.form.password;
        }
    }
}
</script>

<style scoped>

</style>
