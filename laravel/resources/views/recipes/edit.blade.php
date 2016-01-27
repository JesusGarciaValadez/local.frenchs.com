@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Editar receta</div>
        <div class="panel-body">
          {!! Form::open( [ 'route' => 'updatedRecipe', 'method' => 'PUT', 'class' => 'form-horizontal', 'file' => true ] ) !!}

            <div class="form-group{{ $errors->has( 'name' ) ? ' has-error' : '' }}">
              {!! Form::label( 'name', 'Nombre de la receta', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::text( 'name', $recipe[ 'name' ], [ 'class' => 'form-control' ] ) !!}

                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has( 'email' ) ? ' has-error' : '' }}">
              {!! Form::label( 'photo', 'Fotografía', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::file( 'photo', [ 'value' => $domain . 'assets/images/recetas/' . old( 'photo' ), ] ) !!}

                @if ( $errors->has( 'photo' ) )
                  <span class="help-block">
                    <strong>{{ $errors->first( 'photo' ) }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="center-block">
                {!! Html::image( $domain . '/assets/images/recetas/' . $recipe[ 'photo' ], $recipe[ 'name' ], [ 'class' => 'img-responsive center-block' ] ) !!}
              </div>
            </div>

            <div class="form-group{{ $errors->has( 'categorie' ) ? ' has-error' : '' }}">
              {!! Form::label( 'categorie', 'Categoria', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::select( 'categorie', $categories, $recipe[ 'categorie' ], [ 'class' => 'form-control' ] ) !!}

                @if ( $errors->has( 'categorie' ) )
                  <span class="help-block">
                    <strong>{{ $errors->first( 'categorie' ) }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has( 'portions' ) ? ' has-error' : '' }}">
              {!! Form::label( 'portions', 'Porciones', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::select( 'portions', array(
                    '1' => '1 porciones',
                    '2' => '2 porciones',
                    '3' => '3 porciones',
                    '4' => '4 porciones',
                    '5' => '5 porciones',
                    '6' => '6 porciones'
                ), $recipe[ 'portions' ], [ 'class' => 'form-control' ] ) !!}

                @if ( $errors->has( 'portions' ) )
                  <span class="help-block">
                    <strong>{{ $errors->first( 'portions' ) }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has( 'preparation_time' ) ? ' has-error' : '' }}">
              {!! Form::label( 'preparation_time', 'Tiempo de preparación', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::select( 'preparation_time', array(
                    '5 min.'    => '5 mins.',
                    '10 mins.'  => '10 mins.',
                    '15 mins.'  => '15 mins.',
                    '20 mins.'  => '20 mins.',
                    '25 mins.'  => '25 mins.',
                    '30 mins.'  => '30 mins.'
                ), $recipe[ 'preparation_time' ], [ 'class' => 'form-control' ] ) !!}

                @if ( $errors->has( 'preparation_time' ) )
                  <span class="help-block">
                    <strong>{{ $errors->first( 'preparation_time' ) }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has( 'cooking_time' ) ? ' has-error' : '' }}">
              {!! Form::label( 'cooking_time', 'Tiempo de cocción', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::select( 'cooking_time', array(
                    '5 min.'    => '5 mins.',
                    '10 mins.'  => '10 mins.',
                    '15 mins.'  => '15 mins.',
                    '20 mins.'  => '20 mins.',
                    '25 mins.'  => '25 mins.',
                    '30 mins.'  => '30 mins.'
                ), $recipe[ 'cooking_time' ], [ 'class' => 'form-control' ] ) !!}

                @if ( $errors->has( 'cooking_time' ) )
                  <span class="help-block">
                    <strong>{{ $errors->first( 'cooking_time' ) }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has( 'ingredients_desktop' ) ? ' has-error' : '' }}">
              {!! Form::label( 'ingredients_desktop', 'Ingredientes para versión de escritorio', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::textarea( 'ingredients_desktop', $recipe[ 'ingredients_desktop' ], [ 'class' => 'form-control' ] ) !!}

                @if ($errors->has('ingredients_desktop'))
                  <span class="help-block">
                    <strong>{{ $errors->first('ingredients_desktop') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has( 'ingredients_mobile' ) ? ' has-error' : '' }}">
              {!! Form::label( 'ingredients_mobile', 'Ingredientes para versión móvil', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::textarea( 'ingredients_mobile', $recipe[ 'ingredients_mobile' ], [ 'class' => 'form-control' ] ) !!}

                @if ($errors->has('ingredients_mobile'))
                  <span class="help-block">
                    <strong>{{ $errors->first('ingredients_mobile') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has( 'preparation' ) ? ' has-error' : '' }}">
              {!! Form::label( 'preparation', 'Preparación', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::textarea( 'preparation', $recipe[ 'preparation' ], [ 'class' => 'form-control' ] ) !!}

                @if ($errors->has('preparation'))
                  <span class="help-block">
                    <strong>{{ $errors->first('preparation') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has( 'ranking' ) ? ' has-error' : '' }}">
              {!! Form::label( 'ranking', 'Ranking', [ 'class' => 'col-md-4 control-label' ] ) !!}

              <div class="col-md-6">
                {!! Form::select( 'ranking', array(
                    '1'  => '1 Estrella',
                    '2'  => '2 Estrellas',
                    '3'  => '3 Estrellas',
                    '4'  => '4 Estrellas',
                    '5'  => '5 Estrellas'
                ), $recipe[ 'ranking' ], [ 'class' => 'form-control' ] ) !!}

                @if ( $errors->has( 'ranking' ) )
                  <span class="help-block">
                    <strong>{{ $errors->first( 'ranking' ) }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-user"></i>Actualizar
                </button>
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
