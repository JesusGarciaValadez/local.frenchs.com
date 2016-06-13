@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @if ( Session::has( 'message' ) )
      <div class="alert alert-{{ Session::get( 'type' ) }}">
        {{ Session::get( 'message' ) }}
      </div>
      @endif
      @foreach( $errors->all( ) as $error )
      <div class="alert alert-success">
        {{ $error }}
      </div>
      @endforeach
      <div class="panel panel-default">
        <div class="panel-heading">Recetas</div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-left">Receta</th>
                  <th class="text-left">Categoría</th>
                  <th class="text-left">Activa</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tfood></tfood>
              <tbody>
                @foreach ( $recipes as $recipe )
                <tr>
                  <td><p><small><span>{!! $recipe->name !!}</small></p></td>
                  <td><p><small>{{ $recipe->category->name }}</small></p></td>
                  <td class="text-center"><p><small>{{ $recipe->active }}</small></p></td>
                  <td>
                    <div class="form-group">
                      <a href="{{ action( 'RecipeController@update', [ 'id' => $recipe->id ] ) }}" class="btn btn-primary col-md-5"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                      <div class="col-md-6 col-md-offset-1">
                        {!! Form::open( [ 'url' => 'manager/' . $recipe->id, 'method' => 'DELETE', 'class' => 'form-horizontal', 'files' => false ] ) !!}
                          <button type="submit" class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i> Eliminar
                          </button>
                        {!! Form::close() !!}
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {!! $recipes->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
