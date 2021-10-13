<template>
    <div id="modal-recover-next" class="modal modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Восстановление пароля</h3>
                </div>
                <div class="modal-main">
                    <form class="form form--recover-next" method="post" autocomplete="on">
              <span class="form__field-wrap">
                Введите новый пароль
                <label class="form__field-password">
                  <input type="password" placeholder="Введите новый пароль" name="password" data-pass-origin
                         data-validate="password" required>
                  <span class="show-password">
                    <svg width="20" height="20">
                      <use href="#icon-password-eye"></use>
                    </svg>
                  </span>
                </label>
              </span>
                        <span class="form__field-wrap">
                Повторите новый пароль
                <label class="form__field-password password-repeat">
                  <input type="password" placeholder="Повторите ввод пароля" name="password-rep" data-pass-repeat
                         data-validate="password" required>
                  <span class="show-password">
                    <svg width="20" height="20">
                      <use href="#icon-password-eye"></use>
                    </svg>
                  </span>
                </label>
              </span>
                        <button class="form__submit btn btn-purple form__btn-recover" type="submit">Изменить пароль
                        </button>
                    </form>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть"
                        data-modal-close="modal-recover-next"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Recover-Next"
}
</script>

<style scoped>

</style>
