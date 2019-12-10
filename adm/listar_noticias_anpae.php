<!DOCTYPE html> 

<html>

<head>
        <title>PPGED - Pograma de Pós Graduação em Educação</title>
        <meta name="viewport" content="width=device-width">
        <base href="{url}" />
    
        <!-- CSS -->
        <link href="../style.css" rel="stylesheet">
        <link href="../css/font-awesome.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    
        <!-- JavaScript -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/jquery-1.11.js"></script>
        <script src="../js/sideBar.js"></script>
        
        <!-- Icone -->
        <link rel="shortcut icon" href="../img/icon.ico">

        <!-- Edicao Tabela -->
        <link href="../css/tabela.css" rel="stylesheet">
        <script src="../js/jquery-tabela.js"></script>
        <script src="../js/bootstrap-tabela.js"></script>
        
        <script type="text/javascript">
            $(window).scroll(function() {    
                    var scroll = $(window).scrollTop();
        
                    if (scroll >= 100) {
                            $(".top-nav").addClass("light-header");
                            document.getElementById("logo").src="../img/logo_ppged.png";
                    } else {
                            $(".top-nav").removeClass("light-header");
                            document.getElementById("logo").src="../img/logo_ppged_white.png";
                            
                    }
            });
        </script>

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
                        <div class="jquery-accordion-menu-header">Listar Notícias</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Abaixo é exibida uma lista com todos as notícias cadastradas no sistema. Você pode editá-las, excluí-las ou buscá-las através da tabela abaixo:</p>
                                    <a href="adicionarInformativo.php"><input type="submit" value="Criar Novo" class="button btn btn-primary mb-3"></a>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead style="text-align:center">
                                            <tr>
                                                <th>Data</th>
                                                <th>Categoria</th>
                                                <th>Títlo</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                            <tr>
                                                <td>17/05/2018</td>
                                                <td>Evento</td>
                                                <td>COLOQUIO INTERNACIONAL CASTORIADIS</td>
                                                <td>
                                                    <a href="#" title="Visualizar dados completos do usuário"><i class="fa fa-user-circle"></i></a>
                                                    <a href="#" title="Alterar dados do usuário"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" title="Remover usuário. CUIDADO: NÃO PODE SER DESFEITO"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>           
                                        </tbody>
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