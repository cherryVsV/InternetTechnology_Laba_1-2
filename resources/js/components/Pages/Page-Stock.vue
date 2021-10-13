<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="#!" aria-current="location">Акции</a>
                </div>
                <div class="news">
                    <h1 class="subtitle">Акции<sup class="title-counter">12</sup></h1>
                    <div class="news__category slider-container">
                        <div class="news__category-slider slider-container">
                            <div class="news__slider-wrapper swiper-wrapper">
                                <label class="news__category-item swiper-slide">
                                    <input class="visually-hidden" type="checkbox" name="Все" checked>
                                    <span>Все</span>
                                </label>
                                <label class="news__category-item swiper-slide">
                                    <input class="visually-hidden" type="checkbox" name="Рассрочка">
                                    <span>Рассрочка</span>
                                </label>
                                <label class="news__category-item swiper-slide">
                                    <input class="visually-hidden" type="checkbox" name="Trade-in">
                                    <span>Trade-in</span>
                                </label>
                                <label class="news__category-item swiper-slide">
                                    <input class="visually-hidden" type="checkbox" name="Распродажа">
                                    <span>Распродажа</span>
                                </label>
                                <label class="news__category-item swiper-slide">
                                    <input class="visually-hidden" type="checkbox" name="Кредит">
                                    <span>Кредит</span>
                                </label>
                                <label class="news__category-item swiper-slide">
                                    <input class="visually-hidden" type="checkbox" name="Промокоды">
                                    <span>Промокоды</span>
                                </label>
                            </div>
                        </div>
                        <div class="sort-view">
                            <button class="btn-view" type="button" data-value="view-column">
                                <svg width="26" height="22">
                                    <use href="#icon-view-column"></use>
                                </svg>
                            </button>
                            <button class="btn-view active" type="button" data-value="view-row">
                                <svg width="26" height="22">
                                    <use href="#icon-view-row"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="news__body">
                        <div class="news__sorting">
                            <fieldset class="sort-fieldset">
                                <legend>Сортировка</legend>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Сначала новые</span>
                                </label>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>С высоким рейтингом</span>
                                </label>
                                <label class="sort-fieldset-radio">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>По цене</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="news__content">
                            <div class="news__articles view-row">
                                <article class="article-el">
                                    <a href="article" class="article-el__img">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="img/content/news/news.webp 345w, img/content/news/news@2x.webp 700w"
                                                    sizes="(max-width: 768px) 100vw, 345px">
                                            <img src="img/content/news/news.jpg" srcset="img/content/news/news@2x.jpg 700w"
                                                 sizes="(max-width: 769px) 100vw, 345px" alt="новость" decoding="async"
                                                 loading="lazy">
                                        </picture>
                                    </a>
                                    <div class="article-el__body">
                                        <h3><a class="text-limiter" href="article">Iphone 11, почему такой же как и Pro
                                            Max, может быть в
                                            3 строки и вот таким большим</a></h3>
                                        <time datetime="2005-09-11">11 сентября 2005</time>
                                        <p class="text-limiter"> Видео разбор с ответами на самые часто задаваемые вопросы может
                                            быть большим
                                            в 3 строки, видео разбор с ответами на самые часто задаваемые</p>
                                        <a href="article" class="link">Читать далее</a>
                                    </div>
                                </article>
                                <article class="article-el">
                                    <a href="article" class="article-el__img">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="img/content/news/news.webp 345w, img/content/news/news@2x.webp 700w"
                                                    sizes="(max-width: 768px) 100vw, 345px">
                                            <img src="img/content/news/news.jpg" srcset="img/content/news/news@2x.jpg 700w"
                                                 sizes="(max-width: 769px) 100vw, 345px" alt="новость" decoding="async"
                                                 loading="lazy">
                                        </picture>
                                    </a>
                                    <div class="article-el__body">
                                        <h3><a class="text-limiter" href="article">Iphone 11, почему такой же как и Pro
                                            Max, может быть в
                                            3 строки и вот таким большим</a></h3>
                                        <time datetime="2005-09-11">11 сентября 2005</time>
                                        <p class="text-limiter"> Видео разбор с ответами на самые часто задаваемые вопросы может
                                            быть большим
                                            в 3 строки, видео разбор с ответами на самые часто задаваемые</p>
                                        <a href="article" class="link">Читать далее</a>
                                    </div>
                                </article>
                                <article class="article-el">
                                    <a href="article" class="article-el__img">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="img/content/news/news.webp 345w, img/content/news/news@2x.webp 700w"
                                                    sizes="(max-width: 768px) 100vw, 345px">
                                            <img src="img/content/news/news.jpg" srcset="img/content/news/news@2x.jpg 700w"
                                                 sizes="(max-width: 769px) 100vw, 345px" alt="новость" decoding="async"
                                                 loading="lazy">
                                        </picture>
                                    </a>
                                    <div class="article-el__body">
                                        <h3><a class="text-limiter" href="article">Iphone 11, почему такой же как и Pro
                                            Max, может быть в
                                            3 строки и вот таким большим</a></h3>
                                        <time datetime="2005-09-11">11 сентября 2005</time>
                                        <p class="text-limiter"> Видео разбор с ответами на самые часто задаваемые вопросы может
                                            быть большим
                                            в 3 строки, видео разбор с ответами на самые часто задаваемые</p>
                                        <a href="article" class="link">Читать далее</a>
                                    </div>
                                </article>
                                <article class="article-el">
                                    <a href="article" class="article-el__img">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="img/content/news/news.webp 345w, img/content/news/news@2x.webp 700w"
                                                    sizes="(max-width: 768px) 100vw, 345px">
                                            <img src="img/content/news/news.jpg" srcset="img/content/news/news@2x.jpg 700w"
                                                 sizes="(max-width: 769px) 100vw, 345px" alt="новость" decoding="async"
                                                 loading="lazy">
                                        </picture>
                                    </a>
                                    <div class="article-el__body">
                                        <h3><a class="text-limiter" href="article">Iphone 11, почему такой же как и Pro
                                            Max, может быть в
                                            3 строки и вот таким большим</a></h3>
                                        <time datetime="2005-09-11">11 сентября 2005</time>
                                        <p class="text-limiter"> Видео разбор с ответами на самые часто задаваемые вопросы может
                                            быть большим
                                            в 3 строки, видео разбор с ответами на самые часто задаваемые</p>
                                        <a href="article" class="link">Читать далее</a>
                                    </div>
                                </article>
                                <article class="article-el">
                                    <a href="article" class="article-el__img">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="img/content/news/news.webp 345w, img/content/news/news@2x.webp 700w"
                                                    sizes="(max-width: 768px) 100vw, 345px">
                                            <img src="img/content/news/news.jpg" srcset="img/content/news/news@2x.jpg 700w"
                                                 sizes="(max-width: 769px) 100vw, 345px" alt="новость" decoding="async"
                                                 loading="lazy">
                                        </picture>
                                    </a>
                                    <div class="article-el__body">
                                        <h3><a class="text-limiter" href="article">Iphone 11, почему такой же как и Pro
                                            Max, может быть в
                                            3 строки и вот таким большим</a></h3>
                                        <time datetime="2005-09-11">11 сентября 2005</time>
                                        <p class="text-limiter"> Видео разбор с ответами на самые часто задаваемые вопросы может
                                            быть большим
                                            в 3 строки, видео разбор с ответами на самые часто задаваемые</p>
                                        <a href="article" class="link">Читать далее</a>
                                    </div>
                                </article>
                                <article class="article-el">
                                    <a href="article" class="article-el__img">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="img/content/news/news.webp 345w, img/content/news/news@2x.webp 700w"
                                                    sizes="(max-width: 768px) 100vw, 345px">
                                            <img src="img/content/news/news.jpg" srcset="img/content/news/news@2x.jpg 700w"
                                                 sizes="(max-width: 769px) 100vw, 345px" alt="новость" decoding="async"
                                                 loading="lazy">
                                        </picture>
                                    </a>
                                    <div class="article-el__body">
                                        <h3><a class="text-limiter" href="article">Iphone 11, почему такой же как и Pro
                                            Max, может быть в
                                            3 строки и вот таким большим</a></h3>
                                        <time datetime="2005-09-11">11 сентября 2005</time>
                                        <p class="text-limiter"> Видео разбор с ответами на самые часто задаваемые вопросы может
                                            быть большим
                                            в 3 строки, видео разбор с ответами на самые часто задаваемые</p>
                                        <a href="article" class="link">Читать далее</a>
                                    </div>
                                </article>
                            </div>
                            <div class="news__pagination">
                                <button class="btn btn-purple news__more">Показать еще</button>
                                <div class="pagination">
                                    <a href="#!" aria-current="location">1</a>
                                    <a href="#!">2</a>
                                    <a href="#!">3</a>
                                </div>
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
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-Stock",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
