<div class="section_href" data-parallax="scroll" id="prices_section" >
    <div class="container pt-5" >
        <h2 class="text-center section_title mb-5">Цены на прием металлолома</h2>
        <div class="tables_same_height">
            <div class="table_handler fixer" id="black_fixer">
                <table class="table">
                    <thead>
                    <tr>

                        <th>Категория</th>
                        <th>Описание черного металла</th>
                        <th>Цена за 1 тонну</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="table_handler" id="black_metal">
                <table class="table">
                    <thead>
                    <tr>
                        <th><span itemprop="category">Категория</span></th>
                        <th><span itemprop="description"> Описание черного металла	</span></th>
                        <th><span itemprop="weight">Цена за 1 тонну</span></th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($black_metal as $metal)
                        <tr itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                            <td>{{$metal->category}}</td>
                            <td>{{$metal->description}}</td>
                            <td>
                                до <span itemprop="weight">{{$metal->price}}</span> руб.
                                <meta itemprop="price"
                                      content="{{str_replace(' ', '', $metal->price)}}">
                                <meta itemprop="priceCurrency" content="RUB"/>
                                <link itemprop="availability" href="https://schema.org/InStock">
                                <meta itemprop="priceValidUntil" content="{{date('Y-m-d')}}">
                                <link itemprop="url" href="{{\Illuminate\Support\Facades\URL::current()}}">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="table_handler fixer" id="color_fixer">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Наименование цветного металла</th>
                        <th scope="col">Цена за кг.</th>

                    </tr>
                    </thead>
                </table>
            </div>
            <div class="table_handler" id="color_metal">
                <table class="table">
                    <thead>
                    <tr>
                        <th><span itemprop="category">Наименование цветного металла</span></th>
                        <th><span itemprop="weight">Цена за кг.</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($color_metal as $metal)
                        <tr>
                            <td>{{$metal->category}}</td>
                            <td>
                                до <span itemprop="weight">{{$metal->price}}</span> руб./кг.
                                <meta itemprop="price"
                                      content="{{str_replace(' ', '', $metal->price)}}">
                                <meta itemprop="priceCurrency" content="RUB"/>
                                <link itemprop="availability" href="https://schema.org/InStock">
                                <meta itemprop="priceValidUntil" content="{{date('Y-m-d')}}">
                                <link itemprop="url" href="{{\Illuminate\Support\Facades\URL::current()}}">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
