<?php
ob_start();

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$actual_link = "https://www.thinhpham.website$_SERVER[REQUEST_URI]";


switch (THIS_PAGE) {

    case 'index.php':
        $title = "Pham Thinh | Big's Website";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        break;
    case 'flexbox.php':
        $title = "Pham Thinh | Flexbox Research";
        $logo = 'fa-archive ';
        $PageID = 'Flexbox Research';
        break;
    case 'galleries.php':
        $title = "Pham Thinh | Galleries and Sliders";
        $logo = 'fa-microchip';
        $PageID = 'Galleries and Sliders';
        break;
    case 'map.php':
        $title = "Pham Thinh | Google Map";
        $logo = 'fa-map-o';
        $PageID = 'Google Map';
        break;
    case 'calendar.php':
        $title = "Pham Thinh | Google Calendar";
        $logo = 'fa-calendar-o';
        $PageID = 'Google Calendar';
        break;
    case 'youtube.php':
        $title = "Pham Thinh | Google Youtube Video";
        $logo = 'fa-youtube-play';
        $PageID = 'Google Youtube Video';
        break;
    case 'parallax.php':
        $title = "Pham Thinh | Parallax Research";
        $logo = 'fa-microchip';
        $PageID = 'Parallax Research';
        break;
    case 'shoppingcarts.php':
        $title = "Pham Thinh | Shopping Cart Research";
        $logo = 'fa-cart-plus';
        $PageID = 'Shopping Cart Research';
        break;
    case 'siteapp.php':
        $title = "Pham Thinh | Responsive Site v.s. Native App";
        $logo = 'fa-balance-scale';
        $PageID = 'Responsive Site v.s. Native App';
        break;
    case 'webcam.php':
        $title = "Pham Thinh | Live Web Cameras";
        $logo = 'fa-camera';
        $PageID = 'Live Web Cameras';
        break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        break;
}


$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Thinh Pham";

// function makeLinks($nav1)
// {
//     $myReturn = '';
//     foreach ($nav1 as $url => $text) {
//         if ($url == THIS_PAGE) {
//             $myReturn = "<li class=\"navbar__item selected\"> <a href=\"$url\" class=\"navbar__link\">$text</a> </li>";
//         } else
//             $myReturn = "<li class=\"navbar__item\"> <a href=\"$url\" class=\"navbar__link\">$text</a> </li>";
//     }
//     return $myReturn;
// }
