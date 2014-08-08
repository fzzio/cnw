<!DOCTYPE html>
<html>
   <head>
     <?php require_once 'header.php' ?>
   </head>
   <body>
      <?php require_once'menu.php';  ?>

		<div class="row-fluid banner-seccion" id="pr-implementaciones" style="background-image: url('asset/img/banners/programas/agua.jpg'); background-position: 50% 50%; ">
			<div class="span12 text-center contenedor-centrar">
				<h1 class="seccion-titular texto-blanco">Agua</h1>
			</div>
		</div>
    	<div class="container">
      		<div class="row">
				<div class="span8 offset2 text-center" style="margin-top: 20px;">
					<ol class="breadcrumb breadcrumb-pr">
						<li><a href="index.php">Home</a><span class="divider">/</span></li>
						<li><a href="desarrollo-sostenible.php">Desarrollo Sostenible</a><span class="divider">/</span></li>
						<li><a href="programas.php?prioridad=3">Cuidado del Ambiente</a><span class="divider">/</span></li>
						<li class="active">Agua</li>
					</ol>
				</div>
      		</div>
      	</div>
      	<div class="container">
      		<!-- <div class="row">
				<div class="span8 offset2 text-center tituloseccion" style="margin-top: 10px;">
					<p class="textocentrado">AGUA</p>
				</div>
			</div> -->
			<div class="row">
				<div class="span8 offset2 text-center">
					<span class="titulo-naranja">Plantas de Tratamiento de Aguas Residuales (PTAR).</span>
					<p class="texto-gris">
						Implementadas en nuestras fábricas de Guayaquil y Quito, tienen como objetivo eliminar los agentes contaminantes del 100% del agua utilizada en los procesos de producción y servicios para obtener agua limpia, que luego es reutilizada para otras actividades de la operación, como jardinería y limpieza.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span4 offset4 text-center">
					<img src="asset/img/iconos/agua.png" class="img-responsive obj-centrar">
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="span8 offset2 text-center">
					<span class="titulo-naranja">Nuevas Líneas de Embotellado</span>
					<p class="texto-gris">
						En Guayaquil y Quito, se encuentran entre las más modernas de la región, y permiten la optimización de recursos, especialmente del agua.
					</p>
				</div>
			</div>
			<br /><br />
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