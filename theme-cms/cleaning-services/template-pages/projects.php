<?php include dirname(__FILE__)."/../header.php"; ?>
    <!-- PROJECTS SECTION START -->
    <div class="section-full">
        <div class="container">
            
                <div class="" cms-cols="col c-12 cx-12">
            	   <?php $i= $url_request['id_router']; include _INC."_content.php"; ?>
                </div>
                <div class="" cms-cols="col c-12 cx-12">                    
                    <?php include _INC."_projects.php";?>
                </div>
            
    </div>
    <!-- PROJECTS SECTION END -->
<?php include dirname(__FILE__)."/../footer.php"; ?>   