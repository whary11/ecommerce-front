@extends('layouts.app')

@section('title')
 {{ $company["name"] }} | {{$product["name"]}}
@endsection

<style>
    .product-right .product-buttons a:last-child {
    margin-left: 0px !important;
    }
</style>

    @section('content')
    

    
        {{--  loader start  --}}
        <div class="loader_skeleton">
            <header>
                <div class="top-header d-none d-sm-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="header-contact">
                                    <ul>
                                        <li>Welcome to Our store Multikart</li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 text-right">
                                <ul class="header-dropdown">
                                    <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="onhover-dropdown mobile-account">
                                        <i class="fa fa-user" aria-hidden="true"></i> My Account
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main-menu">
                                <div class="menu-left">
                                    <div class="navbar">
                                        <a href="javascript:void(0)">
                                            <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="brand-logo">
                                        <a href="index.html"><img src="/assets/images/icon/logo.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                </div>
                                <div class="menu-right pull-right">
                                    <div>
                                        <nav>
                                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                            <ul class="sm pixelstrap sm-horizontal">
                                                <li>
                                                    <div class="mobile-back text-right">Back<i
                                                            class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                                </li>
                                                <li>
                                                    <a href="#">Home</a>
                                                </li>
                                                <li>
                                                    <a href="#">shop</a>
                                                </li>
                                                <li>
                                                    <a href="#">product</a>
                                                </li>
                                                <li class="mega"><a href="#">features
                                                        <div class="lable-nav">new</div>
                                                    </a>
                                                </li>
                                                <li><a href="#">pages</a>
                                                </li>
                                                <li>
                                                    <a href="#">blog</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div>
                                        <div class="icon-nav d-none d-sm-block">
                                            <ul>
                                                <li class="onhover-div mobile-search">
                                                    <div><img src="/assets/images/icon/search.png" onclick="openSearch()"
                                                            class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                            onclick="openSearch()"></i></div>
                                                </li>
                                                <li class="onhover-div mobile-setting">
                                                    <div><img src="/assets/images/icon/setting.png"
                                                            class="img-fluid blur-up lazyload" alt=""> <i
                                                            class="ti-settings"></i></div>
                                                </li>
                                                <li class="onhover-div mobile-cart">
                                                    <div><img src="/assets/images/icon/cart.png"
                                                            class="img-fluid blur-up lazyload" alt=""> <i
                                                            class="ti-shopping-cart"></i></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="breadcrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h2>product</h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <section class="section-b-space ratio_asos">
                <div class="collection-wrapper product-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-10 col-xs-12">
                                            <div class="main-product lg-img"></div>
                                        </div>
                                        <div class="col-lg-1 col-sm-2 col-xs-12">
                                            <div class="row vertical-product">
                                                <div class="col-sm-12 col-4">
                                                    <div class="sm-product"></div>
                                                </div>
                                                <div class="col-sm-12 col-4">
                                                    <div class="sm-product"></div>
                                                </div>
                                                <div class="col-sm-12 col-4">
                                                    <div class="sm-product"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 rtl-text">
                                            <div class="product-right">
                                                <h2></h2>
                                                <h4></h4>
                                                <h3></h3>
                                                <ul>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                                <div class="btn-group">
                                                    <div class="btn-ldr"></div>
                                                    <div class="btn-ldr"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="tab-product m-0">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            <ul>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{--  loader end 

        @include('layouts.breadcrumb') 


        section start --}}
        <section>
            <div class="collection-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-sm-11">
                            <div class="product-right-slick">
                                @foreach ($product["references"] as $references)
                                    @foreach ($references["images"] as $image)
                                        <div><img src="{{ $image["url"] }}" alt=""
                                            class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                    @endforeach
                                @endforeach
                                
                                {{-- <div><img src="/assets/images/pro3/2.jpg" alt=""
                                        class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                <div><img src="/assets/images/pro3/27.jpg" alt=""
                                        class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                <div><img src="/assets/images/pro3/27.jpg" alt=""
                                        class="img-fluid blur-up lazyload image_zoom_cls-0"></div> --}}
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-1">
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="slider-right-nav">
                                        {{-- @foreach ($product["references"] as $references)
                                            @foreach ($references["images"] as $image)
                                            <div><img src="{{ $image["url"] }}" alt=""
                                                class="img-fluid blur-up lazyload"></div>
                                                
                                            @endforeach
                                        @endforeach --}}
                                        
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 rtl-text" id="product_detail_vue">
                            <div class="product-right">
                                <h2>{{$product["name"]}}</h2>
                                @if ($product["references"][0]["price"] != $product["references"][0]["price_with_discount"])
                                    <h4><del id="price_with_discount">$ {{ number_format(($product["references"][0]["price_with_discount"])) }}</del><span id="percentage-discount">55% off</span></h4>
                                @endif
                                <h3 id="price">$ {{ number_format($product["references"][0]["price"]) }}</h3>
                                <ul class="color-variant">

                                    @foreach ($product["references"] as $key=> $refe)
                                    <span class="d-none" id="info_reference" data-id="{{$refe["id"]}}" data-price="{{$refe["price"]}}" data-price_with_discount="{{($refe["price_with_discount"])}}" data-stock="{{$refe["stock"]}}" data-name="{{$product["name"]}}" data-image="{{isset($refe["images"][0])?$refe["images"][0]["url"]:"-"}}" class="hr_reference"></span>
                                        @if ($refe["view_front"] == 1)
                                            @if (isset($refe["color"]))
                                            <div class="reference_selected" id="div_reference_{{$refe["id"]}}">
                                                <li @click.prevent="selectReference({{$refe["id"]}},{{$refe["stock"]}},{{$refe["price"]}},{{$refe["price_with_discount"]}}, 1, '{{$product["name"]}}', '{{ isset($refe["images"][0])?$refe["images"][0]["url"]:""}}')" class="bg-light0" id="reference_{{$refe["id"]}}" style="background:{{$refe["color"]}} !important"></li>
                                                @if ($key == 0)
                                                <hr data-id="{{$refe["id"]}}" data-price="{{$refe["price"]}}" data-price_with_discount="{{$refe["price_with_discount"]}}" data-stock="{{$refe["stock"]}}" class="hr_reference">
                                                @endif
                                            </div>
                                            {{-- Si es una referencia diferente a color --}}
                                            @else
                                            {{ $refe["name"]}} rrr
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                                    
                                {{-- <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul> --}}
                                <div class="product-description border-product">
                                    {{-- <h6 class="product-title size-text">Seleccionar talla <span><a href="" data-toggle="modal"
                                                data-target="#sizemodal">size chart</a></span></h6>
                                    <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Sheer Straight Kurta</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body"><img src="/assets/images/size-chart.jpg" alt=""
                                                        class="img-fluid blur-up lazyload"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                        </ul>
                                    </div> --}}
                                    <h6 class="product-title">Cantidad</h6>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            {{-- <span class="input-group-prepend">
                                            
                                            <button @click="updateQuantity('remove')" id="remove-quantity" type="button"
                                                    class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                        class="ti-angle-left"></i></button> </span> --}}
                                            <input type="text" name="quantity" id="quantity" class="form-control input-number" @keyUp="updateQuantity('writing')" value="1" disabled>
                                            {{-- <span class="input-group-prepend"><button id="add-quantity" @click="updateQuantity('add')" type="button"
                                                    class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                        class="ti-angle-right"></i></button></span> --}}
                                                    
                                                    
                                                    </div>

                                                        
                                                    </div>
                                                    <div class="d-none" id="no-stock">

                                                        <span class="text-danger">No hay mas unidades disponibles</span>
                                                    </div>

                                </div>
                                <div class="product-buttons">

                                    @if ($product["number_activities"] > 1)
                                        <a href="#" data-toggle="modal" data-target="#addtocart" class="btn btn-solid">Arma tu libro</a> 
                                    @else
                                        <a href="#" class="btn btn-solid" @click.prevent="addCart()">Agregar al carrito</a>
                                    @endif
                                        <p>
                                            <span class="text-danger" id="no-stock-in-add"></span>
                                        </p>
                                </div>
                                <div class="border-product">
                                    <h6 class="product-title">Detalle</h6>
                                    <p>{{$product["description"]}}</p>
                                </div>
                                {{-- <div class="border-product">
                                    <h6 class="product-title">share it</h6>
                                    <div class="product-icon">
                                        <ul class="product-social">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                        <form class="d-inline-block">
                                            <button class="wishlist-btn"><i class="fa fa-heart"></i><span
                                                    class="title-font">Add To WishList</span></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="border-product">
                                    <h6 class="product-title">Time Reminder</h6>
                                    <div class="timer">
                                        <p id="demo"><span>25 <span class="padding-l">:</span> <span
                                                    class="timer-cal">Days</span> </span><span>22 <span
                                                    class="padding-l">:</span> <span class="timer-cal">Hrs</span>
                                            </span><span>13 <span class="padding-l">:</span> <span
                                                    class="timer-cal">Min</span> </span><span>57 <span
                                                    class="timer-cal">Sec</span></span>
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  Section ends  --}}


        {{--  product-tab starts  --}}
        <section class="tab-product m-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab"
                                    href="#top-home" role="tab" aria-selected="true">Description</a>
                                <div class="material-border"></div>
                            </li>
                            {{-- <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab"
                                    href="#top-profile" role="tab" aria-selected="false">Details</a>
                                <div class="material-border"></div>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab"
                                    href="#top-contact" role="tab" aria-selected="false">Video</a>
                                <div class="material-border"></div>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="review-top-tab" data-toggle="tab"
                                    href="#top-review" role="tab" aria-selected="false">Write Review</a>
                                <div class="material-border"></div>
                            </li> --}}
                        </ul>
                        <div class="tab-content nav-material" id="top-tabContent">
                            <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                aria-labelledby="top-home-tab">
                                <p>{{ $product["description"] }}
                            </div>
                            {{-- <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="single-product-tables">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Febric</td>
                                                <td>Chiffon</td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>Red</td>
                                            </tr>
                                            <tr>
                                                <td>Material</td>
                                                <td>Crepe printed</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Length</td>
                                                <td>50 Inches</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td>S, M, L .XXL</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                <div class="mt-4 text-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                                <form class="theme-form">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="media">
                                                <label>Rating</label>
                                                <div class="media-body ml-3">
                                                    <div class="rating three-star"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" placeholder="Email" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="review">Review Title</label>
                                            <input type="text" class="form-control" id="review"
                                                placeholder="Enter your Review Subjects" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="review">Review Title</label>
                                            <textarea class="form-control" placeholder="Wrire Your Testimonial Here"
                                                id="exampleFormControlTextarea1" rows="6"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-solid" type="submit">Submit YOur Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  product-tab ends  --}}


        {{--  product section start  --}}
        <section class="section-b-space ratio_asos">
            <div class="container">
                <div class="row">
                    <div class="col-12 product-related">
                        <h2>Productos relacionados</h2>
                    </div>
                </div>
                <div class="row search-product">
                    <x-product/>
                    <x-product/>
                    <x-product/>
                    <x-product/>
                    <x-product/>
                    <x-product/>
                </div>
            </div>
        </section>
        {{--  product section end  --}}


        {{--  Add to cart modal popup start --}}
        <div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body modal1">
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-bg addtocart">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="product-section">
                                            <div class="col-12 product-upsell text-center">
                                                <h3>Selecciona las {{$product["number_activities"]}} actividades para tu libro.</h3>
                                                <span class="text-info">Pero si deseas puedes seleccionar mas de las {{$product["number_activities"]}}, con coste adicional.</span>
                                            </div>
                                            <div class="row" id="upsell_product">
                                                @foreach ([1,2,3,4,5,6,7,8] as $item)
                                                    <x-activities-complete product-name="Mi página - {{$item}}"/>
                                                @endforeach
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
        {{--  Add to cart modal popup end --}}

        

    @endsection

    
    @section('scripts')
        <script src="/js/Product/product_detail.js"></script>
    @endsection
     {{--  latest custon --}}


</html>