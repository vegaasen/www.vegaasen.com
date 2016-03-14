<?php require 'src/static/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="vegardaasen vegaasen developer java cool notSoCool nub awesome"/>
    <meta name="author" content="the-bed-wetter@20141230#<?php echo $config['application']['version'] ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimal-ui"/>
    <link rel="shortcut icon" href="assets/ico/favicon.gif">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <title>Vegard Aasen - #sysdev #devops #java #js #web #coffee #running #biking #randonee #skiing #fun</title>
</head>
<body data-spy="scroll" data-offset="0" data-target="#theMenu">
<nav class="menu" id="theMenu">
    <div class="menu-wrap">
        <h1 class="logo"><a href="#introduction">vegaasen</a></h1>
        <span class="icon-remove menu-close"></span>
        <a href="#introduction" class="smoothScroll">Home</a>
        <a href="#hobbies" class="smoothScroll">Hobbies</a>
        <a href="#highlights" class="smoothScroll">Services</a>
        <a href="#portfolio" class="smoothScroll">Portfolio</a>
        <a href="#about" class="smoothScroll">About</a>
        <a href="#contact" class="smoothScroll">Contact</a>
        <a href="#"><span class="icon-facebook"></span></a>
        <a href="#"><span class="icon-twitter"></span></a>
        <a href="#"><span class="icon-dribbble"></span></a>
        <a href="#"><span class="icon-envelope"></span></a>
    </div>
    <div id="menuToggle"><span class="icon-reorder"></span></div>
</nav>
<section id="introduction" class="wrapper wrapper-full">
    <div id="heading" class="centerify">
        <div class="container">
            <h1>laosen,</h1>
            <h2>dev|runner|carnut|skier|geek</h2>
        </div>
    </div>
    <div class="wrapper-footer">
        <div class="container">
            <div class="row">
                <h4>asd</h4>
            </div>
        </div>
    </div>
</section>
<section id="hobbies" class="wrapper view-full_height view-background_white">
    <div class="wrapper-white">
        <div class="container">
            <div class="row">
                <h2 class="text-align_right">OUR SERVICES</h2>
                <div class="col-lg-3">
                    <img src="assets/img/s1.png">
                    <h4>London</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
                <div class="col-lg-3">
                    <img src="assets/img/s2.png">
                    <h4>Berlin</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
                <div class="col-lg-3">
                    <img src="assets/img/s3.png">
                    <h4>Paris</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
                <div class="col-lg-3">
                    <img src="assets/img/s4.png">
                    <h4>Tokyo</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="highlights" class="view-full_height">
    <div class="container splitted">
        <div class="row">
            <h2 class="text-align_left text-case_upper"><span class="label label-primary">Awesome</span>, <span class="label label-primary">cool</span> &amp; <span class="label label-primary">epic</span> skill toolbelt</h2>
            <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="assets/img/s1.png">
                    <div class="caption">
                        <h4 class="text-case_upper">Ui Magix</h4>
                        <h5></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="assets/img/s2.png">
                    <div class="caption">
                        <h4 class="text-case_upper">Engine wizard</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="assets/img/s3.png">
                    <div class="caption">
                        <h4 class="text-case_upper">Connecting the dots</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="assets/img/s4.png">
                    <div class="caption">
                        <h4 class="text-case_upper">Analysist</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container splitted view-middle">
        <h3>SOME CHARTS</h3>
        <div class="row">
            <div class="col-lg-12">
                <canvas id="knowledge"></canvas>
                <script>
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
                    new Chart(document.getElementById("knowledge").getContext("2d")).Radar(data);
                </script>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="wrapper">
    <div class="portfoliowrap">
        <div class="container">
            <div class="row">
                <h3>COOL WORKS</h3>
                <br>
                <br>
                <div class="col-lg-4 port-space">
                    <a href="item.php"><img src="assets/img/work1.png"></a>
                </div>
                <div class="col-lg-4 port-space">
                    <a href="item.php"><img src="assets/img/work2.png"></a>
                </div>
                <div class="col-lg-4 port-space">
                    <a href="item.php"><img src="assets/img/work3.png"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-white wrapper-white_padded">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h3>WE WORK HARD TO DELIVER A
                        <strong>HIGH QUALITY SERVICE</strong>
                        . OUR AIM IS YOUR COMPLETE
                        <strong>SATISFACTION</strong>
                        .
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="about">
    <div>
        <div class="container">
            <h3 class="text-case_upper">about me</h3>
            <div class="row">
                <div class="view-full_width">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lectus elit, tincidunt nec turpis sed, accumsan iaculis ipsum. Nulla at augue auctor,
                        tristique
                        erat in, ultricies nunc. Mauris eget metus leo. Ut in mi lacinia, mattis nisl non, ultrices risus. Vestibulum aliquet aliquam ipsum ut ullamcorper.
                        Pellentesque
                        fringilla, massa vel rutrum consequat, nulla velit fermentum dolor, sed scelerisque.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 team">
                    <img class="img-circle" src="assets/img/team01.jpg" height="90" width="90">
                    <h4>Liz Stewart</h4>
                    <h5><i>Product Manager</i></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>
                        <a href="index.php#"><i class="icon-facebook"></i></a>
                        <a href="index.php#"><i class="icon-twitter"></i></a>
                        <a href="index.php#"><i class="icon-envelope"></i></a>

                    </p>
                </div>

                <div class="col-lg-3 team">
                    <img class="img-circle" src="assets/img/team02.jpg" height="90" width="90">
                    <h4>Brad Casey</h4>
                    <h5><i>Front-end Developer</i></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>
                        <a href="index.php#"><i class="icon-facebook"></i></a>
                        <a href="index.php#"><i class="icon-twitter"></i></a>
                        <a href="index.php#"><i class="icon-envelope"></i></a>

                    </p>
                </div>

                <div class="col-lg-3 team">
                    <img class="img-circle" src="assets/img/team03.jpg" height="90" width="90">
                    <h4>Pamela Chow</h4>
                    <h5><i>Web Designer</i></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>
                        <a href="index.php#"><i class="icon-facebook"></i></a>
                        <a href="index.php#"><i class="icon-twitter"></i></a>
                        <a href="index.php#"><i class="icon-envelope"></i></a>

                    </p>
                </div>

                <div class="col-lg-3 team">
                    <img class="img-circle" src="assets/img/team04.jpg" height="90" width="90">
                    <h4>Tim Gates</h4>
                    <h5><i>Back-end Guru</i></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>
                        <a href="index.php#"><i class="icon-facebook"></i></a>
                        <a href="index.php#"><i class="icon-twitter"></i></a>
                        <a href="index.php#"><i class="icon-envelope"></i></a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="footer">
    <div class="container">
        <div class="row">
            <h3><b>CONTACT US</b></h3>
            <br>
            <div class="col-lg-4">
                <h3><b>Send Us A Message:</b></h3>
                <h3>onassis@blacktie.co</h3>
                <br>
            </div>

            <div class="col-lg-4">
                <h3><b>Call Us:</b></h3>
                <h3>+55 3984-4389</h3>
                <br>
            </div>

            <div class="col-lg-4">
                <h3><b>We Are Social</b></h3>
                <p>
                    <a href="index.php#"><i class="icon-facebook"></i></a>
                    <a href="index.php#"><i class="icon-twitter"></i></a>
                    <a href="index.php#"><i class="icon-envelope"></i></a>
                </p>
                <br>
            </div>
        </div>
    </div>
</section>
<div id="c">
    <div class="container">
        <p>"many (っ◕‿◕)っ to cookies and juice" - © vegard aasen 2o15</p>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
