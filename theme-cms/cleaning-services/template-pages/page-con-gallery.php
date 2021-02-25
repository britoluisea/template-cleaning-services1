<?php include dirname(__FILE__)."/../header.php"; ?>
    <!-- PAGES & GALLERY WIDGET DETAILS START  -->
    <div class="section-full ">
        <div class="container">
            <div class="" cms-cols="col c-12 cx-12">
                <?php $i= $url_request['id_router']; include _INC."_content.php"; ?>
            </div>
            <div class="" cms-cols="col c-12 cx-12">
               <?php $id=1; include _INC."gallery_code.php";?>
            </div>
        </div>
    </div>
    <!-- PAGES & GALLERY WIDGET DETAILS END -->
<?php include dirname(__FILE__)."/../footer.php"; ?>            