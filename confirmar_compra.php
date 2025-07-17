<?php
header("Content-Type: application/json");
include 'conexion.php';


// Recibir datos JSON del carrito
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['items']) || count($data['items']) == 0) {
    echo json_encode(["success" => false, "message" => "No hay productos"]);
    exit;
}

$respuestas = [];

foreach ($data['items'] as $item) {
    $producto = $conn->real_escape_string($item['nombre']);
    $precio = floatval($item['precio']);
    $cantidad = intval($item['cantidad']);

    $sql = "INSERT INTO compras (producto, cantidad, precio) 
            VALUES ('$producto', $cantidad, $precio)";
    
    if ($conn->query($sql)) {
        $respuestas[] = ["producto" => $producto, "status" => "ok"];
    } else {
        $respuestas[] = ["producto" => $producto, "status" => "error", "error" => $conn->error];
    }
}

$conn->close();
echo json_encode(["success" => true, "results" => $respuestas]);
?>