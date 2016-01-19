<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield( 'title' ) | French's México</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="plugins/bxslider/jquery.bxslider.css">
        <link rel="stylesheet" href="plugins/drag-and-drop/jquery.ezdz.min.css">
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        
        @yield( 'partials.header' )

        @yield( 'content' )

        @yield( 'partials.footer' )

  
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script type="text/javascript" src="plugins/tinder/jquery.min.js"></script>
        <script type="text/javascript" src="plugins/tinder/jquery.transform2d.js"></script>
        <script type="text/javascript" src="plugins/tinder/jquery.jTinder.js"></script>
        <script src="plugins/bxslider/jquery.bxslider.min.js"></script>
        <script src="plugins/parallax/parallax.js"></script>
        <script src="plugins/drag-and-drop/jquery.ezdz.min.js"></script>
        <script src="js/main.js"></script>
        
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

        </script>
        
        <script>
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
