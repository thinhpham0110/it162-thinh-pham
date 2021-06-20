<div class="top-bg">
    <img src="./assets/images/banner.jpg" alt="banner" class="object-cover w-full h-96 md:h-banner" />
</div>
<nav class="navbar">
    <a href="index.php" class="navbar__logo">
        <img src="./assets/icons/logo.svg" alt="logo" class="" />
    </a>
    <div class="navbar__side space-x-8">
        <ul class="navbar__menu space-x-8" id="navbar__menu">

            <li class="p-2 navbar__item duration-200 hover:text-green-700 hover:bg-white">
                <a href="order.php" class="block h-full">
                    MENU
                </a>
            </li>
            <li class="p-2 navbar__item duration-200 hover:text-green-700 hover:bg-white">
                <a href="store.php" class="block h-full">
                    STORE
                </a>
            </li>
            <li class="p-2 navbar__item duration-200 hover:text-green-700 hover:bg-white">
                <a href="about.php" class="block h-full">
                    ABOUT
                </a>
            </li>
            <li class="p-2 navbar__item duration-200 hover:text-green-700 hover:bg-white">
                <a href="contact.php" class="block h-full">
                    CONTACT
                </a>
            </li>
        </ul>
        <ul class="navbar__social space-x-8 ">
            <li>
                <a href="https://www.facebook.com">
                    <img src="./assets/icons/facebook.svg" alt="facebook" />
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com">
                    <img src="./assets/icons/instagram.svg" alt="instagram" />
                </a>
            </li>
            <li>
                <button class="md:hidden focus:outline-none">
                    <img src="./assets/icons/btn.svg" alt="instagram" id="navbar" />
                </button>
            </li>
        </ul>
    </div>
</nav>
<h1 class="navbar__page"><?= $pageID ?></h1>