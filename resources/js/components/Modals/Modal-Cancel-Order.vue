<template>
    <div id="cancel-order" class="modal cancel-order modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Отмена заказа</h3>
                </div>
                <div class="modal-main">
                    <form class="form form--cancel-order" method="post" autocomplete="on">
                        <div class="cancel-order__text">
                            <p>Пожалуйста, напишите нам почему вы решили отменить заказ</p>
                            <p class="order">Заказ: <span class="cancel-order__number">#064206</span></p>
                        </div>
                        <label class="form__select">
                            Выберите причину
                            <span class="form__select-wrap arrow arrow--down">
                  <select name="reason" required>
                    <option value="ship-cost">Стоимость доставки</option>
                    <option value="ship-time">Сроки доставки</option>
                    <option value="cheep">Нашел дешевле</option>
                    <option value="changed-my-mind">Передумал</option>
                    <option value="other">Другое</option>
                  </select>
                </span>
                        </label>
                        <label class="form__field-wrap form__field-comment">
                            Комментарий
                            <textarea name="comment" placeholder="Введите ваше сообщение"></textarea>
                        </label>

                        <div class="cancel-order__btn-wrap">
                            <button class="form__submit btn btn-purple" type="submit">Отправить</button>
                            <button class="form__submit btn btn-white" type="button"
                                    data-modal-close="cancel-order">Отменить
                            </button>
                        </div>
                    </form>
                    <button class="modal-close-mobile" type="button" data-modal-close="write-us">Вернуться назад
                    </button>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть"
                        data-modal-close="cancel-order"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Cancel-Order"
}
</script>

<style scoped>

</style>
