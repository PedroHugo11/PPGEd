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
                        <div class="jquery-accordion-menu-header">Docentes</div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mt-2">
                                    <h1 class="nome_docente">Adir Luiz Ferreira</h1>
                                    <ul class="atributos_professores">
                                        <li>
                                            <spam class="bold">Título:</spam> Doutor
                                        </li>
                                        <li>
                                            <spam class="bold">E-mail:</spam> adirlf@digizap.com.br
                                        </li>
                                        <li>
                                            <spam class="bold"> Curriculum Lattes:</spam> Acessar
                                        </li>
                                        <li>
                                            <spam class="bold"> Página do SIGAA:</spam> Acessar
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6 col-lg-6 mt-2">
                                    <h1 class="nome_docente">Adir Luiz Ferreira</h1>
                                    <ul class="atributos_professores">
                                        <li>
                                            <spam class="bold">Título:</spam> Doutor
                                        </li>
                                        <li>
                                            <spam class="bold">E-mail:</spam> adirlf@digizap.com.br
                                        </li>
                                        <li>
                                            <spam class="bold"> Curriculum Lattes:</spam> Acessar
                                        </li>
                                        <li>
                                            <spam class="bold"> Página do SIGAA:</spam> Acessar
                                        </li>
                                    </ul>
                                </div>
                            </div>    
                            <hr>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mt-2">
                                    <h1 class="nome_docente">Adir Luiz Ferreira</h1>
                                    <ul class="atributos_professores">
                                        <li>
                                            <spam class="bold">Título:</spam> Doutor
                                        </li>
                                        <li>
                                            <spam class="bold">E-mail:</spam> adirlf@digizap.com.br
                                        </li>
                                        <li>
                                            <spam class="bold"> Curriculum Lattes:</spam> Acessar
                                        </li>
                                        <li>
                                            <spam class="bold"> Página do SIGAA:</spam> Acessar
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6 col-lg-6 mt-2">
                                    <h1 class="nome_docente">Antônio Basílio Novaes Thomaz de Menezes</h1>
                                    <ul class="atributos_professores">
                                        <li>
                                            <spam class="bold">Título:</spam> Doutor
                                        </li>
                                        <li>
                                            <spam class="bold">E-mail:</spam> adirlf@digizap.com.br
                                        </li>
                                        <li>
                                            <spam class="bold"> Curriculum Lattes:</spam> Acessar
                                        </li>
                                        <li>
                                            <spam class="bold"> Página do SIGAA:</spam> Acessar
                                        </li>
                                    </ul>
                                </div>
                            </div>    
                            <hr>


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