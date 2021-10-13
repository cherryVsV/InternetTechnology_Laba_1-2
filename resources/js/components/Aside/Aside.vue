<template>
    <div class="aside-container">
        <div class="aside-main">
            <a v-if="isIndex" class="logo logo--big" href="index">
                <svg width="290" height="50">
                    <use href="#icon-logo-big"></use>
                </svg>
            </a>
            <button class="aside-search" type="button" aria-label="поиск по сайту" data-modal-open="search-header">
                <svg width="24" height="24">
                    <use href="#icon-search"></use>
                </svg>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Aside",
    props:{
        isIndex:{
            type: Boolean,
            default: false
        }
    }
}

</script>
