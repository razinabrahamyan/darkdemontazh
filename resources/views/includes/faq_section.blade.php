<div class="section_href" data-parallax="scroll" id="faq_section">
    <div class=" container mt-5">
        <h2 class="text-center section_title mb-5 pt-5">О компании</h2>
        <div class="about">
            <h3>Преимущества работы с нами</h3>
            <p class="mt-5"> Компания МСК-Демонтаж была основана в 2013 году. С этого времени мы оказали услуги
                по демонтажу и сносу различных
                сооружений повышенной сложности более, чем 500 клиентам.
                Мы принимаем заказы даже на объемные объекты, и имеем возможность провести снос и демонтаж
                быстро и без лишних хлопот для наших клиентов.
                Благодаря имеющимся ресурсам в распоряжении компании, мы можем гарантировать отличные условия по
                демонтажу в Москве и Московской области:</p>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <h3>
            Частые вопросы о демонтаже
        </h3>
        <div class="faq_desk_handler mt-4"  itemscope="" itemtype="https://schema.org/FAQPage">
            <div class="question_mark">
                ?
            </div>
            <div class="faq_desk">
                <div class="questions">
                    <div class="handler">
                        <div class="faq active" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="quest" itemprop="name">Что означает бесплатный демонтаж?</div>
                            <meta itemprop="upvoteCount" content="8">
                            <div class="ans" itemprop="acceptedAnswer"
                                 itemscope="" itemtype="https://schema.org/Answer">Мы не берем с клиентов оплату за демонтаж в тех случаях,
                                когда собранный лом на объекте оказывается весом две тонны и более. Металлолом, который вы сдаете нам на переработку,
                                полностью перекрывает издержки за работу мастеров, разбор, сортировку и транспортировку материалов, а также за уборку территории.
                                Более того — за собранный лом мы заплатим вам до {{$black_metal->max('price')}} рублей за одну тонну.
                                Стоимость демонтажа учитывается при определении цены сдаваемого вторсырья, и именно поэтому наши услуги для вас бесплатны.</div>
                        </div>
                        @foreach($faqs as $faq)

                            <div class="faq" itemprop="mainEntity" itemscope=""
                                 itemtype="https://schema.org/Question">
                                <div class="quest" itemprop="name">{{$faq->question}}</div>
                                <meta itemprop="upvoteCount" content="8">
                                <div class="ans" itemprop="acceptedAnswer"
                                     itemscope="" itemtype="https://schema.org/Answer">{{$faq->answer}}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="answers">
                    <div class="handler">
                    </div>
                </div>
            </div>
        </div>
        <div class="faq_desk_handler_mobile">
            <div class="pt-3">
                <div class="container p-0">
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-0" aria-expanded="false"><span class="accordion-title">Что означает бесплатный демонтаж?</span><span
                                    class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <p>Мы не берем с клиентов оплату за демонтаж в тех случаях, когда собранный лом на объекте оказывается весом две тонны и более. Металлолом, который вы сдаете нам на переработку, полностью перекрывает издержки за работу мастеров, разбор, сортировку и транспортировку материалов, а также за уборку территории. Более того — за собранный лом мы заплатим вам до {{$black_metal->max('price')}} рублей за одну тонну. Стоимость демонтажа учитывается при определении цены сдаваемого вторсырья, и именно поэтому наши услуги для вас бесплатны.</p>
                            </div>
                        </div>
                        @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <button id="accordion-button-{{$faq->id}}" aria-expanded="false"><span class="accordion-title">{{$faq->question}}</span><span
                                        class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>{{$faq->answer}}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
