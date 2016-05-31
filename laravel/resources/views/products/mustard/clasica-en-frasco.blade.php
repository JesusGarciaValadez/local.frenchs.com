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
                        <p>La Mostaza Clásica French's&reg;  con el mismo sabor e ingredientes de siempre, que la hacen única, ahora en frasco.</p>
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
        {{-- Show recipes if are recipes made with this product --}}
        @if ( count( $recipes ) > 0 )
          @include( 'partials.productRecipes', [
                    'product' => 'Mostaza Clásica en Frasco',
                    'recipes'  => $recipes
                  ] )
        @endif
@endsection