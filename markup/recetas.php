<?php include('header.php'); ?>
        
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
                        <a href="#"></a>
                    </div>
                    <div class="content-filtro">
                        <label>
                            <select id="">
                                <option value="vacio" selected>Categoría</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                            </select>
                        </label>
                        <label>
                            <select id="">
                                <option value="vacio" selected>Tiempo</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                            </select>
                        </label>
                        <label>
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
                            <select id="">
                                <option value="vacio" selected><i class="fa fa-star"></i></option>
                                <option value="">1</option>
                                <option value="">2<i class="fa fa-star"></i></option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>

        </section>
        
        <section class="grid">
            <div class="container">
                <div class="content-grid">
                    <a href="detalle-receta.php" class="receta">
                        <p class="categoria b1">Snacks</p>
                        <div class="image">
                            <img src="images/recetas/receta.jpg" alt=""/>          
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
                            <img src="images/recetas/receta.jpg" alt=""/>          
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
                            <img src="images/recetas/receta.jpg" alt=""/>          
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
                            <img src="images/recetas/receta2.jpg" alt=""/>          
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
                            <img src="images/recetas/receta2.jpg" alt=""/>          
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
                            <img src="images/recetas/receta2.jpg" alt=""/>          
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
                <p>Se parte de nuestras delicias</p>
                <a class="boton">Ingresar</a>
            </div>
        </section>


        <div class="modal">
            <div class="container">
                <div class="content-modal">
                    <div class="img-back1"></div>
                    <div class="img-back2"></div>
                    <span class="fa fa-times fa-2x"></span>
                    <div class="icono-chef-big"></div>
                    <h2>Sube tu receta</h2>
                    <form>
                        <input type="text" placeholder="NOMBRE">
                        <input type="text" placeholder="MAIL">
                        <input type="text" placeholder="TÍTULO">
                        <input type="file" accept="image/png, image/jpeg">
                        <div class="left">
                            <div class="subir-imagen"><a href="">Sube una fotográfia de tu receta</a></div>
                        </div>
                        <div class="right">
                            <input type="text" placeholder="TÍTULO">
                            <label>
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
                                <select id="">
                                    <option value="vacio" selected>Tiempo</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                </select>
                            </label>
                            <label>
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
                            <textarea name="" id="" class="ingredientes" placeholder="INGREDIENTES"></textarea>
                        </div>
                        <div class="div100">
                            <textarea name="" id="" class="preparacion" placeholder="PREPARACIÓN"></textarea>
                        </div>
                    </form>
                    <a href="" class="boton">Subir</a>
                </div>
            </div>
        </div>


<?php include('footer.php'); ?>