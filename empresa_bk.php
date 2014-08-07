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
          // var ancho_aplicar = ancho_aplicar - 0.5;
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
                     // ajustar();
         
                     // $(window).resize( ajustar );
                     // var offset = 80;
         
                     // $('.navbar li a').click(function(event) {
                     //   event.preventDefault();
                     //   $($(this).attr('href'))[0].scrollIntoView();
                     //   scrollBy(0, -offset);
                     // });
                     $("#myCarousel").carousel('pause');
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
   <body data-spy="scroll" data-target="#navegacion">
      <?php 
         require_once'menu.php';
         ?>
      <div id="navegacion" class="visible-desktop navbar navcion">
         <ul id="navegacionbar" class="nav">
            <li  class="ver badge navegacion-menu-item">
               <a href="#inicioEmpresa" style="text-decoration:none;color:#FFF" title="Inicio Empresa">
                  <div class="lista">Inicio</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#vision" style="text-decoration:none;color:#FFF" title="Vision">
                  <div class="lista">Misión, Visión, Valores.</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#ejes" style="text-decoration:none;color:#FFF" title="Ejes bases">
                  <div class="lista">Prioridades</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#cadena_de_valor" style="text-decoration:none;color:#FFF" title="Cadena de valor">
                  <div class="lista">Cadena de valor</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
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
            </li>
         </ul>
      </div>
      <!-- <div class="row-fluid">
         <div class="span12">
            <div class="contBanner"><img class="banner" src="asset/img/banners/empresa/Banner-Quienes-somos3.jpg" alt=""></div>
         </div>
         </div> -->
      <div id="inicioEmpresa" class="row-fluid parallax-seccion" id="contribucion-ecuador" style="background-image: url('asset/img/nosotros/2-IMG-QS-Vision-.jpg'); background-position: 50% 50%;">
         <div class="span8 text-center contenedor-centrar">
            <h1 class="seccion-titular texto-blanco">Empresa</h1>
         </div>
      </div>
      <div id="vision" class="row-fluid parallax-seccion" style="background-image: url('asset/img/nosotros/CN-quienes-somos.png'); background-position: 50% 50%; background-color:#f5f5f5;">
         <div class="span12 contenedor-centrar">
            <div class="row-fluid">
               <div class="span4 milabel">
            <div class="row-fluid">
               <div class="span10 offset2 contenedor-centrar">
                  <div class="row-fluid ">
                     <div class="span12 text-center">
                        <p class="tituloseccion">Visión</p>
                     </div>
                  </div>
                  <div class="row-fluid">
                     <div class="span12 text-center">
                        <p class="subtitulogrande mediano">Ser la compañía más admirada del Ecuador.</p>
                     </div>
                  </div>
                  <div class="row-fluid">
                     <div class="span10 offset1 text-justify">
                        <ul>
                           <!-- <li class="subtitulogrande mediano">Ser la compañia más admirada del Ecuador</li> -->
                           <li class="subtitulogrande mediano">Las marcas de elección.</li>
                           <li class="subtitulogrande mediano">La inversión de elección.</li>
                           <li class="subtitulogrande mediano">El empleador de elección.</li>
                           <li class="subtitulogrande mediano">El socio de elección.</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="span4 milabel">
            <div class="row-fluid">
               <div class="span12 contenedor-centrar">
                  <div class="row-fluid ">
                     <div class="span10 offset1 text-center">
                        <p class="tituloseccion">Misión</p>
                     </div>
                  </div>
                  <div class="row-fluid">
                     <div class="span12 text-center">
                        <p class="subtitulogrande mediano">Poseer y desarrollar marcas en los segmentos elegidos de bebidas que sean la primera elección de los consumidores y clientes en el Ecuador.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="span4 milabel">
            <div class="row-fluid">
               <div class="span12 contenedor-centrar span12">
                  <div class="row-fluid ">
                     <div class="span12 text-center">
                        <p class="tituloseccion">Valores</p>
                     </div>
                  </div>
                  <div class="row-fluid">
                     <div class="span12 text-justify">
                        <ul>
                           <li class="subtitulogrande mediano">Nuestra gente es nuestra ventaja más duradera.</li>
                           <li class="subtitulogrande mediano">La responsabilidad es clara e individual.</li>
                           <li class="subtitulogrande mediano">Trabajamos y ganamos en equipo.</li>
                           <li class="subtitulogrande mediano">Comprendemos y respetamos a clientes y consumidores.</li>
                           <li class="subtitulogrande mediano">Nuestra reputación es indivisible.</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            </div>
         </div>
      </div>
      <div id="ejes" class="row-fluid">
         <div class=" span12">
            <div class="row-fluid">
               <div class="span6 offset3">
                  <p class="padding50 sangria50 titulogrande texto-rojo text-center">Nuestras 10 Prioridades</p>
               </div>
            </div>
            <div class="row-fluid fichastop fichasbot ">
               <!-- <div class="contenidoejes contenedor-centrar"> -->
               <div class="acceso fullficha flotadores colorf4bb2c">
                  <img src="asset/img/iconos/10-Alcohol.png" class="imagenfull" alt="">
                  <p>Test</p>
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
               <!-- </div> -->
            </div>
            <div class="row-fluid fichasbot ">
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
            </div>
         </div>
      </div>
      <div id="cadena_de_valor" class="row-fluid fondomapa parallax-seccion">
         <!-- <div class="contenidocadena_de_valor"> -->
         <div class="contenedor-centrar span12">
            <div class="row-fluid ">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion">Cadena de Valor</p>
               </div>
            </div>
            <div class="row-fluid fondo">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion"><img style="width: 90%;" src="asset/img/nosotros/6-CN-web-Mapa-contribucion_VF.png"></p>
               </div>
            </div>
         </div>
         <!-- </div> -->
      </div>
      <div class="row-fuild parallax-seccion" id="historia">
         <div class="contenedorhistoria contenedor-centrar">
            <div class="text-center">
               <p class="tituloseccion">Historia</p>
            </div>
            <div id="myCarousel" class="carousel slide">
               <!-- Carousel items -->
               <div class="carousel-inner">
                  <div class="active item">
                     <div class="row-fluid">
                        <div class="span12">
                           <div class="row-fluid">
                              <div class="span3 offset3">
                                 <img src="asset/img/nosotros/historia/1-IMG-1887.png">
                              </div>
                              <div class="span3 descripcionhistoria">
                                 <div class="row-fluid">
                                    <div class="anio">1887
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="leyenda">
                                       <p>La empresa es fundada con el nombre de Guayaquil Lager Beer Brewery Association, funcionando al principio como una f&#225;brica de cerveza y de hielo.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row-fluid">
                        <div class="span12">
                           <div class="row-fluid">
                              <div class="span3 offset3">
                                 <img src="asset/img/nosotros/historia/2-IMG-1913.png">
                              </div>
                              <div class="span3 descripcionhistoria">
                                 <div class="row-fluid">
                                    <div class="anio">1913
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="leyenda">
                                       <p>Se lanza la cerveza Pilsener, que a&#241;os despu&#233;s se convertir&#237;a en la marca #1 del pa&#237;s</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row-fluid">
                        <div class="span12">
                           <div class="row-fluid">
                              <div class="span3 offset3">
                                 <img src="asset/img/nosotros/historia/4-IMG-1966.png">
                              </div>
                              <div class="span3 descripcionhistoria">
                                 <div class="row-fluid">
                                    <div class="anio">1966
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="leyenda">
                                       <p>La cerveza Club hace su aparici&#243;n en el mercado ecuatoriano.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row-fluid">
                        <div class="span12">
                           <div class="row-fluid">
                              <div class="span3 offset3">
                                 <img src="asset/img/nosotros/historia/5-IMG-1974.png">
                              </div>
                              <div class="span3 descripcionhistoria">
                                 <div class="row-fluid">
                                    <div class="anio">1974
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="leyenda">
                                       <p>Se produce la fusi&#243;n con Cervecer&#237;a Andina de Quito.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row-fluid">
                        <div class="span12">
                           <div class="row-fluid">
                              <div class="span3 offset3">
                                 <img src="asset/img/nosotros/historia/6-IMG-1985.png">
                              </div>
                              <div class="span3 descripcionhistoria">
                                 <div class="row-fluid">
                                    <div class="anio">1985
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="leyenda">
                                       <p>Inician las operaciones de la nueva planta Pascuales en Guayaquil.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row-fluid">
                        <div class="span12">
                           <div class="row-fluid">
                              <div class="span3 offset3">
                                 <img src="asset/img/nosotros/historia/6-IMG-2005.png">
                              </div>
                              <div class="span3 descripcionhistoria">
                                 <div class="row-fluid">
                                    <div class="anio">2005
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="leyenda">
                                       SABMiller plc, se convierte en el m&#225;s importante accionista de la compa&#241;&#237;a adquiriendo nuevamente
                                       el nombre de Cervecer&#237;a Nacional (CN).
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row-fluid">
                        <div class="span12">
                           <div class="row-fluid">
                              <div class="span3 offset3">
                                 <img src="asset/img/nosotros/historia/7-IMG-2012.png">
                              </div>
                              <div class="span3 descripcionhistoria">
                                 <div class="row-fluid">
                                    <div class="anio">2014
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="leyenda">
                                       <p>CN cumple 127 a&#241;os aportando al desarrollo de los ecuatorianos.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Indicadores Carouser -->
               <ol class="carousel-indicators indicadores">
                  <!-- <li class="separador contenedor-centrar"></li> -->
                  <li data-target="#myCarousel" data-slide-to="0" class="active fechaindicador">
                     <div class="row-fluid indicadortexto">
                        1887
                     </div>
                  </li>
                  <!-- <li class="separador contenedor-centrar"></li> -->
                  <li data-target="#myCarousel" data-slide-to="1" class="fechaindicador">
                     <div class="row-fluid indicadortexto">
                        1913
                     </div>
                  </li>
                  <!-- <li class="separador contenedor-centrar"></li> -->
                  <li data-target="#myCarousel" data-slide-to="2" class="fechaindicador">
                     <div class="row-fluid indicadortexto">
                        1966
                     </div>
                  </li>
                  <!-- <li class="separador contenedor-centrar"></li> -->
                  <li data-target="#myCarousel" data-slide-to="3" class="fechaindicador">
                     <div class="row-fluid indicadortexto">
                        1974
                     </div>
                  </li>
                  <!-- <li class="separador contenedor-centrar"></li> -->
                  <li data-target="#myCarousel" data-slide-to="4" class="fechaindicador">
                     <div class="row-fluid indicadortexto">
                        1985
                     </div>
                  </li>
                  <!-- <li class="separador contenedor-centrar"></li> -->
                  <li data-target="#myCarousel" data-slide-to="5" class="fechaindicador">
                     <div class="row-fluid indicadortexto">
                        2005
                     </div>
                  </li>
                  <!-- <li class="separador contenedor-centrar"></li> -->
                  <li data-target="#myCarousel" data-slide-to="6" class="fechaindicador">
                     <div class="row-fluid indicadortexto">
                        2014
                     </div>
                  </li>
                  <!-- <li class="separador contenedor-centrar"></li> -->
                  <!-- <li data-target="#myCarousel" data-slide-to="7" class="fechaindicador">
                     <div class="row-fluid indicadortexto">
                        2012
                     </div> -->
                  </li>
                  <!-- <li class="separador contenedor-centrar"></li> -->
               </ol>
               <!-- Carousel nav -->
               <!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> -->
            </div>
         </div>
      </div>
      <div id="cn_ec" class="row-fluid parallax-seccion">
         <!-- <div class="contenidocn_ec contenedor-centrar"> -->
         <div class="span12 contenedor-centrar">
            <div class="row-fluid ">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion">Cervecería Nacional en el Ecuador</p>
               </div>
            </div>
            <div class="row-fluid ">
               <div class="span10 offset1 text-center">
                  <p class="tituloseccion"><img style="width:50%; height:auto;" src="asset/img/nosotros/7-IMG-mapa-_2.png"></p>
               </div>
            </div>
         </div>
         <!-- </div> -->
      </div>
      <div id="sambmiller" class="row-fluid parallax-seccion" style="background-image: url('asset/img/5-IM-Sab-Miller.jpg'); background-position: 50% 50%;">
         <div class="contenedor-centrar span12">
            <div class="row-fluid">
               <div class="span6 offset3">
                  <p class="titulogrande texto-rojo text-center">Una operación de excelencia prensente en todos los continentes</p>
               </div>
            </div>
            <div class="sangria25 row-fluid">
               <div class="span6 offset3 text-center">
                  <p class="subtitulomediano texto-blanco">SABMiller plc es uno de lo más importantes grupos cerveceros del mundo, con más de 70 mil colaboradores y operaciones en 75 países de todos los continentes.</p>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span6 offset3 text-center">
                  <p class="line0 subtitulo texto-blanco">Cuenta con más de 200 marcas, entre las cuales las más conocidas a nivel mundial se encuentran Pilsener Urquell, Peroni Nastro Azzurro, Miller Genuine Draft y Grolsch.</p>
                  <p class="line0 subtitulo texto-blanco">En Latinoamérica, SABMiller está presente en El Salvador, Honduras, Panamá, Colombia, Ecuador, Perú y Argentina. Asimismo, tiene oficinas de representación en otros países de la región.</p>
                  <p class="line0 subtitulo texto-blanco">Las operaciones de SABMiller se caracterizan por una cultura de excelencia operativa, la elaboración de productos de alta calidad, la innovación y la promoción del desarrollo sostenible, siempre con énfasis de aportar al crecimiento de los paises en los que se desarrolla.</p>
               </div>
            </div>
         </div>
         <!-- <div class="vert-text">
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
      </div>
      <div id="progreso" class="row-fluid parallax-seccion" style="background-image: url('asset/img/8-IMG-aportando.jpg'); background-position: 50% 50%;">
         <div class="contenedor-centrar span12">
            <div class="row-fluid">
               <div class="span8 offset2">
                  <p class="titulomediano texto-rojo text-center">Aportando con transparencia al progreso del país y su gente</p>
               </div>
            </div>
            <div class="sangria25 row-fluid">
               <div class="span10 offset1 text-center">
                  <p class="subtitulomediano color333436">Cervecería Nacional CN S.A. es la principal empresa
                     cervecera de Ecuador. Un total de 1.129 personas conforman el grupo de distinguidos accionistas de CN, cuyo principal accionariado lo posee SABMiller, del cual forma parte desde el 2005.
                  </p>
               </div>
            </div>
            <div class="row-fluid">
               <div class="span8 offset2 text-center">
                  <!-- <p class="line0 subtitulo color333436">Su portafolio de marcas lo conforman las cervezas Pilsener, Pilsener Light, Club Premium, Club Premium Roja, Club Premium Negra, Miller Genuine Draft y Dorada, así como sus refrescos Pony Malta y Agua Manantial.</p> -->
                  <p class="line0 subtitulo color333436">El Gobierno Corporativo de CN está conformado por el Directorio asignado por los accionistas; por el presidente ejecutivo, señor <a href="lidercn.php">Carlos H. Fernández</a> y por las vicepresidencias de Finanzas, Asuntos Corporativos, Manufactura, Ventas, Recursos Humanos, Distribución, Mercadeo y Cadena de Abastecimiento.</p>
                  <p class="line0 subtitulo color333436">CN cuenta con una gran Reputación en Ecuador debido a su forma transparente y ética de actuar, en cuya trayectoria siempre ha sido respetuosa de las leyes y fiel en el cumplimiento de todas sus obligaciones con el Estado, lo que la convierte en un importante motor de crecimiento y empleo.</p>
                  <p class="line0 subtitulo color333436">El Modelo de Negocio de CN se fundamenta en desarrollar el mercado para satisfacer las necedades de sus clientes, potencializar las capacidades de sus colaboradores, generar rentabilidad y fortalecer su reputación.</p>
               </div>
            </div>
         </div>
         <!-- <div class="vert-text">
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
      </div>
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
