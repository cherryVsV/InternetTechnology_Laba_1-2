<template>
    <div id="write-us" class="modal modal-vacancies modal-from-right" aria-hidden="true">
        <div class="modal-wrap submenu-block-desktop">
            <div class="modal-vacancies__inner">
                <div class="form-wrap modal-body">
                    <div class="menu-head">
                        <h3 class="menu-title">Напишите нам</h3>
                    </div>
                    <div class="modal-main">
                        <form class="form form--write" method="post" autocomplete="on" enctype="multipart/form-data">
                            <label class="form__field-wrap form__field-wrap--name">
                                Ваше имя
                                <input type="text" placeholder="Введите ваше имя" name="user-name"
                                       v-model="user.name" data-validate
                                       required>
                            </label>
                            <label class="form__field-wrap">
                                Номер телефона
                                <input type="text" placeholder="Введите ваш номер телефона" name="phone"
                                      v-model="user.phone" data-validate="phone"
                                       required>
                            </label>
                            <label class="form__field-wrap">
                                E-mail
                                <input type="text" placeholder="Введите адрес электронной почты" name="email"
                                       v-model="user.email" data-validate="email"
                                       required>
                            </label>
                            <label class="form__field-wrap">
                                Номер заказа
                                <input type="text" placeholder="Введите ваш номер заказа или товарного чека"
                                      v-model="user.order" name="order">
                            </label>
                            <label class="form__field-wrap form__field-comment">
                                Ваше сообщение
                                <textarea name="comment" placeholder="Введите ваше сообщение" data-validate
                                         v-model="user.question" required></textarea>
                            </label>
                            <label class="form__checkbox-wrap">
                                <input class="visually-hidden" type="checkbox" name="agreement" data-validate required>
                                <span class="checkbox-item"></span>
                                <span>Нажимая кнопку вы даете согласие на обработку персональных данных и соглашаетесь с <a
                                    class="privacy-policy-link link" href="#!" data-tab="policy" data-modal-open="help">политикой
                      конфиденциальности.</a></span>
                            </label>
                            <div class="form__fileload">

                                <vue-dropzone
                                    ref="myVueDropzone"
                                    id="dropzone"
                                    :options="dropzoneOptions"
                                    :useCustomSlot="true"
                                    v-on:vdropzone-success="uploadSuccess"
                                    v-on:vdropzone-removed-file="fileRemoved"
                                >
                                    <div class="dropzone-custom-content">
                                        <input class="visually-hidden" id="fileLoader" name="fileLoader">
                                        <label for="fileLoader" data-text="Прикрепить файл">
                                            <svg width="24" height="24">
                                                <use href="#icon-fileload"></use>
                                            </svg>
                                            <button class="btn-remove-file" type="button" aria-label="удалить"></button>
                                        </label>
                                    </div>
                                </vue-dropzone>
                            </div>
                            <button class="form__submit btn btn-purple" type="submit" @click="sendMessage">Отправить</button>
                        </form>
                        <button class="modal-close-mobile" type="button" data-modal-close="write-us"
                        @click="filesRemove">Вернуться назад
                        </button>
                    </div>
                    <button class="submenu-close" type="button" aria-label="закрыть"
                            @click="filesRemove"  data-modal-close="write-us"></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "vform";
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
export default {
    name: "Modal-Write-Us",
    components: {vueDropzone: vue2Dropzone},
    data(){
        return{
            user: new Form({
                'question': '',
                'phone': '',
                'name': '',
                'email': '',
                'order': null,
                'file': ''
            }),
            dropzoneOptions: {
                url: 'api/store/question/file',
                addRemoveLinks: true,
                maxFiles: 1
            },
        }
    },
    methods: {
        getUser() {
            try {
                axios.get('/auth/user').then((response) => {
                    if(response.data.user!==null) {
                        this.user.email = response.data.user.email
                        this.user.phone = response.data.user.phone
                        this.user.name = response.data.user.name
                    }
                })
            }
            catch(e){}
        },
        sendMessage(){
            this.user.post('api/send/message')
            this.filesRemove()
        },
        uploadSuccess(file, response) {
            this.user.file = 'img/questions/' + response.file;
        },

        filesRemove(){
            this.$refs.myVueDropzone.removeAllFiles()
        },
        fileRemoved() {
            this.user.file = ''
        },
    },
    mounted() {
        this.getUser()
    }
}
</script>

<style scoped>

</style>
