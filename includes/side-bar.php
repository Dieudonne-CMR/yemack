<div class="side-bar-widget">
        <h3 class="title">Recent Post</h3>
        <div class="widget-popular-post">
        <?php foreach ($obj_tous_post as $key => $value) : ?>

            <article class="item">

                <a href="blog-details.html" class="thumb">
                    <span class="full-image cover bg1" role="img"></span>
                </a>
                <div class="info">
                    <h4 class="title-text">
                        <a href="blog.detail.php?mat_art=<?=$value->matricule ?>"> 
                        <?= $value->titre ?>
                        </a>
                    </h4>
                    <a href="blog.detail.php?mat_art=<?=$value->matricule ?>" class="read-btn" target="_blank">Read More</a>
                </div>

            </article>
            <?php endforeach ?>

            <!-- <article class="item">
                <a href="blog-details.html" class="thumb">
                    <span class="full-image cover bg2" role="img"></span>
                </a>
                <div class="info">
                    <h4 class="title-text">
                        <a href="blog-details.html">
                            Top 15 Vegan Easy Recipe to Get More Details
                        </a>
                    </h4>
                    <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                </div>
            </article>

            <article class="item">
                <a href="blog-details.html" class="thumb">
                    <span class="full-image cover bg3" role="img"></span>
                </a>
                <div class="info">
                    <h4 class="title-text">
                        <a href="blog-details.html">
                            Restaurants cafe Popular Recipe from Our Site
                        </a>
                    </h4>
                    <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                </div>
            </article>

            <article class="item">
                <a href="blog-details.html" class="thumb">
                    <span class="full-image cover bg4" role="img"></span>
                </a>
                <div class="info">
                    <h4 class="title-text">
                        <a href="blog-details.html">
                            Top 8 Ways for Living Healthy Life Important
                        </a>
                    </h4>
                    <a href="blog-details.html" class="read-btn" target="_blank">Read More</a>
                </div>
            </article> -->
            
        </div>
    </div>