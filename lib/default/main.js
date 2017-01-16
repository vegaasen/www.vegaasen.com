(function () {
    jQuery('#menuToggle, .menu-close').on('click', function () {
        jQuery('#menuToggle').toggleClass('active');
        jQuery('body').toggleClass('body-push-toleft');
        jQuery('#theMenu').toggleClass('menu-open');
    });
    jQuery(document).ready(function () {
        jQuery('.fancy-container').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            speed: 1200,
            adaptiveHeight: false
        })
    });
})(jQuery);
/**
 * Global configuration of the chart.js stuff
 * @type {boolean}
 */
//Chart.defaults.global.tooltips.enabled = false;
/**
 * Charts :-)
 */
generateChart("canvas-skills-java", [70, 30]);
generateChart("canvas-skills-html5", [70, 30]);
generateChart("canvas-skills-css3", [70, 30]);
generateChart("canvas-skills-angular", [70, 30]);
generateChart("canvas-skills-nginx", [70, 30]);
generateChart("canvas-skills-apache", [70, 30]);
generateChart("canvas-skills-dotnet", [70, 30]);
generateChart("canvas-skills-python", [10, 90]);
generateChart("canvas-skills-ios", [10, 90]);
generateChart("canvas-skills-android", [10, 90]);

function generateChart(where, data) {
    new Chart(document.getElementById(where).getContext('2d'), {
        type: 'doughnut',
        options: {
            animation: {
                animateRotate: true
            },
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            },
            interaction : {
                enabled: false
            },
            cutoutPercentage: 80,
            responsive: true,
            maintainAspectRatio: true
        },
        data: {
            interactivityEnabled: false,
            datasets: [{
                backgroundColor: [
                    "#2ecc71",
                    "#dfdfdf"
                ],
                data: data
            }]
        }
    });
}