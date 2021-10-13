<template>
    <div class="filters__fieldset">
        <div class="filters__title filters__title--price filters__title-active arrow arrow--down">
            Цена
        </div>


        <div class="filters__list double-range" :data-min="minValue" :data-max="maxValue" data-step="10"
             :data-low="minValue" :data-high="maxValue" @click="getPriceFilter()">
            <fieldset class="double-range-inner">
                <legend class="visually-hidden">диапазон цен</legend>
                <output data-key="low" data-value="">От </output>
                <output data-key="high" data-value="">До </output>
                <div class="range-wrap" >
                    <div class="track"></div>
                   <label class="thumb" data-key="low" aria-label="минимальное значение">
                        <input class="visually-hidden" type="range" name="value_from"
                               data-key="low">
                    </label>
                    <label class="thumb" data-key="high" aria-label="максимальное значение">
                        <input class="visually-hidden" type="range" name="value_to"
                               data-key="high" >
                    </label>
                </div>
            </fieldset>
        </div>
    </div>
</template>

<script>
import {eventBus} from '../../../app'

export default {
    name: "PriceFilterComponent",
    props: {
        minValue: {
            type: Number,
            default: 0
        },
        maxValue: {
            type: Number,
            default: 100000
        }
    },
    data(){
        return{
            minPrice: 0,
            maxPrice: 100000
        }
    },
    methods: {
        getPriceFilter(event) {
            this.minPrice = event.currentTarget.getAttribute('data-low');
            this.maxPrice = event.currentTarget.getAttribute('data-high');
            console.log(this.minPrice)
            console.log(this.maxPrice)
            let prices = []
            if (this.minPrice > this.maxPrice) {
                prices.push(this.maxPrice)
                prices.push(this.minPrice)
            }
            else{
                prices.push(this.minPrice)
                prices.push(this.maxPrice)
            }
            eventBus.$emit('priceFilter', prices)

        },

    }
}
</script>

<style scoped>

</style>
