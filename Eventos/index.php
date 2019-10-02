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
                        <div class="jquery-accordion-menu-header">Processos Seletivos</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Data</th>
                                                <th>Evento</th>
                                                <th>Local</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>30/09/2019</td>
                                                <td>DEFESA DE DISSERTAÇÃO | MARCILENE FRANÇA DA SILVA TABOSA</td> 
                                                <td>Auditório 01 do PPGEd - NEPSA II</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>20/09/2019</td>
                                                <td>DEFESA DE TESE | ROSANE DA SILVA NUNES</td> 
                                                <td>Auditório D - CCHLA</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>18/09/2019</td>
                                                <td>II Colóquio de Pesquisa em Políticas Educacionais – I Seminário Integrado de Pesquisa UFRN/UFG</td> 
                                                <td>Centro de Educação - UFRN</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>30/08/2019</td>
                                                <td>DEFESA DE DISSERTAÇÃO | SANDRA CRISTINA BEZERRA DE BARROS</td> 
                                                <td>SANDRA CRISTINA BEZERRA DE BARROS</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Data</th>
                                                <th>Evento</th>
                                                <th>Local</th>
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