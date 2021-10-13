<template>
    <div id="modal-recover" class="modal modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Восстановление пароля</h3>
                </div>
                <div class="modal-main">
                    <form class="form form--recover" method="post" autocomplete="on">
                        <p class="form__instruction">Введите адрес вашей электронной почты и мы направим вам инструкцию
                            для смены
                            пароля</p>
                        <label class="form__field-wrap">
                            Электронная почта
                            <input type="text" name="email" placeholder="Введите адрес электронной почты"
                                   data-validate="email"
                                   required>
                        </label>
                        <button class="form__submit btn btn-purple form__btn-recover" type="submit">Восстановить
                            пароль
                        </button>
                        <a class="form__link" href="#!" data-modal-open="modal-login">Войти</a>
                        <a class="form__link" href="#!" data-modal-open="modal-register">Зарегистрироваться</a>
                    </form>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть"
                        data-modal-close="modal-recover"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Recover"
}
</script>

<style scoped>

</style>
