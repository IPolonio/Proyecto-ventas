<?php
require_once('Lib/Main.php');






plantilla::apply();
?>


<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="Lib/style.css">
<head>
    <title>Tabla de productos</title>
   

</head>
<div class="container">
    <h2>Code: <?php echo GUID(); ?></h2>
    <div class="container" style="display: flex; align-items: center; padding-bottom:18px;">
        <p><?php echo asign_inputs('','add_producto',''); ?></p>
        <button type="button" style="margin-left: 15px;">Agregar producto </button>
    </div>
</div>



<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Producto 1</td>
                    <td class="centered"><?php echo asign_inputs('', 'Cantidad', 'cantidad', ['type' => 'number']); ?> </td>
                    <td>$100</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Producto 2</td>
                    <td>5</td>
                    <td>$200</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td style="text-align: end; font-weight: bold;">Total:</td>
                    <td><></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>


<?php
date_default_timezone_set('America/Santo_Domingo');
echo date('Y-m-d H:i:s');
?>

<div style="display: flex; justify-content: flex-end; margin-right:25px">
    <button type="button">Guardar</button>
</div


</html>



