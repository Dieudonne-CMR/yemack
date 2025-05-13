    <footer class="footer-area footer-area-bg">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="home">
                                    <img src="assets/images/footer-logo.png" alt="Images" />
                                </a>
                            </div>
                            <p>
                            Yemak Wellness vous propose des soins non invasifs , à la pointe de l'innovation, pour un maximum d'efficacité
                            </p>
                            <ul class="social-link">
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
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="footer-widget ps-5">
                            <h3>Liens Utiles</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="index" target="_blank">
                                        Accueil
                                    </a>
                                </li>
                                <li>
                                    <a href="about" target="_blank">
                                        A Propos
                                    </a>
                                </li>
                                <li>
                                    <a href="services" target="_blank">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="blog" target="_blank">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="terms-condition" target="_blank">
                                        Terms & Condition
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget ps-5">
                            <h3>Informations</h3>
                            <ul class="footer-contact">
                                <li>
                                    Téléphone:
                                    <span>
                                        <!-- <a href="tel:+242064457126">00 242 06 445 7126</a><br /> -->
                                        <a href="tel:00242067792332">00 242 067 792 332</a>
                                        <a href="tel:00242068140908">00 242 068 140 908</a>
                                        <a href="tel:0022871845353">00 228 71 84 5353</a>
                                    </span>
                                </li> <br>
                                <li>
                                    Email:
                                    <span>
                                    <a href="mailto:info@yemak-wellness.com">info@yemak-wellness.com</a>
                                        <!-- <br /> -->
                                        <a href="mailto:adminyemak@yemaksantebeaute.com">adminyemak@yemaksantebeaute.com</a>
                                    </span>
                                </li>
                                <li>
                                    Adresse:
                                    <span>
                                    35 avenue des 3 partyrs, Plateau des 15 ans-Brazzaville ( République du Congo) <br>
                                    Sito Aéroport -Lomé ( République du TOGO )
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget ps-5">
                            <h3>Newsletter</h3>
                            <p>Abonnez vous a notre Newsletter pour ne rien manquer </p>
                            <div class="newsletter-area">
                                <style>
                                    .newsletter_grs {
                                        position: relative;
                                        margin-top: 15px;
                                        background-color: var(--greenColor);
                                        color: var(--whiteColor);
                                        height: 50px;
                                        line-height: 50px;
                                        width: 100%;
                                        border: 0;
                                        -webkit-transition: var(--transition);
                                        transition: var(--transition);
                                        text-align: center;
                                    }

                                    .newsletter_grs .form-control {
                                        background: #0e1125;
                                        border-radius: 5px;
                                        height: 50px;
                                        line-height: 50px;
                                        margin: 0;
                                        border-radius: 0;
                                        border: none;
                                        padding: 0 25px;
                                        max-width: 100%;
                                        color: var(--whiteColor);
                                        border: 1px solid var(--whiteColor);
                                    }
                                    .newsletter_grs .subscribe-btn {
                                        margin-top: 15px;
                                        background-color: var(--greenColor);
                                        color: var(--whiteColor);
                                        height: 50px;
                                        line-height: 50px;
                                        width: 100%;
                                        border: 0;
                                        -webkit-transition: var(--transition);
                                        transition: var(--transition);
                                        text-align: center;
                                    }
                                </style>
                                <form class="newsletter_grs" action="<?php echo  $form_newsletter ?>" method="POST">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email_send" required/>
                                    <button class="subscribe-btn" type="submit">
                                        Souscrire
                                    </button>
                                    
                                    <!-- <div id="validator-newsletter" class="form-result"></div> -->
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
                        <b style="color : #f1af14"> Yemak santé et beauté</b> . Tous droits reservé par
                        <a href="https://goldenrock.io"  style="color :rgb(255, 174, 34)" target="_blank">GOLDEN ROCK SARL</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>