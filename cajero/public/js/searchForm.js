let tbody = document.getElementById("tbody");
let searchText = document.getElementById("searchText");

document.addEventListener("DOMContentLoaded", function () {
    buscadorApi();
});

searchText.addEventListener("keyup", function () {
    buscadorApi();
});

//esta función realiza una búsqueda en una API
function buscadorApi() {
    let searchTextvalue = searchText.value.trim();

    // Codifica el texto de búsqueda para evitar problemas con caracteres especiales
    let encodedSearchText = encodeURIComponent(searchTextvalue);

    // creamos la URL para incluir el parámetro 'searchText'
    let apiUrl = `api/pais/${encodedSearchText}`;

    fetch(apiUrl)
        .then((response) => {
            if (!response.ok) {
                throw new Error(
                    `Error ${response.status}: ${response.statusText}`
                );
            }
            return response.json();
        })
        .then((data) => {
            let table_responsive = document.getElementById("table-responsive");
            let message = document.getElementById("message");

            if (data.message) {
                // Mostramos el mensaje en la interfaz de usuario
                table_responsive.classList.add("d-none");
                message.innerHTML = data.message;
            } else {
                message.innerHTML = "";
                table_responsive.classList.remove("d-none");

                //enviamos los datos
                tabla(data);
            }
        })
        .catch((error) => {
            console.error("Error al obtener los resultados:", error);
        });
}

//esta función permitirá mostrar los registros en una tabla
function tabla(data) {
    //objeto JSON con una propiedad 'paises'
    let paises = data.paises;

    let content_tbody = "";

    paises.forEach((pais) => {
        content_tbody += `
        <tr>
            <th scope="row">${pais.cod_pais}</th> 
                <td class="text-capitalize">${pais.pais}</td>
                <td class="text-end"> 
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal${pais.cod_pais}">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal${pais.cod_pais}">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>  
        </tr>`;
    });

    // Asigna la cadena al elemento con el id "tbody"
    tbody.innerHTML = content_tbody;
}
