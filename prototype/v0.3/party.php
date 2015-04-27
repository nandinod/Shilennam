<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'backend/DB_CN.php';
	?>
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

	<style type="text/css">
		.gov-party-lists {
			background: url("../res/patt/swirl_pattern2.png") repeat;
			padding-top: 20px;
			padding-bottom: 20px;
		}
		.gov-party-lists .gov-party-lists-item {
			width: 100%;
			background-color: #FAFAFA;
		}
		.gov-party-lists .gov-party-lists-item .party-img {
			width: 35%;
		}
		.gov-party-lists .gov-party-lists-item .party-desc {
			width: 60%;
			margin-left: 5%;
		}
	</style>
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

	
	<!-- Party detailed information goes here! -->

	<div class="container" id="party">
		
		<?php
			$party_finance_list = new db_cn\Table("party_financial_list");
			$finance = new db_cn\Table("finance");
  		$party = new db_cn\Table("party");
  		$income = new db_cn\Table("income");
  		$outcome = new db_cn\Table("outcome");
  		$companies = new db_cn\Table("companies");
		?>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-5">
					<div class="party-img">
						<img src="res/party/democratic.png" alt="Neg Nam" class="img-responsive">
					</div>
				</div>
				<div class="col-lg-7">
					<div class="party-desc">
						<h2>Ардчилсан нам<small>(АН)</small></h2>
						<P><strong>Founded in 1987...</strong></P>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Consequatur vero, nihil nobis laboriosam, modi eos quisquam 
							eius odit repellendus animi suscipit quis nulla voluptatem adipisci.!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="table-responsive">
					<table class="table table-condensed table-striped table-bordered table-hover">
						<tr>
			      			<th><a href='parties.php?'>Улс төрийн нам</a></th>
			      			<th><a href='economics.php#eco?'>Нийт санхүүжилт</a></th>
			      			<th><a href='economics.php#eco?'>Нийт үрэлт</a></th>
			      			<th><a href='economics.php#eco?'>Бэлэн байгаа</a></th>
			      			<th><a href='economics.php#eco?'>Өр зээл</a></th>
			      		</tr>
						<?php
							$result = $party_finance_list->select("financeid,partyid,outcomeid,incomeid");
				      		foreach ($result as $res) {
				      			$finance_res = $finance->selectFirst("debt,remaining", "id = ".$res['financeid']);
				      			$party_res =$party->selectFirst("id, title, acronym", "id = ".$res['partyid']);
				      			$outcome_res = $outcome->selectFirst("total", "id = ".$res['outcomeid']);
				      			$income_res = $income->selectFirst("total", "id = ".$res['incomeid']);

				      			echo "<tr>";
				      			echo "<td title='".$party_res['acronym']."'><a href='party.php?p_id=".$party_res['id']."'>".$party_res['title']."</a></td>";
				      			echo "<td>".$income_res['total']."</td>";
				      			echo "<td>".$outcome_res['total']."</td>";
				      			echo "<td>".$finance_res['remaining']."</td>";
				      			echo "<td>".$finance_res['debt']."</td>";
				      			echo "</tr>";
				      		}
						?>
					</table>
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