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
                text: 'drop a picture',
                validators: {
                    maxWidth:  600,
                    maxHeight: 400
                },
                reject: function(file, errors) {
                    if (errors.mimeType) {
                        alert(file.name + ' must be an image.');
                    }

                    if (errors.maxWidth) {
                        alert(file.name + ' must be width:600px max.');
                    }

                    if (errors.maxHeight) {
                        alert(file.name + ' must be height:400px max.');
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
