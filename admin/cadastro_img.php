
<?php

if(isset($_POST['submit'])){

    require'controller/config.php';

    $imageName = mysqli_real_escape_string($conn, $_FILES["image"]["name"]);
    $imageData = mysqli_real_escape_string($conn,file_get_contents($_FILES["image"]["tmp_name"]));
    $imageType = mysqli_real_escape_string($conn,$_FILES["image"]["type"]);

    if (substr($imageType,0,5)=="image"){

        $sql = "INSERT INTO `tb_img` (`id`, `nome`, `image`) VALUES  (NULL ,'$imageName','$imageData')";
        mysqli_query($conn,$sql);

        echo "<script language='javascript'>alert('Novo utilizador foi criado com successo ')</script>";
		echo "<script>location.href='dashboard.php'</script>";

    }
    else
    {
        echo "Somente imagem permitido";
    }


}
?>


