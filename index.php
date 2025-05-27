<!DOCTYPE html>
<html>
<head>
<title>CRUD</title>
</head>
<body>
    <h2>Registrar Cliente</h2>
    <form action="index.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="direccion" placeholder="Dirección" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <button type="submit">Registrar Cliente</button>
    </form>

    <?php
    require_once __DIR__ . '/db_config.php';
    require_once __DIR__ . '/Model/Client.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];

        $cliente = new Cliente();
        if ($cliente->crearCliente($nombre, $direccion, $telefono, $email)) {
            echo "<script>alert('Cliente registrado correctamente!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error al registrar cliente.'); window.location.href='index.php';</script>";
        }
    }
    ?>
</body>
</html>