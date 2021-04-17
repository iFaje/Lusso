<?php
session_start();
echo $_SESSION["username"];
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
        var username = <?php echo $_SESSION['username']; ?>;
        if (username == 'undefined' || username == "" || username == 'null') {
            $(".main").append("        <a href='signin.php'><div class='sign-in'>Sign In</div></a>");
        }
    </script>
</head>

<header>
    <section class="main">
        <div class="logo"><a href="welcome.php">LU<span>SS</span>O</a></div>



    </section>
    <!-- for social links -->
    <div class="social">
        <a href="#"><i class="fa fa-snapchat"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class=" fa fa-instagram"></i></a>
        <a href="#"><i class=" fa fa-whatsapp"></i></a>
    </div>
</header>

<body>
    <!-- if the cart is not empty -->
    <section class="cart">
        <form action="action_page.php">

            <h1>Shopping Cart</h1>
            <p class="cart-price">Price</p>
            <hr>
            <div class="cart-item">
                <img src="img/brownies.jpeg" alt="brownies">
                <p class="p-name">White Sugar Brownies</p>
                <p class="cart-price">10 SAR</p>


            </div>
            <hr>

            <div class="cart-item">
                <img src="img/caramel-brownie.jpeg" alt="caramel brownies">
                <p class="p-name">Caramel Brownies</p>
                <p class="cart-price">14 SAR</p>


            </div>
            <hr>


        </form>
    </section>

    <section class="cart-summary">
        <form action="action_page.php">

            <h1>Summary</h1>
            <hr>
            <p><b>Item(s): </b>24 SAR</p>
            <p><b>Delivery: </b>15 SAR</p>
            <p><b>VAT: </b>3.6 SAR</p>
            <hr>
            <p><b>Total: </b>42.6 SAR</p>
            <hr>
            <div class="clearfix">
                <button type="submit" style="margin:auto">Proceed to checkout</button>
            </div>

        </form>
    </section>

</body>

<footer>
    <ul class="footer-menu">
        <li><a href="">About</a></li>
        <li><a href="">Contact us</a></li>
        <li><a href="">something</a></li>
        <li><a href="">anything</a></li>
    </ul>
</footer>

</html>