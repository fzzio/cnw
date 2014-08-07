<!DOCTYPE html>
<html>
   <head>
      <?php require_once 'header.php' ?>
      <script>
      $(document).ready(function() {
         $('.carousel').carousel('pause');
      });
         $("li").hover(
                 function (event) {
                    event.preventDefault();
                 $(this).stop(true, true).addClass('hover',500);
                 }, 
                 function (event) {
                    event.preventDefault();
                 $(this).stop(true, true).removeClass('hover',500);
                 }
            );
            $('#navegacion').scrollspy();
            $('[data-spy="scroll"]').each(function () {
         
            var $spy = $(this).scrollspy('refresh')
            });
            
      </script>
   </head>
   <body data-spy="scroll" data-target="#navegacion">
      <?php require_once'menu.php'; ?>
      <div id="navegacion" class="visible-desktop navbar">
         <ul id="navegacionbar" class="nav">
            <li  class="ver badge navegacion-menu-item">
               <a href="#inicioRefrescos" style="text-decoration:none;color:#FFF" title="Inicio Refrescos">
                  <div class="lista">Inicio</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#agua-manantial" style="text-decoration:none;color:#FFF" title="Agua Manantial">
                  <div class="lista">Agua Manantial</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item ultimo-item">
               <a href="#pony-malta" style="text-decoration:none;color:#FFF" title="Pony Malta">
                  <div class="lista">Pony Malta</div>
               </a>
            </li>
         </ul>
      </div>
      
      <div id="inicioRefrescos" class="row-fluid parallax-seccion parallax-seccion-2" style="background-image: url('asset/img/productos/IMG-Productos.jpg');">
         <div class="span12 contenedor-centrar">
            <div class="row-fuid">
               <div class="span12">
                  <div class="row-fluid">
                     <div class="span8 offset2 text-center">
                        <p></p>
                        <h1 class="seccion-titular texto-rojo" style="margin-top:20px;">REFRESCOS</h1>
                        
                        <p class="seccion-subtitular seccion-texto-productos texto-gris-oscuro" style="margin-bottom:100px;">
                           Cervecería Nacional CN S.A. ofrece un amplio portafolio de bebidas de moderación y refrescos, los cuales se encuentran elaborados bajo estrictos estándares internacionales, con el fin de brindar a sus clientes productos que posean un delicioso sabor y una excelente calidad.
                        </p>
                        
                     </div>
                  </div>
               </div>
            </div>

            <!-- <div class="row-fuild">
               <div class="span12 sin-margen">
                  
                  
                  <br /> <br />
               </div>
               </div> -->
            
         </div>
         <div class="row-fluid visible-phone visible-tablet contenedor-fondo">
               <!-- <div class="span5 offset1 text-right">
                  <img src="asset/img/logos/1-Logos.png" alt="">
                  </div>
                  <div class="span4 text-center">
                  <img src="asset/img/logos/2-Logos.png" alt="">
               </div> -->
               <!-- <div class="span3 text-left">
                  <img src="asset/img/logos/3-Logos.png" alt="">
               </div> -->
               <div class="span12 text-center">
                  <img class="img-responsive" src="asset/img/productos/Botella.png">
               </div>
            </div>
         <div class="row-fluid contenedor-fondo visible-desktop" style="position:absolute;">
               <!-- <div class="span5 offset1 text-right">
                  <img src="asset/img/logos/1-Logos.png" alt="">
                  </div>
                  <div class="span4 text-center">
                  <img src="asset/img/logos/2-Logos.png" alt="">
                  </div> -->
               <!-- <div class="span3 text-left">
                  <img src="asset/img/logos/3-Logos.png" alt="">
                  </div> -->
               <div class="span4 offset4 text-center">
                  <img class="img-responsive" src="asset/img/productos/Botella-2.png">
               </div>
            </div>
            <div class="row-fluid visible-phone visible-tablet" style="position:absolute;">
               <!-- <div class="span5 offset1 text-right">
                  <img src="asset/img/logos/1-Logos.png" alt="">
                  </div>
                  <div class="span4 text-center">
                  <img src="asset/img/logos/2-Logos.png" alt="">
                  </div> -->
               <!-- <div class="span3 text-left">
                  <img src="asset/img/logos/3-Logos.png" alt="">
                  </div> -->
               <div class="span6 offset3 text-center">
                  <img class="img-responsive" src="asset/img/productos/Botella-2.png">
               </div>
            </div>
            <!-- <div class="row-fluid visible-tablet visible-phone hidden-tablet" style="position:absolute;"> -->
               <!-- <div class="span3 text-center">
                  <img src="asset/img/logos/6-Pilsener.png" alt="">
                  </div>
                  <div class="span3 text-center">
                  <img src="asset/img/logos/5-Club.png" alt="">
                  </div>
                  <div class="span3 text-center">
                  <img src="asset/img/logos/4-Dorada.png" alt="">
                  </div>
                  <div class="span3 text-center">
                  <img src="asset/img/logos/3-Miller-.png" alt="">
                  </div> -->
               <!-- <div class="span2 text-center">
                  <img src="asset/img/logos/2-Pony-Malta.png" alt="">
                  </div>
                  <div class="span2 text-center">
                  <img src="asset/img/logos/1-Manantial.png" alt="">
                  </div> -->
               <!-- <div class="span12 text-center contenedor-fondo">
                  <img class="img-responsive" src="asset/img/productos/Botella.png">
               </div>
            </div> -->
      </div>
      <!-- <div class="row-fluid logos-productos">
         &nbsp; <br /> <br /> <br />
      </div> -->
      <div id="agua-manantial" class="row-fluid parallax-seccion">
         <div id="CarManantial" class="carousel slide slideFull">
            <!-- <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol> -->
            <!-- Carousel items -->
            <div class="carousel-inner innerFull">
               <div class="active item itemFull">
                  <div class="row-fluid parallax-seccion" id="agua-manantial" style="background-image: url('asset/img/productos/refrescos/IMG-Manantial-Sin-Gas.jpg'); background-position: 50% 50%;">
                     <div class="span4 offset6 text-left contenedor-centrar">
                        <h1 class="seccion-titular texto-blanco">Agua Manantial</h1>
                        <!-- <h3 class="seccion-subtitular texto-blanco">La cerveza más vendida en el Ecuador.</h3> -->
                           <!-- <br /><br /> -->
                           <div class="seccion-texto texto-blanco">
                              Agua con gas y sin gas, elaboradas con un moderno y exigente proceso que garantiza su pureza, frescura y transparencia.
                              <!-- <br><br> -->
                              <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  -->
                              <!-- <br><br><br><br> -->
                           </div>
                     </div>
                  </div>
               </div>
               <div class="item itemFull">
                  <div class="row-fluid parallax-seccion" style="background-image: url('asset/img/productos/refrescos/IMG-Presentacion-Manantial.jpg'); background-position: 70% 50%;">
                     <!-- <div class="vert-text"> -->
                     <div class="span6 offset2 text-left contenedor-centrar">
                        <h1 class="seccion-titular2 texto-rojo">Presentaciones</h1>
                        <br /><br />
                        <div class="row-fluid">
                           <div class="span6">
                              <h4>
                                 AGUA CON GAS
                              </h4>
                              <div class="seccion-texto texto-gris">
                                 <p>Manantial con gas tiene dos tamaños.</p>
                                 <p>FAMILIAR: Botella PET de 2500 cm3.</p>
                                 <p>PERSONAL: Botella PET de 500 cm3.</p>
                              </div>
                           </div>
                        </div>
                        <div class="seccion-texto texto-gris">
                            <h4>
                                 AGUA SIN GAS
                              </h4>
                              <div class="seccion-texto texto-gris">
                                 <!-- <p>Garrafa de 5 litros.</p> -->
                                 <p>Botella de 500 cm3.</p>
                                 <p>Personal de 300 cm3.</p>
                              </div>
                        </div>
                     </div>
                     <!-- </div> -->
                  </div>
               </div>
            </div>
            <!-- Carousel nav -->
            <!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> -->
            <a class=" btn-cn carusel carousel-control right" href="#CarManantial" data-slide="next">
            <img class="contenedor-centrar" src="asset/img/Flecha-derecha.png">
            </a>
         </div>
      </div>
      <div id="pony-malta" class="row-fluid parallax-seccion">
         <div id="CarPony" class="carousel slide slideFull">
            <!-- <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol> -->
            <!-- Carousel items -->
            <div class="carousel-inner innerFull">
               <div class="active item itemFull">
                  <div class="row-fluid parallax-seccion" id="pony-malta" style="background-image: url('asset/img/productos/refrescos/IMG-Pony-Malta.jpg'); background-position: 50% 50%;">
                     <!-- <div class="vert-text"> -->
                     <div class="span5 offset6 text-left contenedor-centrar">
                        <h1 class="seccion-titular texto-blanco">Pony Malta</h1>
                        <!-- <br /> -->
                        <!-- <h3 class="seccion-subtitular texto-blanco">Elaboramos energía natural y refrescante.</h3> -->
                        <br /><br />
                        <div class="seccion-texto texto-blanco">
                           <!-- Para llevar ese estilo de vida cada vez más activo, los jóvenes necesitan bebidas refrescantes, nutritivas, no alcohólicas que reponen sus energías sin alterar su salud, como la natural, refrescante y nutritiva Pony Malta que todos conocemos y que se fabrica, orgullosamente en las instalaciones de Cervecería Nacional, CN S.A.<br> -->
                           <!-- <br><br> -->
                           Bebida refrescante y nutritiva a base de malta. Sin contenido alcohólico. Es el resultado de un riguroso proceso de elaboración que asegura su calidad y delicioso sabor con un alto contenido de proteínas, vitaminas y minerales.
                           <br><br><br><br><br>
                        </div>
                     </div>
                     <!-- </div> -->
                  </div>
               </div>
               <div class="item itemFull">
                  <div class="row-fluid parallax-seccion" style="background-image: url('asset/img/productos/refrescos/IMG-Presentacion-pony.jpg'); background-position: 65% 50%;">
                     <!-- <div class="vert-text"> -->
                     <div class="span5 offset2 text-left contenedor-centrar">
                        <h1 class="seccion-titular2 texto-rojo">Presentaciones</h1>
                        <br /><br />
                        <div class="seccion-texto texto-blanco">
                           <p>311 cm3 Retornable (24 unidades).</p>
                           <p>225 cm3 Retornable (24 unidades).</p>
                           <p>330 cm3 Lata (12 y 24 unidades).</p>
                           <p>330 cm3 PET Descartable (24 unidades).</p>
                           <br><br><br><br>
                        </div>
                     </div>
                     <!-- </div> -->
                  </div>
               </div>
            </div>
            <!-- Carousel nav -->
            <!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> -->
            <a class=" btn-cn carusel carousel-control right" href="#CarPony" data-slide="next">
            <img class="contenedor-centrar" src="asset/img/Flecha-derecha.png">
            </a>
         </div>
      </div>
      <?php require_once'footer.php'; ?>
   </body>
</html>