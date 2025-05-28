<?php
require_once __DIR__ . "/../Model/Client.php";

class ClienteControlador {
    private $cliente;

    public function __construct() {
        $this->cliente = new Cliente();
    }

    public function agregarCliente($nombre, $direccion, $telefono, $email) {
        return $this->cliente->crearCliente($nombre, $direccion, $telefono, $email);
    }
}
?>
