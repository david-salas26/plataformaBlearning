@extends('layouts.app')
@section('title', 'Login')
@section('content')

    <div class="container-fluid" style="width: 40%; margin-top: 30px;  background-color: rgb(160, 209, 232) ">
        <p style="text-align: center;font-size: 50px">Login authh</p>
        <form style="width: 50%; align-content: center" method="POST" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Correo Electronico</label>
                <input type="email" class="form-control" placeholder="ejemplo@ejemplo.com" id="email" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <!-- Mensaje de error -->
                @error('message')
                    <p>* {{$message}}</p>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">Inicia sesion loginblade</button>
        </form>
    </div>





@endsection
