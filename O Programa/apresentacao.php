<!DOCTYPE html> 

<?php
    session_start();
?>

<html>

<head>
    <title>PPGED - Pograma de Pós Graduação em Educação</title>
    <meta name="viewport" content="width=device-width">

	<!-- CSS -->
	<link href="../style.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet" id="bootstrap-css">

	<!-- JavaScript -->
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.11.js"></script>
	
	<!-- Icone -->
	<link rel="shortcut icon" href="../img/icon.ico" >
	
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
<?php include '../inicio.php';?>

<!-- sobre -->
<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include ("sideBar.php");	
				?>
			</div>

			<div class="col-md-8 col-lg-8">
				<div class="content" style="width:100%">
					<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
						<div class="jquery-accordion-menu-header">Apresentação</div>
				
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
									<p align="justify">			
									O Programa de Pós-Graduação em Educação/CE/UFRN, com 39 anos de funcionamento, contribui para o desenvolvimento da pesquisa e
									para a formação de pesquisadores em Educação, sua única área de concentração.<br><br>

									Ao longo do seu desenvolvimento, o Programa formou 1.330 (mil trezentos e trinta) pesquisadores em educação, 
									sendo 775 (setecentos e setenta e cinco) mestres e 555 (quinhentos e cinquenta e cinco) doutores, titulados em uma única área de concentração (Educação), 
									constituindo-se, assim, no maior Programa de Pós-Graduação da UFRN.<br><br>

									A pesquisa representa o eixo formativo privilegiado exigindo dedicação, 
									disponibilidade e envolvimento integral do pós-graduando nas atividades acadêmicas.<br><br>

									A proposta curricular está pautada nos estudos desenvolvidos nas Linhas de Pesquisa, 
									nas quais se organizam as atividades acadêmicas, em função dos projetos dos docentes que definem a relação de pertinência com os projetos dos discentes.<br><br>

									O Programa é reconhecido nacionalmente pela qualidade do trabalho realizado, alcançando conceito 5 nas três últimas avaliações da CAPES/MEC.<br><br>
									</p>
								</div>
							</div>
						</div>

						<div class="container">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<h3> Coordenadora </h3>
									<ul>
										<li>Prof.ª Dr.ª Rita de Cássia Barbosa Paiva Magalhães</li>
									</ul>
								</div>

								<div class="col-md-6 col-lg-6">
									<h3> Vice-Coordenadora </h3>
									<ul>
										<li>Prof.ª Dr.ª Claudianny Amorim Noronha</li>
									</ul> 
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<h3> Secretário </h3>
									<ul>
										<li>Milton José Câmara dos Santos</li>
									</ul>
								</div>

								<div class="col-md-6 col-lg-6">
									<h3> Funcionários </h3>
									<ul>
										<li>Lucas Reginer Correia</li>
										<li>Eliza Morais</li>
										<li>Letissandra da Silva</li>
									</ul>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 col-lg-6">
									<h3> Bolsistas </h3>
									<ul>
										<li>Laiani Vitória</li>
										<li>Elida Cassandra</li>
										<li>Larissa Alves</li>
										<li>Manoel Romão</li>
										<li>Samuel Zwinglio Azevedo</li>
									</ul>
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section id="footer">
			<?php include 'footer.php';?>
</section>

</body>

</html>