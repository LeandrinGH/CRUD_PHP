<?php

class Client {
    public $nombre;
    public $direccion;
    public $telefono;
    public $email;

    public function __construct($nombre, $direccion, $telefono, $email) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    // public function checkValues() {
    //     return !empty($this->nombre) && !empty($this->direccion) && 
    //        !empty($this->telefono) && filter_var($this->email, FILTER_VALIDATE_EMAIL);

    // }
}
?>
