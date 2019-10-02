<?php

include "connBD.php";

session_start();
	if($_SERVER['REQUEST_METHOD'] == "POST"){
        $cod = $_POST['cod'];
        $titulo = $_POST['titulo']; 
        $legenda = $_POST['legenda'];
        $icon = $_POST['icon'];
        
        ini_set('post_max_size', '50M');
        ini_set('upload_max_filesize', '50M');
        ini_set('max_execution_time', 0);
        ini_set('max_input_time', 0);

        $name = $_FILES['doc']['name'];
        $tmp_name = $_FILES['doc']['tmp_name'];
        $type= $_FILES['doc']['type'];
        $size = $_FILES['doc']['size'];
        $error = $_FILES['doc']['error'];

        $extensao = pathinfo ( $name, PATHINFO_EXTENSION );
        $extensao = strtolower ( $extensao );

		$novo_nome = md5( time () ) . '.' . $extensao; //define o nome do arquivo
        $diretorio = "uploadsDoc/"; //define o diretorio para onde enviaremos o arquivo
        
        move_uploaded_file($tmp_name, $diretorio.$novo_nome);//efetua o upload
     

		$sql = "insert into documentos (titulo, legenda, documento, icon, id) 
		values ('$titulo', '$legenda', '$novo_nome', '$icon', '$cod');";
			
			if(mysqli_query($conn, $sql)){
				$_SESSION['msg'] = "Cadastrado com sucesso!";
			}else{
				$_SESSION['msg'] =  mysqli_error($conn);
			}
			header('location: ../cadastroDocumentos.php');
	}
?>
