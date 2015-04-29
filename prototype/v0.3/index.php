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
				<?php
					$for_once = false;
					for ($a = 0; $a < 4; $a++) {
						$random3 = rand(1, 3);
				?>
				<div class="item <?php if ($for_once == false) { echo "active"; $for_once = true; } ?>">
			      	<img src="res/img/ub<?php echo $random3; ?>.jpg" alt="Steppe">
			      	<div class="carousel-caption">
						<?php
							$laws = new db_cn\Table("laws");
							$law = $laws->selectFirst("text,source", "id=".rand(1,25));
							echo "<h3>".$law['source']."</h3>";
							echo "<blockquote><a href='laws.php'>".$law['text']."</a></blockquote>";
						?>

			      	</div>
		      	</div>
		      	<?php 
		      		}
		      	?>
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

	<div class="row-gov-party">
		<div class="container-fluid">
			<h3 class="text-center"><a href="parties.php">Улс төрийн намууд</a></h3>
			<div class="row">
				<?php
					$party = new db_cn\Table("party");
					$results = $party->select("id,title", "1 limit 6");
                    foreach ($results as $res) {     
				?>
				<div class="col-sm-2">
					<div class="well well-md">
						<img class="img-responsive align-center" src="res/party/democratic.png" alt="Democratic Party">
						<h4 class='text-center'><a href="party.php?p_id=<?php echo $res['id']; ?>"><?php echo $res['title']; ?></a></h4>
					</div>
				</div>
                <?php
                    }
                ?>
			</div>
		</div>
	</div>

	<!-- <div class="row-gov-party-eco">
		<div class="container">
			<h3 class="text-center"><a href="economics.php#eco">Намуудын санхүүжилт</a></h3>
			<div class="table-responsive">
				<table class="table">
		      		<tr>
		      			<th><a href='parties.php?'>Улс төрийн нам</a></th>
		      			<th><a href='economics.php?year=2012#eco'>Нийт санхүүжилт</a></th>
		      			<th><a href='economics.php?year=2012#eco'>Нийт үрэлт</a></th>
		      			<th>Бэлэн байгаа</th>
		      			<th>Өр зээл</th>
		      		</tr>
			      	<?php
			      		// $finance = new db_cn\Table("finance");
			      		// $party = new db_cn\Table("party");
			      		// $income = new db_cn\Table("income");
			      		// $outcome = new db_cn\Table("outcome");
			      		// $list = new db_cn\Table("party_financial_list");
			      		// $result = $list->select("financeid,partyid,outcomeid,incomeid");
			      		// foreach ($result as $res) {
			      		// 	$finance_res = $finance->selectFirst("debt,remaining", "id = ".$res['financeid']);
			      		// 	$party_res =$party->selectFirst("id, title,acronym", "id = ".$res['partyid']);
			      		// 	$outcome_res = $outcome->selectFirst("total", "id = ".$res['outcomeid']);
			      		// 	$income_res = $income->selectFirst("total", "id = ".$res['incomeid']);

			      		// 	echo "<tr>";
			      		// 	echo "<td title='".$party_res['acronym']."'><a href='party.php?p_id=".$party_res['id']."'>".$party_res['title']."</a></td>";
			      		// 	echo "<td>".$income_res['total']."</td>";
			      		// 	echo "<td>".$outcome_res['total']."</td>";
			      		// 	echo "<td>".$finance_res['remaining']."</td>";
			      		// 	echo "<td>".$finance_res['debt']."</td>";
			      		// 	echo "</tr>";
			      		// }
			      	?>
		      	</table>
			</div>
		</div>
	</div> -->

	<div class="poll">
		<div class="container">
			<h3 class="text-center">Санал асуулга</h3>
			<h5 class="text-center"><b>Шилэн Нам: </b>Таны бодлоор улс төрийн намуудын санхүүжилт ил тод байх ёстой юу?</h5>
			<form>
				<div class="radio"><label><input type="radio" name="poll">Тийм</label></div>
				<div class="radio"><label><input type="radio" name="poll">Үгүй</label></div>
				<div class="radio"><label><input type="radio" name="poll">Чухал биш</label></div>
			</form>
		</div>
	</div>

	<div class="contact">
		<div class="container">
			<div class="col-lg-4">
				<h3 class="text-center">Холбоо барих</h3>
			</div>
			<div class="col-lg-8">
				<form action="" class="form-horizontal">
					<div class="form-group col-md-4">
						<label for="firstname">НЭР:*</label><br/>
						<input type="text" id="firstname">
					</div>
					<div class="form-group col-md-4">
						<label for="email">И-МЭЙЛ:*</label><br/>
						<input type="text" id="email">
					</div>
					<div class="form-group col-md-8">
						<label for="message">МЭССЭЖ:*</label>
						<textarea class="form-control" rows="5" id="message"></textarea>
					</div>
					<div class="form-group col-md-8">
						<button type="submit" class="btn btn-default">ИЛГЭЭХ</button>
					</div>
				</form>
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