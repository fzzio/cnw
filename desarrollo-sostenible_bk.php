<!DOCTYPE html>
<html>
   <head>
      <?php require_once 'header.php' ?>
      <script type="text/javascript">
         $('#navegacion').scrollspy();
         $('[data-spy="scroll"]').each(function () {
          
           var $spy = $(this).scrollspy('refresh');
         });
         $(document).ready(function () {
          $("#p-link1-cerveza-bienestar").click(function () {
                     // body...
                     $("#info-cerveza-bienestar").fadeOut(function () {
                       $("#link1-cerveza-bienestar").fadeIn();
                     });
                   });
          $(".bk-cerveza-bienestar").click(function () {
                        // body...
                        $("#link1-cerveza-bienestar").fadeOut(function () {
                           // body...
                           $("#info-cerveza-bienestar").fadeIn(function () {
                            $('.contenedor-fondo').each(function () {
                              enviarAlFondo($(this));
                            });
                            $('.contenedor-centrar').each(function () {
                              centrarVert($(this));
                            });
                          });
                         });
                      });
          $("#p-link1-procesos-amigables").click(function () {
                     // body...
                     $("#info-procesos-amigables").fadeOut(function () {
                       $("#link1-procesos-amigables").fadeIn();
                     });
                   });
          $(".bk-procesos-amigables").click(function () {
                        // body...
                        $("#link1-procesos-amigables").fadeOut(function () {
                           // body...
                           $("#info-procesos-amigables").fadeIn(function () {
                            $('.contenedor-fondo').each(function () {
                              enviarAlFondo($(this));
                            });
                            $('.contenedor-centrar').each(function () {
                              centrarVert($(this));
                            });
                          });
                         });
                      });
          $("#p-link1-consumo-responsable").click(function () {
                     // body...
                     $("#info-consumo-responsable").fadeOut(function () {
                       $("#link1-consumo-responsable").fadeIn();
                     });
                   });
          $(".bk-consumo-responsable").click(function () {
                        // body...
                        $("#link1-consumo-responsable").fadeOut(function () {
                           // body...
                           $("#info-consumo-responsable").fadeIn(function () {
                            $('.contenedor-fondo').each(function () {
                              enviarAlFondo($(this));
                            });
                            $('.contenedor-centrar').each(function () {
                              centrarVert($(this));
                            });
                          });
                         });
                      });
          $("#p-link1-contribucion-ecuador").click(function () {
                     // body...
                     $("#info-contribucion-ecuador").fadeOut(function () {
                       $("#link1-contribucion-ecuador").fadeIn();
                     });
                   });
          $(".bk-contribucion-ecuador").click(function () {
                        // body...
                        $("#link1-contribucion-ecuador").fadeOut(function () {
                           // body...
                           $("#info-contribucion-ecuador").fadeIn(function () {
                            $('.contenedor-fondo').each(function () {
                              enviarAlFondo($(this));
                            });
                            $('.contenedor-centrar').each(function () {
                              centrarVert($(this));
                            });
                          });
                         });
                      });
          $("#p-link1-comunidad").click(function () {
                     // body...
                     $("#info-desarrollo-comunidad").fadeOut(function () {
                       $("#link1-comunidad").fadeIn();
                     });
                   });
          $(".bk-comunidad").click(function () {
                        // body...
                        $("#link1-comunidad").fadeOut(function () {
                           // body...
                           $("#info-desarrollo-comunidad").fadeIn(function () {
                            $('.contenedor-fondo').each(function () {
                              enviarAlFondo($(this));
                            });
                            $('.contenedor-centrar').each(function () {
                              centrarVert($(this));
                            });
                          });
                         });
                      });
          $('[id^="bot-"]').click(function () {
            var id=$(this).attr("id");
                            // alert(id);
                            var idcontenido=id.replace("bot-",'');
                            // alert(idcontenido);
                            $("#"+idcontenido).fadeOut(function () {
                             $("#info-"+idcontenido).fadeIn();
                             
                           });
                            
                          });
                         // $("#contribucion-ecuador-bot").click(function () {
                         //    var id=$("this").attr("id");
                         //    var idcontenido=id.replace("bot",'');
                         //   $(idcontenido).fadeOut(function () {
                         //     $("#"+idcontenido).fadeIn();
                         
                         //   });
         
                         // });
         $("#mas-contribucion").hide();
         $("#mas-desarrollo").hide();
         $("#mas-consumo").hide();
         $("#mas-proceso").hide();
         $("#mas-cerveza").hide();
         $("#si-contribucion").click(function () {
         $("#div-contribucion").fadeOut(function () {
         $("#mas-contribucion").fadeIn();
         });
         
         });
         $("#no-contribucion").click(function () {
         $("#mas-contribucion").fadeOut(function () {
         $("#div-contribucion").fadeIn();
         });
         
         
         });
         $("#si-desarrollo").click(function () {
         $("#div-desarrollo").fadeOut(function () {
         $("#mas-desarrollo").fadeIn();
         });
         
         });
         $("#no-desarrollo").click(function () {
         $("#mas-desarrollo").fadeOut(function () {
         $("#div-desarrollo").fadeIn();
         });
         
         
         });
         $("#si-consumo").click(function () {
         $("#div-consumo").fadeOut(function () {
         $("#mas-consumo").fadeIn();
         });
         
         });
         $("#no-consumo").click(function () {
         $("#mas-consumo").fadeOut(function () {
         $("#div-consumo").fadeIn();
         });
         
         
         });
         $("#si-proceso").click(function () {
         $("#div-proceso").fadeOut(function () {
         $("#mas-proceso").fadeIn();
         });
         
         });
         $("#no-proceso").click(function () {
         $("#mas-proceso").fadeOut(function () {
         $("#div-proceso").fadeIn();
         });
         
         
         });
         $("#si-cerveza").click(function () {
         $("#div-cerveza").fadeOut(function () {
         $("#mas-cerveza").fadeIn();
         });
         
         });
         $("#no-cerveza").click(function () {
         $("#mas-cerveza").fadeOut(function () {
         $("#div-cerveza").fadeIn(function () {
          centrarVert($('.contenedor-centrar'));
          $('.contenedor-centrar').each(function () {
          });
         });
         
         });
         
         
         });
         $(".equis-desa").hover(
         function(){
         $(this).attr('src', 'asset/img/Boton-x-2.png');
         },
         function(){
         $(this).attr('src', 'asset/img/Boton-x-1.png');
         }
         );
         });
         
         
      </script>
   </head>
   <body data-spy="scroll" data-target="#navegacion">
      <?php require_once'menu.php'; ?>
      <div id="inicio" class="salto52"></div>
      <div id="navegacion" class="visible-desktop navbar navcion">
         <ul id="navegacionbar" class="nav">
            <li  class="ver badge navegacion-menu-item">
               <a href="#inicio" style="text-decoration:none;color:#FFF" title="Proyectos">
                  <div class="lista">Proyectos</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#comunidad" style="text-decoration:none;color:#FFF" title="Desarrollo de la comunidad">
                  <div class="lista">Desarrollo de la comunidad</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#contribucion" style="text-decoration:none;color:#FFF" title="Contribucion Ecuador">
                  <div class="lista">Contribución al Ecuador</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#consumo" style="text-decoration:none;color:#FFF" title="Consumo Responsable">
                  <div class="lista">Consumo Responsable</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item">
               <a href="#procesos" style="text-decoration:none;color:#FFF" title="Procesos amigables con el Ambiente">
                  <div class="lista">Procesos amigables con el Ambiente</div>
               </a>
            </li>
            <li  class="ver badge navegacion-menu-item ultimo-item">
               <a href="#cerveza" style="text-decoration:none;color:#FFF" title="Cerveza y Bienestar">
                  <div class="lista">Cerveza y Bienestar</div>
               </a>
            </li>
         </ul>
      </div>
      <!-- proyectos    -->
      <div id="proyectos" class="secciones" >
         <div  class="row-fluid visible-desktop" >
            <div class="bloque5 proyecto-block5 proyecto0" >
               <a href="#comunidad" class="proyecto-contenido5 text-center">
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
               <img class="imgBloque5" src="asset/img/proyectos/desarrollo/1-programas.jpg" >
            </div>
            <div  class="bloque5 proyecto-block5 proyecto1" >
               <a href="#contribucion" class="proyecto-contenido5 text-center">
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
               <img class="imgBloque5" src="asset/img/proyectos/desarrollo/2-programas.jpg" >
            </div>
            <div class="bloque5 proyecto-block5 proyecto2" >
               <a href="#procesos" class="proyecto-contenido5 text-center">
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
               <img class="imgBloque5" src="asset/img/proyectos/desarrollo/3-programas.jpg" >
            </div>
            <div  class="bloque5 proyecto-block5 proyecto3" >
               <a href="#consumo" class="proyecto-contenido5 text-center">
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
               <img class="imgBloque5" src="asset/img/proyectos/desarrollo/4-programas.jpg" >
            </div>
            <div  class="bloque5 proyecto-block5 proyecto4" >
               <a href="#cerveza" class="proyecto-contenido5 text-center">
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
               <img class="imgBloque5" src="asset/img/proyectos/desarrollo/5-programas.jpg" >
            </div>
         </div>
      </div>
      <div id="comunidad" style="height:100%;">
         <div class="row-fluid parallax-seccion" id="desarrollo-comunidad" style="background-image: url('asset/img/desarrollo-sostenible/IMG-Desarrollo-de-la-comunidad-1.jpg'); background-position: 50% 50%;">
            <div class="span4 offset6 text-left contenedor-centrar">
               <h1 class="seccion-titular texto-blanco">Desarrollo de la comunidad</h1>
               <button id="bot-desarrollo-comunidad"class="btn-cn sangria50" type="">MÁS INFORMACIÓN</button>
            </div>
         </div>
         <div id="info-desarrollo-comunidad" class="row-fluid parallax-seccion" style="background-image: url('asset/img/desarrollo-sostenible/IMG-Desarrollo-de-la-comunidad-2.jpg'); background-position: 65% 50%;">
            <div class="span12 contenedor-centrar" id="div-desarrollo">
               <div class="row-fluid">
                  <div class="span4 offset2">
                     <h2 class="subtitulomediano texto-blanco fontligera">Desarrollo de la comunidad</h2>
                     <h1 class="seccion-titular2 texto-blanco sangria50 sanTop">Programas</h1>
                  </div>
               </div>
               <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <div class="seccion-texto texto-blanco">
                        <!-- <p class="subtitulomediano negrita link1-comunidad"><a class="cnlink">Haciendo la Diferencia Pascuales</a></p> -->
                        <p id="p-link1-comunidad" class="subtitulomediano negrita"><a class="cnlink">Haciendo la Diferencia Pascuales</a></p>
                        <!-- <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/Desarrollodelacomunidad/Cumbayo/Cumbayo.pdf">Cumbayo</a></p> -->
                        <p class="subtitulomediano negrita"><a class="cnlink">Santa Inés</a></p>
                     </div>
                  </div>
               </div>
               <!-- <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <button id="si-desarrollo"class="btn-cn btn-trans sangria50" type="">MÁS INFORMACIÓN</button>
                  </div>
               </div> -->
            </div>
            <div class="span12 contenedor-centrar" id="mas-desarrollo">
               <div class="row-fluid" >
                  <div class="span4 offset4 text-center">
                     <h1 class="seccion-titular2 texto-blanco">Más información</h1>
                  </div>
                  <div class="span1 offset2">
                     <div id="no-desarrollo" class=""><img class="equis-desa" src="asset/img/Boton-x-1.png" alt=""></div>
                  </div>
               </div>
               <div class="row-fluid" >
                  <div class="span8 offset2 text-center">
                     <br /><br />
                     <h4 class="fuente-normal texto-blanco">Cualquier duda o comentario llene el siguiente formulario</h4>
                     <br /><br />
                  </div>
               </div>
               <form id="ce-form">
                  <fieldset>
                     <div class="row-fluid" >
                        <div class="span3 offset3 text-center">
                           <input type="text" name="apellidos" placeholder="Apellidos" class="input-masinfo">
                           <input type="text" name="nombres" placeholder="Nombres" class="input-masinfo">
                           <input type="text" name="ciudad" placeholder="Ciudad" class="input-masinfo">
                        </div>
                        <div class="span3 text-center">
                           <input type="text" name="email" placeholder="Email" class="input-masinfo">
                           <textarea rows="5" name="mensaje" placeholder="Mensaje" class="input-masinfo2"></textarea>
                        </div>
                     </div>
                     <br /><br />
                     <div class="row-fluid text-center" >
                        <button type="submit" class="btn btn-cn btn-cn2 btn-cn3">ENVIAR</button>
                     </div>
                     <br /><br />
                  </fieldset>
               </form>
            </div>
         </div>
         <!-- <div id="link1-comunidad" class="row-fluid parallax-seccion"> -->
            <!-- <div class="row-fluid">
               <div class="span2 offset10">
                  <img class="img-responsive bk-contribucion-ecuador" src="assets/img/desarrollo-sostenoble/programasinfo/1-cerrar-pequenio-normal.png">
               </div>
               </div> -->
            <!-- <div class="row-fluid half fondoED0B0D">
               <div class="row-fluid"><img class="img-responsive fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/2-HACIENDO-LA--DIFERENCIA.jpg"></div>
               <div class="row-fluid">
                  <div class="fondoED0B0D parrafoPrograma texto-blanco">Apoya el progreso de las comunidades cercanas a nuestra planta Pascuales, generando un cambio positivo, involucrando valores y brindando opoprtunidades de superación a los habitantes del sector.</div>
               </div>
            </div>
            <div class="row-fluid half">
               <div class="row-fluid height75">
                  <div class="half">
                     <div class="cuadroHalf ">
                        <div class="parrafoPrograma">
                           <div class="tituloprensa">Alcance</div>
                           <p>Parroquia Pascuales, comunidad El Chorillo, cooperativas San Francisco I y II, urbanizaciones Protón de la Beata Mercedes Molina.</p>
                           <div class="tituloprensa">Colonia Vacacional</div>
                           <p>En esta actividad que CN realiza en su Polideportivo por un lapso aproximado de tres semanas, los menores pueden practicar disciplinas como fútbol, natación, tae kwon do, danza, modelaje y expresión corporal.</p>
                           <p>Al igual que en la Jornada de Integración, se</p>
                        </div>
                     </div>
                  </div>
                  <div class="half">
                     <img class="img-responsive bk-comunidad" style="position:absolute;right:0;" src="asset/img/desarrollo-sostenible/programasinfo/1-cerrar-pequenio-normal.png">
                     <div class="cuadrohalf">
                        <div class="tituloprensa">Contribución a la comunidad</div>
                        <ul class="">
                           <li>Más de 500 emprededores recibieron capacitación empresarial.</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row-fluid height25">
                  <div class="half"><img class="img-responsive contenedor-fondoPad fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/estadisticas-siembra-futuro.jpg"></div>
                  <div class="half"><img class="img-responsive contenedor-fondoPad fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/Resultados-siembra-futuro.jpg"></div>
               </div>
            </div>
         </div> -->
         <div id="link1-comunidad" class="row-fluid parallax-seccion 01" style="display: inline-block;">
          <img class="equisCerveza img-responsive bk-comunidad" style="position:absolute;right:0;" src="asset/img/desarrollo-sostenible/programasinfo/1-cerrar-pequenio-normal.png">
            <div class="row-fluid half fondoED0B0D">
               <div class="row-fluid"><img class="img-responsive fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/2-HACIENDO-LA--DIFERENCIA.jpg"></div>
               <div class="row-fluid">
                  <div class="fondoED0B0D parrafoPrograma texto-blanco">Apoya el progreso de las comunidades cercanas a nuestra planta Pascuales, generando un cambio positivo, involucrando valores y brindando opoprtunidades de superación a los habitantes del sector.</div>
               </div>
            </div>
            <div class="row-fluid half a1">
               <div class="row-fluid height75 b1">
                  <div class="half lionbars c1">
                     <!-- <div class="v-center-contenedor1"> -->
                        <!-- <div class="v-center-contenido1"> -->
                           <div class="cuadroHalf">
                              <div class="tituloprensa">Alcance</div>
                           <p>Parroquia Pascuales, comunidad El Chorillo, cooperativas San Francisco I y II, urbanizaciones Protón de la Beata Mercedes Molina.</p>
                           <div class="tituloprensa">Colonia Vacacional</div>
                           <p>En esta actividad que CN realiza en su Polideportivo por un lapso aproximado de tres semanas, los menores pueden practicar disciplinas como fútbol, natación, tae kwon do, danza, modelaje y expresión corporal.</p>
                           <p>Al igual que en la Jornada de Integración, se cuenta con la participación de más de 200 niños, quienes reciben mensajes sobre valores y prevención del consumo de bebidas alcohólicas en menores.</p>
                           <div class="tituloprensa">ACADEMIA DE FÚTBOL</div>
                           <p>Ecuador Fútbol Club es una iniciativa que favorece el crecimiento integral de centenares de niños y niñas de sectores de escasos recursos económicos. Se trata de un proyecto que lo conforman Cervecería Nacional (CN), a través de su marca Pony Malta; la Fundación Antonio Valencia, UNICEF y Teleamazonas.</p>
                           <p>El acuerdo con el futbolista de la selección ecuatoriana y del Manchester United, quien cuenta con el auspicio de Pony Malta, permitió que se habiliten cuatro centros de formación en Guayaquil, en sectores que están en los alrededores de la parroquia Pascuales.</p>
                           <p>Son alrededor de 300 niños, de 6 a 13 años de edad, los que se benefician de Ecuador Fútbol Club, el cual implementa la metodología del programa Fútbol Más que desde hace cinco años se impulsa con mucho éxito en Chile.</p>
                           </div>
                        <!-- </div> -->
                        <!-- .v-center-contenido -->
                     <!-- </div> -->
                     <!-- .v-center-contenedor -->
                  </div>
                  <!-- .lionbars -->
                  <div class="half lionbars">
                     <div class="v-center-contenedor">
                        <div class="v-center-contenido">
                           <div class="cuadroHalf">
                              <div class="tituloprensa">JORNADA DE INTEGRACIÓN PARA NIÑOS</div>
                               <p>Más de 200 niños de los alrededoresde Pascuales asistieron a la Jornada de Integración, practicaron deporte, particiapron en actividades artísticas y recibieron mensajes apra la promoción de valores.</p>
                               <p>Las madres de familia recibieron charlas de una especialista en nutrición, quien compartió consejos sobre como preparar una lonchera saludable y recibieron folleteria sobre conbinaciones de nutrición con Pony Malta.</p>
                               <p>Se repartieron mochilas escolares Pony Malta a todos los menores participantes, que incluía material didáctico sobre el aprendizaje de valores a través de juegos y de forma divertida.</p>
                               <div class="tituloprensa">MUJERES EMPRENDEDORAS</div>
                               <p>Doce mujeres de los alrededores de la parroquia Pascuales se convirtiero en las primeras beneficiadas para recibir microcréditos, con el objetivo de que puedan emprender sus negocios.</p>
                               <p>CN, junto a la Fundación Hogar de Cristo y su programa Banca Comunal, ha creado un fondo para la entrega de microcréditos, a fin de facilitar el financiamiento de los proyectos de emprendimiento de mujeres, cabezas de familia, quienes han presentado varias propuestas de negocios como confección de carteras y prendas de vestir, cosmetología, tienda de abarrotes, entre otros.</p>
                               <p>Además, CN ha dictado cursos, con instructoras ganadoras del programa Siembra Futuro, a fin de que más de 30 señoras del sector, aprendan bisutería y chocolatería, abriendo la posibilidad de emprender sus propios negocios y generar oportunidades de sustento para sus familias.</p>
                           </div>
                        </div>
                        <!-- .v-center-contenido -->
                     </div>
                     <!-- .v-center-contenedor -->
                  </div>
                  <!-- .lionbars -->
                  
               </div>
               <div class="row-fluid height25 text-center fondoebecee">
                <div class="span6 offset3 contenedor-centrar">
                <div class="">
                    <img class="img-responsive contenedor-fondoPad fullWidth midImage" src="asset/img/desarrollo-sostenible/programasinfo/resultados-beneficios.png">
                  </div>  
                </div>
               </div>
            </div>
         </div>
      </div>
      <div id="contribucion" style="height: 100%;">
         <div class="row-fluid parallax-seccion" id="contribucion-ecuador" style="background-image: url('asset/img/desarrollo-sostenible/IMG-Contribucion-al-Ecuador-1.jpg'); background-position: 50% 50%;">
            <div class="span4 offset6 text-left contenedor-centrar">
               <h1 class="seccion-titular texto-blanco">Contribución al Ecuador</h1>
               <button id="bot-contribucion-ecuador"class="btn-cn sangria50" type="">MÁS INFORMACIÓN</button>
            </div>
         </div>
         <div id="info-contribucion-ecuador" class="row-fluid parallax-seccion" style="background-image: url('asset/img/desarrollo-sostenible/IMG-Contribucion-al-Ecuador-2.jpg'); background-position: 65% 50%;">
            <div class="span12 contenedor-centrar" id="div-contribucion">
               <div class="row-fluid">
                  <div class="span4 offset2">
                     <h2 class="subtitulomediano texto-blanco fontligera">Contribución al Ecuador</h2>
                     <h1 class="seccion-titular2 texto-blanco sangria50 sanTop">Programas</h1>
                  </div>
               </div>
               <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <div class="seccion-texto texto-blanco">
                        <p id="p-link1-contribucion-ecuador" class="subtitulomediano negrita"><a class="cnlink" target="_blank">Siembra Futuro-4e, camino al progreso</a></p>
                        <!-- <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/ContribucionalEcuador/SiembraFuturo/SiembraFuturo.pdf" target="_blank">Siembra Futuro-4e, camino al progreso</a></p> -->
                        <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/ContribucionalEcuador/SiembraCebada/SiembraCebada.pdf">Siembra Cebada</a></p>
                        <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/">Modelo de Servicio Eficiente a Clientes</a></p>
                        <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/ContribucionalEcuador/Colaboradores/Colaboradores.pdf">Colaboradores</a></p>
                        <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/ContribucionalEcuador/Eticaytransparencia/Eticaytransparencia.pdf">Ética y Transparencia</a></p>
                     </div>
                  </div>
               </div>
               <!-- <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <button id="si-contribucion"class="btn-cn btn-trans sangria50" type="">MÁS INFORMACIÓN</button>
                  </div>
               </div> -->
            </div>
            <div class="span12 contenedor-centrar" id="mas-contribucion">
               <div class="row-fluid" >
                  <div class="span4 offset4 text-center">
                     <h1 class="seccion-titular2 texto-blanco">Más información</h1>
                  </div>
                  <div class="span1 offset2">
                     <div id="no-contribucion" class=""><img class="equis-desa" src="asset/img/Boton-x-1.png" alt=""></div>
                  </div>
               </div>
               <div class="row-fluid" >
                  <div class="span8 offset2 text-center">
                     <br /><br />
                     <h4 class="fuente-normal texto-blanco">Cualquier duda o comentario llene el siguiente formulario</h4>
                     <br /><br />
                  </div>
               </div>
               <form id="ce-form">
                  <fieldset>
                     <div class="row-fluid" >
                        <div class="span3 offset3 text-center">
                           <input type="text" name="apellidos" placeholder="Apellidos" class="input-masinfo">
                           <input type="text" name="nombres" placeholder="Nombres" class="input-masinfo">
                           <input type="text" name="ciudad" placeholder="Ciudad" class="input-masinfo">
                        </div>
                        <div class="span3 text-center">
                           <input type="text" name="email" placeholder="Email" class="input-masinfo">
                           <textarea rows="5" name="mensaje" placeholder="Mensaje" class="input-masinfo2"></textarea>
                        </div>
                     </div>
                     <br /><br />
                     <div class="row-fluid text-center" >
                        <button type="submit" class="btn btn-cn btn-cn2 btn-cn3">ENVIAR</button>
                     </div>
                     <br /><br />
                  </fieldset>
               </form>
            </div>
         </div>
         <div id="link1-contribucion-ecuador" class="row-fluid parallax-seccion">
          <img class="equisCerveza img-responsive bk-contribucion-ecuador" style="position:absolute;right:0;" src="asset/img/desarrollo-sostenible/programasinfo/1-cerrar-pequenio-normal.png">
            <div class="row-fluid half fondoFBA301">
               <div class="row-fluid"><img class="img-responsive fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/1-SIEMBRA-FUTURO-E4.jpg"></div>
               <div class="row-fluid">
                  <div class="fondoFBA301 parrafoPrograma texto-blanco">Apoya el emprendimiento genera fuentes de empleo y aporta al desarrollo de las comunidades. haciendo realidad nuevas ideas de negocios y fortaleciendo las pequeñas empresas a través de capacitacion empresariaL facilidades de financiamiento bancario y asistencia técnica.</div>
               </div>
            </div>
            <div class="row-fluid half">
                  
               <div class="row-fluid height50">
                  <div class="half lionbars">
                     <div class="v-center-contenedor">
                        <div class="v-center-contenido">
                           <div class="cuadroHalf">
                              <div class="tituloprensa">Alcance</div>
                              <ul class="">
                                 <li>Tres ediciones a nivel nacional desde el 2008</li>
                                 <li>edición Especial Provincias Chimborazo y Tungurahua entre 2011 y 2012</li>
                              </ul>
                           </div>
                        </div>
                        <!-- .v-center-contenido -->
                     </div>
                     <!-- .v-center-contenedor -->
                  </div>
                  <!-- .lionbars -->
                  <div class="half lionbars">
                     <div class="v-center-contenedor">
                        <div class="v-center-contenido">
                           <div class="cuadroHalf">
                              <div class="tituloprensa">Contribución a la comunidad</div>
                              <ul class="">
                                 <li>Más de 500 emprededores recibieron capacitación empresarial.</li>
                              </ul>
                           </div>
                        </div>
                        <!-- .v-center-contenido -->
                     </div>
                     <!-- .v-center-contenedor -->
                  </div>
                  <!-- .lionbars -->
               </div>
               <div class="row-fluid height50">
                  <div class="half"><img class="img-responsive contenedor-fondoPad fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/estadisticas-siembra-futuro.jpg"></div>
                  <div class="half"><img class="img-responsive contenedor-fondoPad fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/Resultados-siembra-futuro.jpg"></div>
               </div>
            </div>
         </div>
      </div>
      <div id="consumo" style="height:100%;">
         <div class="row-fluid parallax-seccion" id="consumo-responsable" style="background-image: url('asset/img/desarrollo-sostenible/IMG-Comsumo-respondable-1.jpg'); background-position: 50% 50%;">
            <div class="span4 offset6 text-left contenedor-centrar">
               <h1 class="seccion-titular texto-negro">Consumo Responsable</h1>
               <button id="bot-consumo-responsable"class="btn-cn sangria50" type="">MÁS INFORMACIÓN</button>
            </div>
         </div>
         <div id="info-consumo-responsable" class="row-fluid parallax-seccion" style="background-image: url('asset/img/desarrollo-sostenible/IMG-Comsumo-respondable-2.jpg'); background-position: 65% 50%;">
            <div class="span12 contenedor-centrar" id="div-consumo">
               <div class="row-fluid">
                  <div class="span4 offset2">
                     <h2 class="subtitulomediano texto-blanco fontligera">Consumo Responsable</h2>
                     <h1 class="seccion-titular2 texto-blanco sangria50 sanTop">Programas</h1>
                  </div>
               </div>
               <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <div class="seccion-texto texto-blanco">
                        <p id="p-link1-consumo-responsable" class="subtitulomediano negrita"><a class="cnlink">Campaña Disfruta con Moderación</a></p>
                     </div>
                  </div>
               </div>
              <!--  <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <button id="si-consumo"class="btn-cn btn-trans sangria50" type="">MÁS INFORMACIÓN</button>
                  </div>
               </div> -->
            </div>
            <div class="span12 contenedor-centrar" id="mas-consumo">
               <div class="row-fluid" >
                  <div class="span4 offset4 text-center">
                     <h1 class="seccion-titular2 texto-blanco">Más información</h1>
                  </div>
                  <div class="span1 offset2">
                     <div id="no-consumo" class=""><img class="equis-desa" src="asset/img/Boton-x-1.png" alt=""></div>
                  </div>
               </div>
               <div class="row-fluid" >
                  <div class="span8 offset2 text-center">
                     <br /><br />
                     <h4 class="fuente-normal texto-blanco">Cualquier duda o comentario llene el siguiente formulario</h4>
                     <br /><br />
                  </div>
               </div>
               <form id="ce-form">
                  <fieldset>
                     <div class="row-fluid" >
                        <div class="span3 offset3 text-center">
                           <input type="text" name="apellidos" placeholder="Apellidos" class="input-masinfo">
                           <input type="text" name="nombres" placeholder="Nombres" class="input-masinfo">
                           <input type="text" name="ciudad" placeholder="Ciudad" class="input-masinfo">
                        </div>
                        <div class="span3 text-center">
                           <input type="text" name="email" placeholder="Email" class="input-masinfo">
                           <textarea rows="5" name="mensaje" placeholder="Mensaje" class="input-masinfo2"></textarea>
                        </div>
                     </div>
                     <br /><br />
                     <div class="row-fluid text-center" >
                        <button type="submit" class="btn btn-cn btn-cn2 btn-cn3">ENVIAR</button>
                     </div>
                     <br /><br />
                  </fieldset>
               </form>
            </div>
         </div>
         <div id="link1-consumo-responsable" class="row-fluid parallax-seccion 01" style="display: inline-block;">
          <img class="equisCerveza img-responsive bk-consumo-responsable" style="position:absolute;right:0;" src="asset/img/desarrollo-sostenible/programasinfo/1-cerrar-pequenio-normal.png">
            <div class="row-fluid half fondoF96A0A">
               <div class="row-fluid"><img class="img-responsive fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/3-DISFRUTA-CON-MODERACION.jpg"></div>
               <div class="row-fluid">
                  <div class="fondoF96A0A parrafoPrograma texto-blanco">Para Cervecería Nacional (CN) es un gran reto aportar al bienestar Integral de los ecuatorianos a través de una serie de actividades para la promoción del consumo responsable y moderado de las bebidas alcohólicas, la no venta de alcohol a menores y la seguridad vial.</div>
               </div>
            </div>
            <div class="row-fluid half a1">
               <div class="row-fluid height25 b1">
                  <!-- <div class="half lionbars c1"> -->
                     <!-- <div class="v-center-contenedor1"> -->
                        <!-- <div class="v-center-contenido1"> -->
                           <div class="cuadroHalf">
                              <div class="tituloprensa">ACCIONES PARA PROMOVER EL CONSUMO MODERADO</div>
                           <p>18 mil personas y 40 establecimientos nocturnos en Cuenca han participado desde el 2009 en la campana Disfruta con Moderación. La cual impulsa el consumo responsable de alcohol y la designación de un Conductor Nominado para garantizar un retorno seguro a casa.</p>
                           </div>
                        <!-- </div> -->
                        <!-- .v-center-contenido -->
                     <!-- </div> -->
                     <!-- .v-center-contenedor -->
                  <!-- </div> -->
                  <!-- .lionbars -->
                  <!-- <div class="half lionbars"> -->
                     <!-- <div class="v-center-contenedor"> -->
                        <!-- <div class="v-center-contenido">
                           <div class="cuadroHalf">
                              <div class="tituloprensa">JORNADA DE INTEGRACIÓN PARA NIÑOS</div>
                               <p>Más de 200 niños de los alrededoresde Pascuales asistieron a la Jornada de Integración, practicaron deporte, particiapron en actividades artísticas y recibieron mensajes apra la promoción de valores.</p>
                               <p>Las madres de familia recibieron charlas de una especialista en nutrición, quien compartió consejos sobre como preparar una lonchera saludable y recibieron folleteria sobre conbinaciones de nutrición con Pony Malta.</p>
                               <p>Se repartieron mochilas escolares Pony Malta a todos los menores participantes, que incluía material didáctico sobre el aprendizaje de valores a través de juegos y de forma divertida.</p>
                               <div class="tituloprensa">MUJERES EMPRENDEDORAS</div>
                               <p>Doce mujeres de los alrededores de la parroquia Pascuales se convirtiero en las primeras beneficiadas para recibir microcréditos, con el objetivo de que puedan emprender sus negocios.</p>
                               <p>CN, junto a la Fundación Hogar de Cristo y su programa Banca Comunal, ha creado un fondo para la entrega de microcréditos, a fin de facilitar el financiamiento de los proyectos de emprendimiento de mujeres, cabezas de familia, quienes han presentado varias propuestas de negocios como confección de carteras y prendas de vestir, cosmetología, tienda de abarrotes, entre otros.</p>
                               <p>Además, CN ha dictado cursos, con instructoras ganadoras del programa Siembra Futuro, a fin de que más de 30 señoras del sector, aprendan bisutería y chocolatería, abriendo la posibilidad de emprender sus propios negocios y generar oportunidades de sustento para sus familias.</p>
                           </div>
                        </div> -->
                        <!-- .v-center-contenido -->
                     <!-- </div> -->
                     <!-- .v-center-contenedor -->
                  <!-- </div> -->
                  <!-- .lionbars -->
               </div>
               <div class="rowfluid height50 text-center fondoebecee">
                <div class="span12 contenedor-centrar">
                  <div class="row-fluid">
                    <div class="span4">
                  <img class="img-responsive" src="asset/img/desarrollo-sostenible/programasinfo/63.png">
                </div>
                <div class="span4">
                  <img class="img-responsive" src="asset/img/desarrollo-sostenible/programasinfo/52.png">
                </div>
                <div class="span4">
                  <img class="img-responsive" src="asset/img/desarrollo-sostenible/programasinfo/61.png">
                </div>
                  </div>
                  <div class="row-fluid ">
                  <div class="span12 text-center">
                    <div class="subtitulo">
                    <p><strong>Programas contra el consumo en menores</strong></p>
                  </div>
                  </div>
                </div>
                <div class="row-fluid">
                  <div class="span12 text-center">
                    <div class="subtitulo">
                      El Programa "ResponsableMente" fomenta en colegios el no consumo de alcohol a temprana edad.
                  </div>
                  </div>
                </div>
                </div>
               </div>
               <div class="row-fluid height25 text-center fondoebecee">
                <div class="span10 offset1 contenedor-centrar">
                <div class="">
                    <img class="img-responsive contenedor-fondoPad fullWidth midImage" src="asset/img/desarrollo-sostenible/programasinfo/resultado-4100.png">
                  </div>  
                </div>
               </div>
            </div>
            
         </div>
      </div>
      <div id="procesos" style="height:100%;">
         <div class="row-fluid parallax-seccion" id="procesos-amigables" style="background-image: url('asset/img/desarrollo-sostenible/IMG-P-A-con-el-Ambiente-0.jpg'); background-position: 50% 50%;">
            <div class="span4 offset6 text-left contenedor-centrar">
               <h1 class="seccion-titular texto-blanco">Procesos amigables con el Ambiente</h1>
               <button id="bot-procesos-amigables"class="btn-cn sangria50" type="">MÁS INFORMACIÓN</button>
            </div>
         </div>
         <div id="info-procesos-amigables" class="row-fluid parallax-seccion" style="background-image: url('asset/img/desarrollo-sostenible/IMG-P-A-con-el-Ambiente-2.jpg'); background-position: 65% 50%;">
            <div class="span12 contenedor-centrar" id="div-proceso">
               <div class="row-fluid">
                  <div class="span4 offset2">
                     <h2 class="subtitulomediano texto-blanco fontligera">Procesos amigables con el Ambiente</h2>
                     <h1 class="seccion-titular2 texto-blanco sangria50 sanTop">Programas</h1>
                  </div>
               </div>
               <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <div class="seccion-texto texto-blanco">
                        <p id="p-link1-procesos-amigables" class="subtitulomediano negrita"><a class="cnlink">Buen uso del agua</a></p>
                        <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/Prosesoamigableconelambiente/Energiayreducciondehuelladecarbono/Energiayreducciondehuelladecarbono.pdf">Energía y reducción de huella de carbono</a></p>
                        <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/Prosesoamigableconelambiente/Reciclajeyclasificacionderesiduos/Reciclajeyclasificacionderesiduos.pdf">Reciclaje y clasificación de residuos</a></p>
                     </div>
                  </div>
               </div>
               <!-- <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <button id="si-proceso"class="btn-cn btn-trans sangria50" type="">MÁS INFORMACIÓN</button>
                  </div>
               </div> -->
            </div>
            <div class="span12 contenedor-centrar" id="mas-proceso">
               <div class="row-fluid" >
                  <div class="span4 offset4 text-center">
                     <h1 class="seccion-titular2 texto-blanco">Más información</h1>
                  </div>
                  <div class="span1 offset2">
                     <div id="no-proceso" class=""><img class="equis-desa" src="asset/img/Boton-x-1.png" alt=""></div>
                  </div>
               </div>
               <div class="row-fluid" >
                  <div class="span8 offset2 text-center">
                     <br /><br />
                     <h4 class="fuente-normal texto-blanco">Cualquier duda o comentario llene el siguiente formulario</h4>
                     <br /><br />
                  </div>
               </div>
               <form id="ce-form">
                  <fieldset>
                     <div class="row-fluid" >
                        <div class="span3 offset3 text-center">
                           <input type="text" name="apellidos" placeholder="Apellidos" class="input-masinfo">
                           <input type="text" name="nombres" placeholder="Nombres" class="input-masinfo">
                           <input type="text" name="ciudad" placeholder="Ciudad" class="input-masinfo">
                        </div>
                        <div class="span3 text-center">
                           <input type="text" name="email" placeholder="Email" class="input-masinfo">
                           <textarea rows="5" name="mensaje" placeholder="Mensaje" class="input-masinfo2"></textarea>
                        </div>
                     </div>
                     <br /><br />
                     <div class="row-fluid text-center" >
                        <button type="submit" class="btn btn-cn btn-cn2 btn-cn3">ENVIAR</button>
                     </div>
                     <br /><br />
                  </fieldset>
               </form>
            </div>
         </div>
         <div id="link1-procesos-amigables" class="row-fluid parallax-seccion 01" style="display: inline-block;">
          <img class="equisCerveza img-responsive bk-procesos-amigables" style="position:absolute;right:0;" src="asset/img/desarrollo-sostenible/programasinfo/1-cerrar-pequenio-normal.png">
            <div class="row-fluid half fondo1353BF">
               <div class="row-fluid"><img class="img-responsive fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/4-BUEN-USO-DEL-AGUA.jpg"></div>
               <div class="row-fluid">
                  <div class="fondo1353BF parrafoPrograma texto-blanco">Plantas de Tratamiento de Aguas Residuales (PTAR), en Guayaquil y Quito, eliminan los agentes contaminantes del 100% del agua utilizada en los procesos de producciñon y servicios para obtener agua limpia o reutilizable en otras actividades de la operación como jardinería y limpieza.</div>
               </div>
            </div>
            <div class="row-fluid half a1">
                 <div class="rowfluid height50 text-center fondoebecee">
                <div class="span12 contenedor-centrar">
                 <div class="row-fluid">
                  <div class="span3"><img src="asset/img/desarrollo-sostenible/programasinfo/iconos-emprendedores.png"></div>
                  <div class="span3">
                    <p>Manteniendo nuestra gestión en el control de los consumos del agua hemos logrado</p>
                  </div>
                  <div class="span3"><img src="asset/img/desarrollo-sostenible/programasinfo/reducir-en-un-3.png"></div>
                  <div class="span3"><p>en nuestra operacion nacional entre abril del 2012 y marzo del 2013.</p></div>
                 </div>
                </div>
               </div>
               <div class="rowfluid height50 text-center fondoebecee">
                <div class="span12 contenedor-centrar">
                 <div class="row-fluid">
                  <div class="span3"><img src="asset/img/desarrollo-sostenible/programasinfo/iconos-Empleos.png"></div>
                  <div class="span3">
                    <p>Este procentaje representó una disminución de</p>
                  </div>
                  <div class="span3"><img src="asset/img/desarrollo-sostenible/programasinfo/66-mil.png"></div>
                  <div class="span3"><p>o su equivalente al consumo promedio de 392 familias al año</p></div>
                 </div>
                </div>
               </div>
            </div>
            
         </div>
      </div>
      <div id="cerveza" style="height:100%;">
         <div class="row-fluid parallax-seccion" id="cerveza-bienestar" style="background-image: url('asset/img/desarrollo-sostenible/IMG-Cerveza-y-bienestar-1.jpg'); background-position: 50% 50%;">
            <div class="span4 offset6 text-left contenedor-centrar">
               <h1 class="seccion-titular texto-blanco">Cerveza y Bienestar</h1>
               <button id="bot-cerveza-bienestar"class="btn-cn sangria50" type="">MÁS INFORMACIÓN</button>
            </div>
         </div>
         <div id="info-cerveza-bienestar" class="row-fluid parallax-seccion" style="background-image: url('asset/img/desarrollo-sostenible/IMG-Cerveza-y-bienestar-2.jpg'); background-position: 65% 50%;">
            <div class="span12 contenedor-centrar" id="div-cerveza">
               <div class="row-fluid">
                  <div class="span4 offset2">
                     <h2 class="subtitulomediano texto-blanco fontligera">Cerveza y Bienestar</h2>
                     <h1 class="seccion-titular2 texto-blanco sangria50 sanTop">Programas</h1>
                  </div>
               </div>
               <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <div class="seccion-texto texto-blanco">
                        <p id="p-link1-cerveza-bienestar" class="subtitulomediano negrita"><a class="cnlink">Historia</a></p>
                        <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/CervezayBienestar/Ingredientes/Ingredientes.pdf">Ingredientes</a></p>
                        <p class="subtitulomediano negrita"><a class="cnlink" href="asset/pdf/CervezayBienestar/Elaboracion/Elaboracion.pdf">Elaboración</a></p>
                     </div>
                  </div>
               </div>
               <!-- <div class="row-fluid">
                  <div class="span4 offset2 text-left">
                     <button id="si-cerveza"class="btn-cn btn-trans sangria50" type="">MÁS INFORMACIÓN</button>
                  </div>
               </div> -->
            </div>
            <div class="span12 contenedor-centrar" id="mas-cerveza">
               <div class="row-fluid" >
                  <div class="span4 offset4 text-center">
                     <h1 class="seccion-titular2 texto-blanco">Más información</h1>
                  </div>
                  <div class="span1 offset2">
                     <div id="no-cerveza" class=""><img class="equis-desa" src="asset/img/Boton-x-1.png" alt=""></div>
                  </div>
               </div>
               <div class="row-fluid" >
                  <div class="span8 offset2 text-center">
                     <br /><br />
                     <h4 class="fuente-normal texto-blanco">Cualquier duda o comentario llene el siguiente formulario</h4>
                     <br /><br />
                  </div>
               </div>
               <form id="ce-form">
                  <fieldset>
                     <div class="row-fluid" >
                        <div class="span3 offset3 text-center">
                           <input type="text" name="apellidos" placeholder="Apellidos" class="input-masinfo">
                           <input type="text" name="nombres" placeholder="Nombres" class="input-masinfo">
                           <input type="text" name="ciudad" placeholder="Ciudad" class="input-masinfo">
                        </div>
                        <div class="span3 text-center">
                           <input type="text" name="email" placeholder="Email" class="input-masinfo">
                           <textarea rows="5" name="mensaje" placeholder="Mensaje" class="input-masinfo2"></textarea>
                        </div>
                     </div>
                     <br /><br />
                     <div class="row-fluid text-center" >
                        <button type="submit" class="btn btn-cn btn-cn2 btn-cn3">ENVIAR</button>
                     </div>
                     <br /><br />
                  </fieldset>
               </form>
            </div>
         </div>
         <div id="link1-cerveza-bienestar" class="row-fluid parallax-seccion 01" style="display: inline-block;">
          <img class="equisCerveza img-responsive bk-cerveza-bienestar" style="position:absolute;right:0;" src="asset/img/desarrollo-sostenible/programasinfo/1-cerrar-pequenio-normal.png">
            <div class="row-fluid half fondoD2A959">
               <div class="row-fluid"><img class="img-responsive fullWidth" src="asset/img/desarrollo-sostenible/programasinfo/5-HISTORIA.jpg"></div>
               <div class="row-fluid">
                  <div class="span8 offset2">
                    <div class="fondoD2A959 parrafoPrograma texto-blanco titulocerveza text-center">La bebida más antigua</div>
                  </div>
               </div>
            </div>
            <div class="row-fluid half a1">
                 <div class="text-center contenedor-centrar">
                    <div class="span10 offset1">
                      <div class="titular">
                      <p class="tituloseccion" style="margin-top:0;">ORÍGENES DE LA CERVEZA</p>
                    </div>
                    <div class="subtitulo">
                      <p>Los libros de historia registran su nacimiento hace 9000 años aproximadamente en las civilizaciones nativas de Medio Oriente.</p>
                      <p>En Ecuador, su producción se remonta al siglo XVI cuando la Orden de los Franciscanos instaló en Quito la primera cervecería para el consumo de los frailes.</p>
                    </div>
                    </div>
                 </div>
            </div>
            
         </div>
      </div>
      <?php require_once'footer.php'; ?>
   </body>
</html>
