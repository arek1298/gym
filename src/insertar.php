<?php 
	$conexion=mysqli_connect('localhost','root','','pruebas');

	
    $email=$_POST['email'];
    $name=$_POST['name'];
	

	$sql="INSERT into gym (email,name)
			values ('$email','$name')";
	echo mysqli_query($conexion,$sql);
 ?>