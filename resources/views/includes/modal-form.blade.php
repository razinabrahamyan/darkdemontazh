<div class="modal fade" id="priceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="">
                    <span id="calc-close" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </span>
            </div>
            <div v-if="!success" id="cf-wrapper" class="modal-body title_default_dark">
                <span class="h4 d-flex justify-content-center modal-title text-center mt-0 main-color">
                   Закажите обратный звонок и мы перезвоним в течение 3 минут!
                </span>
                <div class="container title_default_dark">
                    <span class="d-flex justify-content-center text-center small mt-3 mb-3">
                         Свяжитесь с нами любым удобным способом для уточнения информации.
                    </span>
                    <form @submit="sendForm" class="field_form col-12 text-center">
                        <masked-input v-model="phone" :mask="mask" name="phone" type="tel"
                                      class="form-control text-center mb-3 input-gen-new" autocomplete="off"
                                      placeholder="+7(___)-___-__-__" required></masked-input>
                        <button type="submit" name="submit" value="Submit"
                                class="col-12 btn-submit-new btn-gen submitButton main_button reverse">Отправить
                        </button>
                    </form>
                </div>
            </div>
            <div id="cf-success-wrapper" class="modal-body title_default_dark" v-if="success">
                <div class="token_col w-100 order-4 p-0">
                    <div class="banner_token text-center animation" data-animation="fadeIn">
                        <div class="tk_counter_inner p-0 mw-100 d-lg-flex align-items-center row">
                            <div
                                class="animation animated fadeInUp h4 m-auto pt-3 pt-md-0 col-12"
                                data-animation="fadeInUp">
                                Спасибо за заявку!<br> С вами скоро свяжутся.
                            </div>
                            <div class="d-flex token_col col-12 mb-4 mt-4">
                                <div
                                    class="wizard_countdown_time border-0 p-0 counter_medium animation text-center w-100"
                                    data-animation="fadeInUp" data-time="">
                                            <span class="counter_box">
                                                <span id="mins" class="tk_counter minutes base-color"
                                                      v-text="minutes"></span>
                                            </span>
                                    <span class="counter_box">
                                                <span id="secs" class="tk_counter seconds base-color"
                                                      v-text="seconds"></span>
                                            </span>
                                    <span class="counter_box">
                                                <span id="secs" class="tk_counter seconds base-color"
                                                      v-text="milliseconds"></span>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
