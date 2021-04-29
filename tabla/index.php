<?php
    $conexion = mysqli_connect('localhost','root','','webx');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
</head>
<body>
    <br>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>ID rol </td>
            <td>Nombre</td>
        </tr>
        <?php
            $sql = "SELECT * from t_usuarios";
            $result = mysqli_query($conexion,$sql);

            while ($mostrar = mysqli_fetch_array($result)){
            
        ?>
        <tr>
            <td><?php echo  $mostrar ['id_usuario']; ?></td>
            <td><?php echo  $mostrar ['id_rol_usuario']; ?></td>
            <td><?php echo  $mostrar ['usuario']; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>