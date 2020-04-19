@extends('layouts.adminfront')

@section('content')
<div class="container"><br>
    <center class="float-right"><br><br><br>
    <img class="card" src=" {{asset('img/logo/logo-imagen.png')}} " alt="Card image cap" id="imagen" style="height: 220px; width: 300px;"></center> 

<div class="row justify-content-left mt-3"> 
    <div class="col-md-6">
        <div class="card">
            <p  class="text-center m-3">Ingrese el correo y la contraseña</p>
             <div class="card-body ">
                <form method="POST"  class="text-center" style="color: #757575;" action="{{ route('login') }}">
                    @csrf
                    <div class="md-form">
                        <div class="col-md-12">

                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Usuario" required autocomplete="username" autofocus>


                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="md-form">
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Contraseña">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row float-left">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                               <i class="fas fa-sign-in-alt"></i> {{ __('Entrar') }}
                            </button>                            
                        </div>
                    </div>
                    </form>
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
