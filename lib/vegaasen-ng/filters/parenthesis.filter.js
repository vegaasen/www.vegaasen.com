(function () {
    "use strict";
    /*
     * usage:  {{ <variable> | parenthesis}}
     */
    angular.module('vegaasen-ng').filter('parenthesis', parenthesis);
    function parenthesis() {
        return function (input) {
            return input === undefined || input === null || input === '' || input === 'null' || input == null || input == "null" ? '' : '(' + input + ')';
        };
    }
});