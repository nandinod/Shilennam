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
							echo "<blockquote>".$law['text']."</blockquote>";
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

	<div class="content">
		<div class="container economics" id="eco">
			<div class="col-lg-9 well well-sm">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#party-economics-tab-summary">Summary</a></li>
					<!-- 
					<li><a data-toggle='tab' href="#party-economics-tab-income">Income</a></li>
					<li><a data-toggle='tab' href="#party-economics-tab-outcome">Income</a></li> -->
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
								<li role="presentation"><a role="menuitem" href="economics.php?year=all#eco">Бүгд</a></li>
								<li role="presentation"><a role="menuitem" href="economics.php?year=2012#eco">2012</a></li>
								<li role="presentation"><a role="menuitem" href="economics.php?year=2008#eco">2008</a></li>
							</ul>
						</div>
						
						<?php
							if (isset($_GET['year'])) {
								if ($_GET['year'] == "all") {
									echo "<br><h4 class='text-primary'>";
									echo "Бүх оны сонгуулын санхүүжилт";
									echo "</h4>";
								} else {
									echo "<br><h4 class='text-primary'>";
									echo $_GET['year']." оны сонгуулын санхүүжилт";
									echo "</h4>";
								}
							} else {
								echo "<br><div class='alert alert-info'>Сонгуулын жил сонгоно уу!</div>";
							}
						?>

						<?php
							if (isset($_GET['request']) & isset($_GET['target'])) {
								$request = $_GET['request'];
								$target_id = $_GET['target'];

								if ($request == "income") {
									$result = $income->select("*", "id = ".$target_id);
									echo "<div class='table-responsive'>";
									echo "<table class='table table-condensed table-bordered table-hover' align='left'>";
									echo "<tr>";
							      	echo "<th>Нам, эвсэл, бие даан нэр дэвшигчийн өөрийн хөрөнгөөс өгсөн</th>";
							      	echo "<th>Хуулийн этгээдээс өгсөн хандив</th>";
							      	echo "<th>Иргэдээс өгсөн хандив</th>";
							      	echo "<th>Бусад</th>";
							      	echo "<th>талархан дэмжигч намаас</th>";
							      	echo "<th>Орлогын дүн</th>";
							      	echo "</tr>";
									foreach ($result as $row) {
										echo "<tr>";
										echo "<td>".$row['from_inside']."</td>";
										echo "<td>".$row['from_candidate']."</td>";
										echo "<td>".$row['from_people']."</td>";
										echo "<td>".$row['other_parties']."</td>";
										echo "<td>".$row['other']."</td>";
										echo "<td>".$row['total']."</td>";
										echo "</tr>";
									}
									echo "</table>";
									echo "</div>";

								} else if ($request == "outcome") {
									$result = $outcome->select("*", "id = ".$target_id);
									echo "<div class='table-responsive'>";
									echo "<table class='table table-condensed table-bordered table-hover' align='left'>";
									echo "<tr>";
							      	echo "<th>Нам, эвслийн мөрийн хөтөлбөрийг тайлбарлан таниулах</th>";
							      	echo "<th>Нэр дэвшигчийг сурталчлах</th>";
							      	echo "<th>Уулзалт, хурал цуглаан зохион байгуулах</th>";
							      	echo "<th>Ажилтан, ухуулагч, шадар туслагчийн хөлс, урамшуулал</th>";
							      	echo "<th>Бичиг хэрэг</th>";
							      	echo "<th>Шуудан холбоо</th>";
							      	echo "<th>Шатахуун, унаа</th>";
							      	echo "<th>Томилолт</th>";
							      	echo "<th>Бусад</th>";
							      	echo "<th>Зардлын дүн</th>";
							      	echo "</tr>";
									foreach ($result as $row) {
										echo "<tr>";
										echo "<td>".$row['presentation']."</td>";
										echo "<td>".$row['advertisement']."</td>";
										echo "<td>".$row['management']."</td>";
										echo "<td>".$row['employee_salary']."</td>";
										echo "<td>".$row['chancery']."</td>";
										echo "<td>".$row['mail_and_shipping']."</td>";
										echo "<td>".$row['transportation']."</td>";
										echo "<td>".$row['assignment']."</td>";
										echo "<td>".$row['other']."</td>";
										echo "<td>".$row['total']."</td>";
										echo "</tr>";
									}
									echo "</table>";
									echo "</div>";
								} 
							}
						?>
						<?php
						if (isset($_GET['year'])) {
							$year = $_GET['year'];
							if ($year == "all") {
								?>
								<div class='table-responsive'>
								<table class="table table-condensed table-bordered table-hover" align="left">
									<tr>
						      			<th><a href='parties.php?'>Улс төрийн нам</a></th>
						      			<th><a href="economics.php?year=<?php echo $year; ?>#eco">Огноо</a></th>
						      			<th><a href='economics.php?year=<?php echo $year; ?>#eco'>Нийт санхүүжилт</a></th>
						      			<th><a href='economics.php?year=<?php echo $year; ?>#eco'>Нийт үрэлт</a></th>
						      			<th><a href="economics.php?year=<?php echo $year; ?>#eco">Бэлэн байгаа</a></th>
						      			<th><a href="economics.php?year=<?php echo $year; ?>#eco">Өр зээл</a></th>
						      		</tr>
						      		<?php
						      			$result = $finance->select("id");
										foreach ($result as $row) {
											$result = $party_finance_list->select("financeid,partyid,outcomeid,incomeid", "financeid = ".$row['id']);
								      		foreach ($result as $res) {
								      			$finance_res = $finance->selectFirst("year,month,day,debt,remaining", "id = ".$res['financeid']);
								      			$party_res =$party->selectFirst("id, title, acronym", "id = ".$res['partyid']);
								      			$outcome_res = $outcome->selectFirst("id, total", "id = ".$res['outcomeid']);
								      			$income_res = $income->selectFirst("id, total", "id = ".$res['incomeid']);

								      			echo "<tr>";
								      			echo "<td title='".$party_res['acronym']."'><a href='party.php?p_id=".$party_res['id']."'>".$party_res['title']."</a></td>";
								      			echo "<td><a href='economics.php?year=".$year."#eco'>".$finance_res['day']."</a> / <a href='economics.php?year=".$year."#eco'>".$finance_res['month']."</a> / <a href='economics.php?year=".$year."#eco'>".$finance_res['year']."</a></td>";
								      			echo "<td><a href='economics.php?year=".$year."&request=income&target=".$income_res['id']."#eco'>".$income_res['total']."</a></td>";
								      			echo "<td><a href='economics.php?year=".$year."&request=outcome&target=".$outcome_res['id']."#eco'>".$outcome_res['total']."</a></td>";
								      			echo "<td>".$finance_res['remaining']."</td>";
								      			echo "<td>".$finance_res['debt']."</td>";
								      			echo "</tr>";
								      		}
										}
						      		?>
						      	</table>
								</div>
								<?php
							} else {
						?>
						<div class='table-responsive'>
							<table class="table table-condensed table-bordered table-hover" align="left">
								<tr>
					      			<th><a href='parties.php?'>Улс төрийн нам</a></th>
					      			<th><a href="economics.php?year=<?php echo $year; ?>#eco?">Огноо</a></th>
					      			<th><a href='economics.php?year=<?php echo $year; ?>#eco'>Нийт санхүүжилт</a></th>
					      			<th><a href='economics.php?year=<?php echo $year; ?>#eco'>Нийт үрэлт</a></th>
					      			<th><a href="economics.php?year=<?php echo $year; ?>#eco">Бэлэн байгаа</a></th>
						      		<th><a href="economics.php?year=<?php echo $year; ?>#eco">Өр зээл</a></th>
					      		</tr>
								<?php
									$result = $finance->select("id", "year = ".$year);
									foreach ($result as $row) {
										$result = $party_finance_list->select("financeid,partyid,outcomeid,incomeid", "financeid = ".$row['id']);
							      		foreach ($result as $res) {
							      			$finance_res = $finance->selectFirst("year,month,day,debt,remaining", "id = ".$res['financeid']);
							      			$party_res =$party->selectFirst("id, title, acronym", "id = ".$res['partyid']);
							      			$outcome_res = $outcome->selectFirst("id, total", "id = ".$res['outcomeid']);
							      			$income_res = $income->selectFirst("id, total", "id = ".$res['incomeid']);

							      			echo "<tr>";
							      			echo "<td title='".$party_res['acronym']."'><a href='party.php?p_id=".$party_res['id']."'>".$party_res['title']."</a></td>";
							      			echo "<td><a href='economics.php?year=".$year."#eco'>".$finance_res['day']."</a> / <a href='economics.php?year=".$year."#eco'>".$finance_res['month']."</a> / <a href='economics.php?year=".$year."#eco'>".$finance_res['year']."</a></td>";
							      			echo "<td><a href='economics.php?year=".$year."&request=income&target=".$income_res['id']."#eco'>".$income_res['total']."</a></td>";
							      			echo "<td><a href='economics.php?year=".$year."&request=outcome&target=".$outcome_res['id']."#eco'>".$outcome_res['total']."</a></td>";
							      			echo "<td>".$finance_res['remaining']."</td>";
							      			echo "<td>".$finance_res['debt']."</td>";
							      			echo "</tr>";
							      		}
									}
								?>
							</table>
						</div>
						<?php }
						} ?>
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