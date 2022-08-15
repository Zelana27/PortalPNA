<?php
session_start();
// Conexão com o banco de dados

include "controller/config.php";


// Seleciona todos os usuários

$nome=$_POST['nome'];
$senha= $_POST['senha'];

$sql =("SELECT * FROM tb_usuario WHERE nome ='".$nome."' AND senha ='".$senha."'");

$result = mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{
    $dados = @mysqli_fetch_array($result);
    $_SESSION["session_id"]   = $dados['id'];
    $_SESSION["session_nome"] = $dados['nome'];
    $_SESSION["session_senha"]  =$dados['senha'];
	$_SESSION["session_tipo"]  =$dados['tipo'];
   
    if($dados['tipo']=='admin')
    {        header("Location:dashboard.php");
        exit;
    }
    else if($dados['tipo']=='operador')
        {
        header("Location:home.php");
        exit;
    }

    else
    {
        header("Location:index.php");
        exit;
    }
}
// Senha inválida
else
{
 echo"<script>location='index.php'</script>";
}
mysqli_close($conn);

?>
<a href="index.php">voltar</a>

