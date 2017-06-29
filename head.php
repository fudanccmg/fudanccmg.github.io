<!doctype html>
<html class="no-js">
<?php date_default_timezone_set('Asia/Shanghai');
ini_set("display_errors", "Off");?>

<head>
  <meta charset="utf-8" />
  <title>CONPUTATIONAL CONDENCED MATTER GROUP</title>
  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <link rel="stylesheet" media="all" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
  <!-- JS -->
  <script src="js/jquery-1.6.4.min.js"></script>
  <script src="js/css3-mediaqueries.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/tabs.js"></script>
  <!-- Tweet -->
  <link rel="stylesheet" href="css/jquery.tweet.css" media="all" />
  <script src="js/tweet/jquery.tweet.js"></script>
  <!-- ENDS Tweet -->
  <!-- superfish -->
  <link rel="stylesheet" media="screen" href="css/superfish.css" />
  <script src="js/superfish-1.4.8/js/hoverIntent.js"></script>
  <script src="js/superfish-1.4.8/js/superfish.js"></script>
  <script src="js/superfish-1.4.8/js/supersubs.js"></script>
  <!-- ENDS superfish -->
  <!-- prettyPhoto -->
  <script src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
  <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" media="screen" />
  <!-- ENDS prettyPhoto -->
  <!-- poshytip -->
  <link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css" />
  <link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css" />
  <script src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
  <!-- ENDS poshytip -->
  <!-- GOOGLE FONTS
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>-->
  <link href='css/googlefont.css' rel='stylesheet' type='text/css'>
  <!-- Flex Slider -->
  <link rel="stylesheet" href="css/flexslider.css">
  <script src="js/jquery.flexslider-min.js"></script>
  <!-- ENDS Flex Slider -->
  <!-- Less framework -->
  <link rel="stylesheet" media="all" href="css/lessframework.css" />
  <!-- modernizr -->
  <script src="js/modernizr.js"></script>
  <!-- SKIN -->
  <link rel="stylesheet" media="all" href="css/skin.css" />
  <!-- reply move form -->
  <script src="js/moveform.js"></script>
</head>

<body lang="en">
  <header class="clearfix">
    <div class="wrapper  clearfix">
      <a href="index.php" id="logo">
        <img src="img/logo.png" alt="Zeni">
      </a>
      <nav>
        <ul id="nav" class="sf-menu">
          <?php
$url      = $_SERVER['PHP_SELF'];
$filename = substr($url, strrpos($url, '/') + 1);
$a        = array("index.php", "xingao-gong.php", "publications.php", "groupmembers.php", "contact.php", "teaching.php", "fist.php");
$b        = array("HOME", "XIN-GAO GONG", "PUBLICATIONS", "GROUP MEMBERS", "CONTACT", "TEACHING", "FIST");
for ($i = 0; $i < count($a); $i++) {
    if ($filename == $a[$i]) {
        echo '<li class="current-menu-item">';
    } else {
        echo '<li>';
    }
    echo '<a href="' . $a[$i] . '">' . $b[$i] . '</a></li>';
}
?>
        </ul>
        <div id="combo-holder"></div>
      </nav>
    </div>
  </header>
