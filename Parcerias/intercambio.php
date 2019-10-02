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
						<div class="jquery-accordion-menu-header">Intercâmbio</div>
				
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
									
                                    <h2 align="center"> Nacionais</h2>
                                    <h3 align="justify">REMUNERAÇÃO DOS PROFESSORES DE ESCOLAS PÚBLICAS DE EDUCAÇÃO BÁSICA</h3> 
                                    <p><b>Programa Observatório de Educação do MEC</b><br>
                                    <b>Coordenação (UFRN): </b>Prof.ª Dr.ª Magna França<br>
                                    <b>Linha de Pesquisa:  </b>Política e Práxis da Educação<br></p>
                                    <p><b>Instituições participantes:</b></p>

                                    <ol>
                                        <li>Universidade Federal de Minas Gerais</li>
                                        <li>Universidade de São Paulo</li>
                                        <li>Universidade Federal de Santa Catarina</li>
                                        <li>Universidade Federal do Paraná.</li>
								    </ol>

                                    <hr>
                                    
                                    <h3 align="justify">O PENSAMENTO DE PAULO FREIRE NA EDUCAÇÃO BRASILEIRA: ANÁLISE DOS SISTEMAS PÚBLICOS DE ENSINO A PARTIR DA DÉCADA DE 90</h3>
                                    <p><b>Coordenafora: </b>Prof.ª Dr.ª Marta Maria Castanho Almeida Pernambuco<br>
                                    <b>Linha de Pesquisa:  </b>Estratégias do Pensamento e Produção do Conhecimento<br></p>

                                    <hr>

                                    <h3 align="justify">ADOÇÃO DE TECNOLOGIAS DE ENSINO À DISTÂNCIA COMO APOIO AO ENSINO E PESQUISA NA PÓS-GRADUAÇÃO EM ADMINISTRAÇÃO</h3>
                                    <p>Parceria com o Programa de Pós Graduação em Administração (Coordenado pelo Prof. Dr. Miguel Edaurdo Moreno Añes) e o Programa de Pós-Graduação em Educação (Coordenação da Prof.ª Dr.ª Alda Maria Duarte Araújo Castro e do Prof. Dr. Antônio Cabral Neto).</p>
                                    <p><b>Financiamento:</b> CAPES<br>
                                       <b>Objetivo: </b>  A proposta tem como principal enfoque apropriar um ambiente virtual para o desenvolvimento de ensino e pesquisa em Administração na modalidade à distância. Esse instrumento servirá de apoio ao ensino e à pesquisa na pós-graduação em Administração.
                                    </p>

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