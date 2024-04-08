<?php

require_once('Lib/Funciones.php');

if (isset($_POST)) {

    // var_dump($_POST['factura']);

    $factura = new Factura();
    $factura->guid = $_POST['factura']['guid'];

    // var_dump($factura);

    $count = $_POST['count'];
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];

    $item = new Item($count, $name, $qty, $price);
    array_push($factura->items, $item);
    // var_dump($factura);

    // $response = ['res' => $factura];

    header('Content-Type: application/json');
    echo json_encode($factura);
}
