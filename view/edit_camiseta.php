<!DOCTYPE html>
<html>
	<!--INICI DEL CODI HTML I LINK DE BOOTSTRAP-->
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<header class="mb-5">
			<div class="p-5 text-center bg-light" style="margin-top: 58px;">
				<h1 class="mb-3">Editar Camiseta</h1>
			</div>
			
		</header>





<?php
$nom = $descripcio = "";
 $id = 0;
$preu = 0;
if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if(isset($dataToView["data"]["nom"])) $title = $dataToView["data"]["nom"];
if(isset($dataToView["data"]["descripcio"])) $descripcio = $dataToView["data"]["descripcio"];
if(isset($dataToView["data"]["preu"])) $preu = $dataToView["data"]["preu"];
?>
<div class="row">
	<?php
	if(isset($_GET["response"]) and $_GET["response"] === true){
		?>
		<div class="alert alert-success">
			Operación realizada correctamente. <a href="FrontController.php?controller=camiseta&action=list">Volver al listado</a>
		</div>
		<?php
	}
	?>
	<form class="form" action="FrontController.php?controller=camiseta&action=save" method="POST">
		
		<div class="form-group">
			<label>Nom</label>
			<input class="form-control" type="text" name="nom" value="<?php echo $nom; ?>" />
		</div>
		<div class="form-group mb-2">
			<label>Descripcio</label>
			<textarea class="form-control" style="white-space: pre-wrap;" name="descripcio"><?php echo $descripcio; ?></textarea>
		</div>
		<label>Preu</label>
		<input type="number" name="preu" value="<?php echo $preu; ?>" />
		<input type="submit" value="Guardar" class="btn btn-primary"/>
		<a class="btn btn-outline-danger" href="FrontController.php?controller=camiseta&action=list">Cancelar</a>
	</form>
</div>





</div>
</body>
<!--FINAL DEL CODI HTML-->
</html>