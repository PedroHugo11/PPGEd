<!doctype html> 

<?php
    session_start();
?>

<html>

<head>
    <title> LIFE | ESTRUTURA </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.ico" >
    
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
<?php include 'inicio.php';?>

<section class="contact-section">	
		<div class="head-box text-center mb-5">
			<h2 class="title">Laboratórios</h2>
			<h6 class="text-underline-primary">Sobre os laboratórios do LIFE</h6>
		</div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline9">
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><img class="mt" src="img/lappe.png" width="150"/></span></div>
                                <div class="content">
                                    <span class="year">LAPE</span>
                                    <a href="http://lte.ce.ufrn.br/"><h4 class="title">Laboratório de Políticas Educacionais</h4></a>
                                    <p class="description">
                                        Situado no 3º andar do Núcleo de Pesquisa em Ciências Sociais Aplicadas II (Nepsa II), tem como funções desenvolver atividades de pesquisa e extensão interagindo com o ensino sobre as às políticas públicas de educação e apoiar as políticas de educação básica e superior no Estado do Rio Grande do Norte. Suas atividades principais deverão estar associadas à análise, balanço, monitoramento e avaliação de políticas educacionais que fortaleçam a constituição de um espaço público como esfera de sua realização. Nesse sentido o LAPPE, desenvolverá programas de pesquisas multidisciplinares, envolvendo pesquisadores das diversas áreas do conhecimento, bem como seminários, cursos de formação de professores e de gestores escolares. O LAPPE deverá ainda estabelecer convênios de assessoria, monitoramento e formação no campo das políticas públicas com instituições governamentais, entidade da sociedade civil e movimentos sociais.
                                    </p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><img class="mt" src="img/latece.png" width="150"/></span></div>
                                <div class="content">
                                    <span class="year">LATECE</span>
                                    <a href="http://lte.ce.ufrn.br/"><h4 class="title">Laboratório de Tecnologia Assistiva do Centro de Educação</h4></a>
                                    <p class="description">
                                        Com sede no Centro de Educação. O objetivo geral do LATECE é implantar no Centro de Educação da Universidade Federal do Rio de Grande do Norte um polo de pesquisa, formação e disseminação de conhecimento em Tecnologia Assistiva (TA). O LATECE é equipado com recursos de TA utilizados por educandos com Necessidades Educacionais Especiais (NEE). O laboratório traz como proposta o desenvolvimento de pesquisas, atividades de ensino e extensão, envolvendo alunos de graduação, pós-I. graduação, assim como professores da rede pública de ensino do Estado do Rio Grande do Norte.
                                    </p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><img class="mt" src="img/lahmed.png" width="150"/></span></div>
                                <div class="content">
                                    <span class="year">LAHMED</span>
                                    <a href="http://lahmed.ce.ufrn.br/jspui/"><h4 class="title">Laboratório de História e Memória da Educação</h4></a>
                                    <p class="description">
                                        Tem como função desenvolver atividades integradas de pesquisa, ensino e extensão. Para tanto, objetiva congregar pesquisadores e docentes, estudantes de pós-graduação e graduação, além de profissionais de diferentes experiências acadêmicas no campo da história e da memória da educação brasileira. Suas atividades deverão estar associadas às investigações no campo da história e da memória da educação no Brasil, com ênfase em estudos sobre o Rio Grande do Norte. As atividades integradas de pesquisa, ensino e extensão priorizarão temáticas relativas às práticas educativas em espaços escolares e não escolares. Nesse sentido, o LAHMED desenvolverá programas de ensino e pesquisas envolvendo pesquisadores das diversas áreas do conhecimento, bem como a realização de cursos e seminários.
                                    </p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><img src="img/lte2.png" class="mt" width="120" style="margin-top:-20%;"/></span></div>
                                <div class="content">
                                    <span class="year">LTE</span>
                                    <a href="http://lte.ce.ufrn.br/"><h4 class="title">Laboratório de Tecnologia Educacional</h4></a>
                                    <p class="description">
                                        Com sede no Centro de Educação, tem como perspectivas desenvolver estudos e práticas acerca das tecnologias em cenários educacionais formais e não formais, em três vertentes principais: pesquisa e disponibilização de objetos de aprendizagem; desenvolvimento de materiais didáticos multimodais; e formação de profissionais da educação para o uso de recursos multimídia na prática educativa. No intuito de se constituir como um espaço de experimentação teórico-metodológica e didático-pedagógica busca realizar um trabalho colaborativo num movimento de integração dos diversos espaços formativos que compõem o CE.
                                    </p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><img class="mt" src="img/lea.png" width="150"/></span></div>
                                <div class="content">
                                    <span class="year">LEA</span>
                                    <a href="http://lte.ce.ufrn.br/"><h4 class="title">Laboratório de Ensino-Aprendizagem</h4></a>
                                    <p class="description">
                                        Com sede no Bloco de Aulas do Centro de Educação é composto pelos LEA Ciências Humanas; LEA Ciências Naturais; LEA Artes; LEA Matemática; LEA Linguagens. Tem como perspectivas compreender as diversas dimensões dos processos de ensino e de aprendizagem em suas especificidades nas diferentes áreas de conhecimento; contribuir para a qualificação de futuros professores, oferecendo situações formativas que possibilitem ampliação do referencial teórico, ressignificação e crítica das práticas vigentes para tratar de temas emergentes e de questões que se colocam no plano da inter e da transdisciplinaridade. É objetivo dos LEA desenvolver ações de ensino, pesquisa e extensão possibilitar a inserção de alunos de licenciatura nos projetos e grupos de pesquisa da instituição de modo a fortalecer a formação de professores e pesquisadores, os cursos da graduação e de pós-graduação.
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><img class="mt" src="img/LIFE ASSINATURAS-18.png" width="150"/></span></div>
                                <div class="content">
                                    <span class="year">LAPPEI</span>
                                    <a href="http://lte.ce.ufrn.br/"><h4 class="title">Laboratório de Práticas Pedagógicas na Educação das Infâncias</h4></a>
                                    <p class="description">
                                        Com sede no Núcleo de Educação da Infância, Colégio de Aplicação da UFRN (NEI/CAp), o LAPPEI tem como principal objetivo desenvolver práticas inovadoras voltadas à educação das infâncias (Educação Infantil até o 5º ano do Ensino fundamental). É composto por 5 laboratórios, a saber: Laboratório de Ciências, Laboratório de Música e Movimento, Laboratório de Artes Visuais e Teatro, Laboratório de Mídias e Tecnologia e Laboratório de Inclusão. O LAPPEI é destinado aos professores e crianças do Núcleo de Educação da Infância, bolsistas, alunos dos cursos de Graduação (licenciatura e bacharelado) e Pós-graduação que desenvolvem atividades acadêmicas na instituição, constituindo-se como locus para o desenvolvimento de ações de ensino, pesquisa e extensão.
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>

<section class="team-section">
			<?php include 'footer.php';?>
</section>

</body>

</html>