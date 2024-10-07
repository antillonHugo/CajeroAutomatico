//variables para mostrar los datos de las peticiones asincronas
let tabla = document.querySelectorAll(".table-responsive");
let contenidoTabla = document.querySelectorAll(".tbody"); //obtiene el contenido de la tabla(tbody)
const sinDatosApi = document.querySelectorAll(".contenedorSinDatos"); //muestra un mensaje predeterninado cuando no existen datos

let textoaBuscar = ""; //almacena el texto a buscar(filtrar) en la bd
let botonesPaginador = ""; //almacena el nodeList de enlaces que se crean en el paginador
let solicitudApi = ""; //almacena la solicitud del servidor

//cargamos las funciones al cargar la página
window.addEventListener("load", function () {
    solicitudApi = obtenerSolicitudApi();

    const rutasConSolicitudApi = ["pais", "departamento", "municipio"];

    if (rutasConSolicitudApi.includes(solicitudApi)) {
        filtrar("", 1); //inicializa la función
    } else if (solicitudApi === "cliente") {
        filtrarClientes("", 1); //inicializa la función
    }
});

//permite obtener la solicitud API que puede ser departamento, país o municipio etc desde la url
function obtenerSolicitudApi() {
    const rutaActual = window.location.pathname;
    let solicitud = eliminarCaracteresEspeciales(rutaActual);
    return solicitud;
}

//permite realizar peticiones asincronas al servidor
async function fetchApi(url) {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`Error ${response.status}: ${response.statusText}`);
        }
        const datos = await response.json();
        return datos;
    } catch (error) {
        console.error("Error al obtener los resultados:", error);
    }
}

//elimina los caracteres especiales
function eliminarCaracteresEspeciales(cadena) {
    // Definimos los caracteres especiales que queremos eliminar
    var caracteresEspeciales = /[^a-zA-Z0-9\s]/g;
    // Reemplazamos los caracteres especiales con una cadena vacía
    return cadena.replace(caracteresEspeciales, "");
}

//llena el paginador
const paginador = (lista) => {
    const paginar = document.querySelectorAll(".paginador");

    let enlaces = lista.links;

    let pagina = `<nav aria-label="Page navigation"><ul class='pagination'>`;

    enlaces.forEach((enlace) => {
        pagina += `
            <li class='page-item ${enlace.active ? "active" : ""}'>
                <button class='page-link'>
                    ${enlace.label}
                </button>
            </li>`;
    });

    pagina += `</ul></nav>`;
    paginar[0].innerHTML = pagina;

    // Añadir event listeners a los botones después de que se hayan añadido al DOM
    botonesPaginador = paginar[0].querySelectorAll(".page-link");

    return botonesPaginador;
};

// Función para formatear la fecha
function formatearFecha(fecha) {
    const date = new Date(fecha);
    const dia = ("0" + date.getDate()).slice(-2);
    const mes = ("0" + (date.getMonth() + 1)).slice(-2);
    const anio = date.getFullYear();
    return `${dia}-${mes}-${anio}`;
}
