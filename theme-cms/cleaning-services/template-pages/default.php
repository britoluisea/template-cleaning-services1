<?php include dirname(__FILE__)."/../header.php"; ?>
    <!-- DEFAULT SECTION START -->
    <div class="section-full ">
        <div class="container">
            <div class="" cms-cols="col c-8 cx-12">
                <?php $i= $url_request['id_router']; include _INC."_content.php"; ?>
            </div>
            <div class="" cms-cols="col c-4 cx-12">
                <?php include dirname(__FILE__)."/../sidebar.php";?>
            </div>
        </div>
    </div>
    <!-- DEFAULT SECTION END -->
<?php include dirname(__FILE__)."/../footer.php"; ?>            