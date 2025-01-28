<?php 
include('api/cle_api.php');
$obj_tous_post = recup_article();
// var_dump($obj_tous_post);
?>
<!DOCTYPE html>
<html lang="zxx">
    <!-- Mirrored from templates.hibootstrap.com/arrola/default/blog-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:49 GMT -->
    <head>
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

        <title>Arrola - Nutrition & Recipe HTML Template</title>

        <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    </head>
    <body>
        <!-- <div class="preloader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div> -->

     <?php include('includes/header.php') ?>

      

        <div class="inner-banner inner-bg6">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Blog Right Sidebar</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Blog Right Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="blog-widget-area pt-100 pb-70">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="row justify-content-center">
                            <?php foreach($obj_tous_post as $key=>$value) : ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-item">
                                        <a href="blog-details.html">
                                            <img src="<?php echo $url_image . $value ->photo ?>" alt="Blog Images" />
                                        </a>
                                        <div class="content">
                                            <span><i class="flaticon-calendar-1"></i> <?= data_date($value ->date)  ?></span>
                                            <h3><a href="blog.detail.php?mat_art=<?= $value->matricule ?>"> <?= $value -> titre ?></a></h3>
                                            <a href="blog.detail.php?mat_art=<?= $value->matricule ?>" class="read-btn">Lire plus </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <?php /*<div class="col-lg-6 col-md-6">
                                <div class="blog-item">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-img3.jpg" alt="Blog Images" />
                                    </a>
                                    <div class="content">
                                        <span><i class="flaticon-calendar-1"></i> 23 April, 2021</span>
                                        <h3><a href="blog-details.html">Top 5 Tips Why Self Care Is More Important</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-item">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-img4.jpg" alt="Blog Images" />
                                    </a>
                                    <div class="content">
                                        <span><i class="flaticon-calendar-1"></i> 24 April, 2021</span>
                                        <h3><a href="blog-details.html">Top 8 Ways for Living Healthy Life Important</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-item">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-img5.jpg" alt="Blog Images" />
                                    </a>
                                    <div class="content">
                                        <span><i class="flaticon-calendar-1"></i> 25 April, 2021</span>
                                        <h3><a href="blog-details.html">Top 15 Vegan Easy Recipe to Get More Details</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-item">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-img6.jpg" alt="Blog Images" />
                                    </a>
                                    <div class="content">
                                        <span><i class="flaticon-calendar-1"></i> 26 April, 2021</span>
                                        <h3><a href="blog-details.html">Restaurants cafe Popular Recipe from Our Site</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-item">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-img7.jpg" alt="Blog Images" />
                                    </a>
                                    <div class="content">
                                        <span><i class="flaticon-calendar-1"></i> 27 April, 2021</span>
                                        <h3><a href="blog-details.html">Top 8 Ways for Living Healthy Life Important</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-item">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-img8.jpg" alt="Blog Images" />
                                    </a>
                                    <div class="content">
                                        <span><i class="flaticon-calendar-1"></i> 28 April, 2021</span>
                                        <h3><a href="blog-details.html">10 Tips For Making Delicious Food For Everyone</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-item">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-img9.jpg" alt="Blog Images" />
                                    </a>
                                    <div class="content">
                                        <span><i class="flaticon-calendar-1"></i> 29 April, 2021</span>
                                        <h3><a href="blog-details.html">Quick and Easy Healthy Breakfast Ideas For All</a></h3>
                                        <a href="blog-details.html" class="read-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <div class="pagination-area">
                                    <a href="blog-3.html" class="prev page-numbers">
                                        <i class="bx bx-chevron-left"></i>
                                    </a>
                                    <span class="page-numbers current" aria-current="page">1</span>
                                    <a href="blog-3.html" class="page-numbers">2</a>
                                    <a href="blog-3.html" class="page-numbers">3</a>
                                    <a href="blog-3.html" class="next page-numbers">
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                </div>
                            </div> */?>
                        </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="side-bar-area pl-20">
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
        <?php foreach ($obj_tous_post as $key => $value) {
        }  ?>
            <li>
                <a href="categories.html" target="_blank">
                    Personalized Nutrition
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </li>

            <li>
                <a href="categories.html" target="_blank">
                    Health Nutrition
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </li>

            <li>
                <a href="categories.html" target="_blank">
                    Weight Loss Program
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </li>

            <li>
                <a href="categories.html" target="_blank">
                    Sports Nutritionist
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </li>

            <li>
                <a href="categories.html" target="_blank">
                    Child Nutritionist
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </li>

            <li>
                <a href="categories.html" target="_blank">
                    Workout Program
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </li>

        </ul>
    </div>
        <?php include("includes/side-bar.php") ?>
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
    </div>
</div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer-area footer-area-bg">
            <div class="container">
                <div class="footer-top pt-100 pb-70">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="assets/images/footer-logo.png" alt="Images" />
                                    </a>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse.
                                </p>
                                <ul class="social-link">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/" target="_blank">
                                            <i class="bx bxl-pinterest-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="footer-widget ps-5">
                                <h3>Useful Links</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="index.html" target="_blank">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.html" target="_blank">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="portfolio.html" target="_blank">
                                            Portfolio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html" target="_blank">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="terms-condition.html" target="_blank">
                                            Terms & Condition
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget ps-5">
                                <h3>Information</h3>
                                <ul class="footer-contact">
                                    <li>
                                        Phone:
                                        <span>
                                            <a href="tel:+8245678924">+8245678924</a><br />
                                            <a href="tel:+8245668964">+8245668964</a>
                                        </span>
                                    </li>
                                    <li>
                                        Email:
                                        <span>
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#8ae2efe6e5caebf8f8e5e6eba4e9e5e7">
                                                <span class="__cf_email__" data-cfemail="ff979a939390bf9e8d8d90939ed19c9092">[email&#160;protected]</span>
                                            </a>
                                            <br />
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#0960676f6649687b7b666568276a6664">
                                                <span class="__cf_email__" data-cfemail="a0c9cec6cfe0c1d2d2cfccc18ec3cfcd">[email&#160;protected]</span>
                                            </a>
                                        </span>
                                    </li>
                                    <li>
                                        Address:
                                        <span>
                                            5ut, Stamford South,<br />
                                            New Zeland
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget ps-5">
                                <h3>Newsletter</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                <div class="newsletter-area">
                                    <form class="newsletter-form" data-toggle="validator" method="POST">
                                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off" />
                                        <button class="subscribe-btn" type="submit">
                                            Subscribe
                                        </button>
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="copy-right-text text-center">
                        <p>
                            Copyright @
                            <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            Arrola. All Rights Reserved by
                            <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

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

    <!-- Mirrored from templates.hibootstrap.com/arrola/default/blog-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:49 GMT -->
</html>
