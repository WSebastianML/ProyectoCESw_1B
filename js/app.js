document.addEventListener('DOMContentLoaded', function() {
    var tabla = document.getElementById('tabla');

    if (tabla.rows.length === 2) {
        var fila = tabla.insertRow(0);
        var celda = fila.insertCell(0);
        celda.colSpan = 8; 
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

document.addEventListener('DOMContentLoaded', function(){
    var botonOrdenar = document.getElementById('btnOrdenar');
    botonOrdenar.addEventListener('click', function(){
        var tabla = document.getElementById("tabla");
        var tbody = tabla.getElementsByTagName("tbody")[0];
        var rows = [].slice.call(tbody.getElementsByTagName("tr"));

        // Obtiene el índice de la columna seleccionada
        var index = document.getElementById("selectColumna").value;

        // Ordena las filas basándose en el contenido de la columna seleccionada
        rows.sort(function(a, b) {
            var textA = a.getElementsByTagName("td")[index].textContent;
            var textB = b.getElementsByTagName("td")[index].textContent;
            return textA.localeCompare(textB);
        });

        // Elimina las filas actuales de la tabla
        while (tbody.firstChild) {
            tbody.removeChild(tbody.firstChild);
        }

        // Vuelve a agregar las filas ordenadas
        rows.forEach(function(row) {
            tbody.appendChild(row);
        });
    });
});
