<?php 
    include "./conexion.php"; 
    include "./header.php"; 
    $conexion = conexion(); 
    $sql = "SELECT * FROM t_animales"; 
    $respuesta = mysqli_query($conexion, $sql);
?>

<table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>reguion</th>
                <th>comida</th>
            </tr>
        </thead>
        <tbody>
        <?php while ( $ver = mysqli_fetch_array($respuesta2)): ?>
            <tr>
                <th><?php echo $ver['id']: ?></th>
                <th><?php echo $ver['nombre']: ?></th>
                <th><?php echo $ver['region']: ?></th>
                <th><?php echo $ver['comida']: ?></th>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</table>

<?php include "./footer.php"; ?>