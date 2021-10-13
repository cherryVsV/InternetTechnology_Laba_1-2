<template>
    <form class="filters" method="post" autocomplete="on">
        <h2 class="filters__caption">Фильтр</h2>
       <PriceFilterComponent :min-value="min" :max-value="max"></PriceFilterComponent>
        <label class="filters__item sort-fieldset-checkbox filters__single">
            <input class="visually-hidden filter-input" type="checkbox" name="availability"
                   value="Товар в наличии" v-model="isAmount" @change="getAmount">
            <span class="custom-checkbox"></span>
            <span>Товар в наличии</span>
        </label>
        <DiscountFilterComponent></DiscountFilterComponent>
        <label class="filters__item sort-fieldset-checkbox filters__single">
            <input class="visually-hidden filter-input" type="checkbox" name="discount" value="Скидка"
            v-model="isDiscount" @change="getDiscount">
            <span class="custom-checkbox"></span>
            <span>Скидка</span>
        </label>
        <div v-if="subcategories!==null" class="filters__fieldset" v-for="subcategory in subcategories">
        <SubcategoriesFilterComponent :subcategory="subcategory"></SubcategoriesFilterComponent>
        </div>
        <div v-if="subcategories===null" class="filters__fieldset" v-for="filter in filters">
            <SubcategoriesFilterComponent :filter="filter"></SubcategoriesFilterComponent>
        </div>
        <div class="filters__buttons shadows-footer hidden">
            <button class="filters__reset btn btn-black" type="reset">Сбросить</button>
            <button class="filters__btn-show btn btn-purple" type="button" data-modal-close="filters"
                    data-count="">Посмотреть
            </button>
        </div>
        <button class="filters__btn-close modal-close" type="button" aria-label="закрыть"
                data-modal-close="filters"></button>
    </form>
</template>

<script>
import PriceFilterComponent from "./PriceFilterComponent";
import DiscountFilterComponent from "./DiscountFilterComponent";
import SubcategoriesFilterComponent from "./SubcategoriesFilterComponent";
import {eventBus} from '../../../app'
export default {
    name: "FiltersComponent",
    components: {SubcategoriesFilterComponent, DiscountFilterComponent, PriceFilterComponent},
    props:{
        subcategories:{
            default: null
        },
        filters:{
            default: null
        },
        min:{
            type:Number
        },
        max:{
            type:Number
        },
    },
    data(){
        return{
            isDiscount: false,
            isAmount: false
        }
    },
    methods:{
        getDiscount(){
            eventBus.$emit('discountFilter', this.isDiscount)
        },
        getAmount(){
            eventBus.$emit('amountFilter', this.isAmount)
        }
    }
}
</script>

<style scoped>

</style>
