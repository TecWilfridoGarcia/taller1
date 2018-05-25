<?php  
$con = mysql_connect("localhost","root","","taller1");
$nom = $_POST["nombre"];
$ape = $_POST["apellido"];
$edad = $_POST["edad"];

mysql_query("INSERT INTO cliente VALUES ('$nom','$ape','$edad')");


?>