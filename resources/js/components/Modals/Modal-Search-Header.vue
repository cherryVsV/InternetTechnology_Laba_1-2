<template>
    <div id="search-header" class="modal modal--search modal-from-top">
        <div class="search-menu modal-body">
            <label aria-label="поиск по сайту">
                <input class="header__search-input" type="search" name="search" placeholder="Я хочу найти...">
                <svg width="24" height="24">
                    <use href="#icon-search"></use>
                </svg>
            </label>
            <button class="header__search-close" type="reset" data-modal-close="search-header"
                    aria-label="очистить"></button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Search-Header"
}
</script>

<style scoped>

</style>
