
<?php
$boutique = info_boutique();
var_dump($boutique);
//foreach($boutique as $boutiquee) {
?> 
<footer class="footer-area footer-area-bg">
            <div class="container">
                <div class="footer-top pt-100 pb-70">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.php">
                                        <img src="<?=$boutiquee->logo?>" alt="Images" />
                                    </a>
                                </div>
                                <p>
                             <?= $boutiquee->description?>      
                                </p>
                                <ul class="social-link">
                                    <li>
                                        <a href="<?=$boutiquee->lien_facebook?>" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$boutiquee->lien_linkedin?>" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$boutiquee->lien_pinterest?>" target="_blank">
                                            <i class="bx bxl-pinterest-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$boutiquee->lien_instagram?>" target="_blank">
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
                                            Accueil
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
                                            <a href="tel:+8245678924"><?=$boutiquee->numero_whatsapp_aide?></a><br />
                                            <a href="tel:+8245668964"><?=$boutiquee->numero_whatsapp_aide_format?></a>
                                        </span>
                                    </li>
                                    <li>
                                        Email:
                                        <span>
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#b0d8d5dcdff0d1c2c2dfdcd19ed3dfdd">
                                                <span class="__cf_email__" data-cfemail="bad2dfd6d6d5fadbc8c8d5d6db94d9d5d7"><?=$boutiquee->email_officiel?></span>
                                            </a>
                                            <br />
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#e980878f86a9889b9b868588c78a8684">
                                                <span class="__cf_email__" data-cfemail="3b52555d547b5a494954575a15585456"><?=$boutiquee->email_officiel?></span>
                                            </a>
                                        </span>
                                    </li>
                                    <li>
                                        Adresse:
                                        <span> <?=$boutiquee->rue .",". $boutiquee->ville .",<br />". $boutiquee->pays?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget ps-5">
                                <h3>Newsletter</h3>
                                <p><?=$boutiquee->text_accroche?></p>
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
                            <?=$boutiquee->nom_website?>. Tous droits réservés par
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
// }
?>