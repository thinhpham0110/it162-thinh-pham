<header>

    <h1 class="logo">
        <a href="index.php" <?= $logo_color ?>>
            <i class="logo fa <?= $logo ?>" <?= $logo_color ?>></i>
            Pham Thinh's IT162 Website
        </a>
    </h1>
    <nav>
        <div class="navbar__container">
            <ul class="navbar__list" id="myTopnav">
                <?= makeLinks($nav1) ?>
                <!-- <li class="navbar__item">
                    <a href="index.php" class="navbar__link">Welcome</a>
                </li>
                <li class="navbar__item">
                    <a href="big/index.php" class="navbar__link">Big</a>
                </li>
                <li class="navbar__item">
                    <a href="aia.php" class="navbar__link">AIA</a>
                </li>
                <li class="navbar__item">
                    <a href="flowchart.php" class="navbar__link">Flowchart/Layout</a>
                </li>
                <li class="navbar__item">
                    <a href="fp/index.php" class="navbar__link">Final Project</a>
                </li>
                <li class="navbar__item">
                    <a href="contactme.php" class="navbar__link">Contact Pham Thinh</a>
                </li> -->
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
        </div>
    </nav>
</header>