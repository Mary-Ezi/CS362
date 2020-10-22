<?php
/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Mary's IT162 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';

    break;
    case 'contactme.php':
        $title = "Mary's IT162 Title Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Mary';
        /*$logo_color = ' style="color:#00f"';*/

    break;  
    case 'flowchart.php':
        $title = "Mary'sIT162 Contact Page";
        $logo = 'fa-clone';
        $PageID = 'Flowchart';
       /* $logo_color = ' style="color:#0f0"';*/
    break;

     case 'big/index.php':
        $title = "Mary's IT162 Title Page";
        $logo = 'fa-bookmark';
        $PageID = 'Big';

    break; 
     case 'aia.php':
        $title = "Mary's IT162 Title Page";
        $logo = 'fa-universal-access';
        $PageID = 'AIA';

    break; 
    case 'fp/index.php':
        $title = "Mary's IT162 Contact Page";
        $logo = 'fa-tasks';
        $PageID = 'Final Project';
    break;
    

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';

}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Mary";

/* here we are creating a function to generate links and keep the highlight on the current page
<li><a href="index.php" class="selected">Welcome</a></li>
              <li><a href="aia.php">AIA</a></li>
              <li><a href="big.php">BIG</a></li>
              <li><a href="flowchart.php">Flowchart</a></li>
              <li><a href="fp.php">Final Project</a></li>
              <li><a href="contactme.php">Contact Mary</a></li>

*/
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>

