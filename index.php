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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php

$factura = new Factura();
$factura->guid = GUID();

function updateFactura()
{
    $phpVar = '<script>localStorage.getItem("facturaObj")</script>';

    global $factura;
    $factura = json_decode($phpVar);

    return 0;
}

?>

<div class="container">
    <h2>Code: <?php echo $factura->guid; ?></h2>
    <!-- <div class="container" style="display: flex; align-items: center; padding-bottom:18px;">
        <p><?php echo asign_inputs('', 'add_producto', ''); ?></p>
        <button type="button" style="margin-left: 15px;">Agregar producto </button>
    </div> -->
</div>

<body>
    <div class="container">
        <table id="productsTable" class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody id="products_table">
                <tr>
                    <th scope="row"></th>
                    <!-- <td>Producto 1</td> -->
                    <td class="centered"><?php echo asign_inputs('', 'Nombre', 'Coca Cola', ['type' => 'text']); ?> </td>

                    <td class="centered"><?php echo asign_inputs('', 'Cantidad', '10', ['type' => 'number']); ?> </td>
                    <td class="centered"><?php echo asign_inputs('', 'Precio', '25', ['type' => 'number']); ?> </td>
                    <td><button id="addbtn">Agregar</button></td>

                </tr>

                <tr>
                    <th scope="row">-</th>
                    <td></td>

                    <td style="text-align: end; font-weight: bold;">Total:</td>
                    <td class="centered" id="displayTotal">
                        <>
                    </td>
                </tr>
            </tbody>

            <script>
                const btn = document.getElementById('addbtn');

                let print = () => {

                }

                btn.addEventListener('click', print);
            </script>

            <script>
                let count = 1;
                let addProduct = () => {
                    let table = document.querySelector('table');
                    const row = table.insertRow(document.querySelector('tbody').children.length);
                    const name = document.getElementById("Nombre").value;
                    const qty = document.getElementById("Cantidad").value;
                    const price = document.getElementById("Precio").value;

                    $.ajax({
                        type: 'POST',
                        url: 'insert_item.php',
                        data: {
                            count: count,
                            name: name,
                            qty: qty,
                            price: price,
                            factura: <?= json_encode($factura); ?>
                        },
                        success: function(response) {
                            let res = JSON.stringify(response);
                            console.log(res);
                            localStorage.setItem('facturaObj', res);
                            var updateFactura = <?php echo updateFactura(); ?>;
                        }
                    });

                    row.innerHTML = `
                    <tr>
                        <td value="${count}" class="centered">${count++}</td>
                        <td value="${name}" class="centered">${name}</td>
                        <td value="${qty}" class="centered">${qty}</td>
                        <td value="${price}" class="centered">${price}</td>
                    </tr>
                    `
                    // console.log(row);
                    // console.log(count);

                    updateTotal();
                }

                document.getElementById('addbtn').addEventListener('click', addProduct);

                let updateTotal = () => {
                    const tbody = document.querySelector('tbody');
                    let sum = 0;

                    for (var i = 1; i < tbody.childElementCount - 1; i++) {
                        let price = Number(tbody.rows[i].children[3].innerHTML);
                        sum += price;
                        console.log(tbody.rows[i].children[3].innerHTML);

                    }

                    document.getElementById('displayTotal').innerHTML = `$ ${sum}.00`;

                }
            </script>
        </table>
        <h2>Comentario</h2>
        <textarea name="" id="comment" cols="30" rows="5"></textarea>
        <br>
        <br>
    </div>
</body>

<?php
date_default_timezone_set('America/Santo_Domingo');
echo date('Y-m-d H:i:s');
?>

<div style="display: flex; justify-content: flex-end; margin-right:25px">
    <button type="button">Guardar</button>
</div>

</html>