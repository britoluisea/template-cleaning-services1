<?php include dirname(__FILE__)."/../header.php"; ?>
    <!-- CONTACT SECTION START -->
    <div class="section-full ">
        <div class="container">
            <div  cms-cols="col c-7 cx-12">
                <?php include _INC."contact_us.php";?>
            </div>
            <div cms-cols="col c-5 cx-12">
                <?php $i= $url_request['id_router']; include _INC."_content.php"; ?>
            </div>
        </div>
    </div>
    <!-- CONTACT SECTION END -->
<?php include dirname(__FILE__)."/../footer.php"; ?>            