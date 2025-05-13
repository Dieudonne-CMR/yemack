<?php
    include('api/cle_api.php');
    $url = $_SERVER['REQUEST_URI'];
    $path = explode('/', $url);
    $id = end($path); // Récupérer l'ID de l'URL
    $service_detail = Recuper_service_detail($id);
    $services = recup_services();
    //var_dump($service_detail);
?>
<!DOCTYPE html>
<html lang="zxx">
    <!-- Mirrored from templates.hibootstrap.com/arrola/default/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:46 GMT -->
    <head>
        <base href="../">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

        <link rel="stylesheet" href="assets/css/animate.min.css" />

        <link rel="stylesheet" href="assets/fonts/flaticon.css" />

        <link rel="stylesheet" href="assets/css/boxicons.min.css" />

        <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

        <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />

        <link rel="stylesheet" href="assets/css/odometer.min.css" />

        <link rel="stylesheet" href="assets/css/meanmenu.min.css" />

        <link rel="stylesheet" href="assets/css/style.css" />

        <link rel="stylesheet" href="assets/css/responsive.css" />

        <link rel="stylesheet" href="assets/css/theme-dark.css" />

        <title> <?= @$service_detail[0]->nom ?></title>

        <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    </head>
    <body>
        <div class="preloader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <?php include('includes/header.php') ?>
        <!-- <header class="top-header top-header-bg-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="header-left">
                            <p>Welcome To Arrola Health!</p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="header-right d-flex align-items-center">
                            <div class="header-item">
                                <ul>
                                    <li class="title">Follow us :</li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank">
                                            <i class="bx bxl-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-item">
                                <a href="cart.html" class="cart-top-btn">
                                    <i class="bx bx-shopping-bag"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="header-item">
                                <div class="header-language dropdown language-option">
                                    <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-world"></i>
                                        <span class="lang-name"></span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/images/uk.png" alt="flag" />
                                            English
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/images/china.png" alt="flag" />
                                            简体中文
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/images/uae.png" alt="flag" />
                                            العربيّة
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                    <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo.png" class="logo-one" alt="Logo" />
                                <img src="assets/images/logo-white.png" class="logo-two" alt="Logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktop-nav nav-area">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo.png" class="logo-one" alt="Logo" />
                            <img src="assets/images/logo-white.png" class="logo-two" alt="Logo" />
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Home
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">
                                                Home One
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">
                                                Home Two
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">
                                                Home Three
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">
                                                Team
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">
                                                Testimonials
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="nutritionist.html" class="nav-link">
                                                Nutritionist
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Portfolio
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="portfolio.html" class="nav-link">
                                                        Portfolio
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="portfolio-details.html" class="nav-link">
                                                        Portfolio Details
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="appointment.html" class="nav-link">
                                                Appointment
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Recipe
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="recipe.html" class="nav-link">
                                                        Recipe
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="recipe-details.html" class="nav-link">
                                                        Recipe Details
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">
                                                Pricing Plan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">
                                                FAQ
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                User
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="login.html" class="nav-link">
                                                        Log In
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="register.html" class="nav-link">
                                                        Register
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="forgot-password.html" class="nav-link">
                                                        Forgot Password
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-condition.html" class="nav-link">
                                                Terms & Conditions
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">
                                                404 Page
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">
                                                Coming Soon
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Shop
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="shop.html" class="nav-link">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.html" class="nav-link">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="checkout.html" class="nav-link">Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="wishlist.html" class="nav-link">Wishlist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="shop-details.html" class="nav-link">Shop Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Services
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="service-1.html" class="nav-link">
                                                Services Style One
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-2.html" class="nav-link">
                                                Services Style Two
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.html" class="nav-link active">
                                                Service Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-1.html" class="nav-link">
                                                Blog Grid
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">
                                                Blog Left Sidebar
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-3.html" class="nav-link">
                                                Blog Right Sidebar
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">
                                                Blog Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="author.html" class="nav-link">
                                                Author
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="categories.html" class="nav-link">
                                                Categories
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tags.html" class="nav-link">
                                                Tags
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                            <div class="others-options d-flex align-items-center">
                                <div class="optional-item">
                                    <div class="search-btn">
                                        <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                            <i class="bx bx-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="optional-item">
                                    <a href="appointment.html" class="default-btn two">Book An Appointment</a>
                                </div>
                            </div>
                            <div class="mobile-nav">
                                <div class="mobile-other d-flex align-items-center">
                                    <div class="optional-item">
                                        <div class="search-btn">
                                            <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                                <i class="bx bx-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="optional-item">
                                        <a href="appointment.html" class="default-btn two">Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div> -->

        <div class="inner-banner inner-bg7">
            <div class="container">
                <div class="inner-title text-center">
                    <h3><?= $service_detail[0]->nom?></h3>
                    <ul>
                        <li>
                            <a href="home">Accueil</a>
                        </li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="service-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="side-bar-area pr-20">
                            <div class="search-widget">
                                <form class="search-form">
                                    <input type="search" class="form-control" placeholder="Search..." />
                                    <button type="submit">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="side-bar-categories">
                                <ul>
                                    <?php foreach($services as $value): ?>
                                    <li>
                                        <a href="service-detail/<?= $value->matricule_service ?>" target="_blank">
                                            <?= $value->nom ?>
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                    
                                </ul>
                            </div>
                            <div class="side-bar-widget">
                                <h3 class="title">Contact Info</h3>
                                <ul class="contact-sidebar-list">
                                    <li>
                                        <div class="content">
                                            <i class="bx bx-phone-call"></i>
                                            <h3>Phone Number</h3>
                                            <a href="tel:+8245678924">+8245678924</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <i class="bx bxs-map"></i>
                                            <h3>Address</h3>
                                            <span>5ut, Stamford South, Newzeland</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <i class="bx bx-message"></i>
                                            <h3>Contact Info</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <?php /*
                            <div class="side-bar-widget">
                                <h3 class="title-tag">Popular Tags</h3>
                                <ul class="side-bar-widget-tag">
                                    <li><a href="tags.html" target="_blank">Health</a></li>
                                    <li><a href="tags.html" target="_blank">Food</a></li>
                                    <li><a href="tags.html" target="_blank">Happy</a></li>
                                    <li><a href="tags.html" target="_blank">Nutrition</a></li>
                                    <li><a href="tags.html" target="_blank">Doctor</a></li>
                                    <li><a href="tags.html" target="_blank">Work</a></li>
                                    <li><a href="tags.html" target="_blank">Organic</a></li>
                                    <li><a href="tags.html" target="_blank">Healthy</a></li>
                                </ul>
                            </div>*/?>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="service-details-content">
                            <div class="service-preview-slider owl-carousel owl-theme">
                                <div class="service-preview-item">
                                    <img src="<?= $img_service .$service_detail[0]->image ?>" alt="Blog Images" />
                                </div>
                                <?php /*
                                <div class="service-preview-item">
                                    <img src="assets/images/services/service-details-img2.jpg" alt="Blog Images" />
                                </div>
                                
                                <div class="service-preview-item">
                                    <img src="assets/images/services/service-details-img3.jpg" alt="Blog Images" />
                                </div>*/?>
                            </div>
                            <h2><?= $service_detail[0]->nom; ?></h2>
                            <p><?= strip_tags($service_detail[0]->description); ?></p>
                            <?php /*
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                lacus vel Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service-article-img">
                                        <img src="assets/images/services/service-details-img4.jpg" alt="Services Images" />
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="services-content-list">
                                        <h4>Planning and Prep</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                        </p>
                                        <ul>
                                            <li><i class="bx bx-right-arrow-alt"></i> Innovative Working Activities</li>
                                            <li><i class="bx bx-right-arrow-alt"></i> 100% Guarantee Issued for Client</li>
                                            <li><i class="bx bx-right-arrow-alt"></i> Dedicated Team Member</li>
                                            <li><i class="bx bx-right-arrow-alt"></i> Safe & Secure Environment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                lacus vel Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book consectetur adipiscing elit consectetur.
                            </p>
                            <div class="service-article-img-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="service-article-img">
                                            <img src="assets/images/services/services-img1.jpg" alt="Services Images" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="service-article-img">
                                            <img src="assets/images/services/services-img4.jpg" alt="Services Images" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                lacus vel Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>*/?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('includes/footer.php')?>

        <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="bx bx-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-search-form">
                            <input type="search" class="search-field" placeholder="Search..." />
                            <button type="submit"><i class="bx bx-search-alt"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery.min.js"></script>

        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/magnific-popup.min.js"></script>

        <script src="assets/js/odometer.min.js"></script>

        <script src="assets/js/appear.min.js"></script>

        <script src="assets/js/meanmenu.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>

        <script src="assets/js/wow.min.js"></script>

        <script src="assets/js/jquery-ui.min.js"></script>

        <script src="assets/js/ajaxchimp.min.js"></script>

        <script src="assets/js/form-validator.min.js"></script>

        <script src="assets/js/contact-form-script.js"></script>

        <script src="assets/js/custom.js"></script>
    </body>

    <!-- Mirrored from templates.hibootstrap.com/arrola/default/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:48 GMT -->
</html>
