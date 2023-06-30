@extends('admin.layouts.app')

@section('content')
    <div id="metal_price" class="app-content content ">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Цены</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Вопрос</th>
                                <th>Ответ</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($faqs as $faq)
                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Вопрос"
                                                aria-label="question"
                                                name="question"
                                                v-bind:value="setPrices[{{$faq->id}}+'_question'] = '{{$faq->question ?? null}}'"
                                                v-on:input="setPrices[{{$faq->id}}+'_question'] = $event.target.value"
                                            >

                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <textarea
                                                cols="20"
                                                rows="10"
                                                type="text"
                                                class="form-control"
                                                placeholder="Ответ"
                                                aria-label="answer"
                                                name="answer"
                                                v-bind:value="setPrices[{{$faq->id}}+'_answer'] = '{{$faq->answer ?? null}}'"
                                                v-on:input="setPrices[{{$faq->id}}+'_answer'] = $event.target.value"
                                            ></textarea>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <button
                                                type="button"
                                                class="btn btn-outline-primary"
                                                data-id="{{$faq->id}}"
                                                @click="submit($event, '{{$faq->id}}', '{{route('admin.faqs.change', $faq->id)}}')"
                                            >
                                                Сохранить
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/plugins/extensions/ext-component-toastr.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('admin_assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/scripts/forms/form-input-mask.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <script>
        new Vue({
            el: '#metal_price',
            data: {
                setPrices: [],
            },
            methods: {
                submit : function(e, id, route) {
                    let dataId = e.target.getAttribute('data-id')
                    const payload = {
                        question: this.setPrices[dataId + '_question'],
                        answer: this.setPrices[dataId + '_answer'],
                    }
                    console.log(payload, id, 'payload')
                    axios.post(route, payload)
                        .then(result => {
                            toastr['success'](result.data.metal, 'Успешно обновлено!', {
                                positionClass: 'toast-top-center',
                            });
                        })
                }
            },
            mounted() {
                $('.numeral-mask-custom').toArray().forEach(function(field) {
                    new Cleave(field, {
                        numeral: true,
                        delimiter: ' ',
                        numeralThousandsGroupStyle: 'thousand'
                    });
                })
            }
        })
    </script>
@endpush
