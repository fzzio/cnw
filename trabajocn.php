<!DOCTYPE html>
<html>
<head>
  <?php require_once 'header.php' ?>
  <script>
 
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
      <div class="contBanner"><img class="banner" src="asset/img/banners/contactos/Banner-Trabaja-con-nosotros.jpg" alt=""></div>
    </div>
  </div>
  <div class="row-fluid">
   <div class="span10 offset1 tituloseccion">
    <div class="textocentrado">DATOS PERSONALES</div>
  </div>
</div>
<div class="row-fluid">
  <div class="span8 offset2">
    <div class="textocentrado subtitulo">Para ingresar por primera vez su hoja de vida llene  los siguientes campos:</div>
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
          <div class="cajaselect" style="height: 60px;">
            <div class="styled-select" style="height: 60px;">
            <select name="nacionalidad" id="nacform" class="selectform miselect" style="height: 60px;">
              <option value="0" selected="selected">Nacionalidad</option>
              <option value="01">Ecuatoriana</option>
              <option value="02">Peruana</option>
              <option value="03">Brazileña</option>
              <option value="04">Panameña</option>
              <option value="05">Colombiana</option>
            </select>
          </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3 cajainput">
        <div class="row-fluid">
          <div class="cajainput" style="margin-top: 0px;">
            <input class="input-medium" type="text" placeholder="Nombres">                      
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12 fechasform" style="padding-left: 0px;
padding-right: 0px;">
            <div class="span3">

              <div class="cajaselect" style="height: 60px;">
                <div class="styled-select" style="height: 60px;">
                <select name="Día" id="diaform" class="selectform miselect" style="height: 60px;">
                 <option value="0" selected="selected">Día</option>
                 <option value="01">01</option>
                 <option value="02">02</option>
                 <option value="03">03</option>
                 <option value="04">04</option>
                 <option value="05">05</option>
                 <option value="06">06</option>
                 <option value="07">07</option>
                 <option value="08">08</option>
                 <option value="09">09</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>
                 <option value="13">13</option>
                 <option value="14">14</option>
                 <option value="15">15</option>
                 <option value="16">16</option>
                 <option value="17">17</option>
                 <option value="18">18</option>
                 <option value="19">19</option>
                 <option value="20">20</option>
                 <option value="21">21</option>
                 <option value="22">22</option>
                 <option value="23">23</option>
                 <option value="24">24</option>
                 <option value="25">25</option>
                 <option value="26">26</option>
                 <option value="27">27</option>
                 <option value="28">28</option>
                 <option value="29">29</option>
                 <option value="30">30</option>
                 <option value="31">31</option>
               </select>
             </div>
              </div>
           </div>
           <div class="span6">
            <div class="cajaselect" style="height: 60px;">
                                    <div class="selmes styled-select"style="height: 60px;">
                                       <select name="mes" id="mesform" onchange="" class="selectform miselect" size="1" style="height: 60px;">
                                        <option value="0" selected="selected">Mes</option>
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
         <div class="span3">
          <div class="cajaselect" style="height: 60px;">
            <div class="styled-select" style="height: 60px;">

            <select name="Año" id="anoform" class="selectform miselect" style="height: 60px;">.
              <option value="0" selected="selected">Año</option>
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
            </select>
          </div>
          </div>
        </div>
           <!--  <div>
              
            </div>

            <div>
              
            </div>
            <div> 

            </div>-->
          </div>
          <!-- <div class="span12 fechasform visible-desktop">
            <div class="formdia flotaform">
              <select name="Día">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>
            <div class="formmes flotaform">
              <select name="Mes">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>
            <div class="formano flotaform">
              <select name="Año">
              <option>1989</option>
              <option>1990</option>
              <option>1991</option>
              <option>1992</option>
              <option>1993</option>
            </select>
            </div>
          </div> -->
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <textarea rows="3"></textarea>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <div class="cajaselect" style="height: 60px;">
            <div class="styled-select" style="height: 60px;">
            <select name="genero" id="generoform" class="selectform miselect" style="height: 60px;">
              <option value="0" selected="selected">Género</option>
              <option value="1">Masculino</option>
              <option value="2">Femenino</option>
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
          <input class="input-medium" type="text" placeholder="Teléfono Celular">                      
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="Teléfono Fijo">                      
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="E-mail">                      
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="Área a la que aplica">                      
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="Nivel al que aplica">                      
        </div>
      </div>
      <div class="span3 ">
        <div class="cajainput">
          <input class="input-medium" type="text" placeholder="Estado Civil">                      
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div>
          <button class="btn botonform"  type="button">Adjuntar Currículum</button>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6 offset3"><div class="mensajeleyes">De acuerdo al CONADIS, se promueve la insercion laboral de las personas con discapacidad, para esto se le solicita contestar la siguiente pregunta</div></div>
    </div>
    <div class="row-fluid">
      <div class="span6 offset3"><div class="mensajeleyes">¿Tiene algun tipo de discapacidad total o parcial sea fisica, intelectual, visual, auditiva o de lenguaje?</div></div>
    </div>
    <div class="row-fluid">
      <div class="span3 offset3">
        <div class="row-fluid">
          <div class="span6">
            <label class="radio milabel">
              <input class="miradio" type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
              Si
            </label>
          </div>
          <div class="span6">
            <label class="radio milabel">
              <input class="miradio" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              No
            </label>
          </div>
        </div>
      </div>
      <div class="span3">
        <div class="cajainput">
          <div class="cajaselect" style="height: 60px;">
            <div class="styled-select" style="height: 60px;">
            <select name="tipo_discapacidad" id="discform" class="selectform miselect" style="height: 60px;">
              <option value="0" selected="selected">Tipo de Discapacidad</option>
              <option value="1">Física</option>
              <option value="2">Intelectual</option>
              <option value="3">Visual</option>
              <option value="4">Auditiva</option>
              <option value="5">Lenguaje</option>
            </select>
          </div>
          </div>
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