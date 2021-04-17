<?php

    if(isset($_SESSION['username'])){

        if ($type == 'admin' ||$type == 'staff' ) {

            $query = "SELECT * FROM product";
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $pID = $row['PID'];
                $pname = $row['pname'];
                $price = $row['price'];
                $desc = $row['description'];
                $quantity = $row['quantity'];
                $img = $row['imgLoc'];
                $rating = $row['rating'];
                echo " <div class='p-box'  id = '$pID-box'>
                        <a href = 'product.php?id=$pID'><img src='$img' alt='caramel brownies'></a>
                        <p>$pname.</p>
                        <p>Rating: $rating / 5</p>
                        <a href='#' class='price'>$price SAR</a>
                        <a href='modifyProduct.php?id=$pID' class='modify-btn'>Modify Product</a>
                        <a href='#' id = '$pID-btn' class='delete-btn'>Delete Product</a>
                    </div>";
            }


        }else{

            $query = "SELECT * FROM product";
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $pID = $row['PID'];
                $pname = $row['pname'];
                $price = $row['price'];
                $desc = $row['description'];
                $quantity = $row['quantity'];
                $img = $row['imgLoc'];
                $rating = $row['rating'];
                echo " <div class='p-box'>
                        <a href = 'product.php?id=$pID' id = '$pID'><img src='$img' alt='$pname'></a>
                        <p>$pname.</p>
                        <p>Rating: $rating / 5</p>
                        <a href='#' class='price'>$price SAR</a>
                        <a href='#' class='buy-btn'>Add To Cart</a>
                    </div>";
            }

        }


    } else{

        $query = "SELECT * FROM product";
        $result = mysqli_query($db, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $pID = $row['PID'];
            $pname = $row['pname'];
            $price = $row['price'];
            $desc = $row['description'];
            $quantity = $row['quantity'];
            $img = $row['imgLoc'];
            $rating = $row['rating'];
            echo " <div class='p-box'>
                    <a href = 'product.php?id=$pID' id = '$pID'><img src='$img' alt='$pname'></a>
                    <p>$pname.</p>
                    <p>Rating: $rating / 5</p>
                    <a href='#' class='price'>$price SAR</a>
                    <a href='#' class='buy-btn'>Add To Cart</a>
                </div>";
        }

    }
?>
