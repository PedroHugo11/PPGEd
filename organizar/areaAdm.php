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
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.ico" >
</head>

<body>

<?php 
    include "BD/connBD.php";
    $id = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM noticia ORDER BY id DESC LIMIT 1"));
?>

<?php include ("menuAdm.php");?>

<?php include 'inicio.php';?>

<section class="info-section">
	<div class="container">
		<div class="head-box text-center mb-5">
			<h2 class="title">CADASTRAR NOTÍCIAS</h2>
			<h6 class="text-underline-primary"> Cadastro de Notícias, editais, informes</h6>
    	</div>
        <form method="POST" action="BD/cadastrarNoticia.php" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="emissor">Emissor</label>
                    <input type="text" class="form-control" id="emissor" name="emissor" placeholder="Emissor" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="dia">Data - Dia</label>
                    <select id="dia" class="form-control" name="dia">
                        <option selected>Escolha</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="mes">Data - Mês</label>
                    <select id="mes" class="form-control" name="mes">
                        <option selected>Escolha</option>
                        <option value="JAN">Janeiro</option>
                        <option value="FEV">Fevereiro</option>
                        <option value="MAR">Março</option>
                        <option value="ABR">Abril</option>
                        <option value="MAI">Maio</option>
                        <option value="JUN">Junho</option>
                        <option value="JUL">Julho</option>
                        <option value="AGO">Agosto</option>
                        <option value="SET">Setembro</option>
                        <option value="OUT">Outubro</option>
                        <option value="NOV">Novembro</option>
                        <option value="DEZ">Dezembro</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="ano">Data - Ano</label>
                    <select id="ano" class="form-control" name="ano">
                        <option selected>Escolha</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="tag1">Tag 1</label>
                    <input type="text" class="form-control" id="tag1" name="tag1" placeholder="tag" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="tag2">Tag 2</label>
                    <input type="text" class="form-control" id="tag2" name="tag2" placeholder="tag" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="tag3">Tag 3</label>
                    <input type="text" class="form-control" id="tag3" name="tag3" placeholder="tag" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="tag4">Tag 4</label>
                    <input type="text" class="form-control" id="tag4" name="tag4" placeholder="tag" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-1">
                    <div class="form-group">
                        <label for="par1">Matéria - Parágrafo 1</label>
                        <textarea class="form-control" id="par1" name="par1" rows="2"></textarea>
                    </div>
                </div>    
                <div class="col-md-12 mb-1">
                    <div class="form-group">
                        <label for="par2">Matéria - Parágrafo 2</label>
                        <textarea class="form-control" id="par2" name="par2" rows="2"></textarea>
                    </div>
                </div>  
                <div class="col-md-12 mb-1">
                    <div class="form-group">
                        <label for="par3">Matéria - Parágrafo 3</label>
                        <textarea class="form-control" id="par3" name="par3" rows="2"></textarea>
                    </div>
                </div>  
                <div class="col-md-12 mb-1">
                    <div class="form-group">
                        <label for="par4">Matéria - Parágrafo 4</label>
                        <textarea class="form-control" id="par4" name="par4" rows="2"></textarea>
                    </div>
                </div>  
                <div class="col-md-12 mb-1">
                    <div class="form-group">
                        <label for="par5">Matéria - Parágrafo 5</label>
                        <textarea class="form-control" id="par5" name="par5" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-md-12 mb-1">
                    <div class="form-group">
                        <label for="par6">Matéria - Parágrafo 6</label>
                        <textarea class="form-control" id="par6" name="par6" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-md-12 mb-1">
                    <div class="form-group">
                        <label for="par7">Matéria - Parágrafo 7</label>
                        <textarea class="form-control" id="par7" name="par7" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-md-12 mb-1">
                    <div class="form-group">
                        <label for="par8">Matéria - Parágrafo 8</label>
                        <textarea class="form-control" id="par8" name="par8" rows="2"></textarea>
                    </div>
                </div>  
            </div>
            <div class="form-row">
                <div class="col-md-1 mb-1">
                    <div class="form-group">
                        <label for="cod">ID</label>
                        <input type="text" class="form-control" id="cod" name="cod" value="<?php echo $id['id']+1;?>">
                    </div>
                </div>
                <div class="col-md-3 mb-1">
                    <div class="form-group">
                        <label for="legenda">Legenda</label>
                        <input type="text" class="form-control" id="legenda" name="legenda">
                    </div>
                </div>
		 <div class="col-md-2 mb-3">
                    <label for="destaque">Destaque</label>
                    <select id="destaque" class="form-control" name="destaque" required>
                        <option selected>Escolha</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Nao</option>
                    </select>
                </div>
                <div class="col-md-3 mb-1">
                    <div class="form-group">
                        <label for="img">Imagem</label>
                        <input type="file" class="form-control-file" id="img" name="img">
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
