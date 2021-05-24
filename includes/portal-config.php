<?php
ob_start();

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;


switch (THIS_PAGE) {

    case 'index.php':
        $title = "Pham Thinh | IT162 Portal";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $style = "portal.css";
        $logo_color = 'style="color: #0984e3;"';

        break;
    case 'contactme.php':
        $title = "Pham Thinh | Contact Me";
        $logo = 'fa-phone';
        $PageID = 'Contact Pham Thinh';
        $style = "portal.css";
        $logo_color = 'style="color:#34495e;"';
        break;
    case 'aia.php':
        $title = "Pham Thinh | AIA";
        $logo = 'fa-microchip';
        $PageID = 'AIA';
        $style = "portal.css";
        $logo_color = 'style="color: #e74c3c;"';
        break;
    case 'flowchart.php':
        $title = "Pham Thinh | Flowchart";
        $logo = 'fa-bar-chart';
        $PageID = 'Flowchart';
        $style = "portal.css";
        $logo_color = 'style="color: #1abc9c;"';
        break;
    default:
        $title = THIS_PAGE;
        $logo = '';
        $logo_color = '';
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
function makeLinks($linkArray)
{
    $myReturn = '';
    foreach ($linkArray as $url => $text) {
        if ($url == THIS_PAGE) { //selected page - add class reference
            $myReturn .= "<li class=\"navbar__item\"> <a href=\"$url\" class=\"navbar__link selected\" >$text</a> </li>";
        } else {
            $myReturn .= "<li class=\"navbar__item\"> <a href=\"$url\" class=\"navbar__link\">$text</a> </li>";
        }
    }

    return $myReturn;
}
