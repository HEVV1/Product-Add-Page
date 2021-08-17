<?php
    //Include the connection
    include_once('db_conn.php');
    //This is couple of variable that get values from url in ajax request
    $startNewCount = $_GET['start'];     
    // Get the result...
    // $sql = "SELECT * FROM product WHERE id BETWEEN $startNewCount AND $endNewCount";
    $sql = "SELECT * FROM product LIMIT $startNewCount, 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($data);
    }
?>