<template>
  <fragment>
        <h2 class="aside__link catalog-main__category-title">
            <a :href="'/catalog-type=category-id='+category.id"  :aria-label="category.title">
                <svg width="24" height="24">
                    <use :href="category.icon"></use>
                </svg>
                <span>{{category.title}}</span><sup class="title-counter">{{category.product}}</sup>
            </a>
        </h2>
        <div class="submenu-block parent">
            <div class="menu-head">
                <button class="submenu-close" type="button" aria-label="закрыть"></button>
                <h3 class="menu-title"></h3>
            </div>
            <ul class="aside__list catalog-main__subcategory-list">
                <li class="submenu-item catalog-main__subcategory-item" v-if="subcategory.filters.length>0" v-for="subcategory in category.subcategories">
                <product-sub-categories :subcategory="subcategory"></product-sub-categories>
                </li>

                <li class="submenu-item catalog-main__subcategory-item catalog-main__all-category">
                    <a class="aside__link no-arrow":href="'/catalog-type=subcategory-id='+subcategory.id"  v-for="subcategory in category.subcategories">
                        <svg width="48" height="48">
                            <use :href="subcategory.icon"></use>
                        </svg>
                        {{subcategory.title}}
                    </a>
                </li>

            </ul>
        </div>
  </fragment>
</template>

<script>
export default {
    name: "ProductCategories",
    props: {
        category: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>
@media(min-width: 1365px) {
    .aside__link span {
        color: inherit;
    }
}
</style>
