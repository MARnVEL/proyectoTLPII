
let conductores = [];

let botonViaje = document.getElementById("botonViaje");

botonViaje.addEventListener("click", function listarViaje() {

    let nombreCompleto = document.getElementById('userName').value.trim();

    // let localidadOrigen = document.getElementById('localidadesOrigen').value.trim()
    // let localidadDestino = document.getElementById('localidadesDestino').value.trim();
    let descripcionViaje = document.getElementById('textArea').value.trim();
    let costoViaje = document.getElementById('selectorCostoViaje').value;
    let id = uuid.v4();
    
    
    if ( validarFormulario(nombreCompleto, descripcionViaje)) {
        conductores.push({id, nombreCompleto, descripcionViaje, costoViaje, });
        form.reset();
        renderizarCard(id, nombreCompleto, descripcionViaje, costoViaje);
    } else {
        alert("El campo del nombre o de la tarea, o ambos, están vacíos.");
    }  
    //Redibujo la tabla
    // renderizarCard(id, nombreCompleto, descripcionViaje, costoViaje);


})

function renderizarCard(id, nombreCompleto, descripcionViaje, costoViaje) {
    /*
    let tarjeta = document.createElement("div");

    tarjeta.innerHTML = `<div class="card" style="width: 18rem display: flex !important;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title" style="color: #000;">${nombreCompleto}</h5>
        <p class="card-text" style="color: #000;">${descripcionViaje}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">${costoViaje}</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
        
    </div>
    </div>`
    
    let midiv = document.getElementById("cardMartin")
    midiv.appendChild(tarjeta)
    */
    
    
    let htmlResult = 
    `
    <table id="htmltable" class="table">
        <thead>
            <tr>
                <th>Acciones</th>
                <th>Apellido y Nombre</th>                                            
                <th>Descripción del Viaje</th>
                <th>Costo</th>
            </tr>
        </thead>
        <tbody>`;

    for(let i = 0;i<conductores.length;i++){
        let claseCosto = "";
        if (conductores[i].costoViaje == "Efectivo") {
            claseCosto = "danger";
        }else if(conductores[i].costoViaje == "Otro") {
            claseCosto = "warning";
        }else if (conductores[i].costoViaje == "Gratis"){
            claseCosto = "success";
        }

        htmlResult = htmlResult +  
        `
        <tr>
            <td>
                <button class="button btn-danger" onclick="eliminarTarea('${conductores[i].id}')">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                    </svg>
                    <i class="bi bi-trash3-fill"></i>

                </button>

                <button class="button btn-primary" onclick="editarTarea('${conductores[i].id}')" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    <i class="bi bi-pencil-square"></i>
                </button>

        
            </td>
            <td>${conductores[i].nombreCompleto}</td>
            <td>${conductores[i].descripcionViaje}</td>
            <td><label class="badge badge-${claseCosto}">${conductores[i].costoViaje}</label></td>
        </tr>
        `
    }

        
    htmlResult=  htmlResult +  `
        </tbody>
    </table>
    `;

    document.getElementById('htmlTable').innerHTML = htmlResult;
    
    
}

function validarFormulario(nombreCompleto, descripcionViaje) {
    if ((validarNombre(nombreCompleto)) && (validarDescripcion(descripcionViaje))) {
        return true;
    }
    return false;
}

function validarNombre(nombreCompleto) {

    if (nombreCompleto == "") { //Controlo que no sea una cadena vacía
        alert('El nombre no puede estar vacio');
        return false;
    } else {
        for (let i = 0; i < nombreCompleto.length; i++) {
            if ( ((nombreCompleto[i].charCodeAt() > 90) || (nombreCompleto[i].charCodeAt() < 65)) &&
             ((nombreCompleto[i].charCodeAt() > 122) || (nombreCompleto[i].charCodeAt() < 97)) &&
             ((nombreCompleto[i].charCodeAt() != 32)) ) {
                // console.log('Entro')
                alert('El nombre no puede tener caracteres especiales1');
                form.reset();
                return false;                
            }
        }
        
    }
    
    return true;
}


function validarDescripcion(descripcionViaje) {

    if ((descripcionViaje =="")) {
        alert("El campo descripcion no puede estar vacio");
        form.reset();
        return false;
        
    } else if(descripcionViaje.length > 80) {
        alert('El campo descripción no puede tener mas de 80 caracteres');
        form.reset();
        return false;
    }
    return true;
}


