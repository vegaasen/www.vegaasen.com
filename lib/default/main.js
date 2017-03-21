/**
 * Global configuration of the chart.js stuff
 * @type {boolean}
 */
//Chart.defaults.global.tooltips.enabled = false;

const defaultType = 'doughnut';
const options = {
    animation: {
        animateRotate: true
    },
    legend: {
        display: false
    },
    tooltips: {
        enabled: false
    },
    interaction: {
        enabled: false
    },
    cutoutPercentage: 80,
    responsive: true,
    maintainAspectRatio: true
};

(function () {
    jQuery('#menuToggle, .menu-close').on('click', function () {
        var menuToggle = jQuery('#menuToggle');
        menuToggle.toggleClass('active');
        menuToggle.find("i").toggleClass('fa-bars');
        menuToggle.find("i").toggleClass('fa-times');
        jQuery('body').toggleClass('body-push-toleft');
        jQuery('#theMenu').toggleClass('menu-open');
    });
    jQuery(document).ready(function () {
        /**
         * Charts :-)
         */
        generateChart("canvas-skills-java", [85, 15]);
        generateChart("canvas-skills-html5", [55, 45]);
        generateChart("canvas-skills-css3", [55, 45]);
        generateChart("canvas-skills-angular", [60, 40]);
        generateChart("canvas-skills-nginx", [50, 50]);
        generateChart("canvas-skills-apache", [90, 10]);
        generateChart("canvas-skills-dotnet", [30, 70]);
        generateChart("canvas-skills-python3", [15, 85]);
        generateChart("canvas-skills-shell", [60, 40]);
        generateChart("canvas-skills-php", [70, 30]);
        generateChart("canvas-skills-perl", [60, 40]);
        generateChart("canvas-skills-swift", [5, 95]);
        generateChart("canvas-skills-android", [50, 50]);
    });
})(jQuery);

function generateChart(where, data) {
    var candidate = document.getElementById(where);
    if (candidate === null || candidate === undefined) {
        return;
    }
    new Chart(candidate.getContext('2d'), {
        type: defaultType,
        options: options,
        data: {
            interactivityEnabled: false,
            datasets: [{
                backgroundColor: [
                    "#5dceb4",
                    "#f3f3f3"
                ],
                data: data
            }]
        }
    });
}