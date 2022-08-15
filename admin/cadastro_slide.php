
<?php

if(isset($_POST['submit'])){

    require'controller/config.php';
	$estado = $_POST["estado"];
	$posicao_id = $_POST["posicao_id"];
    $titulo= $_POST["titulo"];
    $resumo =$_POST["resumo"];
    $imageName = mysqli_real_escape_string($conn, $_FILES["image"]["name"]);
    $imageData = mysqli_real_escape_string($conn,file_get_contents($_FILES["image"]["tmp_name"]));
    $imageType = mysqli_real_escape_string($conn,$_FILES["image"]["type"]);

    if (substr($imageType,0,5)=="image"){

        $sql = "INSERT INTO `tb_slide` (`id`, `titulo`,`resumo`,`nome`, `image`,`estado`,`posicao_id`) VALUES  (NULL ,'$titulo','$resumo','$imageName','$imageData','$estado','$posicao_id')";
        mysqli_query($conn,$sql);

        echo "<script language='javascript'>alert('Slideshow foi adicionado com successo ')</script>";
		echo "<script>location.href='dashboard.php'</script>";

    }
    else
    {
        echo "Somente imagem permitido";
    }


}
?>


