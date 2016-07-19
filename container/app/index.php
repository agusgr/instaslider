<?php    

    require_once "vendor/autoload.php";

    use InstagramScraper\Instagram;
?>
<!DOCTYPE html>
<html>
<head profile="http://www.w3.org/2005/10/profile">
    <link rel="icon" type="image/png" href="img/heart.png">
    <title>M & A</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <style>
      .carousel-inner > .item > img,
      .carousel-inner > .item > a > img {
          width: 70%;
          margin: auto;
      }
      </style>
</head>
<body>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
<?php

    $class = 'active';
    for ($x = 0; $x < 9; $x++) {
        echo '<li data-target="#myCarousel" data-slide-to="'.  $x  . '" class="'. $class .'"></li>';
        $class = '';
    }

?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

<?php

    $medias = Instagram::getTopMediasByTagName('wood');
    $class = 'active';
    foreach ($medias as $key => $media) {
        echo '<div class="item '. $class .'">';
        echo '<img src="'. $media->imageStandardResolutionUrl . '"width="460" height="345">';
        echo '<div class="carousel-caption">';
        echo '<p>'. $media->caption .'</p>';
        echo '</div>';
        echo '</div>';
        $class = '';
    }
?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>