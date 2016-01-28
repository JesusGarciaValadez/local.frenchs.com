@extends( 'layouts.layout' )

@section( 'title', "Home" )

@section( 'content' )
        <section class="home">
          <div class="cover">
            <div class="slider">
              <div class="container">
                <ul class="slider-cover">
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s1-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Mostaza <span>Clásica SQ</span></h2><a href="{{ route( 'clasica-sq' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s1-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s1-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s1-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s2-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Mostaza <span>Dijon</span></h2><a href="{{ route( 'dijon' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s2-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s2-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s2-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s3-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Mostaza <span>Deli</span></h2><a href="{{ route( 'deli' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s3-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s3-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s3-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s4-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Mostaza <span>Honey</span></h2><a href="{{ route( 'honey' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s4-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s4-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s4-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s5-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Salsa <span>Inglesa</span></h2><a href="{{ route( 'inglesa' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s5-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s5-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s5-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s6-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Salsa <span>BBQ chipotle</span></h2><a href="{{ route( 'bbq-chipotle' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s6-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s6-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s6-elemento3.png', '' ) !!}</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="descubre">
            <div class="img-back1"></div>
            <div class="img-back2"></div>
            <div class="container">
              <div class="icono-cubiertos"></div>
              <h2>Descubre nuevas recetas</h2>
              <p>¿Qué te gustaría cocinar hoy?</p>
            </div>
            <div class="recetas-home">
              <div id="tinderslide">
                <ul>
                  @foreach( $recipes as $recipe )
                    <li class="pane1">
                      <div class="img">{!! Html::image( 'assets/images/recetas/' . $recipe->photo, $recipe->name ) !!}</div>
                      <div class="nombre">{{ $recipe->name }}</div>
                      <div class="like"></div>
                      <div class="dislike"></div>
                    </li>
                  @endforeach
                </ul>
                <p><a href="{{ route( 'recipes' ) }}" title="Ver más recetas." target="_self">Ver más recetas.</a></p>
              </div>

              <div class="contador">
                <p>{{ count( $recipes ) }}/{{ count( $recipes ) }}</p>
              </div>

              <div class="actions">
                <a href="#" class="dislike"><i></i></a>
                <a href="#" class="like"><i></i></a>
              </div>

              <div id="status"></div>
            </div>
          </div>

          <div class="suscribete">
            <div class="container">
              <h3>Subscríbete ahora</h3>
              <div>
                <input type="text" placeholder="Ingresa tu correo electrónico">
                <a href="#"></a>
              </div>
            </div>
          </div>
        </section>
@endsection