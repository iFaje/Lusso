<?php
    session_start();
    include("config.php");
    $id = $_POST['id'];
    $pid = substr($id,0, strpos($id, '-'));
    echo $pid;
    $query_sel = "SELECT * FROM product WHERE PID = '$pid'";
    $result = mysqli_query($db, $query_sel);
    if($row = mysqli_fetch_assoc($result)){
        $query_del = "DELETE FROM product WHERE PID = $pid";
        mysqli_query($db, $query_del);

    }




?>
