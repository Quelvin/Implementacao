<?php

	include('_conexao.php');

	if (isset($_POST['enviar_pessoa'])) {
    
    $nome = strip_tags(trim($_POST['nome']));
    $idade = strip_tags(trim($_POST['idade']));
    $sexo = strip_tags($_POST['sexo']);
    $estado_civil = strip_tags($_POST['estado_civil']);

	$sqlquery = "INSERT INTO pessoa (nome,idade,sexo,estado_civil) VALUES ('$nome',$idade,'$sexo','$estado_civil');";
  
	echo "$sqlquery";

    mysqli_query($con, $sqlquery);

    	



 

    	


    

 
    
   
    
}


