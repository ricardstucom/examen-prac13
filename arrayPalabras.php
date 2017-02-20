<?php
session_start();

$a=array("piedra","ordenador","libreta");
$desorden= shuffle($a);
$_SESSION['palabraOculta']=$desorden[1];

$resultado='{';
if(isset($_GET['inicio'])){     //se ha indicado iniciar un nuevo juego
    
    // $numeroAleatorio=rand(0,10);//seleccionamos un numero aleatorio entre 0 y 10
     //   $_SESSION['numeroOculto'] = $numeroAleatorio;
   // $petu=$a[1];
      
       
                 $resultado .= '"inicio":'.$_SESSION['palabraOculta'];
              //  $resultado .= '"inicio":'.$_SESSION['palabraOculta'];
      
}else{
    
}

$resultado.='}';
echo($resultado);



?>
