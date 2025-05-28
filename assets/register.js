document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("clientForm").addEventListener("submit", function(event){
        event.preventDefault();

        let formData = new FormData(this);

        fetch("../Controller/ClientController.php",{
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => console.error("Error: ", error));
    })
})