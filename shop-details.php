<?php include "api_shops/cle_api_shop.php"; ?>
<!DOCTYPE html>
<html lang="zxx">
    <!-- Mirrored from templates.hibootstrap.com/arrola/default/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:41 GMT -->
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
          <?php /*   <header class="top-header top-header-bg-two">
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
                                    <a href="#" class="nav-link active">
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
                                            <a href="shop-details.html" class="nav-link active">Shop Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
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
                                            <a href="service-details.html" class="nav-link">
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
        </div> */ ?>
        <?php include('includes/header.php') ?>
        <div class="inner-banner inner-bg10">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Détails du produit</h3>
                    <ul>
                        <li>
                            <a href="index.html">Accueil</a>
                        </li>
                        <li>Détails du produit</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="shop-details-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                <?php
                    url()= " ";
                    if(isset($_GET['mat_article'])){
                        $mat= $_GET['mat_article'];
                    }
                    $product=recup_produict_detail($mat);
                    // var_dump($_GET['url']);
                    foreach($product as $produit) {
                    ?>
                    <div class="col-lg-6 col-md-12">
                        <div class="shop-details-img">
                            <img src="<?=$image_produit.$produit->lien_img_vedette?>" alt="Image" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="shop-desc pl-20">
                            <h3><?= $produit->nom_art?></h3>
                            <div class="price">
                                <span class="new-price"><?=$produit->prix_reel?></span>
                                <span class="old-price"><?=$produit->prix_fictif?></span>
                            </div>
                            <div class="shop-review">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star-half"></i>
                                </div>
                                <a href="shop-details.php?mat_article=<?=$produit->mat_article?>" class="rating-count">3 commentaires</a>
                            </div>
                            <p>
                                <?=$produit->courte_description?>
                             </p>
                            <div class="input-count-area">
                                <h3>Quantité</h3>
                                <div class="input-counter">
                                    <span class="minus-btn"><i class="bx bx-minus"></i></span>
                                    <input type="text" min="1" value="1" />
                                    <span class="plus-btn"><i class="bx bx-plus"></i></span>
                                </div>
                            </div>
                            <div class="shop-add">
                                <button type="submit" class="default-btn"><i class="fas fa-cart-plus"></i> Acheter maintenant!</button>
                                <button type="submit" class="default-btn"><i class="fas fa-cart-plus"></i> Ajouter au panier</button>
                            </div>              
                            <div class="shop-share">
                                <ul>
                                    <li>
                                        <span>Partager:</span>
                                    </li>
                                    <li>
                                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?=url()?>" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=url()?>&title=Visitez le site de vente de produits naturels&summary=resumme&source=akila" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="https://twitter.com/intent/tweet?text=Texte%20à%20partager&url=<?=url()?>" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="https://www.instagram.com/share?url=<?=url()?>" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                      </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="shop-details-tab-area pb-70">
            <div class="container">
                <div class="tab shop-detls-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="tabs">
                                <li>
                                    Description
                                </li>
                                <li>
                                    Informations supplémentaires
                                </li>
                                <li>
                                    Commentaires
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="tab_content current active">
                                <div class="tabs_item current">
                                    <div class="shop-detls-tab-content">
                                        <p>
                                           <?=$produit->description?>
                                        </p>
                                    </div>
                                </div>
                                <div class="tabs_item">
                                    <div class="shop-detls-tab-content">
                                        <ul class="additional-information">
                                            <li><span>Marque:</span> ThemeForest</li>
                                            <li><span>Couleur:</span> Brown</li>
                                            <li><span>Taille:</span> Large, Medium</li>
                                            <li><span>Poids:</span> 27 kg</li>
                                            <li><span>Dimensions:</span> 16 x 22 x 123 cm</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tabs_item">
                                    <div class="shop-detls-tab-content">
                                        <div class="shop-review-form">
                                            <h3>Commentaires des clients</h3>
                                            <div class="review-title">
                                                <div class="rating">
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star-half"></i>
                                                </div>
                                                <p>Basé sur 3 avis</p>
                                                <a href="shop-details.html" class="default-btn btn-right">Laisser un commentaire<span></span></a>
                                            </div>
                                            <div class="review-comments">
                                                <div class="review-item">
                                                    <div class="content">
                                                        <img src="assets/images/product-img/product-user.jpg" alt="Images" />
                                                        <div class="content-dtls">
                                                            <h4>Ardin Hajack</h4>
                                                            <span>17 April , 2021 AT 06:30 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star-half"></i>
                                                    </div>
                                                    <h3>Bien</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    </p>
                                                    <a href="shop-details.html" class="review-report-link">
                                                    Signaler comme inapproprié</a>
                                                </div>
                                                <div class="review-item">
                                                    <div class="content">
                                                        <img src="assets/images/product-img/product-user2.jpg" alt="Images" />
                                                        <div class="content-dtls">
                                                            <h4>Lisa Mera</h4>
                                                            <span>17 April , 2021 AT 06:30 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star-half"></i>
                                                    </div>
                                                    <h3>Bien</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                    <a href="shop-details.html" class="review-report-link">
                                                    Signaler comme inapproprié</a>
                                                </div>
                                                <div class="review-item">
                                                    <div class="content">
                                                        <img src="assets/images/product-img/product-user3.jpg" alt="Images" />
                                                        <div class="content-dtls">
                                                            <h4>John Smith</h4>
                                                            <span>17 April , 2021 AT 06:30 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star-half"></i>
                                                    </div>
                                                    <h3>Bien</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                    <a href="shop-details.html" class="review-report-link">
                                                    Signaler comme inapproprié</a>
                                                </div>
                                            </div>
                                            <div class="review-form">
                                                <div class="contact-wrap-form">
                                                    <div class="contact-form">
                                                        <h4>Laisser un commentaire</h4>
                                                        <form id="contactForm">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Votre nom*</label>
                                                                        <input type="text" name="name" id="name" class="form-control" required data-error="Veuiller entrer votre nom" placeholder="Votre nom" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Votre adresse e-mail*</label>
                                                                        <input type="email" name="email" id="email" class="form-control" required data-error="Veuiller entrer votre adresse e-mail" placeholder="Votre e-mail" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Le lien de votre site*</label>
                                                                        <input type="text" name="website" class="form-control" required data-error="Veuiller entrer le lien de votre site web" placeholder="Votre site web" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Laisser un message*</label>
                                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Veuiller laisser un message" placeholder="Votre message.."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <button type="submit" class="default-btn">
                                                                        Publier le commentaire
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php 
     }
     ?>
        <div class="product-area pb-70">
            <div class="container">
                <h3 class="top-title">Les produits les plus vendus</h3>
                <div class="row justify-content-center">
             <?php
                $productt=recup_produict();
                foreach($productt as $key=>$produitt){
                if($key<4){
             ?>    
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.php?mat_article=<?=$produitt->mat_article?>">
                                <img src="<?=$image_produit.$produitt->lien_img_vedette?>" alt="Product Images" />
                                </a>
                                <ul class="product-item-action">
                                    <li>
                                        <a href="wishlist.html"><i class="bx bx-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="cart.html"><i class="bx bx-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a href="shop-details.php?mat_article=<?=$produitt->mat_article?>"><?=$produitt->nom_art?></a></h3>
                                <span><?=$produitt->prix_reel."FCFA"?></span>
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
             <?php 
                }
                else{
                    break;
                }
            }
             ?>
                  <?php /*
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/product-img/product-img2.png" alt="Product Images" />
                                </a>
                                <ul class="product-item-action">
                                    <li>
                                        <a href="wishlist.html"><i class="bx bx-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="cart.html"><i class="bx bx-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a href="shop-details.html">Pomme</a></h3>
                                <span>$30.00</span>
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/product-img/product-img3.png" alt="Product Images" />
                                </a>
                                <ul class="product-item-action">
                                    <li>
                                        <a href="wishlist.html"><i class="bx bx-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="cart.html"><i class="bx bx-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a href="shop-details.html">Avocat</a></h3>
                                <span>$60.00</span>
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/product-img/product-img4.png" alt="Product Images" />
                                </a>
                                <ul class="product-item-action">
                                    <li>
                                        <a href="wishlist.html"><i class="bx bx-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="cart.html"><i class="bx bx-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a href="shop-details.html">Pastèque</a></h3>
                                <span>$20.00</span>
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
             */?>
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
                                <h3>Liens utiles</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="index.html" target="_blank">
                                            Accueil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.html" target="_blank">
                                            À propos de nous
                                        </a>
                                    </li>
                                    <li>
                                        <a href="portfolio.html" target="_blank">
                                            Portfolio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html" target="_blank">
                                            Politique de confidentialité
                                        </a>
                                    </li>
                                    <li>
                                        <a href="terms-condition.html" target="_blank">
                                            Termes & Conditions
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget ps-5">
                                <h3>Informations</h3>
                                <ul class="footer-contact">
                                    <li>
                                        Numéro de téléphone:
                                        <span>
                                            <a href="tel:+8245678924">+8245678924</a><br />
                                            <a href="tel:+8245668964">+8245668964</a>
                                        </span>
                                    </li>
                                    <li>
                                        Email:
                                        <span>
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#b0d8d5dcdff0d1c2c2dfdcd19ed3dfdd">
                                                <span class="__cf_email__" data-cfemail="bad2dfd6d6d5fadbc8c8d5d6db94d9d5d7">[email&#160;protected]</span>
                                            </a>
                                            <br />
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#e980878f86a9889b9b868588c78a8684">
                                                <span class="__cf_email__" data-cfemail="3b52555d547b5a494954575a15585456">[email&#160;protected]</span>
                                            </a>
                                        </span>
                                    </li>
                                    <li>
                                        Adresse:
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
                                        <input type="email" class="form-control" placeholder="Entrer votre adresse e-mail" name="EMAIL" required autocomplete="off" />
                                        <button class="subscribe-btn" type="submit">
                                            S'abonner
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
                            Arrola. Tous droits réservés par
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
                            <input type="search" class="search-field" placeholder="Rechercher..." />
                            <button type="submit"><i class="bx bx-search-alt"></i></button>
                        </form>
                    </div>
                </div>
            </div>
         </div> 
        <?php 
        // include "includes/footer.php";
        ?>
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

    <!-- Mirrored from templates.hibootstrap.com/arrola/default/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:45 GMT -->
</html>
