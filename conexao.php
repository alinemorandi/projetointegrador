<?php

$db_name="ProjetoApp";
$mysql_user="root";
$mysql_pass="";
$server_name="localhost";

$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);

if (!$con){
echo "Erro na conex�o ".mysqli_connect_error();
} 
else {
echo "<h4>Conex�o criada com sucesso!</h4>";
}

?>