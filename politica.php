<?php 
$politica1="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228879862/content?start_page=1&view_mode=scroll&access_key=key-4Y8NQlpr0uMpbPoKkO3j&show_recommendations=true' data-auto-height='false' data-aspect-ratio='1.293791574279379' scrolling='no' id='doc_99207' width='600' height='600' frameborder='0'></iframe>";
$politica2="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228976393/content?start_page=1&view_mode=scroll&access_key=key-TxncfJ9pJXXSipCxpirz&show_recommendations=true' data-auto-height='false' data-aspect-ratio='0.7729220222793488' scrolling='no' id='doc_77796' width='600' height='600' frameborder='0'></iframe>";
$politica3="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228976752/content?start_page=1&view_mode=scroll&access_key=key-3rCq2UwK7RHIfYWJcCYD&show_recommendations=true' data-auto-height='false' data-aspect-ratio='1.293791574279379' scrolling='no' id='doc_13660' width='600' height='600' frameborder='0'></iframe>";
$politica4="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228977625/content?start_page=1&view_mode=scroll&access_key=key-q2DuxD94D8XbVp92FQoW&show_recommendations=true' data-auto-height='false' data-aspect-ratio='1.293791574279379' scrolling='no' id='doc_20706' width='600' height='600' frameborder='0'></iframe>";
$politica5="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228977849/content?start_page=1&view_mode=scroll&access_key=key-xQjsgcRFTS1JZ5UN0coL&show_recommendations=true' data-auto-height='false' data-aspect-ratio='0.7729220222793488' scrolling='no' id='doc_52672' width='600' height='600' frameborder='0'></iframe>";
$politica6="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228980626/content?start_page=1&view_mode=scroll&access_key=key-PlGFxEmwMzhgrXCsP0wK&show_recommendations=true' data-auto-height='false' data-aspect-ratio='1.3323485967503692' scrolling='no' id='doc_14114' width='600' height='600' frameborder='0'></iframe>";
$politica7="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228980583/content?start_page=1&view_mode=scroll&access_key=key-UaPSAQ00dyIpy7pOTAIp&show_recommendations=true' data-auto-height='false' data-aspect-ratio='1.3323485967503692' scrolling='no' id='doc_11717' width='600' height='600' frameborder='0'></iframe>";
$politica8="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228980520/content?start_page=1&view_mode=scroll&access_key=key-yMCsJ3T3RwYVNhbSziSH&show_recommendations=true' data-auto-height='false' data-aspect-ratio='1.3323485967503692' scrolling='no' id='doc_69500' width='600' height='600' frameborder='0'></iframe>";
$politica9="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228980445/content?start_page=1&view_mode=scroll&access_key=key-6pWEtCT16gVreFvUOp28&show_recommendations=true' data-auto-height='false' data-aspect-ratio='1.3323485967503692' scrolling='no' id='doc_88546' width='600' height='600' frameborder='0'></iframe>";
$politica10="<iframe class='scribd_iframe_embed' src='//www.scribd.com/embeds/228980356/content?start_page=1&view_mode=scroll&access_key=key-xitPW0Gxe8jCYSWeiCIB&show_recommendations=true' data-auto-height='false' data-aspect-ratio='1.3323485967503692' scrolling='no' id='doc_56917' width='600' height='600' frameborder='0'></iframe>";
$numnpolitica = isset($_GET["politica"])? $_GET["politica"] : 0; ; 
$politica=0;
 ?>
<!DOCTYPE html>
<html>
<head>
  <?php require_once 'header.php' ?>
</head>
<body>
  <?php require_once'menu.php';  ?>
    <div class="row-fluid">
    <div class="span12">
      <img class="img-responsive" src="asset/img/banners/banner-Politicas.jpg">
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <div class="row-fluid">
        <div class="span10 offset1 tituloseccion">
          <div class="textocentrado">
            <?php 
            if ($numnpolitica==1) {
              echo("POLÍTICA ANTISOBORNO");
              $politica=$politica1;
            }
            elseif ($numnpolitica==2) {
              echo("POLÍTICA DE ÉTICA");
              $politica=$politica2;
            }
            elseif ($numnpolitica==3) {
              echo("POLÍTICA DE GESTIÓN DE RIESGOS");
              $politica=$politica3;
            }
            elseif ($numnpolitica==4) {
              echo("POLÍTICA DE SEGURIDADES DE INFORMACIÓN");
              $politica=$politica4;
            }
            elseif ($numnpolitica==5) {
              echo("POLÍTICA DERECHOS HUMANOS");
              $politica=$politica5;
            }
            elseif ($numnpolitica==6) {
              echo("CADENA DE VALOR");
              $politica=$politica6;
            }
            elseif ($numnpolitica==7) {
              echo("CULTURA DE VALOR");
              $politica=$politica7;
            }
            elseif ($numnpolitica==8) {
              echo("MESA DE AYUDA");
              $politica=$politica8;
            }
            elseif ($numnpolitica==9) {
              echo("REGLAMENTO INTERNO Y BENEFICIOS");
              $politica=$politica9;
            }
            elseif ($numnpolitica==10) {
              echo("SISTEMA DE GESTIÓN INTEGRAL");
              $politica=$politica10;
            }
             ?>
          </div>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span8 offset2 text-center">
          <?php 
          echo ($politica);
           ?>
        </div>
      </div>

    </div>
    
    <!-- Modal -->
      <div id="politicasModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="politicaslLabel" aria-hidden="true">
         <div class="modal-body">
            <div class="row-fluid text-center">
               <div class="span10 offset1">
                  <h3 class="titulo-modal">Para entrar en la sección debes ingresar una clave de acceso.</h3>
                  <h4 class="titulo-modal">Favor ingresa tu clave a continuación</h4>
                  <br />
               </div>
            </div>
            <div class="row-fluid text-center">
               <div class="span12">
                  <input type="password" name="miclave" id="miclave" class="" >
               </div>
               <!-- <div class="span4">
                  <input type="text" name="nac-mes" id="nac-mes" class="input-nac integer" placeholder="MM" maxlength="2" size="2">
               </div>
               <div class="span4">
                  <input type="text" name="nac-anio" id="nac-anio" class="input-nac integer" placeholder="AA" maxlength="2" size="2">
               </div> -->
            </div>
         </div>
         <div class="modal-footer">
            <br />
            <button class="btn btn-cn btn-cn-pq" id="btn-politicas2" aria-hidden="true">INGRESAR</button>
            <br /><br />
         </div>
      </div>
</div>

<footer>
  <?php require_once'footer.php'; ?>
</footer>
<script type="text/javascript">
$(document).ready(function(){
  $("#politicasModal2").modal({backdrop: 'static',
  keyboard: false});
});
$('#btn-politicas2').click(function(e){
  e.preventDefault();



  var miclave = $('#miclave').val();
  clave="celmedia";
      if (clave == miclave) {
        // alert("ok");
        $("#politicasModal2").modal('hide');
      }else{
        alert("Clave Erronea.");
        window.location = "trabajaencn.php";
      };



});
</script>
</body>
</html> 