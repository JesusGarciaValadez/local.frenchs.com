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
                    {!! Form::open( [ 'route' => 'searchRecipe', 'method' => 'GET' ] ) !!}
                        <div class="buscar">
                            {!! Form::text( 'search_term', null, [ 'placeholder' => '(Ejemplo: Pollo)' ] ) !!}
                            {!! Html::link( '#', '' ) !!}
                        </div>
                        <div class="content-filtro">
                            <label>
                                <div class="first-icon"><i class="fa fa-tag"></i></div>
                                <select name="categorie">
                                    <option value="" selected>Categoría</option>
                                    @foreach ( $categories as $categorie )
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-clock-o"></i></div>
                                {!! Form::select( 'preparation_time', array(
                                    ''  => 'Tiempo',
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5',
                                    '6' => '6'
                                ), '', [ 'placeholder' => 'Tiempo' ] ) !!}
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-spoon"></i></div>
                                {!! Form::select( 'portions', array(
                                    ''  => 'Porciones',
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5',
                                    '6' => '6'
                                ), '', [ 'placeholder' => 'Porciones' ] ) !!}
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-star"></i></div>
                                {!! Form::select( 'ranking', array(
                                    ''  => 'Porciones',
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5',
                                    '6' => '6'
                                ), '', [ 'placeholder' => 'Porciones' ] ) !!}
                            </label>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </section>

        <section class="grid">
            <div class="container">
                <div class="content-grid">
                    @foreach ( $recipes as $recipe )
                    <a href="{{ action( 'RecipeController@index', [ 'id' => $recipe->id ] ) }}" class="receta">
                        <p class="categoria b1">
                            @foreach ( $categories as $categorie )
                                @if ( $categorie->id == $recipe->categorie )
                            {{$categorie->categorie_name}}
                                @endif
                            @endforeach
                        </p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/' . $recipe->photo, $recipe->name ) !!}
                        </div>
                        <p class="nombre">{{$recipe->name}}</p>
                        <p class="porciones">{{$recipe->portions}} porciones</p>
                        <p class="tiempo">Tiempo de preparación: {{$recipe->preparation_time}}</p>
                        <div class="ranking">
                            <span class="stars s{{$recipe->ranking}}"></span>
                        </div>
                    </a>
                    @endforeach
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
                            {!! Form::text( 'name', null, [ 'placeholder' => 'NOMBRE DE LA RECETA' ] ) !!}
                            {!! Form::file( 'photo', [ 'accept' => 'image/png, image/jpeg' ] ) !!}
                            <p>Te recomendamos tu foto en formato: jpg / 300x300px</p>
                            <label>
                                <div class="first-icon"><i class="fa fa-tag"></i></div>
                                <select name="categorie">
                                    <option value="" selected>Categoría</option>
                                    @foreach ( $categories as $categorie )
                                    <option value="{{ $categorie->id }}">{{ $categorie->categorie_name }}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-spoon"></i></div>
                                {!! Form::select( 'portions', array(
                                    ''  => 'Porciones',
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5',
                                    '6' => '6'
                                ), '', [] ) !!}
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-clock-o"></i></div>
                                {!! Form::select( 'preparation_time', array(
                                    ''          => 'Preparación',
                                    '5 min.'    => '5 mins.',
                                    '10 mins.'  => '10 mins.',
                                    '15 mins.'  => '15 mins.',
                                    '20 mins.'  => '20 mins.',
                                    '25 mins.'  => '25 mins.',
                                    '30 mins.'  => '30 mins.'
                                ), '', [] ) !!}
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-clock-o"></i></div>
                                {!! Form::select( 'cooking_time', array(
                                    ''          => 'Cocción',
                                    '5 min.'    => '5 mins.',
                                    '10 mins.'  => '10 mins.',
                                    '15 mins.'  => '15 mins.',
                                    '20 mins.'  => '20 mins.',
                                    '25 mins.'  => '25 mins.',
                                    '30 mins.'  => '30 mins.'
                                ), '', [] ) !!}
                            </label>
                            {!! Form::textarea( 'ingredients', null, [ 'class' => 'ingredientes', 'placeholder' => 'INGREDIENTES' ] ) !!}
                            {!! Form::textarea( 'preparation', null, [ 'class' => 'preparacion', 'placeholder' => 'PREPARACIÓN' ] ) !!}
                        {!! Form::close() !!}
                        {!! Html::link( '#', 'Subir', [ 'class' => 'boton', 'id' => 'subir-receta' ] ) !!}
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