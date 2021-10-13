<template>
    <div id="feedback-slider" class="modal fb-popup modal-from-right" aria-hidden="true">
        <div class="modal-wrap fb-popup__wrap">
            <div class="modal-body">
                <div class="fb-slider-container slider-container">
                    <div class="fb-popup__navigation">
                        <button class="btn-slider btn-slider--prev arrow arrow--left" type="button"
                                aria-label="предыдущий слайд"></button>
                        <div class="slider-pagination"></div>
                        <button class="btn-slider btn-slider--next arrow arrow--right" type="button"
                                aria-label="следующий слайд"></button>
                    </div>
                </div>
                <button type="button" class="modal-close" data-modal-close="feedback-slider"
                        aria-label="закрыть"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal-Feedback-Slider"
}
</script>

<style scoped>

</style>
