<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="news">Новости</a>
                    <a href="#!" aria-current="location">Iphone 11, почему такой же как и Pro Max</a>
                </div>
                <div class="article wrapper">
                    <div class="article-content">
                        <p class="article__date">Дата публикации: <time datetime="2021-04-25">25 апреля 2021</time></p>
                        <h1 class="title">На Дальнем Востоке растет спрос на смартфоны с тремя камерами</h1>
                        <p>В этом ролике мы посмотрим на небольшой "не умный" телевизор от компании Philips - Philips 32PHS4203. Эта
                            модель стоит менее 15000 рублей и отлично подойдет тем, кому не нужен функционал Smart TV, а также тому,
                            кто планирует использовать внешнюю Android приставку или Apple TV. При этом телевизор отличается
                            неплохим качеством изображения хорошей глубиной черного цвета, благодаря.</p>
                        <div class="article__media">
                            <div class="article__iframe">
                                <iframe src="https://www.youtube.com/embed/3MAfK4vN1Hw" allowfullscreen="" width="16" height="9"></iframe>
                            </div>
                            <p>Оператор: Василий Иванов, Комментатор: Еватерина Ионова, Галина Сташевич, Монтажер: Андрей Рюмкин</p>
                        </div>
                        <p>В сентябре прошлого года компания Apple в очередной раз представила нам свою обновленную серию iPhone.
                            На этот раз линейка пополнилась уже 3-мя устройствами, каждое из которых найдет своего покупателяя, а мы
                            рассмотрим с вами основные плюсы и минусы данной линейки в нашем небольшом видео. В сентябре прошлого
                            года компания Apple в очередной раз представила нам свою обновленную серию iPhone. На этот раз линейка
                            пополнилась уже 3-мя устройствами, каждое из которых найдет своего покупателяя, а мы рассмотрим с вами
                            основные плюсы и минусы данной линейки в нашем небольшом видео.</p>
                        <p>В сентябре прошлого года компания Apple в очередной раз представила нам свою обновленную серию iPhone.
                            На этот раз линейка пополнилась уже 3-мя устройствами, каждое из которых найдет своего покупателяя, а мы
                            рассмотрим с вами основные плюсы и минусы данной линейки в нашем небольшом видео. В сентябре прошлого
                            года компания Apple в очередной раз представила нам свою обновленную серию iPhone. На этот раз линейка
                            пополнилась уже 3-мя устройствами, каждое из которых найдет своего покупателяя, а мы рассмотрим с вами
                            основные плюсы и минусы данной линейки в нашем небольшом видео.</p>
                        <strong class="article__shear-title">Поделиться</strong>
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
                                <a href="#!" aria-label="наша страница твиттер">
                                    <svg width="40" height="40">
                                        <use href="#icon-tw"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница одноклассники">
                                    <svg width="40" height="40">
                                        <use href="#icon-ok"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница гугл плюс">
                                    <svg width="40" height="40">
                                        <use href="#icon-gp"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" aria-label="наша страница майл ру">
                                    <svg width="40" height="40">
                                        <use href="#icon-mr"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="article-aside">
                        <div class="article-aside__inner">
                            <h2>Последние новости</h2>
                            <div class="article-aside__list">
                                <a href="#">В Сибири за 2019 год вырос спрос на проводные и беспроводные внешние аккумуляторы</a>
                                <a href="#">Какие смартфоны выбирали жители Красноярска на Новый Год</a>
                                <a href="#">В 2019 году продажи устройств для умного дома выросли в 3,5 раза</a>
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
    name: "Page-Article",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
