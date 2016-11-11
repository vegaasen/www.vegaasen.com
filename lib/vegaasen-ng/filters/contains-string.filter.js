(function () {
    "use strict";
    /**
     * usage:  {{ <variable> | containsString}}
     */
    angular.module("vegaasen-ng").filter("containsString", function () {
        return function (collection, s) {
            return _(collection).some(function (item) { return item === s; });
        };
    });
})();