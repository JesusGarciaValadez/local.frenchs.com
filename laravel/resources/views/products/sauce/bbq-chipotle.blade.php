@extends( 'layouts.layout' )

@section( 'title', "Nueva Mostaza BBQ Chipotle" )

@section( 'content' )
        <div class="cover-interior-b bbq-chipotle"></div>

        <section class="detalle-producto">
            <div class="container">
                <div class="left">
                    {!! Html::image( 'assets/images/slider/s10-producto.png', '' ) !!}
                </div>
                <div class="right">
                    <div class="descripcion">
                        <h2>Nueva Mostaza <span>BBQ Chipotle</span></h2>
                        <p>Descubre el rico sabor de la Nueva French's&reg; Salsa BBQ Sabor Chipotle. Salsa hecha a base de tomate de la más alta calidad, con sabor a chipotle ahumado, creada especialmente para los conocedores. No contiene almidones. Utiliza nuestra salsa en tu próxima parrillada.</p>
                    </div>
                    <div class="ingredientes">
                        <h3>Ingredientes</h3>
                        <p>Vinagre, azúcar, pasta de tomate, aga, sal, chile (pimienta de cayena), saborizante natural humo, harina de mostaza, chile chipotle, paprika ahumada, cebolla en polvo, saborizante natural, especias, ajo en polvo, y benzonato de sodio (como conservador).</p>
                        <p>Contiene: mostaza.</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <p>Cont. Neto: 396g</p>
                        <p>Porción: 130g Calorías: 152 (646 kJ)</p>
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
                                  <td>1.5g</td>
                                </tr>
                                <tr>
                                  <td>Carbohidratos totales</td>
                                  <td>39g</td>
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
                    </div>
                </div>
                <p>{!! Html::link( 'productos', 'Todos los productos', [ 'class' => 'boton', 'id' => '' ] ) !!}</p>
            </div>
        </section>
        @if ( count( $recipes ) > 0 )
          @include( 'partials.productRecipes', [ 'productName' => 'Mostaza BBQ Chipotle' ] )
        @endif
@endsection