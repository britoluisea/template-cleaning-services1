<div class="post-list">	
    <!-- TITLE -->
    <div class="section-head text-center">
        <div class="caption-widget-list">
            <h2 class="text-uppercase"><?=$atabla_opt['box_name']?></h2>
        </div>
        <div class="wt-separator-outer">
            <div class="wt-separator style-square">
                <span class="separator-left bg-primary"></span>
                <span class="separator-right bg-primary"></span>
            </div>
        </div>
    </div>
    <!-- TITLE -->    
    <div class="section-content ">
        <div class="row equal-wraper">
            <?php 
                while($item=fetchArray($consulta))
                {?>
                    <div class="items" cms-cols="col c-4 cs-4 cx-6">
                        <div class="blog-post latest-blog-1 date-style-2">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <?php 
                                    if($atabla_opt['show_cover']==1)
                                    { 
                                        $wimg=SERVER."imgcms/articles/thumbs/".$item["imagen"]; ?>
                                        <a href="<?=SERVER?>blog/<?=$item['slug']?>" class="link-article-img" >
                                            <img src="<?php echo $wimg ?>" class="img-article" />
                                        </a>    
                                        <?php 
                                    }
                                ?>
                            </div>
                            <div class="wt-post-info p-a30 p-b20 bg-white">
                                <div class="wt-post-title ">
                                    <h3 class="post-title">
                                        <a class="widget-lis-title" href="blog/<?= $item["slug"]?>">
                                            <strong><?= $item["nombre"]?></strong>
                                        </a>
                                    </h3>
                                </div>
                                <div class="wt-post-meta ">
                                    <ul>
                                        <li class="post-date">
                                            <i class="fa fa-calendar"></i>
                                            <?php 
                                                if($atabla_opt['show_date']==1)
                                                { ?>
                                                    <div class="show_date">
                                                        <strong>
                                                            <?= strftime('%d %b', strtotime($item['fecreg'])) ?> 
                                                        </strong> 
                                                        <span>
                                                            <?= strftime('%Y', strtotime($item['fecreg'])) ?>
                                                        </span>
                                                    </div>
                                                    <?php
                                                }
                                            ?>                                            
                                        </li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <?php                             
                                        if($atabla_opt['show_descrip']==1)
                                        { ?>
                                            <p class="show_descrip"><?=$item['detail_home']?></p>
                                            <?php 
                                            // $item['detail'] // descripcion small
                                        }
                                    ?>
                                </div>
                                <div class="article-read-more-content">
                                    <a class="read-more-article btn btn-default" href="blog/<?= $item["slug"]?>" style="background: <?=$background_color?>; color:<?=$text_color?>;">
                                        <strong>Read More</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <?php 
                }
            ?>
            <hr />
            <div class="text-center">
                <a class="btn btn-default" href="<?=SERVER?>blog" style="background: <?=$background_color?>; color:<?=$text_color?>;">
                    Visit our Blog | <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>