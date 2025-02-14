<?php include "api_shops/cle_api_shop.php"; ?>
<!DOCTYPE html>
<html lang="zxx">
    <!-- Mirrored from templates.hibootstrap.com/arrola/default/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:41 GMT -->
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

        <title>Arrola - Modèle HTML de nutrition et de recettes</title>

        <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    </head>
    <body>
    <?php /*<div class="preloader"> -->
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div> */
      ?>
         <?php /* <header class="top-header top-header-bg-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="header-left">
                            <p>Bienvenue chez Arrola Santé !</p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="header-right d-flex align-items-center">
                            <div class="header-item">
                                <ul>
                                    <li class="title">Suivez-nous :</li>
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
                                <a href="cart.php" class="cart-top-btn">
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
        </header> */?>

         <?php /* <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                    <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
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
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo.png" class="logo-one" alt="Logo" />
                            <img src="assets/images/logo-white.png" class="logo-two" alt="Logo" />
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    Acceuil
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.php" class="nav-link">
                                            Acceuil Un
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.php" class="nav-link">
                                            Acceuil Deux
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.php" class="nav-link">
                                            Acceuil Trois
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
                                            <a href="about.php" class="nav-link">
                                            À propos de nous
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team.php" class="nav-link">
                                            Équipe
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonials.php" class="nav-link">
                                            Témoignages
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="nutritionist.php" class="nav-link">
                                            Nutritionniste
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Portfolio
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="portfolio.php" class="nav-link">
                                                        Portfolio
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="portfolio-details.php" class="nav-link">
                                                    Details Portfolio
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="appointment.php" class="nav-link">
                                            Rendez-vous
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                            Recette
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="recipe.php" class="nav-link">
                                                    Recette
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="recipe-details.php" class="nav-link">
                                                    Details Recette 
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing.php" class="nav-link">
                                            Plan tarifaire
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.php" class="nav-link">
                                                FAQ
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                             Utilisateurs
                                                <i class="bx bx-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="login.php" class="nav-link">
                                                    Se connecter
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="register.php" class="nav-link">
                                                        S'inscrire
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="forgot-password.php" class="nav-link">
                                                    Mot de passe oublié
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-condition.php" class="nav-link">
                                            Conditions générales
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.php" class="nav-link">
                                            politique de confidentialité
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.php" class="nav-link">
                                                404 Page
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.php" class="nav-link">
                                            À venir
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Boutique
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="shop.php" class="nav-link active">Boutique</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.php" class="nav-link">Panier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="checkout.php" class="nav-link">Vérifier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="wishlist.php" class="nav-link">Liste de souhaits</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="shop-details.php" class="nav-link">Details Boutique</a>
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
                                            <a href="service-1.php" class="nav-link">
                                           Styles De Dervices un
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-2.php" class="nav-link">
                                            Styles De Dervices Deux
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.php" class="nav-link">
                                         Details Services
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Articles
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-1.php" class="nav-link">
                                            Grille de l'article
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-2.php" class="nav-link">
                                            Barre latérale gauche de l'article
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-3.php" class="nav-link">
                                            Barre latérale droite de l'article
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.php" class="nav-link">
                                            Details de l'article
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="author.php" class="nav-link">
                                                Auteur
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="categories.php" class="nav-link">
                                            Catégories
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tags.php" class="nav-link">
                                                Tags
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">
                                    Contactez-nous
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
                                    <a href="appointment.php" class="default-btn two">Prendre rendez-vous</a>
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
                                        <a href="appointment.php" class="default-btn two">Rendez-vous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div> */ ?>
        <?php include "includes/header.php"; 
            //   include  "api_shops/api_produit.php"; 
        ?>

        <div class="inner-banner inner-bg3">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Boutique</h3>
                    <ul>
                        <li>
                            <a href="index.php">Acceuil</a>
                        </li>
                        <li>Boutique</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="product-area pt-100 pb-70">
            <div class="container">
                <div class="product-topper">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <div class="product-title">
                                <h3>Affichage de 1 à 9 sur 40 résultats</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="product-list">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Prix ​​par défaut</option>
                                    <option value="1">Prix ​​élevé à bas</option>
                                    <option value="2">Prix ​​bas à élevé</option>
                                </select>
                                <i class="bx bx-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-8">
                        <div class="row">
                        <?php
                        $products = recup_produict();
                       var_dump($)
                            ?>
                           <?php /*
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-card">
                                    <div class="product-img">
                                        <a href="shop-details.php">
                                            <img src="assets/images/product-img/product-img2.png" alt="Product Images" />
                                        </a>
                                        <ul class="product-item-action">
                                            <li>
                                                <a href="wishlist.php"><i class="bx bx-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="cart.php"><i class="bx bx-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="shop-details.php">Pomme</a></h3>
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-card">
                                    <div class="product-img">
                                        <a href="shop-details.php">
                                            <img src="assets/images/product-img/product-img3.png" alt="Product Images" />
                                        </a>
                                        <ul class="product-item-action">
                                            <li>
                                                <a href="wishlist.php"><i class="bx bx-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="cart.php"><i class="bx bx-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="shop-details.php">Avocat</a></h3>
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-card">
                                    <div class="product-img">
                                        <a href="shop-details.php">
                                            <img src="assets/images/product-img/product-img4.png" alt="Product Images" />
                                        </a>
                                        <ul class="product-item-action">
                                            <li>
                                                <a href="wishlist.php"><i class="bx bx-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="cart.php"><i class="bx bx-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="shop-details.php">Pastèque</a></h3>
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-card">
                                    <div class="product-img">
                                        <a href="shop-details.php">
                                            <img src="assets/images/product-img/product-img5.png" alt="Product Images" />
                                        </a>
                                        <ul class="product-item-action">
                                            <li>
                                                <a href="wishlist.php"><i class="bx bx-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="cart.php"><i class="bx bx-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="shop-details.php">Grenade</a></h3>
                                        <span>$40.00</span>
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-card">
                                    <div class="product-img">
                                        <a href="shop-details.php">
                                            <img src="assets/images/product-img/product-img6.png" alt="Product Images" />
                                        </a>
                                        <ul class="product-item-action">
                                            <li>
                                                <a href="wishlist.php"><i class="bx bx-heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="cart.php"><i class="bx bx-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3><a href="shop-details.php">poivron</a></h3>
                                        <span>$70.00</span>
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
                            */ ?>
                            <div class="col-lg-12 col-md-12 text-center">
                                <div class="pagination-area">
                                    <a href="shop.php" class="prev page-numbers">
                                        <i class="bx bx-chevron-left"></i>
                                    </a>
                                    <span class="page-numbers current" aria-current="page">1</span>
                                    <a href="shop.php" class="page-numbers">2</a>
                                    <a href="shop.php" class="page-numbers">3</a>
                                    <a href="shop.php" class="next page-numbers">
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="side-bar-area pl-20">
                            <div class="recipe-side-bar-categories">
                                <h3>Catégories</h3>
                                <ul>
                                    <li>
                                        <a href="categories.php" target="_blank">
                                        Dîner
                                            <span>(09)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.php" target="_blank">
                                        Dessert
                                            <span>(10)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.php" target="_blank">
                                        Pâtes
                                            <span>(12)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.php" target="_blank">
                                        Gâteau
                                            <span>(09)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.php" target="_blank">
                                            Fruits
                                            <span>(08)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="categories.php" target="_blank">
                                        Boissons gazeuses
                                            <span> (05)</span>
                                        </a>
                                    </li>
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
                                    <a href="index.php">
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
                                        <a href="index.php" target="_blank">
                                           Acceuil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.php" target="_blank">
                                        À propos de nous
                                        </a>
                                    </li>
                                    <li>
                                        <a href="portfolio.php" target="_blank">
                                            Portfolio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.php" target="_blank">
                                        Politique de confidentialité
                                        </a>
                                    </li>
                                    <li>
                                        <a href="terms-condition.php" target="_blank">
                                        Conditions générales
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
                                    Téléphone:
                                        <span>
                                            <a href="tel:+8245678924">+8245678924</a><br />
                                            <a href="tel:+8245668964">+8245668964</a>
                                        </span>
                                    </li>
                                    <li>
                                        Email:
                                        <span>
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#68000d040728091a1a070409460b0705">
                                                <span class="__cf_email__" data-cfemail="3c54595050537c5d4e4e53505d125f5351">[email&#160;protected]</span>
                                            </a>
                                            <br />
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#442d2a222b042536362b28256a272b29">
                                                <span class="__cf_email__" data-cfemail="89e0e7efe6c9e8fbfbe6e5e8a7eae6e4">[email&#160;protected]</span>
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
                                <h3>Bulletin</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                <div class="newsletter-area">
                                    <form class="newsletter-form" data-toggle="validator" method="POST">
                                        <input type="email" class="form-control" placeholder="Entrez votre email" name="EMAIL" required autocomplete="off" />
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

    <!-- Mirrored from templates.hibootstrap.com/arrola/default/shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 17:10:41 GMT -->
</html>
