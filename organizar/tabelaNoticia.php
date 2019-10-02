<!doctype html> 

<?php
    session_start();
?>

<html>

<head>
	<title>LIFE</title>
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.ico" >

    <script>
	    $(document).ready(function(){
		    $('#example').DataTable({
		    	"language": {
		            "lengthMenu": "Mostrando _MENU_ registros por página",
		            "zeroRecords": "Nada encontrado",
		            "info": "Mostrando página _PAGE_ de _PAGES_",
		            "infoEmpty": "Nenhum registro disponível",
		            "infoFiltered": "(filtrado de _MAX_ registros no total)",
					"sSearch" : "Pesquisar"
		        }
		    });
		});
	    </script>

    <script> 
        function enviar_formulario(){ 
            document.formulario1.submit() 
        } 
    </script>     

</head>

<body>

<?php include "BD/connBD.php";?>

<?php include ("menuAdm.php");?>

<?php include 'inicio.php';?>

<section class="info-section">
	<div class="container">
		<div class="head-box text-center mb-5">
			<h2 class="title">CADASTRAR NOTÍCIAS</h2>
			<h6 class="text-underline-primary"> Cadastro de Notícias, editais, informes</h6>
    	</div>
        
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Emissor</th>
                <th>Deletar</th>
                <th>Atualizar</th>
            </tr>
        </thead>
        <tbody>
        <?php $sql =  "select * from noticia;"; $sql = mysqli_query($conn, $sql); while($rows = mysqli_fetch_assoc($sql)) {?>
            <tr>
                <td><?php echo $rows['id'] ?></td>
                <td><?php echo $rows['titulo'] ?></td>
                <td><?php echo $rows['emissor'] ?></td>
                <form action='deletarNoticia.php' method='post' name='formulario1'>
                <td><a href='javascript:enviar_formulario()'><button name='id' value='<?php echo $rows['id'] ?>'><i class="fa fa-trash"></i></button></a></td>
                </form>
                <td>Atualizar</td>
            </tr>
            <?php }?>    
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Emissor</th>
                <th>Deletar</th>
                <th>Atualizar</th>
            </tr>
        </tfoot>
    </table>

    </div>
</section> 

<section id="footer">
		<?php include 'footer.php';?>
</section>

</body>
</html>
