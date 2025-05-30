document.getElementById("clientForm").addEventListener("submit", function(event) {
    event.preventDefault();
    saveClient();
})

document.addEventListener("DOMContentLoaded", getClients);

function saveClient(){
    const form = document.getElementById("clientForm");

    let formData = new FormData(form);
    const data = {};

    formData.forEach((value, key) => { data[key] = value; });

    fetch("../Controller/ClientController.php",{
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(responseData => {
        console.log(responseData);
        alert(responseData.message);
        
        if (responseData.status === 'success'){
            form.reset();
            getClients();
        }
    })
    .catch(error => console.error("Error: ", error));
}

function getClients() {
    fetch("../Controller/ClientController.php", { method: "GET" })
    .then(response => response.json())
    .then(data => {
        let table = document.getElementById("ClientsTable");
        table.innerHTML = "";
        if (!data || data.length === 0) {
            console.warn("No hay clientes registrados.");
            return;
        }

        data.forEach(client => {
            let row = `<tr>
                <td>${client.id}</td>
                <td>${client.nombre}</td>
                <td>${client.direccion}</td>
                <td>${client.telefono}</td>
                <td>${client.email}</td>
                <td>
                    <button onclick="updateClient(${client.id})">Editar</button>
                    <button onclick="deleteClient(${client.id})">Eliminar</button>
                </td>
                </tr>`;
            table.innerHTML += row;
        });
    })
    .catch(error => console.error("Error: ", error));
}

function updateClient(id) {
    let nombre = prompt("Nuevo nombre: ");
    let direccion = prompt("Nueva dirección:");
    let telefono = prompt("Nuevo teléfono:");
    let email = prompt("Nuevo email:");
    if (nombre && direccion && telefono && email) {
        fetch("../Controller/ClientController.php", {
            method: "PUT",
            body: JSON.stringify({ id, nombre, direccion, telefono, email }),
            headers: { "Content-Type": "application/json" }
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            getClients(); // Refrescar la tabla
        })
        .catch(error => console.error("Error:", error));
    }
}

function deleteClient(id) {
    fetch("../Controller/ClientController.php", {
        method: "DELETE",
        body: JSON.stringify({id}),
        headers: { "Content-Type": "application/json" }
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        getClients();
    })
    .catch(error => console.error("Error: ", error));
}