<?php
$Usuario=$_POST['Usuario'];
$Correo_Institucional=$_POST['Correo_Institucional'];
$Contraseña=$_POST['Contraseña'];

include("conexion.php");
//agregar registro a la base de datos
$sql = "INSERT INTO usuarios(Usuario, Correo_Institucional,Contraseña) VALUES('$Usuario','$Correo_Institucional','$Contraseña')";

$verificar_usuario=mysqli_query($cone,);
$result= mysqli_query($cone,$sql);
if($result)
{
    echo "Registro creado exitosamente";
    
}
else{

    echo "Error de la conexion";
    }
mysqli_close($cone);    
?>