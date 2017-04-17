<?php

session_start();

$_SESSION["posicion"] = 0;



$imagenesReto = array("reto" => array("url" => "img/564.jpg", "respuesta" => "d"),
    "reto2" => array("url" => "img/567.jpg", "respuesta" => "7"));






$posicionImg = array("reto", "reto2");

if (!isset($_SESSION["usuarios"])) {
    $_SESSION["usuarios"] = array("ricard" => array("nick" => "ricard", "edad" => "21", "puntuacion" => "5", "intentos" => "0"));
} else {
    $_SESSION["usuarios"];
}



switch ($_SERVER['REQUEST_METHOD']) {

    case "PUT":
       
        $value = explode("/", $_SERVER['REQUEST_URI'][1]);
        $usuario = json_decode(file_get_contents("php://input"), false);

        if ($_SESSION["usuarios"][$usuario->nick]) {
            $_SESSION["usuarios"][$usuario->nick]->nick = $usuario->nick;
            $_SESSION["usuarios"][$usuario->nick]->edad = $usuario->edad;
            $_SESSION["usuarios"][$usuario->nick]->intentos += 1;
        } else {
            $_SESSION["usuarios"][$usuario->nick] = $usuario;
            $_SESSION["usuarios"][$usuario->nick]->intentos += 1;
        }
        $posicion = 0;
        $_SESSION["posicion"] = $posicion;
        $respuesta = $imagenesReto[$posicionImg[$posicion]]["url"];
        echo json_encode(["url" => $respuesta, "usuario" => $_SESSION["usuarios"][$usuario->nick]]);
        break;

    case "GET":

$value = explode("/", $_SERVER['REQUEST_URI']);
        
         if (end($value) == "ranking") {
           
                echo json_encode(["respuesta" => $_SESSION["usuarios"]]);
           
            
        }

if (end($value) == "pregunta") {
            echo json_encode(["pregunta" => "¿Cuantas figuras geometricas hay?"]);
        } else if (end($value) == "pista") {
            echo json_encode(["pista" => "Ten cuidado con las que se solapan"]);
        } else if (end($value) == "d") {
            echo $imagenesReto[$posicionImg[$_SESSION["posicion"]]]["respuesta"];
            if ($imagenesReto[$posicionImg[$_SESSION["posicion"]]]["respuesta"] == "d") {
                $_SESSION["usuarios"][$usuario->nick]->puntuacion += 1;
                echo json_encode(["respuesta" => "Acierto!"]);
            } else {
                echo json_encode(["respuesta" => "Error1!"]);
            }
        } else if (end($value) == "7") {
             echo $imagenesReto[$posicionImg[$_SESSION["posicion"]]]["respuesta"];
            if ($imagenesReto[$posicionImg[$_SESSION["posicion"]]]["respuesta"] == "7") {
                $_SESSION["usuarios"][$usuario->nick]->puntuacion += 1;
                echo json_encode(["respuesta" => "Acierto!"]);
            } else {
                echo json_encode(["respuesta" => "Error2!"]);
            }
        }

        break;
        
          case "DELETE":
        $value = explode("/", $_SERVER['REQUEST_URI']);
        unset($_SESSION["usuarios"][end($value)]);
        if (empty($_SESSION["usuarios"])) {
            echo json_encode(["respuesta" => $_SESSION["usuarios"]]);
        } else {
            echo json_encode($_SESSION["usuarios"]);
        }
        break;

}
//$imagenes = array(
//    "1" => array("url" => "img/567.jpg",
//        "pista" => "El número es mayor que 5",
//           "pregunta" =>"Cuantas figuras hay en la imagen?",
//        "resp1" => "6",
//        "resp2" => "8")
//    , "2" => array("url" => "img/564.jpg",
//        "pista" => "Tiene las llantas negras",
//        "pregunta" =>"Que coche llega a la meta?",
//        "resp1" => "a",
//        "resp2" => "d")
//     ,"3" => array("url" => "img/568.jpg",
//        "pista" => "Contiene un liquido",
//           "pregunta" =>"Cuál es el símbolo que está repetido?",
//        "resp1" => "La taza",
//        "resp2" =>"Vaso"));
////según la diapo anterior, recibiremos una URI del estilo:  resp.php/pokem/Bulbasur
////obtenemos si se ha realizado un GET, POST, PUT o DELETE
//
//if (!isset($_SESSION["imagenes"])) {
//    $_SESSION["imagenes"] = $imagenes;
//} else {
//    $pokemons = $_SESSION["imagenes"];
//}
//
//switch ($_SERVER['REQUEST_METHOD']) {
//    case "GET":
//        //creamos un array de 2 elementos. 1º con la URI hasta pokem/ , 2º con el resto (el id Bulbasur)
//        // extraemos el id (Bulbasur)
//
//$random=rand(1,3);
//
////        if (empty(explode("pokem/", $_SERVER['REQUEST_URI'])[1])) {
////            echo json_encode($pokemons);
////        } else {
////            // get the ID
////            $id = explode("pokem/", $_SERVER['REQUEST_URI'])[1];
////            // devolvemos la info de ese pokemon en formato json
////            echo json_encode($pokemons[$id]);
////        }
//        //retornamos la info del poke correspondiente en formato jSON
//        
//        if(!empty(explode("imagen/", $_SERVER['REQUEST_URI'])[1])){
//            
//            echo json_encode($imagenes);
//        }else{
//            echo json_encode($imagenes[$random]);
//        }
//        
//        break;
//
//    case "PUT": //actualizar un pokemon
//        //obtenemos la id del pokemon que queremos actualizar
////        $id = explode("pokem/", $_SERVER['REQUEST_URI'])[1];
////        // Para capturar los datos entrada JSON que viene en el request HTTP:
////        $jsonPoke = json_decode(file_get_contents("php://input"), false);
////
////        $pokemons[$jsonPoke->nombre] = $jsonPoke;
////        echo json_encode($pokemons);
//        break;
//
//    case "POST":
//
//
////        $jsonPoke = json_decode(file_get_contents("php://input"), false);
////        $pokemons[$jsonPoke->nick] = $jsonPoke;
////        echo json_encode($pokemons);
//        break;
//
//
//    case "DELETE":
////        $id = explode("pokem/", $_SERVER['REQUEST_URI'])[1];
////
////        // echo $id;
////        unset($pokemons[$id]);
////        echo json_encode($pokemons);
//        break;
//}
//$_SESSION["imagenes"] = $imagenes;
