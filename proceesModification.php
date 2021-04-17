<?php
session_start();
include("config.php");
if(isset($_POST['submit'])){
    $pID = $_POST['productID'];
    $PName = mysqli_real_escape_string($db, $_POST['productName']);
    $PPrice = mysqli_real_escape_string($db, $_POST['productPrice']);
    $PDescription = mysqli_real_escape_string($db, $_POST['productDesc']);
    $PQuantity = mysqli_real_escape_string($db, $_POST['productQuantity']);

    print_r($_FILES);
    print_r($_POST);



    $query_name = "UPDATE product SET pname = '$PName' WHERE PID = $pID";
    $query_price = "UPDATE product SET price = '$PPrice' WHERE PID = $pID";
    $query_desc = "UPDATE product SET description = '$PDescription' WHERE PID = $pID";
    $query_quantity = "UPDATE product SET quantity = $PQuantity WHERE PID = $pID";

    mysqli_query($db, $query_desc);
    mysqli_query($db, $query_name);
    mysqli_query($db, $query_price);
    mysqli_query($db, $query_quantity);

    if(isset($_FILES['imgLoc']['name'])){

        $PLoc = $_FILES['imgLoc']['name'];


        $newpath = "img/" . $_FILES['imgLoc']['name'];
        // Upload photo to server
        if (move_uploaded_file($_FILES['imgLoc']['tmp_name'], $newpath)) {
            echo "File is valid, and was successfully uploaded.\n";


            $query_img = "UPDATE product SET imgLoc = '$newpath' WHERE PID = $pID";
// Upload product to DB
            if ($query_img = mysqli_query($db, $query_img)) {

            } else
                echo "problem, cant add to db :)";
        }



        header("location: redirect.php");

    }
}




?>