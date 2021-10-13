<template>
   <fragment>
        <a  class="aside__link" :href="'/catalog-type=subcategory-id='+this.subcategory.id">
            <svg width="48" height="48">
                <use :href="subcategory.icon"></use>
            </svg>
            {{subcategory.title}}
        </a>
        <div class="submenu-block parent">
            <div class="menu-head">
                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                <h3 class="menu-title">{{subcategory.title}}</h3>
            </div>
            <ul class="aside__list">
                <li class="submenu-item" v-for="filter in subcategory.filters" >
                    <a class="aside__link no-arrow" :href="'/catalog-type=filter-id='+filter.id">{{filter.filter}}</a>
                </li>
            </ul>
        </div>
   </fragment>
</template>

<script>

export default {
    name: "ProductSubCategories",
    props:{
        subcategory:{
            type: Object,
            required: true
        }
    }

}
</script>

<style scoped>

</style>
