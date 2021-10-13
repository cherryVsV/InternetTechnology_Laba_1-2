<template>
    <div id="feedback-full" class="modal feedback-modal modal-from-right" aria-hidden="true">
        <div class="modal-wrap  submenu-block-desktop">
            <div class="form-wrap modal-body">
                <div class="menu-head">
                    <h3 class="menu-title">Написать отзыв</h3>
                </div>
                <div class="modal-main">
                    <div class="order-element order-element--fast">
                        <div class="order-element__wrap-img">
                            <picture>
                                <!-- 1x-100px/120px 2x-200px/240px -->
                                <source type="image/webp"
                                        srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                <img class=content-img src="img/content/phone-small.jpg"
                                     srcset="img/content/phone-small@2x.jpg 2x"
                                     width="100" height="120" alt="картинка" loading=lazy decoding=async>
                            </picture>
                        </div>
                        <div class="order-element__info">
                            <span class="order-element__vendor">Арт. 064206</span>
                            <p class="order-element__desc">Apple MacBook Air 13 дисплей Retina с технологией True Tone
                                Mid 2019</p>
                        </div>
                    </div>
                    <form class="form form--feedback" method="post" autocomplete="on">
                        <div class="feedback-modal__rating">
                            <span>Kачество</span>
                            <fieldset class="rating">
                                <legend>Звездный рейтинг</legend>
                                <div class="group">
                                    <input id="star-1qual" type="radio" name="rating-quality" value="1">
                                    <label for="star-1qual" aria-label="1 звезда"></label>
                                    <input id="star-2qual" type="radio" name="rating-quality" value="2">
                                    <label for="star-2qual" aria-label="2 звезды"></label>
                                    <input id="star-3qual" type="radio" name="rating-quality" value="3">
                                    <label for="star-3qual" aria-label="3 звезды"></label>
                                    <input id="star-4qual" type="radio" name="rating-quality" value="4">
                                    <label for="star-4qual" aria-label="4 звезды"></label>
                                    <input id="star-5qual" type="radio" name="rating-quality" value="5">
                                    <label for="star-5qual" aria-label="5 звезд"></label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="feedback-modal__rating">
                            <span>Сервис</span>
                            <fieldset class="rating">
                                <legend>Звездный рейтинг</legend>
                                <div class="group">
                                    <input id="star-1serv" type="radio" name="rating-serv" value="1">
                                    <label for="star-1serv" aria-label="1 звезда"></label>
                                    <input id="star-2serv" type="radio" name="rating-serv" value="2">
                                    <label for="star-2serv" aria-label="2 звезды"></label>
                                    <input id="star-3serv" type="radio" name="rating-serv" value="3">
                                    <label for="star-3serv" aria-label="3 звезды"></label>
                                    <input id="star-4serv" type="radio" name="rating-serv" value="4">
                                    <label for="star-4serv" aria-label="4 звезды"></label>
                                    <input id="star-5serv" type="radio" name="rating-serv" value="5">
                                    <label for="star-5serv" aria-label="5 звезд"></label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="feedback-modal__rating">
                            <span>Доставка</span>
                            <fieldset class="rating">
                                <legend>Звездный рейтинг</legend>
                                <div class="group">
                                    <input id="star-1ship" type="radio" name="rating-ship" value="1">
                                    <label for="star-1ship" aria-label="1 звезда"></label>
                                    <input id="star-2ship" type="radio" name="rating-ship" value="2">
                                    <label for="star-2ship" aria-label="2 звезды"></label>
                                    <input id="star-3ship" type="radio" name="rating-ship" value="3">
                                    <label for="star-3ship" aria-label="3 звезды"></label>
                                    <input id="star-4ship" type="radio" name="rating-ship" value="4">
                                    <label for="star-4ship" aria-label="4 звезды"></label>
                                    <input id="star-5ship" type="radio" name="rating-ship" value="5">
                                    <label for="star-5ship" aria-label="5 звезд"></label>
                                </div>
                            </fieldset>
                        </div>
                        <label class="form__field-wrap form__field-wrap--name">
                            Ваше имя*
                            <input type="text" placeholder="Введите ваше имя" name="user-name" data-validate required>
                        </label>
                        <label class="form__field-wrap form__field-comment">
                            Комментарий*
                            <textarea name="comment" placeholder="Введите ваше сообщение" data-validate
                                      required></textarea>
                        </label>
                        <p class="feedback-modal__title-upload">Загрузить изображение в формате JPEG, JPG, PNG</p>
                        <div class="feedback-modal__gallery">
                            <div class="feedback-modal__add">
                                <input class="visually-hidden" id="fileLoader" type="file" name="fileLoader"
                                       accept="image/.png, .jpg, .jpeg" multiple>
                                <label for="fileLoader" aria-label="Добавить фото"></label>
                            </div>
                        </div>
                        <div class="feedback-modal__recommend">
                            <label>
                                <input class="visually-hidden" type="radio" name="like" value="like">
                                <svg width="24" height="24">
                                    <use href="#icon-like"></use>
                                </svg>
                                <span>Я рекомендую этот товар </span>
                            </label>
                            <label>
                                <input class="visually-hidden" type="radio" name="like" value="dislike">
                                <svg width="24" height="24">
                                    <use href="#icon-dislike"></use>
                                </svg>
                                <span>Я не рекомендую этот товар </span>
                            </label>
                        </div>
                        <div class="feedback-modal__btns">
                            <button class="form__submit btn btn-purple" type="submit">Отправить</button>
                            <button class="btn btn-black" type="button" data-modal-close="feedback-full">Отменить
                            </button>
                        </div>
                    </form>
                </div>
                <button class="submenu-close" type="button" aria-label="закрыть" data-modal-close="fast-order"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Feedback-Full"
}
</script>

<style scoped>

</style>
