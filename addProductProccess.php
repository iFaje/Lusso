<?php
session_start();
include("config.php");

if (isset($_POST['submit'])) {
    // get the input from the form
    $PName = mysqli_real_escape_string($db, $_POST['productName']);
    $PPrice = mysqli_real_escape_string($db, $_POST['productPrice']);
    $PDescription = mysqli_real_escape_string($db, $_POST['productDesc']);
    $PQuantity = mysqli_real_escape_string($db, $_POST['productQuantity']);
    print_r($_FILES);
    $PLoc = $_FILES['imgLoc']['name'];

    $sql = "SELECT * FROM product WHERE PName = '$PName'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "product exists";
    } else {

        $newpath = "img/" . $_FILES['imgLoc']['name'];
        // Upload photo to server
        if (move_uploaded_file($_FILES['imgLoc']['tmp_name'], $newpath)) {
            echo "File is valid, and was successfully uploaded.\n";
            $row = mysqli_fetch_assoc($result);
            $location = 'img/' . $PLoc;
            $inser_query = "INSERT INTO product(PName, price, Description, quantity, imgLoc) VALUES ('$PName','$PPrice','$PDescription',$PQuantity, '$newpath')";
            // Upload product to DB
            if ($insertion = mysqli_query($db, $inser_query)) {
                header("location: redirect.php");
            } else
                echo "problem, cant add to db :)";
        } else {
            echo "Upload failed";
        }
    }
}
