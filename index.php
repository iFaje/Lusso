<?php

session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $type = $_SESSION['type'];
}
include("config.php");

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
    <script>
        $(document).ready(function() {

            // =========================== Delete Product is clicked =========================
            $(".product-container a").click(function(){

                var id = $(this).attr('id');
                if(id != null || id.indexOf('box') == -1){
                    if(confirm("are you sure?")){
                        const xhr = new XMLHttpRequest();
                        xhr.onload = function() {
                            console.log(this.responseText);
                        };

                    xhr.open("POST", "deleteProduct.php");
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhr.send("id=" + id);
                    location.reload();
                    }else{

                    }

                }
            });

            // ============================ Search bar input ==================================
            $("#search-input").keyup(function() {
                // get the user input
                if ($(this).val() != '') {
                    // if the search bar is not empty, creaye an XML HTTP request
                    const xhr = new XMLHttpRequest();
                    // when the response comes:
                    xhr.onload = function() {
                        // to check what is the response
                        console.log(this.responseText);
                        // hide the main part
                        $(".main").css("display", "none");

                        // get the result from the PHP file and post it in the container
                        $(".product-container").html(this.responseText);
                    };
                    // send a post request to the php file with the value typed in the search bar
                    xhr.open("POST", "searchResults.php");
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhr.send("searchResult=" + $(this).val());
                } else {
                    $(".main").css("display", "block");
                    location.reload();
                }
            });
        });
    </script>
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
    <section class="main">


        <div class="text-primary">
            WELCOME <?php
                    print_r($_SESSION);
                    if (isset($_SESSION['username']))
                        echo $_SESSION['username'];

                    ?>
        </div>


        <!-- Main Image -->
        <div class="main-img">
            <img src="img/logo-transparent.png" alt="MAIN IMG">
        </div>
        <div class="main-text">
            <h1>Lu<span>ss</span>o</h1>
            <h2>Collec<span>ti</span>on</h2>
            <a href="about.php" class="main-btn">details</a>
        </div>


    </section>
    <section class="product">
        <div class="p-heading">
            <h3>Products</h3>
        </div>
        <div class="product-container">
            <?php
            include_once("displayProducts.php");
            ?>


        </div>
    </section>


</body>


<?php
include("footer.php");
?>

</html>