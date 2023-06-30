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
                                <th>Категория</th>
                                <th>Цена</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prices as $price)
                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Категория"
                                                aria-label="category"
                                                name="category"
                                                v-bind:value="setPrices[{{$price->id}}+'_category'] = '{{$price->category ?? null}}'"
                                                v-on:input="setPrices[{{$price->id}}+'_category'] = $event.target.value"
                                            >

                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control numeral-mask-custom"
                                                placeholder="Цена"
                                                aria-label="price"
                                                name="price"
                                                v-bind:value="setPrices[{{$price->id}}+'_price'] = '{{$price->price ?? null}}'"
                                                v-on:input="setPrices[{{$price->id}}+'_price'] = $event.target.value"
                                            >
                                            <div class="input-group-append">
                                                <span class="input-group-text">₽</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="">
                                            <button
                                                type="button"
                                                class="btn btn-outline-primary"
                                                data-id="{{$price->id}}"
                                                @click="submit($event, '{{$price->id}}', '{{route('admin.cvetmet.change', $price->id)}}')"
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
                        price: this.setPrices[dataId + '_price'],
                        category: this.setPrices[dataId + '_category'],
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
