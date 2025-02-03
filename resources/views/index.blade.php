
@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Bienvenido a la página principal</h1>
    <p class="lead">Esta es la página principal de la aplicación.</p>
    <hr class="my-4">
    <p>Explora las funcionalidades de nuestra aplicación y gestiona tus usuarios de manera eficiente.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('users.index') }}" role="button">Ver lista de usuarios</a>
</div>

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Gestión de Usuarios</h5>
                <p class="card-text">Administra los usuarios de tu aplicación de manera sencilla y eficiente.</p>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Ver Usuarios</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Seguridad</h5>
                <p class="card-text">Mantén la seguridad de tu aplicación con autenticación y roles de usuario.</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
            </div>
        </div>
    </div>
</div>
@endsection