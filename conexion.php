<?php
$cons_usuario="root";
$cons_pasw="12345678";
$cons_base_datos="estudiantes";
$cons_equipo="localhost";

$cone=mysqli_connect($cons_equipo,$cons_usuario,$cons_pasw,$cons_base_datos);

if ($cone)
{
    echo "conexion exitosa ala Base de datos ";
    
}
else

{

    echo"Error de la conexion";

}
?>