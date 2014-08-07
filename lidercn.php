<!DOCTYPE html>
<html>
   <head>
      <?php require_once 'header.php' ?>
      <script  type="text/javascript" >
      $('#navegacion').scrollspy();
            $('[data-spy="scroll"]').each(function () {
         
            var $spy = $(this).scrollspy('refresh');
            });
         $(window).load(function(){
            alturapadre=$(".fullficha").parent().height();
              $(".fullficha").height(alturapadre);


                   ajustar();
                   $(".accesocontactoempresa").hide();
                   // anchoficha=$("accesocontactoempresa").parent().width();
                   // $("accesocontactoempresa").width(anchoficha);

         
         
         });
         function ajustar(){
         
         
             var ancho = $(window).width(); 
             var ancho_aplicar = ancho / 5 ;
             var ancho_aplicar = ancho_aplicar - 1;
             //$(".flotadores").css("width",   ancho_aplicar + "px");
             $(".flotadores").width(ancho_aplicar + "px")
             $(".flotadores").height($(".flotadores").width());
             $(".flotadores").height($(".flotadores").width());
            
             //$('.imagenfull').each(centrarVert($(this)));
             centrarVert($(".imagenfull"));
             $('.texto-acceso2').each(function () {
               centrarVert($(this));
             });
              
              //centrarVert($(".texto-acceso2"));

             
             
         
         }
         
         
         
         $(document).ready(  function(){
          ajustar();
           
             $(window).resize( ajustar );
         
         });
         
         
           function centrarVert(elemento){
              altura1=elemento.parent().height();
              //alert( "padre"+altura1);
              altura2=elemento.height();
              //alert("hijo"+altura2);
              //alert("REstan"+((altura1/2)-(altura2/2)));
              // if (altura1>=altura2) {
               elemento.css("margin-top",((altura1/2)-(altura2/2)));
         
              // }else{
                 // elemento.css("margin-top","20px");
              // };
              
         
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
         
      <div id="progreso" class="row-fluid parallax-seccion" style="background-image: url('asset/img/nosotros/9-IMG-Carlos-Habencio-Fernandez.jpg'); background-position: 50% 50%;">
         <div class="contenedor-centrar span12">
            <div class="row-fluid">
               <div class="span5 offset2">
                  <p class="titulogrande texto-rojo text-left">CN presenta a su nuevo líder</p>
               </div>
            </div>
            <div class="sangria50 row-fluid" style="margin-bottom:100px;">
               <div class="span4 offset2 text-left">
                  <p class="titulomediano color333436 titulolider">Carlos Habencio Fernández,<br>
es desde el pasado 1 de julio del 2013, el nuevo Presidente Ejecutivo de Cervecería Nacional (CN).</p>
               </div>
            </div>
            <!-- <div class="row-fluid">
               <div class="span10 offset1 text-center">
                  <p class="line0 subtitulo color333436">Su portafolio de marcas lo conforman las cervezas Pilsener, Pilsener Light, Club Premium, Club Premium Roja, Miller Genuine Draft y Dorada, así como Pony Malta y Agua Manantial.</p>
                  <p class="line0 subtitulo color333436">El Gobierno Corporativo de CN está conformado por el Directorio asignado por los accionistas; por el presidente ejecutivo, señor Carlos H. Fernández y por las vicepresidencias de Finanzas, Asuntos Corporativos, Manufactura, Ventas, Recursos Humanos, Distribución, Mercadeo y Cadena de Abastecimiento.</p>
                  <p class="line0 subtitulo color333436">CN cuenta con una gran Reputación en Ecuador debido a su forma transparente y ética de actuar, en cuya trayectoria siempre ha sido respetuosa de las leyes y fiel en el cumplimiento de todas sus obligaciones con el Estado, lo que la convierten en un importante motor de crecimiento y empleo.</p>
                  <p class="line0 subtitulo color333436">El Modelo de Negocio de CN se fundamenta en desarrollar el mercado para satisfacer las necedades de sus clientes, potencializar las capacidades de sus colaboradores, generar rentabilidad y fortalecer su reputación.</p>
               </div>
            </div> -->
         </div>
      </div>
      <div id="vision" class="row-fluid sangria50">
         <div class="span12">
            <div class="row-fluid ">
               <div class="span3 offset1 text-center">
                  <ol class="breadcrumb">
                    <li><a href="index.php">Inicio</a><span class="divider">/</span></li>
                    <li><a href="empresa.php">Quienes somos</a><span class="divider">/</span></li>
                    <li class="active">Carlos Habencio Fernández</li>
                  </ol>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span10 offset1 text-center">
                  <p class="subtitulo sangria50b">Nacido en Honduras, casado y con tres hijos, el nuevo <br>
Presidente de Cervecería Nacional realizó sus estudios en México y Brasil hasta alcanzar una maestría en Administración de Negocios del Instituto Centroamericano de Administración de Empresas (INCAE) de Nicaragua.</p>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span10 offset1 text-center">
                  <p class="subtitulo sangria50b">El ingreso de Carlos Habencio Fernández a la industria cervecera se dio en 1989, y
desde entonces ha ocupado importantes posiciones en el área comercial.
Su buen desempeño motivó a SABMiller nombrarlo Vicepresidente de Ventas y Distribución
en Cervecería Hondureña (2002-2007) y Vicepresidente de Ventas de Backus en Perú (2007-2009).
Ocupó la Presidencia de Industrias La Constancia en El Salvador (2009-2013), cuya gestión permitió
un crecimiento importante de esta operación hasta convertirse en un ejemplo de mejores prácticas para la región.</p>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span10 offset1 text-center">
                  <p class="subtitulo ">En Ecuador, Carlos Habencio reemplaza en el cargo de Alfonso Bosch, con el firme propósito de
consolidar el liderazgo de la cervecera ecuatorianaa través de un modelo colaborativo y motivador
que permita satisfacer las necesidades de nuestros clientes y consumidores, fortalecer las relaciones
con nuestros grupos de interés y continuar generando valor a la comunidad, manteniendo el histórico
aporte de CN al desarrollo y bienestar del Ecuador y su gente.</p>
               </div>
            </div>
            <!-- <div class="row-fluid">
               <div class="span6 offset3 text-center">
                  <p class="subtitulogrande">texto</p>
               </div>
            </div> -->
           <!--  <div class="row-fluid">
               <div class="span6 offset3 text-center">
                  <p class="subtitulo bottom0">Las marcas de elección</p>
                  <p class="subtitulo bottom0">La inversión de la elección</p>
                  <p class="subtitulo bottom0">El empleador de la elección</p>
                  <p class="subtitulo bottom0">El socio de la elección</p>
               </div>
            </div> -->
         </div>
      </div>
      <!-- <div id="mision" class="row-fluid sangria50">
         <div class="span12">
            <div class="row-fluid ">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion">Misión</p>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span6 offset3 text-center">
                  <p class="subtitulogrande">"Poseer y desarrollar marcas en los segmentos elegidos de bebidas que sean la primera elección yde los cunsumidores y clientes elección Ecuador"</p>
               </div>
            </div>
         </div>
      </div>
      <div id="valores" class="row-fluid sangria50">
         <div class="span12">
            <div class="row-fluid ">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion">Valores</p>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span8 offset2 text-center">
                  <p class="subtitulogrande">"Nuestra gente es nuestra ventajas más duradera<br>La responsabilidad es clara e individual<br>Trabajamos y ganamos en equipo<br>Comprendemos y respetamos a nuestros clientes y consumidores<br>Nuestra reputación es inidivisible"</p>
               </div>
            </div>
         </div>
      </div> -->
      
      <!-- <div id="cn_ec" class="row-fluid">
         <div class="sangria50 span12">
            <div class="row-fluid ">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion">Cervecería Nacional en el Ecuador</p>
               </div>
            </div>
            <div class="row-fluid ">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion"><img src="asset/img/nosotros/7-IMG-mapa-_2.png"></p>
               </div>
            </div>
         </div>
      </div> -->
      <!-- <div id="sambmiller" class="row-fluid parallax-seccion" style="background-image: url('asset/img/5-IM-Sab-Miller.jpg'); background-position: 50% 50%;">
         <div class="contenedor-centrar span12">
            <div class="row-fluid">
               <div class="span6 offset3">
                  <p class="titulogrande texto-rojo text-center">Una operación de excelencia prensente en todos los continentes</p>
               </div>
            </div>
            <div class="sangria25 row-fluid">
               <div class="span6 offset3 text-center">
                  <p class="subtitulomediano texto-blanco">SABMiller plc es uno de lo más importantes grupos cerveceros del mundo, con más de 70 mil colaboradores y operaciones en 75 paises de todos los continentes</p>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span6 offset3 text-center">
                  <p class="line0 subtitulo texto-blanco">Cuenta con más de 200 marcas, entre las cuales las más conocidas a nivel mundial se encuentran Pilsener Urquell, Peroni Nastro Azzurro, Miller genuine Draft y Grolsch.</p>
                  <p class="line0 subtitulo texto-blanco">En latinoamérica, SAMBMiller está presente en El Salvador, Honduras, Panamá, Colombia, Ecuador, Perú y Argentina. Así mismo, tiene oficinas de representación en otros países de la región.</p>
                  <p class="line0 subtitulo texto-blanco">Las operaciones de SABMiller se caracterizan por una cultura de excelencia operativa, la elaboración de productos de alta calidad, la innovación y la promoción de desarrollo sostenible, siempre en énfasis de aportar al crecimiento de los paises en lso que se desarrolla.</p>
               </div>
            </div>
         </div>
          <div class="vert-text">
            <div class="span5 offset6 text-left">
               <h1 class="seccion-titular texto-negro">Consumo Responsable</h1>
               <br />
               <h3 class="seccion-subtitular texto-negro">Sabor distinguido, experiencia única.</h3>
               <br /><br />
               <div class="seccion-texto texto-negro">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  <br><br>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  <br><br><br><br>
               </div>
            </div>
            </div> -->
      <!-- </div>  -->
      <!-- <div id="ejes" class="row-fluid fichastop fichasbot visible-desktop">
         <div class="acceso fullficha flotadores colorf4bb2c">
            <img src="asset/img/iconos/10-Alcohol.png" class="imagenfull" alt="">
            <a href="#edadModal" class="colorf4bb2c  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar contenedor-centrar texto-acceso2">
                     <p class="subtitulomediano negrita">Alcohol</p>
                     <p class="subtitulo">Consumo Moderado</p>
                     Promovemos el consumo moderado del alcochol y no a la venta de menores. Nos preocupa que nuestra publicidad cervecera aliente el disfrute de la vida con moderación.
                  </div>
                   
               </div>
            </a>
         </div>
         <div class="acceso fullficha flotadores colorda4156">
            <img src="asset/img/iconos/9-Derechos-Humanos.png" class="imagenfull" alt="">
            <a href="#edadModal" class="colorda4156  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar texto-acceso2">
                     <p class="subtitulomediano negrita">Derechos Humanos</p>
                     <p class="subtitulo">Igualdad de oportunidades</p>
                     Practicamos el respeto a los demás y la igualdad de oportunidades independientemente de su raza, color, sexo, idioma, religión, origen, condición y capacidades especiales, acorde con la Declaración Universal de los Derechos Humanos.
                  </div>
                   
               </div>
            </a>
         </div>
         <div class="acceso fullficha flotadores color0073b2">
            <img src="asset/img/iconos/8-Agua.png" class="imagenfull" alt="">
            <a href="#edadModal" class="color0073b2  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar texto-acceso2">
                      <p class="subtitulomediano negrita">Agua</p>
                     <p class="subtitulo">Producir con eficiencia y menos agua</p>
                     La importancia que le damos al agua y su buen uso lo demostramos en su consumo cada vez más eficiente en nuestros procesos de producción.
                   
               </div>
               </div>
            </a>
         </div>
         <div class="acceso fullficha flotadores colorbbbd42">
            <img src="asset/img/iconos/7-Empaque.png" class="imagenfull" alt="">
            <a href="#edadModal" class="colorbbbd42  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar texto-acceso2">
                     <p class="subtitulomediano negrita">Empaque</p>
                     <p class="subtitulo">Reutilizar y reciclar envases</p>
                     Reutilizamos y reciclamos el 92% de nuestros envases en todo proceso de producción. Apoyamos otras iniciativas para la conservación del ambiente, como la campaña de reciclaje a nivel nacional.
                  </div>
                   
               </div>
            </a>
         </div>
         <div class="acceso fullficha flotadores ultimo coloreb9f41">
            <img src="asset/img/iconos/6-Desperdicios.png" class="imagenfull" alt="">
            <a href="#edadModal" class="coloreb9f41  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar texto-acceso2">
                     <p class="subtitulomediano negrita">Desarrollo de Cadena de Valor</p>
                     <p class="subtitulo">Promover negocios de proveedores y distribuidores</p>
                     Manejamos nuestra cadena de valor con visión de largo plazo, estimulando la produccion de cebada cervecera y arrocillo como materia prima, desarrollando proveedores locales para incorporarlos a nuestra operación.
                  </div>
                   
               </div>
            </a>
         </div>

      </div> -->
      <!-- <div class="row-fluid fichasbot visible-desktop">
         <div class="acceso fullficha flotadores color0073b2">
            <img src="asset/img/iconos/5-Desperdicios.png" class="imagenfull" alt="">
            <a href="#edadModal" class="color0073b2  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar texto-acceso2">
                     <p class="subtitulomediano negrita">Derechos Humanos</p>
                     <p class="subtitulo">Igualdad de oportunidades</p>
                     Practicamos el respeto a los demás y la igualdad de oportunidades independientemente de su raza, color, sexo, idioma, religión, origen, condición y capacidades especiales, acorde con la Declaración Universal de los Derechos Humanos
                  </div>
                   
               </div>
            </a>
         </div>
         <div class="acceso fullficha flotadores colorbbbd42">
            <img src="asset/img/iconos/4-Desperdicios.png" class="imagenfull" alt="">
            <a href="#edadModal" class="colorbbbd42  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar texto-acceso2">
                     <p class="subtitulomediano negrita">Energía de Carbono</p>
                     <p class="subtitulo">Reducir la huella de carbono</p>
                     Buscamos ser más eficientes en el consumo de los recursos con prácticas de producción más limpias. Estamos comprometidos en nuestras operaciones a disminuir nuestra huella de carbono.
                  </div>
                   
               </div>
            </a>
         </div>
         <div class="acceso fullficha flotadores coloreb9f41">
            <img src="asset/img/iconos/3-Comunidades-.png" class="imagenfull" alt="">
            <a href="#edadModal" class="coloreb9f41  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar texto-acceso2">
                     <p class="subtitulomediano negrita">Comunidades</p>
                     <p class="subtitulo">trabajar por el bienestar de la comunidad</p>
                     El crecimiento de nuestro negocio está ligado al desarrollo de las comunidades en las que operamos, por eso hacemos inversión social con programas como Siembra Futuro, apoyando a la microempresa.
                  </div>
                   
               </div>
            </a>
         </div>
         <div class="acceso fullficha flotadores colorda4156">
            <img src="asset/img/iconos/2-VIH.png" class="imagenfull" alt="">
            <a href="#edadModal" class="colorda4156  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar texto-acceso2">
                     <p class="subtitulomediano negrita">VIH</p>
                     <p class="subtitulo">Informar y prevenir la enfermedad</p>
                     En nuestras capañas de salud realizamos charlas y exámenes voluntarios para que nuestros colaboradores y sus familias puedan provenir el contagio del VIH SIDA.
                  </div>
                   
               </div>
            </a>
         </div>
         <div class="acceso fullficha flotadores ultimo colorf4bb2c">
            <img src="asset/img/iconos/1-Transparencia-y-Etica-copy.png" class="imagenfull" alt="">
            <a href="#edadModal" class="colorf4bb2c  accesocontactoempresa" data-toggle="modal">
               <div class="rojo">
                  <div class="contenedor-centrar texto-acceso2">
                     <p class="subtitulomediano negrita">Transparencia y Ética</p>
                     <p class="subtitulo">Éticos y transparentes en todo lo que hacemos</p>
                     Reportamos de manera transparente a a accionistas, autoridades, medios y sociedad en general, el desempeño financiero y todas nuestras actividades, regidas por nuestro Código de Ética.
                  </div>
                   
               </div>
            </a>
         </div>
      </div> -->
     <!--  <div id="cadena_de_valor" class="row-fluid fondomapa">
         <div class="sangria50 span12">
            <div class="row-fluid ">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion">Nuestra Contribución en nuestra Cadena de Valor</p>
               </div>
            </div>
            <div class="row-fluid fondo">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion"><img src="asset/img/nosotros/6-CN-web-Mapa-contribucion_VF.png"></p>
               </div>
            </div>
         </div>
      </div> -->
      <div class="row-fluid parallax-seccion" id="seccion-contacto" style="background-image: url('asset/img/home/IMg-Contacto-home.jpg'); background-position: 50% 50%;">
         <div class="span5 offset1 text-left contenedor-contacto contenedor-centrar">
            <h1 class="seccion-titular texto-blanco">CONTÁCTENOS</h1>
            <hr class="hr-noticia">
            <h3 class="seccion-subtitular texto-blanco">DESCUBRE TODO LO QUE CERVECERÍA NACIONAL TIENE PARA TÍ.</h3>
            <br /><br />
            <a href="" class="btn btn-cn btn-cn-pq">CONTACTAR</a>
         </div>
      </div>
      <footer>
         <?php require_once'footer.php'; ?>
      </footer>
      <script type="text/javascript">
         $(document).ready(function(){
          $(".acceso.flotadores").hover(function() {
                          //$(this).find('.caption-acceso').stop(true, true).fadeIn('200');
                          
                          $(this).find('.accesocontactoempresa').stop(true, true).show('slow');
                          }, function() {
                          //$(this).find('.caption-acceso').stop(true, true).fadeOut('200');
                       
                          $(this).find('.accesocontactoempresa').stop(true, true).hide('fast');
                        });
         });
      </script>
   </body>
</html>
