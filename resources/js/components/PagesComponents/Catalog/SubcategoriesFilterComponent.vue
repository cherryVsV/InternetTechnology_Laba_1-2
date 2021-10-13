<template>
    <fragment>
        <div v-if="count>0 && subcategory!==null" class="filters__title filters__title--vendor arrow arrow--down">{{subcategory.title}}</div>
        <div v-if="count>0 && subcategory!==null" class="filters__list filters__list--vendor" data-visible-elements="4">
            <label class="filters__item sort-fieldset-checkbox" v-for="filter in filters">
                <input class="visually-hidden filter-input" type="checkbox" :name="filter.filter.toLowerCase()"
                       :value="filter.filter" @change="getParam(filter)">
                <span class="custom-checkbox"></span>
                <span>{{filter.filter}}</span>
            </label>
            <button class="filters__item filters__load-items" type="button">Посмотреть еще {{filters.length-4}}
                вариант...
            </button>
        </div>
        <label v-if="count===0 && subcategory!==null" class="filters__item sort-fieldset-checkbox filters__single" style='padding: initial!important'>
            <input class="visually-hidden filter-input" type="checkbox" name="availability" :name="subcategory.title.toLowerCase()"
                   :value="subcategory.title" @change="getSubcategory(subcategory)">
            <span class="custom-checkbox"></span>
            <span>{{subcategory.title}}</span>
        </label>
        <label v-if="subcategory===null" class="filters__item sort-fieldset-checkbox filters__single" style='padding: initial!important'>
            <input class="visually-hidden filter-input" type="checkbox" name="availability" :name="filter.filter.toLowerCase()"
                   :value="filter.filter" @change="getParam(filter)">
            <span class="custom-checkbox"></span>
            <span>{{filter.filter}}</span>
        </label>
    </fragment>
</template>

<script>
import {eventBus} from '../../../app'
export default {
    name: "SubcategoriesFilterComponent",
    props:{
        subcategory:{
            default:null
        },
        filter:{
            default: null
        }
    },
    data(){
        return{
            filters: [],
            count: 0,
            isCategory: false,
            isFilter: false
        }
    },
    methods:{
        getFilters(){
            if(this.subcategory!==null) {
                axios.get('api/filters/' + this.subcategory.id)
                    .then(response => {
                        this.filters = response.data
                        this.count = response.data.length
                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
            else
            {
                axios.get('api/filters/' + this.filter.subcategory_id)
                    .then(response => {
                        this.filters = response.data
                        this.count = response.data.length
                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
        },
        getParam(filter){
            this.isFilter = !this.isFilter
            if(this.isFilter===false) {
                filter.id = 0
            }
            eventBus.$emit('paramFilter', filter.id)
        },
        getSubcategory(subcategory){
            this.isCategory = !this.isCategory
            if(this.isCategory===false) {
                subcategory.id = 0
            }
            eventBus.$emit('subcategoryFilter', subcategory.id)

        }
    },
    mounted(){
        this.getFilters();

    }
}
</script>

<style scoped>

</style>
