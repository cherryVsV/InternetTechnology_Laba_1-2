<template>
    <div id="add-address" class="modal modal--address modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Добавить новый адрес</h3>
                </div>
                <div class="modal-main">
                    <form class="form form--address" method="post" autocomplete="on">
                        <label class="form__select">
                            Название региона
                            <span class="form__select-wrap arrow arrow--down">
                  <select name="time" data-validate required>
                    <option value="" selected disabled>Выберите регион</option>
                    <option value="moscow">Московская область</option>
                    <option value="piter">Ленинградская область</option>
                    <option value="rostov">Ростовская область</option>
                    <option value="krasnodar">Краснодарский край</option>
                  </select>
                </span>
                        </label>
                        <label class="form__field-wrap">
                            Улица*
                            <input type="text" placeholder="Введите вашу улицу" name="street" data-validate required>
                        </label>
                        <label class="form__field-wrap">
                            Название нас.пункта*
                            <input type="text" placeholder="Введите название нас.пункта" name="street" data-validate
                                   required>
                        </label>
                        <label class="form__field-wrap">
                            Индекс
                            <input type="text" placeholder="Введите индекс" name="street" data-validate="number">
                        </label>
                        <div class="form__three-blocks">
                            <label class="form__field-wrap">
                                Дом*
                                <input type="text" placeholder="Дом" name="house" data-validate required>
                            </label>
                            <label class="form__field-wrap">
                                Подъезд
                                <input type="text" placeholder="Подъезд" name="house">
                            </label>
                            <label class="form__field-wrap">
                                Квартира
                                <input type="text" placeholder="Квартира" name="house">
                            </label>
                        </div>
                        <button class="form__submit btn btn-purple" type="submit">Добавить</button>
                    </form>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть"
                        data-modal-close="add-address"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Add-Address"
}
</script>

<style scoped>

</style>
