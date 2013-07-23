<!DOCTYPE html>
<html>
	<head>
		<title>Het Truyenhof</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic|Telex' rel='stylesheet' type='text/css'>
      <script "js/modernizr.js" type="text/javascript"></script>
	</head>
<body>
	<div class="container">
		<?php include 'inc/header.php'; ?>

<div class="content">
    	  
<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="active item">
       <img src="img/slide-01.jpg">
       <div class="carousel-caption">
          Home is where the horse is
       </div>
    </div>
    <div class="item">
       <img src="img/slide-01.jpg">
       <div class="carousel-caption">
       Home is where the horse is
       </div>
    </div>
    <div class="item">
       <img src="img/slide-01.jpg">
       <div class="carousel-caption">
          Home is where the horse is
       </div>
    </div>
  </div>
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

      <div class="row">
        <div class="span4">
             <h2>News</h2>
        		<div class="post">
             <h4>Title of article goes here</h4>
             <h5>17 April 2013</h5>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. <a href="#">...continue</a></p>
				</div>
        		<div class="post">
             <h4>Title of article goes here</h4>
             <h5>17 April 2013</h5>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. <a href="#">...continue</a></p>
				</div>
        		<div class="post">
             <h4>Title of article goes here</h4>
             <h5>17 April 2013</h5>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. <a href="#">...continue</a></p>
				</div>
            <hr>
            <a href="#">VIEW ALL NEWS</a>
        </div>
        <div class="span4">
             <h2>Upcoming Shows</h2>
        		<div class="post">
             <h4>Title of article goes here</h4>
             <h5>17 April 2013</h5>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. <a href="#">...continue</a></p>
				</div>
        		<div class="post">
             <h4>Title of article goes here</h4>
             <h5>17 April 2013</h5>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. <a href="#">...continue</a></p>
				</div>
            <hr>
            <a href="#">VIEW ALL SHOWS</a>
       </div>
        <div class="span4">
          <h2>Sale Horses</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <hr>
          <a href="#">SALE HORSES</a>
        </div>
      </div>

</div>

	<?php include 'inc/footer.php'; ?>
    <script>
	 $(document).ready(function() {
		 	$('.carousel').carousel();
		 });
	 </script>
</body>
</html>