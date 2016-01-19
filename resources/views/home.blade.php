@extends( 'layouts.layout' )

@section( 'title', "Home" )

@section( 'content' )
        <section class="home">
            <div class="cover">
                <div id="scene" class="scene">
                    <div class="layer clouds" data-depth="0.40">{!! Html::image( 'assets/images/cover/nubes.png', 'Nubes' ) !!}</div>
                    <div class="layer hills" data-depth="0.10">{!! Html::image( 'assets/images/cover/hills.png', 'Hills' ) !!}</div>
                    <div class="layer santa" data-depth="0.20">{!! Html::image( 'assets/images/cover/santa.png', 'Santa' ) !!}</div>
                    <div class="layer hazlo-unico" data-depth="0.30">{!! Html::image( 'assets/images/cover/hazlo-unico.png', 'Hazlo único' ) !!}</div>
                    <div class="layer hills-front">{!! Html::image( 'assets/images/cover/hills-front.png', 'Hills Front' ) !!}</div>
                </div>
            </div>
            <div class="filtro">
                <div class="container">
                    <h2>Los regalos de navidad significan más<br>cuando les agregas tu toque personal.</h2>
                    <p>Encuentra la inspiración perfecta para envolver tus regalos.</p>
                    <div class="content-filtro">
                        <label>
                            <select id="material" class="material">
                                <option value="vacio" selected>Material</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                            </select>
                        </label>
                        <label>
                            <select id="forma" class="forma">
                                <option value="vacio" selected>Forma</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                            </select>
                        </label>
                        <a href="">Buscar</a>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="container">
                    <div class="content-grid">
                        <div class="inspiracion">
                            <p class="categoria">Categoria</p>
                            <figure class="effect-img">
                                {!! Html::image( 'assets/images/inspiracion/img1-prueba-inspiracion.jpg', '' ) !!}
                            </figure>
                            <p class="nombre">Lorem Ipsum proin Gravida nibh.</p>
                            <p class="tiempo">Se realizara en: 60 mins</p>
                            <p class="line"></p>
                            <div class="dificultad left">Dificultad: <span class="ribbon d1"></span></div>
                            <div class="btn">
                                <a href="">Instrucciones</a>
                            </div>
                        </div>
                        <div class="inspiracion">
                            <p class="categoria">Categoria</p>
                            <figure class="effect-img">
                                {!! Html::image( 'assets/images/inspiracion/img2-prueba-inspiracion.jpg', '' ) !!}
                            </figure>
                            <p class="nombre">Lorem Ipsum proin Gravida nibh.</p>
                            <p class="tiempo">Se realizara en: 60 mins</p>
                            <p class="line"></p>
                            <div class="dificultad left">Dificultad: <span class="ribbon d1"></span></div>
                            <div class="btn">
                                <a href="">Instrucciones</a>
                            </div>
                        </div>
                        <div class="inspiracion">
                            <p class="categoria">Categoria</p>
                            <figure class="effect-img">
                                {!! Html::image( 'assets/images/inspiracion/img3-prueba-inspiracion.jpg', '' ) !!}
                            </figure>
                            <p class="nombre">Lorem Ipsum proin Gravida nibh.</p>
                            <p class="tiempo">Se realizara en: 60 mins</p>
                            <p class="line"></p>
                            <div class="dificultad left">Dificultad: <span class="ribbon d1"></span></div>
                            <div class="btn">
                                <a href="">Instrucciones</a>
                            </div>
                        </div>
                        <div class="inspiracion">
                            <p class="categoria">Categoria</p>
                            <figure class="effect-img">
                                {!! Html::image( 'assets/images/inspiracion/img1-prueba-inspiracion.jpg', '' ) !!}
                            </figure>
                            <p class="nombre">Lorem Ipsum proin Gravida nibh.</p>
                            <p class="tiempo">Se realizara en: 60 mins</p>
                            <p class="line"></p>
                            <div class="dificultad left">Dificultad: <span class="ribbon d1"></span></div>
                            <div class="btn">
                                <a href="">Instrucciones</a>
                            </div>
                        </div>
                        <div class="inspiracion">
                            <p class="categoria">Categoria</p>
                            <figure class="effect-img">
                                {!! Html::image( 'assets/images/inspiracion/img2-prueba-inspiracion.jpg', '' ) !!}
                            </figure>
                            <p class="nombre">Lorem Ipsum proin Gravida nibh.</p>
                            <p class="tiempo">Se realizara en: 60 mins</p>
                            <p class="line"></p>
                            <div class="dificultad left">Dificultad: <span class="ribbon d1"></span></div>
                            <div class="btn">
                                <a href="">Instrucciones</a>
                            </div>
                        </div>
                        <div class="inspiracion">
                            <p class="categoria">Categoria</p>
                            <figure class="effect-img">
                                {!! Html::image( 'assets/images/inspiracion/img3-prueba-inspiracion.jpg', '' ) !!}
                            </figure>
                            <p class="nombre">Lorem Ipsum proin Gravida nibh.</p>
                            <p class="tiempo">Se realizara en: 60 mins</p>
                            <p class="line"></p>
                            <div class="dificultad left">Dificultad: <span class="ribbon d1"></span></div>
                            <div class="btn">
                                <a href="">Instrucciones</a>
                            </div>
                        </div>
                    </div>
                    <a id="" href="#" class="btn-mas">Ver más</a>
                </div>
            </div>
            <div class="productos">
                <div class="container">
                    <div class="left">
                        <div class="producto">
                            <div class="left">
                                {!! Html::image( 'assets/images/productos/producto-cinta-cristal.png', 'Cinta Cristal 100% transparente' ) !!}
                            </div>
                            <div class="right">
                                <h3>Cinta Cristal<br><span>100% Transparente</span></h3>
                                <p>Acabado brillante sobre el papel de regalo.</p>
                                <a href="">Ver Producto</a>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="producto">
                            <div class="left">
                                {!! Html::image( 'assets/images/productos/producto-cinta-magica.png', 'Cinta Mágica 100% mate' ) !!}
                            </div>
                            <div class="right">
                                <h3>Cinta Mágica<br><span>100% Mate</span></h3>
                                <p>Acabado brillante sobre el papel de regalo.</p>
                                <a href="">Ver Producto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comunidad">
                <div class="container">
                    <p>Nos encantaría compartir ideas, tips y contenido exclusivo contigo.<br>Forma parte de esta linda comunidad.</p>
                    <div>
                        <input type="text" placeholder="Ingresa tu correo electrónico">
                        {!! Html::link( '#', '' ) !!}
                    </div>
                </div>
            </div>
        </section>
@endsection