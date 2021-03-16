
@props(["productName"])
<div class="product-box col-sm-3 col-6 my-3">
    <div class="img-wrapper">
        <div class="front">
            <a href="#">
                <img src="/assets/images/fashion/product/1.jpg" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
            </a>
        </div>
        <div class="product-detail">
            <h6><a href="#"><span>{{$productName}} - $25</span></a></h6>
            <div>
                <button class="btn btn-sm btn-success">Agregar</button>
            </div>
            {{-- <h4><span></span></h4> --}}
        </div>
    </div>
</div>