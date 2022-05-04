<?php
  
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert(" Por favor debes de iniciar sesion");
                window.location = "index.php";
            </script>
        ';
        header("Location: ../index.php");
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Welcome</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- MAIN -->
    <link rel="stylesheet" href="../static/css/session.css">
</head>
<body>    
    <div class="content">
    <?php include('../conexion/db.php');          
        $query = mysqli_query($conexion, "SELECT * FROM user");          
                       
    ?>
    
    <nav class="nav-main">
        <img src="../static/images/brand.png" alt="" class="nav-brand">

        <p>logotipo</p>
        <ul class="nav-menu">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="selected">
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#">Projects</a>
            </li>
            <li>
                <a href="#">Task</a>
            </li>
            <li>
                <a href="#">Reporting</a>
            </li>
            <li>
                <a href="#">Users</a>
            </li>
        </ul>
        <ul class="nav-menu-right">
            <li>
                <img src="../static/images/Icon-option.png">
            </li>
            <li>
                <img src="../static/images/Icon-alert.png">
            </li>
            <li>
                <?php echo "USER:".$_SESSION['usuario']; ?>
            </li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>        
    </nav>
    <div class="search">
    <form action="" method="post" id="form-query">
   
        <div class="search-btn">            
            <a class="filter" value="btnFilter" name="accion">
                <img src="../static/images/Icon-filter.png">
                Filters
            </a>
        </div>
        <div class="search-btn second">
            <input type="text" placeholder="Search" name="search-query">            
        </div>
        <div class="search-btn third">
            <input type="submit" value=" + Nuevo Usuario">
        </div>
    </form>
    </div>
    <div id="query"></div>
    <table id="result">                
        <thead class="table-thead">
            <tr>
                <th> Cliente </th>
                <th> Género </th>
                <th> País </th>
                <th> Estado </th>                                 
            </tr>
        </thead>
            <?php  while ($array = $query->fetch_row()) {
            ?>                
            <tbody>
                <tr>                            
                    <td class="principal"> <?php echo $array[0]; ?></td>
                    <td> <?php echo $array[3]; ?></td>
                    <td> <?php echo $array[1]; ?></td>
                    <td> <?php echo $array[2]; ?></td>                    
                </tr>
            </tbody>
            <?php 
        } ?>            
    </table>
    <div class="pagination">
        <div class="message previous">
            <input type="submit" value="Previous">
        </div>
        <div class="message count">
            Page 1 of 10
        </div>
        <div class="message next">
        <input type="submit" value="Next">
        </div>
    </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../static/js/search.js" ></script>

</html>