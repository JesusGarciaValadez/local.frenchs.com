@extends( 'layouts.layout' )

@section( 'title', "Mostaza Clásica en Frasco" )

@section( 'content' )
        <div class="cover-interior-b"></div>

        <section class="detalle-producto">
            <div class="container">
                <div class="left">
                    {!! Html::image( 'assets/images/productos/mostaza-tarrito.png', '' ) !!}
                </div>
                <div class="right">
                    <div class="descripcion">
                        <h2>Mostaza <span>Clásica en Frasco</span></h2>
                        <p>La Mostaza Clásica French's con el mismo sabor e ingredientes de siempre, que la hacen única, ahora en frasco.</p>
                    </div>
                    <div class="ingredientes">
                        <h3>Ingredientes</h3>
                        <p>Vinagre, agua, semilla de mostaza, sal, cúrcuma, paprika, especia, saborizantes naturales y ajo en polvo.</p>
                        <p>Contiene: mostaza.</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <p>Cont. Neto: 170g</p>
                        <p>Porción: 1 cucharada (30g) Calorías: 13 (54 kJ)</p>
                        <table>
                            <thead>
                                <tr>
                                  <th colspan="2"><strong>Cantidades por porción.</strong></th>
                                  <th>DV*</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>Grasa Total</td>
                                  <td>1g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Grasa saturada</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Grasas Trans</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Sodio</td>
                                  <td>333g</td>
                                  <td>2%</td>
                                </tr>
                                <tr>
                                  <td>Carbohidratos totales</td>
                                  <td>1g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Fibra Dietética</td>
                                  <td>1g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Azúcares</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Proteína</td>
                                  <td>1g</td>
                                  <td>0%</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="f-table">* Porcentaje de valor diario (DV) estan basados en una dieta de 2,000 calorías.</p>
                    </div>
                </div>
                <p>{!! Html::link( 'productos', 'Todos los productos', [ 'class' => 'boton', 'id' => '' ] ) !!}</p>
            </div>
        </section>
        @if ( count( $recipes ) > 0 )
        <section class="grid">
            <div class="container">
                <h2>Recetas</h2>
                <p>que podrías preparar con Mostaza Clásica en Frasco</p>
                <div class="content-grid">
                  @foreach ( $recipes as $recipe )
                  <a href="{{ action( 'RecipeController@index', [ 'id' => $recipe->id ] ) }}" class="receta">
                    <p class="categoria b2">
                      {{$recipe->categorie->categorie_name}}
                    </p>
                    <div class="image">
                      {!! Html::image( 'assets/images/recetas/' . $recipe->photo_small, $recipe->name ) !!}
                    </div>
                    <p class="nombre">{!!$recipe->name!!}</p>
                    <p class="porciones">{{$recipe->portions}} porciones</p>
                    <p class="tiempo">Tiempo de preparación: {{$recipe->preparation_time}}</p>
                    <div class="ranking">
                      <span class="stars s{{$recipe->ranking}}"></span>
                    </div>
                  </a>
                  @endforeach
                </div>
                <a id="" href="#" class="btn-mas">Ver más recetas</a>
            </div>
        </section>
        @endif
@endsection