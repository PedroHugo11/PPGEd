<!doctype html> 

<?php
    session_start();
?>

<html>

<head>
	<title>Noticia</title>
    <meta name="viewport" content="width=device-width">
    <link href="../style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="shortcut icon" href="../img/icon.ico" >
	<script src="../js/sideBar.js"></script>

    <script type="text/javascript">
			$(window).scroll(function() {    
					var scroll = $(window).scrollTop();

					if (scroll >= 100) {
							$(".top-nav").addClass("light-header");
							document.getElementById("logo").src="../img/life.png";
					} else {
							$(".top-nav").removeClass("light-header");
							document.getElementById("logo").src="../img/logo_FundoBlack.png";
							
					}
			});
	</script>

</head>

<body>
<?php include "BD/connBD.php";?>

<!-- menu -->
<?php 
	//if(isset($_SESSION['adm'])) {
		//include ('../menuAdmHT.php');
	//} else {
			include ('C:\xampp\htdocs\ppged\menuHT.php');
	//}
?>

<!-- Inicio -->
<section class="intro carousel slide bg-overlay-light h-auto" id="carouselExampleCaptions">   
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- news -->
    <div class="card-section">
    </div>
</section>

<section class="info-section">
	<div class="container">
		<div class="row">	
			<div class="col-md-4 col-lg-4">
				<div class="content">
					<div id="jquery-accordion-menu" class="jquery-accordion-menu">
						<div class="jquery-accordion-menu-header">Menu</div>
						<ul>
							<li><a href="#"><i class="fa fa-home"></i>O Programa</a>

								<ul class="submenu">
									<li><a href="apresentacao.php">apresentacao</a></li>
									<li><a href="#">Docentes</a></li>
									<li><a href="#">Linha de pesquisa</a></li>
									<li><a href="#">Banco de teses e dissertações</a></li>
									<li><a href="#">Publicações</a></li>
								</ul>
							</li>

							<li><a href="#"><i class="fa fa-glass"></i>Events </a></li>
							<li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a></li>
							<li><a href="#"><i class="fa fa-cog"></i>Services </a>
								<ul class="submenu">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Hosting</a></li>
									<li><a href="#">Design</a>
										<ul class="submenu">
											<li><a href="#">Graphics </a></li>
											<li><a href="#">Vectors </a></li>
											<li><a href="#">Photoshop </a></li>
											<li><a href="#">Fonts </a></li>
										</ul>
									</li>
									<li><a href="#">Consulting </a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-newspaper-o"></i>News </a></li>
							<li><a href="#"><i class="fa fa-suitcase"></i>Portfolio </a>
								<ul class="submenu">
									<li><a href="#">Web Design </a></li>
									<li><a href="#">Graphics </a></li>
									<li><a href="#">Photoshop </a></li>
									<li><a href="#">Programming </a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-user"></i>About </a></li>
							<li><a href="#"><i class="fa fa-envelope"></i>Contact </a></li>
						</ul>
						<div class="jquery-accordion-menu-footer">Footer </div>
					</div>
				</div>
			</div>

			<div class="col-md-8 col-lg-8">
				<div class="content" style="width:100%">
					<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
						<div class="jquery-accordion-menu-header">Notícias</div>
						<div class="container">
							<p class="text-muted size_p" style="margin-top:9%; margin-bottom:0px;">14 MAI 2019</p>
							<h2 class="p-accordion">Lançamento do livro Física, Cultura & ensino de ciências</h2>
							<p class="size_subtitle">Categoria: Evento</p>
							<hr class="listra">
							<p class="p-accordion">
							O lançamento do livro Física, Cultura & ensino de ciências, ocorrerá na próxima terça-feira, 25/6/2019, das 18:30 as 20:00 no Saguão do CTEC - Complexo Tecnológico de Engenharia da UFRN, em Natal.
							</p>
						</div>
					</div>
				</div>
			</div>
	</div>
</section>

    <section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-3 col-md-3">
                <img class="img-fluid" src="../img/brasao.png" alt="" style="margin-top:12%">
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Links Rápidos</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="../index.php"><i class="fa fa-angle-double-right"></i>Início</a></li>
						<li><a href="../sobre.php"><i class="fa fa-angle-double-right"></i>Sobre</a></li>
						<li><a href="../todasNoticias.php"><i class="fa fa-angle-double-right"></i>Notícias</a></li>
						<li><a href="../sobre.php"><i class="fa fa-angle-double-right"></i>Equipe</a></li>
						<li><a href="../contato.php"><i class="fa fa-angle-double-right"></i>Contato</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Demais Portais</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="http://www.ufrn.br/"><i class="fa fa-angle-double-right"></i>UFRN</a></li>
						<li><a href="https://sigaa.ufrn.br/sigaa/public/home.jsf"><i class="fa fa-angle-double-right"></i>SIGAA</a></li>
						<li><a href="http://www.sistemas.ufrn.br/download/sigaa/public/calendario_universitario.pdf"><i class="fa fa-angle-double-right"></i>Calendário Acadêmico</a></li>
						<li><a href="http://www.ufrn.br/servicos#sistemasintegrados"><i class="fa fa-angle-double-right"></i>Sistemas Integrados</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<h5>Laboratórios</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>LEA</a></li>
						<li><a href="http://lte.ce.ufrn.br/"><i class="fa fa-angle-double-right"></i>LTE</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>LAPE</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>LATECE</a></li>
						<li><a href="http://lahmed.ce.ufrn.br/jspui/" title="Design and developed by"><i class="fa fa-angle-double-right"></i>LAHMED</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p class="h6">&copy Todos os direitos reservados.<a class="text-green ml-2" href="http://www.ce.ufrn.br/" target="_blank"></a></p>
					<p class="h3_footer">Desenvolvido pelo <a class="text-green ml-2" href="http://www.ce.ufrn.br/" target="_blank"><img class="img-fluid" id="imgFooter" src="../img/logo_ce_white.png" alt="" ></a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>

</body>

</html>