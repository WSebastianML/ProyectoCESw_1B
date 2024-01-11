document.addEventListener('DOMContentLoaded', function() {
    var tabla = document.getElementById('tabla');

    if (tabla.rows.length === 2) {
        var fila = tabla.insertRow(0);
        var celda = fila.insertCell(0);
        celda.colSpan = 6; 
        celda.innerHTML = "No hay registros disponibles.";
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var formulario = document.getElementById('formBorrar');

    formulario.addEventListener('submit', function(event) {
        var confirmacion = confirm("¿Estás seguro de que quieres borrar este registro?");

        // Si el usuario hace clic en "Cancelar", detener el envío del formulario
        if (!confirmacion) {
            event.preventDefault();
        }
    });
});