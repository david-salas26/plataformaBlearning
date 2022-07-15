@extends('layouts.app')
@section('title', 'Register')

@section('content')


    <div class="container-fluid" style="width: 40%; margin-top: 30px;  background-color: rgb(160, 209, 232) ">
        <p style="text-align: center;font-size: 50px">Registrar</p>
        <form style="width: 50%; align-content: center" method="POST" action="">
            @csrf
            <!-- nombre -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                @error('name')
                    <p>* {{ $message }}</p>
                @enderror

            </div>
            <!-- correo -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                    aria-describedby="emailHelp" placeholder="ejemplo@ejemplo.com">
                @error('email')
                    <p>* {{ $message }}</p>
                @enderror

            </div>
            <!-- Contraseña -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                    placeholder="Password">
                @error('password')
                    <p>* {{ $message }}</p>
                @enderror
                <div id="exampleInputPassword1" class="invalid-feedback">
                    Please choose a Password.
                </div>
            </div>
            <!-- ConfirmarContraseña -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1_confirmation"
                    name="password_confirmation" placeholder="Conformar contraseña">
                <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
            </div>


            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>



@endsection
