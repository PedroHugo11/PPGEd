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
                        <div class="jquery-accordion-menu-header">Alterar dados pessoais</div>
                            <p style="margin-top:8%;">Caro(a) Fulano,</p>
                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12">
                                    
                                    <p> preencha o formulário abaixo para fazer alteração nos seus dados pessoais:</p>
                                    
                                    <form>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="nome">Nome</label>
                                                <input type="text" class="form-control" id="nome" placeholder="Nome" value="Pedro" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email" placeholder="E-mail" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="telefone">Telefone</label>
                                                <input type="text" class="form-control" id="telefone" placeholder="telefone" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="celular">Celular</label>
                                                <input type="text" class="form-control" id="celular" placeholder="celular" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="login">Login</label>
                                                <input type="text" class="form-control is-invalid" id="nome" placeholder="Nome" value="Pedro" disabled>
                                                <div class="invalid-feedback">
                                                    Não pode ser alterado
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="senha">Senha</label>
                                                <input type="password" class="form-control is-invalid" id="senha" placeholder="senha" value="pedro2019" disabled>
                                                <div class="invalid-feedback"><a href="#">Alterar a senha</a></div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Dados originais</button>
                                        <button class="btn btn-primary" type="submit">Alterar dados</button>
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