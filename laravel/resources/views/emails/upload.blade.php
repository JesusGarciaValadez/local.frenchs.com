{!! Form::open( [ 'route' => [ 'updateRecipe', $recipe[ 'id' ] ], 'method' => 'GET' ] ) !!}
  <p><strong>Nombre de la persona que envía la receta:</strong> {{ $recipe[ 'user_name' ] }}</p>
  <p><strong>Correo de la persona que envía la receta:</strong> {{ $recipe[ 'user_email' ] }}</p>
  <p><strong>Nombre de la receta:</strong> {{ $recipe[ 'name' ] }}</p>
  <p><strong>Foto:</strong> {!! Html::image( 'assets/images/recetas/' . $recipe[ 'photo' ], $recipe[ 'name' ] ) !!}</p>
  <p><strong>Categoría:</strong> {{ $recipe[ 'categorie_id' ] }}</p>
  <p><strong>Porciones:</strong> {{ $recipe[ 'portions' ] }}</p>
  <p><strong>Tiempo de preparación:</strong> {{ $recipe[ 'preparation_time' ] }}</p>
  <p><strong>Tiempo de cocción:</strong> {{ $recipe[ 'cooking_time' ] }}</p>
  <p><strong>Ingredientes:</strong> {{ $recipe[ 'ingredients_desktop' ] }}</p>
  <p><strong>Preparación:</strong> {{ $recipe[ 'preparation' ] }}</p>
  {!! Form::submit( 'EDITAR RECETA' ) !!}
{!! Form::close() !!}