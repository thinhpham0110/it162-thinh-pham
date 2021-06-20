<?php
ob_start();



define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$actual_link = "https://www.thinhpham.website$_SERVER[REQUEST_URI]";


switch (THIS_PAGE) {

    case 'index.php':
        $title = "Milk Me Over Tea";
        $pageID = 'Home';
        break;
    case 'order.php':
        $title = "Order | Milk Me Over Tea";
        $pageID = 'Order Your Favorite';
        break;
    case 'about.php':
        $title = "About | Milk Me Over Tea";
        $pageID = 'About Us';
        break;
    case 'store.php':
        $title = "Store | Milk Me Over Tea";
        $pageID = 'Find Our Store';
        break;
    case 'contact.php':
        $title = "Contact | Milk Me Over Tea";
        $pageID = 'Contact Us';
        break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        break;
}

$siteKey = "6LddOqwaAAAAAFgdTccUkkXQLw0RT6Xuy7LlhB5c";
$secretKey = "6LddOqwaAAAAAKG8iw4sH7svQvGgZJ296AN9zBwy";
