<!DOCTYPE html>
<html>
   <head>
     <?php require_once 'header.php' ?>
   </head>
   <body>
      <?php require_once'menu.php';  ?>

		<div class="row-fluid banner-seccion" id="pr-historia" style="background-image: url('asset/img/banners/programas/historia-de-la-cerveza-.jpg'); background-position: 50% 50%; ">
			<div class="span12 text-center contenedor-centrar">
				<h1 class="seccion-titular texto-blanco">Historia de la Cerveza</h1>
			</div>
		</div>
    	<div class="container">
      		<div class="row">
				<div class="span8 offset2 text-center" style="margin-top: 20px;">
					<ol class="breadcrumb breadcrumb-pr">
						<li><a href="index.php">Home</a><span class="divider">/</span></li>
						<li><a href="desarrollo-sostenible.php">Desarrollo Sostenible</a><span class="divider">/</span></li>
						<li><a href="programas.php?prioridad=2">Cultura Cervecera</a><span class="divider">/</span></li>
						<li class="active">Historia de la Cerveza</li>
					</ol>
				</div>
      		</div>
			<div class="row">
				<div class="span8 offset2 text-center">
					<p class="texto-gris-2">
						La cerveza nació hace aproximadamente 10.000 años, en civilizaciones nativas del Medio Oriente. En el Ecuador, sus orígenes se remontan a 1566, en el convento de San Francisco de Quito, cuando la Orden de los Franciscanos estableció la cervecería más antigua de Latinoamérica, para el consumo de sus frailes.
					</p>
				</div>
			</div>
		</div>
		<br/><br/>
		<div class="container">
			<div class="row">
				<div class="span8 offset2 text-center tituloseccion espaciado-a">
					<p class="textocentrado">Ingrediente de la Cerveza</p>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span3 offset2 text-center">
					<img src="asset/img/iconos/cebada.png" class="img-responsive obj-centrar">
				</div>
				<div class="span5 text-left">
					<p class="texto-gris-2">
						<br/><br/>
						<span class="texto-naranja">Cebada (Malta)</span><br/>
						La cebada, convertida en malta a través de un proceso de germinación controlado, aporta carbohidratos, vitaminas, elementos minerales, ácidos orgánicos, proteínas y otras sustancias.
					</p>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span3 offset2 text-center">
					<img src="asset/img/iconos/levadura-2.png" class="img-responsive obj-centrar">
				</div>
				<div class="span5 text-left">
					<p class="texto-gris-2">
						<br/><br/>
						<span class="texto-naranja">Levadura</span><br/>
						La acción de la levadura es fundamental para la producción de alcohol en menor grado y gas carbónico.
					</p>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span3 offset2 text-center">
					<img src="asset/img/iconos/agua-2.png" class="img-responsive obj-centrar">
				</div>
				<div class="span5 text-left">
					<p class="texto-gris-2">
						<br/><br/>
						<span class="texto-naranja">Agua</span><br/>
						La mayor parte de la cerveza constituye agua. Por eso, y al ser una bebida que no requiere azúcares añadidos, es un mito causante de obesidad.
					</p>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="span3 offset2 text-center">
					<img src="asset/img/iconos/agua.png" class="img-responsive obj-centrar">
				</div>
				<div class="span5 text-left">
					<p class="texto-gris-2">
						<br/><br/>
						<span class="texto-naranja">Lúpulo</span><br/>
						Flor que le da a la cerveza el aroma y amargor característicos. Contiene ácidos con propiedades medicinales, que combaten bacterias que se reproducen en el estómago.
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="span8 offset2 text-center tituloseccion espaciado-a">
					<p class="textocentrado">Construcción de Parque Los Algarrobos</p>
				</div>
			</div>
			<div class="row">
				<div class="span8 offset2 text-center">
					<p class="texto-gris-2">
						Cervecería Nacional, en coordinación con la Administración Zonal de Tumbaco (del Municipio del Distrito Metropolitano de Quito) y la Unidad de Espacio Público de Parques y Jardines (de la Empresa Pública Metropolitana de Movilidad y Obras Públicas) aportará con una obra para la conservación de la flora y fauna de la zona: Se trata del Parque Ecológico Los Algarrobos, en cuya 1ra fase de desarrollo, se está construyendo un mirador y una garita de seguridad.
					</p>
				</div>
			</div>
		</div>
		<br /><br />

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