
let tareas = [
    // {id: uuid.v4(),    
    // nombreCompleto: "Samso Park",
    // tarea:"Conectar a la BD",
    // estadoTarea: "Pendiente",},

    // {id: uuid.v4(),    
    // nombreCompleto: "Marlo Sanki",
    // tarea:"Comprar medicamentos",
    // estadoTarea: "En progreso",},

    // {id: uuid.v4(),    
    // nombreCompleto: "John Ryte",
    // tarea:"Vender bicicleta",
    // estadoTarea: "Completado",},

    // {id: uuid.v4(),    
    // nombreCompleto: "Dave",
    // tarea:"Presentar trabajos de TLP",
    // estadoTarea: "En progreso",},
    
];

let boton = document.getElementById("boton");
boton.addEventListener("click", function listarTarea() {
    
    //Obtengo datos del formulario
    let nombreCompleto = document.getElementById('userName').value;
    let tarea = document.getElementById('textArea').value;
    let estadoTarea = document.getElementById('selectorEstadoTarea').value;
    let id = uuid.v4();

    //Valido los datos del formulario y cargo el array

    if ( validarFormulario(nombreCompleto, tarea)) {

        tareas.push({id, nombreCompleto, tarea, estadoTarea, });
        form.reset();

    } else {

        alert("El campo del nombre o de la tarea, o ambos, están vacíos.");

    }

    // for (let index = 0; index < array.length; index++) {
    //     const element = array[index];
        
    // }
    
    //Redibujo la tabla
    renderizarTabla();

})

function renderizarTabla() {

    let htmlResult = 
    `
    <table id="htmltable" class="table">
        <thead>
            <tr>
                <th>Acciones</th>
                <th>Apellido y Nombre</th>                                            
                <th>Tarea</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>`;

    for(let i = 0;i<tareas.length;i++){
        let claseEstado = "";
        if (tareas[i].estadoTarea == "Pendiente") {
            claseEstado = "danger";
        }else if(tareas[i].estadoTarea == "En progreso") {
            claseEstado = "warning";
        }else if (tareas[i].estadoTarea == "Completado"){
            claseEstado = "success";
        }

        htmlResult = htmlResult +  
        `
        <tr>
            <td>
                <button class="button btn-danger" onclick="eliminarTarea('${tareas[i].id}')">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                    </svg>
                    <i class="bi bi-trash3-fill"></i>

                </button>

                <button class="button btn-primary" onclick="editarTarea('${tareas[i].id}')" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    <i class="bi bi-pencil-square"></i>
                </button>

        
            </td>
            <td>${tareas[i].nombreCompleto}</td>
            <td>${tareas[i].tarea}</td>
            <td><label class="badge badge-${claseEstado}">${tareas[i].estadoTarea}</label></td>
        </tr>
        `
    }

        
    htmlResult=  htmlResult +  `
        </tbody>
    </table>
    `;

    document.getElementById('htmlTable').innerHTML = htmlResult;
    
}

function validarFormulario(nombreCompleto, tarea) {
    if ((validarNombre(nombreCompleto)) && (tareaVacia(tarea))) {
        return true;
    }
    return false;
}

//Intentando hacer más simple y corto el código
// validarFormulario(nombreCompleto, tarea) => {
//     if ((validarNombre(nombreCompleto)) && (tareaVacia(tarea))) {
//         return true;
//     }
//     return false;
// }

//Valido el nombre de acuerdo a las especificaciones del problema

function validarNombre(nombreCompleto) {
    if (nombreCompleto == "") { //Controlo que no sea una cadena vacía
        return false;        
    }
    return true;
}

//let botonEditar = document.getElementById()


function tareaVacia(tarea) {
    if (tarea == "") { //Controlo que no sea una cadena vacía
        return false;     
    }
    return true;
}


// tareaVacia(tarea) => {
//     return (!(tarea == ""));
// }

function editarTarea(id) {

    document.getElementById('staticBackdrop2Label').innerText = 'Guardar Cambios';
    document.getElementById('botonDescartar').innerText = 'Descartar Cambios';
    
}

function eliminarTarea(id) {

    for (let i = 0; i < tareas.length; i++) {

        if (tareas[i].id == id) {
            prompt('¿Está seguro que desea eliminar esta tarea? Escriba NO en caso de no que');
            // alert('¿Está seguro que desea eliminar esta tarea?');

            tareas.splice(i, 1);
        }
    }
    renderizarTabla()
}