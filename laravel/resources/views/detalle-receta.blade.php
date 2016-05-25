@extends( 'layouts.layout' )

@section( 'title', 'Receta para preparar ' . $recipe->name )

@section( 'content' )
        <div class="cover-interior-c"></div>
        <section class="detalle-receta">
            <div class="header">
                <div class="container">
                    <div class="info left"></span>
                        <h3>{!!$recipe->name!!}</h3>
                        <div class="ranking">
                            <span class="stars s{{$recipe->ranking}}"></span>
                        </div>
                        <div class="share">
                            Comparte esta receta:<a href="#" class="btn-share"></a>
                            <div class="redes">
                                <ul>
                                    <li><a target="_blank" href="" class="fa fa-pinterest"></a></li>
                                    <li><a target="_blank" href="" class="fa fa-facebook"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="detalles">
                            <div class="porciones">
                                <div class="left">Porciones:</div><div class="right">{{$recipe->portions}}</div>
                            </div>
                            <div class="tiempo-preparacion">
                                <div class="left">Tiempo de preparación:</div><div class="right">{{$recipe->preparation_time}}</div>
                            </div>
                            <div class="tiempo-coccion">
                                <div class="left">Tiempo de cocción:</div><div class="right">{{$recipe->cooking_time}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="image right"></span>
                        {!! Html::image( 'assets/images/recetas/' . $recipe->photo_big, $recipe->name ) !!}
                    </div>
                </div>
            </div>
            <div class="detalle">
                <div class="container">
                    <div class="columnas">
                        <div class="ingredientes left">
                            <div class="icono-ingredientes"></div>
                            <h3>Ingredientes</h3>
                            {!!$recipe->ingredients_desktop!!}
                        </div>
                        <div class="preparacion right">
                            <div class="icono-preparacion"></div>
                            <h3>Preparación</h3>
                            {!!$recipe->preparation!!}
                        </div>
                    </div>

                    <div class="tab">
                        <ul class="tabs">
                            <li><a href="#">Ingredientes</a></li>
                            <li><a href="#">Preparaciòn</a></li>
                        </ul>

                        <div class="tab_content">

                            <div class="tabs_item">
                                <div class="ingredientes">
                                    <div class="icono-ingredientes"></div>
                                    <h3>Ingredientes</h3>
                                    {!!$recipe->ingredients_mobile!!}
                                </div>
                            </div>

                            <div class="tabs_item">

                                <div class="preparacion">
                                    <div class="icono-preparacion"></div>
                                    <h3>Preparación</h3>
                                    {!!$recipe->preparation!!}
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="grid">
            <div class="container">
                <h2>Otras recetas</h2>
                <p>que te interesaría preparar</p>
                <div class="content-grid">
                    @foreach( $recipes as $recipe )
                        @include( 'partials.recipe', [
                                'recipe' => $recipe,
                                'class' => 'b2'
                              ])
                    @endforeach
                </div>
                <a id="" href="#" class="btn-mas">Ver más recetas</a>
            </div>
        </section>
@endsection