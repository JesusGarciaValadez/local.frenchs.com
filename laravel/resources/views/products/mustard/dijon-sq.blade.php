@extends( 'layouts.layout' )

@section( 'title', "Mostaza Dijon SQ" )

@section( 'content' )
        <div class="cover-interior-b"></div>

        <section class="detalle-producto">
            <div class="container">
                <div class="left">
                    {!! Html::image( 'assets/images/slider/s5-producto.png', '' ) !!}
                </div>
                <div class="right">
                    <div class="descripcion">
                        <h2>Mostaza <span>Dijon</span></h2>
                        <p>Disfruta del incomparable sabor de la Mostaza Dijon que te ofrece French’s.</p>
                        <p>La combinación de ingredientes naturales y vino blanco Chardonnay le dará un toque gourmet a tus platillos.</p>
                    </div>
                    <div class="ingredientes">
                        <h3>Ingredientes</h3>
                        <p>Vinagre, agua, semilla de mostaza, sal, vino Chardonnay (como saborizante), ácido cítrico, ácido tartárico, especias y cúrcuma.</p>
                        <p>Contiene: mostaza.</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <p>Cont. Neto: 340g</p>
                        <p>Porción: 1 cucharada (30g) Calorías: 34 (142 kJ)</p>
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
                                  <td>2g</td>
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
                                  <td>644mg</td>
                                  <td>5%</td>
                                </tr>
                                <tr>
                                  <td>Carbohidratos totales</td>
                                  <td>2g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Fibra Dietética</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Azúcares</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Proteína</td>
                                  <td>2g</td>
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
          @include( 'partials.productRecipes', [ 'productName' => 'Mostaza Dijon' ] )
        @endif
@endsection