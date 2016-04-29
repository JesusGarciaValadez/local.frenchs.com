@extends( 'layouts.layout' )

@section( 'title', "Productos" )

@section( 'content' )
        <div class="cover-interior-b"></div>

        <section class="productos">
            <div class="title">
                <div class="container">
                    <h2>Disfruta la variedad que <br><span>French’s</span> tiene para ti.</h2>
                </div>
            </div>
            <div class="categorias">
                <div class="container">
                    <h4>Mostazas</h4>
                    <div class="grid-productos">
                        <div class="producto">
                            <a href="{{ route( 'clasica-sq' ) }}">{!! Html::image( 'assets/images/slider/s1-producto.png', "French's Classic Yellow - Mostaza Clásica" ) !!}</a>
                            <p class="nombre">French's Classic Yellow - Mostaza Clásica</p>
                            <div class="gramos">7g</div>
                            <div class="gramos">226g</div>
                            <div class="gramos">397g</div>
                            <div class="gramos">567g</div>
                            <div class="gramos">2.980kg</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'clasica-frasco' ) }}">{!! Html::image( 'assets/images/slider/s4-producto.png', "French's Classic Yellow - Mostaza Clásica en frasco" ) !!}</a>
                            <p class="nombre">French's Classic Yellow - Mostaza Clásica en frasco</p>
                            <div class="gramos">170g</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'dijon' ) }}">{!! Html::image( 'assets/images/slider/s5-producto.png', "French's Mostaza Dijon" ) !!}</a>
                            <p class="nombre">French's Mostaza Dijon</p>
                            <div class="gramos">340g</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'deli' ) }}">{!! Html::image( 'assets/images/slider/s6-producto.png', "French's Mostaza Deli" ) !!}</a>
                            <p class="nombre">French's Mostaza Deli</p>
                            <div class="gramos">340g</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'honey' ) }}">{!! Html::image( 'assets/images/slider/s7-producto.png', "Frenchs' Mostaza Honey - Sabor agridulce" ) !!}</a>
                            <p class="nombre">Frenchs' Mostaza Honey - Sabor agridulce</p>
                            <div class="gramos">340g</div>
                        </div>
                    </div>
                    <h4>Salsas</h4>
                    <div class="grid-productos">
                        <div class="producto">
                            <a href="{{ route( 'inglesa' ) }}">{!! Html::image( 'assets/images/slider/s8-producto.png', "French's Worcestershire Sauce - Salsa inglesa" ) !!}</a>
                            <p class="nombre">French's Worcestershire Sauce - Salsa inglesa</p>
                            <div class="gramos">156g</div>
                            <div class="gramos">312g</div>
                            <div class="gramos">4kg</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'bbq-clasica' ) }}">{!! Html::image( 'assets/images/slider/s9-producto.png', "Nueva French's BBQ Classic - Salsa BBQ Clásica" ) !!}</a>
                            <p class="nombre">Nueva French's BBQ Classic - Salsa BBQ Clásica</p>
                            <div class="gramos">396g</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'bbq-chipotle' ) }}">{!! Html::image( 'assets/images/slider/s10-producto.png', "Nueva French's BBQ Chipotle - Salsa BBQ con chipotle" ) !!}</a>
                            <p class="nombre">Nueva French's BBQ Chipotle - Salsa BBQ con chipotle</p>
                            <div class="gramos">396g</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection