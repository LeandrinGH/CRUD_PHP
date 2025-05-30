<!DOCTYPE html>
<html>
<head>
<title>CRUD</title>

</head>
<body>
<?php
/** 
 * Template Name: Registros de Clientes 
*/
require_once('./../../../../../wp-load.php');
get_header();
?>
<h2>Registrar Cliente</h2>
    <form id="clientForm">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="direccion" placeholder="Dirección" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <button type="submit">Registrar Cliente</button>
    </form>
    <br></br>
    <input type="text" id="searchInput" placeholder="Buscar clientes..." onkeyup="buscarClientes()">
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="ClientsTable"></tbody>
    </table>
    <script src="../assets/register.js"></script>
    <?php
    get_footer();
    ?>
</body>
</html>