@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Recetas</div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-left">Receta</th>
                  <th class="text-left">Categoría</th>
                  <th class="text-left">Acciones</th>
                </tr>
              </thead>
              <tfood></tfood>
              <tbody>
                @foreach ( $recipes as $recipe )
                <tr>
                  <td><p><small><span>{!! $recipe->name !!}</small></p></td>
                  <td><p><small>{{ $recipe->category->name }}</small></p></td>
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
