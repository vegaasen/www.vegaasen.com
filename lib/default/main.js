(function () {
    jQuery('#menuToggle, .menu-close').on('click', function () {
        jQuery('#menuToggle').toggleClass('active');
        jQuery('body').toggleClass('body-push-toleft');
        jQuery('#theMenu').toggleClass('menu-open');
    });
    jQuery(document).ready(function () {
        jQuery('.hobbies-container').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            infinite: true,
            speed: 600,
            adaptiveHeight: true
        })
    });
})(jQuery);

var data = {
    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }
    ]
};
var context = document.getElementById("knowledge").getContext("2d");
new Chart(context,
    {
        type: 'radar',
        data: data
    }
);