document.addEventListener('DOMContentLoaded', function () {
    const salonesTable = document.getElementById('salonesTable');
    const addSalonForm = document.getElementById('addSalonForm');

    // Cargar datos iniciales
    cargarSalones();

    addSalonForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(addSalonForm);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });

        agregarSalon(data);
    });

    function cargarSalones() {
        // Llamada a la función en el controlador para obtener los salones
        const salones = obtenerSalones();

        // Llenar la tabla con los datos de los salones
        const tbody = salonesTable.querySelector('tbody');
        tbody.innerHTML = '';
        salones.forEach(salon => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${salon.idsalon}</td>
                <td>${salon.nombre}</td>
                <td>${salon.estado}</td>
                <td>${salon.idsector}</td>
            `;
            tbody.appendChild(row);
        });
    }

    function agregarSalon(data) {
        // Llamada a la función en el controlador para agregar un salón
        agregarNuevoSalon(data);

        // Recargar la tabla con los datos actualizados
        cargarSalones();
    }
});

// Funciones simuladas de JavaScript para interactuar con el controlador
function obtenerSalones() {
    // Llamada al controlador para obtener los salones
    // Aquí deberías implementar la lógica real para obtener los datos
    return [
        { idsalon: 1, nombre: 'Salón A', estado: 'Disponible', idsector: 1 },
        { idsalon: 2, nombre: 'Salón B', estado: 'Ocupado', idsector: 2 },
        // Agrega más datos según sea necesario
    ];
}

function agregarNuevoSalon(data) {
    // Llamada al controlador para agregar un nuevo salón
    // Aquí deberías implementar la lógica real para agregar los datos
}
