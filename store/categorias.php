<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	/* Connect To Database*/
	require_once($_SERVER['DOCUMENT_ROOT'].'/server_productos/config/db.php"');//Contiene las variables de configuracion para conectar a la base de datos
	require_once($_SERVER['DOCUMENT_ROOT'].'/server_productos/config/conexion.php"');//Contiene funcion que conecta a la base de datos
	
	$active_categoria="active";
	$title="Categorías | Simple Invoice";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head.php");?>
  </head>
  <body>
	<?php
	include("navbar.php");
	?>
	
    <div class="container-fluid">
	<div class="">
		<div class="jumbotron jumbotron-fluid"" >
		    <div class="container">
			<h4><i class='fas fa-search'></i> Consultar Categorías</h4>
				<hr class="my-4">
				<button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevoCliente"><span class="fas fa-plus" ></span> Nueva Categoría</button>
			</div>
		</div>
		<div class="panel-body">
		
			
			
			<?php
				include("modal/registro_categorias.php");
				include("modal/editar_categorias.php");
			?>
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Nombre</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre de la categoría" onkeyup='load(1);'>
							</div>
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="fas  fa-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
							
						</div>
				
				
				
			</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			
		
	
			
			
			
  </div>
</div>
		 
	</div>
	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/categorias.js"></script>
  </body>
</html>
