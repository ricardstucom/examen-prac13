var app = angular.module('myApp', ['ngResource']);
app.controller('MyCtrl', ['$scope', 'MyServ',
    function ($scope, MyServ) {


////----------------------------------------------------------------------------------------------------
//        PRIMER PUNTO
//        MyServ.consultaAjax().get({}).$promise.then(
//                    $scope.inputPoke;
//                    $scope.allPokemons = response;
//                },
//                function (response) {
//                    $scope.messError = "Error: " + response.status + " " + response.statusText;
//                });
////----------------------------------------------------------------------------------------------------
//
//        $scope.addModPokemon = function (nick) {
//
//            MyServ.consultaAjax().save({}, $scope.inputPoke).$promise.then(
//                    function (response) {
//                        $scope.allPokemons = response;
//                    },
//                    
//                    function (response) {
//                        $scope.messError = "Error: " + response.status + " " + response.statusText;
//                    }
//            );
//        };
//
//        $scope.eliminar = function (nick) {
//            MyServ.consultaAjax().delete({id: nick}).$promise.then(
//                    function (response) {
//                        $scope.allPokemons = response;
//                        console.log(response);
//                    },
//                    function (response) {
//                        $scope.messError = "Error: " + response.status + " " + response.statusText;
//
//                    }
//            );
//
//        };
//
//        $scope.rellenar = function (nick) {
//            console.log(nick);
//            MyServ.consultaAjax().get({id: nick}).$promise.then(
//                    function (response) {
//                        $scope.inputPoke = response;
//                    },
//                    function (response) {
//                        $scope.messError = "Error: " + response.status + " " + response.statusText;
//
//                    }
//            );
//
//        };
//
//
//$scope.pedirImagen = function (){
//  MyServ.consultaAjax().get({}).$promise.then(
//          function(response){
//              
//         //     $scope.imagen=response.url;
//              
//          },
//            function(response){
//                
//                 $scope.messError = "Error: " + response.status + " " + response.statusText;
//                
//                
//            });  
//    
//    
//    
//};
//    }]);
