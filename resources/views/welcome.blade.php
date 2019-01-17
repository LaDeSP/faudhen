<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/customBootstrap.css') }}" rel="stylesheet">
        <title>Faudhen</title>
    
    </head>
    <body class="d-flex align-items-center std-background" >
        <div class="d-inline-flex align-items-end justify-content-around menu-ini ">
            
            <div class="mx-auto">
                
                <div>
                    @auth
                        <a class="btn-custom" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn-custom" href="{{ route('login') }}">Logar</a>
                        <a class="btn-custom" href="{{ route('register') }}">Registrar</a>
                    @endauth
                </div>
                
            </div> 
            <div class="faudhen ml-auto d-flex flex-column text-center">
                <div><img src="../public/svg/logomarca.svg" class="faudhen-logo"></div><br>
                <div class="text-light text-uppercase faudhen-name">Ferramenta Automática de Decisão de Horario-Ensalamento</sdiv>
            </div>
        </div>
    </body>
</html>
