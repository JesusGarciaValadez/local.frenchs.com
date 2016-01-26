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
                            <a href="{{ route( 'clasica-sq' ) }}">{!! Html::image( 'assets/images/slider/s1-producto.png', 'Mostaza Clásica SQ' ) !!}</a>
                            <p class="nombre">Mostaza Clásica SQ</p>
                            <div class="gramos">387g</div>
                            <div class="gramos">280g</div>
                            <div class="gramos">387g</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'clasica-frasco' ) }}">{!! Html::image( 'assets/images/slider/s1-producto.png', 'Mostaza Clásica en Frasco' ) !!}</a>
                            <p class="nombre">Mostaza Clásica en Frasco</p>
                            <div class="gramos">387g</div>
                            <div class="gramos">280g</div>
                            <div class="gramos">387g</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'dijon' ) }}">{!! Html::image( 'assets/images/slider/s2-producto.png', 'Mostaza Dijon SQ' ) !!}</a>
                            <p class="nombre">Mostaza Dijon SQ</p>
                            <div class="gramos">387g</div>
                            <div class="gramos">280g</div>
                            <div class="gramos">387g</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'deli' ) }}">{!! Html::image( 'assets/images/slider/s3-producto.png', 'Mostaza Deli SQ' ) !!}</a>
                            <p class="nombre">Mostaza Deli SQ</p>
                            <div class="gramos">387g</div>
                            <div class="gramos">280g</div>
                            <div class="gramos">387g</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'honey' ) }}">{!! Html::image( 'assets/images/slider/s4-producto.png', 'Mostaza Honey SQ' ) !!}</a>
                            <p class="nombre">Mostaza Honey SQ</p>
                            <div class="gramos">387g</div>
                            <div class="gramos">280g</div>
                            <div class="gramos">387g</div>
                        </div>
                        <div class="producto">
                            <a href="{{ route( 'honey' ) }}">{!! Html::image( 'assets/images/slider/s6-producto.png', 'Mostaza BBQ Chipotle' ) !!}</a>
                            <p class="nombre">Mostaza Honey SQ</p>
                            <div class="gramos">387g</div>
                            <div class="gramos">280g</div>
                            <div class="gramos">387g</div>
                        </div>
                    </div>
                    <h4>Salsas</h4>
                    <div class="grid-productos">
                        <div class="producto">
                            <a href="{{ route( 'inglesa' ) }}">{!! Html::image( 'assets/images/slider/s5-producto.png', 'Salsa Inglesa' ) !!}</a>
                            <p class="nombre">Salsa Inglesa</p>
                            <div class="gramos">387g</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection