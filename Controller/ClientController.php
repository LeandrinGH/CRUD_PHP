<?php
require_once __DIR__ . "/../Model/Client.php";
require_once __DIR__ . "/../Data/ClientConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client = new Client($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['email']);
    $connection = new ClientConnection();

    if ($connection->addClient($client)) {
        echo json_encode(["message" => "Cliente registrado correctamente"]);
    } else {
        echo json_encode(["message" => "Error al registrar cliente"]);
    }
}
?>
