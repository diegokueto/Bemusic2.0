<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BeMusic</title>

<style type="text/css">

        body{
            object-fit: cover;
            background-size: cover;
            color: rgb(0, 0, 0);
            height: 800px;
            background-size: cover;
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            margin: 0%;
            text-align: center;
        }

        /*Coloca la lista del menú en horizontal, Añade el colo de fondo, centra el menu y
        ajusta los márgenes*/
        .menu ul{
            display:flex;
            list-style:none;
            padding:0;
            text-align: center; 
            background-color: rgb(255, 217, 0);
                
        }

        /*Ajusta el menu al monitor*/
        .menu ul li{
          width:100%;
        }
        
        /*Crea un efecto de transición y ajusta el texto al ancho del menu*/
        .menu ul li a{
            text-decoration:none;
            padding:2em;
            border-color:#000000;
            color:rgb(0, 0, 0);
            display: block; 
            -webkit-transition: background-color 0.4s linear;
            transition: background-color 0.4s linear;   
        }

        /*Asigna el color al que cambia al poner el ratón*/
        .menu ul li a:hover{
            background-color: rgb(255, 255, 255);
        }

        h2{
            color: rgb(46, 206, 255);
        }

        </style>
    </head>
    <body class="antialiased">

            <h1>Buscar</h1>
    <br>
    <nav class="menu ul">
        <ul> 
            <li><b><a class="navbar-brand" href="{{ url('/') }}">Inicio</a></b></li>
            <li><b><a class="navbar-brand" href="{{ url('/buscar') }}">Buscar</a></b></li>
            <li><b><a class="navbar-brand" href="{{ url('/contacto') }}">Contacto</a></b></li>
            <li><b>
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Usuario</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesión</a>

                        @if (Route::has('Registrarse'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
            </a></b></li>
            <li><b><a class="navbar-brand" href="{{ url('/instrumentos') }}">Mis instrumentos</a></b></li>
        </ul>
</nav>
    <h1>Desde aqui podras localizar los que necesites</h1>
    <br>
    <h2>Tiendas de música</h2>
    <iframe src="https://www.google.com/maps/d/embed?mid=17P0HYEuS1Yziw8rFxSnkKOFpIqI2Z0Q&ehbc=2E312F" width="600" height="450" style="border:0;"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br>
    <h2>Clases</h2>
    <br>
    <h2>Tocar en la calle</h2>
    <br>
    <h2>Locales de ensayo</h2>
    <iframe src="https://www.google.com/maps/d/embed?mid=1-SVC4b8bq1BBXTewxxzNpK_fTvFkJZI&ehbc=2E312F" width="600" height="450" style="border:0;"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br>
    <h2>Micro abierto</h2>
    <iframe src="https://www.google.com/maps/d/embed?mid=1NKcCp7vbmzWL2eEX2x5cv8Sw7jjLWY4&ehbc=2E312F" width="600" height="450" style="border:0;"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br>
    <h2>Conciertos</h2>
    <br>

</body>
</html>