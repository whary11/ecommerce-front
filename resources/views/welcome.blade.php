<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{env('APP_NAME')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset("/css/app.css")}}" rel="stylesheet">
    </head>
    <body>
        <section class="container" style="margin-top: 200px">
            <section class="row">
                <section class="col-md-5">
                    <div class="row mt-4 justify-content-center">
                        <span id="pro_reference_promotion_2173" class="badge badge_card_product"><img src="https://certwebmex.laika.com.co/assets/star.svg" width="70"> <div id="pro_value_reference_promotion_2173" class="font_nova_bold text_badge_product_card_top" style="top: 47%; font-size: 20px;">10%</div> <div class="font_nova_bold text_badge_product_card_bottom" style="display: none;">DESCUENTO</div></span>
                        <img src="https://falabella.scene7.com/is/image/FalabellaCO/4177032_1?wid=1500&hei=1500&qlt=70" class="w-75 rounded shadow-sm" alt="nikes">
                    </div>
                    {{-- <div class="row mt-2">
                        <div class="col-md-2">
                            <img src="https://falabella.scene7.com/is/image/FalabellaCO/4177032_1?wid=1500&hei=1500&qlt=70" class="w-100 rounded shadow-sm pointer" alt="nikes">
                        </div>
                        <div class="col-md-2">
                            <img src="https://falabella.scene7.com/is/image/FalabellaCO/4177032_1?wid=1500&hei=1500&qlt=70" class="w-100 rounded shadow-sm pointer" alt="nikes">
                        </div>
                        <div class="col-md-2">
                            <img src="https://falabella.scene7.com/is/image/FalabellaCO/4177032_1?wid=1500&hei=1500&qlt=70" class="w-100 rounded shadow-sm pointer" alt="nikes">
                        </div>
                        <div class="col-md-2">
                            <img src="https://falabella.scene7.com/is/image/FalabellaCO/4177032_1?wid=1500&hei=1500&qlt=70" class="w-100 rounded shadow-sm pointer" alt="nikes">
                        </div>
                        <div class="col-md-2">
                            <img src="https://falabella.scene7.com/is/image/FalabellaCO/4177032_1?wid=1500&hei=1500&qlt=70" class="w-100 rounded shadow-sm pointer" alt="nikes">
                        </div>
                        
                    </div> --}}
                </section>
                <aside class="col-md-7">
                    <section class="row">
                        <section class="col-md-12">
                            Categoría / Sub Categoría / Nike
                        </section>
                        <section class="col-md-12">
                            <h1>Tenis Nike Hombre Moda Cortez</h1>
                        </section>
                        <section class="col-md-12 text-right">
                            <button class="btn btn-primary ">Agragar <i class="fas fa-cart-plus"></i></button>
                        </section>
                    </section>
                    <hr>
                    <section class="row">
                        <section class="col-md-12 text-right text-success text-primary">Ahora: $25.400</section>
                        <section class="col-md-12 text-right text-danger">Antes: $30.000</section>
                    </section>
                    <section class="row">
                        <section class="col-md-12 mb-4">
                            <section class="row">
                                <section class="col-md-12 p-2">
                                    <h3>Referencias</h3>
                                </section>
                                <section class="col-md-12">
                                    <section class="p-2 px-3 rounded bg-dark mr-1 d-inline pointer text-white">Tallas S</section>
                                    <section class="p-2 px-3 rounded bg-dark mr-1 d-inline pointer text-white">Talla M</section>
                                    <section class="p-2 px-3 rounded bg-dark mr-1 d-inline pointer text-white">Talla L</section>
                                </section>
                            </section>
                        </section>
                        <section class="col-md-12">
                            <h3>Descripción del producto</h3>
                            <fieldset>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus atque quam enim deleniti perferendis corporis id nulla, quaerat a fugiat dolores esse suscipit nam placeat! Dicta tempore reiciendis placeat possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus aliquid rerum fuga facere numquam consequuntur delectus laborum soluta, totam odio ab expedita vero reiciendis. Dolor consequuntur ducimus tenetur laudantium. Dolor.</fieldset>
                        </section>
                    </section>
                </aside>
                
            </section>
            <hr>
            <h2>Recomendados</h2>
            <div class="row mb-5">
                @foreach ([1,2,3] as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="https://falabella.scene7.com/is/image/FalabellaCO/4177032_1?wid=1500&hei=1500&qlt=70" alt="" class="w-50">
                            <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
            
        </section>
    </body>
    <script src="{{asset("/js/app.js")}}"></script>
</html>



















