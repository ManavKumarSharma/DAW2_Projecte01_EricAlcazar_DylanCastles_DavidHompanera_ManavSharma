const button_filter = document.getElementById('filter_button');

if (button_filter) {
    button_filter.addEventListener('click', function () {






        // Crear el nuevo select
        let nuevoSelect = document.createElement("select");
        nuevoSelect.id = "opcionesSelect"; // Añadir un id para acceder a este elemento luego

        let opcionPredeterminada = document.createElement("option");
        opcionPredeterminada.textContent = "Selecciona una opción";
        opcionPredeterminada.value = ""; // Valor vacío
        opcionPredeterminada.disabled = true;
        opcionPredeterminada.selected = true;
        nuevoSelect.appendChild(opcionPredeterminada);

        // Array de opciones (asociativo)
        const arrayOpciones = {
            "ID Reserva": "sin usar", 
            "Camarero": "sin usar", 
            "Mesa": "sin usar", 
            "Sala": "sin usar", 
            "Fecha de Inicio": "sin usar", 
            "Fecha de Finalización": "sin usar"
        };

        // Iterar sobre las claves (opciones) del objeto 'arrayOpciones'
        for (let opcion in arrayOpciones) {
            // Crear el elemento option
            let opcionElemento = document.createElement("option");
            
            // Establecer el valor de la opción (puedes usar el nombre de la opción como valor)
            opcionElemento.value = opcion;
            
            // Establecer el texto de la opción solo con el nombre
            opcionElemento.textContent = opcion;
            
            // Añadir la opción al select
            nuevoSelect.appendChild(opcionElemento);
        }

        // Obtener el contenedor y el botón de aplicar filtros
        let elementoPadre = document.getElementById("contenedorFiltros");
        let botonAplicarFiltros = document.getElementById("botonAplicarFiltros");

        // Insertar el select entre el formulario y el botón de aplicar filtros
        elementoPadre.style.display = "flex";
        elementoPadre.insertBefore(nuevoSelect, botonAplicarFiltros); // Esto asegura que el select esté entre los dos elementos
    });
}

const cerrar_filtros = document.getElementById('cerrarFiltros');

if (cerrar_filtros) {
    cerrar_filtros.addEventListener('click', function () {
        let elementoPadre = document.getElementById("contenedorFiltros");
        elementoPadre.style.display = "none";
    });
}

// Agregar la validación en el evento submit del formulario
const formulario = document.getElementById('formFiltros');

if (formulario) {
    formulario.addEventListener('submit', function(event) {
        const selectElement = document.getElementById("opcionesSelect");

        if (selectElement && selectElement.value === "") {
            // Evitar el envío del formulario si no se ha seleccionado una opción válida
            event.preventDefault();
            alert("Por favor, selecciona una opción válida.");
        }
    });
}
