<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php print $datos["titulo"]; ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a href="<?php print RUTA; ?>" class="navbar-brand">Tienda</a>
        <?php if ($datos["menu"]){
            #menu
        }
        ?>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <?php 
                if (isset($datos["errores"])) {
                    if (count($datos["errores"])) {
                        print "<div class='alert alert-danger mt-3'>";
                        foreach($datos["errores"] as $key => $valor){
                            print "<strong>* ".$valor."</strong><br>";
                        }
                        print "</div>";
                    }
                }
            ?>