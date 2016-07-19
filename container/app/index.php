<!DOCTYPE html>
<html>
<head profile="http://www.w3.org/2005/10/profile">
    <link rel="icon" type="image/png" href="img/heart.png">
    <title>M & A</title>
</head>
<body>

<?php

require_once "vendor/autoload.php";

use InstagramScraper\Instagram;

$medias = Instagram::getMediasByTag('sea', 30);

foreach ($medias as $key => $media) {
    echo '<img src="'. $media->imageStandardResolutionUrl . '"/></br>';
}
?>
</body>
</html>