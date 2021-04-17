<?php
session_start();
include("config.php");
print_r($_POST);
print_r($_GET);
if(isset($_POST['submit'])){
    $rating = mysqli_real_escape_string($db, $_POST['rating']);

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $query = "SELECT UID FROM user WHERE username = '$username'";

        $result = mysqli_query($db, $query);

        $row = mysqli_fetch_assoc($result);

        $UID = $row['UID']??null;
        $pid = $_GET['pid'];
        $query_ins = "INSERT INTO rates (UID, PID, rating) VALUES ($UID, $pid, $rating)";

        if(mysqli_query($db,$query_ins)){
            echo "all done";
            // Update the rating of the product

            $oldRatingQuery = "SELECT rating from product where PID = '$pid'";

            $resOld = mysqli_query($db, $oldRatingQuery);
            $oldResRow = mysqli_fetch_assoc($resOld);

            $oldRating = $oldResRow['rating'];

            $numQuery = "SELECT 1 FROM rates WHERE PID = '$pid'";
            $numRes = mysqli_query($db, $numQuery);
            $numRows = mysqli_num_rows($numRes);
            $newRating = ( $oldRating + $rating )/$numRows;

            $query_up = "UPDATE product SET rating = '$newRating' WHERE PID = $pid;";

            if(mysqli_query($db,$query_up)){
                echo "old rating is changed";
                header("location: product.php");
            }


            // header("location: product.php");
        }else
        echo "sorry, you cannot rate a product twice";



    }else{
        echo "Rating is only for registered user, sorry";
    }

}

?>