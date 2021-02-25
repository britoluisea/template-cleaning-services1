<style> 
	.area-video{position: relative; height: <?=$v['height_poster']?>px;}
	.container-video{ overflow: hidden; width: 100%;height: 100%; position: absolute;margin-top: 0px;}
	.iframe_video { position: absolute; left: 0px; top:0px; width: 100%; height:100%; }
	.video-overlay{
		position: absolute;
		top: 0%;
		left: auto;
		right: auto;
		z-index: 1;
		width: 100%;
		height: 100%;
		padding-top: 100px;
	}
	.video-overlay h1, .video-overlay h2, .video-overlay h3,
	.video-overlay h4, .video-overlay h5, .video-overlay h6,
	.video-overlay p{text-shadow:2px 2px 8px #000;color: #fff; line-height: 1.3;}
	.video-overlay{ background-color: rgba(0,0,0,<?=$v["overlay"]?>); }
	.bg-video{
	    background-image:url('<?=$headerRutas."/slider/".$v["poster"]?>');
	    background-size:cover;
	    background-position:center;
	    background-repeat:no-repeat;
	}
	.control-video {
		position: absolute;bottom: 50px;left: 15%;
    	border: 1px solid #6f6f6f;
    	padding: 10px 15px;
    	border-radius: 50%;
	}
	.control-video a{color:#fff;}
	@media (max-width: 1100px) {.area-video{height: 500px;}.video-overlay{padding-top: 50px;}}
	@media (max-width: 991px) {
		.area-video, .container-video { height: 450px;}
		.iframe_video{
			    top: -50px;
    			width: 110%;
    			left: -5%;
    			height: 500px;
		}
	}
	@media (max-width: 767px) {
		.video-overlay{padding-top: 10px;}		
		.video-overlay h1, .video-overlay h2, .video-overlay h3,
		.video-overlay h4, .video-overlay h5, .video-overlay h6,
		.video-overlay h1 span, .video-overlay h2 span, .video-overlay h3 span,
		.video-overlay h4 span, .video-overlay h5 span, .video-overlay h6 span
		{font-size: 20px !important;}
		.video-overlay p, .video-overlay p span{font-size: 14px !important;}
		.iframe_video{width: 120%;left: -10%;}
	}
	@media (max-width: 420px) {.area-video, .container-video, .iframe_video { height: 232px;}}
</style>
<section class="area-video">
    <div class="container-video bg-video">
    	<?php require _INC."header-video-screen.php"; ?>
    </div>
	<div class="video-overlay">
		<div class="container">
			<?=stripslashes($v['descrip_video'])?>
		</div>
		<?php 
			if(isset($v['autoplay']) && $v['autoplay']==0 && $activar==1)
            {?>
			    <div class="control-video">
			    	<a href="#" id="play"><i class="fa fa-play"></i></a>
			    	<a href="#" id="play2" style="display: none;"><i class="fa fa-play"></i></a>
			    	<a href="#" id="pause" style="display: none;"><i class="fa fa-pause"></i></a>
			    </div>
              <?php 
          	}
        ?>
	</div>
    </div>
</section >