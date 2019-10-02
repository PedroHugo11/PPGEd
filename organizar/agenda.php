<!doctype html> 

<?php
    session_start();
?>

<html>

<head>
    <title>LIFE | AGENDA</title>
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/icon.ico" >
</head>

<body>
<!-- menu -->
<?php 
	if(isset($_SESSION['adm'])) {
		include ("menuAdm.php");
	} else {
		include ("menu.php");	
	}
?>

<!-- Inicio -->
<?php include 'inicio.php';?>

<section class="info-section doc" id="what-we-do">	
		<div class="head-box text-center mb-5">
			<h2 class="title">Agenda</h2>
			<h6 class="text-underline-primary">Tenha Acesso a nossa agenda</h6>
		</div>
        
        <div class="container-fluid">
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card documento">
						<div class="card-block block-1">
							<h3 class="card-title">LEA Artes</h3>
							<p class="card-text">Ver programação de uso do Laboratório de Artes.</p>
							<a href="https://calendar.google.com/calendar/embed?src=38idr10m60fqptgg1srmfgnr20%40group.calendar.google.com&ctz=America/Fortaleza" title="Read more" class="read-more" >Ver mais<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card documento">
						<div class="card-block block-2">
							<h3 class="card-title">LEA Ciências Humanas</h3>
							<p class="card-text">Ver programação de uso do Laboratório de Ciências Humanas.</p>
							<a href="https://calendar.google.com/calendar/embed?src=4t93gv40hb77ehkpgfg55spcrk%40group.calendar.google.com&ctz=America%2FFortaleza" title="Read more" class="read-more" >Ver mais<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card documento">
						<div class="card-block block-3">
							<h3 class="card-title">LEA Ciências Naturais</h3>
							<p class="card-text">Ver programação de uso do Laboratório de Ciências Naturais.</p>
							<a href="https://calendar.google.com/calendar/embed?src=iiki73nnlg1mi95f37ldplnp7c%40group.calendar.google.com&ctz=America%2FFortaleza;" title="Read more" class="read-more" >Ver mais<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card documento">
						<div class="card-block block-4">
							<h3 class="card-title">LEA Linguagens</h3>
							<p class="card-text">Ver programação de uso do Laboratório de Linguagens.</p>
							<a href="https://calendar.google.com/calendar/embed?src=hrl53l0dbsnbcf5iruthodvdho%40group.calendar.google.com&ctz=America%2FFortaleza" title="Read more" class="read-more" >Ver mais<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="card documento">
						<div class="card-block block-5">
							<h3 class="card-title">LEA Matemática</h3>
							<p class="card-text">Ver programação de uso do Laboratório de Matemática.</p>
							<a href="https://calendar.google.com/calendar/embed?src=18fm100quu847go85765l1see8%40group.calendar.google.com&ctz=America%2FFortaleza" title="Read more" class="read-more" >Ver mais<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
            </div>
        </div>    
        
</section>

<section class="team-section">
			<?php include 'footer.php';?>
</section>

</body>

</html>