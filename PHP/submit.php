<?php
    include_once 'db_conn.php';
    $sku = isset($_POST['sku']) ? $_POST['sku'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';

    //Variables for attribute
    $height = isset($_POST['height']) ? $_POST['height'] : '';
    $width = isset($_POST['width']) ? $_POST['width'] : '';
    $length = isset($_POST['length']) ? $_POST['length'] : '';
    $totalParameters = $height . 'x' . $width . 'x' . $length;

    $attribute = isset($_POST['size']) ? $_POST['size'] : (($totalParameters != '') ? $totalParameters : $_POST['weight']);
    
    $sql = "INSERT INTO product(sku_, name_, price_, image_, attribute_) VALUES('$sku', '$name', '$price', 'https://cdn.discordapp.com/attachments/872802741167218728/872805127411597322/tennis-racket.png', '$attribute');";
    mysqli_query($conn, $sql);
?>