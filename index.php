<?php
session_start();
ob_start();




$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);


	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
	    $erro = true;
	    $_SESSION['msg'] = "Necessário preencher o campo CPF";
	}elseif((strlen($dados['usuario'])) < 11){
	     $erro = true;
	     $_SESSION['msg'] = "INSIRA UM CPF VÁLIDO";
	}else{
	    $result_usuario = "SELECT id FROM usuarios WHERE usuario ='".$dados['usuario']."'";
	    $resultado_usuario = mysqli_query($conn, $result_usuario);{
	        if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0))
	        $erro = true;
	        $_SESSION['msg'] = "Ops! O seu CPF já foi ultilizado hoje!";
	    }
	}
	
	if(!$erro){
	    
	    	//var_dump($dados);
	    	
	
	$result_usuario = "INSERT INTO usuarios (usuario) VALUES (
				
					'" .$dados['usuario']. "'
					
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "";
		header("Location: login.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
	}
	    
	}
	

}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="webjai">
    <link rel="icon" href="imagens/fasavic.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    
    
    <script>
    function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}</script>
    

    <title>Semana Premiada FASAVIC</title>
  </head>

  <body>

		<div id="fundopai">
		    <div class="container">
		    	<img class="premios" src="imagens/ima.png" width="400px"></center>
		
			
			      <form method="POST" class="posicaodoforms" action="">
			            <span class="alertas">
			            	<?php
			    			if(isset($_SESSION['msg'])){
			    				echo $_SESSION['msg'];
			    				unset($_SESSION['msg']);
			    				
			    				$_SESSION['valor'] = $_POST['usuario'];
			    			}
			    		?><br>
			    		</span>
			    
			           
			            
			            <input class="campoinput" type="number" name="usuario" id="inputEmail" placeholder="Insira seu CPF" onkeypress="return onlynumber();" autofocus="true" /><br>
			            
			            <button type="submit" name="btnCadUsuario" value="Cadastrar" class="btnsorte" >GO!</button>
			           
			      </form>
		      </div>
		</div>
  </body>
</html>
