@extends( 'layouts.layout' )

@section( 'title', "Mostaza BBQ Chipotle" )

@section( 'content' )
        <div class="cover-interior-b"></div>

        <section class="detalle-producto">
            <div class="container">
                <div class="left">
                    {!! Html::image( 'assets/images/slider/s10-producto.png', '' ) !!}
                </div>
                <div class="right">
                    <div class="descripcion">
                        <h2>Mostaza <span>BBQ Chipotle</span></h2>
                        <p>Salsa hecha a base de tomate de la más alta calidad, con sabor a chipotle ahumado, creada especialmente para los conocedores. No contiene almidones.</p>
                    </div>
                    <div class="ingredientes">
                        <h3>Ingredientes</h3>
                        <p>Vinagre destilado, agua, semilla de mostaza grado 1, sal, vino Chardonnay , ácido cítrico, ácido tartárico, cúrcuma y especias.</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <p>Cont. Neto: 12oz (340g)</p>
                        <p>Porción: 1 cucharada (5g) Total: 68 Calorías: 5</p>
                        <table>
                            <thead>
                                <tr>
                                  <th colspan="2">Amount Per Serving</th>
                                  <th>0% DV*</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>Total Fat</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Sat Fat</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Trans Fat</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Cholest</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Sodium</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Total Carb.</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Fiber</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Sugar</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Protein</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="f-table">* Percent Daily Values (DV) are based on 2,000 calorie diet.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid">
            <div class="container">
                <h2>Recetas</h2>
                <p>que podrías preparar con Mostaza BBQ Chipotle</p>
                <div class="content-grid">
                    <a href="" class="receta">
                        <p class="categoria b2">Platillos</p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/receta2.jpg', 'Tiras de pollo con mostaza' ) !!}
                        </div>
                        <p class="nombre">Tiras de pollo con mostaza</p>
                        <p class="porciones">12 porciones</p>
                        <p class="tiempo">Timepo de preparación: 15 min.</p>
                        <div class="ranking">
                            <span class="stars s4"></span>
                        </div>
                    </a>
                    <a href="" class="receta">
                        <p class="categoria b2">Platillos</p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/receta2.jpg', 'Tiras de pollo con mostaza' ) !!}
                        </div>
                        <p class="nombre">Tiras de pollo con mostaza</p>
                        <p class="porciones">12 porciones</p>
                        <p class="tiempo">Timepo de preparación: 15 min.</p>
                        <div class="ranking">
                            <span class="stars s4"></span>
                        </div>
                    </a>
                    <a href="" class="receta">
                        <p class="categoria b2">Platillos</p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/receta2.jpg', 'Tiras de pollo con mostaza' ) !!}
                        </div>
                        <p class="nombre">Tiras de pollo con mostaza</p>
                        <p class="porciones">12 porciones</p>
                        <p class="tiempo">Timepo de preparación: 15 min.</p>
                        <div class="ranking">
                            <span class="stars s4"></span>
                        </div>
                    </a>
                </div>
                <a id="" href="#" class="btn-mas">Ver más recetas</a>
            </div>
        </section>
@endsection