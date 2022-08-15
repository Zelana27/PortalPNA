<?php
  / The location of the PDF file
// on the server
$conn = mysqli_connect("localhost","root","","pna");



if (isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $query = "SELECT * FROM `tb_upload` WHERE id='$id'";
    $resultado = mysqli_query($conn,$query);
    while($row =mysqli_fetch_assoc($resultado))
    {

$filename = "['name']";
	}
}
// Header content type
header("Content-type: application/pdf");
  
header("Content-Length: " . filesize($filename));
  
// Send the file to the browser.
readfile($filename);
  
  
// The location of the PDF file
//  on the server
// $filename = "/path/to/the/file.pdf";
  
// Header content type
// header("Content-type: application/pdf");
  
// header("Content-Length: " . filesize($filename));
  
// Send the file to the browser.
// readfile($filename);
?> 