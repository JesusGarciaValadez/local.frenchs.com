@extends( 'layouts.layout' )

@section( 'title', "Recetas" )

@section( 'content' )
        <div class="cover-interior-c"></div>

        <section class="recetas">
            <div class="title">
                <div class="container">
                    <h2>Descubre la variedad de recetas<br>que <span>French’s</span> tiene para ti.</h2>
                </div>
            </div>
            <div class="filtro">
                <div class="container">
                    {!! Form::open( [ 'route' => 'searchRecipe', 'method' => 'GET','id'=>'enviar_receta' ] ) !!}
                        <div class="buscar">
                            {!! Form::text( 'name', null, [ 'placeholder' => '(Ejemplo: Pollo)' ] ) !!}
                            {!! Html::link( '#', '' , [ 'id' => 'btn_search' ] ) !!}
                            {!! Form::submit( 'Buscar', [ 'id' => 'btn_seach', 'name' => 'buscar' ] ) !!}
                        </div>
                        <div class="content-filtro">
                            <label>
                                <div class="first-icon"><i class="fa fa-tag"></i></div>
                                <select name="categorie_id">
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
                                    '5 min.'    => '5 mins.',
                                    '10 mins.'  => '10 mins.',
                                    '15 mins.'  => '15 mins.',
                                    '20 mins.'  => '20 mins.',
                                    '25 mins.'  => '25 mins.',
                                    '30 mins.'  => '30 mins.'
                                ), '' ) !!}
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-spoon"></i></div>
                                {!! Form::select( 'portions', array(
                                    ''  => 'Porciones',
                                    '1' => '1 porciones',
                                    '2' => '2 porciones',
                                    '3' => '3 porciones',
                                    '4' => '4 porciones',
                                    '5' => '5 porciones',
                                    '6' => '6 porciones'
                                ), '' ) !!}
                            </label>
                            <label>
                                <div class="second-icon"><i class="fa fa-star"></i></div>
                                {!! Form::select( 'ranking', array(
                                    ''  => 'Ranking',
                                    '1' => '1 Estrellas',
                                    '2' => '2 Estrellas',
                                    '3' => '3 Estrellas',
                                    '4' => '4 Estrellas',
                                    '5' => '5 Estrellas'
                                ), '' ) !!}
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
                      @include( 'partials.recipe', [
                                'recipe' => $recipe,
                                'class' => 'b1'
                              ])
                    @endforeach
                </div>
                @if ( $recipes->hasMorePages() )
                <a id="" href="#" class="btn-mas">Cargar más recetas</a>
                @endif
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
                            {!! Form::file( 'photo_big', [ 'accept' => 'image/png, image/jpeg' ] ) !!}
                            <p>Te recomendamos tu foto en formato: jpg / 300x300px</p>
                            <label>
                                <div class="first-icon"><i class="fa fa-tag"></i></div>
                                <select name="categorie_id">
                                    <option value="" selected>Categoría</option>
                                    @foreach ( $categories as $categorie )
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
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
                            {!! Form::submit( 'ENVIAR', [ 'class' => 'boton', 'id' => 'subit-receta', 'name' => 'Enviar' ] ) !!}
                        {!! Form::close() !!}
                        {!! Html::link( '#', 'Subir', [ 'class' => 'boton', 'id' => 'subir-receta' ] ) !!}
                    </div>
                    <div class="gracias">
                        <div class="container">
                            <span class="fa fa-times fa-2x"></span>
                            <div class="icono-gracias"></div>
                            <h2>Gracias por subir tu receta</h2>
                            <p>y ser parte de French's</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        $('#btn_search').click(function (){
            enviar();
        });

        $( "#enviar_receta" ).submit(function( event ) {
          event.preventDefault();
          enviar();
        });

        function enviar(){
            var nombre = $( "input[name='name']" ).val();
            var categoria = $( "select[name='categorie_id']" ).val();
            var tiempo = $( "select[name='preparation_time']" ).val();
            var porciones = $( "select[name='portions']" ).val();
            var rank = $( "select[name='ranking']" ).val();
            var codigoHtml;
            //Obtencion de resultados
                $.get( "/buscar-recetas", {name :nombre, categorie_id:categoria,preparation_time:tiempo,portions:porciones,ranking:rank} )

                    //Si ocurre un error
                      .fail(function() {
                        alert( "error" );
                      })

                    //Si es correcto
                      .done(function( data ) {
                            $(".receta").hide();
                            $.each(data, function(i, item) {

                                switch( item.categorie_id ) {
                                    @foreach ( $categories as $categorie )
                                    case {{ $categorie->id }}:
                                        item.name = '{{ $categorie->name }}';
                                        break;
                                    @endforeach
                                }
                                codigoHTML = '<a href="/receta/'+item.id+'" class="receta"><p class="categoria b1">' + item.name + '<div class="image"><img src="/assets/images/recetas/'+item.photo_small+'" alt="'+item.name+'"></div><p class="nombre">'+item.name+'</p><p class="porciones">'+item.portions+' porciones</p><p class="tiempo">Tiempo de preparación: '+item.preparation_time+'</p><div class="ranking"><span class="stars s'+item.ranking+'"></span></div></a>';

                                $(".content-grid").append(codigoHTML);

                            });


                      });
        };
    </script>
@endsection