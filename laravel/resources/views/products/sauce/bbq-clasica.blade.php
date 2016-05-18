@extends( 'layouts.layout' )

@section( 'title', "Nueva Mostaza BBQ Chipotle" )

@section( 'content' )
        <div class="cover-interior-b"></div>

        <section class="detalle-producto">
            <div class="container">
                <div class="left">
                    {!! Html::image( 'assets/images/slider/s9-producto.png', '' ) !!}
                </div>
                <div class="right">
                    <div class="descripcion">
                        <h2>Nueva Mostaza <span>BBQ Clásica</span></h2>
                        <p>La Nueva French's BBQ Classica contiene el rico sabor del tomate con un toque dulce y fuerte a la vez. Crea tu parrillada con French's. Usa esta salsa para marinar costillas, pollo y carne.</p>
                    </div>
                    <div class="ingredientes">
                        <h3>Ingredientes</h3>
                        <p>Pasta de tomate, jarábe de maíz de alta fructuosa, jarábe de maíz, agua, vinagre, melaza, sal, harina de mostaza, saborizante natural humo, especias, cebolla en polvo, benzonato de sodio (como conservador), ajo en polvo, azúcar y saborizante natural.</p>
                        <p>Contiene: mostaza.</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <p>Cont. Neto: 396g</p>
                        <p>Porción: 130g Calorías: 208 (884 kJ)</p>
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
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Grasa saturada</td>
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Grasas Trans</td>
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Sodio</td>
                                  <td>1.3g</td>
                                </tr>
                                <tr>
                                  <td>Carbohidratos totales</td>
                                  <td>53g</td>
                                </tr>
                                <tr>
                                  <td>Fibra Dietética</td>
                                  <td>3g</td>
                                </tr>
                                <tr>
                                  <td>Azúcares</td>
                                  <td>34g</td>
                                </tr>
                                <tr>
                                  <td>Proteína</td>
                                  <td>2g</td>
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
                <p>que podrías preparar con Mostaza BBQ Clásica</p>
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