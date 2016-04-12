<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield( 'title' ) | French's México</title>
        <meta name="description" content="@yield( 'description' )">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        {!! Html::meta( 'robots', 'INDEX,FOLLOW' ) !!}

        {!! Html::style( 'humans.txt', [ 'type' => 'text/plain', 'rel' => 'author' ] ) !!}
        {!! Html::favicon( 'favicon.png' ) !!}

        {!! Html::style( 'assets/css/main.css' ) !!}
        {!! Html::style( 'assets/plugins/bxslider/jquery.bxslider.css' ) !!}
        {!! Html::style( 'assets/plugins/drag-and-drop/jquery.ezdz.min.css' ) !!}
        {!! Html::style( 'assets/plugins/font-awesome/css/font-awesome.min.css' ) !!}
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <!--[if lt IE 9]>
            {!! Html::script('assets/js/bootstrap.min.js') !!}
            {!! Html::script('assets/js/bootstrap.min.js') !!}
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
    @section( 'header' )
        <header>
            <div class="head">
                <div class="hamburguesa"></div>
                <div class="btn-close-menu"></div>
                <a href="{{ route( 'home' ) }}"><h1 class="logo"><span>French´s</span></h1></a>
                <nav class="menu">
                    <ul>
                        <li><a href="{{ route( 'about' ) }}">SOBRE NOSOTROS</a></li>
                        <li><a href="{{ route( 'products' ) }}">PRODUCTOS</a></li>
                        <li><a href="{{ route( 'recipes' ) }}">RECETAS</a></li>
                        <li><a href="{{ route( 'contact' ) }}">CONTACTO</a></li>
                    </ul>
                </nav>
                <div class="redes">
                    <ul>
                        <li><a target="_blank" href="" class="fa fa-instagram"></a></li>
                        <li><a target="_blank" href="" class="fa fa-pinterest"></a></li>
                        <li><a target="_blank" href="" class="fa fa-facebook"></a></li>
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
                    <p>© 2015  French´s MX All rights reserved.</p>
                </div>
            </div>
        </footer>
    @show


        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
        

        {!! Html::script('assets/plugins/tinder/jquery.min.js') !!}
        {!! Html::script('assets/plugins/tinder/jquery.transform2d.js') !!}
        {!! Html::script('assets/plugins/tinder/jquery.jTinder.js') !!}
        {!! Html::script('assets/plugins/bxslider/jquery.bxslider.min.js') !!}
        {!! Html::script('assets/plugins/parallax/parallax.js') !!}
        {!! Html::script('assets/plugins/drag-and-drop/jquery.ezdz.min.js') !!}
        {!! Html::script('assets/js/main.js') !!}

        <script>
            $('.slider-cover').bxSlider({
                mode: 'fade',
                controls: false,
                captions: true
            });
            $('.slider-acerca').bxSlider({
                mode: 'fade',
                controls: false,
                captions: true
            });
            $('[type="file"]').ezdz({
                text: 'SUBE TU FOTO',
                validators: {
                    maxWidth:  600,
                    maxHeight: 600
                },
                reject: function(file, errors) {
                    if (errors.mimeType) {
                        alert(file.name + ' must be an image.');
                    }

                    if (errors.maxWidth) {
                        alert(file.name + ' debe ser maximo de 600px de ancho ');
                    }

                    if (errors.maxHeight) {
                        alert(file.name + ' debe ser maximo de 600px de altura ');
                    }
                }
            });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='//www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
