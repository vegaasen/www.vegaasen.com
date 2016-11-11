(function () {
    "use strict";

    var module = angular.module("vegaasen-app-example-module", ["ui.router"]);
    module.config(function ($stateProvider) {
        $stateProvider
            .state({
                name: "userProfile",
                url: "/user/profile/:id",
                templateUrl: "app/user/profile/userProfile.html"
            });
    });
})();