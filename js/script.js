window.onload = function(){

    // constantes de sección computadoras apple 
    const siguiente = document.querySelector('#derecha');
    const anterior = document.querySelector('#izquierda');
    
    // constantes de la sección de ver especificaciones
    const btn_ver = document.getElementById('ver-mac');
    const btn_ocultar = document.getElementById('ocultar-mac');
    const text = document.getElementById('datos-mac'); 

    // flechas de computadoras apple
    siguiente.addEventListener('click', verSiguiente);
    anterior.addEventListener('click', verAnterior);

    // botones de especificaciones
    btn_ver.addEventListener('click', mostrarEspecificaciones);
    btn_ocultar.addEventListener('click', ocultarEspecificaciones);

    // se obtienen los ID's de los colores de smartWatch
    document.getElementById('coral').addEventListener('click', function(){cambiarImagen(this);});
    document.getElementById('aqua').addEventListener('click', function(){cambiarImagen(this);});
    document.getElementById('black').addEventListener('click', function(){cambiarImagen(this);});

    // se obtienen los ID's de los botones de audífonos
    document.getElementById('ear').addEventListener('click',function(){cambiarPrecio(this);});
    document.getElementById('head').addEventListener('click',function(){cambiarPrecio(this);});

    // funciones de flechas
    function verSiguiente() {
        const aux = document.getElementById('producto2');
        let ruta = aux.src;

        if (ruta.includes('img/apple_devices.png'))
            aux.src = 'img/imac.jpg';
        else if (ruta.includes('img/imac.jpg'))
            aux.src = 'img/macbook.jpg';
        else
            aux.src = 'img/apple_devices.png';
    }

    function verAnterior(){
        const aux = document.getElementById('producto2');
        let ruta = aux.src;

        if (ruta.includes('img/apple_devices.png'))
            aux.src = 'img/macbook.jpg';
        else if (ruta.includes('img/macbook.jpg'))
            aux.src = 'img/imac.jpg';
        else
            aux.src = 'img/apple_devices.png';
    }

    // función para mostrar y ocultar especificaciones del segundo producto
    function mostrarEspecificaciones(){

        // variables
        var specs=document.createElement('h5');
        var img_specs=document.createElement('img');

        specs.innerHTML = 'modelos:';

        img_specs.src='img/mac_models.png';

        text.innerHTML=
        '> procesador quad core <br> > 8gb de ram <br> > 256gb de almacenamiento <br>';

        specs.appendChild(img_specs);
        text.appendChild(specs);
    }

    function ocultarEspecificaciones(){
        const elemento = document.getElementById('datos-mac');

        while(elemento.firstChild){
            elemento.removeChild(elemento.firstChild);
        }
    }
    

    // cambiar el color del tercer producto
    function cambiarImagen(objeto){
        const aux = document.getElementById('producto3');

        switch(objeto.id){
            case 'coral':
                aux.src='img/smartwatch/11.jpg';
                break;
            case 'aqua':
                aux.src='img/smartwatch/02.jpg'
                break;
            default:
                aux.src='img/smartwatch/00.jpg'
        }
    }

    //cambia el precio y la imagen del primer producto
    function cambiarPrecio(objeto){
        const aux = document.getElementById('producto1');
        const precio = document.getElementById('precio-audio');

        switch(objeto.id){
            case 'ear':
                precio.innerHTML='$299.99';
                aux.src='img/earbuds.jpg';
                break;
            case 'head':
                precio.innerHTML='$399.99';
                aux.src='img/audifonos.jpg';
                break;
            default:
                precio.innerHTML='$299.99';
                aux.src='img/earbuds.jpg';
        }
    }
}