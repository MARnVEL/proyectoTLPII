
function cargarSelect() {
    fetch('../json/provincias.json')//pregunta al backend si existe el archivo
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



document.querySelector('#provincias').addEventListener('change', function (e) {
    //change: cuando  cambia el valor interno del select se ejecuta la función
    //Leemo el valor del elemento que dispara el evendto.

    let idProvincia = e.target.value;
    //Consultamos dentro de provincias cuales son 

    fetch('departamentos.json')
    .then(res => res.json())
    .then(departamentos => {
        document.querySelector('#departamentos').innerHTML = '<option>Seleccione un departamento</option>'
        departamentos.departamentos.forEach(departamento => {
            if (departamento.provincia.id == idProvincia) {
                document.querySelector('#departamentos').innerHTML += 
                `
                    <option value="${departamento.id}">${departamento.nombre}</option>
                `
            }
        })
    })
})

document.querySelector('#departamentos').addEventListener('change', function (e){
    let idDepartamentos = e.target.value;
    fetch('localidades.json')
    .then(res => res.json)
    .then(localidades => {
        console.log(localidades)
        document.querySelector('#localidades').innerHTML = `<option>Seleccione una localidad</option>`
        localidades.localidades.forEach(localidad => {
            if (localidad.departamento.id == idDepartamentos) {
                document.querySelector('#localidades').innerHTML += `
                    <option value=${localidad.localidad.id}>${localidad.nombre}</option>`
                
            }
        })
    })
})


cargarSelect();
