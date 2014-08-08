<!DOCTYPE html>
<html>
   <head>
     <?php require_once 'header.php' ?>
   </head>
   <body>
      <?php require_once'menu.php';  ?>

		<div class="row-fluid banner-seccion" id="pr-maridaje" style="background-image: url('asset/img/banners/programas/maridaje.jpg'); background-position: 50% 50%; ">
			<div class="span12 text-center contenedor-centrar">
				<h1 class="seccion-titular texto-blanco">Maridaje</h1>
			</div>
		</div>
    	<div class="container">
      		<div class="row">
				<div class="span8 offset2 text-center" style="margin-top: 20px;">
					<ol class="breadcrumb breadcrumb-pr">
						<li><a href="index.php">Home</a><span class="divider">/</span></li>
						<li><a href="desarrollo-sostenible.php">Desarrollo Sostenible</a><span class="divider">/</span></li>
						<li><a href="programas.php?prioridad=2">Cultura Cervecera</a><span class="divider">/</span></li>
						<li class="active">Maridaje</li>
					</ol>
				</div>
      		</div>
			<div class="row">
				<div class="span4 offset4 text-center">
					<img src="asset/img/iconos/maridaje.png" class="img-responsive obj-centrar">
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="span8 offset2 text-center">
					<p class="texto-gris-2">
						Por sus características, la cerveza ofrece una variedad en sabores y aromas, lo cual permite que se convierta en un auténtico placer no solo su degustación, sino también su combinación con comidas. A esto llamamos maridaje, el arte de combinar las comidas con la bebida perfecta.
					</p>
					<p class="texto-gris-2">
						La cerveza combina bien con escabeches y maricos, con platos en los que abunda el tomate o sabores ácidos como ensaladas aliñadas con vinagre o aquellas verduras de sabores amargos y salsas agridulces de la cocina oriental.
					</p>
					<p class="texto-gris-2">
						La cerveza encuentra una contraposición perfecta en los platos con picantes y fritos con mucha grasa, ahumados (parrilladas), marinados y a la brasa, carnes de cerdo, embutidos y hasta con sushi.
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