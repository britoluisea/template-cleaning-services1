          <style>
               .fill{background-size: cover;background-repeat: no-repeat;background-position: center;}@media(min-width: 768px){.carousel-caption {bottom: 0%;top: 20%;left: 10%;right: 10%;}}#sliderShow h2.titulo {font-size: 60px;font-weight: 600;color:#fff;margin: 0px;line-height: 1.3;text-shadow:2px 2px 8px #000;}.content-slider{line-height: 1.3;}.slider-overlay{position: absolute;top: 0%;left: auto;right: auto;z-index: 1;width: 100%;height: 100%;padding-top: 100px;background-color: rgba(0,0,0,<?=$o["overlay"]?>); text-shadow:2px 2px 8px #000;}
          </style>
          <!-- Slider -->
          <div id="sliderShow" class="carousel slide ">
               <div class="carousel-inner ">
                    <?php
                      $cont = 0;                     
                      foreach ($s as $item)
                      {
                        $active = ($cont == 0) ? 'active' : ''; ?>
                        <div class="item <?= $active ?>" >
                          <div class="fill" style="background-image: url(<?=$headerRutas?>slider/<?= $item['imagen'] ?>); height: <?=$o['height']?>px;"></div>
                          <div class="slider-overlay">
                            <div class="carousel-caption ">
                              <h2 class="titulo text-<?= $item["nombre_align"] ?> <?php if($item["mostrar_nombre"]==0){?>hide<?php } ?>">
                                <?= $item['nombre'] ?>
                              </h2>
                              <div class="content-slider <?php if($item["mostrar_descrip"]==0){?>hide<?php } ?>" >
                                <?= stripslashes($item['descrip']) ?>                    
                              </div>
                            </div>
                          </div>
                        </div><?php
                        $cont++;
                      }
                    ?>
               </div>
               <!-- Controls -->
               <?php if ($o['ico_nav'] == 1){ ?>                
        				<a class="left carousel-control" href="#sliderShow" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        				<a class="right carousel-control" href="#sliderShow" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
              <?php } ?>
          </div>
          <!-- Slider END -->
          <!-- tiempo de transicion -->
         <script>
            $(document).ready(function() {
              $('#sliderShow').carousel({interval:<?=isset($o['speed']) ? $o['speed']*1000 : '5000'?>});
            });
         </script>
          <!-- tiempo de transicion END -->