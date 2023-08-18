window.onload=function(){

    // se declaran las constantes del documento
    const mail = document.getElementById('floatingInput');
    const pass = document.getElementById('floatingPassword');
    const error = document.getElementById('error');
    const form = document.getElementById('formulario');
    var btn_iniciar = document.getElementById('iniciar');
    

    // se crean los eventListeners
    btn_iniciar.addEventListener('click', procesarFormulario);
    mail.addEventListener('focus', limpiarMensajeEmail);
    pass.addEventListener('focus',limpiarMensajePwd);

    function procesarFormulario(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                leerJson(this);
            }
        }
        xhttp.open('GET', '/data/usuarios.json',true);
        xhttp.send();
    };

    

    function leerJson(respuestaJson){
        var objJson = JSON.parse(respuestaJson.responseText);
        var bandera = false;

        for(var i in objJson.usuarios){
            if (objJson.usuarios[i].correo = mail.value && objJson.usuarios[i].pwd == pass.value){
                bandera = true;
            }
        }
        if (bandera==false){
            error.style.color = 'red';
            error.innerHTML = 'Correo o contraseña incorrectos, intente de nuevo';
            form.onsubmit();
        }
        else{
            form.submit();
        }

    }

    function limpiarMensajeEmail(){
        error.innerHTML = '';
        mail.value = '';
    }

    function limpiarMensajePwd() {
        error.innerHTML = '';
        pass.value = '';
    }
};

    