<?php 
    session_start();

    if(isset($_SESSION['usuario'])){
        header("Location: bienvenido.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- MAIN -->
    <link rel="stylesheet" href="../static/css/login.css">
</head>
<body>
<div class="content">
        <form action="login_user.php" method="post" class="form" id="formularioValidacion">
            <img src="../static/images/brand.png" alt="" class="nav-brand">    
            <h2 class="form-title">Welcome back</h2>
            <p class="form-paragraph">Please enter your details</p>
            <div class="form-container">
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email" required>
                    <span class="form-line"></span>
                </div>                
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-input" required>
                    <span class="form-line"></span>                    
                </div>
                <div class="info">
                    <p> Remember for 30 days <strong> Forgot password </strong></p>
                </div>
                <input type="submit" class="form-submit" value="Entrar">
                <div class="info"> Don't have an account? <strong>Sign up </strong></div>
                <a href="../index.php" class="form-return"> Regresar </a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<script src="../static/js/login.js" ></script>
</html>