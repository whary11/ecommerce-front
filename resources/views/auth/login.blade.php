@extends('layouts.app')

@section('title')
 {{ $company["name"] }} | Login
@endsection




    

    <!-- breadcrumb start -->
    {{-- @include('layouts.breadcrumb') --}}
    <!-- breadcrumb End -->


    <!-- section start -->
    @section('content')
        <!-- breadcrumb start -->
    {{-- <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>customer's login</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="login-page section-b-space" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Login</h3>
                    <div class="theme-card">
                        <form class="theme-form" @submit.prevent="sendLogin">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required v-model="login.email">
                            </div>
                            <div class="form-group">
                                <label for="review">Contraseña</label>
                                <input type="password" class="form-control" id="review"
                                    placeholder="Ingrese su contraseña." required v-model="login.password">
                            </div><button type="submit" class="btn btn-solid">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>New Customer</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start shopping click register.</p><a href="#"
                            class="btn btn-solid">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
        
    @endsection
    <!-- section end -->


    <!-- footer start -->
    
    <!-- footer end -->
    @section('scripts')
        <script type="text/javascript" src="https://checkout.epayco.co/checkout.js">   </script>

        <script src="/js/Auth/login.js"></script>

    @endsection
</html>