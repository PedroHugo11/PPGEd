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
                        <div class="jquery-accordion-menu-header">Banco de Teses e Dissertações</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">

                                    <h2 align="center" class="mt-3"> Consulta </h2>

                                    <p class="p-accordion mt-3"> 
                                        <strong> Clique no link abaixo para acessar o banco de teses e dissertações </strong> <br>			
                                        <a href="http://repositorio.ufrn.br:8080/jspui/handle/123456789/11945/simple-search?location=123456789%2F11945&query=&rpp=100&sort_by=dc.date.issued_dt&order=DESC&etal=0&submit_search=Atualizar">Banco de Teses e Dissertações PPGEd - BCZM/UFRN</a>; 
                                    </p>

                                    <h2 align="center" class="mt-3"> Atenção </h2>

                                    <p class="p-accordion mt-3"> 
                                    A Biblioteca Central Zila Mamede está passando por uma série de ataques aos seus servidores. O serviço de consulta ao banco de dados de teses e dissertação da Faculdade Federal do Rio Grande do Norte pode estar instável. Todas as atitudes em relação ao ocorrido já foram tomadas. 
                                    Uma correção na segurança já está sendo feita (prazo para conclusão: novembro) e os relatórios entregues nas mãos do órgão competente para investigar a origem das invasões.
                                    </p>
                                    
                                    <p class="p-accordion"> 
                                    O Programa de Pós-Graduação em Educação, diante da situação, disponibiliza as teses e dissertações do ultimo ano vigente no link abaixo.
                                    </p>

                                    <a href="https://drive.google.com/folderview?id=0B2rF19cD8pywdWpkYnFPMW1MbWc&usp=sharing">Teses e Dissertações 2015</a>
                                    
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