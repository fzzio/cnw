<!DOCTYPE html>
<html>
   <head>
     <?php require_once 'header.php' ?>
   </head>
   <body>
      <?php require_once'menu.php';  ?>

		<div class="row-fluid banner-seccion" id="pr-implementaciones" style="background-image: url('asset/img/banners/programas/carbono-neutro.jpg'); background-position: 50% 50%; ">
			<div class="span12 text-center contenedor-centrar">
				<h1 class="seccion-titular texto-blanco">Carbono Neutro</h1>
			</div>
		</div>
    	<div class="container">
      		<div class="row">
				<div class="span8 offset2 text-center" style="margin-top: 20px;">
					<ol class="breadcrumb breadcrumb-pr">
						<li><a href="index.php">Home</a><span class="divider">/</span></li>
						<li><a href="desarrollo-sostenible.php">Desarrollo Sostenible</a><span class="divider">/</span></li>
						<li><a href="programas.php?prioridad=3">Cuidado del Ambiente</a><span class="divider">/</span></li>
						<li class="active">Carbono Neutro</li>
					</ol>
				</div>
      		</div>
      	</div>
      	<div class="container">
      		<div class="row">
				<div class="span8 offset2 text-center tituloseccion" style="margin-top: 10px;">
					<p class="textocentrado">¿QUÉ ES?</p>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span4 offset4 text-center">
					<img src="asset/img/iconos/que-es.png" class="img-responsive obj-centrar">
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span8 offset2 text-center">
					<p class="texto-gris">
						La Certificación Carbono Neutro se nos otorga por la práctica de medir y balancear las emisiones de los gases de efecto invernadero en nuestra operación de la Planta Cumbayá (Quito), con prácticas de reducción y compensación que ayuden a mitigar el impacto en el ambiente.
					</p>
				</div>
			</div>
		</div>
		<br /><br />
		<div class="container">
      		<div class="row">
				<div class="span8 offset2 text-center tituloseccion" style="margin-top: 10px;">
					<p class="textocentrado">¿QUÉ HACEMOS?</p>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span4 offset4 text-center">
					<img src="asset/img/iconos/que-hacemos.png" class="img-responsive obj-centrar">
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span8 offset2 text-center">
					<p class="texto-gris">
						Para ello estamos aportando en la conservación de 2.385 hectáreas de bosques en la localidad de Limón Indanza, Morona Santiago (región Amazónica).
					</p>
				</div>
			</div>
		</div>

		<footer>
			<?php require_once'footer.php'; ?>
		</footer>
		<script type="text/javascript">
      $(document).ready(function () {
      	$("#btn-navegacion").hide();
      });
      </script>
   </body>
</html>