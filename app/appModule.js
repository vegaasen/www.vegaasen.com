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
                templateUrl: 'app/whatever/whatever.html'
            }
        );
        $provide.constant("languageResources", {});
    });
})();