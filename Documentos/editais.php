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
                        <div class="jquery-accordion-menu-header">Editais</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                <h2 align="center"> EDITAIS DO PPGED </h2>
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
                                                <td><a href="http://www.ppged.ufrn.br/uploads/arquivos/editais/Edital%20retificado%2023.07.19.pdf">EDITAL Nº 05/2019 – PROCESSO SELETIVO 2020 PPGEd</a></td> 
                                                <td>2019</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><a href="http://www.ppged.ufrn.br/uploads/arquivos/editais/Edital%20-%20Reingresso%202019.2.pdf">EDITAL N° 04/2019 – REINGRESSO - PPGED/UFRN</a></td> 
                                                <td>2019</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><a href="#">EDITAL Nº 03/2019 - CREDENCIAMENTO DE NOVOS DOCENTES PERMANENTES - PPGEd/UFRN (Cronograma retificado dia 13/06/2019)</a></td> 
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