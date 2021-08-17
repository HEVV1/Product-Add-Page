<?php 
    include_once 'db_conn.php';
    if (isset($_POST['deleteId'])) {        
        $deleteId = implode(',',  $_POST['deleteId']);        
        $conn->query('DELETE FROM product WHERE id IN('.$deleteId.')');
    }
    else{
        $conn->query('DELETE FROM product');
    }
?>