<div class="section_href" id="form_section" >
    <div class="container pt-5" >
        <h2 class="text-center section_title mb-5">Нужно порезать металл или сделать демонтаж?</h2>
        <div class="row">
            <div class="col-12 col-md-6"><img src="{{asset('assets/images/base/form_background.png')}}" alt="Заказать демонтаж" title="Заказать демонтаж"></div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                <h3 class="font-weight-bold form_header">
                    <span class="design_color">Бесплатный</span>
                    вывоз металлолома.
                    Цены выше рынка в любой день!
                </h3>
                <div class="py-3" v-if="!success">
                    <div class="wrap-action-three">
                        <div class="box-form-container-two">
                            <form @submit="sendForm" role="form" id="form5" >
                                <div class="form-widget images-upload">
                                    <label for="upload_service">Изображения</label>
                                    <div class="file-upload-previews file-upload-previews-create"></div>
                                    <div class="file-upload">
                                        <input class="file-upload-input post_images with-preview" @change="onFileChange"
                                               type="file" name="images[]" id="upload_service" maxlength="10" multiple/>
                                        <span>Нажмите или перенесите фото сюда</span>
                                    </div>
                                </div>
                                <input type="text" name="full_name" class="required form-control text-center mb-3 input-gen-new" placeholder="Ваше имя">
                                <masked-input v-model="phone" :mask="mask" name="phone" type="tel"
                                              class="form-control text-center mb-3 input-gen-new" autocomplete="off"
                                              placeholder="тел: +7(___)-___-__-__" required></masked-input>
                                <div>
                                    <button class="main_button reverse w-100" type="submit"><span>Заказать звонок</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="" v-if="success">
                    <div class="wrap-action-three">
                        <div class="box-form-container-two">
                            <div id="cf-success-wrapper" class="modal-body title_default_dark">
                                <div class="token_col w-100 order-4 p-0">
                                    <div class="banner_token  animation" data-animation="fadeIn">
                                        <div class="tk_counter_inner p-0 mw-100 d-lg-flex align-items-center row">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Спасибо за заявку!</strong><br> С вами скоро свяжутся.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
