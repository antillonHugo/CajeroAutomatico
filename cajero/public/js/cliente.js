let nombretxt = document.getElementById("nombre");
let duitxt = document.getElementById("dui");
let selectDepartamento = document.getElementById("selectDepartamento");
let selectMunicipio = document.getElementById("selectMunicipio");

//crea una nueva instancia de URLSearchParams
textoBusqueda = new URLSearchParams();

const filtros = () => {
    var departamentoSelect = selectDepartamento.value;
    var municipioSelect = selectMunicipio.value;

    let nombre = eliminarCaracteresEspeciales(nombretxt.value);
    let dui = eliminarCaracteresEspeciales(duitxt.value);

    // textoBusqueda.append agrega parámetros a la instancia creada
    textoBusqueda.set("nombre", nombre);
    textoBusqueda.set("dui", dui);
    textoBusqueda.set("departamentoid", departamentoSelect);
    textoBusqueda.set("municipioid", municipioSelect);

    filtrarClientes(textoBusqueda, 1);
};

if (document.getElementById("nombre")) {
    nombretxt.addEventListener("keyup", filtros);
    duitxt.addEventListener("keyup", filtros);
    selectDepartamento.addEventListener("change", filtros);
    selectMunicipio.addEventListener("change", filtros);
}

const filtrarClientes = async (filtros, paginaInicial = 1) => {
    const url = `/api/cliente?${filtros.toString()}&page=${paginaInicial}`;

    const datos = await fetchApi(url);

    if (datos.message) {
        // Mostramos el mensaje en la interfaz de usuario
        tabla[0].classList.add("d-none");

        // Remueve la clase d-none del elemento
        sinDatosApi[0].classList.remove("d-none");
        sinDatosApi[1].classList.add("d-none");
    } else {
        let clientes = datos["cliente"];
        tabla[0].classList.remove("d-none");

        sinDatosApi[0].classList.add("d-none");
        sinDatosApi[1].classList.remove("d-none");

        mostrarClientes(clientes);
    }
};

//crea la interfaz para mostrar los clientes
const mostrarClientes = (clientes) => {
    console.log(clientes);
    let content_tbody = ``;

    clientes.data.forEach((cliente) => {
        content_tbody += `
    <tr>
        <th scope="col">${cliente.cod_cliente}</th>
        <td class="text-nowrap">${cliente.primer_nombre} ${cliente.segundo_nombre}</td>
        <td class="text-nowrap">${cliente.primer_apellido} ${cliente.segundo_apellido}</td>
        <td class="text-nowrap">${cliente.dui}</td>
        <td class="text-nowrap">${cliente.fecha_de_nacimiento}</td>
        <td class="text-nowrap">${cliente.celular}</td>
        <td class="text-nowrap">${cliente.correo}</td>
        <td class="text-nowrap">${cliente.pais.pais}</td>
        <td class="text-nowrap">${cliente.departamento.departamento}</td>
        <td class="text-nowrap">${cliente.municipio.municipio}</td>
        <td class="text-end text-nowrap">
            <button type="button" class="btn btn-light text-primary" data-bs-toggle="modal"
                data-bs-target="#editModal${cliente.cod_cliente}">
                <i class="fa-regular fa-pen-to-square"></i>
            </button>
            <button type="button" class="btn btn-light text-danger" data-bs-toggle="modal"
                data-bs-target="#deleteModal${cliente.cod_cliente}">
                <i class="fa-solid fa-trash"></i>
            </button>
        </td>
    </tr>
`;
        let botonesPaginador = paginador(clientes);

        botonesPaginador.forEach((boton, index) => {
            boton.addEventListener("click", () => {
                paginaInicial = boton.textContent.trim();
                filtrarClientes(textoBusqueda, paginaInicial);
            });
        });
    });

    // Asigna la cadena al elemento con la clase "tbody"
    contenidoTabla[0].innerHTML = content_tbody;
};
