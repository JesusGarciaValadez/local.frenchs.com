<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield( 'title' ) | French's&reg; México</title>
        <meta name="description" content="@yield( 'description' )">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        {!! Html::meta( 'robots', 'INDEX,FOLLOW' ) !!}

        {!! Html::style( 'humans.txt', [ 'type' => 'text/plain', 'rel' => 'author' ] ) !!}
        {!! Html::favicon( 'favicon.png' ) !!}

        {!! Html::style( 'assets/css/main.css' ) !!}
        {!! Html::style( 'assets/plugins/bxslider/jquery.bxslider.css' ) !!}
        {!! Html::style( 'assets/plugins/drag-and-drop/jquery.ezdz.min.css' ) !!}
        {!! Html::style( 'assets/plugins/font-awesome/css/font-awesome.min.css' ) !!}

        <script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='//www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </head>
    <body>
    @section( 'header' )
        <header>
            <div class="head">
                <div class="hamburguesa"></div>
                <div class="btn-close-menu"></div>
                <a href="{{ route( 'home' ) }}"><h1 class="logo"><span>French's</span></h1></a>
                <nav class="menu">
                    <ul>
                        <li><a href="{{ route( 'about' ) }}">SOBRE NOSOTROS</a></li>
                        <li><a href="{{ route( 'products' ) }}">PRODUCTOS</a></li>
                        <li><a href="{{ route( 'recipes' ) }}">RECETAS</a></li>
                        <li><a href="{{ route( 'contact' ) }}">CONTACTO</a></li>
                        @unless ( !Auth::check() )
                        <li><a href="{{ route( 'manageRecipes' ) }}">Editar recetas</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></
                        @endunless
                    </ul>
                </nav>
                <div class="redes">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/FrenchsMexico/?fref=ts" class="fa fa-facebook"></a></li>
                    </ul>
                </div>
            </div>
        </header>
    @show

        @yield( 'content' )

    @section( 'footer' )
        <footer>
            <div class="container">
                <nav class="menu-footer left">
                    <ul>
                        <li><a href="">Términos Legales</a></li>
                        <li><a href="">Aviso de Privacidad</a></li>
                    </ul>
                </nav>
                <div class="derechos right">
                    <p>© 2015  French's&reg; MX All rights reserved.</p>
                </div>
            </div>
        </footer>
    @show

    @section( 'scripts' )
    @show
    </body>
</html>
