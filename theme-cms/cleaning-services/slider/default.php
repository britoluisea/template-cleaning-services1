          <style>
            .swiper-container {width: 100%;height: <?=$o['height']?>px;background-color: #000;} .swiper-slide {height: <?=$o['height']?>px !important;background-size: cover;background-repeat: no-repeat;background-position: center;/* Center slide text vertically */display: flex;justify-content: center;align-items: center; } .swiper-slide-caption {background: rgba(0,0,0,<?=$o["overlay"]?>);width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;}#sliderShow h2.titulo {font-size: -webkit-xxx-large;font-weight: 600;color:#fff;margin: 0px;line-height: 1.3;text-shadow:2px 2px 8px #000;}.content-slider{line-height: 1.3;text-shadow:2px 2px 8px #000;}#sliderShow{display: none;}.swiper-content {max-width: 1170px;}
          </style>
          <!-- Slider -->
          <div id="sliderShow" class="swiper-container" data-autoplay="<?=$o['speed']*1000?>" data-direction="<?=$o['direction']?>" data-slide-effect="<?=$o['effect']?>">
               <div class="swiper-wrapper">
                    <?php
                      $cont = 0;                     
                      foreach ($s as $item)
                      {
                        $active = ($cont == 0) ? 'swiper-slide' : '';?>
                        <div class="swiper-slide <?=$active?>" style="background-image: url(<?=$headerRutas?>slider/<?= $item['imagen'] ?>);">
                          <div class="swiper-slide-caption">
                            <div class="swiper-content ">
                              <h2 class="titulo text-<?= $item["nombre_align"] ?> <?php if($item["mostrar_nombre"]==0){?>hide<?php } ?>"><?= $item['nombre'] ?></h2>
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
               <!-- Add Pagination -->
               <?php if ($o['ico_nav'] == 1){ ?>
                <div class="swiper-pagination"></div>
              <?php } ?>
               <?php if ($o['arrows'] == 1){ ?>
                   <!--Add Arrows -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
              <?php } ?>
          </div>
          <!-- Slider END -->