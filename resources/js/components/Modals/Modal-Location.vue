<template>
    <div id="location" class="modal modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body modal-body--location">
                <div class="menu-head">
                    <h3 class="menu-title">Выбор города</h3>
                </div>
                <div class="modal-main header__location-search">
                    <div class="custom-search active">
                        <b class="custom-search__title">Всего <span>200</span> городов</b>
                        <label class="custom-search-field">
                            <input id="search-input" type="search" name="search">
                        </label>
                        <div class="custom-search__content"></div>
                    </div>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть" data-modal-close="location"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Location"
}
</script>

<style scoped>

</style>
