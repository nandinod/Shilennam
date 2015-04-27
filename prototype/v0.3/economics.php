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
		<div class="container economics" id="eco">
			<div class="col-lg-9 well well-sm">
				<!-- <ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#pane">Нэмэлт</a></li>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Нэмэлтүүд
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a data-toggle="tab" href="#pane1">Нэмэлт 1</a></li>
							<li><a data-toggle="tab" href="#pane2">Нэмэлт 2</a></li>
							<li><a data-toggle="tab" href="#pane3">Нэмэлт 3</a></li>
							<li><a data-toggle="tab" href="#pane4">Нэмэлт 4</a></li>
							<li><a data-toggle="tab" href="#pane5">Нэмэлт 5</a></li>
						</ul>
					</li>
				</ul> -->
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#party-economics-tab-summary">Summary</a></li>
					<li><a data-toggle="tab" href="#party-economics-tab-finance">Finance</a></li>
					<li><a data-toggle="tab" href="#party-economics-tab-income">Income</a></li>
					<li><a data-toggle="tab" href="#party-economics-tab-outcome">Outcome</a></li>
				</ul>
				<div class="tab-content">
					<?php
	      				$party_finance_list = new db_cn\Table("party_financial_list");
	      				$finance = new db_cn\Table("finance");
			      		$party = new db_cn\Table("party");
			      		$income = new db_cn\Table("income");
			      		$outcome = new db_cn\Table("outcome");
			      		$companies = new db_cn\Table("companies");
	      			?>
					<div id="party-economics-tab-summary" class="tab-pane fade in active">
						<p>
							Where does all that money come from? For the answers, view our money profiles for both major parties and for each 
							of their main fundraising committees. Select a party committee, then use the tabs above to view its information.
						</p>
						
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="election" data-toggle="dropdown">Сонгууль <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="election">
								<li role="presentation"><a role="menuitem" href="#">2014</a></li>
								<li role="presentation"><a role="menuitem" href="#">2013</a></li>
								<li role="presentation"><a role="menuitem" href="#">2012</a></li>
							</ul>
						</div>
						
						<div class="table-responsive">
							<table class="table table-condensed table-striped table-bordered table-hover" align="left">
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
					
					<div id="party-economics-tab-finance" class="tab-pane fade in">
						<div class="table-responsive">
							<table class="table table-condensed table-bordered table-hover">
								<tr>
					      			<th>Date</th>
					      			<th>Name</th>
					      			<th>Debt</th>
					      			<th>Remaining</th>
					      		</tr>
								<?php
									$result = $finance->select("*");
						      		foreach ($result as $res) {
						      			echo "<tr>";
						      			echo "<td>".$res['day']."/".$res['month']."/".$res['year']."</td>";
						      			echo "<td>".$res['name']."</td>";
						      			echo "<td>".$res['debt']."</td>";
						      			echo "<td>".$res['remaining']."</td>";
						      			echo "</tr>";
						      		}
								?>
							</table>
						</div>
					</div>
					<div id="party-economics-tab-income" class="tab-pane fade in">
						<div class="table-responsive">
							<table class="table table-condensed table-striped table-bordered">
								<tr>
					      			<th>From inside</th>
					      			<th>From people</th>
					      			<th>Other parties</th>
					      			<th>Other</th>
					      			<th>Total</th>					      		</tr>
								<?php
									$result = $income->select("*");
						      		foreach ($result as $res) {
						      			echo "<tr>";
						      			echo "<td>".$res['from_inside']."</td>";
						      			echo "<td>".$res['from_people']."</td>";
						      			echo "<td>".$res['other_parties']."</td>";
						      			echo "<td>".$res['other']."</td>";
						      			echo "<td>".$res['total']."</td>";
						      			echo "</tr>";
						      		}
								?>
							</table>
						</div>
					</div>
					<div id="party-economics-tab-outcome" class="tab-pane fade in">
						<div class="table-responsive">
							<table class="table table-condensed table-striped table-hover">
								<tr>
					      			<th>Presentation</th>
					      			<th>Advertisement</th>
					      			<th>Management</th>
					      			<th>Employee Salary</th>
					      			<th>Chancery</th>
					      			<th>Mail & Shipping</th>
					      			<th>Transportation</th>
					      			<th>Assignment</th>
					      			<th>Other</th>
					      			<th>Total</th>
					      		</tr>
								<?php
									$result = $outcome->select("*");
						      		foreach ($result as $res) {
						      			echo "<tr>";
						      			echo "<td>".$res['presentation']."</td>";
						      			echo "<td>".$res['advertisement']."</td>";
						      			echo "<td>".$res['management']."</td>";
						      			echo "<td>".$res['employee_salary']."</td>";
						      			echo "<td>".$res['chancery']."</td>";
						      			echo "<td>".$res['mail_and_shipping']."</td>";
						      			echo "<td>".$res['transportation']."</td>";
						      			echo "<td>".$res['assignment']."</td>";
						      			echo "<td>".$res['other']."</td>";
						      			echo "<td>".$res['total']."</td>";
						      			echo "</tr>";
						      		}
								?>
							</table>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-3">
				
				<div class="panel panel-default classification">
					<div class="panel-heading text-center">
						<span>АНГИЛАЛ</span>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li>АНГИЛАЛ 1
								<ul>
									<li>ДЭД АНГИЛАЛ 1</li>
									<li>ДЭД АНГИЛАЛ 2</li>
									<li>ДЭД АНГИЛАЛ 3</li>
								</ul>
							</li>
							<li>АНГИЛАЛ 2</li>
							<li>АНГИЛАЛ 3</li>
							<li>АНГИЛАЛ 4</li>
						</ul>
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