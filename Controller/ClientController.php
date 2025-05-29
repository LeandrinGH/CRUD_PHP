<?php
require_once __DIR__ . "/../Model/Client.php";
require_once __DIR__ . "/../Data/ClientConnection.php";
header('Content-Type: application/json');
$connection = new ClientConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);

    $response = [
        'status'=> 'error',
        'message'=> 'Error desconocido'
    ];

    if ($data === null && json_last_error() !== JSON_ERROR_NONE){
        $response['message'] = 'Error al decodificar los datos JSON: ' . json_last_error_msg();
    }
    else {
        $nombre = htmlspecialchars($data['nombre']);
        $direccion = htmlspecialchars($data['direccion']);
        $telefono = htmlspecialchars($data['telefono']);
        $email = htmlspecialchars($data['email']);

        $client = new Client($nombre, $direccion, $telefono, $email);

        if ($connection->addClient($client)) {
            $response = ["message" => "Cliente registrado correctamente", "status" => "success"];
        } else {
            $response = ["message" => "Error al registrar cliente", "status" => "error"];
        }
    }
    echo json_encode($response);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo json_encode($connection->getClients());
    exit;
}
?>
