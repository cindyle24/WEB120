<?php include 'big-config.php'?>
<!doctype html>
<html>
<head>
<title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
<!-- START Wrapper -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i>Cindy Le's Web Examples</a></h1>
  <nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="flexbox.php"><span>Flexbox</span></a></li>
     <li><a href="galleries.php"><span>Galleries</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="map.php"><span>Map</span></a></li>
           <li><a href="calendar.php"><span>Calendar</span></a></li>
           <li><a href="youtube.php"><span>YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
     <li><a href="siteapp.php"><span>Site vs App</span></a></li>
     <li><a href="webcam.php"><span>Web Cam</span></a></li>
  </ul>
</nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>
 
 <!-- My header.php include ends here -->
