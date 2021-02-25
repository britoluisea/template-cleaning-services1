<?php include dirname(__FILE__)."/../header.php"; ?>
    <!-- BLOG SECTION START -->
    <div class="section-full ">
        <div class="container">
            <div class="" cms-cols="col c-12 cx-12">
                    <?php $i= $url_request['id_router']; include _INC."_content.php"; ?>
            </div>
        </div>
        <?php include _INC."_blog.php";?>
    </div>
    <!-- BLOG SECTION END -->
<?php include dirname(__FILE__)."/../footer.php"; ?>            