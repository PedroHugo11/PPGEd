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

    <!-- Edicao Tabela -->
    <link href="../css/tabela.css" rel="stylesheet">
    <script src="../js/jquery-tabela.js"></script>
    <script src="../js/bootstrap-tabela.js"></script>
	
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
						<div class="jquery-accordion-menu-header">Convênios Internacionais</div>
				
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
									
                                    <p>Programa vem construindo uma cultura acadêmica em torno das temáticas de interesse de suas Linhas de Pesquisa mediante a articulação de seus docentes e discentes com grupos de pesquisas de excelência, na região, no país e no exterior.
                                     Nesse sentido, docentes e pós-graduandos do Programa têm realizado regularmente missões científicas de cooperação nacional e internacional.</p>
                                    
                                    <h5 align="justify" class="mt-5">01 - Reformas Educacionais e Ensino Superior: impactos da globalização no acesso e na inclusão social no Brasil e na Espanha.</h5>
                                    <p><b>Coordenação: </b>Prof.ª Dr.ª Betania Leite Ramalho.<br>
                                    <b>Linha de Pesquisa: </b>Formação e Profissionalização Docente.<br>
                                    <b>Instituições participantes:</b></p>

                                    <ol>
                                        <li>Universidade de Valência - Espanha</li>
                                        <li>Universidade Lusófona – Portugal</li>
                                        <li>Universidade Federal da Paraíba</li>
								    </ol>

                                    <hr>

                                    <h5 align="justify" class="mt-5">02 - Narrativas infantis. O que contam as crianças sobre as escolas da infância?</h5>
                                    <p><b>Coordenação: </b>Prof.ª Dr.ª Maria da Conceição F. B. S. Passeggi.<br>
                                    <b>Linha de Pesquisa: </b>Brasil, França, Polônia, Suíça.<br>
                                    <b>Instituições participantes:</b></p>

                                    <ol>
                                        <li>Universidade Federal de Pernambuco</li>
                                        <li>Universidade Federal Fluminense</li>
                                        <li>Universidade Federal de São Paulo</li>
                                        <li>Universidade Cidade de São Paulo</li>
                                        <li>Universidade Federal do Rio Grande do Norte</li>
								    </ol>
                                    
                                    <hr>

                                    

								</div>
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