<?php

session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $type = $_SESSION['type'];
}
include("config.php");
$pID = $_GET['id'];
$query = "SELECT * FROM product WHERE PID = '$pID'";
$result = mysqli_query($db, $query);

$row = mysqli_fetch_assoc($result);
$pID = $row['PID'];
$pname = $row['pname'];
$price = $row['price'];
$desc = $row['description'];
$quantity = $row['quantity'];
$img = $row['imgLoc'];
$rating = $row['rating'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lusso | Sweets & more!</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="shortcut icon" href="img/logo.jpeg">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<!-- ============== Add headers ============= -->
<?php
if (!isset($username)) {
    include("guest-header.php");
} else {
    if ($type == 'admin') {
        include('admin-header.php');
    } elseif ($type == 'user') {
        include("user-header.php");
    } else {
        include('staff-header.php');
    }
}
?>

<body>
    <div>
        <div class="product container">
            <div class="row">
                <div class="product-page col-lg-5 col-md-12">
                    <img src="<?php echo $img ?>" alt="">
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 col-md-12">
                    <div class="row">
                        <h1 class="display-2"><?php echo $pname ?></h1>
                    </div>
                    <hr>
                    <div class="row">
                        <p class="lead">
                            <?php $desc ?> + Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eligendi officiis ullam quod voluptatibus quaerat, in veritatis laborum quas iusto error inventore nesciunt dignissimos quae doloremque fugiat voluptatem nisi debitis?
                        </p>
                    </div>

                    <div>
                        <form action="proccessRating.php?pid=<?php echo $pID; ?>" style="display: flex;" method="POST">
                            <button class="col-5" style="width: 200px;" name="submit" type="submit">Rate</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-control col-5" style="height: 40px; transform: translateY(9px);" type="number" name="rating" max="5" min="0" placeholder="rate from 0-5">

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<?php

include("footer.php");
?>