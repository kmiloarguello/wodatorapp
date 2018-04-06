<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <script src="/js/materialize.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>Wodator</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <meta name="theme-color" content="#ff6604"/>
      <link rel="shortcut icon" href="../favicon.ico"  />
      <link rel="manifest" href="/manifest.json">


    <script src="https://use.fontawesome.com/874dbadbd7.js"></script>


</head>
<body>
    <div id="app">

        <nav class="navbar navbar-inverse navbar-fixed-top" id="memberNavInfo">

            <a class="navbar-brand" href="{{ url('/') }}"><img src="../images/logo.png" alt="" id="home"></a>

            


        </nav>

        <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
                <div class="navbar-header">

                   
                    

                    
                    
                </div>

                
                   
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                   
                    <ul class="nav navbar-nav ">
                        
                        @guest

                            <li>
                                <a href="{{ route('login') }}">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                                </li>
                            <li>
                                <a href="{{ route('register') }}">
                                    <i class="fa fa-user-plus" aria-hidden="true">
                                        
                                    </i> Register</a>
                                </li>
                        @else

                        <li>

                            <a href="/get-random">
                                <i aria-hidden="true" class="icon material-icons">history</i>
                                <span>GO</span>
                            </a>
                        </li>




                        <li>
                            <a href="{{ route('categories.index') }}">
                                <i aria-hidden="true" class="icon material-icons">alarm</i>
                                <span>CATEGORIES</span>
                            </a>
                        </li>

                        
                           
                        <li>
                            <a href="{{ route('exercises.index') }}">
                                <i aria-hidden="true" class="icon material-icons">dns</i>
                                <span>WODS</span>
                            </a>
                        </li> 

                        <li>
                            <a href="{{ url('favorites') }}">
                                <i aria-hidden="true" class="icon material-icons">favorite</i>
                                <span>FAVS</span>
                            </a>
                        </li>

                         <li>
                            <a href="{{ route('marks.index') }}">
                                <i aria-hidden="true" class="icon material-icons">assignment_turned_in</i>
                                <span>MARKS</span>
                            </a>
                        </li>

                         <li>
                            <a href="{{ route('tips.index') }}">
                                <i aria-hidden="true" class="icon material-icons">description</i>
                                <span>TERMS</span>
                            </a>
                        </li>


                      

                        

@if(Auth::user()->role_id == 1)


<li class="dropdown">
                                <a href="#" class="dropdown-toggle" 
                                data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>  Admin <span class="caret"></span>
                                </a>

                             
                            </li>

@endif


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" 
                                data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-power-off" aria-hidden="true"></i>  Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                
            </div>
        </nav>

        <div class="container" >

        @include('messages.errors')
        @include('messages.success')

            <div class="row">
                @yield('content')
            
            </div>
         </div>

    </div>

       <script type="text/javascript">
            if ('serviceWorker' in navigator ) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('../service-worker.js').then(function(registration) {
                        
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function(err) {
                       
                        console.log('ServiceWorker registration failed: ', err);
                    });
                });
            }
        </script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/stopwatch.js') }}"></script>
    <script src="{{ asset('js/rounds.js') }}"></script>

    @yield('jqueryScript')
</body>
</html>