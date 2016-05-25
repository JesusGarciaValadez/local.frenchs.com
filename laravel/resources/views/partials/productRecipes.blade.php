        <section class="grid">
          <div class="container">
            <h2>Recetas</h2>
            <p>que podrías preparar con {{ $product }}</p>
            <div class="content-grid">
              @foreach ( $recipes as $recipe )
                @include( 'partials.recipe', [
                          'class'  => 'b2',
                          'recipe' => $recipe
                        ] )
              @endforeach
            </div>
            <a id="" href="#" class="btn-mas">Ver más recetas</a>
          </div>
        </section>