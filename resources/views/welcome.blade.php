<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />        


        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            
        </div>
    <section class="intro">
        <div class="inner">
            <div class="content">
                <div class="content-left">
                    <div class="content-left-body">
                        <figure>                            
                            <img class="content-left-body-img" src="{{ url('/img/maching.png') }}" width="150">

                        </figure>
                    </div>
                    
                </div>
                <div class="content-right">
                    <div class="content-right-head">
                        <div class="content-right-head-nav">
                            <i class="fas fa-bars"></i>
                        </div>  
                        <div class="content-right-head-nav-title">
                            <span>Iniciar Sesión</span> 
                        </div>
                        
                        <i class="far fa-user fa-4x fa-white"></i>                                                                      
                    </div>
                    <div class="content-right-body">
                        <div class="container">
                            <div class="prob">
                                <form action="/action_page.php" method="get"> 
                                    <label>Usuario</label>  
                                    <input type="text" name="user" class="form-login form-login-bg form-login-user" autofocus="true" minlength="3" maxlength="15" required="true" tabindex="0">
                                    <br>
                                    <label>Contraseña</label>   
                                    <input type="password" name="user" class="form-login form-login-bg form-login-contasena" required="true">
                                    
                                    <label class="container-ckb">Recuérdame
                                      <input type="checkbox">
                                      <span class="checkmark"></span>
                                    </label>        

                                        
                                    <div class="prob-send">
                                        <button type="submit" class="prob-send-btn">Iniciar Sesión</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="content-right-footer">
                        <!-- <small>ol</small> -->
                    </div>
                </div>              
            
            </div>
        </div>
    </section>        
    </body>
</html>
