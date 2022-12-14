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
				<h1 class="mb-3">Llista de camisetes</h1>
			</div>
			
		</header>







<div class="row">
	<div class="col-md-12 text-right">
		<a href="/form" class="btn btn-outline-primary">Crear camiseta</a>
		<div class="col-3">
				<a href="view/carreto.php" class="btn btn-outline-primary">Carreto</a>
			</div>
		<hr/>
		
	</div>
	<?php
	
	if(count($dataToView)>0){
		foreach($dataToView as $camiseta){
			?>
			
			<div class="col-md-3 col-12">
				<div class="card-body border border-secondary rounded">
				<img class="card-img-top" src="../img/<?php echo $camiseta['id']; ?>.jpg" alt="Imatge camiseta">
				
					<h5 class="card-title"><?php echo $camiseta['id']; ?></h5>
					<h5 class="card-title"><?php echo $camiseta['nom']; ?></h5>
					<div class="card-text"><?php echo nl2br($camiseta['descripcio']); ?></div>
					<h5 class="card-title"><?php echo $camiseta['preu']; ?></h5>
					<hr class="mt-1"/>
					<a href="/form/<?php echo $camiseta['preu']; ?>" class="btn btn-primary">Editar</a>
					<a href="/product/confirmDelete/<?php echo $camiseta['id']; ?>" class="btn btn-danger">Eliminar</a>
				</div>
			</div>
			<?php
		}
	}else{
		?>
		<div class="alert alert-info">
			Actualment no existeixen camisetes.
		</div>
		<?php
	}
	?>
</div>









</div>
</body>
<!--FINAL DEL CODI HTML-->
</html>