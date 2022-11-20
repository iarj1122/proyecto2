<?php
 
    include 'conexion.php';

    $Usuario = $_POST['Usuario'];
    
    $Contraseña = $_POST['Contraseña'];
    
    $validar_login = mysqli_query($cone, "SELECT * FROM usuarios WHERE Usuario='$Usuario' and Contraseña='$Contraseña'");

    if(mysqli_num_rows($validar_login)>0 ){
        $_SESSION['Usuario'] =$Contraseña;
        header("location:/..index.html");
        exit;
    }
    else{
        echo'
        <script>
            alert("usuario no existe, favor de verificar los datos");
            window.location = /.."index.html";
        </script>
        ';
        exit;

    }
    ?>