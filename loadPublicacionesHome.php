<?php 
include('asset/config.php');
include('asset/MySql.Class.php');

$db = array(
	'host'=>$cfg_host,
	'user'=>$cfg_user,
	'pass'=>$cfg_pass,
	'name'=>$cfg_base
	);
$sql = "
SELECT * FROM `noticias_cn` order by `id` DESC";
$respuestahtml="";

$resultado = @MySql::getInstance()->getResultSet($sql);
			// $resultado = mysql_query($sql);
$i=0;
$temparray=array();
			// $j=count($resultado);
$chunk = count($resultado);
			// print_r($resultado[1]);
//".utf8_encode($resultado[$i]['id'])."
for ($i=0; $i <  ($chunk)  ; $i++) {
	$respuestahtml.="<div class='item'>
                  <div class='row-fluid'>
                     <div  class='span6'>
                        <img class='img-responsive1 imagenNoticia' src='admin/assets/uploads/portadas/".utf8_encode($resultado[$i]['imagen_portada'])."'style='height:614px;overflow: hidden;' />
                     </div>
                     <div class='span6 contenido-noticia'>
                        <h3 class='titular-slider texto-rojo'>
                           ".utf8_encode($resultado[$i]['titulo'])."
                        </h3>
                        <hr class='hr-noticia'>
                        <div class='texto-slider texto-slider-noticia texto-gris'>
                           ".utf8_encode($resultado[$i]['resumen_contenido'])."
                        </div>
                        <a href='publicaciones.php?noticia=".utf8_encode($resultado[$i]['id'])."' class='btn btn-cn btn-cn2 btn-cn-pq'>
                           <div class=''>VER MÁS</div>
                        </a>
                     </div>
                  </div>
               </div>";
}
print_r($respuestahtml);

?>