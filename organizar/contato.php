<!doctype html> 

<?php
    session_start();
?>

<html>

<head>
    <title>LIFE | CONTATO</title>
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
        <h2 class="title">Contato</h2>
        <h6 class="text-underline-primary">Fale conosco</h6>
    </div>
    
    <div class="container contact-form">
        <div class="contact-image">
            <img src="img/logo_whiteFundo.jpg" alt="life-contato"/>
        </div>
        <form method="post">
            <h3>Entre em contato conosco</h3>
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h5 class="white mt-3">Centro de Educacao, 1 ° andar. </h5>
                        <h5 class="white mt-3">Lagoa Nova, Natal - RN, 59070-405.</h5>
                        <h5 class="white">Seg - Sex das 8h às 12h e 13h às 17h.</h5>
                        <h5 class="white">life@ce.ufrn.br</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.1095783546925!2d-35.20159453463302!3d-5.840176259188771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ff9fcdaa5513%3A0x345d0d58925d5142!2sCentro+de+Educa%C3%A7%C3%A3o+-+CE+%2F+UFRN!5e0!3m2!1spt-BR!2sbr!4v1536847387835" class="" frameborder="0" id="map_contact"></iframe>
                    </div>                        
                </div>
            </div>
        </form>
    </div>
</section>

<section class="team-section">
			<?php include 'footer.php';?>
</section>

</body>
</html>