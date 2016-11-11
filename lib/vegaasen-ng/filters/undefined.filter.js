(function () {
    "use strict";
    const defaultTextResult = '-';
    /*
     * usage:  {{ <variable> | placeholder}}
     */
    angular.module('vegaasen-ng').filter('placeholder', placeholder);
    function placeholder() {
        return function (input) {
            if (input === 0 || input === '0') {
                return defaultTextResult;
            }
            if (!(input == undefined || input == null)) {
                return input;
            } else {
                return defaultTextResult;
            }
        }
    }
});