<?php
include "controller/config.php";
$titulo =  $_POST['titulo'] ;
$resumo =  $_POST['resumo'] ;
$conteudo =  $_POST['conteudo'] ;
$categoria_id =  $_POST['categoria_id'] ;
$posicao_id =  $_POST['posicao_id'] ;

$data= date('d-m-Y');
$sql =" INSERT INTO tb_post(titulo,resumo,conteudo,data,categoria_id,posicao_id) VALUES 
('".$titulo."','".$resumo."','".$conteudo."','".$data."','".$categoria_id."','".$posicao_id."')";
mysqli_query($conn,$sql);
echo "<script language='javascript'>alert('O post foi publicado com successo')</script>";
echo "<script>location.href='dashboard.php'</script>";
?>