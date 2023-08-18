window.onload = function(){
    const mail = document.getElementById("mail");

    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                leerJson(this);
            }
        }

    xhttp.open("GET", 'data/usuarios.json', true);
    xhttp.send();

    function leerJson(respuestaJson){
        const objJson = JSON.parse(respuestaJson.responseText);
        const tabla = document.getElementById('tabla');
        

        
        for (let i in objJson.usuarios) {
            if(objJson.usuarios[i].correo == mail.innerHTML.trim()) {
                
                for (let j in objJson.usuarios[i].pedidos) {
                    let tr = document.createElement('tr');
                    let td_pedido = document.createElement('td');
                    let td_fecha = document.createElement('td');
                    let td_total = document.createElement('td');
                    let td_estatus = document.createElement('td');
                    let td_boton = document.createElement('td');
                    var boton = document.createElement('button');

                    td_pedido.innerHTML=objJson.usuarios[i].pedidos[j].numero;
                    td_fecha.innerHTML=objJson.usuarios[i].pedidos[j].fecha;
                    td_total.innerHTML=objJson.usuarios[i].pedidos[j].total;
                    td_estatus.innerHTML=objJson.usuarios[i].pedidos[j].estatus;

                    boton.innerHTML='detalle';
                    boton.className='btn btn-sm btn-outline-info';
                    boton.type='button';
                    boton.id=objJson.usuarios[i].pedidos[j].numero;

                    td_boton.appendChild(boton);
                    tr.appendChild(td_pedido);
                    tr.appendChild(td_fecha);
                    tr.appendChild(td_total);
                    tr.appendChild(td_estatus);
                    tr.appendChild(td_boton);
                    tabla.appendChild(tr);
                }
            } 
        }
    }
}