function cargar(){
    var xhttp= new XMLHttpRequest();
xhttp.onreadystatechange = function(){
    if(thid.readystate ==4 & this.status ==200){
        document.getElementById("misdatos").innerHTML = this.responseText;
    }
};
xhttp.open("GET", "misdatos.txt", false); //FALSE ES SINCRONA TRUE=ASYN
xhttp.send();

    }
    let.btnCarga = document.getElementById("cargar");
    btnCarga.addEventListener("click", cargar);
