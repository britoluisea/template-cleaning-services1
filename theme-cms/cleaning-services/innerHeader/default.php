            <style>.bg{position:relative;background-size: cover;background-repeat: no-repeat;background-position: center; height: <?=$o["height_inner"]?>px;margin-bottom: 50px;}.bg h2.titulo {font-size: 60px;font-weight: 600;color:#fff;margin: 0px;padding:0px;line-height: 1.3;text-shadow:2px 2px 8px #000;}.content-inner{line-height: 1.3;text-shadow:2px 2px 8px #000;color:#fff;}.overlay-inner{height: <?=$o["height_inner"]?>px;background-color: rgba(0,0,0,<?=$o["overlay_inner"]?>);} .center-v{display: flex;align-items: center;justify-content: center;}@media(max-width: 768px){.bg h2.titulo {font-size: 40px;}} </style>
            <?php
                $cont = 0;                     
                foreach ($inner as $item)
                {
                    if($url_request['request_access']==0){
                        $bg = $headerRutas.'slider/'.$item['imagen'];
                    }
                    else{$bg = $item['imagen'];}?>
                    <!-- INNER PAGE BANNER -->
                    <div class="bg" style="background-image:url(<?=$bg?>);">
                     	<div class="overlay-inner center-v">
                            <div class="container ">
                                <?php if(strlen($item["mostrar_nombre"])>0 ) { ?>
                                    <h2 class="titulo text-<?= $item["nombre_align"] ?> <?php if($item["mostrar_nombre"]==0){?>hide<?php } ?>">
                                        <?= $item['nombre'] ?>
                                    </h2>
                                <?php } ?>
                                <?php if(strlen($item["descrip"])>0 ) { ?>
                                    <div class="content-inner <?php if($item["mostrar_descrip"]==0){?>hide<?php } ?>" >
                                        <?= stripslashes($item['descrip']) ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- INNER PAGE BANNER END -->
                    <?php
                    $cont++;
                }
            ?>
