<?php
session_start();
include("config.php");
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $type = $_SESSION['type'];
}
$pID = $_GET['id'];
$query = "SELECT * FROM product WHERE PID = '$pID'";
$result = mysqli_query($db, $query);

$row = mysqli_fetch_assoc($result);

$pname = $row['pname'];
$price  = $row['price'];
$description= $row['description'];
$quantity = $row['quantity'];
$img = $row['imgLoc'];

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
    }elseif($type == 'user'){
        include("user-header.php");
    }else{
        include('staff-header.php');
    }
}
?>

<body>
<div class=>
<h1 class="display-4 text-center" >Modify Product</h1>
<br>
</div>
<div  style="margin: 0px auto; width: 20%;">

    <form  action="proceesModification.php" method="post" enctype="multipart/form-data">

            <input type="hidden" class="form-control" name="productID" value = "<?php echo "$pID";?>">

        <div class="form-group">
            <label for="productName">Product Name: </label>
            <input type="text" class="form-control" name="productName" value = "<?php echo "$pname";?>" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="productPrice">Price: </label>
            <input type="text" class="form-control" name="productPrice" value = "<?php echo "$price";?>" placeholder="Enter Price" required>
        </div>
        <div class="form-group">
            <label for="productQuantity">Quantity: </label>
            <input type="text" class="form-control" name="productQuantity" value = "<?php echo "$quantity";?>" placeholder="ex. 45" required>
        </div>
        <div class="form-group">
            <label for="productDesc">Product Description: </label>
            <input type="text" class="form-control" name="productDesc" value = "<?php echo "$description";?>" placeholder="Enter Descritiopn" >
        </div>
        <div class="form-group">
            <label for="imgLoc">Choose New Image: (optional) </label>
            <input name="imgLoc" type="file" />
        </div>
    <br>
        <button type="submit" name = "submit" style="width: 250px;">Apply Change</button>
    </form>
    </div>

</body>

<?php
include("footer.php");
?>

</html>