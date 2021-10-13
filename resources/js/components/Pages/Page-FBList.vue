<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs bread-crumbs--lk">
                    <a href="index">Главная</a>
                    <a href="lk">Личный кабинет</a>
                    <a href="fblist" aria-current="location">Мои отзывы</a>
                </div>
                <div class="lk">
                    <h1 class="title title-lk wrapper">Личный кабинет</h1>
                    <div class="lk__container">
                        <div class="lk__left">
                            <div class="lk__left-inner">
                                <div class="lk__name">
                                    <p>Александр Меладзе</p>
                                    <div>Бонусный счет: <span>12.256</span></div>
                                </div>
                                <div class="lk__nav">
                                    <a class="lk__nav-link link arrow arrow--right" href="lk">Профиль</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="profile">Личные данные</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="orderlist">Мои заказы</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="favorite">Избранное</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="waitlist">Лист ожидания</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="fblist">Мои отзывы</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="help">Помощь</a>
                                    <a class="lk__logout" href="index">Выход</a>
                                </div>
                            </div>
                        </div>
                        <div class="lk__main lk-fb">
                            <h2 class="title wrapper">Мои отзывы</h2>
                            <div class="lk-fb__list wrapper">
                                <div class="lk-fb__item">
                                    <div class="lk-fb__header">
                                        <span class="lk-fb__status">Отзыв на модерации</span>
                                        <span class="lk-fb__vendor-code">Арт. 064206</span>
                                    </div>
                                    <div class="lk-fb__wrap">
                                        <p class="lk-fb__product-name">Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid 2019, с
                                            чехлом, с наушниками, со всякими плюшками и еще бог весть с чем</p>
                                        <div class="lk-fb__img">
                                            <picture>
                                                <!-- 1x-100px/120px 2x-200px/240px -->
                                                <source type="image/webp"
                                                        srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                                <img src="img/content/phone-small.jpg" srcset="img/content/phone-small@2x.jpg 2x" width="100"
                                                     height="120" alt="apple8" loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <dl class="lk-fb__rating">
                                            <dt>Качество</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                            <dt>Сервис</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                            <dt>Доставка</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                        </dl>
                                    </div>
                                    <div class="lk-fb__comment">
                                        <b class="caption">Комментарий:</b>
                                        <p>После 8ки пересел на 11, решил что 6"1 не станет проблемой - но ошибся, не смотря на мои достаточно
                                            большие руки, пользоваться одной рукой из-за некоторых нюансов интерфейса</p>
                                    </div>
                                    <div class="lk-fb__photos">
                                        <img src="img/content/fb1.jpg" alt="фото телефона">
                                        <img src="img/content/fb2.jpg" alt="фото телефона">
                                        <img src="img/content/fb3.jpg" alt="фото телефона">
                                        <img src="img/content/fb4.jpg" alt="фото телефона">
                                    </div>
                                    <label class="lk-fb__recommend">
                                        <input class="visually-hidden" type="checkbox" name="recommendation">
                                        <svg width="24" height="24">
                                            <use href="#icon-like"></use>
                                        </svg>
                                        <span>Я рекомендую этот товар</span>
                                    </label>
                                </div>
                                <div class="lk-fb__item">
                                    <div class="lk-fb__header">
                                        <span class="lk-fb__status">Отзыв на модерации</span>
                                        <span class="lk-fb__vendor-code">Арт. 064206</span>
                                    </div>
                                    <div class="lk-fb__wrap">
                                        <p class="lk-fb__product-name">Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid 2019, с
                                            чехлом, с наушниками, со всякими плюшками и еще бог весть с чем</p>
                                        <div class="lk-fb__img">
                                            <picture>
                                                <!-- 1x-100px/120px 2x-200px/240px -->
                                                <source type="image/webp"
                                                        srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                                <img src="img/content/phone-small.jpg" srcset="img/content/phone-small@2x.jpg 2x" width="100"
                                                     height="120" alt="apple8" loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <dl class="lk-fb__rating">
                                            <dt>Качество</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                            <dt>Сервис</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                            <dt>Доставка</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                        </dl>
                                    </div>
                                    <div class="lk-fb__comment">
                                        <b class="caption">Комментарий:</b>
                                        <p>После 8ки пересел на 11, решил что 6"1 не станет проблемой - но ошибся, не смотря на мои достаточно
                                            большие руки, пользоваться одной рукой из-за некоторых нюансов интерфейса</p>
                                    </div>
                                    <div class="lk-fb__photos">
                                        <img src="img/content/fb1.jpg" alt="фото телефона">
                                        <img src="img/content/fb2.jpg" alt="фото телефона">
                                        <img src="img/content/fb3.jpg" alt="фото телефона">
                                        <img src="img/content/fb4.jpg" alt="фото телефона">
                                    </div>
                                    <label class="lk-fb__recommend">
                                        <input class="visually-hidden" type="checkbox" name="recommendation">
                                        <svg width="24" height="24">
                                            <use href="#icon-like"></use>
                                        </svg>
                                        <span>Я рекомендую этот товар</span>
                                    </label>
                                </div>
                                <div class="lk-fb__item">
                                    <div class="lk-fb__header">
                                        <span class="lk-fb__status">Отзыв на модерации</span>
                                        <span class="lk-fb__vendor-code">Арт. 064206</span>
                                    </div>
                                    <div class="lk-fb__wrap">
                                        <p class="lk-fb__product-name">Apple MacBook Air 13 дисплей Retina с технологией True Tone Mid 2019, с
                                            чехлом, с наушниками, со всякими плюшками и еще бог весть с чем</p>
                                        <div class="lk-fb__img">
                                            <picture>
                                                <!-- 1x-100px/120px 2x-200px/240px -->
                                                <source type="image/webp"
                                                        srcset="img/content/phone-small.webp 1x, img/content/phone-small@2x.webp 2x">
                                                <img src="img/content/phone-small.jpg" srcset="img/content/phone-small@2x.jpg 2x" width="100"
                                                     height="120" alt="apple8" loading=lazy decoding=async>
                                            </picture>
                                        </div>
                                        <dl class="lk-fb__rating">
                                            <dt>Качество</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                            <dt>Сервис</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                            <dt>Доставка</dt>
                                            <dd class="star-rating star-rating--5"></dd>
                                        </dl>
                                    </div>
                                    <div class="lk-fb__comment">
                                        <b class="caption">Комментарий:</b>
                                        <p>После 8ки пересел на 11, решил что 6"1 не станет проблемой - но ошибся, не смотря на мои достаточно
                                            большие руки, пользоваться одной рукой из-за некоторых нюансов интерфейса</p>
                                    </div>
                                    <div class="lk-fb__photos">
                                        <img src="img/content/fb1.jpg" alt="фото телефона">
                                        <img src="img/content/fb2.jpg" alt="фото телефона">
                                        <img src="img/content/fb3.jpg" alt="фото телефона">
                                        <img src="img/content/fb4.jpg" alt="фото телефона">
                                    </div>
                                    <label class="lk-fb__recommend">
                                        <input class="visually-hidden" type="checkbox" name="recommendation">
                                        <svg width="24" height="24">
                                            <use href="#icon-like"></use>
                                        </svg>
                                        <span>Я рекомендую этот товар</span>
                                    </label>
                                </div>
                            </div>
                            <div class="lk-fb__btn-wrap shadow">
                                <button class="btn btn-purple lk-fb__btn" type="button" data-modal-open="feedback">Написать отзыв</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer-main></footer-main>
        <template id="template">
            <!-- На всех страницах -->
            <modal-login></modal-login>
            <modal-fast-order></modal-fast-order>
            <modal-register></modal-register>
            <modal-recover></modal-recover>
            <modal-recover-next></modal-recover-next>
            <modal-call></modal-call>
            <modal-location></modal-location>
            <modal-search-header></modal-search-header>
            <modal-success-order></modal-success-order>
            <modal-fail></modal-fail>
            <modal-error></modal-error>
            <modal-subscribe></modal-subscribe>
            <modal-help></modal-help>
            <!-- Только на этой странице -->
            <modal-feedback></modal-feedback>
            <modal-feedback-full></modal-feedback-full>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-FBList",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
