@extends('layouts.app')

@section('title')
 {{ $company["name"] }} | Checkout
@endsection




    

    <!-- breadcrumb start -->
    {{-- @include('layouts.breadcrumb') --}}
    <!-- breadcrumb End -->


    <!-- section start -->
    @section('content')
        <section class="section-b-space" id="checkout">
            <div class="container">
                <div class="checkout-page">
                    <div class="checkout-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="checkout-title">
                                        <h3>Detalles de la facturación</h3>
                                    </div>
                                    <div class="row check-out">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">*Nombres</div>
                                            <input type="text" name="field-name" value="" placeholder="Nombres" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">*Apellidos</div>
                                            <input type="text" name="field-name" value="" placeholder="Apellidos" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">*Teléfono</div>
                                            <input type="text" name="field-name" value="" placeholder="Teléfono" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">*Correo electrónico</div>
                                            <input type="email" name="field-name" value="" placeholder="Correo electrónico" required>
                                        </div>
                                        <div class="col-12">
                                            <h3 class="text-center">Dirección</h3>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">*Ciudad</div>
                                            <select required>
                                                <option>Bogotá</option>
                                                <option>Medellín</option>
                                                <option>Cali</option>
                                                <option>Barranqulla</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">*Via generadora</div>
                                            <select required>
                                                <option>Calle</option>
                                                <option>Carrera</option>
                                                <option>Diagonal</option>
                                                <option>Transversal</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                            {{-- <div class="field-label">*Número</div> --}}
                                            <input type="text" name="field-name" value="" placeholder="Número" required>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                {{-- <div class="field-label">*Via secundaria</div> --}}
                                            <input type="text" name="field-name" value="" placeholder="Número" required>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                            {{-- <div class="field-label">*Número</div> --}}
                                            <input type="text" name="field-name" value="" placeholder="Número" required>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="complement" placeholder="Complemento: (barrio. interior, apartamento)">
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">*Fecha de entrega</div>
                                            <input type="date" name="shipping-option" id="account-option" min="{{$date_after_delivery ?? '' }}" class="form-control" required>
                                            
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="checkbox" name="shipping-option" id="account-option" checked> &ensp;
                                            <label for="account-option">Crea una cuenta ?</label>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="checkout-details" >
                                        <div class="order-box" id="checkout-details">
                                            <div class="title-box">
                                                <div>Product <span>Total</span></div>
                                            </div>
                                            <ul class="qty">
                                                <li>Pink Slim Shirt × 1 <span>$25.10</span></li>
                                                <li>SLim Fit Jeans × 1 <span>$555.00</span></li>
                                            </ul>
                                            <ul class="sub-total">
                                                <li>Subtotal <span class="count">$380.10</span></li>
                                                <li>Shipping
                                                    <div class="shipping">
                                                        <div class="shopping-option">
                                                            <input type="checkbox" name="free-shipping" id="free-shipping">
                                                            <label for="free-shipping">Free Shipping</label>
                                                        </div>
                                                        <div class="shopping-option">
                                                            <input type="checkbox" name="local-pickup" id="local-pickup">
                                                            <label for="local-pickup">Local Pickup</label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="total">
                                                <li>Total <span class="count">$620.00</span></li>
                                            </ul>
                                        </div>
                                        <div class="payment-box">
                                            <div class="text-right"><button type="submit" class="btn-solid btn">Realizar Pedido</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    @endsection
    <!-- section end -->


    <!-- footer start -->
    
    <!-- footer end -->

    @section('scripts')
        <script src="/js/Purchase/checkout.js"></script>
    @endsection
    

    




</html>