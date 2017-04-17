var app = angular.module('myApp', ['ngResource']);
app.controller('MyCtrl', ['$scope', 'MyServ',
    function ($scope, MyServ) {


  $scope.registrar = function () {

        var user = {nick: $scope.nick, edad: $scope.edad, puntuacion: 0};
        MyServ.consultaAjax().update({nick: $scope.nick}, user).$promise.then(
            function (response) {
                console.log(response.url);

                $scope.imagen = response.url;

                //reiniciar();

                $("#login").fadeOut();
                $("#juego").fadeIn();
            },
            function (response) {
                console.log(response);
            }
        );
    };
    
      $scope.start = function () {

        $scope.pregunta = "";
        $scope.pista = "";

        $scope.img = $scope.imagen;
        $("#imagen").fadeIn();
        
    };
    
     $scope.enter = function () {
        MyServ.consultaAjax().get({nick: "pregunta"}).$promise.then(
            function (response) {
                console.log(response.pregunta);
                $scope.pregunta = response.pregunta;
            },
            function (response) {
                console.log(response);
            }
        );
    };
    
    $scope.exit = function () {
        MyServ.consultaAjax().get({nick: "pista"}).$promise.then(
            function (response) {
                console.log(response.pista);
                $scope.pista = response.pista;
                $("#imagen").fadeOut();
                $("#respuestas").fadeIn();
            },
            function (response) {
                console.log(response);
            }
        );
    };
    
     $scope.respuesta = function (respuesta) {
        MyServ.consultaAjax().get({nick: respuesta}).$promise.then(
            function (response) {
                console.log(response.respuesta);
                $scope.rep=response;
            },
            function (response) {
                console.log(response.respuesta);
            }
        );
    };
    
     $scope.ranking = function () {
        MyServ.consultaAjax().get({nick: "ranking"}).$promise.then(
            function (response) {
                console.log(response);
                $("#ranking").fadeIn();
                $scope.users = response.respuesta;
            },
            function (response) {
                console.log(response);
            }
        );
    };
  $scope.eliminar = function (nick) {
        MyServ.consultaAjax().delete({nick: nick}).$promise.then(
            function (response) {
                console.log(response);
                $scope.users = response.respuesta;
            },
            function (response) {
                console.log(response);
            }
        );
    };
    
      $scope.rellenar = function (nick, age) {
        $scope.nick = nick;
        $scope.age = age;
    };
}]);
   function reiniciar() {
    $("#game").fadeOut();
    $("#imagen").fadeOut();
    $("#respuestas").fadeOut();
    $("#ranking").fadeOut();
}
