<?php include 'database.php'; ?>
<?php

    function getSafeQueryString($candidate) {
        return empty($candidate) ? "null" : "'" . $candidate . "'";
    }

    /*
        Simple and plain code for handling humidty and temperature.
        Little to no pride is provided with this code :-).
        @author vegaasen
        @since 05.09.2017
    */
    $humidity = $_GET['humidity'];
    $temperature = $_GET['temperature'];
    $location = $_GET['location'];
    $device = $_GET['device'];
    $author = $_GET['author'];
    $outsideTemperature = $_GET['outsideTemperature'];

    $response = new stdClass();
    $response->status = "unspecified";

    if(empty($temperature) && empty($humidity)) {
        $response->status = "Both required parameters 'humidity', 'temperature' is missing. Skipped :-)";
        http_response_code(400);
    } else {
        if ($temperature !== null) {
            $temperature = floatVal($temperature);
        }
        if ($humidity !== null) {
            $humidity = floatVal($humidity);
        }

        $response->temperature = $temperature;
        $response->humidity = $humidity;

        $thermostatQuery = "INSERT INTO `iot_thermostat` (`location`, `temperature`, `humidity`, `author`, `device`, `outsideTemperature`) VALUES ";
        $thermostatQuery = $thermostatQuery . "(" . getSafeQueryString($location) . "," . getSafeQueryString($temperature) . "," . getSafeQueryString($humidity) . "," . getSafeQueryString($author) . "," . getSafeQueryString($device) . "," . getSafeQueryString($outsideTemperature) . ")";

        if (query($thermostatQuery)) {
            $response->status = "created";
            http_response_code(201);
        } else {
            $response->status = "not created";
            http_response_code(500);
        }
    }
    echo json_encode($response);
?>