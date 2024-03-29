<!DOCTYPE html> 

<?php
    session_start();
?>

<html>

<head>
	<title>PPGED - Pograma de Pós Graduação em Educação</title>
    <meta name="viewport" content="width=device-width">
	<base href="{url}" />
	<link href="style.css" rel="stylesheet">

	<!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">

    <!-- JavaScript -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.11.js"></script>
	
    <!-- Icone -->
	<link rel="shortcut icon" href="../img/icon.ico">

</head>

<body>

<?php include "BD/connBD.php";?>

<?php 
	if(isset($_SESSION['adm'])) {
		include ("menuAdm.php");
	} else {
		include ("menu.php");	
	}
?>


<?php include 'inicio.php';?>


<section class="info-section">
	<div class="container">
		<div class="head-box text-center mb-5">
			<h2 class="title">Notícias da ANPED / FORPRED</h2>
			<h6 class="text-underline-primary">Notícias, eventos, editais</h6>
    	</div>
        <div class="row">
			<?php include 'blog.php';?>
        </div>
	</div>
</section> 


<section class="info-section bg-departamentos px-0" style=" padding-top: 0px; padding-bottom: 0px;">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-6 col-lg-6 content-half mt-md-0 pt-4">
                <div class="head-box mb-5 pl-5 mt-2">
					<h2 class="text-white">INFORMES DO PPGED</h2> 
					<a href="#"><h6 class="text-white text-underline-rb-white">Veja todos os nossos informes <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:20px; margin-left:1%;"></i></h6></a>
				</div>
                <ul class="pl-5">
                    <li>
						<a href="post/1" target="_blank" style="color: white"><i class="fa fa-file fa-white" aria-hidden="true"></i>
                    	<span class="list-content">
                    		<strong>NOTÍCIA</strong>
                    		<br>Resultado final do Processo Seletivo de Reingresso do PPGED da UFRN.
                    	</span></a>
                	</li>
                    <li>
                    	<a href="#" target="_blank"><i class="fa fa-file fa-white" aria-hidden="true"></i></a>
                    	<span class="list-content">
							<strong>ALUNOS ESPECIAIS</strong>
                    		<br>Laboratório de Tecnologia Educacional.
                    	</span>
                    </li>
                    <li>
						<a href="#" target="_blank"><i class="fa fa-file fa-white" aria-hidden="true"></i></a>
                    	<span class="list-content">
							<strong>NOTÍCIA</strong>
                    		<br>Laboratório de Políticas Educacionais.
                    	</span>
                    </li>
                    <li>
						<a href="#" target="_blank"><i class="fa fa-file fa-white" aria-hidden="true"></i></a>
                    	<span class="list-content">
							<strong>BOLSAS</strong>
                    		<br>Laboratório de Tecnologia Assistiva do Centro de Educação.
                    	</span>
                    </li>
                    <li>
					<a href="" target="_blank"><i class="fa fa-file fa-white" aria-hidden="true"></i></a>
                    	<span class="list-content">
							<strong>NOTÍCIA</strong>
                    		<br>Laboratório de História e Memória da Educação.
                    	</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 p-0 m-0">
            	<img src="img/ce.jpg" class="img-responsive d-none d-md-block" style="height:640px; width:100%;">
            </div>
        </div>
</section> 

 <section class="info-section pt-5" style="padding:0">
	<div class="container">
		<div class="head-box text-center">
			<h2>Revista Educação em Questão</h2>
			<h6 class="text-underline-primary mb-5"></h6>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="media media-testimonial">
                    <div class="media-left">
                        <a href="#">
                        <img src="http://ppged.ufrn.br/images/revista-ico.png" width="90" height="90">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="text-justify" style="font-size:15px;"> A Revista Educação em Questão, editada desde 1987, 
							nasceu da iniciativa de professores do Departamento de Educação da Universidade Federal do Rio Grande do Norte (UFRN), quando o Mestrado em Educação,
							 instalado em 1978, completou nove anos formando mestres nas ...
						</p>
						<a href="http://www.revistaeduquestao.educ.ufrn.br/" target="_blank" title="Read more" class="read-more" style="color:#004d95; font-weight:bold;">Ver mais<i class="fa fa-angle-double-right ml-2"></i></a>						
                        
                    </div>
                </div>
			</div>
		</div>
</section>

 <section class="info-section ">
	<div class="container">

		<div class="row mbr-justify-content-center">
			<div class="col-lg-6 mbr-col-md-10">
				<a href="O Programa/apresentacao.php">
					<div class="wrap">
						<div class="ico-wrap">
							<span class="mbr-iconfont fa-volume-up fa"></span>
						</div>
						<div class="text-wrap vcenter">
							<h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Apresentação</h2>
							<p class="mbr-fonts-style mbr-text display-6">O Programa de Pós-Graduação em Educação/CCSA/UFRN, contribui para o desenvolvimento da pesquisa e para a formação de pesquisadores em Educação.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-6 mbr-col-md-10">
				<div class="wrap">
					<div class="ico-wrap">
						<span class="mbr-iconfont fa-calendar fa"></span>
					</div>
					<div class="text-wrap vcenter">
						<h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Calendário</h2>
						<p class="mbr-fonts-style text1 mbr-text display-6">Veja nosso calendário acadêmico com as datas dos eventos do PPGEd, auxiliando no planejamento mensal dos professores e alunos.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mbr-col-md-10">
				<div class="wrap">
					<div class="ico-wrap">
						<span class="mbr-iconfont fa-globe fa"></span>
					</div>
					<div class="text-wrap vcenter">
						<h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Banco de publicações</h2>
						<p class="mbr-fonts-style text1 mbr-text display-6">Contamos com a produção atuante dos professores e alunos. Temos também  com dissertações e teses defendidas pelos alunos do PPGEd.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mbr-col-md-10">
				<a href="O Programa/linhaDePesquisa.php">
					<div class="wrap">
						<div class="ico-wrap">
							<span class="mbr-iconfont fa-search fa"></span>
						</div>
						<div class="text-wrap vcenter">
							<h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Linhas de Pesquisa</h2>
							<p class="mbr-fonts-style text1 mbr-text display-6">A proposta pedagógica do PPGEd/UFRN estrutura-se em pesquisas e ensino organizados em Linhas de Pesquisa, que contemplam os objetos de estudos dos participantes.</p>
						</div>
					</div>
				</a>
			</div>




</div>
</section> 

<section id="footer">
		<?php include 'footer.php';?>
</section>

</body>
</html>
