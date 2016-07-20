<?php    

    require_once "vendor/autoload.php";

    use InstagramScraper\Instagram;
?>
<!DOCTYPE html>
<html>
<head profile="http://www.w3.org/2005/10/profile">
  <title>M & A</title>
  <link rel="icon" type="image/png" href="img/heart.png">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="css/polaroid.css"/>
  <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
</head>
<body>
  <script type="text/javascript" src="lib/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="lib/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="lib/slick.min.js"></script>
  <script type="text/javascript" src="lib/margus.js"></script>

<div id="polaroid" class="instaslider">
<?php

    $medias = Instagram::getTopMediasByTagName('wood');
    foreach ($medias as $key => $media) {        
        echo '<figure>';        
        echo '<img src="'. $media->imageStandardResolutionUrl . '" width="100%"/>';
        echo '<figcaption>'. $media->caption . '</figcaption>';
        echo '</figure>';      
    }
    echo '<figure height="600">';        
    echo '<img src="img/margus.png" width="100%"/>';
    echo '<figcaption><a href="index_all.php"><h1>Quieres más?</h1></a></figcaption>';
    echo '</figure>'; 
?>
</div>
</body>
</html>