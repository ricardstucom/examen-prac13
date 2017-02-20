<?php
    session_start();
    $palabras = array("manzana", "naranja", "tomate", "fresa", "uva");
   
    $index = 0;
    $arrayPosiciones = array();
    $respuesta = '{';
    
    if(isset($_GET["letra"])){
        $letraUsu = $_GET["letra"];
        
        $letras = str_split($_SESSION["palabraSelect"]);
        
//        foreach($letras as $letraUsu){
//            if($letraUsu == $letra){
//                array_push($arrayPosiciones, $index);
//            }
//            $index++;
//        }
        $sizeLetras=sizeof($letras);
         $long = sizeof($arrayPosiciones);
        for($i =0;$i<$sizeLetras;$i++){
            if($letras[$i]=== $letraUsu){
                $arrayPosiciones[$i]=$letraUsu;
                $petu=  json_encode($arrayPosiciones);
                // $respuesta.='"posicion":"'.$i.'",';
                 $respuesta=$petu;
            }
        }
        $long = sizeof($arrayPosiciones);
        
//        for($i=0;$i<$long;$i++){
//           if($arrayPosiciones[$i]===$letraUsu){
//              // $respuesta.='"posicion":"'.$i.'"';
//           }
//        }
//        $index = 1;
//        foreach($arrayPosiciones as $posicion){
//            if($index == $long){
//                $respuesta .= '"iguales":"'.$posicion.'"';
//            }else{
//                $respuesta .= '"iguales":"'.$posicion.'", ';
//            }
//                
//            $index++;
//        }
    }else{
        shuffle($palabras);
        $_SESSION["palabraSelect"] = $palabras[0];
        $respuesta .= '"palabra":"'.$_SESSION["palabraSelect"].'"';
        $respuesta .= '}';
        
    }
    
    
    
    echo $respuesta;
    
    
   
?>