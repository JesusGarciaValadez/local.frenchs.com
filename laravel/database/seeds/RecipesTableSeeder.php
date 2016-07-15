<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class RecipesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // 'Arroz a la mostaza picante con chistorra y nuez'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Arroz <span>a la mostaza picante con chistorra y nuez</span>',
      'photo_big'           => 'Arroz-G.png',
      'photo_small'         => 'Arroz-C.png',
      'category_id'         => 2,
      'portions'            => 4,
      'preparation_time'    => '30 mins.',
      'cooking_time'        => '30 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>1 1/2 tazas de arroz blanco.</li>
                                  <li>3 cucharadas de aceite.</li>
                                  <li>2 cucharadas de cebolla blanca picada.</li>
                                  <li>1/2 diente de ajo.</li>
                                  <li>3 tazas de agua.</li>
                                  <li>3 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li>Sal al gusto.</li>
                                  <li>1 taza de chistorra frita y en pedazos de 2 cm.</li>
                                  <li>6 cucharadas de nuez picada.</li>
                                  <li>4 cucharadas de perejil picado.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">1 1/2</span> tazas de arroz blanco.</li>
                                  <li><span class="medida">3</span> cucharadas de aceite.</li>
                                  <li><span class="medida">2</span> cucharadas de cebolla blanca picada.</li>
                                  <li><span class="medida">1</span>/2 diente de ajo.</li>
                                  <li><span class="medida">3</span> tazas de agua.</li>
                                  <li><span class="medida">3</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li>Sal al gusto.</li>
                                  <li><span class="medida">1</span> taza de chistorra frita y en pedazos de 2 cm.</li>
                                  <li><span class="medida">6</span> cucharadas de nuez picada.</li>
                                  <li><span class="medida">4</span> cucharadas de perejil picado.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Fr&iacute;e</span> el arroz en el aceite.</p>
                                <p><span class="paso">Lic&uacute;a</span> la cebolla, el ajo, el agua y la <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></p>
                                <p><span class="paso">Vierte</span> la preparaci&oacute;n anterior en el arroz, agrega sal al gusto y ll&eacute;valo a ebullici&oacute;n. Cuando hierva, baja el fuego al m&iacute;nimo, pon la tapa y espera a que el agua se evapore por completo. Apaga la hornilla y, as&iacute; tapado, d&eacute;jalo reposar 10 minutos.</p>
                                <p><span class="paso">Incorpora</span> la chistorra, la nuez y el perejil.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "arroz-a-la-mostaza-picante-con-chistorra-y-nuez",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Camarones capeados con salsa de mostaza picante y mandarina'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Camarones capeados <span>con salsa de mostaza picante y mandarina</span>',
      'photo_big'           => 'Camaron-G.png',
      'photo_small'         => 'Camaron-C.png',
      'category_id'         => 2,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>5 cucharadas de harina.</li>
                                  <li>3 cucharadas de fécula de maíz.</li>
                                  <li>1/4 cucharadita de cúrcuma en polvo.</li>
                                  <li>1/2 cucharadita de polvo para hornear.</li>
                                  <li>1/2 cucharadita de sal.</li>
                                  <li>1 pieza de huevo.</li>
                                  <li>1/4 de taza de agua.</li>
                                  <li>400 g de camarón grande y pelado.</li>
                                  <li>1 taza de aceite.</li>
                                  <li>5 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li>10 cucharadas de jugo de mandarina.</li>
                                  <li>1/2 cucharadita de sal.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">5</span> cucharadas de harina.</li>
                                  <li><span class="medida">3</span> cucharadas de fécula de maíz.</li>
                                  <li><span class="medida">1/4</span> cucharadita de cúrcuma en polvo.</li>
                                  <li><span class="medida">1/2</span> cucharadita de polvo para hornear.</li>
                                  <li><span class="medida">1/2</span> cucharadita de sal.</li>
                                  <li><span class="medida">1</span> pieza de huevo.</li>
                                  <li><span class="medida">1/4</span> de taza de agua.</li>
                                  <li><span class="medida">400</span> g de camarón grande y pelado.</li>
                                  <li><span class="medida">1</span> taza de aceite.</li>
                                  <li><span class="medida">5</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li><span class="medida">10</span> cucharadas de jugo de mandarina.</li>
                                  <li><span class="medida">1/2</span> cucharadita de sal.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Revuelve</span> la harina, la f&eacute;cula, la c&uacute;rcuma, el polvo para hornear, la sal, el huevo y el agua hasta que obtengas una masa sin grumos. D&eacute;jala reposar 10 minutos.</p>
                                <p><span class="paso">Pasa</span> los camarones por la mezcla anterior de manera que queden cubiertos por completo. Fr&iecute; en el aceite caliente hasta que adquieran un color dorado. S&aacute;calos y ponlos a escurrir sobre papel absorbente.</p>
                                <p><span class="paso">Agrega</span> a la <span class="marca">French&rsquo;s&reg; Mostaza Picante</span> el jugo de mandarina y la sal.</p>
                                <p><span class="paso">Sirve</span> los camarones en un plato y b&aacute;&ntilde;alos con la salsa.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "camarones-capeados-con-salsa-de-mostaza-picante-y-mandarina",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Choripan con mostaza picante y cebollas caramelizadas'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Choripan <span>con mostaza picante y cebollas caramelizadas</span>',
      'photo_big'           => 'Choripan-G.png',
      'photo_small'         => 'Choripan-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>3 cucharadas de mantequilla sin sal.</li>
                                  <li>1 pieza de cebolla blanca fileteada.</li>
                                  <li>1 cucharada de az&uacute;car.</li>
                                  <li>1/2 cucharadita de sal.</li>
                                  <li>4 piezas de chorizo argentino.</li>
                                  <li>1 pieza de pan baguette grande.</li>
                                  <li>1/2 taza de chimichurri.</li>
                                  <li><span class="marca">French&rsquo;s&reg; Mostaza Picante</span> al gusto.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">3</span> cucharadas de mantequilla sin sal.</li>
                                  <li><span class="medida">1</span> pieza de cebolla blanca fileteada.</li>
                                  <li><span class="medida">1</span> cucharada de az&uacute;car.</li>
                                  <li><span class="medida">1/2</span> cucharadita de sal.</li>
                                  <li><span class="medida">4</span> piezas de chorizo argentino.</li>
                                  <li><span class="medida">1</span> pieza de pan baguette grande.</li>
                                  <li><span class="medida">1/2</span> taza de chimichurri.</li>
                                  <li><span class="marca">French&rsquo;s&reg; Mostaza Picante</span> al gusto.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Derrite</span> la mantequilla en una sart&eacute;n, a fuego lento. Incorpora la cebolla y acitrona. Agrega el az&uacute;car y la sal. Mant&eacute;n la mezcla en la llama, sin dejar de revolver, hasta que la cebolla adquiera un color caramelo. Déjala enfriar.</p>
                                <p><span class="paso">Asa</span> el chorizo a la parrilla hasta que est&eacute; completamente cocido.</p>
                                <p><span class="paso">Corta</span> la baguete en 4 porciones y &aacute;brelas horizontalmente por la mitad. Unta el chimichurri en cada uno de los pedazos.</p>
                                <p><span class="paso">Coloca</span> un trozo de chorizo en cada porci&oacute;n de pan y a&ntilde;&aacute;deles encima la <span class="marca">French&rsquo;s&reg; Mostaza Picante</span> al gusto.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "choripan-con-mostaza-picante-y-cebollas-caramelizadas",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Pechuga de pollo con salsa cremosa de mostaza picante y hierbas'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Pechuga de pollo <span>con salsa cremosa de mostaza picante y hierbas</span>',
      'photo_big'           => 'Pollo-Mostaza-G.png',
      'photo_small'         => 'Pollo-Mostaza-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>2 cucharadas de mantequilla.</li>
                                  <li>2 cucharadas de cebolla blanca picada.</li>
                                  <li>1/2 diente de ajo picado.</li>
                                  <li>1 cucharada de harina.</li>
                                  <li>1 taza de leche.</li>
                                  <li>4 cucharadas de crema.</li>
                                  <li>3 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li>1 cucharada de perejil picado.</li>
                                  <li>1 cucharada de ceboll&iacute;n picado.</li>
                                  <li>1/2 cucharada de tomillo picado.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li>4 piezas de pechuga de pollo asada.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">2</span> cucharadas de mantequilla.</li>
                                  <li><span class="medida">2</span> cucharadas de cebolla blanca picada.</li>
                                  <li><span class="medida">1/2</span> diente de ajo picado.</li>
                                  <li><span class="medida">1</span> cucharada de harina.</li>
                                  <li><span class="medida">1</span> taza de leche.</li>
                                  <li><span class="medida">4</span> cucharadas de crema.</li>
                                  <li><span class="medida">3</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li><span class="medida">1</span> cucharada de perejil picado.</li>
                                  <li><span class="medida">1</span> cucharada de ceboll&iacute;n picado.</li>
                                  <li><span class="medida">1/2</span> cucharada de tomillo picado.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li><span class="medida">4</span> piezas de pechuga de pollo asada.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Derrite</span> la mantequilla y acitrona la cebolla y el ajo. Incorpora la harina y cocina durante 2 minutos.</p>
                                <p><span class="paso">Agrega</span> la leche y bate hasta obtener una mezcla sin grumos. Déjala hervir.</p>
                                <p><span class="paso">A&ntilde;ade</span> la crema, la <span class="marca">French&rsquo;s&reg; Mostaza Picante</span>, el perejil, el ceboll&iacute;n, el tomillo, la sal y la pimienta.</p>
                                <p><span class="paso">Sirve</span> las pechugas de pollo con la salsa.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "pechuga-de-pollo-con-salsa-cremosa-de-mostaza-picante-y-hierbas",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Rollos de pescado con salsa de perejil y mostaza picante'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Rollos de pescado <span>con salsa de perejil y mostaza picante</span>',
      'photo_big'           => 'Pescado-G.png',
      'photo_small'         => 'Pescado-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>1/4 de taza de pimiento morr&oacute;n verde picado.</li>
                                  <li>1/4 de taza de pimiento morr&oacute;n rojo picado.</li>
                                  <li>1/4 de taza de cebolla blanca picada.</li>
                                  <li>1/4 de taza de zanahoria picada.</li>
                                  <li>4 cucharadas de aceite de oliva.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li>4 piezas (100 g c/u) de filete de pescado blanco.</li>
                                  <li>2 cucharadas de cebolla blanca picada.</li>
                                  <li>2 cucharadas de mantequilla.</li>
                                  <li>2 cucharadas de vinagre blanco <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li>3/4 taza de agua.</li>
                                  <li>2 cucharadas <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li>2 cucharadas perejil picado.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">1/4</span> de taza de pimiento morr&oacute;n verde picado.</li>
                                  <li><span class="medida">1/4</span> de taza de pimiento morr&oacute;n rojo picado.</li>
                                  <li><span class="medida">1/4</span> de taza de cebolla blanca picada.</li>
                                  <li><span class="medida">1/4</span> de taza de zanahoria picada.</li>
                                  <li><span class="medida">4</span> cucharadas de aceite de oliva.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li><span class="medida">4</span> piezas (100 g c/u) de filete de pescado blanco.</li>
                                  <li><span class="medida">2</span> cucharadas de cebolla blanca picada.</li>
                                  <li><span class="medida">2</span> cucharadas de mantequilla.</li>
                                  <li><span class="medida">2</span> cucharadas de vinagre blanco <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li><span class="medida">3/4</span> taza de agua.</li>
                                  <li><span class="medida">2</span> cucharadas <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li><span class="medida">2</span> cucharadas perejil picado.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Saltea</span> los pimientos, la cebolla y la zanahoria en aceite de oliva por 3 minutos. Sazona con sal y pimienta al gusto.</p>
                                <p><span class="paso">Extiende</span> los vegetales sobre los 4 filetes y enr&oacute;llalos. Hornea 10 minutos o hasta que est&eacute;n completamente cocidos.</p>
                                <p><span class="paso">Acitrona</span> la cebolla en mantequilla. Agrega el vinagre blanco y cocina por 2 minutos. Incorpora el agua, la <span class="marca">French&rsquo;s&reg; Mostaza Picante</span> y el perejil. Hierve y sazona con sal y pimienta.</p>
                                <p><span class="paso">Ba&ntilde;a</span> los filetes de pescado con la salsa.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "rollos-de-pescado-con-salsa-de-perejil-y-mostaza-picante",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Puntas de res en salsa de mostaza picante'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Puntas de res <span>en salsa de mostaza picante</span>',
      'photo_big'           => 'Puntas-G.png',
      'photo_small'         => 'Puntas-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>500 g de puntas de res.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li>2 cucharadas de aceite vegetal.</li>
                                  <li>1 pieza de cebolla blanca.</li>
                                  <li>1/4 de pieza de pimiento morrón verde.</li>
                                  <li>1/4 de pieza de pimiento morrón rojo.</li>
                                  <li>2 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">500</span> g de puntas de res.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li><span class="medida">2</span> cucharadas de aceite vegetal.</li>
                                  <li><span class="medida">1</span> pieza de cebolla blanca.</li>
                                  <li><span class="medida">1/4</span> de pieza de pimiento morrón verde.</li>
                                  <li><span class="medida">1/4</span> de pieza de pimiento morrón rojo.</li>
                                  <li><span class="medida">2</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Salpimienta</span> las puntas de res y fr&iacute;elas en el aceite.</p>
                                <p><span class="paso">Agrega</span> la cebolla y los pimientos, y saltea con la carne.</p>
                                <p><span class="paso">Incorpora</span> la <span class="marca">French&rsquo;s&reg; Mostaza Picante</span> y revuelve perfectamente.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "puntas-de-res-en-salsa-de-mostaza-picante",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Ensalada de papa, huevo y salami con mostaza picante'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Ensalada de papa, huevo y salami <span>con mostaza picante</span>',
      'photo_big'           => 'Ensalada-Pollo-G.png',
      'photo_small'         => 'Ensalada-Pollo-C.png',
      'category_id'         => 2,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>12 piezas de papa cambray cocida.</li>
                                  <li>2 piezas de huevo cocido y picado.</li>
                                  <li>2 cucharadas de salami frito y picado.</li>
                                  <li>2 cucharadas de mayonesa <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li>1 cucharada de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li>1 cucharada de jugo de lim&oacute;n.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li>2 cucharadas de ceboll&iacute;n picado.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">12</span> piezas de papa cambray cocida.</li>
                                  <li><span class="medida">2</span> piezas de huevo cocido y picado.</li>
                                  <li><span class="medida">2</span> cucharadas de salami frito y picado.</li>
                                  <li><span class="medida">2</span> cucharadas de mayonesa <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li><span class="medida">1</span> cucharada de <span class="marca">French&rsquo;s&reg; Mostaza Picante.</span></li>
                                  <li><span class="medida">1</span> cucharada de jugo de lim&oacute;n.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li><span class="medida">2</span> cucharadas de ceboll&iacute;n picado.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Corta</span> las papas en cuartos. Mezcla la papa, el huevo, el salami, la mayonesa, la <span class="marca">French&rsquo;s&reg; Mostaza Picante</span> y el jugo de lim&oacute;n. Sazona con sal y pimienta.</p>
                                <p><span class="paso">Sirve</span> y espolvorea encima el cebollín.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "ensalada-de-papa-huevo-y-salami-con-mostaza-picante",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Pollo a la crema y mostaza picante'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Pollo <span>a la crema y mostaza picante</span>',
      'photo_big'           => 'Pollo-Crema-G.png',
      'photo_small'         => 'Pollo-Crema-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>4 piezas de muslo de pollo en trozos.</li>
                                  <li>1 cucharada de mantequilla.</li>
                                  <li>2 cucharadas de cebolla blanca picada.</li>
                                  <li>2 tazas de crema.</li>
                                  <li>6 cucharadas de French&rsquo;s&reg; Mostaza Picante. </li>
                                  <li>1 cucharada de jugo de lim&oacute;n.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li>2 cucharadas de cilantro picado.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">4</span> piezas de muslo de pollo en trozos.</li>
                                  <li><span class="medida">1</span> cucharada de mantequilla.</li>
                                  <li><span class="medida">2</span> cucharadas de cebolla blanca picada.</li>
                                  <li><span class="medida">2</span> tazas de crema.</li>
                                  <li><span class="medida">6</span> cucharadas de French&rsquo;s&reg; Mostaza Picante. </li>
                                  <li><span class="medida">1</span> cucharada de jugo de lim&oacute;n.</li>
                                  <li>Sal y pimienta al gusto.</li>
                                  <li><span class="medida">2</span> cucharadas de cilantro picado.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Fr&iacute;e</span> el pollo en la mantequilla hasta que adquiera un color dorado. Ret&iacute;ralo del fuego.</p>
                                <p><span class="paso">En la misma grasa</span>, acitrona la cebolla e incorpora la crema, la French&rsquo;s&reg; Mostaza Picante y el jugo de limón. Sazona con sal y pimienta.</p>
                                <p><span class="paso">Agrega</span> el pollo y cuece a fuego medio durante 5 minutos.</p>
                                <p><span class="paso">Sirve</span> y espolvorea encima el cilantro.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "pollo-a-la-crema-y-mostaza-picante",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Fideos integrales con vegetales rostizados y mostaza dulce'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Fideos integrales <span>con vegetales rostizados y mostaza dulce</span>',
      'photo_big'           => 'Fideos-G.png',
      'photo_small'         => 'Fideos-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>1/4 taza de pimiento morrón rojo fileteado.</li>
                                  <li>1/4 taza de pimiento morrón amarillo fileteado.</li>
                                  <li>1/2 taza de cebolla morada fileteada.</li>
                                  <li>1/4 taza de calabaza italiana fileteada.</li>
                                  <li>4 tazas de espagueti integral cocido.</li>
                                  <li>4 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medidas">1/4</span> taza de pimiento morrón rojo fileteado.</li>
                                  <li><span class="medidas">1/4</span> taza de pimiento morrón amarillo fileteado.</li>
                                  <li><span class="medidas">1/2</span> taza de cebolla morada fileteada.</li>
                                  <li><span class="medidas">1/4</span> taza de calabaza italiana fileteada.</li>
                                  <li><span class="medidas">4</span> tazas de espagueti integral cocido.</li>
                                  <li><span class="medidas">4</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Rostiza</span> los vegetales en la sartén.</p>
                                <p><span class="paso">Agrega</span> el espagueti y la <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "fideos-integrales-con-vegetales-rostizados-y-mostaza-dulce",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Cáscaras de papa con pollo a la mostaza dulce'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Cáscaras de papa con pollo <span>a la mostaza dulce</span>',
      'photo_big'           => 'Papas-G.png',
      'photo_small'         => 'Papas-C.png',
      'category_id'         => 2,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>4 piezas de papa blanca mediana y cocida.</li>
                                  <li>1 pieza de muslo de pollo cocido y picado.</li>
                                  <li>3 cucharadas de apio picado.</li>
                                  <li>1 cucharada de cebolla picada.</li>
                                  <li>2 cucharadas de perejil picado.</li>
                                  <li>3 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li>1 cucharada de jugo de limón.</li>
                                  <li>Sal y pimienta al gusto</li>
                                  <li>2 cucharadas de perejil picado.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">4</span> piezas de papa blanca mediana y cocida.</li>
                                  <li><span class="medida">1</span> pieza de muslo de pollo cocido y picado.</li>
                                  <li><span class="medida">3</span> cucharadas de apio picado.</li>
                                  <li><span class="medida">1</span> cucharada de cebolla picada.</li>
                                  <li><span class="medida">2</span> cucharadas de perejil picado.</li>
                                  <li><span class="medida">3</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li><span class="medida">1</span> cucharada de jugo de limón.</li>
                                  <li>Sal y pimienta al gusto</li>
                                  <li><span class="medida">2</span> cucharadas de perejil picado.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Corta</span> la parte superior de las papas. Con la ayuda de una cuchara vacía su interior y deja la cáscara de ½ cm de grosor.</p>
                                <p><span class="paso">Pica</span> la papa que retiraste y mézclala con el resto de los ingredientes.</p>
                                <p><span class="paso">Divide</span> la preparación anterior en 4 porciones y rellena las cáscaras.</p>
                                <p><span class="paso">Sirve</span> y espolvorea encima el perejil picado.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "cascaras-de-papa-con-pollo-a-la-mostaza-dulce",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Alitas con paprika y mostaza dulce'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Alitas <span>con paprika y mostaza dulce</span>',
      'photo_big'           => 'Alitas-G.png',
      'photo_small'         => 'Alitas-C.png',
      'category_id'         => 1,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>6 piezas de alitas de pollo enteras y cocidas.</li>
                                  <li>1 cucharada de paprika.</li>
                                  <li>1 cucharada de f&eacute;cula de ma&iacute;z.</li>
                                  <li>/2 taza de aceite</li>
                                  <li>2 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li>Sal y pimienta al gusto</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">6</span> piezas de alitas de pollo enteras y cocidas.</li>
                                  <li><span class="medida">1</span> cucharada de paprika.</li>
                                  <li><span class="medida">1</span> cucharada de f&eacute;cula de ma&iacute;z.</li>
                                  <li><span class="medida">1/2</span> taza de aceite</li>
                                  <li><span class="medida">2</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li>Sal y pimienta al gusto</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Espolvorea</span> las alitas con paprika y f&eacute;cula de ma&iacute;z hasta cubrirlas por completo.</p>
                                <p><span class="paso">Fríelas</span> en el aceite caliente hasta que adquieran un color dorado. Esc&uacute;rrelas y colócalas en papel absorbente.</p>
                                <p><span class="paso">Agrega</span> la <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span> y mezcla de manera que todo quede cubierto.</p>
                                <p><span class="paso">Salpimenta</span> y sirve con la <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "alitas-con-paprika-y-mostaza-dulce",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Lomo a la con mostaza dulce'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Lomo <span>a la con mostaza dulce</span>',
      'photo_big'           => 'Lomo-G.png',
      'photo_small'         => 'Lomo-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>500 g de lomo de cerdo rebanado.</li>
                                  <li>Sal y pimienta al gusto</li>
                                  <li>1 diente de ajo.</li>
                                  <li>2 cucharadas de vinagre Blanco <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li>4 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li>2 cucharadas de aceite vegetal.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">500</span> g de lomo de cerdo rebanado.</li>
                                  <li>Sal y pimienta al gusto</li>
                                  <li><span class="medida">1</span> diente de ajo.</li>
                                  <li><span class="medida">2</span> cucharadas de vinagre Blanco <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li><span class="medida">4</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li><span class="medida">2</span> cucharadas de aceite vegetal.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Salpimenta</span> el lomo.</p>
                                <p><span class="paso">Licúa</span> el ajo, el vinagre y la <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</p>
                                <p><span class="paso">Unta</span> las chuletas con la preparaci&oacute;n anterior y d&eacute;jalas marinar 5 minutos.</p>
                                <p><span class="paso">Fr&iacute;</span> las chuletas en el aceite hasta que est&eacute;n doradas por ambos lados.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "lomo-a-la-con-mostaza-dulce",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Chuletas de cerdo gratinadas con mostaza dulce'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Chuletas de cerdo <span>gratinadas con mostaza dulce</span>',
      'photo_big'           => 'Chuleta-G.png',
      'photo_small'         => 'Chuleta-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>1/2 taza de pan molido.</li>
                                  <li>1 cucharada de mayonesa <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li>1/2 cucharada de ajo picado.</li>
                                  <li>4 cucharadas de perejil picado.</li>
                                  <li>4 piezas (100 g c/u) de chuleta ahumada de cerdo.</li>
                                  <li>4 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">1/2</span> taza de pan molido.</li>
                                  <li><span class="medida">1</span> cucharada de mayonesa <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li><span class="medida">1/2</span> cucharada de ajo picado.</li>
                                  <li><span class="medida">4</span> cucharadas de perejil picado.</li>
                                  <li><span class="medida">4</span> piezas (100 g c/u) de chuleta ahumada de cerdo.</li>
                                  <li><span class="medida">4</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Mezcla</span> el pan molido, la mayonesa, el ajo y el perejil.</p>
                                <p><span class="paso">Unta</span> las chuletas con la <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span> por ambos lados.</p>
                                <p><span class="paso">Coloca</span> las chuletas en una charola para horno y c&uacute;brelas con la mezcla de pan molido.</p>
                                <p><span class="paso">Hornea</span> hasta que el pan est&eacute; ligeramente dorado.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "chuletas-de-cerdo-gratinadas-con-mostaza-dulce",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Chamorro de cerdo a la mostaza dulce'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Chamorro de cerdo <span>a la mostaza dulce</span>',
      'photo_big'           => 'Chamorro-G.png',
      'photo_small'         => 'Chamorro-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>4 piezas de chamorro de cerdo.</li>
                                  <li>12 tazas de agua.</li>
                                  <li>1/2 pieza de cebolla blanca en trozos.</li>
                                  <li>2 dientes de ajo.</li>
                                  <li>3 hojas de laurel.</li>
                                  <li>Sal al gusto</li>
                                  <li>1/2 taza de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">4</span> piezas de chamorro de cerdo.</li>
                                  <li><span class="medida">12</span> tazas de agua.</li>
                                  <li><span class="medida">1/2</span> pieza de cebolla blanca en trozos.</li>
                                  <li><span class="medida">2</span> dientes de ajo.</li>
                                  <li><span class="medida">3</span> hojas de laurel.</li>
                                  <li>Sal al gusto</li>
                                  <li><span class="medida">1/2</span> taza de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Cuece</span> los chamorros en agua, con la cebolla, el ajo, el laurel y la sal, hasta que estén suaves.</p>
                                <p><span class="paso">Barn&iacute;zalos</span> completamente con la <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span> y rost&iacute;zalos en el horno (precalentado) a 180º C durante 10 minutos.</p>
                                <p><span class="paso">Retíralos</span> del asador y &uacute;ntales m&aacute;s mostaza. M&eacute;telos de nuevo al fuego por 5 minutos o hasta que adquieran un color dorado.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "chamorro-de-cerdo-a-la-mostaza-dulce",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Ensalada de vegetales frescos y pollo con vinagreta de mostaza dulce'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Ensalada de vegetales <span>frescos y pollo con vinagreta de mostaza dulce</span>',
      'photo_big'           => 'Ensalada-Vegetales-G.png',
      'photo_small'         => 'Ensalada-Vegetales-C.png',
      'category_id'         => 2,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>3 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li>2 cucharadas de agua.</li>
                                  <li>1 cucharada de vinagre blanco <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li>1 cucharada de azúcar.</li>
                                  <li>5 cucharadas de aceite de oliva.</li>
                                  <li>Pimienta negra molida al gusto</li>
                                  <li>1/2 taza de col morada fileteada.</li>
                                  <li>1/2 taza de col blanca fileteada.</li>
                                  <li>1 taza de apio en juliana.</li>
                                  <li>1 taza de zanahoria rallada.</li>
                                  <li>1 taza de tallo de br&oacute;coli pelado y rallado.</li>
                                  <li>1 taza ch&iacute;charo japon&eacute;s en juliana.</li>
                                  <li>1/4 taza de cilantro picado.</li>
                                  <li>2 tazas de pollo cocido y deshebrado.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">3</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li><span class="medida">2</span> cucharadas de agua.</li>
                                  <li><span class="medida">1</span> cucharada de vinagre blanco <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li><span class="medida">1</span> cucharada de azúcar.</li>
                                  <li><span class="medida">5</span> cucharadas de aceite de oliva.</li>
                                  <li>Pimienta negra molida al gusto</li>
                                  <li><span class="medida">1/2</span> taza de col morada fileteada.</li>
                                  <li><span class="medida">1/2</span> taza de col blanca fileteada.</li>
                                  <li><span class="medida">1</span> taza de apio en juliana.</li>
                                  <li><span class="medida">1</span> taza de zanahoria rallada.</li>
                                  <li><span class="medida">1</span> taza de tallo de br&oacute;coli pelado y rallado.</li>
                                  <li><span class="medida">1</span> taza ch&iacute;charo japon&eacute;s en juliana.</li>
                                  <li><span class="medida">1/4</span> taza de cilantro picado.</li>
                                  <li><span class="medida">2</span> tazas de pollo cocido y deshebrado.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Licúa</span> la <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>, el agua, el vinagre, el az&uacute;car, el aceite y la pimienta.</p>
                                <p><span class="paso">Mezcla</span> los vegetales y el cilantro con el pollo.</p>
                                <p><span class="paso">Vierte</span> la vinagreta de mostaza sobre la ensalada.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "ensalada-de-vegetales-frescos-y-pollo-con-vinagreta-de-mostaza-dulce",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );

    // 'Chapata de camarones a la parrilla con mostaza dulce'
    DB::table( 'recipes' )->insert( [
      'user_name'           => 'Maribel Soria',
      'user_email'          => 'maribel@lunave.com',
      'name'                => 'Chapata de camarones <span>a la parrilla con mostaza dulce</span>',
      'photo_big'           => 'Chapata-G.png',
      'photo_small'         => 'Chapata-C.png',
      'category_id'         => 3,
      'portions'            => 4,
      'preparation_time'    => '15 mins.',
      'cooking_time'        => '15 mins.',
      'ingredients_desktop' => '<ul>
                                  <li>40 piezas de camar&oacute;n mediano pelado.</li>
                                  <li>6 cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li>4 cucharadas de aceite.</li>
                                  <li>2 cucharadas de perejil picado.</li>
                                  <li>4 piezas de pan chapata.</li>
                                  <li>1/2 taza de mayonesa <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li>4 hojas de lechuga.</li>
                                  <li>8 rebanadas de jitomate bola.</li>
                                  <li>1 pieza de aguacate.</li>
                                  <li>12 aros de cebolla morada.</li>
                                </ul>',
      'ingredients_mobile'  => '<ul>
                                  <li><span class="medida">40</span> piezas de camar&oacute;n mediano pelado.</li>
                                  <li><span class="medida">6</span> cucharadas de <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>.</li>
                                  <li><span class="medida">4</span> cucharadas de aceite.</li>
                                  <li><span class="medida">2</span> cucharadas de perejil picado.</li>
                                  <li><span class="medida">4</span> piezas de pan chapata.</li>
                                  <li><span class="medida">1/2</span> taza de mayonesa <span class="marca">La Coste&ntilde;a&reg;</span>.</li>
                                  <li><span class="medida">4</span> hojas de lechuga.</li>
                                  <li><span class="medida">8</span> rebanadas de jitomate bola.</li>
                                  <li><span class="medida">1</span> pieza de aguacate.</li>
                                  <li><span class="medida">12</span> aros de cebolla morada.</li>
                                </ul>',
      'preparation'         => '<p><span class="paso">Revuelve</span> perfectamente el camar&oacute;n, la <span class="marca">French&rsquo;s&reg; Mostaza Dulce</span>, el aceite y el perejil. Deja reposar la mezcla durante 5 minutos.</p>
                                <p><span class="paso">Corta</span> el pan horizontalmente por la mitad. Úntales mayonesa y ponlos a tostar.</p>
                                <p><span class="paso">Asa</span> los camarones a la parilla hasta que est&eacute;n cocidos.</p>
                                <p><span class="paso">Coloca</span> sobre la base del pan: la lechuga, los camarones, el jitomate, el aguacate y la cebolla, y tapa con la mitad correspondiente.</p>',
      'ranking'             => 5,
      'product_name'        => 'classic-sq',
      'active'              => true,
      'slug'                => "chapata-de-camarones-a-la-parrilla-con-mostaza-dulce",
      'created_at'          => date( 'Y-m-d H:i:s' ),
    ] );
  }
}
