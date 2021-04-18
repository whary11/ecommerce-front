@extends('layouts.app')

@section('title')
 {{ $company["name"] }} | Registro
@endsection




    

    <!-- breadcrumb start -->
    {{-- @include('layouts.breadcrumb') --}}
    <!-- breadcrumb End -->


    <!-- section start -->
    @section('content')
        <section class="register-page section-b-space" id="register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Registro</h3>
                        <div class="theme-card">
                            <form class="theme-form" @submit.prevent="registerUser">
                                <div class="form-row row">
                                    <div class="col-md-6">
                                        <label for="email">Nombres</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Nombres"
                                            required v-model="register.name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="review">Apellidos</label>
                                        <input type="text" class="form-control" id="lname" placeholder="Apellidos"
                                            required v-model="register.last_name">
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="col-md-6">
                                        <label for="email">email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" required v-model="register.email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="review">Contraseña</label>
                                        <input type="password" class="form-control" id="review"
                                            placeholder="Contraseña" required v-model="register.password">
                                    </div><button type="submit" class="btn btn-solid w-auto">Create cuenta</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    @endsection
    <!-- section end -->


    <!-- footer start -->
    
    <!-- footer end -->
    @section('scripts')
        <script type="text/javascript" src="https://checkout.epayco.co/checkout.js">   </script>

        <script src="/js/Auth/register.js"></script>

    @endsection
</html>