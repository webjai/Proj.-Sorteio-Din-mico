<?php
session_start();
ob_start();
include_once("conexao.php");


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jailson Sousa">
    <link rel="icon" href="imagens/fasavic.png">
     <link rel="stylesheet" type="text/css" href="./css/style.css" />
    
    


    <title>Semana Premiada</title>
  </head>
	<body>
	    
	    <div class="container">
		<div class="premios" style="color:#fff; font-size:23px; ">
		
		
		<?php

        $result = "SELECT usuario FROM usuarios ORDER BY id DESC LIMIT 1";
		$resultados = mysqli_query($conn, $result);
		while($row_usu = mysqli_fetch_assoc($resultados)){
		    
        echo $row_usu['usuario'];
        $_SESSION['cpfganhador'] = $row_usu['usuario'];

 


}?>


  <?php
  
        $result_usuarios = "SELECT * FROM imagens ORDER BY RAND() LIMIT 1";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
		

    
    $vai = $row_usuario['id_imagem']; 
    
    $ur="https://fasavic.com.br/semanapremiada/imagens/nada.png";
    $co = $row_usuario['url'];
    //echo $row_usuario['url']; //chamar url
    $_SESSION['top'] = $row_usuario['url']; //passar para ir pra próxima página 

    if($co == $ur){

    }else{
    
    header("Location: apaga.php?id='<?php echo $vai; ?>'"); //funcionou ;)
    
} ?>
    
   

    <br>
    <img src="<?php echo $row_usuario['url'];} ?>" width="400px"  /><br>



    <?php
  if(isset($_SESSION['msgcad']))	//verifica se existe a sessão
  {
                echo
                 $_SESSION['msgcad'];
				unset($_SESSION['msgcad']); 
  }else{															

      header("location:index.php"); //se nao foi então manda para index.php (agora foiii!)
  } 
        
        ?>
  </div><br><br>
    

</div>
	</body>
</html>