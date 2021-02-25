<!DOCTYPE html>
<html lang="<?=isset($dataGlobal['lang']) ? $dataGlobal['lang'] : 'en'?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include dirname(__FILE__)."/../../metas.php";?>
    <!-- Core CSS -->
    <link rel="stylesheet" type="text/css" href="<?=SERVER.CSS_THEME?>import.css">
    <script>
        var server = '<?=SERVER?>';
        var server_p = '<?=SERVER_P?>';
    </script>    
</head>
<body id="bg">
    
    <!-- Preloader start -->
    <div class="loader-out flex-center">
        <div class="loader"></div>
    </div>
    <!-- Preloader end -->