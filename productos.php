<!DOCTYPE html>
<html>
   <head>
      <?php require_once 'header.php' ?>
   </head>
   <body>
      <?php require_once'menu.php'; ?>
      </div>
      <!-- <div class="row-fluid parallax-seccion parallax-seccion-mid" style="background-image: url('asset/img/productos/IMG-Productos.jpg');">
         <div class="span12 contenedor-centrar">
            <div class="row-fuid">
               <div class="span12">
                  <div class="row-fluid">
                     <div class="span8 offset2 text-center">
                        <h1 class="seccion-titular texto-rojo" style="margin-top:20px;">PRODUCTOS</h1>
                        <br /><br />
                        <p class="seccion-subtitular seccion-texto-productos texto-gris-oscuro">
                           Cerveceria Nacional. CN S.A. ofrece un amplio portafolio de bebidas que van desde cervezas hasta refrescos los cuales se encuentran elaborados bajo estrictos estándares internacionales con el fin de brindar a sus clientes productos que posean un delicioso sabor pero sobretodo una excelente calidad.
                        </p>
                        <br /><br />
                     </div>
                  </div>
               </div>
            </div>
            <div class="row-fuild">
               <div class="span12 sin-margen">
                  <div class="row-fluid visible-desktop">
                     <div class="span4 offset1 text-right">
                        <img src="asset/img/logos/1-Logos.png" alt="">
                     </div>
                     <div class="span3 text-center">
                        <img src="asset/img/logos/2-Logos.png" alt="">
                     </div>
                     <div class="span3 text-left">
                        <img src="asset/img/logos/3-Logos.png" alt="">
                     </div>
                  </div>
                  <div class="row-fluid visible-tablet visible-phone">
                     <div class="span2 text-center">
                        <img src="asset/img/logos/6-Pilsener.png" alt="">
                     </div>
                     <div class="span2 text-center">
                        <img src="asset/img/logos/5-Club.png" alt="">
                     </div>
                     <div class="span2 text-center">
                        <img src="asset/img/logos/4-Dorada.png" alt="">
                     </div>
                     <div class="span2 text-center">
                        <img src="asset/img/logos/3-Miller-.png" alt="">
                     </div>
                     <div class="span2 text-center">
                        <img src="asset/img/logos/2-Pony-Malta.png" alt="">
                     </div>
                     <div class="span2 text-center">
                        <img src="asset/img/logos/1-Manantial.png" alt="">
                     </div>
                  </div>
                  <br /> <br />
               </div>
            </div>
         </div>
      </div> -->
      <!-- <div class="row-fluid logos-productos">
         &nbsp; <br /> <br /> <br />
      </div> -->
      <div class="row-fluid row-sinmargen text-center">
         <div class="span6 text-center acceso-c">
            <div class="acceso">
               <img src="asset/img/productos/2-IMG-P-Cerveza.jpg" class="img-acceso">
               <a href="#edadModal" class="caption-acceso" data-toggle="modal">
                  <div class="contenedor-centrar">
                     <div class="row-fluid text-center">
                        <div class="span8 offset2">
                           <h1 class="titular-acceso">Bebidas de Moderación</h1>
                           <h3 class="texto-acceso">
                              Conoce nuestros productos.
                           </h3>
                           <br />
                           <div class="icono mas-rojo"></div>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="span6 text-center acceso-c">
            <div class="acceso">
               <img src="asset/img/productos/3-IMG-PRefresco.jpg" class="img-acceso">
               <a href="refrescos.php" class="caption-acceso">
                  <div class="contenedor-centrar">
                     <div class="row-fluid text-center">
                        <div class="span8 offset2">
                           <h1 class="titular-acceso">Refrescos</h1>
                           <h3 class="texto-acceso">
                              Conoce nuestros productos.
                           </h3>
                           <br />
                           <div class="icono mas-rojo"></div>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <div id="edadModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="edadModalLabel" aria-hidden="true">
         <div class="modal-body">
            <div class="row-fluid text-center">
               <div class="span10 offset1">
                  <h3 class="titulo-modal">Para entrar en la sección de cervezas debes ser mayor de edad.</h3>
                  <h4 class="titulo-modal">Ingresa tu fecha de nacimiento</h4>
                  <br />
               </div>
            </div>
            <div class="row-fluid text-center">
               <div class="span4">
                  <input type="text" name="nac-dia" id="nac-dia" class="input-nac integer" placeholder="DD" maxlength="2" size="2">
               </div>
               <div class="span4">
                  <input type="text" name="nac-mes" id="nac-mes" class="input-nac integer" placeholder="MM" maxlength="2" size="2">
               </div>
               <div class="span4">
                  <input type="text" name="nac-anio" id="nac-anio" class="input-nac integer" placeholder="AA" maxlength="2" size="2">
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <br />
            <button class="btn btn-cn btn-cn-pq" id="btn-edad" aria-hidden="true">INGRESAR</button>
            <br /><br />
         </div>
      </div>
      <footer>
         <?php require_once'footer.php'; ?>
      </footer>
      <script type="text/javascript">
         $(document).ready(function(){
             $(".acceso").hover(function() {
                 //$(this).find('.caption-acceso').stop(true, true).fadeIn('200');
                 $(this).find('.icono').stop(true, true).fadeIn('200');
             }, function() {
                 //$(this).find('.caption-acceso').stop(true, true).fadeOut('200');
                 $(this).find('.icono').stop(true, true).fadeOut('200');
             });
         });
      </script>
   </body>
</html>