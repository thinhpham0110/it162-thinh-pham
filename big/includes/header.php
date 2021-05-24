<?php include "./includes/config.php" ?>
<!doctype html>
<html>

<head>
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/base.css">

</head>

<body>
    <div class="wrapper">
        <header>
            <h1 class="logo">
                <a href="index.php">
                    <i class="logo fa <?= $logo ?>"></i>Thinh Pham Big's Website
                </a>
            </h1>
            <nav class="navbar__container">
                <ul class="navbar__list" id="myTopnav">
                    <li class="navbar__item">
                        <a class="navbar__link" href="../index.php"><span><i class="fa fa-fw fa-bank "></i> WEB120 Portal</span></a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="flexbox.php"><span>Flexbox</span></a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="galleries.php"><span>Galleries</span></a>
                    </li>
                    <li class="navbar__item navbar__dropdown">
                        <a class="navbar__item" href="#" id="google-menu-btn">
                            <span>
                                <i class="fa fa-fw fa-chevron-down"></i> Google
                            </span>
                        </a>
                        <ul class="navbar__dropdown__list" id="google-menu-list">
                            <li>
                                <a href="map.php"><span>Map</span></a>
                            </li>
                            <li>
                                <a href="calendar.php"><span>Calendar</span></a>
                            </li>
                            <li>
                                <a href="youtube.php"><span>YouTube</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="parallax.php"><span>Parallax</span></a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="shoppingcarts.php"><span>Shopping Carts</span></a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="siteapp.php"><span>Site vs App</span></a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="webcam.php"><span>Web Cam</span></a>
                    </li>
                </ul>
                <div class="navbar-btn-wrapper" id="navbar-btn">
                    <div class="navbar-btn"></div>
                    <div class="navbar-btn"></div>
                    <div class="navbar-btn"></div>
                    <div class="navbar-btn"></div>
                    <div class="navbar-btn"></div>
                    <div class="navbar-btn"></div>
                    <div class="navbar-btn"></div>
                    <div class="navbar-btn"></div>
                    <div class="navbar-btn"></div>
                </div>
            </nav>
        </header>
        <div class="bg-an">

            <video playsInline autoPlay muted loop>
                <source src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/items/1038300/92d5ddc8cba02d80b8e7d2f91f1586f40b5030be.webm" type="video/webm" />
                <source src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/items/1038300/45ca58605e6a2ab1b1032eb1b1043bac56b3158f.mp4" type="video/mp4">
            </video>
        </div>