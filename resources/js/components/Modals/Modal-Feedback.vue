<template>
    <div id="feedback" class="modal feedback-modal modal-from-right" aria-hidden="true">
        <div class="modal-wrap  submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Написать отзыв</h3>
                </div>
                <div class="modal-main">
                    <div class="feedback-modal__list">
                        <div class="feedback-modal__list-item">
                            <input id="item-0" class="visually-hidden" type="radio" name="item" checked>
                            <span class="custom-radio"></span>
                            <label for="item-0" class="order-element">
                  <span class="order-element__wrap-img">
                    <picture>
                      <!-- 1x-100px/120px 2x-200px/240px -->
                      <source type="image/webp"
                              srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                      <img class=content-img src="img/content/phone-small.jpg"
                           srcset="img/content/phone-small@2x.jpg 2x" width="100" height="120" alt="картинка"
                           loading=lazy
                           decoding=async>
                    </picture>
                  </span>
                                <span class="order-element__info">
                    <span class="order-element__vendor">Арт. 064206</span>
                    <span class="order-element__desc">Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid
                      2019</span>
                  </span>
                            </label>
                        </div>
                        <div class="feedback-modal__list-item">
                            <input id="item-1" class="visually-hidden" type="radio" name="item">
                            <span class="custom-radio"></span>
                            <label for="item-1" class="order-element">
                  <span class="order-element__wrap-img">
                    <picture>
                      <!-- 1x-100px/120px 2x-200px/240px -->
                      <source type="image/webp"
                              srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                      <img class=content-img src="img/content/phone-small.jpg"
                           srcset="img/content/phone-small@2x.jpg 2x" width="100" height="120" alt="картинка"
                           loading=lazy
                           decoding=async>
                    </picture>
                  </span>
                                <span class="order-element__info">
                    <span class="order-element__vendor">Арт. 064206</span>
                    <span class="order-element__desc">Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid
                      2019</span>
                  </span>
                            </label>
                        </div>
                        <div class="feedback-modal__list-item">
                            <input id="item-2" class="visually-hidden" type="radio" name="item">
                            <span class="custom-radio"></span>
                            <label for="item-2" class="order-element">
                  <span class="order-element__wrap-img">
                    <picture>
                      <!-- 1x-100px/120px 2x-200px/240px -->
                      <source type="image/webp"
                              srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                      <img class=content-img src="img/content/phone-small.jpg"
                           srcset="img/content/phone-small@2x.jpg 2x" width="100" height="120" alt="картинка"
                           loading=lazy
                           decoding=async>
                    </picture>
                  </span>
                                <span class="order-element__info">
                    <span class="order-element__vendor">Арт. 064206</span>
                    <span class="order-element__desc">Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid
                      2019</span>
                  </span>
                            </label>
                        </div>
                        <div class="feedback-modal__list-item">
                            <input id="item-3" class="visually-hidden" type="radio" name="item">
                            <span class="custom-radio"></span>
                            <label for="item-3" class="order-element">
                  <span class="order-element__wrap-img">
                    <picture>
                      <!-- 1x-100px/120px 2x-200px/240px -->
                      <source type="image/webp"
                              srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                      <img class=content-img src="img/content/phone-small.jpg"
                           srcset="img/content/phone-small@2x.jpg 2x" width="100" height="120" alt="картинка"
                           loading=lazy
                           decoding=async>
                    </picture>
                  </span>
                                <span class="order-element__info">
                    <span class="order-element__vendor">Арт. 064206</span>
                    <span class="order-element__desc">Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid
                      2019</span>
                  </span>
                            </label>
                        </div>
                    </div>
                    <button class="feedback-modal__submit btn btn-purple" type="button"
                            data-modal-open="feedback-full">Продолжить
                    </button>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть" data-modal-close="fast-order"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Feedback"
}
</script>

<style scoped>

</style>
