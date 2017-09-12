<?php include '../database.php'; ?>
<?php
            $latest = select("SELECT * FROM  `iot_thermostat` ORDER BY  `iot_thermostat`.`when` DESC LIMIT 1")[0];
            $today = select("SELECT * FROM `iot_thermostat` WHERE `when` > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY `when` ASC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home >> Temperature</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="vegardaasen vegaasen IOT stuff"/>
    <meta name="author" content="the-bed-wetter@2017"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="theme-color" content="#5dceb4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style type="text/css">
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
            background-color: #f5f5f5;
        }

        .footer-helper {
            padding-bottom: 60px;
        }
    </style>
</head>
<body>
<nav id="main-navbar" class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">IOT@Home</a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link" href="#thermostat">Thermostat</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">about.this</a></li>
    </ul>
</nav>
<div data-spy="scroll" data-target="#main-navbar" data-offset="0">
    <div id="thermostat">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3"><strong><?php echo $latest['temperature'];?></strong>&#8451;, <strong><?php echo $latest['humidity'];?></strong>%, <strong><?php echo $latest['outsideTemperature'];?></strong>&#8451;</h1>
                <p class="lead">temperature/humidity/outside temperature by <?php echo $latest['location'];?> @ <?php echo $latest['when'];?></p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="chart_div"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="about">
        <div class="ce">
            This is a simple yet pointless page that consists of all my IoT stuff at home. Hurray
        </div>
    </div>
</div>
<div class="footer-helper"></div>
<footer class="footer">
    <div class="container">
        <span class="text-muted">vegaasen pointless IOT playground 2o17</span>
    </div>
</footer>
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="//www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Date');
        data.addColumn('number', 'Temperature');
        data.addColumn('number', 'Humidity');
        data.addColumn('number', 'Outside temperature');
        data.addRows([
            <?php
                foreach ($today as $entry) {
                    if(isset($entry)) {
                        $outsideTemperature = 0;
                        if(isset($entry['outsideTemperature'])) {
                            $outsideTemperature = $entry['outsideTemperature'];
                        }
                        echo "['" . $entry['when'] . "', " . $entry['temperature'] . ", " . $entry['humidity'] . ", " . $outsideTemperature . "],";
                    }
                }
            ?>
        ]);
        new google.visualization.AreaChart(document.getElementById('chart_div'))
            .draw(data, {'title':'temperature & humidity','width':'100%', 'height':300});
    }
</script>
</body>
</html>