<?php
    require_once "config.php";
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1">

    <!-- title -->
    <title>Glodemi</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo/with%20%20love.JPG">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/fons-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.css.css">

    <!-- Magnific-popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <style type="text/css">
        #pricing .container {
            padding-top:400px;
        }
        #price h2 {
            color: #fff;
            font-size: 50px;
        }
        #price h2 span {
            font-size: 18px;
        }
        #footer .container {
            padding-top:0px;
        }
        #pricing .col-md-6 {
            margin:0px;
        }
        .card {
            width: 100%;
            background-color: #28afc9;
            padding-bottom:20px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .card:hover {
            background-color: #d3d3d3;
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            -o-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
            
        }

        .list-group-item {
            background-color: #28afc9;
            color: #fff;
            border: 0px;
            padding: 5px;
        }
        .card:hover .list-group-item {
            background-color: #d3d3d3;
        }

        .price {
            font-size: 60px;
        }

        .currency {
            position: relative;
            font-size: 25px;
            top: -31px;
        }
        .stripe-button {
            padding-bottom: 50px;
        }
    </style>

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-fixed-top format">
            <div class="container">
                <div class="site-nav-wrapper">
                    <div class="navbar-header">

                        <!-- Mobile menu -->
                        <span id="mobile-nav-open-btn">&#9776;</span>

                        <!-- logo -->
                        <a href="" class="navbar-brand smooth-scroll" href="#Home">
                            <img src="img/logo/logo-dark.png" alt="withlovestudios">
                        </a>
                    </div>

                    <!-- Main Menu -->
                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a href="index.html">About</a></li>
                                
                                <li><a href="tutor.html">Teach with Us</a></li>
                                <li><a href="testimonial.html">Testimonials</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="newpricing.php">Enroll</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a id="line" class="border-left">973-932-0057</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div id="mobile-nav">

                        <span id="mobile-nav-close-btn">&times;</span>
                        <div id="mobile-nav-content">
                            <ul class="nav">

                                <li><a href="index.html">About</a></li>
                                
                                <li><a href="tutor.html">Teach with Us</a></li>
                                <li><a href="testimonial.html">Testimonials</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="newpricing.php">Enroll</a></li>
                                <li><a href="contact.html">Contact</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <br><br><br><br>
    <section id="enroll">
    <div class="row text-center">
            <h2>Student Enrollment Form</h2>
        </div>
        <div class="container">

            <form name="enroll-form" action="enroll.php" method="post">
                
                <div class="row">
                    <div class="col-25">
                        <label for="sname">Student's Name *</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="sname" name="sname" placeholder="Student's Full Name" required>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email *</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="email" name="email" placeholder="Email for correspondence" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="phone">Phone Number</label>
                    </div>
                    <div class="col-75">
                        <input type="tel" id="phone" name="phone" placeholder="Your Mobile Number">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="country">Country</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                            <option value="usa">UK</option>
                            <option value="usa">India</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="state">State</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="state" name="state" placeholder="Your State">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="zip">Zip Code *</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="zip" name="zip" placeholder="Your Zip Code" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Coaching you would like to avail</label>
                    </div>
                    <div class="col-75">
                        <input type="checkbox" id="subject" name="subject[]" value="SAT">
                        <label for="SAT">SAT</label><br>
                        <input type="checkbox" id="subject" name="subject[]" value="ACT">
                        <label for="ACT">ACT</label><br>
                        <input type="checkbox" id="subject" name="subject[]" value="GRE">
                        <label for="GRE">GRE</label><br>
                        <input type="checkbox" id="subject" name="subject[]" value="K-12" >
                        <label for="K-12">K-12</label><br>
                        <input type="checkbox" id="subject" name="subject[]" value="GMAT">
                        <label for="GMAT">GMAT</label><br>
                        <input type="checkbox" id="subject" name="subject[]" value="admission">
                        <label for="admission">College Admission Process</label><br>
                        <input type="checkbox" id="subject" name="subject[]" value="profile">
                        <label for="profile">Profile Building and Networking</label><br>
                        <input type="checkbox" id="other" name="subject[]" value="other">
                        <label for="other">Other</label><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="time">Most preferable day/time of the week you would like to attend Glodemi Coaching(Specify day,time)</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="time" name="time" placeholder="Specify day,time">
                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="message">Inquiry</label>
                    </div>
                    <div class="col-75">
                        <textarea id="message" name="message" placeholder="Write any questions or additional information that you may have" style="height:200px"></textarea>
                    </div>
                </div>
                <div id="form-btn" class="btn btn-general btn-crimson">
                    <input type="submit" name="submit" value="submit">
                </div>

            </form>
        </div>
    </section>
    
    <div id="pricing" class="container">
        <div class="row text-center">
            <h3>For US students</h3>
        </div>
    <?php
        $colNum = 1;
        foreach ($products as $productID => $attributes) {
            if ($colNum == 1)
                echo '<div class="row">';

            echo '
                <div id="price" class="col-md-6">
                    <div class="card text-center">
                        <h2><del>$2499</del></h2>
                        <div class="card-header text-center">
                            <h2 class="price"><span class="currency">$</span>'.($attributes['price']/100).' <span> *if registered 1 month prior to batch start</span></h2>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h2>'.$attributes['title'].'</h2>
                                <h2>'.$attributes['batch'].'</h2>
                            </div>
                            <ul class="list-group">
                            ';

                            foreach($attributes['features'] as $feature)
                                echo '<li class="list-group-item">'.$feature.'</li>';

                        echo '
                            </ul>
                            <br>
                            <form action="stripeIPN.php?id='.$productID.'" method="POST">
                              <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="'.$stripeDetails['publishableKey'].'"
                                data-amount="'.$attributes['price'].'"
                                data-name="'.$attributes['title'].'"
                                data-description="Coaching"
                                data-image="img/logo/glodemisymbol.png"
                                data-locale="auto">
                              </script>
                            </form>
                        </div>
                    </div>
                </div>
            ';

        if ($colNum == 2) {
                echo '</div>';
                $colNum = 1;
            } else
                $colNum = $colNum + 1 ;
        }
    ?>
    </div>
    <div class="row text-center">
        <h3>For International students(Currently only for India)</h3>
    </div>
    
    <div class="container">
    <?php
        $colNum = 1;
        foreach ($iproducts as $productID => $attributes) {
            if ($colNum == 1)
                echo '<div class="row">';

            echo '
                <div id="price" class="col-md-6">
                    <div class="card text-center">
                        <h2><del>$2499</del></h2>
                        <div class="card-header text-center">
                            <h2 class="price"><span class="currency">$</span>'.($attributes['price']/100).' <span> *if registered 1 month prior to batch start</span></h2>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h2>'.$attributes['title'].'</h2>
                                <h2>'.$attributes['batch'].'</h2>
                            </div>
                            <ul class="list-group">
                            ';

                            foreach($attributes['features'] as $feature)
                                echo '<li class="list-group-item">'.$feature.'</li>';

                        echo '
                            </ul>
                            <br>
                            <form action="stripeIPN2.php?id='.$productID.'" method="POST">
                              <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="'.$stripeDetails['publishableKey'].'"
                                data-amount="'.$attributes['price'].'"
                                data-name="'.$attributes['title'].'"
                                data-description="Coaching"
                                data-image="img/logo/glodemisymbol.png"
                                data-locale="auto">
                              </script>
                            </form>
                        </div>
                    </div>
                </div>
            ';

        if ($colNum == 2) {
                echo '</div>';
                $colNum = 1;
            } else
                $colNum++;
        }
    ?>

    </div>

</body>




<!-- jQuery -->
<script src="js/jquery.js.js"></script>

<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.js"></script>

<!-- Owl Carousel JS -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- REsponsive Tabs JS -->
<script src="js/responsive-tabs/jquery.responsiveTabs.min.js.js"></script>

<!-- Isotope -->
<script src="js/isotope/isotope.pkgd.min.js"></script>

<!-- Isotope -->
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk1JvVqw9ztdBu7-c_akampWiQ3em0AOU&callback=initMap">
    async defer

</script>

<!-- Easing -->
<script src="js/easing/jquery.easing.1.3.js"></script>

<!-- Custom javascript -->
<script src="js/script.js"></script>






</html>
