<!DOCTYPE html>
<html>
   <head>
      <?php require_once 'header.php' ?>
      <script  type="text/javascript" >
         $(window).load(function(){
           ajustar();
         
         });
         function ajustar(){
         
         
           var ancho = $(window).width(); 
           var ancho_aplicar = ancho / 5 ;
           var ancho_aplicar = ancho_aplicar - 1;
           $(".flotadores").css("width",   ancho_aplicar + "px");
           centrarVert($(".texto-acceso2"));
           centrarVert($(".texto-acceso2.movil"));
           centrarHor($(".iconocontacto"));
           centrarHor($(".iconocontacto.movil"));
         
         }
         
         
         
         $(document).ready(  function(){
           
           $(window).resize( ajustar );
         
         });
         
         
         function centrarVert(elemento){
          altura1=elemento.parent().height();
          altura2=elemento.height();
          if (altura1>=altura2) {
           elemento.css("margin-top",(altura1/2)-(altura2/2)+"px");
         
         }else{
           elemento.css("margin-top","20px");
         };
         
         
         }
         function centrarHor(elemento){
         base1=elemento.parent().width();
         base2=elemento.width();        
         elemento.css("margin-left",(base1/2)-(base2/2)+"px");
         
         }
      </script>
   </head>
   <body>
      <?php 
         require_once'menu.php';
         ?>
      <div class="row-fluid parallax-seccion" id="contribucion-ecuador" style="background-image: url('asset/img/banners/contactos/IMg-Contacto-home.jpg'); background-position: 50% 50%;">
         <div class="span12 text-center contenedor-centrar">
            <h1 class="seccion-titular texto-blanco">Contactos</h1>
         </div>
      </div>
      <div class="row-fluid">
         <div id="contactos-wrap" >
            <div class="row-fluid">
               <div class="leyenda">
                  <div class="row-fluid">
                     <div class="span10 offset1 tituloseccion">
                        <div class="textocentrado">COMUNÍQUESE CON NOSOTROS</div>
                     </div>
                  </div>
                  <div class="row-fluid iconosContacto hidden-desktop hidden-tablet">
                     <div class="span3 text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-Direccion.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Dirección</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha"><strong>Guayaquil: </strong>Km. 16,5 Vía a Daule, Guayaquil</div>
                              <div class="direccionFicha"><strong>Quito: </strong>Av. Francisco de Orellana, Parroquia Cumbaya</div>
                           </div>
                        </div>
                     </div>
                     <div class="span3 text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-Telefono.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Teléfono</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha"><strong>Guayaquil: </strong>(04) 2162088</div>
                              <div class="direccionFicha"><strong>Quito: </strong>(02) 3978600</div>
                           </div>
                        </div>
                     </div>
                     <div class="span3 text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-Atencion-al-cliente.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Atención al cliente</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha">1800 012 345</div>
                           </div>
                        </div>
                     </div>
                     <div class="span3 text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-etica.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Ética</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha">1800 000 000</div>
                           </div>
                        </div>
                     </div>
                     <div class="span3 text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-Eventos.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Eventos</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha">1800 012 345</div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="row-fluid iconosContacto hidden-phone">
                     <div class="iconoCont text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-Direccion.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Dirección</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha"><strong>Guayaquil: </strong>Km. 16,5 Vía a Daule, Guayaquil</div>
                              <div class="direccionFicha"><strong>Quito: </strong>Av. Francisco de Orellana, Parroquia Cumbaya</div>
                           </div>
                        </div>
                     </div>
                     <div class="iconoCont text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-Telefono.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Teléfono</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha"><strong>Guayaquil: </strong>(04) 2162088</div>
                              <div class="direccionFicha"><strong>Quito: </strong>(02) 3978600</div>
                           </div>
                        </div>
                     </div>
                     <div class="iconoCont text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-Atencion-al-cliente.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Atención al cliente</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha">1800 012 345</div>
                           </div>
                        </div>
                     </div>
                     <div class="iconoCont text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-etica.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Ética</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha">1800 000 000</div>
                           </div>
                        </div>
                     </div>
                     <div class="iconoCont text-center">
                        <div class="row-fluid">
                           <div class="span12">
                              <img class="img-responsive" src="asset/img/iconos/Icon-Eventos.png">
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="tituloFichaContacto">
                                 <p>Eventos</p>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span12">
                              <div class="direccionFicha">1800 012 345</div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="row-fluid">
                     <div class="span8 offset2">
                        <div class="textocentrado subtitulo subtituloNegritaMayus">Ingrese en una de las opciones según sea su necesidad.</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row-fluid fichas visible-desktop visible-tablet">
               <div class="acceso flotadores">
                  <img src="asset/img/contactos/1-Icono-Clientes-nuevos.jpg" class="" alt="">
                  <a href="contactenos.php" class="caption-accesocontacto" >
                     <div class="rojo">
                        <div class=" texto-acceso2">
                           Desea comprar/vender nuestros productos.
                        </div>
                        <div class="iconocontacto">
                           <img src="asset/img/Icono-Mas.png" alt="">
                        </div>
                     </div>
                  </a>
               </div>
               <div class="acceso flotadores">
                  <img src="asset/img/contactos/2-Icono-Soluciones.jpg" class="" alt="">
                  <a href="contactenos.php" class="caption-accesocontacto" >
                     <div class="rojo">
                        <div class=" texto-acceso2">
                           Problemas con la entrega/mantenimiento/toma de pedidos
                        </div>
                        <div class="iconocontacto">
                           <img src="asset/img/Icono-Mas.png" alt="">
                        </div>
                     </div>
                  </a>
               </div>
               <div class="acceso flotadores">
                  <img src="asset/img/contactos/3-Trabajadores.jpg" class="" alt="">
                  <a href="trabajaencn.php" class="caption-accesocontacto" >
                     <div class="rojo">
                        <div class=" texto-acceso2">
                           Quieres trabajar en CN
                        </div>
                        <div class="iconocontacto">
                           <img src="asset/img/Icono-Mas.png" alt="">
                        </div>
                     </div>
                  </a>
               </div>
               <!-- <div class="acceso flotadores">
                  <img src="asset/img/contactos/7-Visita-Planta.jpg" class="" alt="">
                  <a href="visita.php" class="caption-accesocontacto" >
                     <div class="rojo">
                        <div class=" texto-acceso2">
                           Planificar una visita a la planta
                        </div>
                        <div class="iconocontacto">
                           <img src="asset/img/Icono-Mas.png" alt="">
                        </div>
                     </div>
                  </a>
               </div> -->
               <div class="acceso flotadores">
                  <img src="asset/img/contactos/4-Distribuidores.jpg" class="" alt="">
                  <a href="contactenos.php" class="caption-accesocontacto" >
                     <div class="rojo">
                        <div class=" texto-acceso2">
                           Desea distribur nuestros productos
                        </div>
                        <div class="iconocontacto">
                           <img src="asset/img/Icono-Mas.png" alt="">
                        </div>
                     </div>
                  </a>
               </div>
               <!-- <div class="acceso flotadores">
                  <img src="asset/img/contactos/5-Eventos.jpg" class="" alt="">
                  <a href="contactenos.php" class="caption-accesocontacto" >
                     <div class="rojo">
                        <div class=" texto-acceso2">
                           Compra de javas/barriles o carros tanque
                        </div>
                        <div class="iconocontacto">
                           <img src="asset/img/Icono-Mas.png" alt="">
                        </div>
                     </div>
                  </a>
               </div> -->
               <div class="acceso flotadores ultimo">
                  <img src="asset/img/contactos/6-Proveedores.jpg" class="" alt="">
                  <a href="contactenos.php" class="caption-accesocontacto" >
                     <div class="rojo">
                        <div class=" texto-acceso2">
                           Desea proveer nuestros productos
                        </div>
                        <div class="iconocontacto">
                           <img src="asset/img/Icono-Mas.png" alt="">
                        </div>
                     </div>
                  </a>
               </div>
               <!-- <div class="acceso flotadores ultimo">
                  <img src="asset/img/contactos/7-Visita-Planta.jpg" class="" alt="">
                  <a href="contactenos.php" class="caption-accesocontacto" >
                     <div class="rojo">
                         
                        <div class=" texto-acceso2">
                           Planificar una visita a la planta
                        </div>
                         
                        <div class="iconocontacto">
                          <img src="asset/img/Icono-Mas.png" alt="">
                        </div>
                     </div>
                  </a>
                  </div> -->
            </div>
            <div class="row-fluid fichas visible-phone">
               <div class="span2 fichacontacto ">
                  <div class="acceso">
                     <img src="asset/img/contactos/1-Icono-Clientes-nuevos.jpg" class="" alt="">
                     <a href="contactenos.php" class="caption-accesocontacto" >
                        <div class="rojo">
                           <div class=" texto-acceso2 movil">
                              Desea comprar / vender nuestros productos.
                           </div>
                           <div class="iconocontacto movil">
                              <img src="asset/img/Icono-Mas.png" alt="">
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="span2 fichacontacto">
                  <div class="row-fluid">
                     <div class="acceso">
                        <img src="asset/img/contactos/2-Icono-Soluciones.jpg" class="" alt="">
                        <a href="contactenos.php" class="caption-accesocontacto" >
                           <div class="rojo">
                              <div class=" texto-acceso2 movil">
                                 Problemas con la entrega / mantenimiento / toma de pedidos
                              </div>
                              <div class="iconocontacto movil">
                                 <img src="asset/img/Icono-Mas.png" alt="">
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="span2 fichacontacto">
                  <div class="acceso">
                     <img src="asset/img/contactos/3-Trabajadores.jpg" class="" alt="">
                     <a href="trabajaencn.php" class="caption-accesocontacto" >
                        <div class="rojo">
                           <div class=" texto-acceso2 movil">
                              Quieres trabajar en CN
                           </div>
                           <div class="iconocontacto movil">
                              <img src="asset/img/Icono-Mas.png" alt="">
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- <div class="span2 fichacontacto">
                  <div class="acceso">
                     <img src="asset/img/contactos/7-Visita-Planta.jpg" class="" alt="">
                     <a href="visita.php" class="caption-accesocontacto" >
                        <div class="rojo">
                           <div class=" texto-acceso2 movil">
                              Planificar una visita a la planta
                           </div>
                           <div class="iconocontacto movil">
                              <img src="asset/img/Icono-Mas.png" alt="">
                           </div>
                        </div>
                     </a>
                  </div>
               </div> -->
               <div class="span2 fichacontacto">
                  <div class="acceso">
                     <img src="asset/img/contactos/4-Distribuidores.jpg" class="" alt="">
                     <a href="contactenos.php" class="caption-accesocontacto" >
                        <div class="rojo">
                           <div class=" texto-acceso2 movil">
                              Desea distribur nuestros productos
                           </div>
                           <div class="iconocontacto movil">
                              <img src="asset/img/Icono-Mas.png" alt="">
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- <div class="span2 fichacontacto">
                  <div class="acceso">
                     <img src="asset/img/contactos/5-Eventos.jpg" class="" alt="">
                     <a href="contactenos.php" class="caption-accesocontacto" >
                        <div class="rojo">
                           <div class=" texto-acceso2 movil">
                              Compra de javas / barriles o carros tanque
                           </div>
                           <div class="iconocontacto movil">
                              <img src="asset/img/Icono-Mas.png" alt="">
                           </div>
                        </div>
                     </a>
                  </div>
               </div> -->
               <div class="span2 fichacontacto ultimo">
                  <div class="acceso">
                     <img src="asset/img/contactos/6-Proveedores.jpg" class="" alt="">
                     <a href="contactenos.php" class="caption-accesocontacto" >
                        <div class="rojo">
                           <div class=" texto-acceso2 movil">
                              Desea proveer nuestros productos
                           </div>
                           <div class="iconocontacto movil">
                              <img src="asset/img/Icono-Mas.png" alt="">
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <!-- <div class="span2 fichacontacto ultimo">
                  <div class="acceso">
                     <img src="asset/img/contactos/7-Visita-Planta.jpg" class="" alt="">
                     <a href="contactenos.php" class="caption-accesocontacto" >
                        <div class="rojo">
                            
                           <div class=" texto-acceso2 movil">
                              Planificar una visita a la planta
                           </div>
                            
                           <div class="iconocontacto movil">
                             <img src="asset/img/Icono-Mas.png" alt="">
                           </div>
                        </div>
                     </a>
                  </div>
                  </div> -->
            </div>
         </div>
      </div>
      <footer>
         <?php require_once'footer.php'; ?>
      </footer>
      <script type="text/javascript">
         $(document).ready(function(){
           $(".acceso").hover(function() {
                 //$(this).find('.caption-acceso').stop(true, true).fadeIn('200');
                 $(this).find('.iconocontacto').stop(true, true).fadeIn('200');
               }, function() {
                 //$(this).find('.caption-acceso').stop(true, true).fadeOut('200');
                 $(this).find('.iconocontacto').stop(true, true).fadeOut('200');
               });
         });
      </script>
   </body>
</html>
