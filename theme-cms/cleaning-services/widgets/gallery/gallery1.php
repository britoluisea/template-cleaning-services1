<div class="col-sm-12"><?=$row_u['title'];?></div>
<?php 
    while ($fila = fetchArray($consulta)) 
    { 
        $wurlGall = $rutaGallery.$fila["slug"];
        $sql_fot = $select." = '" . $fila["idx"] . "' order by item asc";
        $res_fot = ejecutar($sql_fot);
        $numPhotos = numRows($res_fot);
        ?>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <a href="<?= $wurlGall ?>" class="thumbnail">
                <img src="<?=SERVER?>imgcms/galeria/<?= $fila['nomcar'] ?>/thumbs/<?= $fila['imagen'] ?>" alt="img">
            </a>
            <div class="content">
                <h3><a href="<?= $wurlGall ?>"><?= $fila['nombre'] ?> (<?= $numPhotos ?>)</a></h3>
                <p><a class="btn btn-default" href="<?= $wurlGall ?>"><span class="glyphicon glyphicon-plus"></span> View More</a></p>
            </div>
        </div><?php 
    }
?>