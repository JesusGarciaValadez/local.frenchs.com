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
                            <a href="route( 'detalle-producto' )">{!! Html::image( 'assets/images/productos/producto-prueba.jpg', 'Mostaza Honey SQ' ) !!}</a>
                            <p class="nombre">Mostaza Honey SQ</p>
                            <div class="gramos">387g</div>
                            <div class="gramos">280g</div>
                            <div class="gramos">387g</div>
                        </div>
                        <div class="producto">
                            <a href="route( 'detalle-producto' )">{!! Html::image( 'assets/images/productos/producto-prueba.jpg', 'Mostaza Honey SQ' ) !!}</a>
                            <p class="nombre">Mostaza Honey SQ</p>
                            <div class="gramos">387g</div>
                        </div>
                        <div class="producto">
                            <a href="route( 'detalle-producto' )">{!! Html::image( 'assets/images/productos/producto-prueba.jpg', 'Mostaza Honey SQ' ) !!}</a>
                            <p class="nombre">Mostaza Honey SQ</p>
                            <div class="gramos">387g</div>
                        </div>
                    </div>
                    <h4>Salsas</h4>
                    <div class="grid-productos">
                        <div class="producto">
                            <a href="route( 'detalle-producto' )">{!! Html::image( 'assets/images/productos/producto2-prueba.jpg', 'Salsa Inglesa' ) !!}</a>
                            <p class="nombre">Salsa Inglesa</p>
                            <div class="gramos">387g</div>
                        </div>
                        <div class="producto">
                            <a href="route( 'detalle-producto' )">{!! Html::image( 'assets/images/productos/producto2-prueba.jpg', 'Salsa Inglesa' ) !!}</a>
                            <p class="nombre">Salsa Inglesa</p>
                            <div class="gramos">387g</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection