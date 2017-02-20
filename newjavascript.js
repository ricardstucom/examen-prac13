function start(){
     var xmlHttp = new XMLHttpRequest();
    var urlDesti = "arrayPalabras.php?inicio=si";
      xmlHttp.open("GET", urlDesti, true);
    xmlHttp.setRequestHeader("Content-Type",
            "application/x-www-form-urlencoded");
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4) {
            repResposta(xmlHttp);
        }
    };
    xmlHttp.send(null);
}
function repResposta(xmlHttp){
    if (xmlHttp.status == 200) {
        var resp = xmlHttp.responseText;
       // console.log(resp.inicio);
     var respJSON = JSON.parse(resp);
      //  console.log(respJSON.inicio);
        var respuesta = respJSON.inicio;
       // alert(resp);
document.getElementById("mensaje").innerHTML = respuesta;
    }
}
        