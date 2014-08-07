<!DOCTYPE html>
<html>
<head>
   <?php require_once 'header.php' ?>
</head>
<body data-spy="scroll" data-target="#navegacion">
   <?php require_once'menu.php'; ?>
   <div id="navegacion" class="visible-desktop1 navbar navcion" style="display:none;">
      <ul id="navegacionbar" class="nav">
         <li  class="ver badge navegacion-menu-item">
            <a href="#actividades-wrap" style="text-decoration:none;color:#FFF" title="actividades-wrap">
               <div class="lista">Inicio</div>
            </a>
         </li>
         <li  class="ver badge navegacion-menu-item">
            <a href="#proyectos" style="text-decoration:none;color:#FFF" title="proyectos">
               <div class="lista">Proyectos</div>
            </a>
         </li>
         <li  class="ver badge navegacion-menu-item">
            <a href="#sociales" style="text-decoration:none;color:#FFF" title="sociales">
               <div class="lista">Redes Sociales</div>
            </a>
         </li>
         <li  class="ver badge navegacion-menu-item">
            <a href="#visita" style="text-decoration:none;color:#FFF" title="visita">
               <div class="lista">Visita a Planta</div>
            </a>
         </li>
         <li  class="ver badge navegacion-menu-item ultimo-item">
            <a href="#bannerSocial" style="text-decoration:none;color:#FFF" title="bannerSocial">
               <div class="lista">Contáctenos</div>
            </a>
         </li>
            <!-- <li  class="ver badge navegacion-menu-item">
               <a href="#historia" style="text-decoration:none;color:#FFF" title="Historia">
                  <div class="lista">Historia</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#cn_ec" style="text-decoration:none;color:#FFF" title="CN en Ecuador">
                  <div class="lista">CN en Ecuador</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#sambmiller" style="text-decoration:none;color:#FFF" title="SABMiller en el mundo">
                  <div class="lista">SABMiller en el mundo</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item ultimo-item">
               <a href="#progreso" style="text-decoration:none;color:#FFF" title="Aportando al progreso">
                  <div class="lista">Aportando al progreso</div>
               </a>
            </li> -->
         </ul>
      </div>
      <div id="actividades-wrap" class="secciones">
         <div id="actividadesCarrousel" class="carousel slide" >
            <ol class="carousel-indicators home">
               <li data-target="#actividadesCarrousel" data-slide-to="0" class="active"></li>
               <li data-target="#actividadesCarrousel" data-slide-to="1"></li>
               <li data-target="#actividadesCarrousel" data-slide-to="2"></li>
               <!-- <li data-target="#actividadesCarrousel" data-slide-to="2"></li> -->
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
               <div class="item active">
                  <div class="row-fluid">
                     <div  class="span12" >
                        <div class="row text-center bienvenido">
                           <div class="span6 offset1  contenedor-centrarPad">
                              <h1 class="titular-slider titular-slider-0 texto-blanco">
                                 BIENVENIDOS
                              </h1>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            <!-- Carousel nav -->
               <!-- <a class="carousel-control left flecha-roja flecha-roja-izq" href="#actividadesCarrousel" data-slide="prev">
                  &nbsp;
               </a> -->
               <a class="btn-cn btn-transparent carousel-control left" href="#actividadesCarrousel" data-slide="prev">
                  <img class="contenedor-centrar" src="asset/img/Flecha-izquierda.png">
               </a>
               <a class="btn-cn btn-transparent carousel-control right" href="#actividadesCarrousel" data-slide="next">
                  <img class="contenedor-centrar" src="asset/img/Flecha-derecha.png">
               </a>
               <!-- <a class="carousel-control right flecha-roja flecha-roja-der" href="#actividadesCarrousel" data-slide="next">
                  &nbsp;
               </a> -->
            </div>
         </div>

         <!-- proyectos    -->
         <div id="proyectos" class="secciones" >
            <div  class="row-fluid visible-desktop" >
               <div class="span2 proyecto-block proyecto0" >
                  <a href="empresa.php" class="proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              QUIENES SOMOS
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Nuestra gente es nuestra ventaja más duradera.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/1-Nuestra-Empresa.jpg" >
               </div>
               <div  class="span2 proyecto-block proyecto1" >
                  <a href="desarrollo-sostenible.php#desarrollo-comunidad" class="proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              COMUNIDAD
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Contribuyendo al desarrollo de las comunidades medainte varios proyectos.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/2-Comunidad.jpg" >
               </div>
               <div class="span2 proyecto-block proyecto2" >
                  <a href="desarrollo-sostenible.php#contribucion-ecuador" class="proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              CONTRIBUCIÓN AL ECUADOR
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Jornadas de capacitación en diversas áreas a dueños de tiendas y negocios.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/3-Contribucion-al-Ecuador.jpg" >
               </div>
               <div  class="span2 proyecto-block proyecto3" >
                  <a href="desarrollo-sostenible.php#procesos-amigables" class="proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              PROCESOS AMIGABLES CON EL AMBIENTE
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Garantizando una producción limpia cuidando el medio ambiente.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/4-Desarrollo-Sostenible.jpg" >
               </div>
               <div  class="span2 proyecto-block proyecto4" >
                  <a href="desarrollo-sostenible.php#consumo-responsable" class="proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              CONSUMO RESPONSABLE
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Promover el consumo responsable, la no venta a menores de edad y la seguridad vial.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/5-Consumo-Moderado.jpg" >
               </div>
               <div  class="span2 proyecto-block proyecto5" >
                  <a href="desarrollo-sostenible.php#cerveza-bienestar" class="proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              CERVEZA Y BIENESTAR
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Historia y producción saludable.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/6-Cultura-Cervecera.jpg" >
               </div>
            </div>
            <div class="row-fluid hidden-desktop">
               <div class="homeBloq proyecto-block proyecto0" >
                  <a href="empresa.php" class="bloqint proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              QUIENES SOMOS
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Nuestra gente es nuestra ventaja más duradera.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/1-Nuestra-Empresa.jpg" >
               </div>
               <div  class="homeBloq proyecto-block proyecto1" >
                  <a href="desarrollo-sostenible.php#desarrollo-comunidad" class="bloqint proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              COMUNIDAD
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Contribuyendo al desarrollo de las comunidades medainte varios proyectos.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/2-Comunidad.jpg" >
               </div>
               <div class="homeBloq proyecto-block proyecto2" >
                  <a href="desarrollo-sostenible.php#contribucion-ecuador" class="bloqint proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              CONTRIBUCIÓN AL ECUADOR
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Jornadas de capacitación en diversas áreas a dueños de tiendas y negocios.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/3-Contribucion-al-Ecuador.jpg" >
               </div>
               <div  class="homeBloq proyecto-block proyecto3" >
                  <a href="desarrollo-sostenible.php#procesos-amigables" class="bloqint proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              PROCESOS AMIGABLES CON EL AMBIENTE
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Garantizando una producción limpia cuidando el medio ambiente.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/4-Desarrollo-Sostenible.jpg" >
               </div>
               <div  class="homeBloq proyecto-block proyecto4" >
                  <a href="desarrollo-sostenible.php#consumo-responsable" class="bloqint proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              CONSUMO RESPONSABLE
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Promover el consumo responsable, la no venta a menores de edad y la seguridad vial.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/5-Consumo-Moderado.jpg" >
               </div>
               <div  class="homeBloq proyecto-block proyecto5" >
                  <a href="desarrollo-sostenible.php#cerveza-bienestar" class="bloqint proyecto-contenido text-center">
                     <div class="row-fluid ">
                        <div class="span10 text-center offset1 acceso-centrar">
                           <h3 class="acceso-titulo">
                              CERVEZA Y BIENESTAR
                           </h3>
                           <hr class="acceso-divisor" />
                           <div class="acceso-texto">
                              Historia y producción saludable.
                           </div>
                           <br />
                           <img src="asset/img/Icono-Mas.png" class="img-icono-mas">
                           <br />
                        </div>
                     </div>
                  </a>
                  <img src="asset/img/proyectos/6-Cultura-Cervecera.jpg" >
               </div>
            </div>
         </div>

         <div id="sociales" class="row-fluid parallax-seccion secciones" style="background-image: url('asset/img/home/IMG-redes-sociales.jpg'); background-position: 50% 85px;">
            <div class="span12 contenedor-centrar">
               <div class="row-fluid">
                  <div class="span12">
                     <div class="row-fluid">
                        <div class="span8 offset2 text-center">
                           <br /><br /><br />
                           <p class="seccion-subtitular seccion-texto-redes texto-blanco">
                              Te invitamos a formar parte de nuestras redes sociales, donde podrás conocer toda la información acerca de nuestros proyectos, novedades y muchos temas de tu interés.
                           </p>
                           <br /><br />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row-fluid">
                  <div class="span10 offset1">
                     <div class="row-fluid">
                        <ul class="ch-grid">
                           <li>
                              <a href="https://www.facebook.com/cervecerianacionalec">
                                 <div class="ch-item  ch-item-hover ch-img-1 ch-fb"  style="cursor: pointer;" >
                                    <div class="ch-info">
                                       <div class="contenedor-centrar texto-link texto-link-fb">
                                          <p>Házte fan</p>
                                          <p>/cervecerian</p>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           <!-- <div  class="buttonLinkDiv"    >
                              <a  class="buttonLink"  >   Fundador</a>
                              
                           </div> -->
                        </li>
                        <li>
                           <a href="https://twitter.com/cervecerian">
                              <div class="ch-item ch-item-hover ch-img-2 ch-tw"  style="cursor: pointer;"  >
                                 <div class="ch-info">
                                    <div class="contenedor-centrar texto-link texto-link-tw">
                                       <p>Síguenos</p>
                                       <p>@cervecerian</p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <!-- <div class="buttonLinkDiv"  >
                              <a  class="buttonLink" >Cursos</a>
                           </div> -->
                        </li>
                        <li>
                           <a href="https://www.youtube.com/user/CerveceriaEC">
                              <div class="ch-item ch-item-hover ch-img-3 ch-yt"  style="cursor: pointer;" >
                                 <div class="ch-info">
                                    <div class="contenedor-centrar texto-link texto-link-yt">
                                       <p>Suscríbete</p>
                                       <p>/CerveceriaEC</p>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <!-- <div  class="buttonLinkDiv" >
                              <a class="buttonLink" >Publicaciones</a>
                           </div> -->
                        </li>
                     </ul>
                     <!-- <div class="span4 text-center">
                        <a href="htpp://www.facebook.com/cervecerianacionalec/" class="icono-home2" target="_blank">
                            <img src="asset/img/ic-fb.png" class="">
                            <h3 class="texto-link texto-link-fb">
                                Házte fan<br />
                                /cervecerian
                            </h3>
                        </a>
                        </div>
                        <div class="span4 text-center">
                        <a href="http://www.twitter.com/cervecerian" class="icono-home2" target="_blank">
                            <img src="asset/img/ic-tw.png" class="">
                            <h3 class="texto-link texto-link-tw">
                                Síguenos<br />
                                @cervecerian
                            </h3>
                        </a>
                        </div>
                        <div class="span4 text-center">
                        <a href="http://www.youtube.com/user/CerveceriaEC" class="icono-home2" target="_blank">
                            <img src="asset/img/ic-yt.png" class="">
                            <h3 class="texto-link texto-link-yt">
                                Suscríbete<br />
                                /CerveceriaEC
                            </h3>
                        </a>
                     </div> -->
                     <!-- <div class="span3 text-center">
                        <a href="" class="icono-home2" target="_blank">
                            <img src="asset/img/ic-in.png" class="">
                            <h3 class="texto-link texto-link-in">
                                Agréganos<br />
                                /lorep-ipsum
                            </h3>
                        </a>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="visita" class="row-fluid parallax-seccion secciones" id="seccion-contacto" style="background-image: url('asset/img/home/IMG-Visitas-Planta.jpg'); background-position: 50% 50%;">
         <div class="span10 offset1 text-left contenedor-contacto contenedor-centrar text-center">
            <h1 class="seccion-titular texto-blanco">VISITA A PLANTA</h1>
            <div class="row-fluid">
               <div class="span6 offset3">
                  <hr class="hr-noticia">
               </div>
            </div>
            <!-- <h3 class="seccion-subtitular texto-blanco">TE INVITAMOS A FORMAR PARTE.</h3> -->
            <!-- <br /><br /> -->
            <a href="visita.php" class="btn btn-cn btn-cn-pq">
               <div class="contenedor-centrar">PLANIFICAR VISITA</div>
            </a>
         </div>
      </div>
      <div id="bannerSocial" class="row-fluid parallax-seccion secciones" id="seccion-contacto" style="background-image: url('asset/img/home/IMg-Contacto-home.jpg'); background-position: 50% 50%;">
         <div class="span5 offset1 text-left contenedor-contacto contenedor-centrar">
            <h1 class="seccion-titular texto-blanco">CONTÁCTENOS</h1>
            <hr class="hr-noticia">
            <!-- <h3 class="seccion-subtitular texto-blanco">TE INVITAMOS A FORMAR PARTE.</h3> -->
            <br /><br />
            <a href="contactos.php" class="btn btn-cn btn-cn-pq">
               <div class="contenedor-centrar">CONTACTAR</div>
            </a>
         </div>
      </div>
      
      <?php require_once'footer.php'; ?>
      <script type="text/javascript">
      $(document).ready(function () {
         cargarPublicaciones();
      });
      function cargarPublicaciones(){
       $.ajax({
        url: "loadPublicacionesHome.php", 
        success:function( respuesta  ){
               // $('#actividadesCarrousel>.carousel-inner').empty();
               $('#actividadesCarrousel>.carousel-inner').append(respuesta);
               ajustarHome();
               $(".texto-slider-noticia>p").each(function(i) {
                  len = $(this).text().length;
                  if (len > 115) {
                     $(this).text(function(index, text) {
                        return text.substr(0, 115);
                     });
                     $(this).append("...");

                  }
               });
            }
         });
    }
    </script>
 </body>
 </html>