
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Gaming Event Management System</title>
    <link rel="icon" type="{{asset("frontend")}}/image/x-icon" href="{{asset("frontend")}}/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset("frontend")}}/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">


<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

    @if(Session()->has('success'))
        <div style="color:green" class="alert alert-success"> {{ Session()->get('success') }}</div>
    @endif



    <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('login.form')}}">LOGIN</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">PRODUCT</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">ADMIN</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <br>
        <br>
        <div class="masthead-subheading">Welcome To Our Gaming Event</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">See More</a>
    </div>
</header>



<!-- PRODUCT-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">PRODUCT DEMO</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                        <img class="img-fluid" src="{{asset("frontend")}}/assets/img/portfolio/tshirt.png" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">JERSEY</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <img class="img-fluid" src="{{asset("frontend")}}/assets/img/portfolio/ring.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">GaminG RinG</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                        <img class="img-fluid" src="{{asset("frontend")}}/assets/img/portfolio/cap.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">CAP</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h3 class="subheading">Online Gaming Event</h3>
                        <h4>2021</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">
                            This is totally Gaming event website.
                            Everyone can join event. And before joining, everyone need to registration & login first.
                            Then they can join any event by fillup some statement.
                            Also there has some gaming product that can order anyone for buying.
                            So, this website is very easy to use and helpful for any users.
                            Thank You. Stay Safe.
                        </p></div>
                </div>
            </li>
        </ul>
    </div>
</section>

<br>
<br>


<!-- ADMIN-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">ADMIN</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="pic/sanjid.JPG" alt="" />
                    <h4>Mahmud Sanjid</h4>
                    <p class="text-muted">Designer</p>
                    <a class="btn btn-info btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">CONTACT US</h2>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
            </div>
        </form>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">@Online Gaming Event Management Website 2021</div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="{{asset("frontend")}}/assets/mail/jqBootstrapValidation.js"></script>
<script src="{{asset("frontend")}}/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="{{asset("frontend")}}/js/scripts.js"></script>
</body>
</html>