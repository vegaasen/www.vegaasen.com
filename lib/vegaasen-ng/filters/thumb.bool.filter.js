(function () {
    "use strict";
    /*
     * usage:  {{ <variable> | thumbsup}}
     */
    angular.module('vegaasen-ng').filter('thumbsup', thumbsup);
    function thumbsup() {
        return function (input) {
            if (input) {
                return "fa fa-thumbs-o-up";
            } else if (!input) {
                return "fa fa-thumbs-o-down";
            } else {
                return "fa fa-question-circle-o";
            }
        };
    }
});