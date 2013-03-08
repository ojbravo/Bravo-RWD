<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">

<meta name="description" content="<?php echo $description ?>" />
<meta name="keywords" content="Responsive Web Design, Web Development, Digital Marketing, Freelance Web Designer, St. Petersburg, FL" />
<title><?php echo $title ?></title>

<meta name="robots" content="all" />
<meta name="author" content="Omar Jesus Bravo, Bravo DMS" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

<!-- Facebook Tags -->
<meta property="fb:admins" content="Facebook Username"/>
<meta property="og:title" content="Website Name"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://www.MyDomain.com/"/>
<meta property="og:image" content="http://www.MyDomain.com/images/fb-icon.jpg"/>
<meta property="og:site_name" content="Website Name | Slogan"/>
<meta property="og:description"
      content="This is what my site is all about."/>
      

<link rel="shortcut icon" type="image/x-icon" href="http://www.bravodms.com/images/favicon.ico"  />
<link rel="icon" type="image/x-icon" href="http://www.bravodms.com/images/favicon.ico"  />
<link rel="stylesheet" type="text/css" href="style.css" />

<!--[if lt IE 9]>
    <script type="text/javascript" src="includes/html5shiv.js"></script>
    <script type="text/javascript" src="includes/respond.min.js"></script>
<![endif]-->

</head>

<body>
<nav id="sideNav" class="side-nav-closed">
    <a id="dms-menu-logo" href="index.php">
        <img src="images/bravodms-menu-logo.png" alt="Bravo DMS Menu"> Menu
    </a>
	<?php include "navigation.php" ?>
</nav>

<div id="mainPage" class="main-page-open">
	<div class="mobile-menubar">				
        <div id="open-menu">
            <a onclick="openMenu();" class="menu-icon">
               <i class="icon-reorder "></i>
            </a>
            <div id="dms-logo">
                <a href="#">
                    <img src="images/bravodms-logo.png" alt="Bravo DMS Logo">
                </a>
            </div>
            <div class="clr"></div> 
        </div>
        <div id="close-menu" style="display:none;">
            <a onclick="closeMenu();" class="menu-icon">
                <i class="icon-reorder"></i>
            </a><div id="dms-logo">
                <a href="#">
                    <img src="images/bravodms-logo.png" alt="Bravo DMS Logo">
                </a>
            </div>
            <div class="clr"></div> 
        </div>
    </div><!-- end mobile-menubar -->
    <div class="c90ip float-center">
        <a id="dms-logo" href="#">
            <img src="images/bravodms-logo.png" alt="Bravo DMS Logo">
        </a>
    </div>
    <div class="clr"></div>
    <nav id="mainNav">
        <div class="c90ip float-center">

            <?php include "navigation.php" ?>
            <div class="clr"></div>
            
            
        </div>
    </nav>
    
    <div class="line clr"></div>











