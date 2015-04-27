<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Шилэн Нам</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Css -->
	<link rel="stylesheet" href="css/global.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<header>
		<div class="row-quick-link">
			<div class="container">
				<div class="pull-left">
					<a href="#" class="btn btn-sm">Тусламж</a>
					<a href="#" class="btn btn-sm">Бидэнтэй холбогдох</a>
					<a href="manage/" class="btn btn-sm">Менежмент</a>
				</div>
				<div class="pull-right">
					<a href="https://www.facebook.com/pages/Shilennam/633649973430676" target="_blank" class="btn btn-sm"><img class='img-responsive' src="res/png/fb-white.png" alt="png"></a>
					<a href="https://twitter.com/shilennam" target="_blank" class="btn btn-sm"><img class='img-responsive' src="res/png/twitter-white.png" alt="png"></a>
					<a href="#" class="btn btn-sm">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="row-menu">
			<nav class="navbar navbar-default navbar-md">
				<div class="container">
					<div id="generated-menus">
						<div class="navbar-header">
							<a href="index.php" class="navbar-brand">Шилэн Нам</a>
						</div>
						<ul class="nav navbar-nav">
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">НАМУУДЫН САНХҮҮЖИЛТ <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">УЛСЫН ТӨСӨВ</a></li>
									<li><a href="#">ХАНДИВААР</a></li>
									<li><a href="#">ГИШҮҮДИЙН ТАТВАР</a></li>
									<li><a href="#">ХУУЛИАР ЗӨВШӨӨРСӨН</a></li>
									<li><a href="#">БУСАД</a></li>
								</ul>
							</li>
							<li><a href="news.php#news">МЭДЭЭ МЭДЭЭЛЭЛ</a></li>
							<li><a href="laws.php#laws">ХУУЛИАС</a></li>
							<li><a href="#">УЛС ТӨРЧДИЙН ХАМААРАЛ</a></li>
							<li><a href="#">ХОЛБООСУУД</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>

		<div id="slide" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#slide" data-slide-to="0" class="active"></li>
		      <li data-target="#slide" data-slide-to="1"></li>
		      <li data-target="#slide" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">

		      <div class="item active">
		      	<img src="res/img/steppe2.jpg" alt="Steppe">
		      	<div class="carousel-caption">
		      		<h3>Something Something</h3>
		      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veritatis, tempora suscipit fugiat fugit nihil animi delectus, eum amet, dolorem laborum saepe eaque eius vero. Suscipit, illo quisquam facilis quibusdam.<br/><a href="#">Click Here</a> Now!</p>
		      		<blockquote>
				  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
						<footer>Someone <u>famous</u></footer>
					</blockquote>
		      	</div>
		      </div>

		      <div class="item">
		      	<img src="res/img/ub-day2.jpg" alt="UB Day">
		      	<div class="carousel-caption">
		      		<h3>Ulaanbaatar Day</h3>
		      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veritatis, tempora suscipit fugiat fugit nihil animi delectus, eum amet, dolorem laborum saepe eaque eius vero. Suscipit, illo quisquam facilis quibusdam.<br/><a href="#">Click Here</a> Now!</p>
		      		<blockquote>
				  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
						<footer>Someone <u>famous</u></footer>
					</blockquote>
		      	</div>
		      </div>

		      <div class="item">
		      	<img src="res/img/ub-night2.jpg" alt="UB Night">
		      	<div class="carousel-caption">
		      		<h3>Ulaanbaatar Night</h3>
		      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veritatis, tempora suscipit fugiat fugit nihil animi delectus, eum amet, dolorem laborum saepe eaque eius vero. Suscipit, illo quisquam facilis quibusdam.<br/><a href="#">Click Here</a> Now!</p>
		      		<blockquote>
				  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
						<footer>Someone <u>famous</u></footer>
					</blockquote>
		      	</div>
		      </div>
		  
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#slide" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#slide" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		</div>
	</header>

	<div class="content">
		<div class="container article" id="article">
			<div class="col-lg-9">
				<header class="well well-sm">
					<h3>Тэнгэрлэг сайхан ээжүүд баярын арга хэмжээ боллоо</h3>
					<span>2015 оны 3-р сарын 8</span>
					<img src="res/news/article1_img1.jpg" alt="Article 1">
				</header>
				<section class="well well-sm">
					<p>Тэнгэрлэг сайхан ээжүүд баярын арга хэмжээ боллоо Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</section>
				<footer>
					
				</footer>
			</div>
			<div class="col-lg-3">
				<div class="panel panel-primary tweets">
					<div class="panel-heading text-center">
						<img src="res/png/twitter-white.png" alt="twitter" class="left-block">
						<span>ХЭН ЮУ ГЭЖ ЖИРГЭВ?</span>	
					</div>
					<div class="panel-body">
						<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/shilennam" data-widget-id="577928259876225024">Tweets by @shilennam</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
				<div class="panel panel-default mini-poll">
					<div class="panel-heading text-center">
						<span>САНАЛ АСУУЛГА</span>
					</div>
					<div class="panel-body">
						<h5 class="text-center"><b>Шилэн Нам: </b>Таны бодлоор улс төрийн намуудын санхүүжилт ил тод байх ёстой юу?</h5>
						<form>
							<div class="radio"><label><input type="radio" name="poll">Тийм</label></div>
							<div class="radio"><label><input type="radio" name="poll">Үгүй</label></div>
							<div class="radio"><label><input type="radio" name="poll">Чухал биш</label></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer navbar navbar-fixed-bottom">
		<div class="container">
			<div class="row">
				<a href="index.php">ЭХЛЭЛ</a>
				<a href="economics.php#eco">НАМУУДЫН САНХҮҮЖИЛТ</a>
				<a href="news.php#news">МЭДЭЭ МЭДЭЭЛЭЛ</a>
				<a href="manage/">МЕНЕЖМЕНТ</a>
				<a href="laws.php#laws">ХУУЛИАС</a>
				<a href="#"><del>УЛС ТӨРӨГЧДИЙН ХАМААРАЛ</del></a>
				<a href="#"><del>ХОЛБООСУУД</del></a>
			</div>
			<div class="row">
				<i>Copyright© 2015 . Шилэн Данс</i>
			</div>
		</div>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.2.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Global Javascript and Jquery -->
	<script src="js/global.js"></script>
</body>
</html>