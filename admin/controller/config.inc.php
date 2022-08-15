<?php
$host = ("host=localhost port=5432 dbname=Minint user=postgres password=paulina45");
// open a connection to the database server
$con = pg_connect ("host=$host dbname=$db user=$user password=$pass");
if (!$con)
{
die("Could not open connection to database server");
}
else
{
die ("Connected Successful");
}
?>