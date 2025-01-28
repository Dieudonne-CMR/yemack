<?php
include('api/cle_api.php');
if (isset($_GET['mat_art']) AND !empty($_GET['mat_art'])) {
    $mat_post=$_GET['mat_art'];
    $detail_post = recup_detail_post($mat_post);
    if(!empty($detail_post)):
        $titre= $detail_post->titre; 
        $image= $detail_post->photo;
        $content= $detail_post->content;
        $date= $detail_post->date;
        $id_categorie = $detail_post->id_categorie;
        $nom_de_categorie=info_cat_post($id_categorie)->nom;
        $matricule_admin = $detail_post->matricule_admin;

        $info_hauteur= info_admin($matricule_admin);
        $hauteur = $info_hauteur-> nom .' '. $info_hauteur->prenom;
        // $date= $detail_post->date;
    else:
        header("location:blog.php");
    endif;

}else{
    header("location:blog.php");

} 
?>

<!DOCTYPE html>
<html lang="zxx">
    <!-- Mirrored from templates.hibootstrap.com/arrola/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:49 GMT -->
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
        <div class="preloader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>

        <?php  include("includes/headerdetail.php") ?>

        <div class="inner-banner inner-bg3">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Blog Details</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="blog-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-content">
                            <div class="blog-preview-img">
                                <img src="assets/images/blog/blog-details.jpg" alt="Blog Images" />
                            </div>
                            <ul class="tag-list">
                                <li class="active">
                                    <a href="author.html"> <i class="bx bx-user"></i>By John </a>
                                </li>
                                <li><i class="bx bx-calendar"></i> 16 April</li>
                                <li><i class="bx bx-comment-dots"></i> 3 Comments</li>
                            </ul>
                            <h2>7 health tips For your body how to keep fit?</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, electronic.
                            </p>

                           
                            <div class="article-share">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="article-tag">
                                            <ul>
                                                <li class="title">Tags :</li>
                                                <li><a href="blog-details.html" target="_blank">Health,</a></li>
                                                <li><a href="blog-details.html" target="_blank">Food,</a></li>
                                                <li><a href="blog-details.html" target="_blank">Nutrition</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="article-social-icon">
                                            <ul class="social-icon">
                                                <li class="title">Share :</li>
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
                                                    <a href="https://twitter.com/" target="_blank">
                                                        <i class="bx bxl-twitter"></i>
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
                                </div>
                            </div>
                            
                            <?php /*<div class="comments-wrap">
                                <div class="comment-title">
                                    <h4>3 Comments :</h4>
                                </div>
                                <ul class="comment-form">
                                    <li>
                                        <img src="assets/images/blog/blog-user.jpg" alt="Image" />
                                        <h3>Ardin Hajack</h3>
                                        <span>17 April , 2021 AT 06:30 PM</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidu astana glory makes one of duo dolores et ea rebum stet clita kasd gubergren, no sea takimata sanctus
                                            est.
                                        </p>
                                        <a href="blog-details.html"> Reply</a>
                                    </li>
                                    <li class="pl-80">
                                        <img src="assets/images/blog/blog-user2.jpg" alt="Image" />
                                        <h3>Lisa Mera</h3>
                                        <span>17 April , 2021 AT 06:30 PM</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                                            accumsan lacus vel facilisis.
                                        </p>
                                        <a href="blog-details.html"> Reply</a>
                                    </li>
                                    <li>
                                        <img src="assets/images/blog/blog-user3.jpg" alt="Image" />
                                        <h3>John Smith</h3>
                                        <span>17 April , 2021 AT 06:30 PM</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidu astana glory makes one of duo dolores et ea rebum stet clita kasd gubergren, no sea takimata sanctus
                                            est.
                                        </p>
                                        <a href="blog-details.html"> Reply</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="comments-form">
                                <div class="contact-form">
                                    <h4>Leave A Reply</h4>
                                    <form id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Name*</label>
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Your Email Address*</label>
                                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Your Website Link*</label>
                                                    <input type="text" name="website" class="form-control" required data-error="Your website" placeholder="Your Website" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Comment*</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message.."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="agree-label">
                                                    <input type="checkbox" id="chb1" />
                                                    <label for="chb1">
                                                        Save my name, email, and website in this browser for the next time I comment.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">
                                                    Post A Comment
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> */?>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <?php include("includes/side-bar.php") ?>

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
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#a5cdc0c9cae5c4d7d7cac9c48bc6cac8">
                                                <span class="__cf_email__" data-cfemail="6a020f0606052a0b181805060b44090507">[email&#160;protected]</span>
                                            </a>
                                            <br />
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d8b1b6beb798b9aaaab7b4b9f6bbb7b5">
                                                <span class="__cf_email__" data-cfemail="3c55525a537c5d4e4e53505d125f5351">[email&#160;protected]</span>
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

    <!-- Mirrored from templates.hibootstrap.com/arrola/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:51 GMT -->
</html>
