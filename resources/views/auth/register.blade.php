@extends('layouts.adminfront')

@section('content')
<div class="container"> 
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach</br>   
   <div class="row justify-content-center mt-3"> 
    <div class="col-md-8">
        <!-- Material form register -->
      <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0"><br><br>

        <!-- Form -->
        <form method="POST"  class="text-center" style="color: #757575;" action="{{ route('register') }}">
                    @csrf

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="name">
                        <label for="materialRegisterFormFirstName">Nombres</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="last_name">
                        <label for="materialRegisterFormLastName">Apellidos</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="username">
                        <label for="materialRegisterFormLastName">Usuario</label>
                    </div>
                </div>
            </div>
            

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control" name="email">
                <label for="materialRegisterFormEmail">Correo</label>
            </div>

             <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="password" name="password" id="materialRegisterFormFirstName" class="form-control" name="name">
                        <label for="materialRegisterFormFirstName">Contraseña</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="password" name="password_confirmation" id="materialRegisterFormLastName" class="form-control" name="last_name">
                        <label for="materialRegisterFormLastName">Confirmación de contraseña</label>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                       <i class="fas fa-sign-in-alt"></i> {{ __('Registrar') }}
                    </button>
                </div>
            </div>
        </form>
        <!-- Form -->
    </div>
</div>
        </div>
    </div>
</div>

<style>
    #imagen{
        -webkit-box-shadow: 2px 3px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 2px 3px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 2px 3px 5px 0px rgba(0,0,0,0.75);
    }
</style>
@endsection
