<!DOCTYPE html>
<html>
   <head>
     <?php require_once 'header.php' ?>
   </head>
   <body>
      <?php require_once'menu.php';  ?>

		<div class="row-fluid banner-seccion fondo-naranja" id="pr-responsablemente" style="background-image: none; background-position: 50% 50%; ">
			<div class="span12 text-center contenedor-centrar">
				<h1 class="seccion-titular texto-blanco">Responsablemente</h1>
			</div>
		</div>
    	<div class="container">
      		<div class="row">
				<div class="span8 offset2 text-center" style="margin-top: 20px;">
					<ol class="breadcrumb breadcrumb-pr">
						<li><a href="index.php">Home</a><span class="divider">/</span></li>
						<li><a href="desarrollo-sostenible.php">Desarrollo Sostenible</a><span class="divider">/</span></li>
						<li><a href="programas.php?prioridad=2">Cultura de moderación</a><span class="divider">/</span></li>
						<li class="active">Responsablemente</li>
					</ol>
				</div>
      		</div>
			<div class="row">
				<div class="span8 offset2 text-center">
					<p class="texto-gris-2">
						El programa <strong>"Responsablemente"</strong> fomenta en colegios el no consumo de alcohol a temprana edad.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span6 offset3 text-center" style="margin-top: 20px;">
					<img src="asset/img/programas/4100.png" class="img-responsive obj-centrar">
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