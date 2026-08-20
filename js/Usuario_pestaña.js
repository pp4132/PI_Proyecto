const botonUsuario = document.getElementById("botonUsuario");
const panelUsuario = document.getElementById("panelUsuario");
const cerrarPanel = document.getElementById("cerrarPanel");


// Abrir / cerrar panel
botonUsuario.addEventListener("click", function () {
    panelUsuario.classList.toggle("activo");
});


// Cerrar con X
cerrarPanel.addEventListener("click", function () {
    panelUsuario.classList.remove("activo");
});


// Cerrar al hacer clic fuera
document.addEventListener("click", function (evento) {

    if (
        panelUsuario.classList.contains("activo") &&
        !panelUsuario.contains(evento.target) &&
        !botonUsuario.contains(evento.target)
    ) {
        panelUsuario.classList.remove("activo");
    }

});


// Cerrar con la tecla Escape
document.addEventListener("keydown", function (evento) {

    if (evento.key === "Escape") {
        panelUsuario.classList.remove("activo");
    }

});
