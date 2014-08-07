<!DOCTYPE html>
<html>
<head>
  <?php require_once 'header.php' ?>
  <script>
     window.onload=function(){

         centrarVert($(".miselect"));
       // centrarHor($(".flechasPag"));

         // alert(maxHeight);
         
      };
  $(window).resize(function(){
       centrarVert($(".miselect"));
   });
  $(document).ready(  function(){
  //   $(window).resize( ajustar );
  //   ajustar();
  $(".selectform").change(function () {
    if($(this).val() == "0") $(this).addClass("empty");
    else $(this).removeClass("empty")
  });
  $(".selectform").change();
});
  // function ajustar(){
  //   var ancho=  $(".formdia").parent().width();
  //   $(".formdia").css("width",   ((ancho*.20)-0.5) + "px");
  //   $(".formmes").css("width",   ((ancho*.60)-0.5) + "px");
  //   $(".formano").css("width",   ((ancho*.20)-0.5) + "px");
  //   // $(".formdia").width((ancho*.30)-15);
  //   // $(".formmes").width((ancho*.60)-15);
  //   // $(".formano").width((ancho*.30)-15);
  // }
  

  </script>
</head>
<body>
  <?php 
  require_once'menu.php';
  ?>
   <div class="row-fluid parallax-seccion" id="contribucion-ecuador" style="background-image: url('asset/img/home/IMG-Visitas-Planta.jpg'); background-position: 50% 50%;">
    <div class="span12 text-center contenedor-centrar">
      <h1 class="seccion-titular texto-blanco">Visita a planta</h1>
    </div>
  </div>
  <div class="row-fluid">
   <div id="contactos-wrap" >
<!--     <div class="row-fluid">
     <div class="span12">
      <div class="contBanner"><img class="banner" src="asset/img/banners/contactos/Banner-Contactos.jpg" alt=""></div>
    </div>
  </div> -->
  <div class="row-fluid">
   <div class="span10 offset1 tituloseccion">
    <div class="textocentrado">INGRESE SUS DATOS PERSONALES</div>
  </div>
</div>
<div class="row-fluid">
  <div class="span8 offset2">
    <div class="textocentrado subtitulo">Llene el formulario y un representante de Cerveceria Nacional se pondrá en contacto con usted:</div>
    <div id="visita"></div>
  </div>
</div>
<div class="row-fluid">
 <div class="span10 offset1">
   <!-- <form id="visitasForm"> -->
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <input id="formNombre" class="input-medium" type="text" name="nombre" placeholder="Nombres">                      
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input id="formApellidos" class="input-medium" type="text" name="apellido" placeholder="Apellidos">                      
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <input id="formCiudad" class="input-medium" type="text" name="ciudad" placeholder="Ciudad">                      
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input id="formDireccion" class="input-medium" type="text" name="direccion" placeholder="Dirección">                      
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <input id="formPais" class="input-medium" type="text" name="pais" placeholder="Pais">
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input id="formCorreo" class="input-medium" type="text" name="correo" placeholder="E-mail">
        </div>
      </div>
    </div>
<!--     <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="E-mail">
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="E-mail">                      
        </div>
      </div>
    </div> -->


    <!-- <div class="row-fluid">
      <div class="span2 offset3"><div class="mensajeleyes negrita">Elija un tema de interes<hr class="hr-noticia"></hr> </div></div>
      <div class="span4"></div>
    </div> -->
    <div class="row-fluid">
      <div class="span6 offset3"><div class="mensajeleyes text-center">
        &#191;Qu&#233; planta desea visitar?
      </div></div>
    </div>
    <div class="row-fluid">
      
      <div class="span6 offset3 text-center">
        <div class="row-fluid">
          <div class="span6 offset3">
            <div class="cajainput">
          <div class="cajaselect">
            <div class="styled-select" style="height: 60px;">
            <select name="tipo_discapacidad" id="discform" class="selectform miselect" name="lugarvisita" style="height: 60px;">
              <option value="0" selected="selected">Elija una Planta</option>
              <option value="1">Guayaquil</option>
              <option value="2">Quito</option>
            </select>
          </div>
          </div>
        </div>  
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span2 offset3"><div class="mensajeleyes negrita">Cu&#233;ntanos m&#225;s detalles sobre tu visita.</div></div>
      <!-- <div class="span4"> <hr class="hr-noticia"></hr> </div> -->
    </div>
    <div class="row-fluid">
      <div class="span6 offset3">
        <div class="cajainput">
          <textarea id="formComentario" rows="3" name="comentarios"></textarea>
        </div>
      </div>
    </div>
    <div class="row-fluid">
     <div class="span6 offset3 textocentrado">
      <div class="backtohome"><button id="enviar" class="btn-cn" onclick="enviarmail();">ENVIAR</button></div>
    </div>
  </div>
<!-- </form> -->
</div>
</div>


</div>
</div>
<footer>
 <?php require_once'footer.php'; ?>
</footer>
<script type="text/javascript">
         // $(document).ready(function(){
         //     $(".acceso").hover(function() {
         //         //$(this).find('.caption-acceso').stop(true, true).fadeIn('200');
         //         $(this).find('.iconocontacto').stop(true, true).fadeIn('200');
         //     }, function() {
         //         //$(this).find('.caption-acceso').stop(true, true).fadeOut('200');
         //         $(this).find('.iconocontacto').stop(true, true).fadeOut('200');
         //     });
         // $("#enviar").click(function () {
          

         // });
          // });
         function enviarmail () {
           // body...
            // body...
           var nombre=$("#formNombre").val();
           var apellido=$("#formApellidos").val();
           var ciudad=$("#formCiudad").val();
           var pais =$("#formPais").val();
           var direccion=$("#formDireccion").val();
           var correo =$("#formCorreo").val();
           var lugarvisita=$("#discform").val();
           var comentarios=$("#formComentario").val();
           var parametros = {
          "correo" : correo,
          "nombre" : nombre,
          "apellido" : apellido,
          "pais" : pais,
          "ciudad" : ciudad,
          "direccion" : direccion,
          "comentarios" : comentarios,
          "lugarvisita" : lugarvisita
        };
           $.ajax({
          url: "formVisitas.php",
          type: 'post', 
          data: parametros,
          beforeSend: function () {
          },
          success: function(respuesta){ 
            //alert(respuesta);
            if (respuesta) {
              $(':input').val('');
              $("#visita").html(respuesta);
              //alert("Enviado");
            }else{
              console.log("Error");
            };
          }
        });
         }
</script>
</body>
</html> 