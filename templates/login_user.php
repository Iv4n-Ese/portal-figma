<?php 
    session_start();

    include('../conexion/db.php');
    

    $email = $_POST['email'];
    $password = $_POST['password'];
   // $password = hash('sha256', $password);
   
    
    $validar_login = mysqli_query($conexion, "SELECT id_login, correo, contrasena FROM login WHERE correo ='$email' and contrasena ='$password' ");
    $fila = mysqli_fetch_row($validar_login);
    $usr = $fila[0];
    
    if(mysqli_num_rows($validar_login) > 0){
                
        $_SESSION['usuario'] = $usr;
        header("Location: bienvenido.php");
        exit;

    }else{
        
        echo '
            <script>
                alert("Usuario no existe por favor verifique los datos introducidos");
                window.location = "login.php"
            </script>
        ';
        exit;
        
    }
    
?>