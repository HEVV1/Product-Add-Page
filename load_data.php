<?php
    //Include the connection
    include_once('db_conn.php');
    $startNewCount = $_GET['start'];
    $endNewCount = $_GET['end'];
    // Get the result...
    $sql = "SELECT * FROM product WHERE id BETWEEN $startNewCount AND $endNewCount";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($data);
    }
?>