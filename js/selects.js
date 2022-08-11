provincias = [
    {"nombre completo": "Provincia de Misiones", fuente: "IGN", nombre: "Misiones", id: "54" },
    {} ]

function cargarSelect() {
    fetch('../provincias.json')//pregunta al backend si existe el archivo
    .then(res => res.json()) //acá hago la petición
    .then(provinciasJson => {
        document.querySelector('#provincias').innerHTML = '<option disabled>Seleccione un provincia</option>'
        provinciasJson.provincias.forEach(provincia => {

            document.querySelector('#provincias').innerHTML += `
                <option value="${provincia.id}">${provincia.nombre}</option>
            `

            //provincia.id
            //provincia.nombre

        });
    })

}



// function cargarSelect() {
    
//     fetch('../json/provincias.json')
//     .then(respuesta => respuesta.json())
//     .then(prov =>{
//         document.getElementById('provincias').innerHTML=`<option>Seleccione una provincia</option>`
//         prov.provincias.forEach(provincia => {
//             document.getElementById('provincias').innerHTML+= `<option value="${provincia.id}">${provincia.nombre}</option>`
//         });
//     })
    
// }

// cargarSelect()

document.querySelector('#provincias').addEventListener('change',function(e){
    let idprovincias= e.target.value
    fetch('../departamentos.json')
    .then(respuesta => respuesta.json())
    .then(depar =>{
        document.getElementById('departamentos').innerHTML= `<option>Seleccione un departamento</option>`

        depar.departamentos.forEach(departamento => {
            if(departamento.provincia.id == idprovincias){
                document.getElementById('departamentos').innerHTML+= `<option value="${departamento.id}">${departamento.nombre}</option>`
            }
        })
    })
})

document.querySelector('#departamentos').addEventListener('change',function(e){
    let idDepartamentos= e.target.value

    fetch('../localidades.json')
    .then(respuesta => respuesta.json())
    .then(local =>{
        document.getElementById('localidades').innerHTML= `<option>Seleccione una localidad</option>`

        local.localidades.forEach(localidad =>{
            if(localidad.departamento.id == idDepartamentos){
                document.getElementById('localidades').innerHTML+= `<option value="${localidad}">${localidad.nombre}</option>`
            }
        })
    })
})

cargarSelect()