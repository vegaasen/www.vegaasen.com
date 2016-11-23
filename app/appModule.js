(function () {
    "use strict";

    var app = angular.module("vegaasen-app", [
        "ui.router",
        "ui.bootstrap",
        "ngRoute",
        "vegaasen-ng",
        "templates",
        "vegaasen-app-example-module"
    ]);

    app.config(function ($provide, $urlRouterProvider, $stateProvider) {
        $urlRouterProvider.otherwise("/home");
        $stateProvider.state({
                name: "home",
                url: '/home',
                templateUrl: 'app/default/defaultController.html',
                controller: 'DefaultController'
            }
        );
        $provide.constant("languageResources", {});
    });
    app.controller('DefaultController', defaultController);

    function defaultController($scope) {
        $scope.double = function (value) {
            return value * 3;
        };
    }
})();