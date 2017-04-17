
app.service('MyServ', ['$resource', function ($resource) {
        this.consultaAjax = function () {
               return $resource("resp.php?/:nick", null, {
                'update': {method: 'PUT'}
            });
        };
        this.prueba = "prueba";
    }]);
