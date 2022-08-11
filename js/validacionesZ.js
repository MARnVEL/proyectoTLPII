//Declaro un array vacio usuariosList[];
let usuariosList = [];

//Inicializo el arreglo con dos usuarios
//"id","email","nombre de ususario","contraseña encriptada","fecha de registro","ultimo inicio de sesion"
usuariosList = [[uuid.v4(),"agustin@gmail.com","AgustinS",CryptoJS.SHA256('Agus12345').toString(),new Date("2021-02-01"),"30-02-2022"],
                [uuid.v4(),"juan@gmail.com","JuanchoM",CryptoJS.SHA256('Juan12345').toString(),new Date("2021-02-10"),"05-03-2022"]];
//Guardo 3 intentos por usuario en el localStorage
window.localStorage.setItem('AgustinS','3');
window.localStorage.setItem('JuanchoM','3');

//La funcion validarPasswor() toma como parametros (password, passwordConfirm, divAlert)
function validarPassword(password, passwordConfirm, divAlert) {
    //Expresion regular que valida un password
    //La contraseña sea mayor a 6 caracteres y debe contener almenos una mayuscula,una minuscula y un numero
    let regExp = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if (!regExp.test(password)) {
        showAlert('warning',`La contraseña debe ser mayor a 6 y debe contener almenos una letra mayuscula, una minuscula y un numero`, divAlert)
        return false
    }
    //Verifica que ambas contraseñas coincidan
    if (password !== passwordConfirm) {
        showAlert('warning',`Las contraseñas no coinciden`, divAlert)
        return false
    }
    return true
}

//La siguiente funcion toma como parametro el username
//Recorre el arreglo utilizando usuariosList.find()
//Devuelve el primer elemento del array que cumpla con la igualdad o undefined si ninguno lo cumple.
function existeUserName(username){
    return usuariosList.find(usuario => usuario[2] == username.trim());   //.trim() elimina los espacios
}

//La siguiente funcion se llama a la funcion existeUsername()
//Si encuentra el elemento emite una alerta que el usuario ya existe
function validarUserName(username, divAlert) {
    if (existeUserName(username)){
        showAlert('warning',`El usuario ${username} ya existe`, divAlert)
        //alert('El usuario ya existe')
        return false
    }
    //La siguiente expresion regular evalua que el username contenga letras mayusculas, minusculas y ser mayor a 6 caracteres. 
    let regExp1 = /^[A-Za-z]+$/;
    if (!regExp1.test(username)) {
        showAlert('warning',`El usuario debe tener letras mayusculas y minusculas y mayor a 6 caracteres`, divAlert);
        return false
    }

    return true
}

//La siguiente funcion evalua que el email ingresado sea valido.
function validarEmail(email, divAlert){
    let regExp2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    if (!regExp2.test(email)){
        showAlert('warning',`Debe ingresar un email valido`, divAlert);
        return false
    }
    //Recorre el array y devuelve el primer elemento del array que cumpla con la igualdad.
    if (usuariosList.find(usuario => usuario[1] == email.trim())){
        showAlert('warning',`El email ya esta registrado`, divAlert);
        return false
    }
    return true                        
}

//Recorre el array y devuelve el primer elemento del array que cumpla con la igualdad o o undefined si ninguno lo cumple.
function validarLogin(username,password){
    return usuariosList.find(element => element[2]==username && element[3]==CryptoJS.SHA256(password).toString())
    
}

//La siguiente funcion toma los valores de los input y...
function loginUsuario(){
    let username = document.getElementById('usuario').value;
    let password = document.getElementById('contraseña').value;
    let divAlert = document.getElementById('alertRegister2');
    if (usuariosList.find(user => user[2]== username.trim())){

        //guarda en una variable el dato que se encuengtra en el localStorage
        let intentos = window.localStorage.getItem(username);

        //Llama a la funcion validarLogin y si el usuario se encuentra registrado emite el mensaje correspondiente
        if (validarLogin(username,password)){
            showAlert('success',`Inicio de sesion correcto`, divAlert);
            
            //Recorrre el arreglo y cuando encuentra al usuario agrega en la posision correpondiente
            //la fecha de ultimo inicio de sesion.
            let usuarioEncontrado = usuariosList.find(element => element[2] == username);
            usuarioEncontrado[5] = new Date();
        } 
        else { //Si la contraseña no es valida emite el mensaje correspondiente
            showAlert('warning',`Usuario o contraseña no validos`, divAlert);
            //Decrementa la variable intentos y guarda en el localStorage el nuevo valor.
            intentos--;
            window.localStorage.setItem(username,intentos);
        }
        //Evalua si el usuario superaro los tre intentos y emite el mensaje correspondiente.
        if (window.localStorage.getItem(username) <= 0){
            showAlert('warning',`Superaste los 3 intentos, usuario bloqueado`, divAlert);
        }   
    }
    /*
    else {
        showAlert('warning',`Usuario no valido`, divAlert);
    }
    */
}


//Esta funcion se utiliza para mostrar los mensajes correspondientes en cada caso
function showAlert(tipo, mensaje, divElement){
    divElement.innerHTML = mensaje
    divElement.className = "alert alert-"+tipo;
    divElement.hidden = false
    //Oculta el alert luego de 2 segundos.
    setTimeout(function(){
        divElement.hidden = true 
     },2000)
}

//La siguiente funcion guarda en variables los valores de los input del formulario de registro
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