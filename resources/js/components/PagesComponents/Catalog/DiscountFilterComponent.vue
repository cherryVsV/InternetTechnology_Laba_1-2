<template>
    <div class="filters__fieldset">
        <div class="filters__title filters__title-active arrow arrow--down">Акции</div>
        <div class="filters__list">
            <label class="filters__item sort-fieldset-checkbox">
                <input class="visually-hidden filter-input" type="checkbox" name="credit"
                       value="Доступно в кредит">
                <span class="custom-checkbox"></span>
                <span>Доступно в кредит</span>
            </label>
            <label class="filters__item sort-fieldset-checkbox">
                <input class="visually-hidden filter-input" type="checkbox" name="friday"
                       value="Черная пятница">
                <span class="custom-checkbox"></span>
                <span>Черная пятница</span>
            </label>
            <label class="filters__item sort-fieldset-checkbox">
                <input class="visually-hidden filter-input" type="checkbox" name="delivery"
                       value="Бесплатная доставка">
                <span class="custom-checkbox"></span>
                <span>Бесплатная доставка</span>
            </label>
            <label class="filters__item sort-fieldset-checkbox">
                <input class="visually-hidden filter-input" type="checkbox" name="gift"
                       value="Подарок при покупке">
                <span class="custom-checkbox"></span>
                <span>Подарок при покупке</span>
            </label>
            <label class="filters__item sort-fieldset-checkbox">
                <input class="visually-hidden filter-input" type="checkbox" name="second"
                       value="Уценка">
                <span class="custom-checkbox"></span>
                <span>Уценка</span>
            </label>
        </div>
    </div>
</template>

<script>

export default {
    name: "DiscountFilterComponent"
}
</script>

<style scoped>

</style>
