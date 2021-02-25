        <div class="container">
            <?=$row_u['title']?>
            <div class="row">
                <div class="portfolio-wrap mfp-gallery no-col-gap">
                    <?php
                    while ($f = fetchAssoc($q)) 
                    {
                        $img_projects = SERVER.'imgcms/product_d/'.$f['nomcar'].'/thumbs/'.$f['imagen'] ;
                        $url_projects = SERVER.'projects/'.$f['slugCat'].'/'.$f['slug'];
                        ?>
                            <div class="masonry-item cat-1 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);">
                                            <img src="<?=$img_projects?>" alt="<?= $f['nombre'];?>" >
                                        </a>
                                        <div class="overlay-bx">
                                            <h3 style="color: #fff;" class="p-tb-10"><?= $f['nombre'];?></h3>
                                            <div class="overlay-icon">
                                                <a href="<?=$url_projects?>">
                                                    <i class="fa fa-external-link wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    } ?>
                </div>
            </div>
        </div>