<?php
require __DIR__ . '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken("TU_ACCESS_TOKEN");

$input = json_decode(file_get_contents("php://input"), true);
$productos = $input["carrito"];

$items = [];

foreach ($productos as $p) {
    $item = new MercadoPago\Item();
    $item->title = $p["nombre"];
    $item->quantity = $p["cantidad"];
    $item->unit_price = $p["precio"];
    $items[] = $item;
}

$preference = new MercadoPago\Preference();
$preference->items = $items;
$preference->save();

echo json_encode(["id" => $preference->id]);
