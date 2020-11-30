<?php
/*
Big-Config

Used to store all of our IT162 configuration information

*/

//place your site keys here (keys for web-students.net posted here)
//$siteKey = "6LcgUNkZAAAAAFatdMhEU2NcBzIZ7qFw_urrRWW4";
//$secretKey = "6LcgUNkZAAAAAA8_XE72n_6YQIh7JSxRFCZn7Nlj";
//date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website
//$server = 'hostgator.com';
////end config area ----------------------------------------

//prevents data from being sent early
//ob_start();
//place your site keys here (keys for web-students.net posted here)
//$siteKey = "6LcgUNkZAAAAAFatdMhEU2NcBzIZ7qFw_urrRWW4";
//$secretKey = "6LcgUNkZAAAAAA8_XE72n_6YQIh7JSxRFCZn7Nlj";
//date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website
//$server = 'hostgator.com';
//end config area ----------------------------------------


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Web Dev Examples by Mary";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';

    break;
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Flexbox Research';
        /*$logo_color = ' style="color:#00f"';*/

    break;  
    case 'galleries.php':
        $title = "Galleries";
        $logo = 'fa-clone';
        $PageID = 'Galleries';
       /* $logo_color = ' style="color:#0f0"';*/
    break;

     case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa-bookmark';
        $PageID = 'Google Calendar';

    break; 
     case 'map.php':
        $title = "Google Map";
        $logo = 'fa-universal-access';
        $PageID = 'Google Map';
        $logo_color = ' style="color:#0f0"';

    break; 
    case 'youtube.php':
        $title = "Wordpress Intro Vide";
        $logo = 'fa-tasks';
        $PageID = 'Google Youtube"';
    break;
        
    case 'shoppingcarts.php':
        $title = "Shopping cart Research";
        $logo = 'fa-tasks';
        $PageID = 'Shopping cart Research';
    break;   
        
     case 'siteapp.php':
        $title = "Responsive site v.s. Native App";
        $logo = 'fa-tasks';
        $PageID = 'Responsive site v.s. Native App';
    break; 
        
     case 'webcam.php':
        $title = "Live Web Cameras";
        $logo = 'fa-tasks';
        $PageID = 'Live Web Cameras';
    break; 
        
    

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

?>

