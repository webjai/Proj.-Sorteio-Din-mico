<?php
session_start();
include_once("conexao.php");?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="icon" href="imagens/fasavic.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    


    <title>Semana Premiada</title>
    
  </head>
	<body>
	    
	    <div class="container">
		<h2 style="color:#fff;"></h2>
		<div class="premios" style="color:#fff; font-size:23px; font-family:verdana">
		    
		    <?php

	    if(isset($_SESSION['cpfganhador']))	//verifica se existe a sess達o
  {
                echo
                 $_SESSION['cpfganhador'];
				unset($_SESSION['cpfganhador']); ?>
				
				
	<br><br>
	    <iframe style="text-align:center;" src="https://giphy.com/embed/KU0Hr46ozENAC49ix3" width="70%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>		
				
<?php  }else{
                   $_SESSION['cpfganhador'] = "";
            		header("Location: index.php");
  }
  ?>
  
    </div><br>
    
     <img src="<?php if(isset($_SESSION['top']))	//verifica se existe a sess達o
  {                 echo
                    $_SESSION['top'];
				    unset($_SESSION['top']);
  }else{
                    $_SESSION['top'] = "";
            		header("Location: index.php");
  
  }
  ?>" width="400px" /><br>

  <?php
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)){
	$result_usuario = "DELETE FROM imagens WHERE id_imagem='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "";
		header("Location: index.php");
		
	}else{
		
		$_SESSION['msg'] = "";
		header("Location: index.php");
	}
}else{	
	$_SESSION['msg'] = "";
	header("Location: index.php");
}

?>
