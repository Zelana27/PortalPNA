<?php
include "controller/config.php";

$nome =  $_POST['nome'] ;
$senha=  $_POST['senha'] ;
$tipo =  $_POST['tipo'] ;

$sql =" INSERT INTO tb_usuario(nome,senha,tipo) VALUES ('".$nome."','".$senha."','".$tipo."')";
mysqli_query($conn,$sql);
echo "<script language='javascript'>alert('Novo utilizador foi criado com successo ')</script>";
echo "<script>location.href='dashboard.php'</script>";
?>