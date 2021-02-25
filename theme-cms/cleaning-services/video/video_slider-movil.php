<?php 

    	   if( $detect->isTablet() ) {
                $debug='table_ipad';    echo'<script>console.log("table y ipad")</script>';// table y ipad
                $activar= $v['table_ipad'];
                include('video_slider-movil/video.php');
            }


            elseif( $detect->isMobile()) {
                include (dirname(__FILE__)."/../../../app/model/Bannershome.php");
                $bannershome = new App_Model_Bannershome();
    			$s = $bannershome->getListar();
		        if($o['template_slider']=='default.php'){$lib_swiper = 1; }
		        require_once dirname(__FILE__)."/../slider/".$o['template_slider']; 
		        //cargar template seleccionado
    		}
    		else
    		{
    			$debug='desktop';echo'<script>console.log("despktop")</script>';// desktop
    			$activar= 1;
    			include('video_slider-movil/video.php');
    		}
    	?>


