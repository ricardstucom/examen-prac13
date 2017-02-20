<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    
        
        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        
        <script src="newjavascript.js" type="text/javascript"></script>
        
        <script src="controller.js" type="text/javascript"></script>
        
        <script src="service.js" type="text/javascript"></script>
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
        <title></title>
    </head>
    <body ng-app="ahorcado" ng-controller="controlador">
        <div class="container">
             <button ng-click="getLong()"> Medida Palabra</button>
             <input type="text" ng-model="letra"/>
                 <button ng-click="comprobar()"> Comprobar</button>
             <div>{{palabra}}</div>
             <div ng-repeat="letra in palabra track by $index">_</div>
             <div ng-repeat="letras in arrayPetu track by $index">{{letras}}</div>
        </div>
       
        <div id="mensaje"></div>
    </body>
</html>
