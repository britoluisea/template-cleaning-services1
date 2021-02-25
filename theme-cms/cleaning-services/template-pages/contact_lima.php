<?php include dirname(__FILE__)."/../header.php"; ?>
    <!-- FORM LIMA SECTION START -->
    <div class="section-full  ">
        <div class="container">
            <div class="" cms-cols="col c-7 cx-12">
                <?php include _INC."form_lima.php";?>
            </div>
            <div class="" cms-cols="col c-5 cx-12">
                <?php $i= $url_request['id_router']; include _INC."_content.php"; ?>
            </div>
        </div>
    </div>
    <!-- FORM LIMA SECTION END -->
<?php include dirname(__FILE__)."/../footer.php"; ?>            