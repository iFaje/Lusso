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

    <section class="about">

        <h1>About LUSSO:</h1>

        <hr>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ligula eu erat eleifend, id interdum
            erat maximus. Quisque vehicula ullamcorper erat, quis rhoncus orci posuere in. Aliquam tincidunt, lorem eu
            suscipit lacinia, ante neque tincidunt justo, ac blandit ex justo vitae est. Curabitur et ex tristique massa
            rhoncus ullamcorper. Sed ex ligula, lobortis nec gravida vitae, elementum id libero. Phasellus eget elit
            venenatis, sodales quam at, porta tellus. Pellentesque a maximus diam. Aliquam quis faucibus purus.
        </p>

        <p> Nullam at lacus justo. Nulla augue augue, scelerisque sed volutpat at, pretium nec augue. Mauris interdum
            augue in placerat dapibus. Donec auctor purus non est egestas eleifend. Morbi euismod, purus non gravida
            auctor, libero ex condimentum lorem, non pharetra elit augue ut justo. Mauris at feugiat metus, at congue
            purus. Praesent iaculis fermentum dolor id suscipit. Curabitur eu lacus et sapien tempor posuere. Quisque
            rhoncus sem quis fermentum gravida. Suspendisse congue purus diam, vel suscipit lacus tincidunt molestie.
            Vivamus suscipit nunc quis iaculis aliquam.</p>

        <p> Nullam consequat leo in augue vehicula commodo. Sed quis tempor arcu. Sed pulvinar, orci sit amet finibus
            rhoncus, libero mauris elementum leo, eu elementum eros quam ut lectus. Quisque non pharetra est. Duis
            mollis vel enim at cursus. Phasellus ultricies, felis ac condimentum facilisis, nisl ligula blandit sem, id
            rutrum lorem elit a metus. Aenean vitae est tempor, tincidunt lacus non, vulputate nunc. Nulla vel augue
            lacinia, mattis nulla in, posuere ante. Cras egestas maximus libero vel pretium.</p>
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