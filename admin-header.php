<header class="nav-bg sticky-top">
    <!--nav 1-->
    <nav class="navbar navbar-expand-md navbar-light">
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
        <!--logout btn-->
        <a class="ml-auto" href="logout.php">
            <div class="d-md-flex d-none sign">
            Log Out
            </div>
        </a>
        <!--toggler button-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!--nav 2-->
    <nav class="navbar navbar-light navbar-expand-md">
        <!--menu for small screen-->
        <div class="collapse navbar-collapse sign-menu" id="collapsibleNavbar">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Staff</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Users</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Orders</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Reports</a>
                </li>
                <li class="nav-item d-md-none d-flex">
                    <a href="logout.php" class="nav-link">Log Out</a>
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