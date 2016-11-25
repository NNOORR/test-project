<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Lincoln High School</title>
    <!-- Loading third party fonts -->
 <!--   <link href="http://fonts.googleapis.com/css?family=Arvo:400,700|" rel="stylesheet" type="text/css">-->
    <link href="assets/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Loading main css file -->
    <link rel="stylesheet" href="assets/style.css">

    <!--[if lt IE 9]>
    <script src="assets/js/ie-support/html5.js"></script>
    <script src="assets/js/ie-support/respond.js"></script>
    <![endif]-->



</head>


<body>

<div id="site-content">
    <header class="site-header">
        <div class="primary-header">
            <div class="container">
                <a href="index.html" id="branding">
                    <img src="assets/images/logo.png" alt="Lincoln high School">
                    <h1 class="site-title">Lincoln High School</h1>
                </a> <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item current-menu-item"><a href="homeTeacher">Home</a></li>
                        <li class="menu-item"><a href="showCourses">Courses</a></li>
                        <li class="menu-item"><a href="student.html">Students</a></li>
                        <li class="menu-item"><a href="event.html">Events</a></li>
                        <li class="menu-item"><a href="contact.html">Contact</a></li>
                    </ul> <!-- .menu -->
                </div> <!-- .main-navigation -->

                <div class="mobile-navigation"></div>
            </div> <!-- .container -->
        </div> <!-- .primary-header -->
        <?php echo $__env->yieldContent('page-header'); ?>
    </header>
</div>
<?php echo $__env->yieldContent('content'); ?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget">
                    <h3 class="widget-title">Contact us</h3>
                    <address>Lincoln High School <br>745 Jewel Ave Street <br>Fress Meadows, NY 1136</address>

                    <a href="mailto:info@lincolnhighschool.com">info@lincolnhighschool.com</a> <br>
                    <a href="tel:48942652394324">(489) 42652394324</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h3 class="widget-title">Social media</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="social-links circle">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h3 class="widget-title">Featured students</h3>
                    <ul class="student-list">
                        <li><a href="#">
                                <img src="assets/dummy/student-sm-1.jpg" alt="" class="avatar">
                                <span class="fn">Sarah Branson</span>
                                <span class="average">Average: 4,9</span>
                            </a></li>
                        <li><a href="#">
                                <img src="assets/dummy/student-sm-2.jpg" alt="" class="avatar">
                                <span class="fn">Dorothy Smith</span>
                                <span class="average">Average: 4,9</span>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h3 class="widget-title">Newsletter</h3>
                    <p>Aspernatur, rerum. Impedit, deleniti suscipit</p>
                    <form action="#" class="subscribe">
                        <input type="email" placeholder="Email Address...">
                        <input type="submit" class="light" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>

        <div class="copy">Copyright 2014 Lincoln High School. All rights reserved.</div>
    </div>

</footer>

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/app.js"></script>

<!-- Ya 2016.11.03 -->
<script src="assets/js/bootstrap.min.js" ></script>
<script src="assets/js/scripts.js"></script>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
</body>

</html>