<?php
include "controller/config.php";

$categoria =  $_POST['categoria'] ;

$sql =" INSERT INTO tb_categoria(categoria) VALUES ('".$categoria."')";
mysqli_query($conn,$sql);
echo "<script language='javascript'>alert('Nova categoria foi feito com successo ')</script>";
echo "<script>location.href='dashboard.php'</script>";
?>