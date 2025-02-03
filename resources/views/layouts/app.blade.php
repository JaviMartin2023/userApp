<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('landing') }}">User App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                </li>
                @auth
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
    
    <footer class="footer text-center py-3 mt-4">
        <div class="container">
            <span class="text-muted">© 2025 Fco. Javier Martín Mariscal. Todos los derechos reservados.</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>