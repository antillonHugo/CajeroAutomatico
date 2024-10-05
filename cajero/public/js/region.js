const searchText = document.querySelectorAll(".searchText");

// Verifica si el elemento con clase "searchText" existe en la página actual
if (document.getElementById("searchText")) {
    obtenerValorCajaTexto();
}

// obtiene el texto que permitira realizar el filtrado de los datos
function obtenerValorCajaTexto() {
    // Agrega el evento solo si el elemento existe
    searchText[0].addEventListener("keyup", function () {
        textoaBuscar = searchText[0].value.trim();
        console.log(textoaBuscar);
        filtrar(textoaBuscar, 1);
    });
}

//realiza el filtro
async function filtrar(textoBusqueda, paginaInicial = 1) {
    if (solicitudApi != "" && solicitudApi != "cliente") {
        textoaBuscar = eliminarCaracteresEspeciales(textoBusqueda);

        // creamos la URL para incluir el parámetro de búsqueda
        let apiUrl = `api/${solicitudApi}/${textoaBuscar}?page=${paginaInicial}`;

        const datos = await fetchApi(apiUrl);

        if (datos.message) {
            // Mostramos el mensaje en la interfaz de usuario
            tabla[0].classList.add("d-none");

            // Remueve la clase d-none del elemento
            sinDatosApi[0].classList.remove("d-none");
            sinDatosApi[1].classList.add("d-none");
        } else {
            tabla[0].classList.remove("d-none");

            sinDatosApi[0].classList.add("d-none");
            sinDatosApi[1].classList.remove("d-none");

            mostrarRegistros(datos);
        }
        /*
        if (datos.message) {
            // Mostramos el mensaje en la interfaz de usuario
            tabla[0].classList.add("d-none");

            // Remueve la clase d-none del elemento
            sinDatosApi[0].classList.remove("d-none");
        } else {
            tabla[0].classList.remove("d-none");
            sinDatosApi[0].classList.add("d-none");

            mostrarRegistros(datos);
        }*/
    }
}

//muestra los registros en la interfaz
function mostrarRegistros(datos) {
    let lista = datos[solicitudApi];

    let content_tbody = "";

    lista.data.forEach((dto) => {
        // let numerodePagina = dto.links;

        content_tbody += "<tr>";
        // Iteramos sobre cada propiedad del objeto
        for (let key in dto) {
            if (dto.hasOwnProperty(key)) {
                content_tbody += `<td>${dto[key]}</td>`;
            }
        }
        content_tbody += `
                        <td class="text-end">
                            <button type="button" class="btn btn-light text-primary" data-bs-toggle="modal"
                                data-bs-target="#editModal${
                                    dto["cod_" + solicitudApi]
                                }">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="btn btn-light text-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal${
                                    dto["cod_" + solicitudApi]
                                }">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>`;

        // mostramos el paginador
        let botonesPaginador = paginador(lista);

        botonesPaginador.forEach((boton) => {
            boton.addEventListener("click", () => {
                paginaInicial = boton.textContent.trim(); //extrae el número de página
                filtrar(textoaBuscar, paginaInicial);
            });
        });
    });

    // Asigna la cadena al elemento con la clase "tbody"
    contenidoTabla[0].innerHTML = content_tbody;
}
