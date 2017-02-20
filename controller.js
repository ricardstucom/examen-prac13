var app = angular.module('ahorcado',[]);
app.controller('controlador',['$scope',
   function($scope){
       
       
       $scope.getLong = function(){
           
           var xmlHttp = new XMLHttpRequest();
           xmlHttp.open("GET", "arrayPalabras.php", true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.onreadystatechange = function(){
                if(xmlHttp.readyState === 4){
                    $scope.respuestaPalabras(xmlHttp);
                }
            }
            xmlHttp.send(null);
       }
       
       $scope.respuestaPalabras = function(xmlHttp){
           
           if(xmlHttp.status === 200){
               var respuesta = xmlHttp.responseText;
               var respJSON = JSON.parse(respuesta);
               $scope.palabra = respJSON.palabra;
           }
       }
       
       $scope.comprobar = function(){
           var xmlHttp = new XMLHttpRequest();
           var ruta = "arrayPalabras.php?letra="+$scope.letra;
            xmlHttp.open("GET", ruta, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.onreadystatechange = function(){
                if(xmlHttp.readyState === 4){
                    $scope.letraEncontrada(xmlHttp);
                }
            }
            xmlHttp.send(null);
       }
       $scope.letraEncontrada = function(xmlHttp){
           if(xmlHttp.status === 200){
               var respuesta = xmlHttp.responseText;
               var respJSON = JSON.parse(respuesta);
               var i=0;
                 var arrayMostrar=[];
              // var longitud=respJSON.length();
               for(i in respJSON){
                   console.log("posicion:"+i+","+respJSON[i]);
                   arrayMostrar[i]=respJSON[i];
                  
                   i++;
         
                   
               }
               for(var i =0;i<arrayMostrar.length;i++){
//                   if(arrayMostrar[i]=='\0'){
//                       arrayMostrar[i]="-";
//                   }
                   if(!isset(arrayMostrar[i])){
                      
                   }else{
                        arrayMostrar[i]="-";
                   }
               }
               $scope.arrayPetu=arrayMostrar;
               
//               for(var i=0;i<longitud;i++){
//                   console.log(respJSON[i]);
//               }
              // console.log(respJSON.posicion);
           }
       }
   } 





]);