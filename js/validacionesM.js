

//Guardo en variables los valores de los input del formulario de registro
function registrarUsuario() {
    let email = document.getElementById('email').value
    let username = document.getElementById('username').value
    let password = document.getElementById('password').value
    let passwordConfirm = document.getElementById('passwordConfirm').value
    let divAlert = document.getElementById('alertRegister');
    //Llava a las funciones correspondientes y evalua si las validaciones fueron correctas
    if (validarUserName(username, divAlert) && validarEmail(email, divAlert) && validarPassword(password, passwordConfirm, divAlert)){
        
        //Si fueron correctas guarda en el arreglo el nuevo usuario
        usuariosList.push([uuid.v4(),email,username,CryptoJS.SHA256(password).toString(),new Date(),null])
        //Muestra el alerta correspondiente
        showAlert('primary',`Ok usuario registrado correctamente`, divAlert);
        //Guarda en el localStorage el username y 3 intentos para luego utilizarlos si es necesario cuando se inicia sesion.
        window.localStorage.setItem(username,'3');
    }
    
}