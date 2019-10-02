<!doctype html> 

<?php
    session_start();
?>


<html>

<head>
    <title>LIFE | NOTICIAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.ico" >
    
</head>

<!-- menu -->
<body>

<?php 

    //Seta a quantidade de cursos por pagina
    $quantidade_pg = 5;
    
    //calcular o número de pagina necessárias para apresentar os cursos
    $num_pagina = 2;
    $incio = 1;

    //Selecionar os cursos a serem apresentado na página
    $total_noticias = 6
?>
    
<?php 
	if(isset($_SESSION['adm'])) {
		include ("menuAdm.php");
	} else {
		include ("../menu.php");	
	}
?>

<!-- Inicio -->
<?php include '../inicio.php';?>


<!-- Time -->
<section class="info-section pt-6 mt-5">
	<div class="container">
		<div class="head-box text-center">
			<h2>Notícias</h2>
			<h6 class="text-underline-primary mb-5">Todas as notícias</h6>
        </div>

        <div class="row">
			<div class="col-md-12 mb-sm-12">
                <div class="container-fluid gedf-wrapper">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="h5">Notícias</div>
                                    <div class="h7">Confira abaixo as novidades relacionadas ao LIFE e às suas instituições parceiras, produzidas pelo LIFE.</div>
                                    <form class="form-inline mt-5 ml-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Buscar Notícia" size="25%">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 12 MAI 2019 POR EU</div>
                                    <a class="card-link" href="../post/1">
                                        <h5 class="card-title">Titulo</h5>
                                    </a>

                                    <p class="card-text">
                                        Legenda
                                    </p>
                                    <div>
                                        <span class="badge badge-primary">a</span>
                                        <span class="badge badge-primary">b</span>
                                        <span class="badge badge-primary">c</span>
                                        <span class="badge badge-primary">d</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">Laboratório Interdisciplinar de Formação de Educadores</div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->

                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 12 MAI 2019 POR EU</div>
                                    <a class="card-link" href="../post/1">
                                        <h5 class="card-title">Titulo</h5>
                                    </a>

                                    <p class="card-text">
                                        Legenda
                                    </p>
                                    <div>
                                        <span class="badge badge-primary">a</span>
                                        <span class="badge badge-primary">b</span>
                                        <span class="badge badge-primary">c</span>
                                        <span class="badge badge-primary">d</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">Laboratório Interdisciplinar de Formação de Educadores</div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->

                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 12 MAI 2019 POR EU</div>
                                    <a class="card-link" href="../post/1">
                                        <h5 class="card-title">Titulo</h5>
                                    </a>

                                    <p class="card-text">
                                        Legenda
                                    </p>
                                    <div>
                                        <span class="badge badge-primary">a</span>
                                        <span class="badge badge-primary">b</span>
                                        <span class="badge badge-primary">c</span>
                                        <span class="badge badge-primary">d</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">Laboratório Interdisciplinar de Formação de Educadores</div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->

                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 12 MAI 2019 POR EU</div>
                                    <a class="card-link" href="../post/1">
                                        <h5 class="card-title">Titulo</h5>
                                    </a>

                                    <p class="card-text">
                                        Legenda
                                    </p>
                                    <div>
                                        <span class="badge badge-primary">a</span>
                                        <span class="badge badge-primary">b</span>
                                        <span class="badge badge-primary">c</span>
                                        <span class="badge badge-primary">d</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">Laboratório Interdisciplinar de Formação de Educadores</div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->

                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 12 MAI 2019 POR EU</div>
                                    <a class="card-link" href="../post/1">
                                        <h5 class="card-title">Titulo</h5>
                                    </a>

                                    <p class="card-text">
                                        Legenda
                                    </p>
                                    <div>
                                        <span class="badge badge-primary">a</span>
                                        <span class="badge badge-primary">b</span>
                                        <span class="badge badge-primary">c</span>
                                        <span class="badge badge-primary">d</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">Laboratório Interdisciplinar de Formação de Educadores</div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->

                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 12 MAI 2019 POR EU</div>
                                    <a class="card-link" href="../post/1">
                                        <h5 class="card-title">Titulo</h5>
                                    </a>

                                    <p class="card-text">
                                        Legenda
                                    </p>
                                    <div>
                                        <span class="badge badge-primary">a</span>
                                        <span class="badge badge-primary">b</span>
                                        <span class="badge badge-primary">c</span>
                                        <span class="badge badge-primary">d</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">Laboratório Interdisciplinar de Formação de Educadores</div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->

                        

                        <?php
                            //Verificar a pagina anterior e posterior
                            $pagina = 2;
                            $pagina_anterior = $pagina - 1;
                            $pagina_posterior = $pagina + 1;
                        ?>
                        <nav class="navNoticia">
                            <ul class="pagination">
                                <li class="page-item">
                                    <?php
                                        if($pagina_anterior != 0){ ?>
                                        <a class="page-link" href="todasNoticias.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">Anterior</a>
                                        <?php }else{ ?>
                                    <?php }  ?>
                                </li>    
                                <?php for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                                    <li class="page-item"><a class="page-link" href="todasNoticias.php?pagina=<?php echo $i; ?>"><?php echo $i;?></a></li>
                                <?php } ?>
                                <li class="page-item">
                                <?php
                                    if($pagina_posterior <= $num_pagina){ ?>
                                        <a class="page-link" href="todasNoticias.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
                                            <span aria-hidden="true">Próximo</span>
                                        </a>
                                    <?php }else{ ?>
                                    <?php }  ?>
                                </li>    
                            </ul>
                        </nav>

                    </div>
                </div>
			</div>
		</div>  
	</div>
</section>
<!-- Time -->

<section id="footer">
			<?php include '../footer.php';?>
</section>
</body>
</html>