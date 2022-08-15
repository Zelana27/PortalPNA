<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='pna';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(! $conn){

 die('Não foi possivel connectar'. mysqli_error ($conn));
}
?>