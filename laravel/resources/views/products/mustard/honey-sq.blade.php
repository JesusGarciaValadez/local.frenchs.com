@extends( 'layouts.layout' )

@section( 'title', "Mostaza Honey SQ" )

@section( 'content' )
        <div class="cover-interior-b"></div>

        <section class="detalle-producto">
            <div class="container">
                <div class="left">
                    {!! Html::image( 'assets/images/slider/s7-producto.png', '' ) !!}
                </div>
                <div class="right">
                    <div class="descripcion">
                        <h2>Mostaza <span>Honey</span></h2>
                        <p>Disfruta el original sabor agridulce de la Mostaza French's&reg; Honey, elaborada con finas semillas y un delicioso toque de miel.</p>
                    </div>
                    <div class="ingredientes">
                        <h3>Ingredientes</h3>
                        <p>Vinagre, agua, azúcar, semilla de mostaza, miel (como saborizante), sal, especias, extracto natural de zanahoria y ajo en polvo.</p>
                        <p>Contiene: mostaza.</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <p>Cont. Neto: 340g</p>
                        <p>Porción: 1 cucharada (30g) Calorías: 30 (125 kJ)</p>
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
                                  <td>277mg</td>
                                  <td>1%</td>
                                </tr>
                                <tr>
                                  <td>Carbohidratos totales</td>
                                  <td>8g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Fibra Dietética</td>
                                  <td>1g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Azúcares</td>
                                  <td>6g</td>
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
                    'product' => 'Mostaza Honey',
                    'recipes'  => $recipes
                  ] )
        @endif
@endsection