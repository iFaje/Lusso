<?php

session_start();
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
</head>

<header>
    <section class="main">
        <div class="logo"><a href="index.php">LU<span>SS</span>O</a></div>

        <div class="side-box">
            <div class="search">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search">
            </div>
        </div>

        <a href="cart.php">
            <div class="shopping-cart">
                <img class="icon" src="img/cart-icon.png" alt="">
            </div>
        </a>

        <a href="signin.php">
            <div class="sign-in">
                Sign In
            </div>
        </a>

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

    <section class="manage-users">

        <h1>Manage Users</h1>

        <hr>

        <form action="action_page.php">

            <label for="userID" style="margin:auto;"><b>User ID:</b></label>
            <input type="text" placeholder="Enter User ID" name="userID" style="margin-bottom: 15px;" required>
            <div class="clearfix">
                <button type="submit">Submit</button>
            </div>
        </form>

        <hr>

        <table class="user-table">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone#</th>
            </tr>
            <tr>
                <td>584796</td>
                <td>Mohammed</td>
                <td>Abdullah</td>
                <td>email@email.com</td>
                <td>0560000000</td>
            </tr>
        </table>

        <div class="clearfix">
            <button type="submit" style="margin-top: 20px; margin-left: auto; margin-right: auto;">Block User</button>
        </div>

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