<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cofermeta</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:600&amp;subset=latin-ext" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                -webkit-text-stroke-width: 2px; /* largura da borda */
                -webkit-text-stroke-color: #000; /* cor da borda */
                
                background-color: #198ffd;
                color: #fff;
                /*font-family: 'Raleway', sans-serif;*/

                font-family: 'Saira Semi Condensed', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 100px;
            }

            .links > a {
                -webkit-text-stroke-width: 0px; /* largura da borda */
                -webkit-text-stroke-color: #fff; /* cor da borda */
                
                color: #fff;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Início</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>
                        <a href="{{ route('register') }}">Cadastrar</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    COFERMETA
                </div>

                <div class="links">
                    <a href="https://www.cofermeta.com.br/">Site Oficial</a>
                    <a href="/produtos/">Sistema</a>
                    <a href="https://laravel-news.com">Notícias</a>
                    <a href="https://www.cofermeta.com.br/contato">Contato</a>
                </div>
            </div>
        </div>
    </body>
</html>
