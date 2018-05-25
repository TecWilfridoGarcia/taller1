
<?php  
$con = mysql_connect("localhost","root","","taller1");

$resultado = mysql_query("SELECT *FROM cliente")
while ($data = mysql_fetch_array($resultado)) {
	echo "Nombre: " .$data['nombre']."Apellido: ".$data['apellido']."Edad: ".$data['edad']."<br>" ;
	# code...
}

?>