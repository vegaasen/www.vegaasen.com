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
            <img src="assets/img/personal/me.png" class="img-circle img-small"/>
            <h1 class="no-margin">laosen,</h1>
            <h2>dev|runner|carnut|skier|geek</h2>
        </div>
    </div>
    <div class="wrapper-footer">
        <div class="container">
            <div class="row">
                <h4>twitter here?</h4>
            </div>
        </div>
    </div>
</section>
<section id="about" class="wrapper view-background_white">
    <div class="container">
        <h3 class="text-case_upper">about me</h3>
        <div class="row">
            <div class="view-full_width">
                <p>

                </p>
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
</section>
<section id="programming" class="wrapper view-full_height">
    <div class="wrapper">
        <div class="container splitted">
            <div class="row thumbnails">
                <h2 class="text-align_right text-case_upper">#whatamiworkingwithrightnow</h2>
                <div class="col-lg-5">
                    <div class="thumbnail with-background with-background_iot">
                        <div class="caption">
                            <h4 class="text-case_upper">Internet of Things</h4>
                            <p>
                                I have a lot of various projects at home, and the latest addition to my addiction is the IoT stuff that is happening right now. I find it very
                                cool to
                                connect all kinds of various components both within my own local playground (my home :P) and as well as connecting parts and pieces to other
                                components out there.
                            </p>
                            <p>
                                Right now I'm working on a simple Raspberry PI thing that recongnizes me when I'm home from work or whatever. All written in Java and C++ + some
                                web stuff.
                            </p>
                            <p>
                                There is just one problem with the IoT as I find it - and that is that the time is limited to only 24hrs a day.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail with-background with-background_angularJs">
                        <div class="caption">
                            <h4 class="text-case_upper">AngularJS</h4>
                            <p>
                                In the beginning of May 2016 I've again started working with AngularJS. It must have been just over a year the last time I touched this awesome
                                framework,
                                and I'm glad I'm back as it simplifies so much stuff regarding the front-end pieces. However, an AngularJS-nut is something I'm not :-P.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="thumbnail with-background with-background_raspberryPi">
                        <div class="caption">
                            <h4 class="text-case_upper">Raspberry PI</h4>
                            <p>
                                Last year I bought my first small raspberry pi device. It didn't take long before stuff were installed to the small device. My first temperature and
                                other measurements things were added to it - I guess this is what made me addicted to the IoT-sphere..? :-)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="thumbnail with-background with-background_android">
                        <div class="caption">
                            <h4 class="text-case_upper">Android</h4>
                            <p>
                                Lately I've been fiddling around with some new stuff like Android Wear things and Network Service Discovery (DNS-SD) in regards with an app I were
                                working quite a bit on. The latest stuff is the Android Wear part - because its just so many sensors and whatnot on these devices/APIs. I'm
                                in &hearts;
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail with-background with-background_docker">
                        <div class="caption">
                            <h4 class="text-case_upper">Docker</h4>
                            <p>
                                The use of Docker in real-world scenarios is not on the rise for me, to be honest - however, I've been working quite some time with the
                                containerization of deployments on my home projects. Latest addition is to dockerize all my IoT and other microservice-applications that is hosted
                                on either my server or Raspberry PIes
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail with-background with-background_java">
                        <div class="caption">
                            <h4 class="text-case_upper">Java &amp; microservices</h4>
                            <p>
                                Both at work and at home - all my applications is converted to be non-monolithic to simpler perform deployments and what not. However, as being one
                                developer at work, the amount of extra stuff that must be carried out due to the new and fragmented way of working,
                                it do actually create a bit of overhead. Oh well, in the long run - it is by far better than what were previously defined in terms of testing, T2M
                                and what not :-)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="hobbies" class="wrapper view-full_height view-background_white">
    <div class="wrapper-white">
        <div class="container splitted">
            <div class="row spacing">
                <h2 class="text-align_right text-case_upper">My time-consuming hobbies &amp; interests</h2>
                <div class="col-lg-6">
                    <img src="" class="img-circle hobbies hobbies_biking">
                    <h4>Trail running</h4>
                    <p>
                        I spend quite a few hours per week running, mostly on trails. It does not matter if it is on mountains, in the norwegian forests or wherever - as long as
                        I'm in the great outdoors.
                    </p>
                    <p>
                        The initial &hearts; for running started when I was younger, however it was in my late twenties I started to once again rediscover the delicious joy and fun
                        being able to stride through miles and miles
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="" class="img-circle hobbies hobbies_biking">
                    <h4>Trail &amp; road cycling</h4>
                    <p>
                        I've always &hearts; to be on the bike - either it was on the tarmac or in the deep woods. Recently I've purchased a road bike, because that gives a lot of
                        long distance fun! However, I must admit that the road-bike never gets as thrilling as fast-paced trail-biking does ;-)
                    </p>
                </div>
            </div>
            <div class="row spacing">
                <div class="col-lg-4">
                    <img src="" class="img-circle hobbies hobbies_biking">
                    <h4>Mountaineering</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
                <div class="col-lg-4">
                    <img src="" class="img-circle hobbies hobbies_skiing">
                    <h4>Skiing</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
                <div class="col-lg-4">
                    <img src="" class="img-circle hobbies hobbies_biking">
                    <h4>Ice cream, cakes, &amp; waffles</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
            </div>
            <div class="row spacing">
                <div class="col-lg-12">
                    <img src="" class="img-circle hobbies hobbies_biking">
                    <h4>Cars</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="highlights" class="view-full_height">
    <div class="container splitted">
        <div class="row">
            <h2 class="text-align_left text-case_upper">My <span class="label label-primary">Awesome</span>, <span class="label label-primary">cool</span> &amp; <span
                    class="label label-primary">epic</span> skill toolbelt</h2>
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
                    <h3>flip<strong>flop</strong></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="bold">Write to me</h3>
                <h3><a href="mailto:vegaasen@gmail.com">vegaasen@gmail.com</a></h3>
            </div>
            <div class="col-lg-4">
                <h3 class="bold">Give me a call</h3>
                <h3>+47 926 83 399</h3>
            </div>
            <div class="col-lg-4">
                <h3 class="bold">Socialize?</h3>
                <p>
                    <a href="index.php#"><i class="icon-facebook"></i></a>
                    <a href="index.php#"><i class="icon-twitter"></i></a>
                    <a href="index.php#"><i class="icon-envelope"></i></a>
                </p>
            </div>
        </div>
    </div>
</section>
<div id="c">
    <div class="container">
        <p>"many (っ◕‿◕)っ to cookies and juice" - &copy; vegard aasen 2o16</p>
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
