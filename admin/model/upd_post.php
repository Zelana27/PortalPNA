<?php
include'../controller/config.php';
$id =$_POST['id'];
$estado = $_POST['estado'] ;
echo"$id";
echo"$estado";


mysqli_query($conn,"UPDATE tb_post SET
                    estado='".$estado."'
                    WHERE id='".$id."'");

echo "<script language='javascript'>alert('Dados atualizados com sucesso')</script>";
echo "<script>location.href='../ver_post.php'</script>";

mysqli_close($conn);
?>

