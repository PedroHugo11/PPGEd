<!DOCTYPE html> 

<html>

<head>
        <title>PPGED - Pograma de Pós Graduação em Educação</title>
        <meta name="robots" content="noindex, nofollow">
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

        <!-- CKeditor -->
        <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>

        
        
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
                        <div class="jquery-accordion-menu-header">Alterar Informativo</div>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-2">
                                    
                                    <p>Preencha os dados abaixo para efetuar o cadastro de um novo informativo:</p>

                                    <label for="destaque">
                                    	<input type="checkbox" name="destaque" id="destaque" value="1">
                                        Notícia destaque (aparecerá de forma destacada na página inicial do site)
                                    </label>
                                    
                                    <form>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="data">Data</label>
                                                <input type="text" class="form-control" id="data" placeholder="00/00/0000" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Título</label>
                                                <input type="text" class="form-control" id="Título" placeholder="Título" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleFormControlSelect1">Categoria (fique atento quando alterar notícias)</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Noticias</option>
                                                    <option>Alunos Regulares</option>
                                                    <option>Alunos Especiais</option>
                                                    <option>Bolsa</option>
                                                    <option>Outros</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="editor1">Texto:</label>
                                                <textarea cols="80" id="editor1" name="editor1" rows="10"></textarea>
                                                <script>
                                                    CKEDITOR.replace('editor1', {
                                                    fullPage: true,
                                                    extraPlugins: 'docprops',
                                                    // Disable content filtering because if you use full page mode, you probably
                                                    // want to  freely enter any HTML content in source mode without any limitations.
                                                    allowedContent: true,
                                                    height: 320
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <input type="reset" value="Limpar" class="button btn btn-primary">
                                        <button class="btn btn-primary" type="submit">Enviar dados</button>
                                    </form>

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