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

        <a href="signin.php">
            <div class="sign-in">
                Sign In
            </div>
        </a>
            <a href="cart.php">
                <div class="shopping-cart">
                    <img class="icon" src="img/cart-icon.png" alt="">
                </div>
            </a>

            <a href="signup.php">
                <div class="sign-up">
                    Sign Up
                </div>
            </a>
            <div class="main-img">
                <img src="img/logo-transparent.png" alt="MAIN IMG">
            </div>
            <div class="main-text">
                <h1>Lu<span>ss</span>o</h1>
                <h2>Collec<span>ti</span>on</h2>
                <a href="#" class="main-btn">details</a>
            </div>


    </section>
	  <section class="our-brand">

    </section>
<body >
<div class="addStaff-page">
 <section class="addStaff-page">
        <form action="action_page.php">
            <div class="form-container">
                <h1>add staff</h1>
                <p> The provided user id will acquire checked permessions</p>
                <hr>

                <label for="name"><b>User ID</b></label>
                <input type="text" placeholder="Enter User ID" name="userId" required>

				<b> permessions </b><br>


				<input type="checkbox" id="add_products_permession"  value="true">
				<label> add products </label><br>
				<input type="checkbox" id="edit_products_permession"  value="true">
				<label> Edit products </label><br>
				<input type="checkbox" id="remove_products_permession"  value="true">
				<label> remove products </label><br>
				<input type="checkbox" id="add_coupon_permession"  value="true">
				<label > add coupons </label><br>
				<input type="checkbox" id="ban_users_permession"  value="true">
				<label > ban users </label><br> <br>

				</form>

                <div class="clearfix">
                    <button type="submit" class="signupbtn">Add Staff</button>
                    <button type="button" class="cancelbtn" onclick="history.back()">Cancel</button>
                </div>

                <hr>



            </div>
        </form>
    </section>
</div>
</body>

</html>