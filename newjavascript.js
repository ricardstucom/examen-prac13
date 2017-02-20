//function start(){
//     var xmlHttp = new XMLHttpRequest();
//    var urlDesti = "arrayPalabras.php?inicio=si";
//      xmlHttp.open("GET", urlDesti, true);
//    xmlHttp.setRequestHeader("Content-Type",
//            "application/x-www-form-urlencoded");
//    xmlHttp.onreadystatechange = function () {
//        if (xmlHttp.readyState == 4) {
//            repResposta(xmlHttp);
//        }
//    };
//    xmlHttp.send(null);
//}
//function repResposta(xmlHttp){
//    if (xmlHttp.status == 200) {
//        var resp = xmlHttp.responseText;
//       // console.log(resp.inicio);
//    
//   //var respJSON = JSON.parse(resp);
//      //  console.log(respJSON.inicio);
//       // var respuesta = resp.palabras[0].inicio;
//        //var respuesta;
//     console.log(resp.palabras['inicio']);
////      for(var i=0;i<resp.palabras.length;i++){
////          console.log(resp.plabras[i]['inicio']);
////      }
////       for(var i=0;i<3;i++){
////           console.log(resp.palabras[i].inicio[i]);
////        }
////for(var i in resp.palabras){
////    console.log(resp.palabras[i].inicio);
////    document.getElementById("mensaje").innerHTML = resp.palabras[i].inicio;
////}
//       // alert(resp);
//
//    }
//}
//     

