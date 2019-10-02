<!doctype html> 

<?php
    session_start();
?>

<html>

<head>
	<title>LIFE</title>
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/icon.ico" >
</head>

<body>

<?php 
    include "BD/connBD.php";
    $id = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM documentos ORDER BY id DESC LIMIT 1"));
?>

<?php include ("menuAdm.php");?>

<?php include 'inicio.php';?>

<section class="info-section">
	<div class="container">
		<div class="head-box text-center mb-5">
			<h2 class="title">CADASTRAR DOCUMENTOS</h2>
			<h6 class="text-underline-primary"> Cadastro de documentos</h6>
    	</div>
        <form method="POST" action="BD/cadastrarDocumento.php" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-2">
                        <label for="cod">ID</label>
                        <input type="text" class="form-control" id="cod" name="cod" value="<?php echo $id['id']+1;?>">
                </div>
                <div class="col-md-4">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="legenda">Legenda</label>
                        <input type="text" class="form-control" id="legenda" name="legenda">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="icon">Icone - </label>
                        <i class="fa fa-file-o"></i>
                        <i class="far fa-lightbulb"></i>
                        <i class="fa fa-bullhorn"></i>
                        <i class="fa fa-file-text-o"></i>
                        <select id="icon" class="form-control" name="icon">
                            <option selected>Escolha</option>
                            <option value="block-1">1 - Arquivo em Branco</option>
                            <option value="block-2">2 - Lâmpada light</option>
                            <option value="block-3">3 - Megafone</option>
                            <option value="block-4">4 - Arquivo com Linhas</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="doc">documento</label>
                        <input type="file" class="form-control-file" id="doc" name="doc">
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="form-group">
                        <button class="btn btn-primary col-md-3" type="submit" id="button">Postar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section> 

<section id="footer">
		<?php include 'footer.php';?>
</section>

</body>
</html>
