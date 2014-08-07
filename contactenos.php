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
  <div class="row-fluid">
   <div id="contactos-wrap" >
    <div class="row-fluid">
     <div class="span12">
      <div class="contBanner"><img class="banner" src="asset/img/banners/contactos/Banner-Contactos.jpg" alt=""></div>
    </div>
  </div>
  <div class="row-fluid">
   <div class="span10 offset1 tituloseccion">
    <div class="textocentrado">INGRESE SUS DATOS PERSONALES</div>
  </div>
</div>
<div class="row-fluid">
  <div class="span8 offset2">
    <div class="textocentrado subtitulo">Llene el formulario  que un representante de Cerveceria Nacional se pondrá en contacto con usted:</div>
  </div>
</div>
<div class="row-fluid">
 <div class="span10 offset1">
   <form action="">
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="Apellidos">                      
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <div class="cajaselect">
            <div class="styled-select"style="height: 60px;">
            <select name="ciudad" id="nacform" class="selectform miselect" style="height: 60px;">
              <option value="0" selected="selected">Escoja una ciudad</option>
              <option value="01">Guayaquil</option>
              <option value="02">Quito</option>
              <option value="03">Manta</option>
              <option value="04">Durán</option>
              <option value="05">Ancón</option>
            </select>
          </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="Nombres">                      
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="Dirección">                      
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <div class="cajaselect">
            <div class="styled-select" style="height: 60px;">
            <select name="genero" id="paisform" class="selectform miselect" style="height: 60px;">
              <option value="0" selected="selected">Escoja un País</option>
              <option value="1">Ecuador</option>
              <option value="2">EEUU</option>
            </select>
          </div>
          </div>
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="Lugar de Nacimiento">                      
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <div class="cajaselect">
            <div class="styled-select" style="height: 60px;">
            <select name="genero" id="paisform" class="selectform miselect" style="height: 60px;">
              <option value="0" selected="selected">Estado / Provincia</option>
              <option value="1">Guayas</option>
              <option value="2">Pichincha</option>
            </select>
          </div>
          </div>
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="E-mail">                      
        </div>
      </div>
    </div>


    <!-- <div class="row-fluid">
      <div class="span2 offset3"><div class="mensajeleyes negrita">Elija un tema de interes<hr class="hr-noticia"></hr> </div></div>
      <div class="span4"></div>
    </div> -->
    <div class="row-fluid">
      <div class="span6 offset3"><div class="mensajeleyes text-center">Seleccione el tema de los cuales desearía que CN comparta con usted.</div></div>
    </div>
    <div class="row-fluid">
      
      <div class="span6 offset3 text-center">
        <div class="row-fluid">
          <div class="span6 offset3">
            <div class="cajainput">
          <div class="cajaselect">
            <div class="styled-select" style="height: 60px;">
            <select name="tipo_discapacidad" id="discform" class="selectform miselect" style="height: 60px;">
              <option value="0" selected="selected">Elija un tema</option>
              <option value="1">Trabajo</option>
              <option value="2">Proyectos</option>
              <option value="3">Redes Sociales</option>
              <option value="4">Labor Social</option>
            </select>
          </div>
          </div>
        </div>  
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span2 offset3"><div class="mensajeleyes negrita">Déjenos sus comentarios</div></div>
      <!-- <div class="span4"> <hr class="hr-noticia"></hr> </div> -->
    </div>
    <div class="row-fluid">
      <div class="span6 offset3">
        <div class="cajainput">
          <textarea rows="3"></textarea>
        </div>
      </div>
    </div>
    <div class="row-fluid">
     <div class="span6 offset3 textocentrado">
      <div class="backtohome"><button class="btn-cn" type="submit">ENVIAR</button></div>
    </div>
  </div>
</form>
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
         // });
</script>
</body>
</html> 