<!DOCTYPE html>
<html>
   <head>
     <?php require_once 'header.php' ?>
   </head>
   <body>
      <?php require_once'menu.php';  ?>

		<div class="row-fluid banner-seccion" id="pr-reciclaje" style="background-image: url('asset/img/banners/programas/reciclaje.jpg'); background-position: 50% 50%; ">
			<div class="span12 text-center contenedor-centrar">
				<h1 class="seccion-titular texto-blanco">Reciclaje</h1>
			</div>
		</div>
    	<div class="container">
      		<div class="row">
				<div class="span8 offset2 text-center" style="margin-top: 20px;">
					<ol class="breadcrumb breadcrumb-pr">
						<li><a href="index.php">Home</a><span class="divider">/</span></li>
						<li><a href="desarrollo-sostenible.php">Desarrollo Sostenible</a><span class="divider">/</span></li>
						<li>Cuidado del Ambiente<span class="divider">/</span></li>
						<li class="active">Reciclaje</li>
					</ol>
				</div>
      		</div>
		</div>
		<br/><br/>
		<div class="container">
			<div class="row espaciado-a">
				<div class="span3 offset2 text-center">
					<img src="asset/img/iconos/sistema-de-clasificacion.png" class="img-responsive obj-centrar">
				</div>
				<div class="span5 text-left">
					<p class="texto-gris-2">
						<br/><br/>
						<span class="texto-naranja">Sistema de Clasificación de Residuos</span><br/>
						Tachos clasificados al interior de nuestras plantas permite una mejor recolección de desperdicios por parte de nuestros colaboradores al segmentarlos en vidrio, papel, plástico y materiales no reciclables.
					</p>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span3 offset2 text-center">
					<img src="asset/img/iconos/acuerdo.png" class="img-responsive obj-centrar">
				</div>
				<div class="span5 text-left">
					<p class="texto-gris-2">
						<br/><br/>
						<span class="texto-naranja">Acuerdo con empresa Owen Illinois</span><br/>
						Busca aumentar el porcentaje de vidrio ámbar reciclado en la elaboración de nuevos envases.
					</p>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span3 offset2 text-center">
					<img src="asset/img/iconos/mejoras.png" class="img-responsive obj-centrar">
				</div>
				<div class="span5 text-left">
					<p class="texto-gris-2">
						<br/><br/>
						<span class="texto-naranja">Mejoras en el diseño de envases</span><br/>
						Ppermite reducir el peso de tapas y botellas.
					</p>
				</div>
			</div>
		</div>
		<div class="hidden-phone hidden-tabler" >
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
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