let tbody = document.querySelectorAll(".tbody");
let searchText = document.querySelectorAll("#searchText");
let informacion = document.querySelectorAll(".informacion");

let solicitudApi = "";
let searchTextvalue = "";

window.addEventListener("load", function () {
    solicitudApi = obtenersolicitudfetch();
    buscadorApi(solicitudApi, searchTextvalue);
});

// Verifica si el elemento con id "searchText" existe en la página actual
if (document.getElementById("searchText")) {
    // Agrega el evento solo si el elemento existe
    searchText[0].addEventListener("keyup", function () {
        searchTextvalue = searchText[0].value.trim();
        buscadorApi(solicitudApi, searchTextvalue);
    });
}

function obtenersolicitudfetch() {
    const URLactual = window.location.href;
    //obtengo el ultimo valor de la url
    let segmento = URLactual.split("/");
    solicitudApi = segmento.at(-1);
    return solicitudApi;
}

//esta función realiza una búsqueda en una API
function buscadorApi(solicitudApi, searchTextvalue) {
    if (solicitudApi != "" && solicitudApi != "clientes-por-pais") {
        // Codifica el texto de búsqueda para evitar problemas con caracteres especiales
        let encodedSearchText = encodeURIComponent(searchTextvalue);
        // creamos la URL para incluir el parámetro 'searchText'
        let apiUrl = `api/${solicitudApi}/${encodedSearchText}`;
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
                let table_responsive =
                    document.querySelectorAll(".table-responsive");
                let message = document.querySelectorAll(".message");

                if (data.message) {
                    // Mostramos el mensaje en la interfaz de usuario
                    table_responsive[0].classList.add("d-none");
                    // Asigna la clase de Bootstrap
                    message[0].classList.remove("d-none");
                    message[0].innerHTML = data.message;
                } else {
                    message[0].innerHTML = "";
                    message[0].classList.add("d-none");
                    table_responsive[0].classList.remove("d-none");
                    //enviamos los datos
                    tabla(data);
                }
            })
            .catch((error) => {
                console.error("Error al obtener los resultados:", error);
            });
    }
}

function tabla(data) {
    // Obtenemos la primera clave del objeto para acceder a los datos
    let datos = data[Object.keys(data)[0]];

    let content_tbody = "";

    datos.forEach((dto) => {
        content_tbody += "<tr>";
        // Iteramos sobre cada propiedad del objeto
        for (let key in dto) {
            if (dto.hasOwnProperty(key)) {
                content_tbody += `<td>${dto[key]}</td>`;
            }
        }
        content_tbody += `
            <td class="text-end"> 
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal${
                    dto["cod_" + solicitudApi]
                }">
                    <i class="fa-regular fa-pen-to-square"></i>
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal${
                    dto["cod_" + solicitudApi]
                }">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>
        </tr>`;
    });

    // Asigna la cadena al elemento con la clase "tbody"
    document.querySelector(".tbody").innerHTML = content_tbody;
}
