<?php

require "conexao.php";

$usuario="alinemorandi";
$senha="123";

$sql_query="select id from usuarios where usuario like '$usuario' and senha like '$senha';";

$result = mysqli_query($con, $sql_query);

if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_assoc($result);
	
$id = $row["id"];

echo "<h3>Olá, bem vindo ".$usuario."</h3>";
	
}

else {
	echo "<h3>Usuario não encontrado</h3>";
	
	
}

?>