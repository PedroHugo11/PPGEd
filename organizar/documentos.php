<!doctype html> 

<?php
    session_start();
?>

<html>

<head>
    	<title>LIFE | DOCUMENTOS</title>
    	<meta name="viewport" content="width=device-width">
    	<link href="../style.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/icon.ico" >
</head>

<body>

<?php 
$pagina = 1; 

$total_sql = 9;
//Seta a quantidade de cursos por pagina
$quantidade_pg = 5;
//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_sql/$quantidade_pg);
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na página

?>

<!-- menu -->
<?php 
	if(isset($_SESSION['adm'])) {
		include ("menuAdm.php");
	} else {
		include ("../menu.php");	
	}
?>

<!-- Inicio -->
<?php include '../inicio.php';?>

<section class="info-section doc" id="what-we-do">	
		<div class="head-box text-center mb-5">
			<h2 class="title">Documentos</h2>
			<h6 class="text-underline-primary">Tenha Acesso aos nossos documentos</h6>
		</div>
        
        <div class="container-fluid">
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">title</h3>
							<p class="card-text">legenda</p>
							<a href="#" title="Ler Mais" class="read-more" >Ler mais<i class=" fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">title</h3>
							<p class="card-text">legenda</p>
							<a href="#" title="Ler Mais" class="read-more" >Ler mais<i class=" fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-2">
							<h3 class="card-title">title</h3>
							<p class="card-text">legenda</p>
							<a href="#" title="Ler Mais" class="read-more" >Ler mais<i class=" fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-3">
							<h3 class="card-title">title</h3>
							<p class="card-text">legenda</p>
							<a href="#" title="Ler Mais" class="read-more" >Ler mais<i class=" fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-4">
							<h3 class="card-title">title</h3>
							<p class="card-text">legenda</p>
							<a href="#" title="Ler Mais" class="read-more" >Ler mais<i class=" fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">title</h3>
							<p class="card-text">legenda</p>
							<a href="#" title="Ler Mais" class="read-more" >Ler mais<i class=" fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-2">
							<h3 class="card-title">title</h3>
							<p class="card-text">legenda</p>
							<a href="#" title="Ler Mais" class="read-more" >Ler mais<i class=" fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-3">
							<h3 class="card-title">title</h3>
							<p class="card-text">legenda</p>
							<a href="#" title="Ler Mais" class="read-more" >Ler mais<i class=" fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-4">
							<h3 class="card-title">title</h3>
							<p class="card-text">legenda</p>
							<a href="#" title="Ler Mais" class="read-more" >Ler mais<i class=" fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>

				<?php
					//Verificar a pagina anterior e posterior
					$pagina_anterior = $pagina - 1;
					$pagina_posterior = $pagina + 1;
				?>
				<nav class="navNoticia">
					<ul class="pagination">
						<li class="page-item">
							<?php
								if($pagina_anterior != 0){ ?>
								<a class="page-link" href="documentos.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">Anterior</a>
								<?php }else{ ?>
							<?php }  ?>
						</li>    
						<?php for($i = 1; $i < $num_pagina + 1; $i++){ ?>
							<li class="page-item"><a class="page-link" href="documentos.php?pagina=<?php echo $i; ?>"><?php echo $i;?></a></li>
						<?php } ?>
						<li class="page-item">
						<?php
							if($pagina_posterior <= $num_pagina){ ?>
								<a class="page-link" href="documentos.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
									<span aria-hidden="true">Próximo</span>
								</a>
							<?php }else{ ?>
							<?php }  ?>
						</li>    
					</ul>
				</nav>

			</div>
		</div>
		
		
        
</section>

<section class="team-section">
			<?php include '../footer.php';?>
</section>

</body>

</html>