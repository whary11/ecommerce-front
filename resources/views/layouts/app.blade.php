<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    {{-- Favicon --}}

    <link rel="apple-touch-icon" sizes="57x57" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://keny-app.s3.ca-central-1.amazonaws.com/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    {{-- Fin --}}

    <link rel="icon" 
      type="image/png" 
      href="https://keny-app.s3.ca-central-1.amazonaws.com/logo1.png">
      <link rel="shortcut icon" 
      type="image/png" 
      href="https://keny-app.s3.ca-central-1.amazonaws.com/logo1.png">
    <title>
        @yield('title', 'Not name company')
    
    </title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="/assets/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/color1.css" media="screen" id="color">

    <style>
        .reference_selected{
            display: inline-block;
        }
        .hr_reference{
            margin-top: .5rem !important;
            border: 1px solid black;
            margin-left: -2px !important;
        }
    </style>
    <script>
        window.logCompany = (...vars)=>{
            console.log(vars)
        }

        
        window.formatCurrency = (value) => {

            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 0
            })


           return formatter.format(value)
        }

        window.calculatePercentage = (price, price_with_discount) => {
            logCompany(price, price_with_discount)
            return 100 - (price_with_discount/price)*100
        }
    </script>

</head>
<body>
        
    <!-- header start -->
    @include('layouts.header')
    <!-- header end -->
    @yield('content')
    
    <!-- footer start -->
    @include('layouts.footer')
    <!-- footer end -->
    
    
    <!-- theme setting -->
    <a href="javascript:void(0)" onclick="openSetting()">
       <div class="setting-sidebar" id="setting-icon">
           <div>
               <i class="fa fa-cog" aria-hidden="true"></i>
           </div>
       </div>
    </a>
    <div id="setting_box" class="setting-box">
       <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
       <div class="setting_box_body">
           <div onclick="closeSetting()">
               <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
           </div>
           <div class="setting-body">
               <div class="setting-title">
                   <h4>layout</h4>
               </div>
               <div class="setting-contant">
                   <div class="row demo-section">
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo1"></div>
                               <div class="demo-text">
                                   <h4>Fashion</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('index.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo43">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>game</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('game.html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo44">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>gym</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('gym-product.html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo45">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>tools</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('tools.html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo46">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>marijuana</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('marijuana.html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo47">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>metro</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('metro.html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo48">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>pets</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('pets.html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo49">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>video slider</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('video-slider.html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo50">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>left menu</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('left_sidebar-demo.html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo51">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>jewellery</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('jewellery.html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo2"></div>
                               <div class="demo-text">
                                   <h4>Fashion</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('fashion-2.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo3"></div>
                               <div class="demo-text">
                                   <h4>Fashion</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('fashion-3.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo4"></div>
                               <div class="demo-text">
                                   <h4>Shoes</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('shoes.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo5"></div>
                               <div class="demo-text">
                                   <h4>Bags</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('bags.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo6"></div>
                               <div class="demo-text">
                                   <h4>Watch</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('watch.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo7"></div>
                               <div class="demo-text">
                                   <h4>Kids</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('kids.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo8"></div>
                               <div class="demo-text">
                                   <h4>Flower</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('flower.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo9"></div>
                               <div class="demo-text">
                                   <h4>Nursery</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('nursery.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo10"></div>
                               <div class="demo-text">
                                   <h4>Vegetables</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('vegetables.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo11"></div>
                               <div class="demo-text">
                                   <h4>Beauty</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('beauty.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo12"></div>
                               <div class="demo-text">
                                   <h4>Instagram Shop</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('instagram-shop.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                           <div class="set-position">
                               <div class="layout-container demo13"></div>
                               <div class="demo-text">
                                   <h4>Lookbook</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('lookbook-demo.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo14"></div>
                               <div class="demo-text">
                                   <h4>Light</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('light.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo15"></div>
                               <div class="demo-text">
                                   <h4>Full Page</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('full-page.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo16"></div>
                               <div class="demo-text">
                                   <h4>Electronic-1</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('electronic-1.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo17"></div>
                               <div class="demo-text">
                                   <h4>Electronic-2</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('electronic-2.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                           <div class="set-position">
                               <div class="layout-container demo18"></div>
                               <div class="demo-text">
                                   <h4>Video</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('video.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo19"></div>
                               <div class="demo-text">
                                   <h4>Goggles</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('goggles.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                           <div class="set-position">
                               <div class="layout-container demo20"></div>
                               <div class="demo-text">
                                   <h4>Parallax</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('parallax.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                           <div class="set-position">
                               <div class="layout-container demo21"></div>
                               <div class="demo-text">
                                   <h4>Furniture</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('furniture.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="setting-title">
                   <h4>shop</h4>
               </div>
               <div class="setting-contant">
                   <div class="row demo-section">
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo22"></div>
                               <div class="demo-text">
                                   <h4>left sidebar</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo24"></div>
                               <div class="demo-text">
                                   <h4>right sidebar</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page(right).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo23"></div>
                               <div class="demo-text">
                                   <h4>no sidebar</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page(no-sidebar).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo25"></div>
                               <div class="demo-text">
                                   <h4>popup</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page(sidebar-popup).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo52">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>metro</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page(metro).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo53">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>full width</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page(full-width).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo26"></div>
                               <div class="demo-text">
                                   <h4>infinite scroll</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page(infinite-scroll).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo54"></div>
                               <div class="demo-text">
                                   <h4>three grid</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page(3-grid).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                           <div class="set-position">
                               <div class="layout-container demo55"></div>
                               <div class="demo-text">
                                   <h4>six grid</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page(6-grid).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                           <div class="set-position">
                               <div class="layout-container demo56"></div>
                               <div class="demo-text">
                                   <h4>list view</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('category-page(list-view).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="setting-title">
                   <h4>product</h4>
               </div>
               <div class="setting-contant">
                   <div class="row demo-section">
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo40">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>four image </h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(4-image).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo33"></div>
                               <div class="demo-text">
                                   <h4>left sidebar</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page.html')"
                                           class="btn new-tab-btn">Preview</button></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo36"></div>
                               <div class="demo-text">
                                   <h4>right sidebar</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(right-sidebar).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo34"></div>
                               <div class="demo-text">
                                   <h4>no sidebar</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(no-sidebar).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo41">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>bundle</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(bundle).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo42">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>image swatch</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(image-swatch).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo32"></div>
                               <div class="demo-text">
                                   <h4>left image</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(left-image).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo35"></div>
                               <div class="demo-text">
                                   <h4>right image</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(right-image).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo31">
                                   <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                               </div>
                               <div class="demo-text">
                                   <h4>image outside</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(image-outside).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo27"></div>
                               <div class="demo-text">
                                   <h4>3-col left</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(3-col-left).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo28"></div>
                               <div class="demo-text">
                                   <h4>3-col right</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(3-col-right).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo29"></div>
                               <div class="demo-text">
                                   <h4>3-col bottom</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(3-column).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo37"></div>
                               <div class="demo-text">
                                   <h4>sticky</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(sticky).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects">
                           <div class="set-position">
                               <div class="layout-container demo30"></div>
                               <div class="demo-text">
                                   <h4>accordian</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(accordian).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                           <div class="set-position">
                               <div class="layout-container demo38"></div>
                               <div class="demo-text">
                                   <h4>vertical tab</h4>
                                   <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button
                                           type="button" onClick="window.open('product-page(vertical-tab).html')"
                                           class="btn new-tab-btn">Preview</button> </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="setting-title">
                   <h4>color picker</h4>
               </div>
               <div class="setting-contant">
                   <ul class="color-box">
                       <li>
                           <input id="ColorPicker1" type="color" value="#ff4c3b" name="Background">
                           <span>theme deafult color</span>
                       </li>
                   </ul>
               </div>
               <div class="setting-title">
                   <h4>RTL</h4>
               </div>
               <div class="setting-contant">
                   <ul class="setting_buttons">
                       <li class="active" id="ltr_btn"><a href="javascript:void(0)" class="btn setting_btn">LTR</a>
                       </li>
                       <li id="rtl_btn"><a href="javascript:void(0)" class="btn setting_btn">RTL</a></li>
                   </ul>
               </div>
               <div class="buy_btn">
                   <a href="https://themeforest.net/item/multikart-responsive-ecommerce-html-template/22809967?s_rank=1"
                       target="_blank" class="btn btn-block purchase_btn"><i class="fa fa-shopping-cart"
                           aria-hidden="true"></i> purchase Multikart now!</a>
                   <a href="https://themeforest.net/item/multikart-responsive-angular-ecommerce-template/22905358?s_rank=3"
                       target="_blank" class="btn btn-block purchase_btn"><img src="/assets/images/icon/angular.png"
                           alt="" class="img-fluid"> Multikart Angular</a>
                   <a href="https://themeforest.net/item/multikart-responsive-react-ecommerce-template/23067773?s_rank=2"
                       target="_blank" class="btn btn-block purchase_btn"><img src="/assets/images/icon/react.png"
                           alt="" class="img-fluid"> Multikart React</a>
                   <a href="https://themeforest.net/item/multikart-multipurpose-shopify-sections-theme/23093831?s_rank=1"
                       target="_blank" class="btn btn-block purchase_btn"><img src="/assets/images/icon/shopify.png"
                           alt="" class="img-fluid"> Multikart Shopify</a>
               </div>
           </div>
       </div>
    </div>
    <!-- theme setting -->
    
    
    <!-- Add to cart modal popup start-->
   
    <!-- Add to cart modal popup end-->
    
    
    <!-- tap to top start -->
    <div class="tap-top">
       <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->
    
    <!-- latest jquery-->
    <script src="/js/vue.js"></script>
    
    
    <!-- latest jquery-->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    
    <!-- menu js-->
    <script src="/assets/js/menu.js"></script>
    
    <!-- lazyload js-->
    <script src="/assets/js/lazysizes.min.js"></script>
    
    <!-- popper js-->
    <script src="/assets/js/popper.min.js"></script>
    
    <!-- slick js-->
    <script src="/assets/js/slick.js"></script>
    
    <!-- Bootstrap js-->
    <script src="/assets/js/bootstrap.js"></script>
    
    <!-- Bootstrap Notification js-->
    <script src="/assets/js/bootstrap-notify.min.js"></script>
    
    <!-- Zoom js-->
    <script src="/assets/js/jquery.elevatezoom.js"></script>
    
    <!-- Theme js-->
    <script src="/assets/js/script.js"></script>
    
    <!-- latest custon-->
    <script>
       function openSearch() {
           document.getElementById("search-overlay").style.display = "block";
       }
    
       function closeSearch() {
           document.getElementById("search-overlay").style.display = "none";
       }
    </script>

    <script src="/js/Class/Cart.js"></script>
    @yield('scripts')
</body>






</html>