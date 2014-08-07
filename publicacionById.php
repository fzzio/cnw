<?php 
include('asset/config.php');
include('asset/MySql.Class.php');

$db = array(
	'host'=>$cfg_host,
	'user'=>$cfg_user,
	'pass'=>$cfg_pass,
	'name'=>$cfg_base
	);
// print_r($_POST);
$id= $_POST["idconsulta"];
$sql = "
SELECT * FROM noticias_cn WHERE id='".$id."'";
	// print_r($sql);
// die();
$resultado = @MySql::getInstance()->getResultSet($sql);
$respuestahtml="";

for ($i=0; $i <  count($resultado) ; $i++){
	$respuestahtml.="
	<div class='row-fluid'>
	<div class='span10'>
	<div class='tituloprensa'>".utf8_encode($resultado[$i]['titulo'])."</div>
	</div>
	<div class='span1 offset1'>
	<div id='cerrarPane' class=''><img id='cerrarpub' src='asset/img/Boton-x-1.png' alt=''></div>
	</div>
	</div>
	<div class='row-fluid'>
	<div class='span3'>
                        <!--<div class='fechaprensa'>5 de Noviembre del 2013</div>-->
	</div>
	</div>
	<div class='row-fluid'>
	<div class='span12'>
	<div class='imagenprensa'><img src='admin/assets/uploads/portadas/".utf8_encode($resultado[$i]['imagen_portada'])."' alt=''></div>
	</div>
	</div>
	<div class='row-fluid contenidopublicacion'>
	";
	if (isset($resultado[$i]['path_boletin'])){

	$respuestahtml.="<div class='span4'>
	<div class='row-fluid'>
	<div class='tituloboletin'>
	Boletin de Prensa
	</div>
	</div>
	<div class='row-fluid'>
	<div class='span10 offset1'>
	<div class='imgboletin'>
	<img src='asset/img/boletines/Previews-Boletin.jpg' alt=''>
	</div>
	</div>
	</div>
	<div class='row-fluid'>
	<div class='span12 text-center'>
	<a href='' class='contenedor-centrar btn btn-cn btn-cn-pq' style='margin-top:25px;width:90%'>Descargar Boletin</a>
	</div>
	</div>
	</div>";
	$respuestahtml.="
	<div class='span7 offset1'>
	<div class='contenidoprensa'>
	".utf8_encode($resultado[$i]['contenido'])."
	</div>
	</div>";
	}
	else{
		$respuestahtml.="
	<div class='span12'>
	<div class='contenidoprensa'>
	".utf8_encode($resultado[$i]['contenido'])."
	</div>
	</div>";

	}

	$respuestahtml.="</div>";
}

print_r($respuestahtml);
// return $resultado;
?>