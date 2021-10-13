<template>
    <div id="vacancy" class="modal modal-vacancies modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="modal-vacancies__inner">
                <div class="form-wrap modal-body">
                    <div class="menu-head">
                        <h3 class="menu-title">Анкета соискателя</h3>
                    </div>
                    <div class="modal-main">
                        <form class="form form--vacancy" method="post" autocomplete="on">
                            <label class="form__field-wrap form__field-wrap--name">
                                Ваше имя
                                <input type="text" placeholder="Введите ваше имя" name="user-name" data-validate
                                       required>
                            </label>
                            <label class="form__select arrow arrow--down">
                                Выбрать позицию
                                <select name="position">
                                    <option value="consultant">Продавец-консультант</option>
                                    <option value="courier">Курьер</option>
                                    <option value="support">Сотрудник тех. поддержки</option>
                                    <option value="admin">Администратор магазина</option>
                                    <option value="analyst">Бизнес аналитик</option>
                                    <option value="engineer">Инжинер</option>
                                </select>
                            </label>
                            <label class="form__field-wrap">
                                Номер телефона
                                <input type="text" placeholder="Введите ваш номер телефона" name="phone"
                                       data-validate="phone"
                                       required>
                            </label>
                            <label class="form__field-wrap">
                                E-mail
                                <input type="text" placeholder="Введите адрес электронной почты" name="email"
                                       data-validate="email"
                                       required>
                            </label>
                            <label class="form__field-wrap form__field-comment">
                                Откуда вы узнали о вакансии?
                                <textarea name="comment" placeholder="Введите ваше сообщение"></textarea>
                            </label>
                            <label class="form__checkbox-wrap">
                                <input class="visually-hidden" type="checkbox" name="agreement" data-validate required>
                                <span class="checkbox-item"></span>
                                <span>Нажимая кнопку вы даете согласие на обработку персональных данных и соглашаетесь с <a
                                    class="privacy-policy-link link" href="#!" data-tab="policy" data-modal-open="help">политикой
                      конфиденциальности.</a></span>
                            </label>
                            <div class="form__fileload">
                                <input class="visually-hidden" id="fileLoader" type="file" name="fileLoader">
                                <label for="fileLoader" data-text="Прикрепить резюме">
                                    <svg width="24" height="24">
                                        <use href="#icon-fileload"></use>
                                    </svg>
                                    <button class="btn-remove-file" type="button" aria-label="удалить"></button>
                                </label>
                            </div>
                            <button class="form__submit btn btn-purple" type="submit">Отправить</button>
                        </form>
                        <button class="modal-close-mobile" type="button" data-modal-close="vacancy">Вернуться назад
                        </button>
                    </div>
                    <button class="submenu-close" type="button" aria-label="закрыть"
                            data-modal-close="vacancy"></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Vacancy"
}
</script>

<style scoped>

</style>
