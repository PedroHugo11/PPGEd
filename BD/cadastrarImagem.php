<?php

include "connBD.php";

session_start();
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$emissor = $_POST['emissor'];
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
        $titulo = $_POST['titulo']; 
        $legenda = $_POST['legenda'];
        $cod = $_POST['cod'];
        
        ini_set('post_max_size', '50M');
        ini_set('upload_max_filesize', '50M');
        ini_set('max_execution_time', 0);
        ini_set('max_input_time', 0);

        $name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $type= $_FILES['img']['type'];
        $size = $_FILES['img']['size'];
        $error = $_FILES['img']['error'];

        $extensao = pathinfo ( $name, PATHINFO_EXTENSION );
        $extensao = strtolower ( $extensao );

		$novo_nome = md5( time () ) . '.' . $extensao; //define o nome do arquivo
        $diretorio = "uploadsImg/"; //define o diretorio para onde enviaremos o arquivo
        
        move_uploaded_file($tmp_name, $diretorio.$novo_nome);//efetua o upload
     	

	$sql = "insert into galeria (emissor, dia, mes, titulo, imagem, legenda, id) 
	values ('$emissor', '$dia', '$mes', '$titulo', '$novo_nome', '$legenda', '$cod');";
			
		if(mysqli_query($conn, $sql)){
			$_SESSION['msg3'] = "Cadastrado com sucesso!";
		}else{	
			$_SESSION['msg3'] =  mysqli_error($conn);
		}
    }
    
    header("Location:../areaAdm.php");
?>
