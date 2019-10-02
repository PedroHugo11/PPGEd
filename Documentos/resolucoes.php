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
    

    <script>
	    $(document).ready(function(){
		    $('#example').DataTable({
		    	"language": {
		            "lengthMenu": "Mostrando _MENU_ registros por página",
		            "zeroRecords": "Nada encontrado",
		            "info": "Mostrando página _PAGE_ de _PAGES_",
		            "infoEmpty": "Nenhum registro disponível",
		            "infoFiltered": "(filtrado de _MAX_ registros no total)",
					"sSearch" : "Pesquisar"
		        }
		    });
		});

        $(document).ready(function(){
		    $('#teste').DataTable({
		    	"language": {
		            "lengthMenu": "Mostrando _MENU_ registros por página",
		            "zeroRecords": "Nada encontrado",
		            "info": "Mostrando página _PAGE_ de _PAGES_",
		            "infoEmpty": "Nenhum registro disponível",
		            "infoFiltered": "(filtrado de _MAX_ registros no total)",
					"sSearch" : "Pesquisar"
		        }
		    });
		});
	</script>
	
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
                        <div class="jquery-accordion-menu-header">Resoluções</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                <h2 align="center"> RESOLUÇÕES DO PPGED </h2>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="https://drive.google.com/file/d/13lHidii0feOQq5S_a26-ayz5X2TuKZbk/view">MUDANÇA DE NÍVEL</a></td> 
                                                <td>2017</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><a href="https://drive.google.com/file/d/1uvnxRP1yN9x6KI7XLQ7bdFjAX7tvB1vC/view">PROFICIÊNCIA</a></td> 
                                                <td>2017</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><a href="#">ELEIÇÃO PPGED</a></td> 
                                                <td>2017</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <h2 align="center" class="mt-5"> RESOLUÇÕES DO CONSEPE </h2>
                                    <table id="teste" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="https://drive.google.com/file/d/13lHidii0feOQq5S_a26-ayz5X2TuKZbk/view">NORMAS DOS PROGRAMAS E CURSOS DE PÓS-GRADUAÇÃO DA UFRN</a></td> 
                                                <td>2013</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><a href="https://drive.google.com/file/d/1uvnxRP1yN9x6KI7XLQ7bdFjAX7tvB1vC/view">ESTÁGIO DOCÊNCIA</a></td> 
                                                <td>2019</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    
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