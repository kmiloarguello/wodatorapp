<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#ff6604"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wodator</title>
        <script src="/js/materialize.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <link rel="manifest" href="/manifest.json">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #303030;
                background-size: cover ;
                font-family: 'Francois One', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0px;
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
               
               font-family: 'Francois One', sans-serif;
               color: #ef4a1b;
               letter-spacing: 12px;
            font-size: 2em;
            }

            .links {
                margin-top: 43px;
                    }

            .links > a {
               color: #ffffff;
                padding: 50px 12px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            #logo
            {
                background-image: url(../images/logo.png);
                width: 100%;
                height: 300px;
                background-repeat: no-repeat;
                margin-left: 55px;
            }

            .m-b-md {
                margin-top: 20px;
                
            }

          

            .hidden
            {
                display: none;
            }


        </style>

     
    </head>
    <body>

        <h1 class="hidden">Welcome Page </h1>  
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                       <!--  <a href="{{ url('/home') }}">Home</a> -->
                    @else
                        <!-- <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a> -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div id="logo"></div>
                <div class="title m-b-md">
                       YOUR WOD FRIEND                </div>

                

                <div class="links">
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                    
                </div>

                
            </div>
        </div>
    </body>
</html>
