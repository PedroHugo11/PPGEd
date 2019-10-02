<!doctype html> 

<?php
    session_start();
?>

<html>

<head>
    <title> LIFE | LOGIN </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	<base href="{url}" />
    <link href="style.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/icon.ico" >
    
</head>

<body >
<!-- menu -->
<?php 
	if(isset($_SESSION['adm'])) {
		include ("menuAdm.php");
	} else {
		include ("menu.php");	
	}
?>

<section class="login-section">	
    <div class="container login-container">
        <div class="row">
            <div class="col-md-12 login-form">		
            <h3 id="login-title" align="center" ><img id="logo" class="img-fluid" src="img/life.png" alt="" width="120"></h3>
                <form class="form" role="form" method="post" action="BD/logar.php">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="email" placeholder="Email"/>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="password" class="form-control" name="senha" placeholder="Senha"/>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btnSubmit">Login</button>
                    </div>
                    <div class="form-group">
                        <a href="#" data-toggle="modal" data-target="#modalPassword" class="ForgetPwd">Esqueceu a senha ?</a>
                    </div>   
                </form>
            </div>
        </div>    
    </div>
</section>

</body>
</html>


<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Recuperar Senha</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                            <form class="form-signin">								
                                <div class="form-label-group">
                                    <label for="inputEmail">Inserir E-Mail</label>
                                    <input type="email" id="inputEmail" class="form-control" placeholder="fulano@hotmail.com" required autofocus>
                                </div>
                                <button class="mt-3 btn btn-md btn-primary btn-block" type="submit">Enviar</button>
                                <p class="mt-2 mb-3 text-muted text-center"><img class="img-fluid" id="imgFooter" src="img/logo_ce.png" alt="" ></p>
                            </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Fechar</button>
            </div>
        </div>
    </div>
</div>