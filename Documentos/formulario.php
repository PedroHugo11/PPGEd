<!DOCTYPE html> 

<?php
    session_start();
?>

<html>

<head>
    <title>PPGED - Pograma de Pós Graduação em Educação</title>
    <meta name="viewport" content="width=device-width">
	<link href="../style.css" rel="stylesheet">
	<link href="../bootstrap.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="shortcut icon" href="img/icon.ico" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
						<div class="jquery-accordion-menu-header">Formulários</div>
				
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-3">
									
                                <ol>
								    <li>
								        Relatório do bolsista - 2019 (<a href="uploads/arquivos/formularios/docx/Relatório do bolsista - 2019.doc" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/Relatório do bolsista - 2019.pdf" target="_blank">.pdf</a>)
							        </li><hr/>
									<li>
								        Modelo de relatório: Seminário de Formação Doutoral II (<a href="uploads/arquivos/formularios/docx/Relatório_seminário_de_formação_doutoral.doc" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/Relatório_seminário_de_formação_doutoral.pdf" target="_blank">.pdf</a>)
							        </li><hr/>
									<li>
								        Indicação de banca de defesa de tese (<a href="uploads/arquivos/formularios/docx/Formulário de Indicação de Banca - Doutorado.docx" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/Formulário de Indicação de Banca - Doutorado.pdf" target="_blank">.pdf</a>)
							        </li><hr/>
                                    <li>
                                        Indicação de banca de defesa de dissertação (<a href="uploads/arquivos/formularios/docx/Formulário de Indicação de Banca - Mestrado.docx" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/Formulário de Indicação de Banca - Mestrado.pdf" target="_blank">.pdf</a>)
                                    </li><hr/>
                                    <li>
                                        Relatório de Prestação de Conta (<a href="uploads/arquivos/formularios/docx/Relatório de prestação de contas.doc" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/Relatório de prestação de contas.pdf" target="_blank">.pdf</a>)
                                    </li><hr/>
                                    <li>
                                        Aproveitamento de Disciplina (<a href="uploads/arquivos/formularios/docx/formulario_aproveitamento_disciplina.doc" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/formulario_aproveitamento_disciplina.pdf" target="_blank">.pdf</a>)
                                    </li><hr/>
                                    <li>
                                        Candidatura à Bolsa De Estudo (<a href="uploads/arquivos/formularios/docx/formulario_candidatura_bolsa_estudos.doc" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/formulario_candidatura_bolsa_estudos.pdf" target="_blank">.pdf</a>)
                                    </li><hr/>
                                    <li>
                                        Trancamento de Matrícula (<a href="uploads/arquivos/formularios/docx/formulario_trancamento_matricula.doc" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/formulario_trancamento_matricula.pdf" target="_blank">.pdf</a>)
                                    </li><hr/>
                                    <li>
                                        Auxílio em eventos ao estudante (<a href="uploads/arquivos/formularios/docx/Formulário - Auxílio em eventos ao estudante.doc" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/Formulário - Auxílio em eventos ao estudante.pdf" target="_blank">.pdf</a>)
                                    </li><hr/>
                                    <li>
                                        Auxílio em eventos ao professor (<a href="uploads/arquivos/formularios/docx/Formulário - Auxílio em eventos ao professor.doc" target="_blank">.docx</a>) (<a href="uploads/arquivos/formularios/pdf/Formulário - Auxílio em eventos ao professor.pdf" target="_blank">.pdf</a>)
                                    </li><hr/>
                                    <li>
                                        Formulário de Atividades Futuras (<a href="https://forms.gle/CjyPVv2U6yDsfoAV6">preenchimento online</a>)
                                    </li>
                                </ol>
                                    
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