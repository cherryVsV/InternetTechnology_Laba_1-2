<template>
    <div id="fail-modal" class="modal modal-error modal-scale" aria-hidden="true">
        <div class="modal-wrap">
            <div class="modal-body modal-error__body">
                <h3 class="menu-title">Заявка не отправлена &#128542;</h3>
                <p>Не удалось соединиться с сервером, попробуйте еще раз</p>
                <button type="button" class="submenu-close" data-modal-close="fail-modal" aria-label="закрыть"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Fail"
}
</script>

<style scoped>

</style>
