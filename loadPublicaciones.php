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
SELECT *
FROM noticias_cn";
$respuestahtml="";

$resultado = @MySql::getInstance()->getResultSet($sql);
			// $resultado = mysql_query($sql);
$i=0;
$temparray=array();
			// $j=count($resultado);
$chunk = count($resultado);
			// print_r($resultado[1]);
for ($i=0; $i <  ($chunk/3)  ; $i++) {
	// print_r($resultado[$i*3]);
	// print_r($resultado[($i*3)+1]);
	// print_r($resultado[$i+2]);
	$respuestahtml.="<div class='row-fluid filapubs'>";//Abrir Row
	// print_r($resultado[$i * 3   ]['titulo']);
	$respuestahtml.="<div class='span4'>
	<div id='numNoticia-".utf8_encode($resultado[$i * 3   ]['id'])."' class='fichapubl'>
	<div class='row-fluid'>
	<div class='span12'>
	<div class='imagencentrada'>";
	if (isset($resultado[$i * 3   ]['imagen_preview'])) {
		$respuestahtml.="<img class='img-responsive' src='admin/assets/uploads/previews/".utf8_encode($resultado[$i * 3   ]['imagen_preview'])."' alt=''>";
	}
	else{
		$respuestahtml.="<img class='img-responsive' src='admin/assets/uploads/portadas/".utf8_encode($resultado[$i * 3   ]['imagen_portada'])."' alt=''>";
	}
	$respuestahtml.="</div>
	</div>
	</div>
	<div class='row-fluid'>
	<div class='textocentrado titularfecha'>

	</div>
	<div class='textocentrado titularpubs'>
	".utf8_encode($resultado[$i * 3   ]['titulo'])."
	</div>
	</div>
	</div>
	</div>";
	// print_r($respuestahtml);
	if (isset($resultado[ ($i * 3) + 1  ])){
		$respuestahtml.="<div class='span4'>
		<div id='numNoticia-".utf8_encode($resultado[($i * 3) +1  ]['id'])."' class='fichapubl'>
		<div class='row-fluid'>
		<div class='span12'>
		<div class='imagencentrada'>";
		if (isset($resultado[($i * 3) +1  ]['imagen_preview'])) {
			$respuestahtml.="<img class='img-responsive' src='admin/assets/uploads/previews/".utf8_encode($resultado[($i * 3) +1  ]['imagen_preview'])."' alt=''>";
		}
		else{
			$respuestahtml.="<img class='img-responsive' src='admin/assets/uploads/portadas/".utf8_encode($resultado[($i * 3) +1  ]['imagen_portada'])."' alt=''>";
		}
		$respuestahtml.="</div>
		</div>
		</div>
		<div class='row-fluid'>
		<div class='textocentrado titularfecha'>

		</div>
		<div class='textocentrado titularpubs'>
		".utf8_encode($resultado[($i * 3) +1  ]['titulo'])."
		</div>
		</div>
		</div>
		</div>";
		// print_r($respuestahtml);
		// print_r($resultado[($i * 3) + 1 ]['titulo']);
	}
	if (isset($resultado[ ($i * 3 ) + 2  ])){
		$respuestahtml.="<div class='span4'>
		<div id='numNoticia-".utf8_encode($resultado[$i * 3 +2  ]['id'])."' class='fichapubl'>
		<div class='row-fluid'>
		<div class='span12'>
		<div class='imagencentrada'>";
		if (isset($resultado[$i * 3 +2  ]['imagen_preview'])) {
			$respuestahtml.="<img class='img-responsive' src='admin/assets/uploads/previews/".utf8_encode($resultado[$i * 3 +2  ]['imagen_preview'])."' alt=''>";
		}
		else{
			$respuestahtml.="<img class='img-responsive' src='admin/assets/uploads/portadas/".utf8_encode($resultado[$i * 3 +2  ]['imagen_portada'])."' alt=''>";
		}
		$respuestahtml.="</div>
		</div>
		</div>
		<div class='row-fluid'>
		<div class='textocentrado titularfecha'>

		</div>
		<div class='textocentrado titularpubs'>
		".utf8_encode($resultado[$i * 3 +2  ]['titulo'])."
		</div>
		</div>
		</div>
		</div>";
		// print_r($respuestahtml);
		// print_r($resultado[$i * 3 + 2  ]['titulo']);
	}
	$respuestahtml.="</div>"; //Cerrar Row
}
print_r($respuestahtml);

?>