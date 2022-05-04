<?php

$query = $_POST['query'];

include('../conexion/db.php');          

$queryFilter = mysqli_query($conexion, "SELECT * FROM user WHERE pais='$query'");

?>
<table id="result">                
        <thead class="table-thead">
            <tr>
                <th> Cliente </th>
                <th> Género </th>
                <th> País </th>
                <th> Estado </th>                                 
            </tr>
        </thead>
<?php

while ($array = $queryFilter->fetch_row()) {

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
} 
?>