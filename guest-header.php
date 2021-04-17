<header class="nav-bg sticky-top">
    <!--nav 1-->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div>
            <!--logo-->
            <div class="logo"><a href="index.php">LU<span>SS</span>O</a></div>
        </div>
        <!--search bar-->
        <div class="d-md-flex d-none ml-auto search-box">
            <div class="search">
                <i class="fa fa-search"></i>
                <input id="search-input" type="text" placeholder="Search">
            </div>
        </div>
        <!--sign in btn-->
        <a class="ml-auto" href="signin.php">
            <div class="d-sm-flex d-none sign">
            Sign In
            </div>
        </a>
        <!--cart btn-->
        <div class="d-sm-block d-none">
            <a href="cart.php">
                <div class="shopping-cart">
                    <img class="icon" src="img/cart-icon.png">
                </div>
            </a>
        </div>
        <!--sign up btn-->
        <a href="signup.php">
            <div class="d-sm-flex d-none sign">
            Sign Up
            </div>
        </a>
        <!--toggler button-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!--nav 2-->
    <nav class="navbar navbar-light">
        <!--menu for small screen-->
        <div class="collapse navbar-collapse sign-menu" id="collapsibleNavbar">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a href="signin.php" class="nav-link">Sign In</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link">Cart</a>
                </li>
            </ul>
        </div>

    </nav>
    <!--social media bar-->
    <div class="d-sm-block d-none social">
        <a href="#"><i class="fa fa-snapchat"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class=" fa fa-instagram"></i></a>
        <a href="#"><i class=" fa fa-whatsapp"></i></a>
    </div>
</header>