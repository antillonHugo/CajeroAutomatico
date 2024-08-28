let nav = document.querySelectorAll(".navbar-nav");

nav.forEach((navItem, index) => {
    let navLinks = navItem.querySelectorAll(".nav-link");

    // Cargar el estado guardado al cargar la página
    document.addEventListener("DOMContentLoaded", () => {
        let activeLink = localStorage.getItem(`activeLink${index}`);

        let link = navItem.querySelector(activeLink);
        if (link) {
            let colorBorder = "2px solid #73BBA3";
            // Agrega el estilo usando la propiedad style
            link.style.borderBottom = colorBorder;
        }
    });

    navLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            // Remover el estilo de los otros enlaces en el mismo menú
            navLinks.forEach((link) => {
                link.style.backgroundColor = "";
                link.style.color = "";
            });

            // Guardar el estado en localStorage
            localStorage.setItem(
                `activeLink${index}`,
                `.nav-link[href='${link.getAttribute("href")}']`
            );
        });
    });
});

// Esperar 3 minutos (180000 milisegundos) antes de ocultar la alerta
setTimeout(() => {
    const messages = document.getElementById("messages");
    if (messages) {
        messages.style.display = "none";
    }
}, 4000);
