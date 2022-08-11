
let erroresList = [];

let botonRegistro = document.getElementById("botonRegistro");

botonRegistro.addEventListener("submit", function (event) {
    event.preventDefault();
    function validarRegistro() {

        let nombreUsuario = document.getElementById("nombreUsuario").value;
        let apellidoUsuario = document.getElementById("nombreUsuario").value;
        // let tipoUsuario = document.querySelector("option");
        let email = document.getElementById("email").value;
        let contra = document.getElementById("pasword").value;
        let confirmaContra = document.getElementById("passwordConfirm").value;

        if (nombreUsuario) {
            
        } else {
            
        }



    }


        
})

// let formularioRegistro = document.getElementById("formularioRegistro");
// let respuesta = document.getElementById('respuestaRegistro');

// formularioRegistro.addEventListener('submit', function (event) {
//     event.preventDefault();
//     //hacer validaciones para que el formulario no venga vacío.
//     let datos = new FormData(formularioRegistro);

//     let nombreUsuario = datos.get('nombreUsuario');
//     console.log(nombreUsuario);

//     fetch('/php/registro.php',{
//         method: 'POST',
//         body: datos,
//     })
//     .then(respuesta => respuesta.json())
//     .then(data => {
//         // console.log(data);
//         if (data == 'error') {
//             respuesta.innerHTML = `
//             <div class="alert alert-danger" role="alert">
//                 Llena todos los campos!
//             </div>
//             `;
            
//         } else {
//             respuesta.innerHTML = `
//             < class="alert alert-danger" role="alert">
//                 ${data}
//             </div>
//             `;
//         }

//     })

// })
