<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
$dbhost='localhost';
$dbname='resto';
$dbuser='root';
$dbpass='';

$dsn="mysql:host=".$dbhost.";dbname=".$dbname;


$con=new pdo($dsn,$dbuser,$dbpass); 

?>

</body>
</html>