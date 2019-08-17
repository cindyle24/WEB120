<?php
/* BIG CONFIG */
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */
//Here are the keys for the server: cbleonline.com
$siteKey = "6Lesc7MUAAAAAP_yni-OZf8uwU1bYZQ_ryKIr-48";
$secretKey = "6Lesc7MUAAAAAOBL_e3ZkiRsRjxRHLJ205jqaQaM";
//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');
// echo basename($_SERVER['PHP_SELF']); /* current name of page*/
// die;
define ('THIS_PAGE', basename($_SERVER['PHP_SELF'])); /*this URL*/
//echo "constant: " . THIS_PAGE;
//die;
switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Cindy Le: WEB120 Portal Website';
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire Form';
    break;
        
    case 'flexbox.php':
        $title = "Cindy Le's Flexbox Research";
        $logo = "";
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = "Cindy Le's Galleries Research";
        $logo = "";
        $PageID = 'Galleries Research';
    break;
        
    case 'map.php':
        $title = "Cindy Le's Google Maps";
        $logo = "";
        $PageID = 'Google Maps';
    break;
        
    case 'calendar.php':
        $title = "Cindy Le's Event Calendar";
        $logo = "";
        $PageID = 'Event Calendar';
    break;
    case 'youtube.php':
        $title = "Cindy Le's Youtube";  
        $logo = "";
        $PageID = 'Youtube';
    break;
    case 'shoppingcarts.php':
        $title = "Cindy Le's Shopping Cart Research";
        $logo = "";
        $PageID = 'Shopping Cart Research';
    break;
    case 'siteapp.php':
        $title = "Cindy Le's Responsive Website vs. Native Mobile App";
        $logo = "";
        $PageID = 'Responsive Website vs. Native Mobile App';
    break;    
        
    case 'webcam.php':
        $title = "Cindy Le's Web Cam Examples";
        $logo = "";
        $PageID = 'Examples of Web Cams';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
    break;    
}
