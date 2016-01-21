@extends( 'layouts.layout' )

@section( 'title', "Recetas" )

@section( 'content' )
        <div class="cover-interior-c"></div>

        <section class="recetas">
            <div class="title">
                <div class="container">
                    <h2>Descúbre la variedad de recetas<br>que <span>French’s</span> tiene para ti.</h2>
                </div>
            </div>
            <div class="filtro">
                <div class="container">
                    <div class="buscar">
                        <input type="text" placeholder="(Ejemplo: Pollo)">
                        {!! Html::link( '#', '' ) !!}
                    </div>
                    <div class="content-filtro">
                        <label>
                            <div class="first-icon"><i class="fa fa-tag"></i></div>
                            <select name="recipe-categories">
                                <option value="" selected>Categoría</option>
                                @foreach ( $categories as $categorie )
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label>
                            <div class="second-icon"><i class="fa fa-clock-o"></i></div>
                            <select id="">
                                <option value="vacio" selected>Tiempo</option>
                                <option value="">5 mins.</option>
                                <option value="">10 mins.</option>
                                <option value="">15 mins.</option>
                                <option value="">20 mins.</option>
                                <option value="">25 mins.</option>
                                <option value="">30 mins.</option>
                            </select>
                        </label>
                        <label>
                            <div class="second-icon"><i class="fa fa-spoon"></i></div>
                            <select id="">
                                <option value="vacio" selected>Porciones</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                            </select>
                        </label>
                        <label>
                            <div class="second-icon"><i class="fa fa-star"></i></div>
                            <select id="">
                                <option value="vacio" selected>Ranking</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid">
            <div class="container">
                <div class="content-grid">
                    <a href="" class="receta">
                        <p class="categoria b1">Snacks</p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/receta.jpg', 'Tiras de pollo con mostaza' ) !!}
                        </div>
                        <p class="nombre">Tiras de pollo con mostaza</p>
                        <p class="porciones">12 porciones</p>
                        <p class="tiempo">Timepo de preparación: 15 min.</p>
                        <div class="ranking">
                            <span class="stars s4"></span>
                        </div>
                    </a>
                    <a href="" class="receta">
                        <p class="categoria b1">Snacks</p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/receta.jpg', 'Tiras de pollo con mostaza' ) !!}
                        </div>
                        <p class="nombre">Tiras de pollo con mostaza</p>
                        <p class="porciones">12 porciones</p>
                        <p class="tiempo">Timepo de preparación: 15 min.</p>
                        <div class="ranking">
                            <span class="stars s4"></span>
                        </div>
                    </a>
                    <a href="" class="receta">
                        <p class="categoria b1">Snacks</p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/receta.jpg', 'Tiras de pollo con mostaza' ) !!}
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
                <a id="" href="#" class="btn-mas">Cargar más recetas</a>
            </div>
        </section>

        <section class="subir-receta">
            <div class="container">
                <div class="icono-chef"></div>
                <h2>Sube tu receta</h2>
                <p>Forma parte de nuestras delicias</p>
                <a class="boton">Subir Receta</a>
            </div>
        </section>

        <div class="modal">
            <div class="container">
                <div class="content-modal">
                    <div class="img-back1"></div>
                    <div class="img-back2"></div>
                    <div class="form-receta">
                        <span class="fa fa-times fa-2x"></span>
                        <div class="icono-chef-big"></div>
                        <h3>Sube tu receta</h3>
                        {!! Form::open( [ 'route' => 'uploadRecipe', 'method' => 'POST', 'files' => true ] ) !!}
                            {!! Form::text( 'user_name', null, [ 'placeholder' => 'NOMBRE' ] ) !!}
                            {!! Form::email( 'user_email', null, [ 'placeholder' => 'CORREO ELECTRÓNICO' ] ) !!}
                            {!! Form::text( 'recipe_name', null, [ 'placeholder' => 'NOMBRE DE LA RECETA' ] ) !!}
                            {!! Form::file( 'recipe_photo', [ 'accept' => 'image/png, image/jpeg' ] ) !!}
                            <p>Te recomendamos tu foto en formato: jpg / 300x300px</p>
                            <label>
                                <div class="first-icon"><i class="fa fa-tag"></i></div>
                                <select name="recipe-categories">
                                    <option value="" selected>Categoría</option>
                                    @foreach ( $categories as $categorie )
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-spoon"></i></div>
                                {!! Form::select( 'recipe_portions', array(
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5',
                                    '6' => '6'
                                ), null, [ 'placeholder' => 'Porciones' ] ) !!}
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-clock-o"></i></div>
                                {!! Form::select( 'recipe_preparation_time', array(
                                    '5 minutos'     => '5 mins.',
                                    '10 minutos'    => '10 mins.',
                                    '15 minutos'    => '15 mins.',
                                    '20 minutos'    => '20 mins.',
                                    '25 minutos'    => '25 mins.',
                                    '30 minutos'    => '30 mins.'
                                ), null, [ 'placeholder' => 'Preparación' ] ) !!}
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-clock-o"></i></div>
                                {!! Form::select( 'recipe_cooking_time', array(
                                    '5 minutos'     => '5 mins.',
                                    '10 minutos'    => '10 mins.',
                                    '15 minutos'    => '15 mins.',
                                    '20 minutos'    => '20 mins.',
                                    '25 minutos'    => '25 mins.',
                                    '30 minutos'    => '30 mins.'
                                ), null, [ 'placeholder' => 'Cocción' ] ) !!}
                            </label>
                            {!! Form::textarea( 'recipe_ingredients', null, [ 'class' => 'ingredientes', 'placeholder' => 'INGREDIENTES' ] ) !!}
                            {!! Form::textarea( 'recipe_preparation', null, [ 'class' => 'preparacion', 'placeholder' => 'PREPARACIÓN' ] ) !!}
                            {!! Form::submit( 'Subir', [ 'class' => 'boton', 'id' => 'subir-receta' ] ) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="gracias">
                        <div class="container">
                            <span class="fa fa-times fa-2x"></span>
                            <div class="icono-gracias"></div>
                            <h2>Gracias por subir tu receta</h2>
                            <p>y ser parte de French´s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection