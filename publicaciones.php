<!DOCTYPE html>
<html>
   <head>
      <?php require_once 'header.php' ?>
      <!-- <link media="all" type="text/css" href="asset/css/jquery.ui.selectgroup.css" rel="stylesheet"> -->
      <!-- // <script src="asset/js/jquery.ui.selectgroup.js"></script> -->
      <style>
         body {
         color: #444955;
         text-rendering: auto;
         min-width: 600px;
         }
         label {
         float: left;
         width: 350px;
         padding: 7px 5px 5px 0;
         margin: 0 10px 0 0;
         }
         .ui-selectgroup {
         margin: 0 0 20px;
         font-size: 10px;
         }
         .ui-selectgroup-group {
         font-size: 10px;
         }
         .ui-selectgroup:hover {
         text-decoration: none;
         }
      </style>
   </head>
   <body>
      <?php 
         require_once'menu.php';
         ?>
      <div class="row-fluid parallax-seccion" style="background-image: url('asset/img/banners/publicaciones/IMG-publicaciones.jpg'); background-position: 50% 50%;">
         <div class="span12 text-center contenedor-centrar">
            <h1 class="seccion-titular texto-blanco">Noticias</h1>
         </div>
      </div>
      <div class="row-fluid">
         <div id="publicaciones-wrap" >
            <!-- <div class="row-fluid">
               <div class="span12">
                  <div class="contBanner"><img class="banner" src="asset/img/banners/publicaciones/Banner-Publicaciones-2.jpg" alt=""></div>
               </div>
               </div> -->
         </div>
         <div  class="row-fluid" >
            <!-- <div class="span10 offset1"> -->
            <div class="tabbable tabs-left span12">
               <div class="conten span2 offset1">
                  <ul class="nav nav-tabs ">
                     <li class="active">
                        <a  id="pagina1" class="listapub" href="#paneA" data-toggle="tab" sl-processed="1">Prensa</a>
                     </li >
                     <li ><a  href="#paneB" class="listapub" data-toggle="tab" sl-processed="1">Otras publicaciones</a></li>
                     <li ><a  href="http://www.sabmiller.com/index.asp?pageid=154" target="_blank" class="listapub" sl-processed="1">Banco de Imágenes</a></li>
                  </ul>
               </div>
               <div class="tab-content span6">
                  <div class="tab-pane tab-cn abierto" id="paneA">
                     <div class="row-fluid">
                        <div class="span8">
                           <div class="tituloseccion">Prensa</div>
                        </div>
                        <div class="span3 offset1">
                           <div class="row-fluid">
                              <div class="span6">
                                 <div class="cajaselect" style="margin-top: 50px;">
                                    <div class="selmes styled-select">
                                       <select name="mes" id="mes" onchange="" size="1">
                                          <option value="01">Enero</option>
                                          <option value="02">Febrero</option>
                                          <option value="03">Marzo</option>
                                          <option value="04">Abril</option>
                                          <option value="05">Mayo</option>
                                          <option value="06">Junio</option>
                                          <option value="07">Julio</option>
                                          <option value="08">Agosto</option>
                                          <option value="09">Septiembre</option>
                                          <option value="10">Octubre</option>
                                          <option value="11">Noviembre</option>
                                          <option value="12">Diciembre</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="span6 ">
                                 <div class="cajaselect" style="margin-top: 50px;">
                                    <div class="selano styled-select">
                                       <select name="ano" id="ano" onchange="" size="1">
                                          <option value="2010">2010</option>
                                          <option value="2011">2011</option>
                                          <option value="2012">2012</option>
                                          <option value="2013">2013</option>
                                          <option value="2014">2014</option>
                                          <option value="2015">2015</option>
                                          <option value="2016">2016</option>
                                          <option value="2017">2017</option>
                                          <option value="2018">2018</option>
                                          <option value="2019">2019</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="contenedorpubs" id="publicaciones">
                        <div class="row-fluid filapubs">
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid filapubs">
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid filapubs">
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row-fluid filapubs">
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="span4">
                              <div class="fichapubl">
                                 <div class="row-fluid">
                                    <div class="span12">
                                       <div class="imagencentrada">
                                          <img src="http://placehold.it/370x264" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row-fluid">
                                    <div class="textocentrado titularfecha">
                                       5 de Noviembre del 2013
                                    </div>
                                    <div class="textocentrado titularpubs">
                                       Lorem ipsum dolor sit amet.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row-fluid controlespaginator text-center">
                        <!--  <div class="span2">
                           </div> -->
                        <div class="flechasPag">
                           <div class="flechaPrev"></div>
                           <div class="holder">
                           </div>
                           <div class="flechaNext"></div>
                        </div>
                        <!-- <div class="span2">
                           </div> -->
                     </div>
                  </div>
                  <div class="tab-pane tab-cn" id="paneB">
                     <div class="row-fluid">
                        <div class="span8">
                           <div class="tituloseccion">Otras Publicaciones</div>
                        </div>
                        <div class="span3 offset1">
                           <div class="row-fluid">
                              <div class="span6">
                                 <div class="cajaselect" style="margin-top: 50px;">
                                    <div class="selmes styled-select">
                                       <select name="mes" id="mes" onchange="" size="1">
                                          <option value="01">Enero</option>
                                          <option value="02">Febrero</option>
                                          <option value="03">Marzo</option>
                                          <option value="04">Abril</option>
                                          <option value="05">Mayo</option>
                                          <option value="06">Junio</option>
                                          <option value="07">Julio</option>
                                          <option value="08">Agosto</option>
                                          <option value="09">Septiembre</option>
                                          <option value="10">Octubre</option>
                                          <option value="11">Noviembre</option>
                                          <option value="12">Diciembre</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="span6 ">
                                 <div class="cajaselect" style="margin-top: 50px;">
                                    <div class="selano styled-select">
                                       <select name="ano" id="ano" onchange="" size="1">
                                          <option value="2010">2010</option>
                                          <option value="2011">2011</option>
                                          <option value="2012">2012</option>
                                          <option value="2013">2013</option>
                                          <option value="2014">2014</option>
                                          <option value="2015">2015</option>
                                          <option value="2016">2016</option>
                                          <option value="2017">2017</option>
                                          <option value="2018">2018</option>
                                          <option value="2019">2019</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="contenedorpubs" id="otraspubs">
                        
                     </div>
                     <div class="row-fluid controlespaginator text-center">
                        <!--  <div class="span2">
                           </div> -->
                        <div class="flechasPag">
                           <div class="flechaPrev2"></div>
                           <div class="holder2">
                           </div>
                           <div class="flechaNext2"></div>
                        </div>
                        <!-- <div class="span2">
                           </div> -->
                     </div>
                  </div>
                  <div class="tab-pane tab-cn" id="paneC">
                     <div class="row-fluid">
                        <div class="span10">
                           <div class="tituloprensa">Aportando al progreso de miles de tenderos</div>
                        </div>
                        <div class="span1 offset1">
                           <div id="cerrarPane" class=""><img id="cerrarpub" src="asset/img/Boton-x-1.png" alt=""></div>
                        </div>
                     </div>
                     <div class="row-fluid">
                        <div class="span3">
                           <div class="fechaprensa">5 de Noviembre del 2013</div>
                        </div>
                     </div>
                     <div class="row-fluid">
                        <div class="span12">
                           <div class="imagenprensa"><img src="asset/img/publicaciones/prensa/10-IMG-Publicaciones-destacada.jpg" alt=""></div>
                        </div>
                     </div>
                     <div class="row-fluid contenidopublicacion">
                        <div class="span4">
                           <div class="row-fluid">
                              <div class="tituloboletin">
                                 Boletin de Prensa
                              </div>
                           </div>
                           <div class="row-fluid">
                              <div class="span10 offset1">
                                 <div class="imgboletin">
                                    <img src="asset/img/boletines/Previews-Boletin.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="row-fluid">
                              <div class="span12 text-center">
                                 <a href="" class="contenedor-centrar btn btn-cn btn-cn-pq" style="margin-top:25px;width:90%">Descargar Boletin</a>
                              </div>
                           </div>
                        </div>
                        <div class="span7 offset1">
                           <div class="contenidoprensa">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel ipsum sit amet diam tincidunt lobortis. Aenean consectetur nec nunc eu faucibus. Aliquam pretium accumsan lacus, ac auctor eros lobortis non. Fusce ac pellentesque ipsum. Donec pretium neque at mi molestie iaculis. Praesent pulvinar neque a ligula ultricies, nec ultrices mi mollis. Morbi eleifend lacinia lacus sed eleifend. Nunc sollicitudin risus dui, non hendrerit magna blandit eu. Nulla porttitor est id sem molestie, sit amet consectetur enim bibendum. Fusce mattis leo eget mattis aliquam. Sed luctus aliquam auctor. Nullam dolor orci, scelerisque vitae mi cursus, tincidunt cursus massa. Praesent facilisis tellus sit amet eros convallis placerat.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- </div> -->
         </div>
      </div>
      <footer>
         <?php require_once'footer.php'; ?>
      </footer>
      <script>
         function cargarPaginador(){
           $("div.holder").jPages({
            containerID : "publicaciones",
            perPage : 3,
            previous : "div.flechaPrev",
            next : "div.flechaNext",
            last : true,
            minHeight: false
         });
         }
         function cargarPaginador2(){
           $("div.holder2").jPages({
            containerID : "otraspubs",
            perPage : 3,
            previous : "div.flechaPrev2",
            next : "div.flechaNext2",
            last : true,
            minHeight: false
         });
         }
         function cargarPublicaciones(){
           $.ajax({
             url: "loadPublicaciones.php", 
             success:function( respuesta  ){
               $("#publicaciones").empty();
               $("#publicaciones").append(respuesta);
            }
         });
         }
         $(window).resize(function(){
          centrarVert($(".miselect"));
         });
         function centrarHor(elemento){
         base1=elemento.parent().width();
         base2=elemento.width();
                      elemento.css({ "margin-left":(base1/2)-(base2/2)+'px' });
                   }
                   function calcularaltura(){
                     $('.filapubs').each(function(){  
         
                      var highestBox = 0;
                      $('.titularpubs', this).each(function(){
         
                        if($(this).height() > highestBox) 
                           highestBox = $(this).height(); 
                     });  
         
                      $('.titularpubs',this).height(highestBox);
         
                   });  
                  }
                  function getPubById (parametro) {
                     $.ajax({
                           url: "publicacionById.php",
                           type: 'post',
                           data: parametro, 
                           success:function(noticia ){
                              $("#paneC").empty();
                              $(".tab-cn").removeClass("active");
                              $("#paneC").addClass("active");
                              $("#paneC").append(noticia);
                              $("#cerrarPane").click(function(){
                                 $(this).parent().parent().parent().removeClass("active");
                                 $(".tab-cn").removeClass("active");
                                 $(".tab-cn.abierto").addClass("active");
                                 $(".tab-cn").removeClass("abierto");
                                 centrarVert($(".miselect"));
                              });
                           }
                        });
                  }
                  window.onload=function(){
                     calcularaltura();
                     centrarVert($(".miselect"));                 
                  };
                  $(document).ready(  function(){
                     cargarPublicaciones();
                  });
                  $( window ).load(function() {
         // Pregunta si llega algo por GET para presentar esa noticia desplegada
         <?php  $numnotici = isset($_GET["noticia"])? $_GET["noticia"] : 0; ; ?>
                    var noticia= <?php echo $numnotici; ?> ;/*Verifico si llego algo por GET para cargar esa noticia, sino cargo todos*/
                    if (noticia!=0) {
                     var parametero={
                        "idconsulta":noticia
                     }
                     getPubById(parametero);
                   }
         $(".fichapubl").hover(
         function(){
            $(this).addClass("fichapublSelected");
         },
         function(){
            $(this).removeClass("fichapublSelected");
         }
         );
         $(".fichapubl").click(function(){
         $(".tab-cn").removeClass("abierto");
         $(".tab-cn.active").addClass("abierto");
         var idnoticia=$(this).attr("id");
         var idconsulta=idnoticia.replace("numNoticia-",'');
         var parametero={
            "idconsulta":idconsulta
         }
         getPubById(parametero);
         });
         $("#cerrarpub").hover(
         function(){
            $(this).attr('src', 'asset/img/Boton-x-2.png');
         },
         function(){
            $(this).attr('src', 'asset/img/Boton-x-1.png');
         }
         );
         
         $(".titularpubs").each(function(i) {
         len = $(this).text().length;
         if (len > 115) {
            $(this).text(function(index, text) {
               return text.substr(0, 115);
            });
            $(this).append("...");
            
         }
         });
         $(window).resize( calcularaltura );
         $("#paneA").addClass("active");
         cargarPaginador();
         $("#paneB").addClass("active");
         cargarPaginador2();
         $("#paneB").removeClass("active");
         });
         
         
         
      </script>
   </body>
</html>