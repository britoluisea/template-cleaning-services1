<style>
.titleColor {
    color: <?=$rowOpt['text_color']?> !important;
}
</style>

                    <!-- TITLE START -->
                    <div class="section-head text-center text-white">
                        <h2 class="text-uppercase titleColor"><?=$rowOpt['nombre']?></h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square has-bg">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TITLE END -->
                    <!-- TESTIMONIAL 1 START ON BACKGROUND -->
                    <div class="section-content">
                        <div class="owl-carousel testimonial-one">
                            <?php  
                                if($num_reg == 0)
                                { ?>
                                    <div align="center" style="color:#F00"><?=isset($dataGlobal['label_no_record']) ? $dataGlobal['label_no_record'] : 'No Record' ?></div>
                                <?php 
                                }
                                else
                                {
                                    $cont =0;
                                    foreach ($filas as $item)
                                    {
                                        $cont++; ?>
                                        <div class="item">
                                            <div class="testimonial-1 testimonial-bg">
                                                <div class="testimonial-detail">
                                                    <strong class="testimonial-name">
                                                        <?= $item["nombres"]?> <?=$item["apellidos"]?>
                                                    </strong>
                                                    <span class="testimonial-position">
                                                        <?= $item["city"]?>, <?= strtoupper($item["state"])?>                 
                                                    </span>
                                                    <div class="text-center">
                                                        <div class="c-opacity stars" style="width: 120px; margin:auto;">   
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='0.5'): ?> checked="checked" <?php endif;?> />
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='1.0'): ?> checked="checked" <?php endif;?> />
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='1.5'): ?> checked="checked" <?php endif;?> />
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='2.0'): ?> checked="checked" <?php endif;?> />
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='2.5'): ?> checked="checked" <?php endif;?> />
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='3.0'): ?> checked="checked" <?php endif;?> />
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='3.5'): ?> checked="checked" <?php endif;?> />
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='4.0'): ?> checked="checked" <?php endif;?> />
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='4.5'): ?> checked="checked" <?php endif;?> />
                                                            <input class="star {split:2}" type="radio" name="<?=$item["idx"]?>" disabled="disabled" <?php if($item["stars"]=='5.0'): ?> checked="checked" <?php endif;?> />
                                                            <strong><?php echo number_format($item["stars"],1);?></strong>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-text">
                                                    <p>
                                                      <?php if(!empty($item["titulo"])) {?>
                                                         <div style="font-weight:bold; font-size:14px;color:#fff"><?= $item["titulo"]?></div> 
                                                       <?php }?>
                                                       <?php echo $mWidgetC->custom_limit(nl2br($item["descrip"]), $rowOpt['num_car'], $page_review); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cell-xs-12 text-center ">
                            <a style="margin-bottom: 20px;" href="<?=$page_review?>" class="btn btn-warning"><i class="fa fa-plus"></i> More Experiences</a>
                            <a style="margin-bottom: 20px; margin-top: 0px;" href="<?=$page_write?>" class="btn btn-warning" title="Write a Review">
                                <span class="glyphicon glyphicon-pencil"></span> Add a Experience
                            </a>
                        </div>
                    </div>