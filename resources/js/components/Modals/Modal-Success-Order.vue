<template>
    <div id="success-order" class="modal success-order modal-scale" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Спасибо!</h3>
                </div>
                <div class="modal-main success-order__main">
                    <div class="success-order__text">Форма успешно отправлена</div>
                    <div class="modal-login-footer">
                        <strong>Следи за нами в соц. сетях:</strong>
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
                                <a href="#!" aria-label="наша страница инстаграмм">
                                    <svg width="40" height="40">
                                        <use href="#icon-ig"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница ютуб">
                                    <svg width="40" height="40">
                                        <use href="#icon-yt"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница телеграмм">
                                    <svg width="40" height="40">
                                        <use href="#icon-tg"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="modal-close-mobile" type="button" data-modal-close="success-order">Вернуться назад
                    </button>
                </div>
                <button type="button" class="submenu-close" data-modal-close="success-order"
                        aria-label="закрыть"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Success-Order"
}
</script>

<style scoped>

</style>
