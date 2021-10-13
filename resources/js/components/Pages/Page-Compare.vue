<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs ">
                    <a href="index">Главная</a>
                    <a href="#" aria-current="location">Сравнение</a>
                </div>
                <div class="compare">
                    <div class="compare__head">
                        <h1 class="subtitle">Сравнение товаров<sup class="title-counter">{{
                                $store.state.compareCount
                            }}</sup></h1>
                        <button class="compare__clear-list" type="button" @click="clearCompare">Очистить список
                            <svg width="32" height="32">
                                <use href="#icon-delete"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="compare__category-slider slider-container">
                        <div class="compare__category swiper-wrapper">
                            <label class="compare__category-item swiper-slide" v-for="category in categories">
                                <input class="visually-hidden" type="radio" name="category" @click="sortByCategory(category)">
                                <span class="compare__category-type btn">
                 {{ category }}
                <span role="button" class="btn-close remove-compare-slide"></span>
                <sup class="title-counter">{{ countCompareByCategory(category) }}</sup>
              </span>
                            </label>
                        </div>
                    </div>
                    <div class="compare__main">
                        <div class="compare__options">
                            <fieldset class="sort-fieldset compare__fieldset-sticky">
                                <legend>Сортировка</legend>
                                <label class="sort-fieldset-radio" @click="getSort('all')">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Все параметры</span>
                                </label>
                                <label class="sort-fieldset-radio" @click="getSort('dif')">
                                    <input type="radio" name="param">
                                    <span class="custom-radio"></span>
                                    <span>Только различающиеся</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="compare__product-slider product-card-container" :key="trig">
                            <div class="compare-container-img slider-container">
                                <div class="product-card-list swiper-wrapper">
                                    <div class="swiper-slide swiper-slide--full"
                                         v-for="compare in compared">
                                        <CompareItem :compare="compare"></CompareItem>
                                    </div>

                                </div>
                                <button class="btn-slider btn-slider--next arrow arrow--right" type="button"
                                        aria-label="следующий слайд"></button>
                                <button class="btn-slider btn-slider--prev arrow arrow--left" type="button"
                                        aria-label="предыдущий слайд"></button>
                            </div>
                            <label class="compare__all-dif">
                                Только различия
                                <input class="visually-hidden" type="checkbox" name="difference">
                                <span class="custom-checkbox"></span>
                            </label>
                            <div class="compare-container-def slider-container">
                                <div class="product-card-list swiper-wrapper">
                                    <div class="swiper-slide swiper-slide--full" v-for="param in params">
                                        <div class="difference" v-if="typeof(param)==='string'">
                                            <dl class="difference__list" v-for="(value, key) in JSON.parse(param)">
                                                <dt>{{ key }}</dt>
                                                <dd v-if="value!==''" v-for="v in value">{{ v }}</dd>
                                                <dd v-if="value===''">Нет данных</dd>
                                            </dl>
                                        </div>
                                        <div class="difference" v-if="typeof(param)!=='string'">
                                            <dl class="difference__list"  v-for="(value, key) in param">
                                                <dt>{{ key }}</dt>
                                                <dd v-if="value!==''" v-for="v in value">{{ v }}</dd>
                                                <dd v-if="value===''">Нет данных</dd>
                                            </dl>
                                        </div>


                                    </div>
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
import CompareItem from "../PagesComponents/Compared/CompareItem";

export default {
    name: "Page-Compare",
    components: {CompareItem},
    props: {
        auth_user: {
            default: null
        }
    },
    data() {
        return {
            sort: '',
            trig: -100,
            title: ''
        }
    },

    methods: {
        clearCompare() {
            this.$store.commit('clearCompare');
        },

        countCompareByCategory(category) {
            return this.$store.state.compare.filter(f => f.category === category).length
        },
        getSort(str) {
            this.trig++
            this.sort = str
        },
        sortByCategory(category){
            this.title = category
            this.trig++
        }
    },
    computed: {
        compared(){
            return this.$store.state.compare.filter(comp=>comp.category===this.title)
        },
        categories() {
            this.title =  [...new Set(this.$store.state.compare.map(f => f.category))][0]
            return [...new Set(this.$store.state.compare.map(f => f.category))]
        },
        params() {
            this.trig++
            if (this.sort === 'dif') {
                let p = this.compared.map(f => f.properties)
                let res = []
                for (let n = 0; n < p.length; n++) {
                    if (n + 1 < p.length) {
                        let res1 = []
                        let res2 = []
                        if (p[n] === '') {
                            res1 = 'Нет данных'
                        } else {
                            res1 = JSON.parse(p[n])
                        }
                        if (p[n + 1] === '') {
                            res2 = 'Нет данных'
                        } else {
                            res2 = JSON.parse(p[n + 1])
                        }
                        let keys = Object.keys(res1)

                        for (let i in keys) {
                            let k = keys[i]
                            if (JSON.stringify(res1[k]) !== JSON.stringify(res2[k])) {
                                let obj1 = {}
                                let obj2 = {}
                                obj1[k] = res1[k]
                                obj2[k] = res2[k]
                                if (n < res.length) {
                                    res[n] = Object.assign(res[n], obj1)
                                } else {
                                    res[n] = obj1
                                }
                                if (n + 1 < res.length) {
                                    res[n + 1] = Object.assign(res[n + 1], obj2)
                                } else {
                                    res[n + 1] = obj2
                                }
                            }

                        }
                    }
                }

                return res
            } else {
                return this.compared.map(f => f.properties)
            }
        },
        sortedParams() {

        }

    }
}
</script>

<style scoped>

</style>
